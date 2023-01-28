<style>

    .ajaresult::-webkit-scrollbar {
        width: 0;
    }

    .ajaresult {
        max-height: 200px;
        overflow-y: scroll;
    }

    .tooltip-info{
        top:-5px;
        background-color: rgb(248 113 113);
    }
    .tooltip-arrow{
        transform: translate3d(60.8px, 0px, 0px);
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        border-top: 12px solid rgb(248 113 113);
        width: 0;
        height: 0;
    }

</style>

<!-- BEGIN: Super Large Modal Toggle -->
<a href="javascript:" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
   class="btn btn-primary mr-1 mb-4 mt-2">Add Sales</a>
<!-- END: Super Large Modal Toggle -->

<!-- BEGIN: Super Large Modal Content -->
<div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <form class="mt-3 " action="{{route('admin.sales.store')}}" method="post"
                  enctype="multipart/form-data">
                <!-- BEGIN: Modal Header -->
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">New Sale</h2>
                    <div class="col-span-12 sm:col-span-3 mr-2">
                        <input onkeyup="onChange(this)" type="text" name=""
                               class="form-control" placeholder="Client Name"
                        >
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <button type="button" onclick="add()" class="btn btn-primary w-24 text-">Add</button>
                    </div>

                </div>

                <!-- END: Modal Header -->
                <div class="modal-body">
                    <div class="grid grid-cols-12">
                        @csrf
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="modal-form-1" class="form-label">Product</label>
                            <div value='' class=" hidden product-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0" >Product not found
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <div class="relative w-full">
                                <input id="productname"
                                       onkeyup="onChange(this)" type="text" name=""
                                       class="tooltip form-control search__input"
                                       placeholder="Product Name"
                                       autocomplete="off" required
                                       data-tooltip-target="tooltip-default"
                                       title="This is awesome tooltip example!">
                                <div id="btn" class="absolute top-0 right-0 p-2 text-gray-600 cursor-pointer hidden">
                                    x
                                </div>
                            </div>

                            <div class="absolute hidden bg-slate-200 w-52 ajaresult" style="padding: 0">

                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="modal-form-2" class="form-label">Price</label>
                            <div value='' class=" hidden price-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0" >
                                Enter higher amount
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <input id="price-input" onkeyup="onChange(this)" type="number" name="price[]"
                                   class="form-control" placeholder="Price" required disabled>
                        </div>
                        <div class="col-span-12 sm:col-span-3 relative">
                            <label for="modal-form-3" class="form-label">Count</label>
                            <div value='' class=" hidden count-tooltip tooltip-info z-10 absolute inline-block px-2 py-1 text-white rounded left-0" >
                                Please enter the right amount
                                <div class="tooltip-arrow absolute"></div>
                            </div>
                            <input id="count-input" onkeyup="onChange(this)" type="number" name="count[]"
                                   class="form-control" placeholder="Count" required disabled>
                        </div>
                        <div class="col-span-12 sm:col-span-3 mb-4">
                            <label for="modal-form-4" class="form-label">Amount</label>
                            <input id="amount-input" onkeyup="onChange(this)" id="modal-form-4" type="number" name="amount[]"
                                   class="form-control"
                                   placeholder="Amount" disabled>
                        </div>
                        <label for="modal-form-5" class="form-label pt-2">Total:</label>
                        <input id="total" type="number" class="form-control col-span-5" disabled>
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
<!-- END: Super Large Modal Content -->

<script>

    function update($comingfrom) {
        let value = {
            'search': $('#productname').val(),
            'id': $('#productname').attr('value')
        }
        $.ajax({
            type: 'get',
            url: '{{URL::to('/admin/sales/search')}}',
            data: value,
            success: function (data) {
                $('.ajaresult').html(data['data']);
                if (data['warning'] === 'Product not found'){
                    $('.product-tooltip').attr('value', data['warning']);
                    $('.count-tooltip').attr('value', '');
                    $('.price-tooltip').attr('value', '');
                    $('#productname').attr('value', '');
                    $('#price-input').attr('disabled', true);
                    $('#count-input').attr('disabled', true);
                } else {
                    $('.product-tooltip').attr('value', '');
                    $('.product-tooltip').addClass('hidden');
                    $('#price-input').attr('disabled', false);
                    $('#count-input').attr('disabled', false);
                    $('.ajawarning').html('');
                    $('.count-tooltip').attr('value', data['amount']);
                    $('.price-tooltip').attr('value', data['price']);
                    if ($comingfrom == ''){
                        $('#productname').attr('value', data['warning']);
                        getProdData();
                    }
                }
            },
        });
    }

    $('#price-input').on('keyup', function(){
        equal = parseInt($(this).val()) <= $('.price-tooltip').attr('value');
        if (equal){
            $('#amount-input').val('');
            $('.price-tooltip').removeClass('hidden');
        } else {
            $('.price-tooltip').addClass('hidden');
            if ($('#count-input').val != '' && $('.count-tooltip').hasClass('hidden')){
                $('#amount-input').val(parseInt($(this).val()) * parseInt($('#count-input').val()));
            }
        }
    });

    $('#count-input').on('keyup', function(){
        equal = parseInt($(this).val()) > $('.count-tooltip').attr('value');
        if (equal){
            $('#amount-input').val('');
            $('.count-tooltip').removeClass('hidden').html('Product left:' + $('.count-tooltip').attr('value') + '<div class="tooltip-arrow absolute"></div>');
        }else{
            $('.count-tooltip').addClass('hidden');
            if ($('#price-input').val != ''){
                $('#amount-input').val(parseInt($(this).val()) * parseInt($('#price-input').val()));
            }
        }
    });

    function getProdData(){
        update('datacheck');
    }

    function xbutton() {
        if ($('#productname').val() === '') {
            $('#btn').addClass('hidden');
        } else {
            $('#btn').removeClass('hidden');
        }
        ;
    };

    $('#productname').on('focus', function () {
        $('.ajaresult').removeClass('hidden');
        update('');
    });

    $('#productname').on('focusout', function () {
        if ($('.product-tooltip').attr('value') !== ''){
            $('.product-tooltip').removeClass('hidden');
        } else{
            $('.product-tooltip').addClass('hidden');
        }
        setTimeout(function () {
            $('.ajaresult').addClass('hidden');
        }, 500);
    });

    $('#productname').on('keyup', function () {
        update('');
        xbutton();
    });

    $('#btn').on('click', function () {
        $('#productname').val('');
        $('#btn').addClass('hidden');
    });

    $(document).on('click', '.ajacontent', function () {
        $('.product-tooltip').addClass('hidden');
        $('#productname').val($(this).children('.title').text());
        $('#productname').attr('value', $(this).attr('id'));
        update('list');
        xbutton();
    });

    function onChange(element) {
        let total = querySelector('#total');
        let amounts = document.getElementById('amount');
        let amount = element.parentElement.querySelector('#amount');
        let price = element.parentElement.querySelector('#price');
        let count = element.parentElement.querySelector('#count');
        amount.value = price.value * count.value;
        console.log(amount.value);
        // for (let i = 0; i < amounts.length; i++) {
        //     total.value +=;
        // }
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
