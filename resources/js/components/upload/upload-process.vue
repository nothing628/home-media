<template>
    <div>
        <div class="flex flex-wrap -mx-[15px]">
            <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                <div>
                    <h6 class="mb-4 text-[#333] text-base font-medium">Upload Details</h6>
                </div>
            </div>
            <div class="relative w-full px-[15px] lg:w-1/6 lg:flex-shrink-0 lg:flex-grow-0 lg:basis-1/6">
                <div class="w-full pt-[56%] rounded-[3px] bg-[#8781bd]"></div>
            </div>
            <div class="relative w-full px-[15px] lg:w-5/6 lg:flex-shrink-0 lg:flex-grow-0 lg:basis-5/6">
                <div class="text-black font-semibold">Contrary to popular belief, Lorem Ipsum (2020) is not.</div>
                <div class="text-[11px]">102.6 MB . 2:13 MIN Remaining</div>
                <div class="progress">
                    <div class="my-[14px] h-2 rounded-sm flex overflow-hidden text-xs bg-[#e9ecef]">
                        <div class="w-3/4 bg-[#07bf67] flex flex-col justify-center overflow-hidden text-white text-center whitespace-nowrap progressbar-content-bg-animated"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: 75%"></div>
                    </div>
                    <div class="absolute right-[18px] top-0">
                        <a href="#"><i class="fas fa-times-circle"></i></a>
                    </div>
                </div>
                <div class="text-[12px] opacity-70">Your Video is still uploading, please keep this page open until it's
                    done.
                </div>
            </div>
        </div>
        <hr class="my-4 border-0 border-t border-t-black/10 box-content">
        <div class="flex flex-wrap -mx-[15px]">
            <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                <div>
                    <div class="flex flex-wrap -mx-[15px]">
                        <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                            <div class="mb-4">
                                <label class="text-xs font-semibold mb-[5px] inline-block" for="e1">Video Title</label>
                                <input type="text" placeholder="Contrary to popular belief, Lorem Ipsum (2020) is not."
                                    id="e1"
                                    class="block w-full py-1.5 px-3 text-[#495057] text-[13px] leading-normal border border-[#dcdfdf] rounded-sm bg-[#eceff0]">
                            </div>
                        </div>
                        <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                            <div class="mb-4">
                                <label class="text-xs font-semibold mb-[5px] inline-block" for="e2">About</label>
                                <textarea rows="3" id="e2" name="e2"
                                    class="block w-full py-1.5 px-3 text-[#495057] text-[13px] leading-normal border border-[#dcdfdf] rounded-sm bg-[#eceff0]">Description</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-[15px]">
                        <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                            <div class="mb-4">
                                <label class="text-xs font-semibold mb-[5px] inline-block" for="e3">Orientation</label>
                                <select id="e3"
                                    class="block w-full py-1.5 px-3 text-[#495057] text-[13px] leading-normal border border-[#dcdfdf] rounded-sm bg-[#eceff0]">
                                    <option>Straight</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-[15px]">
                        <div class="relative w-full px-[15px] lg:w-full lg:flex-shrink-0 lg:flex-grow-0 lg:basis-full">
                            <div>
                                <h6 class="mb-4 text-[#333] text-base font-medium">Category ( you can select upto 6
                                    categories )</h6>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-[15px]">
                        <div class="relative w-1/3 px-[15px] flex-shrink-0 flex-grow-0 basis-1/3 lg:w-1/6 lg:basis-1/6">
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="customCheck1">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="customCheck1">Abaft</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="customCheck2">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="customCheck2">Brick</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="customCheck3">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="customCheck3">Purpose</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="customCheck4">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="customCheck4">Shallow</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="customCheck5">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="customCheck5">Spray</label>
                            </div>
                        </div>

                        <div class="relative w-1/3 px-[15px] flex-shrink-0 flex-grow-0 basis-1/3 lg:w-1/6 lg:basis-1/6">
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="zcustomCheck1">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="zcustomCheck1">Cemetery</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="zcustomCheck2">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="zcustomCheck2">Trouble</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="zcustomCheck3">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="zcustomCheck3">Pin</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="zcustomCheck4">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="zcustomCheck4">Fall</label>
                            </div>
                            <div class="relative block min-h-[1.5rem] pl-6 mb-1.5">
                                <input type="checkbox" class="absolute w-4 h-5 left-0 opacity-0 custom-control-input"
                                    id="zcustomCheck5">
                                <label
                                    class="relative mb-0 align-top text-xs font-semibold inline-block custom-control-label"
                                    for="zcustomCheck5">Leg</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <button
                        class="text-center text-[#07bf67] text-base leading-6 border border-[#07bf67] py-1.5 px-3">Save
                        Changes</button>
                </div>
                <hr class="my-4 border-0 border-t border-t-black/10 box-content">
                <div class="text-center">
                    <p class="mb-0">Please read our <a href="#">Terms of Service</a> and <a href="#">Community
                            Guidelines</a>.</p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
@keyframes progress-bar-stripes {
    from {
        background-position: 16px 0;
    }

    to {
        background-position: 0 0;
    }
}

.progressbar-content-bg-animated {
    animation: progress-bar-stripes 1s linear infinite;
    background-image: linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-size: 1rem 1rem;
}

.custom-control-label::before {
    border-radius: 2px;
    content: "";
    display: block;
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    pointer-events: none;
    width: 1rem;
    height: 1rem;
    background: #fff;
    border: 1px solid #adb5bd;
}

.custom-control-label::after {
    position: absolute;
    top: 0.25rem;
    left: -1.5rem;
    display: block;
    width: 1rem;
    height: 1rem;
    content: "";
    background: no-repeat 50%/50% 50%;
}

.custom-control-input:checked~.custom-control-label::after {
    background-image: url('/images/checklist.svg');
}

.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    background-color: #007bff;
    border-color: #007bff;
}
</style>
