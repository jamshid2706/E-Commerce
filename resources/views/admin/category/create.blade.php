@extends('layouts.admin')
@section('content')
    <button onclick="addnew()" class="btn btn-primary">Add</button>
<div>
    <label for="regular-form-1" class="form-label">Input Text</label>
    <input id="regular-form-1" type="text" class="form-control" placeholder="Input text">
</div>
<div class="mt-3">
    <label for="regular-form-2" class="form-label">Rounded</label>
    <input id="regular-form-2" type="text" class="form-control form-control-rounded" placeholder="Rounded">
</div>
<div class="mt-3">
    <label for="regular-form-3" class="form-label">With Help</label>
    <input id="regular-form-3" type="text" class="form-control" placeholder="With help">
    <div class="form-help">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</div>
</div>
<div class="mt-3">
    <label for="regular-form-4" class="form-label">Password</label>
    <input id="regular-form-4" type="password" class="form-control" placeholder="Password">
</div>
<div class="mt-3">
    <label for="regular-form-5" class="form-label">Disabled</label>
    <input id="regular-form-5" type="text" class="form-control" placeholder="Disabled" disabled>
</div>
@endsection
@section('scripts')
    <script type="text/javascript">
        function addnew(){
            const para = document.createElement("div");
            para.classList.add("mt-3");
            para.innerHTML = `<label for="regular-form-3" class="form-label">With Help</label><input id="regular-form-3" type="text" class="form-control" placeholder="With help">`;
            const node = document.createTextNode("");
            para.appendChild(node);

            const element = document.getElementById("div1");
            element.appendChild(para);
            console.log("created");
        }
    </script>
@endsection
