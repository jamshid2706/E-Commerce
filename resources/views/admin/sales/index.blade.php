@extends('layouts.admin')
@section('title')
    | Sales
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Sales</h2>
    <!-- BEGIN: Modal Toggle -->
    <div class="my-4">
        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
           class="btn btn-primary">Add Sales</a>
    </div>
    <!-- END: Modal Toggle -->
    <!-- BEGIN: Modal Content -->
    <div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body px-5 py-10">
                    <div class="text-left">
                        <div>
                            <label for="vertical-form-1" class="form-label">Type</label>
                            <input id="vertical-form-1" type="text" class="form-control"
                                   placeholder="Please write...">
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary w-24 text-">Ok</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Modal Content -->
    <div id="faq-accordion-2" class="accordion accordion-boxed">
    @foreach($sales as $sale)
        <div class="accordion-item">
            <div id="faq-accordion-content-5" class="accordion-header">
                <button class="accordion-button" type="button" data-tw-toggle="collapse"
                        data-tw-target="#faq-accordion-collapse-5" aria-expanded="true"
                        aria-controls="faq-accordion-collapse-5">
                    <div class="9">
                        <h2>Sale Number: {{ $sale->id }}</h2>
                        <h2>Sold to : {{$sale->client->name}}</h2>
                        <h2>Amount : {{ $sale->amount }}</h2>
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
