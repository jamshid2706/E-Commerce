@extends('layouts.admin')

{{--@extends('admin.dashboard.showCard')--}}
@section('content')
    <div id="dashboardContent">
        Loading ...
    </div>
@endsection

@section('scripts')

    <script>
        function updateDash($dataForm) {
            let value = {
                'dataForm': $dataForm,
                'calendar': $('.calendarDash').val()
            }
            $.ajax({
                type: 'get',
                url: '{{URL::to('/admin/dashboardContent')}}',
                data: value,
                success: function (data) {
                    $('#dashboardContent').html(data);
                    $('#eniggmma').remove();
                },
            });
        }

        jQuery(document).ready(function($){
            updateDash('Monthly');
        })

        $(document).on('click', '.button-apply', function () {
            updateDash('date');
        })
        $(document).on('click', '.dataForm', function () {
            updateDash($(this).attr('value'));
        })

    </script>

@endsection
