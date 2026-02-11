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
                <form method="POST" action="{{ route('signup.submit') }}" id="signupForm" class="space-y-4">
                    @csrf
                    <div class="flex gap-3">
                        <div class="w-full">
                            <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">First Name</label>
                            <input type="text" name="first_name" value="{{ old('first_name')}}" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="John" required>
                        </div>
                        <div class="w-full">
                            <label for="last-name" class="block mb-2 text-sm font-medium text-gray-900">Last Name</label>
                            <input type="text" name="last_name" value="{{ old('last_name')}}" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="Doe" required>
                        </div>
                    </div>

                    <div>
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="john_doe" required>
                    </div>

                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5" placeholder="name@company.com" required>
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
                            <input type="password" name="password_confirmation" id="confirm_password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-brand focus:border-brand block w-full p-2.5 pr-10" required>
                            <button type="button" id="toggle-confirm-password" class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-500 hover:text-gray-700">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                </svg>
                            </button>
                        </div>
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