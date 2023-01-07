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
                    <form class="mt-3" action="{{route('admin.products.store')}}" method="post"
                          enctype="multipart/form-data">
                        @method('post')
                        @csrf
                        <div class="flex items-center justify-center w-full">
                            <label class="flex flex-col w-full h-32 border-4 border-dashed dropzone"
                                   style="cursor: pointer">
                                <div class="flex flex-col items-center justify-center pt-7">
                                    @foreach($products as $key => $product)
                                        <img src="{{asset('storage/'.$product->title)}}" alt="" class="w-52">
                                    @endforeach
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                         viewBox="0 0 20 20"
                                         fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                    <input type="file" class="opacity-0 fallback"
                                           name="image"/>
                            </label>
                        </div>

                        <div class="mt-3">
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
