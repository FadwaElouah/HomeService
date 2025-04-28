{{-- resources/views/auth/register.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeService - Inscription</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            orange: '#FD7600',
          }
        }
      }
    }
  </script>
  <!-- Font Awesome pour les icônes -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="flex flex-col min-h-screen">
  <!-- Header -->
  <header class="py-4 px-6 md:px-10 border-b">
    <div class="max-w-7xl mx-auto">
      <a href="/" class="flex items-center">
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
    </div>
  </header>

  <!-- Banner -->
  <div class="bg-[#f1f2f2] py-4 text-center">
    <h1 class="text-xl font-medium">Register For Join With Us</h1>
  </div>

  <!-- Main Content -->
  <main class="flex-grow py-10 px-4">
    <div class="max-w-4xl mx-auto">
      @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
          <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif



      <!-- Registration Form -->
      <form class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-6" method="POST" action="{{ route('register') }}">
        @csrf


        <div>
          <label for="name" class="block mb-2 font-medium">
            Nom <span class="text-red-500">*</span>
          </label>
          <input
            id="name"
            name="name"
            placeholder="Nom complet"
            value="{{ old('name') }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent @error('name') border-red-500 @enderror"
          />
          @error('name')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="email" class="block mb-2 font-medium">
            Email Address <span class="text-red-500">*</span>
          </label>
          <input
            id="email"
            name="email"
            type="email"
            placeholder="Email Address"
            value="{{ old('email') }}"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent @error('email') border-red-500 @enderror"
          />
          @error('email')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="phone" class="block mb-2 font-medium">
            Phone Number <span class="text-red-500">*</span>
          </label>
          <div class="flex">
            <select
              name="phone_code"
              class="w-24 px-3 py-2 border border-gray-300 rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent bg-[#f1f2f2]"
            >
              <option value="880">+880</option>
              <option value="1">+1</option>
              <option value="44">+44</option>
              <option value="91">+91</option>
            </select>
            <input
              id="phone"
              name="phone"
              placeholder="1821-251726"
              value="{{ old('phone') }}"
              class="flex-1 px-3 py-2 border border-gray-300 rounded-r-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent border-l-0 @error('phone') border-red-500 @enderror"
            />
          </div>
          @error('phone')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

          <div>
          <label for="role" class="block mb-2 font-medium">
            Role <span class="text-red-500">*</span>
          </label>
          <select
            id="role"
            name="role"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent @error('role') border-red-500 @enderror"
          >
            <option value="">Select Role</option>
            <option value="Admin" {{ old('role') == 'Admin' ? 'selected' : '' }}>Admin</option>
            <option value="Provider" {{ old('role') == 'Provider' ? 'selected' : '' }}>Provider</option>
          </select>
          @error('role')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password" class="block mb-2 font-medium">
            Password <span class="text-red-500">*</span>
          </label>
          <input
            id="password"
            name="password"
            type="password"
            placeholder="Password"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent @error('password') border-red-500 @enderror"
          />
          @error('password')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div>
          <label for="password_confirmation" class="block mb-2 font-medium">
            Confirm Password <span class="text-red-500">*</span>
          </label>
          <input
            id="password_confirmation"
            name="password_confirmation"
            type="password"
            placeholder="Confirm Password"
            class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#FD7600] focus:border-transparent"
          />
        </div>

        <div class="md:col-span-2 flex justify-end mt-4">
          <button
            type="submit"
            class="bg-[#FD7600] hover:bg-[#e66a00] text-white px-8 py-2 rounded"
          >
            Register
          </button>
        </div>
      </form>
    </div>
  </main>

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

  <script>
    // Role selection handling
    document.querySelectorAll('.role-btn').forEach(button => {
      button.addEventListener('click', function() {
        // Remove active class from all buttons
        document.querySelectorAll('.role-btn').forEach(btn => {
          btn.classList.remove('active', 'bg-[#FD7600]', 'text-white');
          btn.classList.add('border', 'border-[#FD7600]', 'text-[#FD7600]');
        });

        // Add active class to clicked button
        this.classList.remove('border', 'border-[#FD7600]', 'text-[#FD7600]');
        this.classList.add('active', 'bg-[#FD7600]', 'text-white');

        // Set the hidden input value
        document.getElementById('role-input').value = this.dataset.role;
      });
    });
  </script>
</body>
</html>
