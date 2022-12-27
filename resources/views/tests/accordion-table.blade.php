<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Royal @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/app2.css') }}"/>
    <link rel="icon" type="image/icon" href="/svgexport-13.svg">
</head>
<body>
@include('admin.partials.mobile-menu')
@include('admin.partials.top-menu')
<div class="flex overflow-hidden">
    @include('admin.partials.menu')
    <div id="div1" class="content">
        <div id="faq-accordion-2" class="accordion accordion-boxed">
            <div class="accordion-item">
                <div id="faq-accordion-content-5" class="accordion-header">
                    <button class="accordion-button" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-5" aria-expanded="true" aria-controls="faq-accordion-collapse-5">Order number | Sold to | Amount</button>
                </div>
                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse show" aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap">First Name</th>
                                    <th class="whitespace-nowrap">Last Name</th>
                                    <th class="whitespace-nowrap">Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Angelina</td>
                                    <td>Jolie</td>
                                    <td>@angelinajolie</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brad</td>
                                    <td>Pitt</td>
                                    <td>@bradpitt</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Charlie</td>
                                    <td>Hunnam</td>
                                    <td>@charliehunnam</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div id="faq-accordion-content-6" class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-6" aria-expanded="false" aria-controls="faq-accordion-collapse-6">
                        Understanding IP Addresses, Subnets, and CIDR Notation
                    </button>
                </div>
                <div id="faq-accordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-6" data-tw-parent="#faq-accordion-2">
                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div id="faq-accordion-content-7" class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-7" aria-expanded="false" aria-controls="faq-accordion-collapse-7">
                        How To Troubleshoot Common HTTP Error Codes
                    </button>
                </div>
                <div id="faq-accordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-7" data-tw-parent="#faq-accordion-2">
                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div id="faq-accordion-content-8" class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-tw-toggle="collapse" data-tw-target="#faq-accordion-collapse-8" aria-expanded="false" aria-controls="faq-accordion-collapse-8">
                        An Introduction to Securing your Linux VPS
                    </button>
                </div>
                <div id="faq-accordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faq-accordion-content-8" data-tw-parent="#faq-accordion-2">
                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                    </div>
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</div>
@yield('scripts')
<script src="{{ asset('/js/enigma.js') }}"></script>
</body>
</html>
