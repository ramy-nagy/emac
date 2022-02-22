<x-app-layout>
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
        {{ __('Settings') }}
    </h2>
        
    <div class="container-xl">
        @if(Auth::user()->role == "admin")
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <h3 class="section-title text-gray-700 dark:text-gray-200">General</h3>
            <div class="col-12 col-md-4">
                <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. <a href="help.html">Learn more</a></div>
            </div>
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form class="settings-form" action="{{route('settings.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Business Name</label>
                                <input type="text" class="form-control" id="setting-input-1" name="business_name" value="{{$settings->business_name ?? ''}}"
                                    required="">
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-2" class="form-label">Contact Name</label>
                                <input type="text" class="form-control" id="setting-input-2" name="contact_name" value="{{$settings->contact_name ?? ''}}"
                                    required="">
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Business Email Address</label>
                                <input type="email" class="form-control" id="setting-input-3" name="business_email"
                                    value="{{$settings->business_email ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="setting-input-3" class="form-label">Business Phone</label>
                                <input type="number" class="form-control" id="setting-input-3" name="business_phone"
                                    value="{{$settings->business_phone ?? ''}}">
                            </div>
                            <button type="submit" class="btn app-btn-primary">Save Changes</button>
                        </form>
                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
        <hr class="my-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-4">
                <h3 class="section-title text-gray-700 dark:text-gray-200">Data &amp; Privacy</h3>
                <div class="section-intro">Settings section intro goes here. Morbi vehicula, est eget fermentum ornare.
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form class="settings-form">
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-1"
                                    checked="">
                                <label class="form-check-label" for="settings-checkbox-1">
                                    Keep user app activity history
                                </label>
                            </div>
                            <!--//form-check-->
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-2"
                                    checked="">
                                <label class="form-check-label" for="settings-checkbox-2">
                                    Keep user app preferences
                                </label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" value="" id="settings-checkbox-3">
                                <label class="form-check-label" for="settings-checkbox-3">
                                    Keep user app search history
                                </label>
                            </div>
                        </form>
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
        <hr class="my-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-4">
                <h3 class="section-title text-gray-700 dark:text-gray-200">Notifications</h3>
                <div class="section-intro">Settings section intro goes here. Duis velit massa, faucibus non hendrerit
                    eget.</div>
            </div>
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <form class="settings-form">
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="settings-switch-1" checked="">
                                <label class="form-check-label" for="settings-switch-1">Project notifications</label>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="settings-switch-2">
                                <label class="form-check-label" for="settings-switch-2">Web browser push
                                    notifications</label>
                            </div>
                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" id="settings-switch-3" checked="">
                                <label class="form-check-label" for="settings-switch-3">Mobile push
                                    notifications</label>
                            </div>
                        </form>
                    </div>
                    <!--//app-card-body-->
                </div>
                <!--//app-card-->
            </div>
        </div>
        <!--//row-->
        <hr class="my-4">
        @endif
        @if(Auth::user()->role == "user")
        <hr class="my-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-4">
                <h3 class="section-title text-gray-700 dark:text-gray-200">Plan</h3>
                <div class="section-intro">Settings section intro goes here. Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. <a href="help.html">Learn more</a></div>
            </div>
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">

                    <div class="app-card-body">
                        <div class="mb-2"><strong>Current Plan:</strong> Pro</div>
                        <div class="mb-2"><strong>Status:</strong> <span class="badge bg-success">Active</span></div>
                        <div class="mb-2"><strong>Expires:</strong> ----/--/--</div>
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <a class="btn app-btn-primary" href="#">Upgrade Plan</a>
                            </div>
                        </div>

                    </div>
                    <!--//app-card-body-->

                </div>
                <!--//app-card-->
            </div>
        </div>
        @endif
        <!--//row-->
    </div>
</x-app-layout>