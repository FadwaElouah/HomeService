<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomeService - Get any tasks done by professionals</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary': '#FF6B00',
                        'primary-light': '#FFF8F3',
                        'secondary': '#4318FF',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header/Navigation -->
    <header class="container mx-auto px-4 py-4 flex items-center justify-between">
        <div class="flex items-center">
            <a href="#" class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                </svg>
                <span class="ml-2 text-xl font-bold">Home<span class="text-primary">Service</span></span>
            </a>
        </div>

        <nav class="hidden md:flex items-center space-x-6">
            <a href="#" class="text-sm font-medium">Home</a>
            <a href="#" class="text-sm font-medium">About</a>
            <div class="relative group">
                <button class="flex items-center text-sm font-medium">
                    Service List
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-1 z-10 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Cleaning Service</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Home Repair</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Electronics</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Plumbing</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Salon & Spa</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Hairstyling</a>
                </div>
            </div>
            <div class="relative group">
                <button class="flex items-center text-sm font-medium">
                    Authentication
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md py-1 z-10 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Login</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Register</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Privacy Policy</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Terms and Conditions</a>
                </div>
            </div>
            <div class="relative group">
                <button class="flex items-center text-sm font-medium">
                    Pages
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
            </div>
            <a href="#" class="text-sm font-medium">Contact</a>
        </nav>

        <div class="flex items-center">
            <a href="#" class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium">Login</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="container mx-auto px-4 py-12 md:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Get any tasks done by professionals</h1>
                <p class="text-gray-600 mb-8">Choose services you need, find best professionals ready to help.</p>

                <div class="relative mb-6">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>
                    <input type="text" class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:ring-primary focus:border-primary sm:text-sm" placeholder="What service do you need?">
                </div>

                <button class="bg-primary text-white px-6 py-2 rounded-md font-medium">Search</button>

                <div class="flex space-x-4 mt-8">
                    <a href="#" class="border border-secondary text-secondary px-6 py-2 rounded-md font-medium">Post Job</a>
                    <a href="#" class="bg-secondary text-white px-6 py-2 rounded-md font-medium">Find Service</a>
                </div>
            </div>

            <div class="flex justify-center space-x-4">
                <div class="bg-blue-500 rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Cleaning professional" class="w-full h-64 object-cover">
                </div>
                <div class="bg-primary rounded-2xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584464491033-06628f3a6b7b?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Construction professional" class="w-full h-64 object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="bg-primary-light py-12 md:py-20">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold mb-8">Categories</h2>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6">
                <!-- Electronics -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://via.placeholder.com/80" alt="Electronics" class="rounded-lg">
                    </div>
                    <h3 class="text-center font-medium">Electronics</h3>
                    <p class="text-center text-sm text-gray-500">21+ Service</p>
                </div>

                <!-- Cleaning -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Cleaning" class="rounded-lg h-20 w-20 object-cover">
                    </div>
                    <h3 class="text-center font-medium">Cleaning</h3>
                    <p class="text-center text-sm text-gray-500">15+ Service</p>
                </div>

                <!-- Home Repair -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Home Repair" class="rounded-lg h-20 w-20 object-cover">
                    </div>
                    <h3 class="text-center font-medium">Home Repair</h3>
                    <p class="text-center text-sm text-gray-500">13+ Service</p>
                </div>

                <!-- Hairstyling -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://images.unsplash.com/photo-1560869713-7d0a29430803?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Hairstyling" class="rounded-lg h-20 w-20 object-cover">
                    </div>
                    <h3 class="text-center font-medium">Hairstyling</h3>
                    <p class="text-center text-sm text-gray-500">10+ Service</p>
                </div>

                <!-- Plumbing -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://images.unsplash.com/photo-1607472586893-edb57bdc0e39?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Plumbing" class="rounded-lg h-20 w-20 object-cover">
                    </div>
                    <h3 class="text-center font-medium">Plumbing</h3>
                    <p class="text-center text-sm text-gray-500">24+ Service</p>
                </div>

                <!-- Salon & Spa -->
                <div class="bg-white p-4 rounded-lg shadow-sm">
                    <div class="flex justify-center mb-4">
                        <img src="https://images.unsplash.com/photo-1560750588-73207b1ef5b8?ixlib=rb-1.2.1&auto=format&fit=crop&w=300&q=80" alt="Salon & Spa" class="rounded-lg h-20 w-20 object-cover">
                    </div>
                    <h3 class="text-center font-medium">Salon & Spa</h3>
                    <p class="text-center text-sm text-gray-500">17+ Service</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Menu (Hidden by default) -->
    <div class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden" id="mobile-menu-overlay">
        <div class="bg-white h-full w-64 p-4">
            <div class="flex justify-between items-center mb-6">
                <a href="#" class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-primary" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="ml-2 text-lg font-bold">Home<span class="text-primary">Service</span></span>
                </a>
                <button id="close-mobile-menu">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <nav class="space-y-4">
                <a href="#" class="block text-sm font-medium">Home</a>
                <a href="#" class="block text-sm font-medium">About</a>
                <div>
                    <button class="flex items-center text-sm font-medium w-full justify-between">
                        Service List
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button class="flex items-center text-sm font-medium w-full justify-between">
                        Authentication
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <div>
                    <button class="flex items-center text-sm font-medium w-full justify-between">
                        Pages
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                </div>
                <a href="#" class="block text-sm font-medium">Contact</a>
            </nav>

            <div class="mt-6">
                <a href="#" class="bg-primary text-white px-4 py-2 rounded-full text-sm font-medium block text-center">Login</a>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 max-w-6xl">
        <h1 class="text-2xl font-bold text-center mb-4">Why Choose HomeServer?</h1>
        <p class="text-center max-w-2xl mx-auto text-sm mb-6">
            HomeServer is a fast service-based marketplace out there to help you get any task done conveniently. Ready to use and easy-to-use app can make your life easier by finding a great performer for the tasks.
        </p>
        <div class="flex justify-center">
            <button class="bg-primary hover:bg-orange-600 text-white font-medium py-2 px-6 rounded-full">
                Talk to a Customer
            </button>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-8">
        <div class="container mx-auto px-4 max-w-6xl">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Feature 1 -->
                <div class="border border-gray-200 rounded-lg p-4 flex items-center">
                    <div class="bg-orange-100 p-2 rounded-full mr-3">
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">4.5/5</h3>
                        <p class="text-sm text-gray-600">Trusted service provider with many clients</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="border border-gray-200 rounded-lg p-4 flex items-center">
                    <div class="bg-orange-100 p-2 rounded-full mr-3">
                        <i class="fas fa-headset text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Support</h3>
                        <p class="text-sm text-gray-600">24-hour dedicated support whenever you need</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="border border-gray-200 rounded-lg p-4 flex items-center">
                    <div class="bg-orange-100 p-2 rounded-full mr-3">
                        <i class="fas fa-shield-alt text-primary"></i>
                    </div>
                    <div>
                        <h3 class="font-bold">Secure</h3>
                        <p class="text-sm text-gray-600">Highly dedicated support team to help you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Services Section -->
    <section class="py-8">
        <div class="container mx-auto px-4 max-w-6xl">
            <h2 class="text-2xl font-bold mb-8">Popular Services</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service Card 1 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">Paris Luxury Lifestyle</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">New York Lifestyle</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">LA Style Hotspot</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">Milan Fashion Week</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service Card 5 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">Paris Luxury Lifestyle</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>

                <!-- Service Card 6 -->
                <div class="border border-gray-200 rounded-lg overflow-hidden">
                    <div class="relative">
                        <img src="/placeholder.svg?height=200&width=300" alt="Hair Styling" class="w-full h-48 object-cover">
                        <div class="absolute top-4 left-4 bg-white rounded-full p-1">
                            <div class="bg-primary rounded-full w-8 h-8 flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-white text-sm"></i>
                            </div>
                        </div>
                        <div class="absolute top-4 left-16 bg-white rounded-lg py-1 px-2">
                            <p class="text-xs">London Luxury Lifestyle</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold mb-2">Do Stylish Hair Style From Our Experts</h3>
                        <p class="text-xs text-gray-500 mb-1">Starting at</p>
                        <p class="text-primary font-bold mb-3">$15.00</p>
                        <button class="w-full border border-gray-300 rounded py-2 text-sm hover:bg-gray-50">
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#f9f5f1] py-16">
        <div class="container mx-auto px-4 max-w-2xl text-center">
            <h2 class="text-3xl font-bold mb-4">Best Taskers of the Month</h2>
            <p class="text-gray-700 leading-relaxed">
                Qixer is a best service-based marketplace out there to help you get any task done conveniently. Thanks to our well built mobile app and website for making it even convenient for the users.
            </p>
        </div>
    </section>
    <!-- Footer -->
  <footer class="bg-gray py-12">
    <div class="container mx-auto px-4">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
        <div>
          <div class="flex items-center mb-4">
            <div class="relative h-8 w-8 mr-2">
              <svg viewBox="0 0 24 24" fill="none" class="h-8 w-8">
                <path
                  d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"
                  fill="#fd7600"
                  stroke="#fd7600"
                  stroke-width="1"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
            </div>
            <span class="font-bold text-xl">
              <span class="text-orange">Home</span>Service
            </span>
          </div>
          <p class="text-sm text-gray-600 mt-4">
            It is a long established fact that a reader will be distracted by the readable content of a page when
            looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
          </p>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Community</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Become A Seller
              </a>
            </li>
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Become A Buyer
              </a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Category</h3>
          <ul class="space-y-2">
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Electronics
              </a>
            </li>
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Cleaning
              </a>
            </li>
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Home Move
              </a>
            </li>
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Salon & Spa
              </a>
            </li>
            <li>
              <a href="#" class="text-sm text-gray-600 hover:text-orange flex items-center">
                <span class="mr-2">•</span>
                Digital Marketing
              </a>
            </li>
          </ul>
        </div>
        <div>
          <h3 class="font-bold text-lg mb-4">Contact Info</h3>
          <ul class="space-y-2">
            <li class="flex items-center text-sm text-gray-600">
              <span class="mr-2">•</span>
              41/1 Hilton Mall, NY City
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <span class="mr-2">•</span>
              +012-78901234
            </li>
            <li class="flex items-center text-sm text-gray-600">
              <span class="mr-2">•</span>
              example@mail.com
            </li>
          </ul>
          <div class="flex space-x-4 mt-4">
            <a href="#" class="text-facebook">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path d="M9.19795 21.5H13.198V13.4901H16.8021L17.198 9.50977H13.198V7.5C13.198 6.94772 13.6457 6.5 14.198 6.5H17.198V2.5H14.198C11.4365 2.5 9.19795 4.73858 9.19795 7.5V9.50977H7.19795L6.80206 13.4901H9.19795V21.5Z"></path>
              </svg>
            </a>
            <a href="#" class="text-twitter">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path d="M22 5.89998C21.26 6.20998 20.46 6.41998 19.64 6.50998C20.49 6.00998 21.14 5.24998 21.44 4.34998C20.65 4.78998 19.77 5.11998 18.84 5.28998C18.09 4.52998 17.02 4.07998 15.85 4.07998C13.58 4.07998 11.75 5.91998 11.75 8.18998C11.75 8.49998 11.78 8.78998 11.84 9.06998C8.43999 8.89998 5.41999 7.25998 3.38999 4.78998C3.04999 5.35998 2.85999 6.00998 2.85999 6.69998C2.85999 7.98998 3.51999 9.14998 4.52999 9.82998C3.87999 9.81998 3.25999 9.62998 2.72999 9.33998V9.38998C2.72999 11.38 4.13999 13.04 6.00999 13.41C5.68999 13.5 5.34999 13.55 4.99999 13.55C4.75999 13.55 4.51999 13.53 4.28999 13.49C4.76999 15.11 6.25999 16.31 8.04999 16.34C6.67999 17.45 4.95999 18.09 3.09999 18.09C2.77999 18.09 2.46999 18.08 2.15999 18.04C3.95999 19.21 6.06999 19.87 8.32999 19.87C15.84 19.87 19.96 13.62 19.96 8.19998C19.96 8.01998 19.95 7.84998 19.94 7.67998C20.76 7.10998 21.45 6.38998 22 5.89998Z"></path>
              </svg>
            </a>
            <a href="#" class="text-linkedin">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="h-5 w-5"
              >
                <path d="M6.5 8C7.32843 8 8 7.32843 8 6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8Z"></path>
                <path d="M5 10C5 9.44772 5.44772 9 6 9H7C7.55228 9 8 9.44771 8 10V18C8 18.5523 7.55228 19 7 19H6C5.44772 19 5 18.5523 5 18V10Z"></path>
                <path d="M11 19H12C12.5523 19 13 18.5523 13 18V13.5C13 12 16 11 16 13V18.0004C16 18.5527 16.4477 19 17 19H18C18.5523 19 19 18.5523 19 18V12C19 10 17.5 9 15.5 9C13.5 9 13 10.5 13 10.5V10C13 9.44771 12.5523 9 12 9H11C10.4477 9 10 9.44772 10 10V18C10 18.5523 10.4477 19 11 19Z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
      <div class="border-t border-gray-300 mt-8 pt-8 text-center text-sm text-gray-600">
        All copyright © 2025 Reserved
      </div>
    </div>
  </footer>

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.createElement('button');
            mobileMenuButton.classList.add('md:hidden', 'p-2');
            mobileMenuButton.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            `;

            const header = document.querySelector('header');
            const navContainer = header.querySelector('nav').parentElement;
            navContainer.parentNode.insertBefore(mobileMenuButton, navContainer);

            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const closeMobileMenuButton = document.getElementById('close-mobile-menu');

            mobileMenuButton.addEventListener('click', function() {
                mobileMenuOverlay.classList.remove('hidden');
            });

            closeMobileMenuButton.addEventListener('click', function() {
                mobileMenuOverlay.classList.add('hidden');
            });
        });
    </script>


</body>
</html>



