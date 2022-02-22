<x-guest-layout>
    {{-- <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full"
                src="{{ asset('images/create-account-office.jpeg') }}" alt="Office" />
        </div>

        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1 class="mb-4 text-xl font-semibold text-gray-700">
                    Create account
                </h1>

                <x-auth-validation-errors :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mt-4">
                        <x-label for="name" :value="__('Name')" />
                        <x-input type="text" id="name" name="name" class="block w-full" value="{{ old('name') }}"
                            required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-label for="email" :value="__('Email')" />
                        <x-input name="email" type="email" class="block w-full" value="{{ old('email') }}" />
                    </div>

                    <div class="mt-4">
                        <x-label for="password" :value="__('Password')" />
                        <x-input type="password" name="password" class="block w-full" required />
                    </div>

                    <div class="mt-4">
                        <x-label id="password_confirmation" :value="__('Confirm Password')" />
                        <x-input type="password" name="password_confirmation" class="block w-full" required />
                    </div>

                    <div class="mt-4">
                        <x-button class="block w-full">
                            {{ __('Register') }}
                        </x-button>
                    </div>
                </form>

                <hr class="my-8" />

                <p class="mt-4">
                    <a class="text-sm font-medium text-primary-600 hover:underline" href="{{ route('login') }}">{{
                        __('Already registered?') }}</a>
                </p>
            </div>
        </div>
    </div> --}}
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
                        src="{{asset('img/create-account-office-dark.jpeg')}}" alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
                        src="{{asset('img/create-account-office-dark.jpeg')}}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <x-auth-validation-errors :errors="$errors" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                                Create account
                            </h1>

                            <div class="mt-4">
                                <x-label for="name" class="text-gray-700 dark:text-gray-400" :value="__('Name')" />
                                <x-input type="text" id="name" name="name"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    value="{{ old('name') }}" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-label for="email" class="text-gray-700 dark:text-gray-400" :value="__('Email')" />
                                <x-input name="email" type="email"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    value="{{ old('email') }}" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" class="text-gray-700 dark:text-gray-400" :value="__('Password')" />
                                <x-input type="password" name="password"
                                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                    required />
                            </div>

                            <div class="mt-4">
                                <x-label id="password_confirmation" class="text-gray-700 dark:text-gray-400" :value="__('Confirm Password')" />
                                <x-input type="password" name="password_confirmation" 
                                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                required />
                            </div>

                            <div class="flex mt-6 text-sm">
                                <label class="flex items-center dark:text-gray-400">
                                    <input type="checkbox"
                                        class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" />
                                    <span class="ml-2">
                                        I agree to the
                                        <span class="underline">privacy policy</span>
                                    </span>
                                </label>
                            </div>
                            
                            <div class="mt-4">
                                <x-button class="block w-full">
                                    {{ __('Create account') }}
                                </x-button>
                            </div>
                            <hr class="my-8" />

                            @if (Route::has('login'))
                            <p class="mt-4">
                                <a class="text-sm font-medium text-purple-600 dark:text-purple-400 hover:underline"
                                    href="{{ route('login') }}">
                                    {{ __('Already have an account? Login') }}
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