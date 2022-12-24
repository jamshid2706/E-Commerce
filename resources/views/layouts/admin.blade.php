<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ trans('panel.site_title') }}</title>
    <link href="{{ asset('css/app2.css') }}" rel="stylesheet"/>
    @livewireStyles
</head>
<body class="py-5 md:py-0">


<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="https://enigma.left4code.com/dist/images/logo.svg">
        </a>
        <a href="javascript:;" class="mobile-menu-toggler">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 icon-name="bar-chart-2" data-lucide="bar-chart-2"
                 class="lucide lucide-bar-chart-2 w-8 h-8 text-white transform -rotate-90">
                <line x1="18" y1="20" x2="18" y2="10"></line>
                <line x1="12" y1="20" x2="12" y2="4"></line>
                <line x1="6" y1="20" x2="6" y2="14"></line>
            </svg>
        </a>
    </div>
    <div class="scrollable" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                         style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 0px;">
                            <a href="javascript:;" class="mobile-menu-toggler">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="x-circle" data-lucide="x-circle"
                                     class="lucide lucide-x-circle w-8 h-8 text-white transform -rotate-90">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                </svg>
                            </a>
                            <ul class="scrollable__content py-2">
                                <li>
                                    <a href="javascript:;" class="menu menu--active">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="home"
                                                 data-lucide="home" class="lucide lucide-home">
                                                <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                                <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Dashboard
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon transform rotate-180">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="menu__sub-open">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-1"
                                               class="menu menu--active">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-2"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-3"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 3
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-4"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 4
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="box"
                                                 data-lucide="box" class="lucide lucide-box">
                                                <path
                                                    d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"></path>
                                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Menu Layout
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dashboard-overview-1"
                                               class="menu menu--active">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Side Menu
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/simple-menu/light/dashboard-overview-1"
                                               class="menu menu--active">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Simple Menu
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/top-menu/light/dashboard-overview-1"
                                               class="menu menu--active">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Top Menu
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="shopping-bag"
                                                 data-lucide="shopping-bag" class="lucide lucide-shopping-bag">
                                                <path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"></path>
                                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                                <path d="M16 10a4 4 0 01-8 0"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            E-Commerce
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/categories"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Categories
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/add-product"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Add Product
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Products
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/product-list"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Product List</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/product-grid"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Product Grid</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Transactions
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/transaction-list"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Transaction List</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/transaction-detail"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Transaction Detail</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Sellers
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/seller-list"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Seller List</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/seller-detail"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Seller Detail</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/reviews"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Reviews
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/inbox" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="inbox"
                                                 data-lucide="inbox" class="lucide lucide-inbox">
                                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                                <path
                                                    d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Inbox
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/file-manager"
                                       class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="hard-drive"
                                                 data-lucide="hard-drive" class="lucide lucide-hard-drive">
                                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                                <path
                                                    d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            File Manager
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/point-of-sale"
                                       class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="credit-card"
                                                 data-lucide="credit-card" class="lucide lucide-credit-card">
                                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                                <line x1="1" y1="10" x2="23" y2="10"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Point of Sale
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/chat" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round"
                                                 icon-name="message-square" data-lucide="message-square"
                                                 class="lucide lucide-message-square">
                                                <path
                                                    d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Chat
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/post" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="file-text"
                                                 data-lucide="file-text" class="lucide lucide-file-text">
                                                <path
                                                    d="M14.5 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V7.5L14.5 2z"></path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                                <line x1="10" y1="9" x2="8" y2="9"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Post
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://enigma.left4code.com/page/side-menu/light/calendar" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="calendar"
                                                 data-lucide="calendar" class="lucide lucide-calendar">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                                <line x1="3" y1="10" x2="21" y2="10"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Calendar
                                        </div>
                                    </a>
                                </li>
                                <li class="menu__devider my-6"></li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="edit"
                                                 data-lucide="edit" class="lucide lucide-edit">
                                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Crud
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/crud-data-list"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Data List
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/crud-form"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Form
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="users"
                                                 data-lucide="users" class="lucide lucide-users">
                                                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                                <circle cx="9" cy="7" r="4"></circle>
                                                <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                                                <path d="M16 3.13a4 4 0 010 7.75"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Users
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/users-layout-1"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Layout 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/users-layout-2"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Layout 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/users-layout-3"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Layout 3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="trello"
                                                 data-lucide="trello" class="lucide lucide-trello">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <rect x="7" y="7" width="3" height="9"></rect>
                                                <rect x="14" y="7" width="3" height="5"></rect>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Profile
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/profile-overview-1"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 1
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/profile-overview-2"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 2
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/profile-overview-3"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overview 3
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="layout"
                                                 data-lucide="layout" class="lucide lucide-layout">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="3" y1="9" x2="21" y2="9"></line>
                                                <line x1="9" y1="21" x2="9" y2="9"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Pages
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Wizards
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wizard-layout-1"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wizard-layout-2"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 2</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wizard-layout-3"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 3</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Blog
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/blog-layout-1"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/blog-layout-2"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 2</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/blog-layout-3"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 3</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Pricing
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/pricing-layout-1"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/pricing-layout-2"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 2</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Invoice
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/invoice-layout-1"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/invoice-layout-2"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 2</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    FAQ
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/faq-layout-1"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 1</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/faq-layout-2"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 2</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/faq-layout-3"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Layout 3</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/login/light/login" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Login
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/login/light/register"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Register
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/main/light/error-page"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Error Page
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/update-profile"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Update profile
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/change-password"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Change Password
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu__devider my-6"></li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="inbox"
                                                 data-lucide="inbox" class="lucide lucide-inbox">
                                                <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                                <path
                                                    d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Components
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Table
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/regular-table"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Regular Table</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/tabulator"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Tabulator</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Overlay
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/modal"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Modal</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/slide-over"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Slide Over</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/notification"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Notification</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/tab"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Tab
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/accordion"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Accordion
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/button"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Button
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/alert"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Alert
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/progress-bar"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Progress Bar
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/tooltip"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Tooltip
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/dropdown"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Dropdown
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/typography"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Typography
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/icon"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Icon
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/loading-icon"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Loading Icon
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="sidebar"
                                                 data-lucide="sidebar" class="lucide lucide-sidebar">
                                                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                                <line x1="9" y1="3" x2="9" y2="21"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Forms
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/regular-form"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Regular Form
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/datepicker"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Datepicker
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/tom-select"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Tom Select
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/file-upload"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    File Upload
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;" class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Wysiwyg Editor
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="chevron-down" data-lucide="chevron-down"
                                                         class="lucide lucide-chevron-down menu__sub-icon">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg>
                                                </div>
                                            </a>
                                            <ul class="">
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wysiwyg-editor-classic"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Classic</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wysiwyg-editor-inline"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Inline</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wysiwyg-editor-balloon"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Balloon</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wysiwyg-editor-balloon-block"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Balloon Block</div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://enigma.left4code.com/page/side-menu/light/wysiwyg-editor-document"
                                                       class="menu">
                                                        <div class="menu__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none"
                                                                 stroke="currentColor" stroke-width="2"
                                                                 stroke-linecap="round" stroke-linejoin="round"
                                                                 icon-name="zap" data-lucide="zap"
                                                                 class="lucide lucide-zap">
                                                                <polygon
                                                                    points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                                            </svg>
                                                        </div>
                                                        <div class="menu__title">Document</div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/validation"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Validation
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;" class="menu">
                                        <div class="menu__icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="hard-drive"
                                                 data-lucide="hard-drive" class="lucide lucide-hard-drive">
                                                <line x1="22" y1="12" x2="2" y2="12"></line>
                                                <path
                                                    d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                                <line x1="6" y1="16" x2="6.01" y2="16"></line>
                                                <line x1="10" y1="16" x2="10.01" y2="16"></line>
                                            </svg>
                                        </div>
                                        <div class="menu__title">
                                            Widgets
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                 viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                 stroke-linecap="round" stroke-linejoin="round" icon-name="chevron-down"
                                                 data-lucide="chevron-down"
                                                 class="lucide lucide-chevron-down menu__sub-icon">
                                                <polyline points="6 9 12 15 18 9"></polyline>
                                            </svg>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/chart"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Chart
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/slider"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Slider
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://enigma.left4code.com/page/side-menu/light/image-zoom"
                                               class="menu">
                                                <div class="menu__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                         icon-name="activity" data-lucide="activity"
                                                         class="lucide lucide-activity">
                                                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                                    </svg>
                                                </div>
                                                <div class="menu__title">
                                                    Image Zoom
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1122px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                 style="height: 157px; display: block; transform: translate3d(0px, 0px, 0px);"></div>
        </div>
    </div>
