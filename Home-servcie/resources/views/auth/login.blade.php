<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeService - Sign In</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            orange: '#fd7600',
            lightgray: '#d9d9d9',
            facebook: '#3b5998',
            twitter: '#55acee',
            linkedin: '#007ab9'
          }
        }
      }
    }
  </script>
</head>
<body class="flex flex-col min-h-screen">
  <!-- Header -->
  <header class="border-b border-gray-200">
    <div class="container mx-auto px-4 py-4 flex items-center justify-between">
      <a href="#" class="flex items-center">
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
      </a>

      <nav class="hidden md:flex items-center space-x-6">
        <a href="#" class="text-sm font-medium">
          Home
        </a>
        <a href="#" class="text-sm font-medium">
          About
        </a>
        <div class="relative group">
          <button class="flex items-center text-sm font-medium">
            Service List
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="ml-1 h-4 w-4"
            >
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
        <a href="#" class="text-sm font-medium">
          Subscription Plans
        </a>
        <div class="relative group">
          <button class="flex items-center text-sm font-medium">
            Pages
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="ml-1 h-4 w-4"
            >
              <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
          </button>
        </div>
        <a href="#" class="text-sm font-medium">
          Contact
        </a>
        <a
          href="#"
          class="bg-orange text-white px-4 py-2 rounded-md text-sm font-medium flex items-center"
        >
          Account
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            class="ml-2 h-4 w-4"
          >
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-grow flex items-center justify-center py-16">
    <div class="w-full max-w-md px-4">
      <h1 class="text-3xl font-bold text-center mb-8">Sign In</h1>
      <form>
        <div class="space-y-6">
          <div class="space-y-2">
            <label for="email" class="block text-sm font-medium">
              Username Or Email
            </label>
            <input
              id="email"
              type="text"
              placeholder="Username Or Email"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange focus:border-transparent"
            />
          </div>
          <div class="space-y-2">
            <label for="password" class="block text-sm font-medium">
              Password <span class="text-red-500">*</span>
            </label>
            <input
              id="password"
              type="password"
              placeholder="Password"
              class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange focus:border-transparent"
            />
          </div>
          <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
              <input
                type="checkbox"
                id="remember"
                class="h-4 w-4 text-orange focus:ring-orange border-gray-300 rounded"
              />
              <label
                for="remember"
                class="text-sm font-medium leading-none"
              >
                Remembre me
              </label>
            </div>
            <a href="#" class="text-sm text-gray-600">
              Forgot Password
            </a>
          </div>
          <button type="submit" class="w-full bg-orange text-white py-3 rounded-md font-medium">
            login Now
          </button>
        </div>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="bg-lightgray py-12">
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
</body>
</html>
