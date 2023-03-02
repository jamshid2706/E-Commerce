<nav class="side-nav">
    <ul>
        <li>
            <a href="{{ route('admin.home') }}"
               class="side-menu side-menu{{ request()->is("admin") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="home"></i></div>
                <div class="side-menu__title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route("admin.products") }}"
               class="side-menu side-menu{{ request()->is("admin/products") || request()->is("admin/products/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="inbox"></i></div>
                <div class="side-menu__title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.categories') }}"
               class="side-menu side-menu{{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="shopping-bag" data-lucide="shopping-bag" class="lucide lucide-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 01-8 0"></path>
                    </svg>
                </div>
                <div class="side-menu__title">Category</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="box" data-lucide="box" class="lucide lucide-box">
                        <path
                            d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
                        <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                        <line x1="12" y1="22.08" x2="12" y2="12"></line>
                    </svg>
                </div>
                <div class="side-menu__title">
                    Imports
                    <div class="side-menu__sub-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             icon-name="chevron-down" data-lucide="chevron-down" class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="" style="display: none;">
                <li>
                    <a href="{{route('admin.customers')}}" class="side-menu">
                        <div class="side-menu__icon">
                           <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Customers
                        </div>
                    </a>
                </li>
{{--                <li>--}}
{{--                    <a href="https://enigma.left4code.com/page/simple-menu/light/dashboard-overview-1"--}}
{{--                       class="side-menu">--}}
{{--                        <div class="side-menu__icon">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"--}}
{{--                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"--}}
{{--                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"--}}
{{--                                 class="lucide lucide-activity">--}}
{{--                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>--}}
{{--                            </svg>--}}
{{--                        </div>--}}
{{--                        <div class="side-menu__title">--}}
{{--                            Simple Menu--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </li>
        <li>
            <a href="{{ route('admin.clients') }}"
               class="side-menu side-menu{{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "--active" : "" }}">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="users" data-lucide="users" class="lucide lucide-users">
                        <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 010 7.75"></path>
                    </svg>
                </div>
                <div class="side-menu__title">Clients</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.sales') }}"
               class="side-menu side-menu{{ request()->is("admin/sales") || request()->is("admin/sales/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="clipboard"></i></div>
                <div class="side-menu__title">Sales</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.finances') }}"
               class="side-menu side-menu{{ request()->is("admin/finances") || request()->is("admin/finances/*") ? "--active" : "" }}">
                <div class="side-menu__icon"><i data-lucide="dollar-sign"></i></div>
                <div class="side-menu__title">Finances</div>
            </a>
        </li>
    </ul>

    <div data-url="#" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 box dark:bg-dark-2 border rounded-full
    w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
        <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
        <div onclick="switchDark()" class="dark-mode-switcher__toggle dark-mode-switcher__toggle--active border"></div>
    </div>
</nav>
