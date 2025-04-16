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
