<i data-lucide="trash-2" class="hidden text-danger"></i>
<div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <form class="mt-3 " action="{{route('admin.sales.store')}}" method="post"
                  enctype="multipart/form-data">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <label for="client_name" class="font-medium text-base mr-auto">New Sale</label>
                    <div class="col-span-12 sm:col-span-3 mr-2">
                        <input id="client_name" onkeyup="onChange(this)" type="text" list="clients" name="client" class="form-control" placeholder="Client Name">
                        <datalist id="clients">
                            @foreach($clients as $client)
                                <option id="{{ $client->id }}" value="{{ $client->name }}">
                            @endforeach
                        </datalist>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <button id="addProduct" type="button" onclick="add()" class="btn btn-primary w-24 text-">Add
                        </button>
                    </div>

                </div>

                <!-- END: Modal Header -->
                <div class="modal-body">
                    <div class="grid grid-cols-12">
                        @csrf
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="modal-form-1" class="form-label">Product</label>
                            <div class=" hidden product-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                                Product not found
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <div class="relative w-full">
                                <input
                                    id="product_name"
                                       type="text"
                                       class="tool-clear form-control search__input"
                                       placeholder="Product Name"
                                       autocomplete="off"
                                       data-tooltip-target="tooltip-default">
                                <div id="btn" class="text-danger absolute top-0 right-0 mt-1 p-1 text-gray-600 cursor-pointer hidden">
                                    <i data-lucide="x-circle" height="20px"></i>
                                </div>
                            </div>

                            <div class="absolute hidden bg-slate-200 w-52 ajax_result" style="padding: 0">

                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="price-input" class="form-label">Price</label>
                            <div value=''
                                 class="tool-clear hidden price-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                                Enter higher price
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <input id="price-input" type="number"
                                   class="disable-it form-control" placeholder="Price" disabled>
                        </div>
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="count-input" class="form-label">Count</label>
                            <div value=''
                                 class="tool-clear hidden count-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0">
                                Please enter the right amount
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <input id="count-input" type="number"
                                   class="disable-it form-control" placeholder="Count" disabled>
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label for="modal-form-4" class="form-label">Amount</label>
                            <input onkeyup="onChange(this)" id="modal-form-4" type="number"
                                   class="form-control"
                                   placeholder="Amount" readonly>
                        </div>


                        <div class="col-span-12 grid grid-cols-12 mb-3 form-content">

                        </div>


                        <label for="total" class="form-label pt-2">Total:</label>
                        <input id="total" type="number" class="form-control col-span-5" value="0" disabled>
                        <div class="col-span-12 mt-2">
                        </div>
                        <div class="col-span-12">
                            <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- BEGIN: Super Large Modal Toggle -->
<!-- END: Super Large Modal Toggle -->
<style>

    .ajax_result {
        max-height: 200px;
        overflow-y: scroll;
    }

    .tooltip-info {
        top: -5px;
        background-color: rgb(248 113 113);
    }

    .tooltip-arrow {
        transform: translate3d(60.8px, 0px, 0px);
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 12px solid rgb(248 113 113);
        width: 0;
        height: 0;
    }

    .price-tooltip {
        background-color: rgb(255 153 0);
    }

    .price-tooltip .tooltip-arrow {
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 12px solid rgb(255 153 0);
    }

    .ajax_result::-webkit-scrollbar {

        width: 0;
    }


</style>

<!-- BEGIN: Super Large Modal Content -->
<a href="javascript:" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
   class="btn btn-primary mr-1 mb-4 mt-2">Add Sales</a>
<!-- END: Super Large Modal Content -->

