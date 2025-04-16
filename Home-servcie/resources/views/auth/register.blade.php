@extends('layouts.app')

@section('content')
<div class="flex flex-col min-h-screen">
    <!-- Header -->
    <header class="p-4">
        <div class="container mx-auto">
            <div class="flex items-center">
                <div class="flex items-center">
                    <img src="{{ asset('images/home-icon.svg') }}" alt="HomeService" class="w-6 h-6 mr-1">
                    <span class="font-bold">
                        <span class="text-[#fd7600]">Home</span>
                        <span>Service</span>
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- Banner -->
    <div class="bg-[#f1f2f2] py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-xl font-medium">Register For Join With Us</h1>
        </div>
    </div>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto py-12 px-4">
        <!-- User Type Selection -->
        <div class="flex justify-center mb-16">
            <div class="grid grid-cols-2 gap-4 w-full max-w-md">
                <button class="flex items-center justify-center gap-2 py-3 px-6 border border-[#fd7600] text-[#fd7600] rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <rect width="20" height="14" x="2" y="7" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                    <span class="font-medium">Seller</span>
                </button>
                <button class="flex items-center justify-center gap-2 py-3 px-6 bg-[#fd7600] text-white rounded">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5">
                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span class="font-medium">Buyer</span>
                </button>
            </div>
        </div>

        <!-- Registration Form -->
        <form action="{{ route('register') }}" method="POST" class="max-w-4xl mx-auto">
            @csrf
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Nom -->
                <div>
                    <label class="block mb-2">
                        Nom <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="nom" placeholder="Nom" class="w-full p-3 border border-gray-300 rounded @error('nom') border-red-500 @enderror" required>
                    @error('nom')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Prenom -->
                <div>
                    <label class="block mb-2">
                        Prenom <span class="text-red-500">*</span>
                    </label>
                    <input type="text" name="prenom" placeholder="Prenom" class="w-full p-3 border border-gray-300 rounded @error('prenom') border-red-500 @enderror" required>
                    @error('prenom')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email Address -->
                <div>
                    <label class="block mb-2">
                        Email Address <span class="text-red-500">*</span>
                    </label>
                    <input type="email" name="email" placeholder="Email Address" class="w-full p-3 border border-gray-300 rounded @error('email') border-red-500 @enderror" required>
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Phone Number -->
                <div>
                    <label class="block mb-2">
                        Phone Number <span class="text-red-500">*</span>
                    </label>
                    <div class="flex">
                        <select name="country_code" class="bg-[#d9d9d9] p-3 border border-gray-300 rounded-l w-24">
                            <option value="880">880</option>
                            <!-- Add more country codes as needed -->
                        </select>
                        <input type="tel" name="phone" placeholder="1821-251726" class="w-full p-3 border border-gray-300 rounded-r @error('phone') border-red-500 @enderror" required>
                    </div>
                    @error('phone')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password -->
                <div>
                    <label class="block mb-2">
                        Password <span class="text-red-500">*</span>
                    </label>
                    <input type="password" name="password" placeholder="Password" class="w-full p-3 border border-gray-300 rounded @error('password') border-red-500 @enderror" required>
                    @error('password')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="block mb-2">
                        Confirm Password <span class="text-red-500">*</span>
                    </label>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password" class="w-full p-3 border border-gray-300 rounded" required>
                </div>
            </div>

            <!-- Next Button -->
            <div class="flex justify-end mt-8">
                <button type="submit" class="bg-[#fd7600] text-white py-2 px-8 rounded">
                    Next
                </button>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <footer class="bg-[#f1f2f2] py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Logo and Description -->
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/home-icon.svg') }}" alt="HomeService" class="w-6 h-6 mr-1">
                        <span class="font-bold">
                            <span class="text-[#fd7600]">Home</span>
                            <span>Service</span>
                        </span>
                    </div>
                    <p class="text-sm text-gray-600">
                        It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
                    </p>
                </div>

                <!-- Community -->
                <div>
                    <h3 class="font-bold mb-4">Community</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('become.seller') }}" class="text-sm hover:text-[#fd7600]">
                                • Become A Seller
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('become.buyer') }}" class="text-sm hover:text-[#fd7600]">
                                • Become A Buyer
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Category -->
                <div>
                    <h3 class="font-bold mb-4">Category</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="{{ route('category', 'electronics') }}" class="text-sm hover:text-[#fd7600]">
                                • Electronics
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', 'cleaning') }}" class="text-sm hover:text-[#fd7600]">
                                • Cleaning
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', 'home-move') }}" class="text-sm hover:text-[#fd7600]">
                                • Home Move
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', 'salon-spa') }}" class="text-sm hover:text-[#fd7600]">
                                • Salon & Spa
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('category', 'digital-marketing') }}" class="text-sm hover:text-[#fd7600]">
                                • Digital Marketing
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-bold mb-4">Contact Info</h3>
                    <ul class="space-y-2">
                        <li class="text-sm">• 41/1 Hilton Mall, NY City</li>
                        <li class="text-sm">• +012-78901234</li>
                        <li class="text-sm">• example@mail.com</li>
                    </ul>
                    <div class="flex gap-4 mt-4">
                        <a href="#" class="text-[#3b5998]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-[#55acee]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                        <a href="#" class="text-[#007ab9]">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect width="4" height="12" x="2" y="9"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-300 mt-8 pt-4 text-center text-sm">All copyright © 2023 Reserved</div>
        </div>
    </footer>
</div>
@endsection
