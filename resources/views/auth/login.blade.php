<!-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> -->

<!-- container -->
<div class="container d-flex flex-column">
    <div class="row align-items-center justify-content-center g-0
        min-vh-100">
        <div class="col-12 col-md-8 col-lg-6 col-xxl-4 py-8 py-xl-0">
            <!-- Card -->
            <a href="/"><img src="{{asset('/images/navbrand-kumham.png')}}" class="mb-3 img-fluid mx-auto" style="height:60px; margin-top:-50px;" alt="logo kemenkumham"></a>
            <div class="card smooth-shadow-md">
                <!-- Card body -->
                <div class="card-body p-6">
                    <div class="mb-4 text-center">
                        <h4 class="mb-6 fw-bold">ADMIN KEMENKUHMAM RI PAPUA-BARAT</h4>
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <!-- Username -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" class="form-control" name="email" name="email" :value="old('email')" required autofocus placeholder="Email address here">
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" class="form-control" name="password" placeholder="**************" required autocomplete="current-password">
                        </div>
                        <!-- Checkbox -->
                        <div class="d-lg-flex justify-content-between align-items-center mb-4">
                            <div class="form-check custom-checkbox">
                                <input type="checkbox" class="form-check-input" name="remember" id="remember_me">
                                <label class="form-check-label" for="remember_me">Remember me</label>
                            </div>
                        </div>
                        <div>
                            <!-- Button -->
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                            <div class="d-md-flex justify-content-between mt-4">
                                <div class="mb-2 mb-md-0">
                                    <a href="{{ route('register') }}" class="fs-5">Create An Account </a>
                                </div>
                                <div>
                                    @if (Route::has('password.request'))
                                    <a class="text-inherit fs-5" href="{{ route('password.request') }}">
                                        Forgot your password?
                                    </a>
                                    @endif
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>