@include('partials.header')

<body class="bg-[#ffffff] text-[#1b1b18]">
    <!-- SIGNIN SECTION -->
      <section class="w-full min-h-screen flex">
        <!-- Left Section - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">
                <div class="mb-8">
                    <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900">
                        <img class="w-8 h-8 mr-2" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/logo.svg" alt="logo">
                        BuildBlox
                    </a>
                    <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900 mb-2">
                        Create your account
                    </h1>
                    <p class="text-gray-600">Join us today and start building amazing things</p>
                </div>

                <!-- Social Login Buttons -->
                <div class="space-y-3 mb-6">
                    <button type="button" onclick="signupWithEmail()" class="w-full flex items-center justify-center gap-3 bg-white border border-gray-300 text-gray-900 hover:bg-gray-50 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                        </svg>
                        Continue with Email
                    </button>

                    <button type="button" onclick="signupWithFacebook()" class="w-full flex items-center justify-center gap-3 bg-[#1877f2] hover:bg-[#166fe5] text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                        Continue with Facebook
                    </button>
                </div>

                <!-- Divider -->
                <div class="flex items-center mb-6">
                    <div class="flex-1 border-t border-gray-300"></div>
                    <span class="px-4 text-sm text-gray-500">Or continue with</span>
                    <div class="flex-1 border-t border-gray-300"></div>
                </div>

                <!-- Registration Form -->
                <form id="signupForm" class="space-y-4">
                    <div class="flex gap-3">
                        <div class="w-full">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                            <input type="text" name="first-name" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="John" required>
                        </div>
                        <div class="w-full">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                            <input type="text" name="last-name" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="Doe" required>
                        </div>
                    </div>
                    
                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="john_doe" required>
                    </div>
                    
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="name@company.com" required>
                    </div>
                    
                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" required>
                    </div>
                    
                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" required>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-brand" required>
                        </div>
                        <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500">I accept the <a class="font-medium text-brand hover:underline" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    
                    <button type="submit" class="text-white w-full bg-brand hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium font-medium rounded-lg text-md px-4 py-3 focus:outline-none transition-colors">
                        Create Account
                    </button>
                    
                    <p class="text-sm font-light text-gray-500 text-center">
                        Already have an account? <a href="#" class="font-medium text-brand hover:underline">Login here</a>
                    </p>
                </form>
            </div>
        </div>

        <!-- Right Section - Blue Info Panel -->
        <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-blue-600 to-blue-800 p-12 items-center justify-center relative overflow-hidden">
            <!-- Decorative elements -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500 rounded-full opacity-20 -mr-32 -mt-32"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-900 rounded-full opacity-20 -ml-48 -mb-48"></div>
            
            <div class="relative z-10 text-white max-w-lg">
                <h2 class="text-4xl font-bold mb-6">
                    Welcome to BuildBlox
                </h2>
                <p class="text-xl mb-8 text-blue-100">
                    The ultimate platform for building and managing your projects with ease and efficiency.
                </p>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Lightning Fast</h3>
                            <p class="text-blue-100">Build and deploy your projects in record time with our optimized workflow.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Secure & Reliable</h3>
                            <p class="text-blue-100">Enterprise-grade security to keep your data safe and protected at all times.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0 w-12 h-12 bg-white bg-opacity-20 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-1">Team Collaboration</h3>
                            <p class="text-blue-100">Work seamlessly with your team members in real-time collaboration.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-blue-400 border-opacity-30">
                    <p class="text-blue-100 italic">
                        "BuildBlox has transformed the way we manage our projects. It's intuitive, powerful, and incredibly efficient."
                    </p>
                    <p class="mt-3 font-semibold">— Sarah Johnson, Product Manager</p>
                </div>
            </div>
        </div>
    </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>