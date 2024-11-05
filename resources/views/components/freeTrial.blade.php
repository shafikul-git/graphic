<x-form action="{{ route('freeTrial.store') }}" method="POST" class="py-4 px-9" enctype="multipart/form-data">
    <div class="mb-2">
        <label for="name" class="mb-1 block text-base font-medium text-[#07074D]">
            Enter Your Name*
        </label>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" required
            value="{{ old('name') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md" />
        @error('name')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-2">
        <label for="country" class="mb-1 block text-base font-medium text-[#07074D]">
            Enter Your Country*
        </label>
        <input type="text" name="country" id="country" placeholder="Enter Your Country" required
            value="{{ old('country') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md" />
        @error('country')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-2">
        <label for="email" class="mb-1 block text-base font-medium text-[#07074D]">
            Enter Your Email*
        </label>
        <input type="email" name="email" id="email" placeholder="example@domain.com" required
            value="{{ old('email') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md" />
        @error('email')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-2">
        <label for="category" class="mb-1 block text-base font-medium text-[#07074D]">
            Select Category*
        </label>
        <select name="category" id="category"  class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md">
            <option value="" selected>Select Category</option>
            <option value="newborn" {{ old('category') == 'newborn' ? 'selected' : '' }}>New Born</option>
            <option value="metarnity" {{ old('category') == 'metarnity' ? 'selected' : '' }}>metarnity</option>
            <option value="boudir" {{ old('category') == 'boudir' ? 'selected' : '' }}>boudir</option>
            <option value="realstate" {{ old('category') == 'boudir' ? 'selected' : '' }}>real state</option>
        </select>
        @error('category')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>
    <div class="mb-2">
        <label for="instruction" class="mb-1 block text-base font-medium text-[#07074D]">
            Enter Your Instruction*
        </label>
        <textarea name="instruction" id="instruction" cols="15" rows="3" placeholder="Enter your instructions here" required
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md">{{ old('instruction') }}</textarea>
        @error('instruction')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

     <div class="mb-2">
        <label for="fileLink" class="mb-1 block text-base font-medium text-[#07074D]">
            If you have the file link <span class="text-sm font-normal" >(optional)</span>
        </label>
        <input type="text" name="fileLink" id="fileLink" placeholder="https://..."
            value="{{ old('fileLink') }}"
            class="w-full rounded-md border border-[#e0e0e0] bg-white py-1  outline-none focus:border-[#6A64F1] focus:shadow-md" />
        @error('fileLink')
            <p class="text-red-500">{{ $message }}</p>
        @enderror
    </div>

    <div class="mb-6 pt-4">
        <div id="drop-area"
            class="relative flex min-h-[100px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-7 text-center bg-white hover:bg-slate-200 cursor-pointer transition-all duration-500">
            <input type="file" name="files[]" id="file" class="sr-only" multiple />
            <div>
                <span class="mb-2 block text-xl font-semibold text-[#07074D]">
                    Drop files here
                </span>
                <span class="mb-2 block ">
                    Or
                </span>
                <span
                    class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-base font-medium text-[#07074D]">
                    Browse
                </span>
            </div>
        </div>
    </div>
    @error('files.*')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
    <div id="file-preview" class="mb-6"></div>

    <div>
        <button type="submit"
            class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
            Send File
        </button>
    </div>
</x-form>



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
        fileItem.classList.add('flex', 'items-center', 'justify-between', 'mb-2', 'p-2', 'border', 'border-gray-200',
            'rounded-md', 'bg-gray-50');

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
