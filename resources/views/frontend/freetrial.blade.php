<div class="grid grid-cols-1 md:grid-cols-3 bg-indigo-50 my-6 rounded-md">
    <div class="col-span-2 livvicFontFamily flex justify-center items-center rounded-md" style="background-size: cover;  background-image: url('https://helpx-prod.scene7.com/is/image/HelpxProdLoc/exposure-adjustments-PSE?$pjpeg$&jpegSize=200&wid=1200')">
        <div class="p-[2rem] md:p-[4rem] lg:p-[7rem] bg-[#00000086]">
            <h2 class="font-extrabold text-[3rem] md:text-[5rem] capitalize text-white">try for free</h2>
            <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, ipsa explicabo quidem itaque quo optio
                alias
                deleniti? Nesciunt, accusamus? Porro?</p>
        </div>
    </div>
    <div class="">
        <div class="flex items-center justify-center">
            <div class="mx-auto w-full max-w-[550px] bg-transparent">
                <x-form action="{{ route('freeTrial') }}" method="POST" class="py-4 px-9">
                    <div class="mb-2">
                        <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
                            Enter Your Name*
                        </label>
                        <input type="text" name="name" id="name" placeholder="Enter Your Name" required value="{{ old('name') }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-2">
                        <label for="country" class="mb-1 block text-base font-medium text-[#07074D]">
                            Enter Your Country*
                        </label>
                        <input type="text" name="country" id="country" placeholder="Enter Your Country" required value="{{ old('country') }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-2">
                        <label for="email" class="mb-1 block text-base font-medium text-[#07074D]">
                            Enter Your Email*
                        </label>
                        <input type="email" name="email" id="email" placeholder="example@domain.com" required value="{{ old('email') }}"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div class="mb-6 pt-4">
                        <div id="drop-area" class="relative flex min-h-[150px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center bg-white hover:bg-slate-200 cursor-pointer transition-all duration-500">
                            <input type="file" name="files[]" id="file" class="sr-only" multiple />
                            <div>
                                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                                    Drop files here
                                </span>
                                <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                    Or
                                </span>
                                <span class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                                    Browse
                                </span>
                            </div>
                        </div>
                    </div>
                
                    <div id="file-preview" class="mb-6"></div>

                    <div>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Send File
                        </button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
</div>


<script>
    const dropArea = document.getElementById('drop-area');
    const fileInput = document.getElementById('file');
    const filePreview = document.getElementById('file-preview');
    let filesList = [];

    // Prevent default behavior
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, preventDefaults, false);
    });

    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    }

    // Highlight drop area when file is dragged over it
    ['dragenter', 'dragover'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.add('bg-slate-200'), false);
    });
    ['dragleave', 'drop'].forEach(eventName => {
        dropArea.addEventListener(eventName, () => dropArea.classList.remove('bg-slate-200'), false);
    });

    // Handle dropped files
    dropArea.addEventListener('drop', (e) => {
        const files = Array.from(e.dataTransfer.files);
        addFiles(files);
    });

    // Handle file selection via input
    fileInput.addEventListener('change', () => {
        const files = Array.from(fileInput.files);
        addFiles(files);
    });

    function addFiles(files) {
        files.forEach(file => {
            if (!filesList.includes(file)) {
                filesList.push(file);
                displayFile(file);
            }
        });
        updateFileInput();
    }

    function displayFile(file) {
        const fileItem = document.createElement('div');
        fileItem.classList.add('flex', 'items-center', 'justify-between', 'mb-2', 'p-2', 'border', 'border-gray-200', 'rounded-md', 'bg-gray-50');

        const fileInfo = document.createElement('div');
        fileInfo.classList.add('flex', 'items-center');
        
        const fileIcon = document.createElement('span');
        fileIcon.classList.add('mr-2', 'text-gray-500');
        fileIcon.innerHTML = '📄'; // File icon

        const fileName = document.createElement('span');
        fileName.textContent = file.name;

        fileInfo.appendChild(fileIcon);
        fileInfo.appendChild(fileName);
        
        const deleteButton = document.createElement('button');
        deleteButton.classList.add('text-red-500', 'hover:text-red-700', 'font-medium');
        deleteButton.textContent = 'Delete';
        deleteButton.onclick = () => removeFile(file, fileItem);

        fileItem.appendChild(fileInfo);
        fileItem.appendChild(deleteButton);

        filePreview.appendChild(fileItem);
    }

    function removeFile(file, fileItem) {
        filesList = filesList.filter(f => f !== file);
        filePreview.removeChild(fileItem);
        updateFileInput();
    }

    function updateFileInput() {
        const dataTransfer = new DataTransfer();
        filesList.forEach(file => dataTransfer.items.add(file));
        fileInput.files = dataTransfer.files;
    }

    // Optional: Open file dialog when clicking the drop area
    dropArea.addEventListener('click', () => fileInput.click());
</script>