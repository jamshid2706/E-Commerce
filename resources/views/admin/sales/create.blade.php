<style>

    .ajaresult::-webkit-scrollbar {
        width: 0px;
    }

    .ajaresult {
        max-height: 200px;
        overflow-y: scroll;
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
                            <div class="relative w-full">
                                <input id="productname"
                                       onkeyup="onChange(this)" type="text" name=""
                                       class="tooltip form-control search__input"
                                       placeholder="Product Name"
                                       autocomplete="off" required
                                       data-trigger="click"
                                       title="This is awesome tooltip example!">
                                <div id="btn" class="absolute top-0 right-0 p-2 text-gray-600 cursor-pointer hidden">
                                    x
                                </div>
{{--                                <p class="ajawarning text-warning"></p>--}}
                            </div>

                            <div class="absolute hidden bg-slate-200 w-52 ajaresult" style="padding: 0px">

                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label for="modal-form-2" class="form-label">Price</label>
                            <input onkeyup="onChange(this)" type="number" name="price[]"
                                   class="form-control" placeholder="Price" required>
                            <p class="priceitem text-primary"></p>
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label for="modal-form-3" class="form-label">Count</label>
                            <input onkeyup="onChange(this)" type="number" name="count[]"
                                   class="form-control" placeholder="Count" required>
                            <p class="countitem text-primary"></p>
                        </div>
                        <div class="col-span-12 sm:col-span-3 mb-4">
                            <label for="modal-form-4" class="form-label">Amount</label>
                            <input onkeyup="onChange(this)" id="modal-form-4" type="number" name="amount[]"
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
                    $('.ajawarning').html(data['warning']);
                } else {
                    $('.ajawarning').html('');
                    $('.countitem').html(data['amount']);
                    $('.priceitem').html(data['price']);
                    if ($comingfrom == ''){
                        $('#productname').attr('value', data['warning']);
                        getProdData();
                    }
                }
            },
        });
    }

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
        update('list');
        $('#productname').val($(this).children('.title').text());
        $('#productname').attr('value', $(this).attr('id'));
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