<script>
    const list = [];
    let $countInput = $('#count-input');
    let $productName = $('#product_name');
    let $priceInput = $('#price-input');
    let $priceTooltip = $('.price-tooltip');
    let $countTooltip = $('.count-tooltip');
    let $productTooltip = $('.product-tooltip');
    let $btn = $('#btn');
    let $overall = $('#modal-form-4');
    let $total = $('#total');

    function update($comingFrom) {
        let value = {
            'search': $productName.val(),
            'id': $productName.attr('value')
        }
        $.ajax({
            type: 'get',
            url: '{{URL::to('/admin/sales/search')}}',
            data: value,
            success: function (data) {
                $('.ajax_result').html(data['data']);
                if (data['warning'] === 'Product not found') {
                    $productTooltip.attr('value', data['warning']);
                    $('.tool-clear').attr('value', '');
                    $('.disable-it').attr('disabled', true);
                } else {
                    $productTooltip.attr('value', '').addClass('hidden');
                    $('.disable-it').attr('disabled', false);
                    $countTooltip.attr('value', data['amount']);
                    $priceTooltip.attr('value', data['price']);
                    if ($comingFrom === '') {
                        $productName.attr('value', data['warning']);
                        getProdData();
                    }
                }
            },
        });

    }

    $priceInput.on('keyup', function () {
        let equal = parseInt($(this).val()) <= $priceTooltip.attr('value');
        if (equal) {
            $priceTooltip.removeClass('hidden');
        } else {
            $priceTooltip.addClass('hidden');
        }
        if ($countInput.val() !== '' && $countTooltip.hasClass('hidden') && $(this).val() !== '') {
            $overall.val(parseInt($(this).val()) * parseInt($countInput.val()));
        } else {
            $overall.val('');
        }
    });

    $countInput.on('keyup', function () {
        let equal = parseInt($(this).val()) > $countTooltip.attr('value');
        if (equal) {
            $overall.val('');
            $countTooltip.removeClass('hidden').html('Product left:' + $countTooltip.attr('value') + '<div class="tooltip-arrow absolute"></div>');
        } else {
            $countTooltip.addClass('hidden');
            if ($priceInput.val() !== '' && $(this).val() !== '') {
                $overall.val(parseInt($(this).val()) * parseInt($priceInput.val()));
            } else {
                $overall.val('');
            }
        }
    });

    function getProdData() {
        update('dataCheck');

    }

    function xButton() {
        if ($productName.val() === '') {
            $btn.addClass('hidden');
        } else {
            $btn.removeClass('hidden');
        }

    }

    $(document).on('click', '.delete-product', function () {
        let divClassId = $(this).attr('id');

        let overall = $('.prod-overall-input-' + divClassId + '').val();
        let id = $(this).attr('value');
        $total.val(parseInt($total.val()) - overall);
        for (let i = 0; i < list.length; i++) {
            if (list[i]['id'] === id && list[i]['overall'] === overall) {
                list.splice(i, 1);
            }
        }
        $('.deleteId-' + divClassId + '').remove();
        console.log(list);
    })

    $productName.on('focus', function () {
        $('.ajax_result').removeClass('hidden');
        update('');
    });

    $productName.on('focusout', function () {
        if ($productTooltip.attr('value') !== '') {
            $productTooltip.removeClass('hidden');
            $overall.val('');
            $('.disable-it').val('');
            $countTooltip.addClass('hidden');
            $priceTooltip.addClass('hidden');
        } else {
            $productTooltip.addClass('hidden');
        }
        setTimeout(function () {
            $('.ajax_result').addClass('hidden');
        }, 500);
    });

    $productName.on('keyup', function () {
        update('');
        xButton();
    });

    $btn.on('click', function () {
        $productName.val('');
        $btn.addClass('hidden');
    });

    $(document).on('click', '.ajax_content', function () {
        $productTooltip.addClass('hidden');
        $productName.val($(this).children('.title').text());
        $productName.attr('value', $(this).attr('id'));
        update('list');
        xButton();
    });

    function add() {
        let count = $countInput.val();
        let price = $priceInput.val();
        let name = $productName.val();
        let overall = $overall.val();
        let id = $productName.attr('value');

        if (count !== '' && $countTooltip.hasClass('hidden') &&
            price !== '' &&
            name !== '' && $productTooltip.hasClass('hidden')) {

            list.push({id: id, count: count, price: price, overall: overall, client_id: '',});
            let total = parseInt($total.val()) + parseInt(overall);

            $total.val(total);

            $(".form-content").append(
                `<input readonly name="product[]" class="prod-name-` + id + price + count + ` deleteId-` + id + price + count + ` col-span-12 sm:col-span-3 rounded bg-slate-50 p-2 border-2 font-bold" value="` + name + `"/>
            <input readonly name="price[]" class="prod-price-` + id + price + count + ` deleteId-` + id + price + count + ` col-span-12 sm:col-span-3 rounded bg-slate-50 p-2 border-2 font-bold" value="` + price + `"/>
            <input readonly name="count[]" class="prod-count-` + id + price + count + ` deleteId-` + id + price + count + ` col-span-12 sm:col-span-3 rounded bg-slate-50 p-2 border-2 font-bold" value="` + count + `"/>
            <div class="prod-overall-` + id + price + count + ` deleteId-` + id + price + count + ` relative col-span-12 sm:col-span-3 ">
               <input readonly name="amount[]" class="prod-overall-input-` + id + price + count + ` w-full rounded bg-slate-50 p-2 border-2 font-bold" type="text" name="" id="" value="` + overall + `"/>
               <a value="` + id + `" id="` + id + price + count + `" class="text-danger mt-1 delete-product btn mx-1 absolute right-0 top-0 p-1" style="width: 30px; height: 30px;">
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" icon-name="trash-2" data-lucide="trash-2" class="lucide lucide-trash-2 block mx-auto"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 01-2 2H7a2 2 0 01-2-2V6m3 0V4a2 2 0 012-2h4a2 2 0 012 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
               </a>
            </div>`
            )
            $countInput.val('');
            $priceInput.val('');
            $productName.val('');
            $overall.val('0');
            $productName.attr('value', '');

            console.log(list);
        }
    }

</script>
