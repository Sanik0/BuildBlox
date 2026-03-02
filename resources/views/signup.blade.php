@include('partials.header')

<body class="bg-[#ffffff] text-[#1b1b18]">
    <!-- SIGNIN SECTION -->
    <section class="w-full min-h-screen flex">
        <!-- Left Section - Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-white">
            <div class="w-full max-w-md">
                <div class="mb-8">
                    <a href="{{ route('home')}}" class="flex gap-3 mb-5 items-center">

                        <svg width="30px" height="30px" viewBox="-1.6 -1.6 19.20 19.20" fill="none" xmlns="http://www.w3.org/2000/svg">

                            <g id="SVGRepo_bgCarrier" stroke-width="0">

                                <rect x="-1.6" y="-1.6" width="19.20" height="19.20" rx="3.264" fill="#0000FF" strokewidth="0" />

                            </g>

                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />

                            <g id="SVGRepo_iconCarrier">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99999 2.17071V0H6.99999V2.17071C5.8348 2.58254 4.99999 3.69378 4.99999 5C4.99999 5.52868 5.13675 6.02543 5.37681 6.45678L4.25969 8.31865C3.83556 7.84108 3.50146 7.28162 3.28414 6.66675L1.39846 7.33325C1.77292 8.39269 2.3953 9.33539 3.19608 10.0913L0.713928 14.2283L1.40018 16L3.28641 15.7717L5.76754 11.6365C6.46852 11.8722 7.2192 12 7.99989 12C8.78068 12 9.53146 11.8722 10.2325 11.6364C11.2021 11.3104 12.0767 10.7779 12.804 10.0913C13.6047 9.33535 14.2269 8.3926 14.6013 7.33325L12.7156 6.66675C12.4983 7.28152 12.1643 7.8409 11.7403 8.31841L10.6232 6.45666C10.8633 6.02533 11 5.52863 11 5C11 3.69378 10.1652 2.58254 8.99999 2.17071ZM7.9497 7.99959C7.96643 7.99986 7.98319 8 7.99999 8C8.01683 8 8.03364 7.99986 8.05042 7.99958L9.1683 9.86272C8.7934 9.95248 8.40215 10 7.99989 10C7.59773 10 7.20658 9.9525 6.83178 9.86279L7.9497 7.99959ZM7.99999 4C7.4477 4 6.99999 4.44772 6.99999 5C6.99999 5.55228 7.4477 6 7.99999 6C8.55227 6 8.99999 5.55228 8.99999 5C8.99999 4.44772 8.55227 4 7.99999 4Z" fill="#ffffff" />
                                <path d="M12.7137 15.7717L11.2807 13.3835C12.2265 13.013 13.0939 12.4872 13.8518 11.8377L15.2862 14.2283L14.5999 16L12.7137 15.7717Z" fill="#ffffff" />
                            </g>

                        </svg>
                        <span class="text-blue-600 self-center text-2xl font-semibold whitespace-nowrap">BuildBlox</span>
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
                <form method="POST" action="{{ route('signup.submit') }}" id="signupForm" class="space-y-4">
                    @csrf
                    <div class="flex gap-3">
                        <div class="w-full">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name')}}" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="John" required>
                        </div>
                        @error('first_name')
                        <span class="error text-red-500 text-sm">{{ $message}}</span>
                        @enderror
                        <div class="w-full">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name')}}" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="Doe" required>
                        </div>
                        @error('last_name')
                        <span class="error text-red-500 text-sm">{{ $message}}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="username" value="{{ old('username')}}" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="john_doe" required>
                        @error('username')
                        <span class="error text-red-500 text-sm">{{ $message}}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="name@company.com" required>
                        @error('email')
                        <span class="error text-red-500 text-sm">{{ $message}}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 pr-10" required>
                            <button type="button" id="toggle-password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div>
                        <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900">Confirm password</label>
                        <div class="relative">
                            <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 pr-10" required>
                            <button type="button" id="toggle-confirm-password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
                        @error('password')
                        <span class="error text-red-500 text-sm">{{ $message}}</span>
                        @enderror
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
                        Already have an account? <a href="{{ route('signin')}}" class="font-medium text-brand hover:underline">Login here</a>
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
                <h2 class="text-6xl font-bold mb-6">
                    Welcome to BuildBlox
                </h2>
                <p class="text-3xl mb-8 text-blue-100">
                    The ultimate community platform for sharing builds with guided steps.
                </p>

                <div class="mt-12 pt-8 border-t border-blue-400 border-opacity-30">
                    <p class="text-blue-100 italic">
                        "BuildBlox has completely streamlined my creative process. The way it breaks down complex mega-builds into manageable steps and precise material counts makes even the most ambitious projects feel achievable."
                    </p>
                    <p class="mt-3 font-semibold">— Ronan Sanico, Product Manager</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Function to toggle password visibility
        function togglePassword(inputId, toggleButtonId) {
            const input = document.getElementById(inputId);
            const button = document.getElementById(toggleButtonId);

            if (input.type === 'password') {
                input.type = 'text';
                button.innerHTML = `
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path>
            </svg>
        `;
            } else {
                input.type = 'password';
                button.innerHTML = `
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
        `;
            }
        }

        // Initialize toggle buttons when DOM is loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listeners
            document.getElementById('toggle-password')?.addEventListener('click', function() {
                togglePassword('password', 'toggle-password');
            });

            document.getElementById('toggle-confirm-password')?.addEventListener('click', function() {
                togglePassword('confirm-password', 'toggle-confirm-password');
            });
        });
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>

</html>