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

<body
      class="bg-body-light dark:bg-dark-body group-data-[theme-width=box]:container group-data-[theme-width=box]:max-w-screen-3xl xl:group-data-[theme-width=box]:px-4">
    <div id="loader"
         class="w-screen h-screen flex-center bg-white dark:bg-dark-card fixed inset-0 z-[9999]">
        <img src="{{ asset('assets/images/loader.gif') }}"
             alt="loader">
    </div>
    <!-- Start Header -->
    @include('layouts.header')
    <!-- End Header -->

    <!-- Start App Menu -->
    <div id="app-drawer"
         class="app-menu flex flex-col bg-white dark:bg-dark-card w-app-menu fixed top-0 left-0 bottom-0 -translate-x-full group-data-[sidebar-size=sm]:min-h-screen group-data-[sidebar-size=sm]:h-max border-r-2 border-primary-400 xl:border-none xl:translate-x-0 rounded-r-15 xl:rounded-15 xl:group-data-[sidebar-size=lg]:w-app-menu xl:group-data-[sidebar-size=sm]:w-app-menu-sm xl:group-data-[sidebar-size=sm]:absolute xl:group-data-[sidebar-size=lg]:fixed xl:top-4 xl:left-4 xl:group-data-[sidebar-size=lg]:bottom-4 xl:group-data-[theme-width=box]:left-auto dk-theme-card-square z-backdrop ac-transition"
         tabindex="-1">
        <div
             class="px-6 group-data-[sidebar-size=sm]:px-4 h-header flex items-center shrink-0 group-data-[sidebar-size=sm]:justify-center">
            <a href="{{ route('dashboard') }}"
               class="group-data-[sidebar-size=lg]:block hidden">
                <img src="{{ asset('assets/images/logo/logo-text.svg') }}"
                     alt="logo"
                     class="group-[.dark]:hidden">
                <img src="{{ asset('assets/images/logo/logo-text-dark.svg') }}"
                     alt="logo"
                     class="group-[.light]:hidden">
            </a>
            <a href="{{ route('dashboard') }}"
               class="group-data-[sidebar-size=lg]:hidden block">
                <img src="{{ asset('assets/images/logo/logo-icon.svg') }}"
                     alt="logo">
            </a>
        </div>
        <div id="app-menu-scrollbar"
             data-scrollbar
             class="px-2.5 group-data-[sidebar-size=sm]:px-0 group-data-[sidebar-size=sm]:!overflow-visible !overflow-x-hidden smooth-scrollbar">
            <div class="group-data-[sidebar-size=lg]:max-h-full">
                @include('layouts.leftmenu')
            </div>
        </div>
        <!-- Logout Link -->
        <div class="mt-auto px-2.5 py-6 group-data-[sidebar-size=sm]:px-2">
            <form action="{{ route('logout') }}"
                  method="POST"
                  class="flex-center-between text-gray-500 font-semibold leading-none bg-gray-200 dark:bg-dark-icon dark:text-dark-text rounded-[10px] px-6 py-4 group-data-[sidebar-size=sm]:p-[12px_8px] group-data-[sidebar-size=sm]:justify-center dk-theme-card-square">
                @csrf
                <button type="submit"
                        class="group-data-[sidebar-size=sm]:hidden block">
                    Sign Out
                </button>
                <svg xmlns="http://www.w3.org/2000/svg"
                     width="20"
                     height="20"
                     viewBox="0 0 24 24">
                    <path fill="currentColor"
                          d="M5 5h7V3H3v18h9v-2H5z" />
                    <path fill="currentColor"
                          d="m21 12l-4-4v3H9v2h8v3z" />
                </svg>
            </form>
        </div>
    </div>
    <!-- End App Menu -->

    <!-- Start App Settings Sidebar -->
    <div id="drawer-app-setting"
         class="side-canvas font-spline_sans dark:bg-dark-card-two right-0 h-screen translate-x-full duration-300 overflow-y-auto w-80 sm:w-96"
         tabindex="-1">
        <button type="button"
                data-drawer-hide="drawer-app-setting"
                aria-controls="drawer-app-setting"
                class="size-8 flex-center hover:bg-gray-200 dark:hover:bg-dark-icon rounded-lg absolute top-2.5 right-2.5 dk-theme-card-square">
            <i class="ri-close-line text-gray-500 dark:text-dark-text"></i>
        </button>
        <div class="p-6 py-3 border-b border-gray-200 dark:border-dark-border-four">
            <h6 class="text-lg font-medium text-gray-500 dark:text-dark-text">Adjust Configurations</h6>
            <p class="text-sm text-gray-500 dark:text-dark-text mt-1">
                Transform your space to reflect your personality!
            </p>
        </div>
        <!-- Customizatin Options -->
        <div class="p-6 pt-3 divide-y divide-input-border/50 dark:divide-dark-border-four space-y-10">
            <!-- Theme Mode -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Mode</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Light</label>
                        <label for="radioThemeLight"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-sun-line text-inherit text-xl"></i>
                            <input name="radioThemeMode"
                                   type="radio"
                                   id="radioThemeLight"
                                   hidden
                                   checked
                                   onchange="toggleThemeMode()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Dark</label>
                        <label for="radioThemeDark"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-moon-clear-line text-inherit text-xl"></i>
                            <input name="radioThemeMode"
                                   type="radio"
                                   id="radioThemeDark"
                                   hidden
                                   onchange="toggleThemeMode()">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Card Style -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Card Style</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Square</label>
                        <label for="radioThemeCardSquare"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-square-line text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle"
                                   type="radio"
                                   id="radioThemeCardSquare"
                                   hidden
                                   checked
                                   onchange="toggleCardStyle()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Round</label>
                        <label for="radioThemeCardRound"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-rounded-corner text-inherit text-xl"></i>
                            <input name="radioThemeCardStyle"
                                   type="radio"
                                   id="radioThemeCardRound"
                                   hidden
                                   onchange="toggleCardStyle()">
                        </label>
                    </div>
                </div>
            </div>
            <!-- Theme Width -->
            <div class="pt-3 first:pt-0">
                <h6 class="card-title text-base font-medium">Theme Layout Width</h6>
                <div class="grid grid-cols-6 gap-4 mt-2">
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Full
                            Width</label>
                        <label for="radioThemeWidthFluid"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-fullscreen-fill text-inherit text-xl"></i>
                            <input name="radioThemeWidth"
                                   type="radio"
                                   id="radioThemeWidthFluid"
                                   hidden
                                   checked
                                   onchange="settingThemeWidth()">
                        </label>
                    </div>
                    <div class="col-span-2">
                        <label
                               class="text-xs text-gray-500 dark:text-dark-text-two font-medium mb-1.5 inline-block">Container</label>
                        <label for="radioThemeWidthBox"
                               class="text-gray-500 dark:text-dark-text-two border border-gray-200 hover:border-input-border dark:border-dark-border dark:hover:border-dark-border-five has-[:checked]:border-none rounded-md flex-center py-2 select-none cursor-pointer ring-2 ring-transparent has-[:checked]:ring-primary-500 leading-none dk-theme-card-square">
                            <i class="ri-exchange-box-line text-inherit text-xl"></i>
                            <input name="radioThemeWidth"
                                   type="radio"
                                   id="radioThemeWidthBox"
                                   hidden
                                   onchange="settingThemeWidth()">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reset All Customization -->
        <div class="flex-center justify-end p-3 absolute bottom-0 left-0 right-0 z-[1] bg-gray-200 dark:bg-dark-icon">
            <button type="reset"
                    class="btn b-solid btn-danger-solid btn-sm"
                    onclick="resetThemeConfig()">Reset</button>
        </div>
    </div>
    <!-- End App Settings Sidebar -->

    <!-- Start Main Content -->
    <div
         class="main-content group-data-[sidebar-size=lg]:xl:ml-[calc(theme('spacing.app-menu')_+_16px)] group-data-[sidebar-size=sm]:xl:ml-[calc(theme('spacing.app-menu-sm')_+_16px)] px-4 group-data-[theme-width=box]:xl:px-0 ac-transition">
        @yield('content')
    </div>
    <!-- End Main Content -->

    <script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/flowbite.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smooth-scrollbar/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-admin-lms.js') }}"></script>
    <script src="{{ asset('assets/js/component/app-menu-bar.js') }}"></script>
    <script src="{{ asset('assets/js/switcher.js') }}"></script>
    <script src="{{ asset('assets/js/layout.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
