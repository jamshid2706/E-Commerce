@extends('layouts.admin')
@section('title')
    | Sales
@endsection
@section('content')
    <h2 class="intro-y text-lg font-medium mt-10">Sales</h2>
    @include('admin.sales.create')
    <div id="faq-accordion-2" class="accordion accordion-boxed py-5">
        @foreach($sales as $sale)
            <div class="accordion-item box dark:bg-darkmode-300 bg-slate-200" style="border: none;">
                <div id="faq-accordion-content-5" class="accordion-header">
                    <div class="accordion-button dark:bg-darkmode-600 collapsed"
                            data-tw-toggle="collapse"
                            data-tw-target="#faq-accordion-collapse-5" aria-expanded="true"
                            aria-controls="faq-accordion-collapse-5">
                        <div class="grid-cols-10 grid">
                            <div class="pl-5 flex items-center">{{ $sale->id ?? '' }}</div>
                            <div class="col-span-2 flex items-center">{{ $sale->client->name ?? ''}}</div>
                            <div class="col-span-3 flex items-center"><i data-lucide="map-pin" class="px-1 h-full"></i>{{ $sale->client->address }}</div>
                            <div class="flex items-center"><i data-lucide="banknote" class="px-1 h-full"></i>{{ $sale->amount ?? '' }}</div>
                            <div class="flex items-center justify-end">{{ $sale->created_at->format('d-m-Y') ?? '' }}</div>
                            <div class="col-span-2 table-report__action">
                                <div class="flex justify-end items-center">
                                    <!-- BEGIN: Modal Toggle -->
                                    <div class="flex mt-4 lg:mt-0">
                                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-preview-{{$sale->id}}"
                                           class="btn btn-outline-danger mr-3"><i data-lucide="trash-2" class="px-1 h-full"></i>Delete</a>
                                    </div>
                                    <!-- END: Modal Toggle -->
                                    <!-- BEGIN: Modal Content -->
                                    <div id="delete-modal-preview-{{$sale->id}}" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body p-0">
                                                    <div class="p-5 text-center">
                                                        <i data-lucide="x-circle"
                                                           class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                                        <div class="text-3xl mt-5">Are you sure?</div>
                                                        <div class="text-slate-500 mt-2">
                                                            Do you really want to delete these records? <br>This process cannot be undone.
                                                        </div>
                                                    </div>
                                                    <div class="px-5 pb-8 text-center">
                                                        <form action="{{ route('admin.sales.delete', $sale->id) }}"
                                                              method="post">
                                                            <button type="button" data-tw-dismiss="modal"
                                                                    class="btn btn-outline-secondary w-24 mr-1">Cancel
                                                            </button>
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-outline-danger w-24">
                                                                Yes
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END: Modal Content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="faq-accordion-collapse-5" class="accordion-collapse collapse" style="display: none;"
                     aria-labelledby="faq-accordion-content-5" data-tw-parent="#faq-accordion-2">
                    <div class="accordion-body text-slate-600 dark:text-slate-500 leading-relaxed">
                        <div class="overflow-x-auto px-10">
                            <table class="table table-report -mt-2 px-10">
                                <thead>
                                <tr class="">
                                    <th class="whitespace-nowrap uppercase">№</th>
                                    <th class="whitespace-nowrap uppercase">Product Name</th>
                                    <th class="whitespace-nowrap uppercase">price</th>
                                    <th class="whitespace-nowrap uppercase">count</th>
                                    <th class="whitespace-nowrap uppercase">overall</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($sale->products as $product) {
                                        $title = $product->product[0]->title;
                                        echo '<tr class="intro-x">

                            <td class="!py-3.5">' . $i . '</td>
                            <td class="!py-3.5">' . $title . '</td>
                            <td class="!py-3.5">' . $product->price . '</td>
                            <td class="!py-3.5">' . $product->count . '</td>
                            <td class="!py-3.5">' . $product->total . '</td>
                            </tr>';
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

    </script>
@endsection
