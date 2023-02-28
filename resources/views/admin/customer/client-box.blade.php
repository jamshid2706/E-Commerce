<div class="intro-y col-span-12 lg:col-span-6 xl:col-span-6 md:col-span-6 my-5">
    <div class="box">
        <div class="flex flex-col lg:flex-row items-center p-5">
            <div class="w-24 h-24 lg:w-12 lg:h-12 image-fit lg:mr-1">
                <img alt="Midone - HTML Admin Template" class="rounded-full"
                     src="https://enigma.left4code.com/dist/images/profile-8.jpg">
            </div>
            <div class="lg:ml-2 lg:mr-auto text-center lg:text-left mt-3 lg:mt-0">
                <a href="" class="font-medium">{{ $client->name ?? '' }}</a>
                <div class="text-slate-500 text-xs mt-0.5">{{ $client->phone_number ?? '' }} </div>
                <div class="text-slate-500 text-xs mt-0.5">{{ $client->address ?? '' }} </div>
            </div>
            <div class="flex mt-4 lg:mt-0 mr-1">
                @include('admin.client.edit')
            </div>
            <div class="flex mt-4 lg:mt-0 mr-1">
                <a href="{{ route('admin.clients.show', $client->id) }}"
                   class="btn btn-outline-secondary py-1 px-2"
                   control-id="ControlID-8"><i data-lucide="eye" class="px-1"></i> Preview</a>
            </div>
            <!-- BEGIN: Modal Toggle -->
            <div class="flex mt-4 lg:mt-0 mr-1">
                <a href="javascript:;" data-tw-toggle="modal"
                   data-tw-target="#delete-modal-preview-{{$client->id}}"
                   class="btn btn-outline-danger py-1 px-2">
                    <i data-lucide="trash-2" class="px-1"></i>
                    Delete</a>
            </div>
            <!-- END: Modal Toggle -->
            <!-- BEGIN: Modal Content -->
            <div id="delete-modal-preview-{{$client->id}}" class="modal" tabindex="-1"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body p-0">
                            <div class="p-5 text-center">
                                <i data-lucide="x-circle"
                                   class="w-16 h-16 text-danger mx-auto mt-3"></i>
                                <div class="text-3xl mt-5">Are you sure?</div>
                                <div class="text-slate-500 mt-2">Do you really want to delete these
                                    records? <br>This process cannot be undone.
                                </div>
                            </div>
                            <div class="px-5 pb-8 text-center">
                                <form action="{{ route('admin.clients.delete', $client->id) }}"
                                      method="post">
                                    <button type="button" data-tw-dismiss="modal"
                                            class="btn btn-outline-secondary w-24 mr-1">Cancel
                                    </button>
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger w-24">Yes
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
