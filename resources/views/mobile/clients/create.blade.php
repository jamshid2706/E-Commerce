<div id="menu-auto-hide-modal" style="height:380px; width:320px"
     class="offcanvas offcanvas-modal rounded-m offcanvas-detached bg-theme py-3 px-3">
    <div class="d-flex m-3">
        <div class="align-self-center">
            <h2 class="font-700 mb-0">Auto Hide Modal</h2>
        </div>
        <div class="align-self-center ms-auto">
            <a href="#" class="icon icon-xs me-n2" data-bs-dismiss="offcanvas">
                <i class="bi bi-x-circle-fill color-red-dark font-16"></i>
            </a>
        </div>
    </div>
    <div class="content mt-0">
        <form class="demo-animation m-0" method="post" action="{{ route('mobile.clients.store') }}">
            @csrf
            @method('post')
            <div class="form-custom form-label form-icon mb-3">
                <i class="bi bi-person-circle mt-3 font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c1" placeholder="Name" name="name" required/>
                <label for="c1" class="color-theme">Client Name</label>
                <div class="valid-feedback">Excellent!</div>
                <div class="invalid-feedback">Name is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-icon mb-3">
                <i class="bi bi-person-circle mt-3 font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c2" placeholder="Phone Number"
                       name="phone_number" required/>
                <label for="c2" class="color-theme">Client Phone Number</label>
                <div class="valid-feedback">Excellent!</div>
                <div class="invalid-feedback">Phone Number is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <div class="form-custom form-label form-icon mb-3">
                <i class="bi bi-person-circle mt-3 font-14"></i>
                <input type="text" class="form-control rounded-xs" id="c3" placeholder="Address" name="address"
                       required/>
                <label for="c3" class="color-theme">Client Address</label>
                <div class="valid-feedback">Excellent!</div>
                <div class="invalid-feedback">Address is Missing or Invalid</div>
                <span>(required)</span>
            </div>
            <button type="submit" class="btn btn-full gradient-highlight shadow-bg shadow-bg-xs">Submit</button>
        </form>
    </div>
</div>
