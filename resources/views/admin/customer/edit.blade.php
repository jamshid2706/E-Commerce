<!-- BEGIN: Modal Toggle -->
<a href="javascript:;" data-tw-toggle="modal" data-tw-target="#static-backdrop-modal-preview-{{ $customer->id }}"
   class="btn btn-outline-primary py-1 px-2"><i data-lucide="edit" class="px-1"></i>Edit</a>
<!-- END: Modal Toggle -->
<!-- BEGIN: Modal Content -->
<div id="static-backdrop-modal-preview-{{ $customer->id }}" class="modal" data-tw-backdrop="static" tabindex="-1"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body px-5 py-10">
                <form action="{{route('admin.customers.edit',$customer->id)}}" method="post">
                    @csrf
                    <div class="text-left">
                        <div>
                            <label for="vertical-form-1" class="form-label">Client Name</label>
                            <input id="vertical-form-1" type="text" name="name" class="form-control"
                                   placeholder="Please write..." value="{{ old('name', $customer->name) }}" required>
                        </div>
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1 mt-4">Cancel</button>
                        <button type="submit" class="btn btn-primary w-24 text-">Ok</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- END: Modal Content -->
