@include('partials.header')

<body class="bg-gray-100 min-h-screen">
    <!-- Header -->
    <header class="bg-blue-600 border-b-4 border-black shadow-[0_4px_0_0_rgba(0,0,0,1)]">
        <div class="max-w-6xl mx-auto flex justify-between items-center px-4 py-6">
            <h1 class="text-white text-xl sm:text-2xl leading-tight drop-shadow-[2px_2px_0_rgba(0,0,0,1)]">
                SUBMIT BUILD
            </h1>
            <a
                href="{{ route('profile.show', Auth::user()->username) }}"
                class="text-gray-800 text-center bg-white hover:bg-gray-200 border-2 border-black [box-shadow:inset_-4px_-4px_0px_0px_rgba(0,0,0,0.5)] transition-all font-bold text-base px-3 py-2 uppercase">
                EXIT
            </a>
        </div>
    </header>
    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-8">

        <div class="bg-white border-2 border-black shadow-[4px_4px_0_0_rgba(0,0,0,0.3)] p-6 md:p-8">

            <div class="mb-8">
                <h2 class="text-lg sm:text-xl text-gray-800 mb-2">SHARE YOUR CREATION</h2>
                <p class="text-gray-600 text-lg">Fill out the form below to share your amazing Minecraft build with the community!</p>
            </div>

            <form id="buildForm" class="space-y-6">

                <!-- Thumbnail Upload -->
                <div>
                    <label class="block text-gray-800 text-xs mb-3 uppercase">
                        THUMBNAIL IMAGE *
                    </label>
                    <div class="file-input-wrapper">
                        <label for="thumbnail" class="cursor-pointer block">
                            <div id="thumbnailPreview" class="w-full max-w-xl h-64 bg-gray-100 border-2 border-dashed border-gray-400 flex items-center justify-center hover:border-blue-600 transition-colors">
                                <div class="text-center">
                                    <svg class="w-12 h-12 mx-auto mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="text-gray-600 text-sm uppercase font-bold">Click to upload thumbnail</p>
                                    <p class="text-gray-500 text-sm mt-1">PNG, JPG (MAX. 5MB)</p>
                                </div>
                            </div>
                        </label>
                        <input type="file" id="thumbnail" accept="image/*" required>
                    </div>
                </div>

                <!-- Build Name -->
                <div>
                    <label for="buildName" class="block text-gray-800 text-xs mb-2 uppercase">
                        BUILD NAME *
                    </label>
                    <input
                        type="text"
                        id="buildName"
                        required
                        class="w-full px-3 py-3 bg-gray-100 text-gray-900 border-2 border-gray-400 text-lg focus:outline-none focus:border-blue-600 transition-colors placeholder-gray-500"
                        placeholder="e.g., Medieval Castle" />
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block text-gray-800 text-xs mb-2 uppercase">
                        CATEGORY *
                    </label>
                    <select
                        id="category"
                        required
                        class="w-full px-3 py-3 bg-gray-100 text-gray-900 border-2 border-gray-400 text-lg focus:outline-none focus:border-blue-600 transition-colors cursor-pointer uppercase">
                        <option value="">SELECT A CATEGORY</option>
                        <option value="castle">CASTLE</option>
                        <option value="house">HOUSE</option>
                        <option value="farm">FARM</option>
                        <option value="redstone">REDSTONE</option>
                        <option value="statue">STATUE</option>
                        <option value="pixel-art">PIXEL ART</option>
                        <option value="city">CITY</option>
                        <option value="survival">SURVIVAL BASE</option>
                        <option value="other">OTHER</option>
                    </select>
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-gray-800 text-xs mb-2 uppercase">
                        DESCRIPTION *
                    </label>
                    <textarea
                        id="description"
                        required
                        rows="6"
                        class="w-full px-3 py-3 bg-gray-100 text-gray-900 border-2 border-gray-400 text-lg focus:outline-none focus:border-blue-600 transition-colors resize-none placeholder-gray-500"
                        placeholder="Describe your build, what inspired you, any special features..."></textarea>
                </div>

                <!-- Materials -->
                <div>
                    <label for="materials" class="block text-gray-800 text-xs mb-2 uppercase">
                        MATERIALS NEEDED *
                    </label>
                    <textarea
                        id="materials"
                        required
                        rows="5"
                        class="w-full px-3 py-3 bg-gray-100 text-gray-900 border-2 border-gray-400 text-lg focus:outline-none focus:border-blue-600 transition-colors resize-none placeholder-gray-500"
                        placeholder="List the materials needed:&#10;- Stone bricks x500&#10;- Oak wood x200&#10;- Glass x100&#10;..."></textarea>
                </div>

                <!-- Step by Step Images -->
                <div class="border-t-2 border-gray-300 pt-6">
                    <label class="block text-gray-800 text-xs uppercase mb-4">
                        STEP-BY-STEP GUIDE
                    </label>

                    <div id="stepsContainer" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Steps will be added here dynamically -->
                    </div>

                    <button
                        type="button"
                        id="addStepBtn"
                        class="mt-4 w-full button-mc text-white [box-shadow:inset_-4px_-4px_0px_0px_rgba(0,0,0,0.5)] bg-green-600 hover:bg-green-700 border-2 border-black transition-all font-bold text-sm px-3 py-4 uppercase">
                        + ADD STEP
                    </button>

                    <p class="text-gray-500 text-sm mt-3">Add images showing how to build this step by step</p>
                </div>

                <!-- Submit Button -->
                <div class="flex flex-col sm:flex-row gap-3 pt-6 border-t-2 border-gray-300">
                    <button
                        type="submit"
                        class="flex-1 text-white bg-blue-600 hover:bg-blue-700 border-2 border-black [box-shadow:inset_-4px_-4px_0px_0px_rgba(0,0,0,0.5)] transition-all font-bold text-sm px-8 py-4 uppercase">
                        SUBMIT BUILD
                    </button>
                    <a
                        href="{{ route('profile.show', Auth::user()->username) }}"
                        class="flex-1 sm:flex-initial text-gray-800 text-center bg-white hover:bg-gray-200 border-2 border-black [box-shadow:inset_-4px_-4px_0px_0px_rgba(0,0,0,0.5)] transition-all font-bold text-sm px-8 py-4 uppercase">
                        CANCEL
                    </a>
                </div>

            </form>

        </div>

    </main>

    <script>
        let stepCounter = 0;

        // Thumbnail preview
        document.getElementById('thumbnail').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('thumbnailPreview').innerHTML = `
                        <img src="${e.target.result}" class="w-full h-full object-cover preview-image" alt="Thumbnail preview">
                    `;
                };
                reader.readAsDataURL(file);
            }
        });

        // Add step functionality
        document.getElementById('addStepBtn').addEventListener('click', function() {
            stepCounter++;
            const stepId = `step-${stepCounter}`;

            const stepHTML = `
                    <div class="step-item bg-gray-50 border-2 border-gray-300 p-4" id="${stepId}">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-xs font-bold text-gray-800 uppercase">STEP ${stepCounter}</h3>
                            <button type="button" class="remove-step text-red-600 hover:text-red-800 font-bold text-xs" data-step="${stepId}">
                                ✕ REMOVE
                            </button>
                        </div>
                        
                        <div class="space-y-3">
                            
                            <div>
                                <div class="file-input-wrapper">
                                    <label class="cursor-pointer block">
                                        <div class="step-preview-${stepCounter} w-full aspect-square bg-white border-2 border-dashed border-gray-300 flex items-center justify-center hover:border-blue-600 transition-colors">
                                            <div class="text-center">
                                                <svg class="w-8 h-8 mx-auto mb-2 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="square" stroke-linejoin="miter" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                </svg>
                                                <p class="text-gray-600 text-sm font-bold uppercase">Upload Image</p>
                                            </div>
                                        </div>
                                    </label>
                                    <input type="file" accept="image/*" class="step-image-input" data-preview="step-preview-${stepCounter}">
                                </div>
                            </div>
                        </div>
                    </div>
                `;

            document.getElementById('stepsContainer').insertAdjacentHTML('beforeend', stepHTML);

            // Add event listener for the new step's image input
            const newStep = document.getElementById(stepId);
            const imageInput = newStep.querySelector('.step-image-input');
            imageInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                const previewClass = this.getAttribute('data-preview');
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        document.querySelector('.' + previewClass).innerHTML = `
                            <img src="${e.target.result}" class="w-full h-full object-cover preview-image" alt="Step preview">
                        `;
                    };
                    reader.readAsDataURL(file);
                }
            });
        });

        // Remove step functionality (using event delegation)
        document.getElementById('stepsContainer').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-step')) {
                const stepId = e.target.getAttribute('data-step');
                document.getElementById(stepId).remove();

                // Renumber remaining steps
                const steps = document.querySelectorAll('.step-item');
                steps.forEach((step, index) => {
                    const heading = step.querySelector('h3');
                    if (heading) {
                        heading.textContent = `STEP ${index + 1}`;
                    }
                });
                stepCounter = steps.length;
            }
        });

        // Form submission
        document.getElementById('buildForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Collect form data
            const formData = {
                thumbnail: document.getElementById('thumbnail').files[0]?.name,
                buildName: document.getElementById('buildName').value,
                category: document.getElementById('category').value,
                description: document.getElementById('description').value,
                materials: document.getElementById('materials').value,
                steps: []
            };

            // Collect steps data
            document.querySelectorAll('.step-item').forEach(step => {
                const description = step.querySelector('input[type="text"]').value;
                const image = step.querySelector('input[type="file"]').files[0]?.name;
                formData.steps.push({
                    description,
                    image
                });
            });

            console.log('Form Data:', formData);
            alert('Build submitted successfully! (Check console for data)');
        });
    </script>

</body>

</html>