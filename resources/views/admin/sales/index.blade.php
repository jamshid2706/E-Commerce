@extends('layouts.admin')
@section('title')
    | Sales
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Sales</h2>
   @include('admin.sales.create')
    <div id="faq-accordion-2" class="accordion accordion-boxed">
    @foreach($sales as $sale)
        <div class="accordion-item">
            <div id="faq-accordion-content-5" class="accordion-header">
                <button class="accordion-button" type="button" data-tw-toggle="collapse"
                        data-tw-target="#faq-accordion-collapse-5" aria-expanded="true"
                        aria-controls="faq-accordion-collapse-5">
                    <div class="9">
                        <h2>Sale Number: {{ $sale->id ?? '' }}</h2>
                        <h2>Sold to : {{ $sale->client->name ?? ''}}</h2>
                        <h2>Amount : {{ $sale->amount ?? '' }}</h2>
                    </div>
                </button>
            </div>
            <div id="faq-accordion-collapse-5" class="accordion-collapse collapse"
                 aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                    <div class="overflow-x-auto">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap">#</th>
                                <th class="whitespace-nowrap">Product</th>
                                <th class="whitespace-nowrap">Count</th>
                                <th class="whitespace-nowrap">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $i = 1;
                                foreach($sale->products as $product){
                                    $title = $product->product[0]->title;
                            echo "<tr>
                                <td>$i</td>
                                <td>$title</td>
                                <td>$product->count</td>
                                <td>$product->total</td>
                            </tr>";
                                $i++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function onChange(element) {
            let total = querySelector('#total');
            let amounts = document.getElementById('amount');
            let amount = element.parentElement.querySelector('#amount');
            let price = element.parentElement.querySelector('#price');
            let count = element.parentElement.querySelector('#count');
            amount.value = price.value * count.value;
            console.log(amount.value);
            for (let i = 0; i < amounts.length; i++) {
                total.value +=;
            }
        }

        function add() {
            $(".form_content").append(
                `<div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-1" class="form-label">Product</label>
                        <input onkeyup="onChange(this)" type="text" name="product[]"
                               class="form-control"
                               placeholder="Product Name" required>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-2" class="form-label">Price</label>
                        <input onkeyup="onChange(this)" type="number" name="price[]"
                               class="form-control" placeholder="Price" required>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-3" class="form-label">Count</label>
                        <input onkeyup="onChange(this)" type="number" name="count[]"
                               class="form-control" placeholder="Count" required>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-4" class="form-label">Amount</label>
                        <input onkeyup="onChange(this)" type="number" name="amount[]"
                               class="form-control"
                               placeholder="Amount ">
                    </div>`
            )
        }

    </script>
@endsection
