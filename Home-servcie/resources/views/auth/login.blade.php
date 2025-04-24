import Link from "next/link"

export default function Home() {
  return (
    <div className="flex flex-col min-h-screen">
      {/* Header */}
      <header className="border-b border-gray-200">
        <div className="container mx-auto px-4 py-4 flex justify-between items-center">
          <Link href="/" className="flex items-center">
            <div className="relative w-8 h-8 mr-1">
              <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" className="w-full h-full">
                <path
                  d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                  fill="#fd7600"
                  stroke="#fd7600"
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                />
              </svg>
            </div>
            <span className="font-bold text-xl">
              <span className="text-[#fd7600]">Home</span>Service
            </span>
          </Link>
          <nav className="hidden md:flex items-center space-x-6">
            <Link href="/" className="text-sm font-medium">
              Home
            </Link>
            <Link href="/about" className="text-sm font-medium">
              About
            </Link>
            <div className="relative group">
              <Link href="/service" className="text-sm font-medium flex items-center">
                Service List
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  className="ml-1 w-4 h-4"
                >
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </Link>
            </div>
            <div className="relative group">
              <Link href="/subscription" className="text-sm font-medium flex items-center">
                Subscription Plans
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  className="ml-1 w-4 h-4"
                >
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </Link>
            </div>
            <div className="relative group">
              <Link href="/pages" className="text-sm font-medium flex items-center">
                Pages
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  strokeWidth="2"
                  strokeLinecap="round"
                  strokeLinejoin="round"
                  className="ml-1 w-4 h-4"
                >
                  <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
              </Link>
            </div>
            <Link href="/contact" className="text-sm font-medium">
              Contact
            </Link>
            <Link href="/account" className="bg-[#fd7600] text-white px-4 py-2 rounded-full text-sm font-medium">
              Account
            </Link>
          </nav>
        </div>
      </header>

      {/* Main Content */}
      <main className="flex-grow flex items-center justify-center py-16">
        <div className="w-full max-w-md px-4">
          <h1 className="text-4xl font-bold text-center mb-10">Sign In</h1>

          <p className="text-center text-sm text-gray-500 mb-6">
            Welcome back! Please enter your credentials to continue.
          </p>


          <form>
            <div className="space-y-6">
              <div className="space-y-2">
                <label htmlFor="username" className="block text-lg">
                  Username Or Email
                </label>
                <input
                  id="username"
                  type="email"
                  placeholder="Username Or Email"
                  className="w-full border border-gray-300 rounded p-3 h-auto"
                  required
                />
              </div>

              <div className="space-y-2">
                <label htmlFor="password" className="block text-lg">
                  Password <span className="text-red-500">*</span>
                </label>
                <input
                  id="password"
                  type="password"
                  placeholder="Password"
                  className="w-full border border-gray-300 rounded p-3 h-auto"
                  required
                />
              </div>

              <div className="flex items-center justify-between">
                <div className="flex items-center space-x-2">
                  <input type="checkbox" id="remember" className="rounded border-gray-300" />
                  <label htmlFor="remember" className="text-sm text-gray-600">
                    Remember me
                  </label>
                </div>
                <Link href="/forgot-password" className="text-sm text-gray-600">
                  Forgot Password
                </Link>
              </div>

              <button type="submit" className="w-full bg-[#fd7600] text-white py-3 rounded text-lg font-medium">
                Login Now
              </button>
            </div>
          </form>
        </div>
      </main>

      {/* Footer */}
      <footer className="bg-[#d9d9d9] pt-12 pb-4">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            {/* Logo and Description */}
            <div>
              <Link href="/" className="flex items-center mb-4">
                <div className="relative w-8 h-8 mr-1">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" className="w-full h-full">
                    <path
                      d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z"
                      fill="#fd7600"
                      stroke="#fd7600"
                      strokeWidth="2"
                      strokeLinecap="round"
                      strokeLinejoin="round"
                    />
                  </svg>
                </div>
                <span className="font-bold text-xl">
                  <span className="text-[#fd7600]">Home</span>Service
                </span>
              </Link>
              <p className="text-sm text-gray-600 mb-4">
                It is a long established fact that a reader will be distracted by the readable content of a page when
                looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.
              </p>
            </div>

            {/* Community */}
            <div>
              <h3 className="font-bold text-lg mb-4">Community</h3>
              <ul className="space-y-2">
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Become A Seller
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Become A Buyer
                  </Link>
                </li>
              </ul>
            </div>

            {/* Category */}
            <div>
              <h3 className="font-bold text-lg mb-4">Category</h3>
              <ul className="space-y-2">
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Electronics
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Cleaning
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Home Move
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Salon & Spa
                  </Link>
                </li>
                <li>
                  <Link href="#" className="text-sm text-gray-600 hover:text-[#fd7600]">
                    • Digital Marketing
                  </Link>
                </li>
              </ul>
            </div>

            {/* Contact Info */}
            <div>
              <h3 className="font-bold text-lg mb-4">Contact Info</h3>
              <ul className="space-y-2">
                <li className="text-sm text-gray-600">• 41/1, Hilton Mall, NY City</li>
                <li className="text-sm text-gray-600">• +012-78901234</li>
                <li className="text-sm text-gray-600">• example@mail.com</li>
              </ul>
              <div className="flex space-x-4 mt-4">
                <Link href="#" className="text-[#3b5998] hover:text-[#fd7600]">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                  >
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                  </svg>
                </Link>
                <Link href="#" className="text-[#55acee] hover:text-[#fd7600]">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                  >
                    <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                  </svg>
                </Link>
                <Link href="#" className="text-[#007ab9] hover:text-[#fd7600]">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    strokeWidth="2"
                    strokeLinecap="round"
                    strokeLinejoin="round"
                  >
                    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                    <rect x="2" y="9" width="4" height="12"></rect>
                    <circle cx="4" cy="4" r="2"></circle>
                  </svg>
                </Link>
              </div>
            </div>
          </div>

          {/* Copyright */}
          <div className="border-t border-gray-300 pt-4 text-center">
            <p className="text-sm text-gray-600">All copyright © 2025 Reserved</p>
          </div>
        </div>
      </footer>
    </div>
  )
}
