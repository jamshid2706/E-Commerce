<!-- BEGIN: Modal Toggle -->
<div class="my-4">
    <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview"
       class="btn btn-primary">Add Products</a>
</div>
<!-- END: Modal Toggle -->

<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <div class="text-left">
                    <form class="dropzone mt-3" action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="fallback">
                            <input class="form-control" type="file" id="formFile" name="image">
                        </div>
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                            <div class="text-slate-500">
                                This is just a demo dropzone. Selected files are <span class="font-medium">not</span> actually uploaded.
                            </div>
                        </div>
                        <div>
                            <label for="title" class="form-label">Product Title</label>
                            <input id="title" type="text" name="title" class="form-control"
                                   placeholder="Product Title" required>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-2" class="form-label">Buy</label>
                            <input id="vertical-form-2" type="number" name="buy" class="form-control" placeholder="Buy"
                                   required>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-3" class="form-label">Sell</label>
                            <input id="vertical-form-3" name="sell" type="number" class="form-control"
                                   placeholder="Sell" required>
                        </div>
                        <div class="mt-3">
                            <label for="vertical-form-4" class="form-label">Stock</label>
                            <input id="vertical-form-4" type="number" name="stock" class="form-control"
                                   placeholder="Stock" required>
                        </div>
                        <label for="category_id" class="form-label mt-3">Category Id</label>
                        <select class="tom-select w-full" id="category_id" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">
                                    {{ $category->title }}
                                </option>
                            @endforeach
                        </select>
                        <div class="intro-y col-span-12 sm:col-span-6 mt-3">
                            <label for="description" class="form-label w-full flex flex-col sm:flex-row">
                                Product Description
                                <span
                                    class="sm:ml-auto mt-1 sm:mt-0 text-xs text-slate-500">Required, at least 5 characters</span>
                            </label>
                            <textarea id="description" class="form-control" name="description"
                                      placeholder="Type your comments"
                                      minlength="5"></textarea>
                        </div>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