</div>
<!-- END: Mobile Menu -->


<!-- BEGIN: Top Bar -->
<div
    class="top-bar-boxed  h-[70px] md:h-[65px] z-[51] border-b border-white/[0.08] mt-12 md:mt-0 -mx-3 sm:-mx-8 md:-mx-0 px-3 md:border-b-0 relative md:fixed md:inset-x-0 md:top-0 sm:px-8 md:px-10 md:pt-10 md:bg-gradient-to-b md:from-slate-100 md:to-transparent dark:md:from-darkmode-700">
    <div class="h-full flex items-center">
        <!-- BEGIN: Logo -->
        <a href="" class="logo -intro-x hidden md:flex xl:w-[180px] block">
            <img alt="Midone - HTML Admin Template" class="logo__image w-6"
                 src="https://enigma.left4code.com/dist/images/logo.svg">
            <span class="logo__text text-white text-lg ml-3">
                Enigma
            </span>
        </a>
        <!-- END: Logo -->
        <!-- BEGIN: Breadcrumb -->
        <nav aria-label="breadcrumb" class="-intro-x h-[45px] mr-auto">
            <ol class="breadcrumb breadcrumb-light">
                <li class="breadcrumb-item"><a href="#">Application</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>
        <!-- END: Breadcrumb -->
        <!-- BEGIN: Search -->
        <div class="intro-x relative mr-3 sm:mr-6">
            <div class="search hidden sm:block">
                <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     icon-name="search" data-lucide="search"
                     class="lucide lucide-search search__icon dark:text-slate-500">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </div>
            <a class="notification notification--light sm:hidden" href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     icon-name="search" data-lucide="search"
                     class="lucide lucide-search notification__icon dark:text-slate-500">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </a>
            <div class="search-result">
                <div class="search-result__content">
                    <div class="search-result__content__title">Pages</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center">
                            <div
                                class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="inbox" class="lucide lucide-inbox w-4 h-4"
                                     data-lucide="inbox">
                                    <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                    <path
                                        d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"></path>
                                </svg>
                            </div>
                            <div class="ml-3">Mail Settings</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div
                                class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="users" class="lucide lucide-users w-4 h-4"
                                     data-lucide="users">
                                    <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 00-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 010 7.75"></path>
                                </svg>
                            </div>
                            <div class="ml-3">Users &amp; Permissions</div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div
                                class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round" icon-name="credit-card"
                                     class="lucide lucide-credit-card w-4 h-4" data-lucide="credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>
                            </div>
                            <div class="ml-3">Transactions Report</div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Users</div>
                    <div class="mb-5">
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                     src="https://enigma.left4code.com/dist/images/profile-4.jpg">
                            </div>
                            <div class="ml-3">Christian Bale</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                christianbale@left4code.com
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                     src="https://enigma.left4code.com/dist/images/profile-10.jpg">
                            </div>
                            <div class="ml-3">Johnny Depp</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                johnnydepp@left4code.com
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                     src="https://enigma.left4code.com/dist/images/profile-3.jpg">
                            </div>
                            <div class="ml-3">Brad Pitt</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                bradpitt@left4code.com
                            </div>
                        </a>
                        <a href="" class="flex items-center mt-2">
                            <div class="w-8 h-8 image-fit">
                                <img alt="Midone - HTML Admin Template" class="rounded-full"
                                     src="https://enigma.left4code.com/dist/images/profile-10.jpg">
                            </div>
                            <div class="ml-3">John Travolta</div>
                            <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">
                                johntravolta@left4code.com
                            </div>
                        </a>
                    </div>
                    <div class="search-result__content__title">Products</div>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/preview-7.jpg">
                        </div>
                        <div class="ml-3">Sony Master Series A9G</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/preview-2.jpg">
                        </div>
                        <div class="ml-3">Nike Tanjun</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/preview-5.jpg">
                        </div>
                        <div class="ml-3">Nikon Z6</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                    </a>
                    <a href="" class="flex items-center mt-2">
                        <div class="w-8 h-8 image-fit">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/preview-5.jpg">
                        </div>
                        <div class="ml-3">Sony Master Series A9G</div>
                        <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Electronic</div>
                    </a>
                </div>
            </div>
        </div>
        <!-- END: Search -->
        <!-- BEGIN: Notifications -->
        <div class="intro-x dropdown mr-4 sm:mr-6">
            <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button"
                 aria-expanded="false" data-tw-toggle="dropdown">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     icon-name="bell" data-lucide="bell"
                     class="lucide lucide-bell notification__icon dark:text-slate-500">
                    <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                    <path d="M13.73 21a2 2 0 01-3.46 0"></path>
                </svg>
            </div>
            <div class="notification-content pt-2 dropdown-menu">
                <div class="notification-content__box dropdown-content">
                    <div class="notification-content__title">Notifications</div>
                    <div class="cursor-pointer relative flex items-center ">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/profile-4.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Christian Bale</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/profile-10.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its layout.
                                The point of using Lorem
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/profile-3.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                text ever since the 1500
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/profile-10.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">John Travolta</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">It is a long established fact that a
                                reader will be distracted by the readable content of a page when looking at its layout.
                                The point of using Lorem
                            </div>
                        </div>
                    </div>
                    <div class="cursor-pointer relative flex items-center mt-5">
                        <div class="w-12 h-12 flex-none image-fit mr-1">
                            <img alt="Midone - HTML Admin Template" class="rounded-full"
                                 src="https://enigma.left4code.com/dist/images/profile-4.jpg">
                            <div
                                class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                        </div>
                        <div class="ml-2 overflow-hidden">
                            <div class="flex items-center">
                                <a href="javascript:;" class="font-medium truncate mr-5">Denzel Washington</a>
                                <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                            </div>
                            <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of
                                Lorem Ipsum available, but the majority have suffered alteration in some form, by
                                injected humour, or randomi
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Notifications -->
        <!-- BEGIN: Account Menu -->
        <div class="intro-x dropdown w-8 h-8">
            <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110"
                 role="button" aria-expanded="false" data-tw-toggle="dropdown">
                <img alt="Midone - HTML Admin Template" src="https://enigma.left4code.com/dist/images/profile-1.jpg">
            </div>
            <div class="dropdown-menu w-56">
                <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                    <li class="p-2">
                        <div class="font-medium">Christian Bale</div>
                        <div class="text-xs text-white/60 mt-0.5 dark:text-slate-500">Backend Engineer</div>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="user" data-lucide="user"
                                 class="lucide lucide-user w-4 h-4 mr-2">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            Profile
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="edit" data-lucide="edit"
                                 class="lucide lucide-edit w-4 h-4 mr-2">
                                <path d="M11 4H4a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 013 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            Add Account
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="lock" data-lucide="lock"
                                 class="lucide lucide-lock w-4 h-4 mr-2">
                                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                <path d="M7 11V7a5 5 0 0110 0v4"></path>
                            </svg>
                            Reset Password
                        </a>
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="help-circle" data-lucide="help-circle"
                                 class="lucide lucide-help-circle w-4 h-4 mr-2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3"></path>
                                <line x1="12" y1="17" x2="12.01" y2="17"></line>
                            </svg>
                            Help
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider border-white/[0.08]">
                    </li>
                    <li>
                        <a href="" class="dropdown-item hover:bg-white/5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="toggle-right" data-lucide="toggle-right"
                                 class="lucide lucide-toggle-right w-4 h-4 mr-2">
                                <rect x="1" y="5" width="22" height="14" rx="7" ry="7"></rect>
                                <circle cx="16" cy="12" r="3"></circle>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Account Menu -->
    </div>
</div>
<!-- END: Top Bar -->


<div class="flex overflow-hidden">
    @include('partials.menu')
    <div class="content">
        @yield('content')
    </div>
</div>

@livewireScripts
<script src="{{ asset('js/enigma.js') }}"></script>
</body>
</html>
