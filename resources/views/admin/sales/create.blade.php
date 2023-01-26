<!-- BEGIN: Super Large Modal Toggle -->
<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview"
   class="btn btn-primary mr-1 mb-4 mt-2">Add Sales</a>
<!-- END: Super Large Modal Toggle -->

<!-- BEGIN: Super Large Modal Content -->
<div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content ">
            <div class="modal-body">
                <form class="mt-3 grid grid-cols-12" action="{{route('admin.sales.store')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-1" class="form-label">Product</label>
                        <input onkeyup="onChange(this)" type="text" name="product[]"
                               class="form-control"
                               placeholder="Product Name" required>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-2" class="form-label">Price</label>
                        <input onkeyup="onChange(this)"  type="number" name="price[]"
                               class="form-control" placeholder="Price" required>
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label for="modal-form-3" class="form-label">Count</label>
                        <input onkeyup="onChange(this)"  type="number" name="count[]"
                               class="form-control" placeholder="Count" required>
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
                        <button type="button" onclick="add()" class="btn btn-primary w-24 text-">Add</button>
                    </div>
                    <div class="col-span-12">
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Super Large Modal Content -->

<script>
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
