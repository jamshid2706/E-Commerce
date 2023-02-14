@extends('layouts.admin')
@section('content')
    <!-- BEGIN: General Report -->
    <div class="col-span-12 xl:col-span-9 mt-8">
        <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">General Report</h2>
            <a href="" class="ml-auto text-primary truncate">Show More</a>
        </div>
        <div class="report-box-2 intro-y mt-5">
            <div class="box grid grid-cols-12">
                <div
                    class="col-span-12 lg:col-span-8 p-8 border-t lg:border-t-0 lg:border-l border-slate-200 dark:border-darkmode-300 border-dashed">
                    <form class="mt-3" action="{{route('admin.home')}}" method="get">
                        <ul class="nav nav-pills col-span-12 border border-slate-300 dark:border-darkmode-300 border-dashed rounded-md p-1 mb-8" role="tablist">
                            <li id="" class="nav-item flex-1" role="presentation">
                                <input
                                    name="dataForm"
                                    class="nav-link w-full py-1.5 px-2 {{($active == 'week') ? 'active' : ''}}"
                                    data-tw-toggle="pill"
                                    data-tw-target="#weekly-report"
                                    type="submit"
                                    role="tab"
                                    aria-controls="weekly-report"
                                    aria-selected="false"
                                    value="Weekly"
                                >
                            </li>
                            <li id="" class="nav-item flex-1" role="presentation">
                                <input
                                    name=""
                                    class="nav-link w-full py-1.5 px-2 {{($active == 'month') ? 'active' : ''}}"
                                    data-tw-toggle="pill"
                                    data-tw-target="#monthly-report"
                                    type="submit"
                                    role="tab"
                                    aria-selected="true"
                                    value="Monthly"
                                >
                            </li>
                            <li id="date_report" class="nav-item flex-1" role="presentation">
                                <input name="calendar" type="text" class="datepicker form-control sm:w-56 box pl-10 {{($active == 'date') ? 'active' : ''}}"
                                       value="{{ $calendar }}">
                                <input id="submitDate" name="dataForm" type="submit" class="hidden" value="date">
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="col-span-12 px-8 py-12 flex flex-col justify-center">
                    <h1 class="text-slate-500 text-lg">SALES NOT FOUND</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END: General Report -->
@endsection
