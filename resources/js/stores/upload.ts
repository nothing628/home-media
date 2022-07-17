import { defineStore } from "pinia";
import { get } from "lodash";
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

type UploadStoreState = {
    title: string;
    description: string;
    error_message: string;
    progress: number;
    file_size: number;
    file_sent: number;
    time_start: number | null;
    speed: number;
    video_id: string | null;
    is_file_added: boolean;
    is_complete: boolean;
    dropzone: Dropzone | null;
};

type UploadStoreAction = {
    initDropzone: (element: string) => Promise<void>;
    openSelectDialog: () => Promise<void> | void;
    onFileSelected: () => void;
    stopUpload: () => Promise<void> | void;
};

type UploadStoreGetter = {
    file_remain: (state: UploadStoreState) => number;
    time_remain: (state: UploadStoreState) => number;
};

export const useUploadStore = defineStore("upload", {
    state: () => ({
        title: "",
        description: "",
        error_message: "",
        video_id: null,
        progress: 0,
        file_size: 0,
        file_sent: 0,
        time_start: null,
        speed: 0,
        is_file_added: false,
        is_complete: false,
        dropzone: null,
    }),
    actions: {
        onFileSelected() {
            const dropzone: Dropzone | null = this.dropzone;

            if (dropzone == null) return;

            const containerElement = dropzone.element;
            const inputElement: HTMLInputElement =
                containerElement.querySelector("input[type=file]");
            const files = inputElement.files;

            for (let i = 0; i < files.length; i++) {
                const currentFile: any = files.item(i);
                dropzone.addFile(currentFile);
            }
        },
        async initDropzone(elementSelector: string) {
            const element: HTMLElement =
                document.querySelector(elementSelector);
            const inputElement: HTMLInputElement =
                element.querySelector("input[type=file]");

            if (!inputElement) {
                throw "The container element should contain input element";
            }

            inputElement.addEventListener("change", this.onFileSelected);

            const dropzone = new Dropzone(element, {
                url: "/api/upload",
                autoProcessQueue: true,
                autoQueue: true,
                chunking: true,
                chunkSize: 1024 * 256,
                forceChunking: true,
                disablePreviews: true,
            });

            dropzone.on("error", (file, message) => {
                dropzone.removeFile(file);
                this.is_file_added = false;

                if (typeof message == "string") this.error_message = message;
                else this.error_message = message.message;
            });

            dropzone.on("uploadprogress", (file, progress, byteSent) => {
                const currentTime = new Date().getTime();
                this.progress = progress;
                this.file_size = file.size;

                if (this.time_start) {
                    const deltaTime = currentTime - this.time_start;
                    const deltaSize = byteSent - this.file_sent;

                    this.speed = deltaSize / (deltaTime / 1000);
                }

                this.file_sent = byteSent;
                this.time_start = currentTime;
            });

            dropzone.on("success", (_, response) => {
                this.is_complete = true;
                this.video_id = get(response, "video.id");
                this.time_start = null;
            });

            dropzone.on("addedfile", (_) => {
                this.error_message = "";
                this.is_file_added = true;
            });

            this.dropzone = dropzone;
        },
        async openSelectDialog() {
            const dropzone: Dropzone | null = this.dropzone;

            if (dropzone == null) return;

            const elem = dropzone.element;
            const input: HTMLInputElement =
                elem.querySelector("input[type=file]");

            if (input) input.click();
        },
        stopUpload() {
            const dropzone: Dropzone = this.dropzone;
            const files = dropzone.getFilesWithStatus("uploading");

            if (files.length) {
                dropzone.cancelUpload(files[0]);

                this.is_file_added = false;
                this.is_complete = false;
                this.video_id = null;
                this.progress = 0;
            }
        },
    },
    getters: {
        file_remain(state) {
            const fileSize = state.file_size;
            const fileSent = state.file_sent;
            const fileRemain = fileSize - fileSent;

            return fileRemain;
        },
        time_remain(state) {
            const file_remain = this.file_remain;
            const speed = state.speed;
            const time_remain = file_remain / speed;

            return time_remain;
        }
    },
});
