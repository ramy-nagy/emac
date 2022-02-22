<x-guest-layout>
    {{-- <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full" src="{{ asset('images/login-office.jpeg') }}"
                alt="Office" />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Login
                </h1>

                <x-auth-validation-errors :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Input[ype="email"] -->
                    <div class="mt-4">
                        <x-label :value="__('Email')" />
                        <x-input type="email" id="email" name="email" value="{{ old('email') }}" class="block w-full"
                            required autofocus />
                    </div>

                    <!-- Input[ype="password"] -->
                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input type="password" id="password" name="password" class="block w-full" />
                    </div>

                    <div class="flex mt-6 text-sm">
                        <label class="flex items-center dark:text-gray-400">
                            <input type="checkbox" name="remember"
                                class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="mt-4">
                        <x-button class="block w-full">
                            {{ __('Log in') }}
                        </x-button>
                    </div>
                </form>

                <hr class="my-8" />

                @if (Route::has('password.request'))
                <p class="mt-4">
                    <a class="text-sm font-medium text-primary-600 hover:underline"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                </p>
                @endif
            </div>
        </div>
    </div> --}}
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="{{asset('img/login-office.jpeg')}}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="{{asset('img/login-office-dark.jpeg')}}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">

                    <div class="w-full">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                Login
                            </h1>

                            <!-- Input[ype="email"] -->
                            <div class="mt-4">
                                <x-label class="text-gray-700 dark:text-gray-400" :value="__('Email')" />
                                <x-input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    required autofocus />
                            </div>

                            <!-- Input[ype="password"] -->
                            <div class="mt-4">
                                <x-label class="text-gray-700 dark:text-gray-400" for="password"
                                    :value="__('Password')" />
                                <x-input type="password" id="password" name="password"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                            </div>

                            <div class="mt-4">
                                <x-button class="block w-full">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>

                            <hr class="my-8" />

                            @if (Route::has('password.request'))
                            <p class="mt-4">
                                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </p>
                            @endif
                            @if (Route::has('register'))
                            <p class="mt-4">
                                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                    href="{{ route('register') }}">
                                    {{ __('Create account') }}
                                </a>
                            </p>
                            @endif
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>