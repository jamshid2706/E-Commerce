@extends('layouts.mobile')
@section('content')
    <style>
        .form_content{
            overflow: scroll;
            max-height: 40vh;
        }
    </style>
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a href="#" data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m pt-2">
                    <i class="bi bi-chevron-left color-theme font-14 "></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">New Sale</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                   class="pt-1 icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                    <i class="bi bi-list font-20 "></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <div>
                Client Nomi, CHeck Raqami
            </div>
            <form action="{{ route('mobile.sales.store') }}" method="post">
                @csrf
                <div class="form_content">
                    <div class="form-custom form-label input-group rounded-xs">
                        <input onkeyup="onChange(this)" name="product[]" type="text" class="form-control" placeholder="Product" list="productlist">
                        <datalist id="productlist">
                            @foreach($products as $product)
                                <option value="{{ $product->title }}"></option>
                            @endforeach
                        </datalist>
                        <input onkeyup="onChange(this)" name="price[]" type="number" class="form-control" placeholder="Price">
                        <input onkeyup="onChange(this)" name="count[]" type="number" class="form-control" placeholder="Count">
                        <input onkeyup="onChange(this)" name="amount[]" type="number" class="form-control" placeholder="amount">
                    </div>
                </div>
                <div style="margin-left: 0px!important;" class="mb-2 row form-custom input-group rounded-xs">
                    <label class="text-center col-3 p-1" for="total">Total:</label>
                    <input id="total" type="number" class="col-8 form-control" disabled>
                </div>
                <div class="actions">
                    <button type="button" onclick="add()" class="btn btn-s btn-success" >Add</button>
                    <button type="submit" class="btn btn-s btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        function onChange(element) {
            let total = querySelector('#total');
            let amounts = document.getElementById('amount');
            let amount = element.parentElement.querySelector('#amount');
            let price = element.parentElement.querySelector('#price');
            let count = element.parentElement.querySelector('#count');
            amount.value = price.value * count.value;
            console.log(amount.value);
            for(let i = 0; i < amounts.length; i++) {
                total.value += 0;
            }
        }

        function add() {
            $(".form_content").append(
                `
            <div class="form-custom form-label input-group rounded-xs">
                <input onkeyup="onChange(this)" name="product[]" type="text" class="form-control" placeholder="Product" list="productlist">
                        <datalist id="productlist">
                            @foreach($products as $product)
                <option value="{{ $product->title }}"></option>
                            @endforeach
                </datalist>
                <input onkeyup="onChange(this)" id="price" name="price[]" type="number" class="form-control" placeholder="price" aria-label="Server">
        <input onkeyup="onChange(this)" id="count" name="count[]" type="number" class="form-control" placeholder="count" aria-label="Server">
        <input onkeyup="onChange(this)" id="amount" name="amount[]" type="number" class="form-control" placeholder="amount" aria-label="Server">
    </div>
`
            )
        }

    </script>

@endsection
