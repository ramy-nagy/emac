<div class="container-xl">
    {{-- @if(Auth::user()->role == "admin") --}}
    <hr class="my-4">
    <div class="row gy-4 mb-4">
        <div class="col-12 col-lg-6">
            <div
                class="app-card app-card-account shadow-sm d-flex flex-column align-items-start rounded-lg shadow-md dark:bg-gray-800">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center text-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder pl-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                </svg>
                            </div>
                            <!--//icon-holder-->
                        </div>

                        <div class="col-auto">
                            <h4 class="app-card-title text-gray-700 dark:text-gray-200">Profile</h4>
                        </div>

                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label mb-2"><strong>Photo</strong></div>
                                <div class="item-data"><img class="profile-image" src="assets/images/user.png" alt="">
                                </div>
                            </div>
                            <input  type="file" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">


                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Name</strong></div>
                                @if ($isOpen)
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    wire:model="name">
                                @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                @else
                                <div class="item-data">{{ $user->name ?? ''}}</div>
                                @endif
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Email</strong></div>
                                @if ($isOpen)
                                <input type="text"
                                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                    value="{{ $user->email ?? ''}}" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                @else
                                <div class="item-data">{{ $user->email ?? ''}}</div>
                                @endif
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Password</strong></div>
                                <div class="item-data">
                                    @if ($isOpen)
                                    <input type="password"
                                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                        value="" wire:model="password">
                                    @error('password') <span class="text-danger">{{ $message }}</span>@enderror
                                    @else
                                    <div class="item-data">**************</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    @if (!$isOpen)
                    <button wire:click="edit()"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit">
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                            </path>
                        </svg>
                    </button>
                    @else
                    <button wire:click="update()"
                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                        aria-label="Edit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-box-arrow-down" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
                            <path fill-rule="evenodd"
                                d="M7.646 15.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 14.293V5.5a.5.5 0 0 0-1 0v8.793l-2.146-2.147a.5.5 0 0 0-.708.708l3 3z" />
                        </svg>
                    </button>
                    @endif
                </div>
                <!--//app-card-footer-->

            </div>
            <!--//app-card-->
        </div>

        <div class="col-12 col-lg-6">
            <div    class="app-card app-card-account shadow-sm d-flex flex-column align-items-start rounded-lg shadow-md dark:bg-gray-800">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-sliders"
                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z">
                                    </path>
                                </svg>
                            </div>
                            <!--//icon-holder-->

                        </div>

                        <div class="col-auto">
                            <h4 class="app-card-title text-gray-700 dark:text-gray-200">Preferences</h4>
                        </div>

                    </div>
                    <!--//row-->
                </div>
                <!--//app-card-header-->
                <div class="app-card-body px-4 w-100">

                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Language </strong></div>
                                <div class="item-data">English</div>
                            </div>



                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Time Zone</strong></div>
                                <div class="item-data">Central Standard Time (UTC-6)</div>
                            </div>



                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Currency</strong></div>
                                <div class="item-data">$(US Dollars)</div>
                            </div>



                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>Email Subscription</strong></div>
                                <div class="item-data">Off</div>
                            </div>



                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                    <div class="item border-bottom py-3">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <div class="item-label"><strong>SMS Notifications</strong></div>
                                <div class="item-data">On</div>
                            </div>



                        </div>
                        <!--//row-->
                    </div>
                    <!--//item-->
                </div>
                <!--//app-card-body-->
                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="#">Manage Preferences</a>
                </div>
                <!--//app-card-footer-->

            </div>
            <!--//app-card-->
        </div>
       
    </div>
</div>