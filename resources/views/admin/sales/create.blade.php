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
                    <form class="mt-3" action="{{route('admin.sales.store')}}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="vertical-form-1" class="form-label">Amount</label>
                            <input id="vertical-form-1" type="number" name="amount" class="form-control"
                                   placeholder="Please write..." required>
                        </div>
                        <label for="category_id" class="form-label mt-3">Client Id</label>
                        <select class="tom-select w-full" id="client_id" name="client_id">
                            @foreach($clients as $client)
                                <option value="{{ $client->id }}">
                                    {{ $client->name }}
                                </option>
                            @endforeach
                        </select>
                        <button class="btn btn-secondary mt-5 w-24 mr-2" data-tw-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
