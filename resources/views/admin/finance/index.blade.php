@extends('layouts.admin')
@section('title') | Finances @endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Finances</h2>
    <div class="grid grid-cols-12 gap-6">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center">
            @include('admin.finance.create')
        </div>
@endsection
