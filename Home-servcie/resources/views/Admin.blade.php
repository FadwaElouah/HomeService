<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Publication Review</title>
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
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium">Admin Panel</span>
                    <div class="relative">
                        <button class="flex items-center space-x-1 focus:outline-none">
                            <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="hidden md:inline-block text-sm font-medium">Admin</span>
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 container mx-auto px-4 py-8">
            <div class="mb-6 flex flex-col md:flex-row md:items-center md:justify-between">
                <h1 class="text-2xl font-bold text-gray-800 mb-2 md:mb-0">Publication Review</h1>
                <div class="flex items-center space-x-2">
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                        <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-yellow-400" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3" />
                        </svg>
                        Pending: <span id="pending-count">5</span>
                    </span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                        <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-green-400" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3" />
                        </svg>
                        Approved: <span id="approved-count">0</span>
                    </span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                        <svg class="-ml-0.5 mr-1.5 h-2 w-2 text-red-400" fill="currentColor" viewBox="0 0 8 8">
                            <circle cx="4" cy="4" r="3" />
                        </svg>
                        Rejected: <span id="rejected-count">0</span>
                    </span>
                </div>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 mb-6">
                <nav class="-mb-px flex space-x-8">
                    <a href="#" class="border-primary text-primary whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Pending Review
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Approved
                    </a>
                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                        Rejected
                    </a>
                </nav>
            </div>

            <!-- Publications List -->
            <div class="space-y-6" id="publications-container">
                <!-- Publication Item 1 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden publication-item" data-id="1">
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 sm:h-48 mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Cleaning Service" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-800">Professional Cleaning Service</h2>
                                        <p class="text-sm text-gray-500">Submitted on: April 25, 2023</p>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Price</p>
                                        <p class="text-base font-semibold">200 DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Contact</p>
                                        <p class="text-base font-semibold">0612345678</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-500">Description</p>
                                    <p class="text-sm text-gray-600">Professional cleaning services for homes and offices. We provide thorough cleaning with eco-friendly products.</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                    <button class="reject-btn inline-flex items-center px-4 py-2 border border-red-600 text-sm font-medium rounded-md text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                    <button class="approve-btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication Item 2 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden publication-item" data-id="2">
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 sm:h-48 mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Plumbing Service" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-800">Expert Plumbing Services</h2>
                                        <p class="text-sm text-gray-500">Submitted on: April 24, 2023</p>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Price</p>
                                        <p class="text-base font-semibold">350 DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Contact</p>
                                        <p class="text-base font-semibold">0687654321</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-500">Description</p>
                                    <p class="text-sm text-gray-600">Professional plumbing services for residential and commercial properties. Available 24/7 for emergencies.</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                    <button class="reject-btn inline-flex items-center px-4 py-2 border border-red-600 text-sm font-medium rounded-md text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                    <button class="approve-btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication Item 3 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden publication-item" data-id="3">
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 sm:h-48 mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Electrical Service" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-800">Electrical Installation & Repair</h2>
                                        <p class="text-sm text-gray-500">Submitted on: April 23, 2023</p>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Price</p>
                                        <p class="text-base font-semibold">300 DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Contact</p>
                                        <p class="text-base font-semibold">0661234567</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-500">Description</p>
                                    <p class="text-sm text-gray-600">Certified electrician offering installation, repair, and maintenance services for residential and commercial properties.</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                    <button class="reject-btn inline-flex items-center px-4 py-2 border border-red-600 text-sm font-medium rounded-md text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                    <button class="approve-btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication Item 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden publication-item" data-id="4">
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 sm:h-48 mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1560869713-7d0a29430803?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Hairstyling Service" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-800">Professional Hairstyling</h2>
                                        <p class="text-sm text-gray-500">Submitted on: April 22, 2023</p>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Price</p>
                                        <p class="text-base font-semibold">150 DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Contact</p>
                                        <p class="text-base font-semibold">0698765432</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-500">Description</p>
                                    <p class="text-sm text-gray-600">Professional hairstylist offering cutting, coloring, and styling services. Home visits available.</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                    <button class="reject-btn inline-flex items-center px-4 py-2 border border-red-600 text-sm font-medium rounded-md text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                    <button class="approve-btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Publication Item 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden publication-item" data-id="5">
                    <div class="p-4 sm:p-6">
                        <div class="flex flex-col sm:flex-row">
                            <div class="sm:w-48 sm:h-48 mb-4 sm:mb-0 sm:mr-6 flex-shrink-0">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Home Decoration" class="w-full h-full object-cover rounded-md">
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between mb-4">
                                    <div>
                                        <h2 class="text-lg font-semibold text-gray-800">Interior Decoration Services</h2>
                                        <p class="text-sm text-gray-500">Submitted on: April 21, 2023</p>
                                    </div>
                                    <div class="mt-2 sm:mt-0">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Price</p>
                                        <p class="text-base font-semibold">500 DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm font-medium text-gray-500">Contact</p>
                                        <p class="text-base font-semibold">0678901234</p>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p class="text-sm font-medium text-gray-500">Description</p>
                                    <p class="text-sm text-gray-600">Professional interior decorator offering design consultations, furniture selection, and complete home makeovers.</p>
                                </div>
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-end space-y-2 sm:space-y-0 sm:space-x-3">
                                    <button class="reject-btn inline-flex items-center px-4 py-2 border border-red-600 text-sm font-medium rounded-md text-red-600 bg-white hover:bg-red-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                    <button class="approve-btn inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-primary hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Notification Toast (Hidden by default) -->
        <div id="notification-toast" class="fixed bottom-4 right-4 bg-white rounded-lg shadow-lg p-4 max-w-md transform transition-transform duration-300 translate-y-full opacity-0">
            <div class="flex items-start">
                <div id="notification-icon" class="flex-shrink-0">
                    <!-- Icon will be inserted by JavaScript -->
                </div>
                <div class="ml-3 w-0 flex-1">
                    <p id="notification-title" class="text-sm font-medium text-gray-900"></p>
                    <p id="notification-message" class="mt-1 text-sm text-gray-500"></p>
                </div>
                <div class="ml-4 flex-shrink-0 flex">
                    <button id="close-notification" class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        <span class="sr-only">Close</span>
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-6">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <div class="mb-4 md:mb-0">
                        <p>&copy; 2025 HomeService. All rights reserved.</p>
                    </div>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-gray-300">Terms</a>
                        <a href="#" class="hover:text-gray-300">Privacy</a>
                        <a href="#" class="hover:text-gray-300">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script>
        // Initialize counters
        let pendingCount = 5;
        let approvedCount = 0;
        let rejectedCount = 0;

        // Update counters in the UI
        function updateCounters() {
            document.getElementById('pending-count').textContent = pendingCount;
            document.getElementById('approved-count').textContent = approvedCount;
            document.getElementById('rejected-count').textContent = rejectedCount;
        }

        // Show notification
        function showNotification(type, title, message) {
            const toast = document.getElementById('notification-toast');
            const toastTitle = document.getElementById('notification-title');
            const toastMessage = document.getElementById('notification-message');
            const iconContainer = document.getElementById('notification-icon');

            // Set content
            toastTitle.textContent = title;
            toastMessage.textContent = message;

            // Set icon based on type
            if (type === 'success') {
                iconContainer.innerHTML = `
                    <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-full bg-green-100">
                        <svg class="h-5 w-5 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                    </div>
                `;
            } else if (type === 'error') {
                iconContainer.innerHTML = `
                    <div class="flex-shrink-0 flex items-center justify-center h-8 w-8 rounded-full bg-red-100">
                        <svg class="h-5 w-5 text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                `;
            }

            // Show the toast
            toast.classList.remove('translate-y-full', 'opacity-0');

            // Hide after 3 seconds
            setTimeout(() => {
                toast.classList.add('translate-y-full', 'opacity-0');
            }, 3000);
        }

        // Handle approve and reject buttons
        document.addEventListener('DOMContentLoaded', function() {
            const approveButtons = document.querySelectorAll('.approve-btn');
            const rejectButtons = document.querySelectorAll('.reject-btn');
            const closeNotification = document.getElementById('close-notification');

            approveButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const publicationItem = this.closest('.publication-item');
                    const publicationId = publicationItem.dataset.id;
                    const publicationTitle = publicationItem.querySelector('h2').textContent;

                    // Update counters
                    pendingCount--;
                    approvedCount++;
                    updateCounters();

                    // Remove the item from the list
                    publicationItem.classList.add('opacity-0');
                    setTimeout(() => {
                        publicationItem.remove();
                    }, 300);

                    // Show notification
                    showNotification('success', 'Publication Approved', `"${publicationTitle}" has been approved and is now live.`);
                });
            });

            rejectButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const publicationItem = this.closest('.publication-item');
                    const publicationId = publicationItem.dataset.id;
                    const publicationTitle = publicationItem.querySelector('h2').textContent;

                    // Update counters
                    pendingCount--;
                    rejectedCount++;
                    updateCounters();

                    // Remove the item from the list
                    publicationItem.classList.add('opacity-0');
                    setTimeout(() => {
                        publicationItem.remove();
                    }, 300);

                    // Show notification
                    showNotification('error', 'Publication Rejected', `"${publicationTitle}" has been rejected.`);
                });
            });

            closeNotification.addEventListener('click', function() {
                const toast = document.getElementById('notification-toast');
                toast.classList.add('translate-y-full', 'opacity-0');
            });
        });
    </script>
</body>
</html>
