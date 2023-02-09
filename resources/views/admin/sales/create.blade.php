@extends('layouts.admin')
@section('title')
    | Sales
@endsection
@section('content')
    <h2 class=" text-lg font-medium mt-10">Adding Sale</h2>

    <div class="intro-y box mt-5">
        <div class="px-5 sm:px-16 overflow-y-scroll scrollbar-hidden" style="height: 300px">
            <form class="mt-3" action="{{route('admin.sales.store')}}" method="post">
                @csrf
            <table class="table max-h-full">
                <thead class="relative ">
                <tr>
                    <th class="border-b-2 dark:border-darkmode-400 whitespace-nowrap">Product</th>
                    <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Count</th>
                    <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Price</th>
                    <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Total</th>
                    <th class="border-b-2 dark:border-darkmode-400 text-center whitespace-nowrap">Actions</th>
                </tr>
                </thead>
                <tbody id="body" class="overflow-y-scroll">
                <tr>
                    <td class="border-b dark:border-darkmode-400">
                        <div class="font-medium whitespace-nowrap">Midone HTML Admin Template</div>
                        <div class="text-slate-500 text-sm mt-0.5 whitespace-nowrap">Regular License</div>
                    </td>
                    <td class="text-right border-b dark:border-darkmode-400 w-32">2</td>
                    <td class="text-right border-b dark:border-darkmode-400 w-32">$25</td>
                    <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$50</td>
                    <td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">
                        <a class="btn btn-outline-danger flex items-center text-danger" href="javascript:;" data-tw-toggle="modal"
                           data-tw-target="#delete-confirmation-modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                 stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
                                 class="lucide lucide-trash-2 w-4 h-4 mr-1">
                                <polyline points="3 6 5 6 21 6"></polyline>
                                <path
                                    d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path>
                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            Delete
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="px-5 sm:px-20 flex flex-col-reverse sm:flex-row">
            <div class="text-center sm:text-left mt-10 sm:mt-0">
                <div class="text-lg text-primary font-medium mt-2"></div>
            </div>
            <div class="text-center sm:text-right sm:ml-auto">
                <div class="text-xl text-primary font-medium mt-2">Total</div>
            </div>
        </div>
        <div class="p-5 grid grid-cols-12">
            <div class="col-span-2 sm:col-span-3 relative">
                {{--<label for="modal-form-1" class="form-label">Product</label>--}}
                <div
                    class=" hidden product-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                    Product not found
                    <div class="tooltip-arrow absolute"></div>
                </div>
                <div class="relative w-full">
                    <input id="product_name"
                           type="text" class="form-control search__input"
                           placeholder="Product Name" autocomplete="off" data-tooltip-target="tooltip-default">
                    <div id="btn" class="text-danger absolute top-0 right-0 mt-1 p-1 text-gray-600 cursor-pointer hidden">
                        <i data-lucide="x-circle" height="20px"></i>
                    </div>
                </div>
                <div class="absolute hidden dark:bg-darkmode-400/70 bg-slate-200 w-52 ajax_result" style="padding: 0"></div>
            </div>
            <div class="col-span-2 sm:col-span-3 relative">
                <div class="tool-clear hidden price-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                    Enter higher price
                    <div class="tooltip-arrow absolute"></div>
                </div>
                <input id="product_price" type="number" class="disable-it form-control" placeholder="Price">
            </div>
            <div class="col-span-2 sm:col-span-3 relative">
                <div class="tool-clear hidden count-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                    Please enter the right amount
                    <div class="tooltip-arrow absolute"></div>
                </div>
                <input id="product_count" type="number"
                       class="disable-it form-control" placeholder="Count">
            </div>
            <div class="col-span-2 sm:col-span-3 relative">
                <input id="product_amount" type="number" class="form-control floating-label" placeholder="Amount">
            </div>
        </div>
        <div class="text-right p-5">
            <a class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</a>

            <a onclick="add()" class="btn btn-primary"> ADD + </a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

@endsection

@section('scripts')
    <script>
        function add(){
            let body = $('#body')
            let cltr = $('.tableroad')
            body.append('<tr class="tableroad" id="tableroad-' + cltr.length +'"></tr>')
            let tr = $('#tableroad-' + cltr.length)
            tr.append('<td class="border-b dark:border-darkmode-400"> <div class="font-medium whitespace-nowrap">'+
                $('#product_name').val()+'</div><input type="hidden" name="product_name[]" value="'+$('#product_name').val()+'">')

            tr.append('<td class="border-b text-right dark:border-darkmode-400">'+
                $('#product_price').val()+'<input type="hidden" name="product_price[]" value="'+$('#product_price').val()+'">')
            tr.append('<td class="border-b text-right dark:border-darkmode-400">'+
                $('#product_count').val()+'<input type="hidden" name="product_count[]" value="'+$('#product_count').val()+'">')
            tr.append('<td class="text-right border-b dark:border-darkmode-400 w-32 font-medium">$'+
                $('#product_amount').val()+'<input type="hidden" name="product_amount[]" value="'+$('#product_amount').val()+'">')
            tr.append(
                `<td class="text-right border-b dark:border-darkmode-400"><a class="btn btn-outline-danger flex items-center text-danger" onclick="$('#tableroad-' + `+cltr.length+`).remove()" data-tw-toggle="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2"
            class="lucide lucide-trash-2 w-4 h-4 mr-1"> <polyline points="3 6 5 6 21 6"></polyline> <path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path> <line x1="10" y1="11" x2="10" y2="17"></line> <line x1="14" y1="11" x2="14" y2="17"></line> </svg>
                Delete</a>`)
        }

    </script>
@endsection
