@extends('layouts.admin')

{{--@extends('admin.dashboard.showCard')--}}
@section('content')
    <div class="col-span-12 xl:col-span-9 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
            <a href="" class="ml-auto text-primary truncate">Show More</a>
        </div>
        <div class="report-box-2 intro-y mt-5">
            <div class="box grid grid-cols-12">
                <div class="col-span-12 lg:col-span-4 px-8 py-12 flex flex-col justify-center">
                    <i data-lucide="pie-chart" class="w-10 h-10 text-pending"></i>
                    <div class="justify-start flex items-center text-slate-600 dark:text-slate-300 mt-12">
                        Total sold amount
                        <i id="salesTotal" data-lucide="alert-circle" class="tooltip w-4 h-4 ml-1.5"
                           title="Total sales amount"></i>
                    </div>
                    <div class="flex items-center justify-start mt-4">
                        <div class="relative text-2xl font-medium">
                            <span id="totalSales" class="text-xl font-medium"></span>
                        </div>
                        <a class="text-slate-500 ml-4" href="">
                            <i data-lucide="refresh-ccw" class="w-4 h-4"></i>
                        </a>
                    </div>
                    <div class="mt-4 text-slate-500 text-xs">Updated just now</div>

                </div>
                <div class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                    <ul class="nav nav-pills col-span-12 border border-slate-300 dark:border-darkmode-300 border-dashed rounded-md p-1 mb-8" role="tablist">
                        <li id="" class="nav-item flex-1" role="presentation">
                            <button
                                name="dataForm"
                                class="dataForm nav-link w-full p-2 "
                            >Today</button>
                        </li>
                        <li id="" class="nav-item flex-1" role="presentation">
                            <button
                                name="dataForm"
                                class="dataForm nav-link w-full p-2 "
                            >Weekly</button>
                        </li>
                        <li id="" class="nav-item flex-1" role="presentation">
                            <button
                                name=""
                                class="dataForm nav-link w-full p-2 active"
                            >Monthly</button>
                        </li>
                        <li id="date_report" class="nav-item flex-1" role="presentation">
                            <input id="calendarDash" type="text" class="datepicker form-control sm:w-56 box pl-10"
                                   value="">
                        </li>
                    </ul>
                    <div id="dashboardPart">

                    </div>
                </div>
            </div>
        </div>
        <div id="faq-accordion-2" class="accordion accordion-boxed py-5">

        </div>
    </div>
@endsection

@section('scripts')

    <script>
        function updateDash($dataForm) {
            let value = {
                'dataForm': $dataForm,
                'calendar': $('#calendarDash').val()
            }
            $.ajax({
                type: 'get',
                url: '{{URL::to('/admin/dashboardContent')}}',
                data: value,
                success: function (data) {
                    $('#salesTotal').attr('title', `Total value of your sales: UZS `+ data['salesTotal']);
                    $('#totalSales').text(`UZS `+ data['salesTotal']);
                    $('#faq-accordion-2').html(data['clients']);
                    $('#dashboardPart').html(data['dashboardPart']);
                    $('#calendarDash').val(data['calendar']);
                },
            });
        }

        jQuery(document).ready(function($){
            updateDash('Monthly');
        })

        $(document).on('click', '.button-apply', function () {
            updateDash('date');
            $('.dataForm').removeClass('active');
            $('#calendarDash').addClass('bg-primary text-white');
        })
        $(document).on('click', '.dataForm', function () {
            updateDash($(this).text());
            $('#calendarDash').removeClass('bg-primary text-white');
            $('.dataForm').removeClass('active');
            $(this).addClass('active');
        })

    </script>

@endsection
