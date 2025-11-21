<!DOCTYPE html>
<html lang="en"
      class="group"
      data-sidebar-size="lg"
      data-card-style="square">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible"
          content="ie=edge">
    <title>Best5k.in Core</title>
    <meta name="robots"
          content="noindex, follow">
    <meta name="description"
          content="web development agency">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon"
          type="image/x-icon"
          href="{{ asset('assets/images/favicon.ico') }}">
    <!-- Style CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/css/output.css') }}">
</head>

<body class="bg-body-light dark:bg-dark-body">
    <div id="loader"
         class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('assets/images/loader.gif') }}"
             alt="loader">
    </div>

    <!-- Start Main Content -->
    <div class="main-content m-4">
        <div
             class="grid grid-cols-12 gap-y-7 sm:gap-7 card px-4 sm:px-10 2xl:px-[70px] py-15 lg:items-center lg:min-h-[calc(100vh_-_32px)] dk-theme-card-square">
            <!-- Start Overview Area -->
            <div class="col-span-full lg:col-span-6">
                <div class="flex flex-col items-center justify-center gap-10 text-center">
                    <div class="hidden sm:block">
                        <img src="{{ asset('assets/images/loti/loti-auth.svg') }}"
                             alt="loti"
                             class="group-[.dark]:hidden">
                        <img src="{{ asset('assets/images/loti/loti-auth-dark.svg') }}"
                             alt="loti"
                             class="group-[.light]:hidden">
                    </div>
                    <div>
                        <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                            Welcome back!
                        </h3>
                        <p class="font-medium text-gray-500 dark:text-dark-text mt-4 px-[10%]">
                            Whether you're launching a stunning online store optimizing your our object-oriented
                        </p>
                    </div>
                </div>
            </div>
            <!-- End Overview Area -->

            <!-- Start Form Area -->
            <div class="col-span-full lg:col-span-6 w-full lg:max-w-[600px]">
                <div
                     class="border border-form dark:border-dark-border p-5 md:p-10 rounded-20 md:rounded-30 dk-theme-card-square">
                    <h3 class="text-xl md:text-[28px] leading-none font-semibold text-heading">
                        Sign Up
                    </h3>
                    <p class="font-medium text-gray-500 dark:text-dark-text mt-4">
                        Welcome! create on your account
                    </p>
                    @if ($errors->any())
                        <x-alert type="error"
                                 :errors='$errors->all()'></x-alert>
                    @endif
                    <x-form action="{{ route('store.register') }}"
                            method="POST">
                        @csrf
                        <div class="mb-2.5">
                            <x-label for="name">Name</x-label>
                            <x-text type="text"
                                    name="name"
                                    id="name"
                                    placeholder="Enter name"
                                    required />
                        </div>
                        <div class="mt-5">
                            <x-label for="email">Email</x-label>
                            <x-email name="email"
                                     id="email"
                                     placeholder="Enter email address"
                                     required />
                        </div>
                        <div class="mt-5">
                            <x-label for="password">Password</x-label>
                            <div class="relative">
                                <x-password name="password"
                                            id="password"
                                            placeholder="Enter password"
                                            required></x-password>
                            </div>
                        </div>
                        <div class="mt-5">
                            <x-label for="password_confirmation"
                                     class="form-label">Confirm Password</x-label>
                            <div class="relative">
                                <x-password name="password_confirmation"
                                            id="confirmed"
                                            placeholder="Enter password again"
                                            required />
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <br />
                        <x-button type="submit">Sign Up</x-button>
                    </x-form>
                    {{-- <div class="font-spline_sans text-gray-900 dark:text-dark-text leading-none text-center my-4">OR</div>
                    <div class="flex items-center flex-col xl:flex-row gap-4 2xl:gap-5">
                        <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto">
                            <img src="{{ asset('assets/images/icons/google.svg'); }}" alt="icon">
                            <span class="shrink-0">Sign in with Google</span>
                        </a>
                        <a href="#" class="btn b-outline-static btn-disable-outline w-full grow xl:w-auto">
                            <img src="{{ asset('assets/images/icons/apple.svg'); }}" alt="icon" class="dark:brightness-[3]">
                            <span class="shrink-0">Continue with Apple</span>
                        </a>
                    </div> --}}
                    <div class="text-gray-900 dark:text-dark-text font-medium leading-none mt-5">
                        Have an account?
                        <x-link href="{{ route('login') }}">Sign In</x-link>
                    </div>
                </div>
            </div>
            <!-- End Form Area -->
        </div>
    </div>
    <!-- End Main Content -->

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/switcher.js') }}"></script>
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
