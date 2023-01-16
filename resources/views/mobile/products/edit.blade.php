@extends('layouts.mobile')
@section('content')
    <div class="pt-3">
        <div class="page-title d-flex">
            <div class="align-self-center">
                <a href="#" data-back-button class="me-3 ms-0 icon icon-xxs bg-theme rounded-s shadow-m">
                    <i class="bi bi-chevron-left color-theme font-14"></i>
                </a>
            </div>
            <div class="align-self-center me-auto">
                <h1 class="color-theme mb-0 font-18">Edit {{ $product->title }}</h1>
            </div>
            <div class="align-self-center ms-auto">
                <a href="#" data-bs-toggle="offcanvas" data-bs-target="#menu-sidebar"
                   class="icon icon-xxs gradient-highlight color-white shadow-bg shadow-bg-xs rounded-s">
                    <i class="bi bi-list font-20"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="card card-style">
        <div class="content">
            <form action="{{route('mobile.products.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="file-data">
                    <img id="image-data" src="{{ asset('storage/' . $product->image) }}" class="img-fluid rounded-s" alt="img">
                    <span class="upload-file-name d-block text-center"
                          data-text-before="<i class='bi bi-check-circle-fill color-green-dark pe-2'></i> Image:"
                          data-text-after=" is ready."></span>
                    <div>
                        <input name="image" type="file" class="upload-file">
                        <p class="btn btn-full btn-m text-uppercase font-700 rounded-s upload-file-text bg-highlight">
                            Upload Image</p>
                    </div>
                </div>
                <div class="divider m-2"></div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <input name="title" type="text" class="form-control rounded-xs" id="c1"
                           value="{{ old('title', $product->title) }}" placeholder="Title" required/>
                    <label for="c1" class="color-theme">Title</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Title is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <input name="description" type="text" class="form-control rounded-xs" id="c1"
                           value="{{ old('title', $product->description) }}" placeholder="Description" required/>
                    <label for="c1" class="color-theme">Description</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Description is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <input name="buy" type="text" class="form-control rounded-xs" id="c1"
                           value="{{ old('title', $product->buy) }}" placeholder="Buy" required/>
                    <label for="c1" class="color-theme">Buy</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Buy is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <input name="sell" type="text" class="form-control rounded-xs" id="c1"
                           value="{{ old('title', $product->sell) }}" placeholder="Sell" required/>
                    <label for="c1" class="color-theme">Sell</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Sell is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <input name="stock" type="text" class="form-control rounded-xs" id="c1"
                           value="{{ old('title', $product->stock) }}" placeholder="Stock" required/>
                    <label for="c1" class="color-theme">Stock</label>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Stock is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <div class="form-custom form-label form-icon mb-3">
                    <i class="bi bi-person-circle font-14"></i>
                    <label for="c1" class="color-theme">Category</label>
                    <select class="form-select rounded-xs" id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                {{ $category->title }}
                            </option>
                        @endforeach
                    </select>
                    <div class="valid-feedback">Excellent!</div>
                    <div class="invalid-feedback">Sell is Missing or Invalid</div>
                    <span>(required)</span>
                </div>
                <button type="submit" class="btn btn-primary"> Submit</button>
            </form>
        </div>
    </div>

@endsection
