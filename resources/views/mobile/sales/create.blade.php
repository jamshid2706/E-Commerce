@extends('layouts.mobile')
@section('content')

    <div class="container mt-5">
        <form action="{{ route('mobile.sales.store') }}" method="post">
            @csrf
            <div class="form_content">
                <div class="input-group mb-3">
                    <input onkeyup="onChange(this)" style="color: white" name="product[]" type="text" class="form-control" placeholder="Product"
                           aria-label="Username">
                    <input onkeyup="onChange(this)" style="color: white" id="price" name="price[]" type="number" class="form-control"
                           placeholder="price" aria-label="Server">
                    <input onkeyup="onChange(this)" style="color: white" id="count" name="count[]" type="number" class="form-control"
                           placeholder="count" aria-label="Server">
                    <input onkeyup="onChange(this)" style="color: black" id="amount" name="amount[]" type="number" class="form-control"
                           placeholder="123123" aria-label="Server">
                </div>
            </div>
            <button type="button" onclick="add()" class="btn btn-primary">Add</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

@endsection

@section('scripts')

    <script>
        function onChange(element) {
            console.log(element.parentElement);
            $("#amount").val($("#price").val() * $("#count").val());
            console.log($("#price").val())
            console.log($("#count").val())
            console.log($("#price").val() * $("#count").val())
        }
        function add() {
            $(".form_content").append(
                `
            <div class="input-group mb-3">
                <input onkeyup="onChange(this)" style="color: white" name="product[]" type="text" class="form-control" placeholder="Product" aria-label="Username">
                <input onkeyup="onChange(this)" style="color: white" id="price" name="price[]" type="number" class="form-control" placeholder="price" aria-label="Server">
                <input onkeyup="onChange(this)" style="color: white" id="count" name="count[]" type="number" class="form-control" placeholder="count" aria-label="Server">
                <input onkeyup="onChange(this)" style="color: black" id="amount" name="amount[]" type="number" class="form-control" placeholder="amount" aria-label="Server">
            </div>
`
            )
        }

    </script>

@endsection
