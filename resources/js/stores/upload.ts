import { defineStore } from "pinia";
import { get } from "lodash";
import Dropzone from "dropzone";

Dropzone.autoDiscover = false;

type UploadStoreState = {
    title: string;
    description: string;
    error_message: string;
    progress: number;
    video_id: string | null;
    is_file_added: boolean;
    is_complete: boolean;
    dropzone: Dropzone | null;
};

type UploadStoreAction = {
    initDropzone: (element: string) => Promise<void>;
    openSelectDialog: () => Promise<void> | void;
    onFileSelected: () => void;
};

export const useUploadStore = defineStore<
    "upload",
    UploadStoreState,
    {},
    UploadStoreAction
>("upload", {
    state: () => ({
        title: "",
        description: "",
        error_message: "",
        video_id: null,
        progress: 0,
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

            dropzone.on("uploadprogress", (_file, progress, _) => {
                this.progress = progress;
            });

            dropzone.on("success", (_, response) => {
                this.is_complete = true;
                this.video_id = get(response, "video.id");
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
    },
    getters: {},
});
