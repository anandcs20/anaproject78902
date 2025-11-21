@php
    $links = [
        [
            'link_name' => 'dashboard',
            'active' => ['/', 'dashboard'],
            'local' => 'dashboard',
            'svg' => 'class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                    clip-rule="evenodd"',
        ],
        [
            'link_name' => 'users.index',
            'active' => ['users.*'],
            'local' => 'users',
            'svg' => 'class="w-6 h-6 text-gray-800 dark:text-white"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="currentColor"
                viewBox="0 0 24 24">
                <path fill-rule="evenodd"
                    d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                    clip-rule="evenodd"',
        ],
    ];
@endphp

<ul id="navbar-nav"
    class="text-[14px] !leading-none space-y-1 group-data-[sidebar-size=sm]:space-y-2.5 group-data-[sidebar-size=sm]:flex group-data-[sidebar-size=sm]:flex-col group-data-[sidebar-size=sm]:items-start group-data-[sidebar-size=sm]:mx-2 group-data-[sidebar-size=sm]:overflow-visible">
    @foreach ($links as $link)
        @php
            $isActive = false;
            $suffixes = ['index', 'create', 'edit', 'show', 'delete'];
            foreach ($link['active'] as $pattern) {
                if (str_contains($pattern, '.*')) {
                    $base = str_replace('.*', '', $pattern);
                    foreach ($suffixes as $suffix) {
                        if (Request::is("$base/$suffix") || Request::is("$base")) {
                            $isActive = true;
                            break 2;
                        }
                    }
                } elseif (Request::is($pattern)) {
                    $isActive = true;
                    break;
                }
            }
        @endphp

        <li
            class="relative group/sm w-full group-data-[sidebar-size=sm]:hover:w-[calc(theme('spacing.app-menu-sm')_*_3.4)] group-data-[sidebar-size=sm]:flex-center">
            <a href="{{ route($link['link_name']) }}"
               class="leading-none px-3.5 py-3 h-[42px] flex items-center rounded-md group-data-[sidebar-size=sm]:p-3 group-data-[sidebar-size=sm]:w-full text-gray-500 dark:text-dark-text-two hover:text-primary-500 dark:hover:text-white group-data-[sidebar-size=sm]:border group-data-[sidebar-size=sm]:border-gray-200 dark:group-data-[sidebar-size=sm]:border-dark-border-four hover:!bg-primary-200 dark:hover:!bg-primary-500 group-data-[sidebar-size=sm]:bg-white dark:group-data-[sidebar-size=sm]:bg-dark-card group-data-[sidebar-size=sm]:hover:bg-primary-500 dk-theme-card-square ac-transition {{ $isActive ? 'active bg-primary-200 dark:bg-primary-500 text-primary-600 dark:text-white' : '' }}">
                <span
                      class="shrink-0 group-data-[sidebar-size=sm]:w-[calc(theme('spacing.app-menu-sm')_*_0.43)] group-data-[sidebar-size=sm]:flex-center">
                    <svg {!! $link['svg'] !!}></svg>
                </span>
                <span
                      class="group-data-[sidebar-size=sm]:hidden group-data-[sidebar-size=sm]:ml-6 group-data-[sidebar-size=sm]:group-hover/sm:block ml-3 shrink-0">
                    {{ __('messages.' . $link['local']) }}
                </span>
            </a>
        </li>
    @endforeach
</ul>
