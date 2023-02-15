@extends('layouts.admin')

@extends('admin.dashboard.showCard')

@section('scripts')

    <script>
        $(document).on('click', '.button-apply', function () {
            $('#submitDate').click();
        })

    </script>

@endsection
