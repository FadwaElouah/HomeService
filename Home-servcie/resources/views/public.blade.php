<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Your Service | Provider Portal</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#FF7A22',
                        'primary-dark': '#E86D1A',
                        'primary-light': '#FFF8F3',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-white shadow-sm">
            <div class="container mx-auto px-4 py-4 flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="ml-2 text-xl font-bold">Home<span class="text-primary">Service</span></span>
                </div>
                <div>
                    <button class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Provider Dashboard
                    </button>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 container mx-auto px-4 py-8">
            <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
                <div class="bg-primary py-4 px-6">
                    <h1 class="text-xl font-semibold text-white">Submit Your Service</h1>
                </div>

                <div class="p-6">
                    <!-- Admin approval notice -->
                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-6">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-yellow-700">
                                    Your submission will be reviewed by an administrator before being published.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Publication Form -->
                    <form id="publication-form" class="space-y-6">
                        <!-- Image Upload -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">
                                Service Image
                            </label>
                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                <div class="space-y-1 text-center">
                                    <div id="preview-container" class="hidden mb-3">
                                        <img id="image-preview" class="mx-auto h-32 object-cover" src="#" alt="Preview">
                                    </div>
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex text-sm text-gray-600">
                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-primary hover:text-primary-dark">
                                            <span>Upload an image</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only" accept="image/*" required>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500">
                                        PNG, JPG, GIF up to 5MB
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Title -->
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-700 mb-1">
                                Service Title
                            </label>
                            <input type="text" name="title" id="title" class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="e.g. Professional Plumbing Service" required>
                        </div>

                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">
                                Price (DH)
                            </label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <input type="number" name="price" id="price" class="focus:ring-primary focus:border-primary block w-full pr-12 sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="0.00" required>
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">DH</span>
                                </div>
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">
                                Phone Number
                            </label>
                            <input type="tel" name="phone" id="phone" class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="e.g. 0612345678" required>
                        </div>

                        <!-- Description -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">
                                Service Description
                            </label>
                            <textarea id="description" name="description" rows="4" class="shadow-sm focus:ring-primary focus:border-primary block w-full sm:text-sm border-gray-300 rounded-md p-2 border" placeholder="Describe your service in detail..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="flex justify-end">
                            <button type="submit" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                                Submit for Review
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </main>

        <!-- Success Modal (Hidden by default) -->
        <div id="success-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg p-6 max-w-md mx-4">
                <div class="flex items-center justify-center w-12 h-12 rounded-full bg-green-100 mx-auto mb-4">
                    <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-center mb-2">Submission Successful!</h3>
                <p class="text-gray-600 text-center mb-4">
                    Your service has been submitted for review. An administrator will review your submission and publish it once approved.
                </p>
                <div class="flex justify-center">
                    <button id="close-modal" class="bg-primary hover:bg-primary-dark text-white px-4 py-2 rounded-md text-sm font-medium transition-colors">
                        Close
                    </button>
                </div>
            </div>
        </div>

        /html>
        <!-- Footer -->
     <footer class="bg-[#d9d9d9] py-10 px-4">
       <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8">
         <!-- Logo and Description -->
         <div>
           <a href="/" class="flex items-center mb-4">
             <div class="relative h-8 w-8 mr-2">
               <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-8 w-8">
                 <path
                   d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                   fill="#FD7600"
                   stroke="#FD7600"
                   stroke-width="2"
                   stroke-linecap="round"
                   stroke-linejoin="round"
                 />
               </svg>
             </div>
             <span class="font-bold text-xl">
               <span class="text-[#FD7600]">Home</span>Service
             </span>
           </a>
           <p class="text-sm text-gray-600">
             It is a long established fact that a reader will be distracted by the readable content of a page when
             looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
           </p>
         </div>

         <!-- Community -->
         <div>
           <h3 class="font-bold text-lg mb-4">Community</h3>
           <ul class="space-y-2">
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Become A Seller
               </a>
             </li>
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Become A Buyer
               </a>
             </li>
           </ul>
         </div>

         <!-- Category -->
         <div>
           <h3 class="font-bold text-lg mb-4">Category</h3>
           <ul class="space-y-2">
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Electronics
               </a>
             </li>
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Cleaning
               </a>
             </li>
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Home Move
               </a>
             </li>
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Salon & Spa
               </a>
             </li>
             <li>
               <a href="#" class="text-gray-600 hover:text-[#FD7600]">
                 • Digital Marketing
               </a>
             </li>
           </ul>
         </div>

         <!-- Contact Info -->
         <div>
           <h3 class="font-bold text-lg mb-4">Contact Info</h3>
           <ul class="space-y-2">
             <li class="text-gray-600">• 41/1 Hilton Mall, NY City</li>
             <li class="text-gray-600">• +012-78901234</li>
             <li class="text-gray-600">• example@mail.com</li>
           </ul>
           <div class="flex space-x-4 mt-4">
             <a href="#" class="text-[#3b5998] hover:text-[#FD7600]">
               <i class="fab fa-facebook-f"></i>
             </a>
             <a href="#" class="text-[#55acee] hover:text-[#FD7600]">
               <i class="fab fa-twitter"></i>
             </a>
             <a href="#" class="text-[#007ab9] hover:text-[#FD7600]">
               <i class="fab fa-linkedin-in"></i>
             </a>
           </div>
         </div>
       </div>

       <!-- Copyright -->
       <div class="max-w-7xl mx-auto mt-8 pt-6 border-t border-gray-300 text-center text-gray-600">
         All copyright © 2025 Reserved
       </div>
     </footer>


    </div>

    <script>
        // Image preview functionality
        const fileUpload = document.getElementById('file-upload');
        const imagePreview = document.getElementById('image-preview');
        const previewContainer = document.getElementById('preview-container');

        fileUpload.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }

                reader.readAsDataURL(file);
            }
        });

        // Form submission
        const form = document.getElementById('publication-form');
        const successModal = document.getElementById('success-modal');
        const closeModal = document.getElementById('close-modal');

        form.addEventListener('submit', function(event) {
            event.preventDefault();

            // Here you would normally send the data to your server
            // For this example, we'll just show the success modal

            // Simulate server request
            setTimeout(() => {
                successModal.classList.remove('hidden');
            }, 1000);
        });

        closeModal.addEventListener('click', function() {
            successModal.classList.add('hidden');
            form.reset();
            previewContainer.classList.add('hidden');
        });

        document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
    window.location.href = 'public.html'; 
});
    </script>
</body>
</html>
