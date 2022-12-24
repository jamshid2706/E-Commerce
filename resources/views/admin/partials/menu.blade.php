<nav class="side-nav">
    <ul>
        <li>
            <a href="javascript:;" class="side-menu side-menu--active">
                <div class="side-menu__icon">
                    <i data-lucide="home"></i>
                </div>
                <div class="side-menu__title">
                    {{ trans('global.dashboard') }}
                    <div class="side-menu__sub-icon transform rotate-180">
                        <i data-lucide="chevron-down"></i>
                    </div>
                </div>
            </a>
            <ul class="side-menu__sub-open">
                <li>
                    <a href="{{route('admin.home')}}"
                       class="side-menu side-menu--active">
                        <div class="side-menu__icon">
                            <i data-lucide="activity"></i>
                        </div>
                        <div class="side-menu__title">
                            Overview 1
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        @can('user_management_access')
            <li>
                <a href="javascript:;"
                   class="side-menu {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="user"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.userManagement.title') }}
                        <div class="side-menu__sub-icon transform rotate-180">
                            <i data-lucide="chevron-down"></i>
                        </div>
                    </div>
                </a>
                @can('permission_access')
                    <ul class="side-menu__sub-open">
                        <li>
                            <a href="{{ route("admin.permissions.index") }}"
                               class="side-menu {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                                <div class="side-menu__icon">
                                    <i data-lucide="activity"></i>
                                </div>
                                <div class="side-menu__title">
                                    {{ trans('cruds.permission.title') }}
                                </div>
                            </a>
                        </li>
                        @endcan
                        @can('role_access')
                            <li>
                                <a href="{{ route("admin.roles.index") }}"
                                   class="side-menu {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        {{ trans('cruds.role.title') }}
                                    </div>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li>
                                <a href="{{ route("admin.users.index") }}"
                                   class="side-menu {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                    <div class="side-menu__icon">
                                        <i data-lucide="activity"></i>
                                    </div>
                                    <div class="side-menu__title">
                                        {{ trans('cruds.user.title') }}
                                    </div>
                                </a>
                            </li>
                    </ul>
                @endcan
            </li>
        @endcan

        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         icon-name="shopping-bag" data-lucide="shopping-bag" class="lucide lucide-shopping-bag">
                        <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 01-8 0"></path>
                    </svg>
                </div>
                <div class="side-menu__title">
                    E-Commerce
                    <div class="side-menu__sub-icon ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                             fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                             stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down"
                             class="lucide lucide-chevron-down">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="https://enigma.left4code.com/page/side-menu/light/categories" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Categories
                        </div>
                    </a>
                </li>
                <li>
                    <a href="https://enigma.left4code.com/page/side-menu/light/add-product" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Add Product
                        </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Products
                            <div class="side-menu__sub-icon ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down"
                                     class="lucide lucide-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/product-list"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Product List</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/product-grid"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Product Grid</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Transactions
                            <div class="side-menu__sub-icon ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down"
                                     class="lucide lucide-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/transaction-list"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Transaction List</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/transaction-detail"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Transaction Detail</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Sellers
                            <div class="side-menu__sub-icon ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="chevron-down" data-lucide="chevron-down"
                                     class="lucide lucide-chevron-down">
                                    <polyline points="6 9 12 15 18 9"></polyline>
                                </svg>
                            </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/seller-list"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Seller List</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://enigma.left4code.com/page/side-menu/light/seller-detail"
                               class="side-menu">
                                <div class="side-menu__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round" icon-name="zap"
                                         data-lucide="zap" class="lucide lucide-zap">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div class="side-menu__title">Seller Detail</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://enigma.left4code.com/page/side-menu/light/reviews" class="side-menu">
                        <div class="side-menu__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="activity" data-lucide="activity"
                                 class="lucide lucide-activity">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </div>
                        <div class="side-menu__title">
                            Reviews
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        @can('product_access')
            <li>
                <a href="{{ route("admin.products.index") }}"
                   class="side-menu {{ request()->is("admin/products") || request()->is("admin/products/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="inbox"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.product.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @can('client_access')
            <li class="side-nav__devider my-6"></li>
            <li>
                <a href="{{ route("admin.clients.index") }}"
                   class="side-menu {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="users"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.client.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @can('category_access')
            <li>
                <a href="{{ route("admin.categories.index") }}"
                   class="side-menu {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="shopping-bag"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.category.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @can('sale_access')
            <li>
                <a href="{{ route("admin.sales.index") }}"
                   class="side-menu {{ request()->is("admin/sales") || request()->is("admin/sales/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="credit-card"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.sale.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @can('finance_access')
            <li>
                <a href="{{ route("admin.finances.index") }}"
                   class="side-menu {{ request()->is("admin/finances") || request()->is("admin/finances/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="dollar-sign"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.finance.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @can('ware_house_access')
            <li>
                <a href="{{ route("admin.ware-houses.index") }}"
                   class="side-menu {{ request()->is("admin/ware-houses") || request()->is("admin/ware-houses/*") ? "c-active" : "" }}">
                    <div class="side-menu__icon">
                        <i data-lucide="truck"></i>
                    </div>
                    <div class="side-menu__title">
                        {{ trans('cruds.wareHouse.title') }}
                    </div>
                </a>
            </li>
        @endcan

        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li>
                    <a href="{{ route('profile.password.edit') }}"
                       class="side-menu {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}">
                        <div class="side-menu__icon">
                            <i data-lucide="settings"></i>
                        </div>
                        <div class="side-menu__title">
                            {{ trans('global.change_password') }}
                        </div>
                    </a>
                </li>
            @endcan
        @endif

        <li>
            <a href="#"
               class="side-menu" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <div class="side-menu__icon">
                    <i data-lucide="log-out"></i>
                </div>
                <div class="side-menu__title">
                    {{ trans('global.logout') }}
                </div>
            </a>
        </li>
    </ul>
</nav>
