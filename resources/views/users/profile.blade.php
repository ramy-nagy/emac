<x-app-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Profile') }}
    </h2>
        {{-- @if(Auth::user()->role == "admin") --}}
        <hr class="my-4">
        <div class="row">
            <div class="col-12 col-lg-6">
                <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div
                        class="app-card app-card-account shadow-sm d-flex flex-column align-items-start rounded-lg shadow-md dark:bg-gray-800">
                        <div class="app-card-header p-3 border-bottom-0">
                            <div class="row align-items-center gx-3">
                                <div class="col-auto">
                                    <h4 class="app-card-title" style="color:#5d6778;">Profile</h4>
                                </div>
                            </div>
                        </div>

                        <div class="app-card-body px-4 w-100">
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <div class="item-label mb-2"><strong>Photo</strong></div>
                                        <div class="item-data">
                                            <img class="profile-image app-icon-holder"
                                                src="{{auth()->user()->getFirstMediaUrl('images', 'thumb')}}"
                                                alt="{{ auth()->user()->name ?? '' }}">
                                        </div>
                                        <input type="file" name="image"
                                            class="form-control 
                                            block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                                    </div>
                                </div>
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <x-label style="color:#5d6778;" for="name" :value="__('Name')" />
                                        <x-input type="text" id="name" name="name"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            value="{{ old('name', auth()->user()->name) }}" required />
                                        @error('name')
                                        <span class="text-xs text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <x-label style="color:#5d6778;" for="email" :value="__('Email')" />
                                        <x-input name="email" type="email"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                                            value="{{ old('email', auth()->user()->email) }}" required />
                                        @error('email')
                                        <span class="text-xs text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <x-label style="color:#5d6778;" for="password" :value="__('New password')" />
                                        <x-input type="password" name="password"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                        @error('password')
                                        <span class="text-xs text-red-600 dark:text-red-400">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="item border-bottom py-3">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-auto">
                                        <x-label style="color:#5d6778;" id="password_confirmation"
                                            :value="__('New password confirmation')" />
                                        <x-input type="password" name="password_confirmation"
                                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="app-card-footer p-4 mt-auto">
                            <x-button class="block w-full">
                                {{ __('Submit') }}
                            </x-button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-12 col-lg-6">
                <div  class="app-card app-card-account shadow-sm d-flex flex-column align-items-start rounded-lg shadow-md dark:bg-gray-800">
                    <div class="app-card-header p-3 border-bottom-0">
                        <div class="row align-items-center gx-3">
                            <div class="col-auto">
                                <h4 class="app-card-title" style="color:#5d6778;">Preferences</h4>
                            </div>
                        </div>
                    </div>
                    <div class="app-card-body px-4 w-100">
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Language </strong></div>
                                    <div class="item-data">{{ config('app.locale') ?? ''}} / {{ config('app.faker_locale') ?? ''}}</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Time Zone</strong></div>
                                    <div class="item-data">{{ config('app.timezone') ?? ''}}</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Currency</strong></div>
                                    <div class="item-data">$(US Dollars)</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>Email Subscription</strong></div>
                                    <div class="item-data">Off</div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="item border-bottom py-3">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <div class="item-label"><strong>SMS Notifications</strong></div>
                                    <div class="item-data">Off</div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="app-card-footer p-4 mt-auto">
                        <x-button class="block w-full" disabled>
                            {{ __('Manage Preferences') }}
                        </x-button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>