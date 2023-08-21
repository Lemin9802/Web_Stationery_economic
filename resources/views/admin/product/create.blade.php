@extends('layouts.admin')
@section('module', 'Product')
@section('action', ' - Create')
@push('css')
    <link rel="stylesheet" href="{{ asset('adminAssets/plugins/summernote/summernote-bs4.min.css') }}">
    <style>
        .form-check {
            float: right;
            margin-right: 15px;
        }

        .btn-info {
            width: 100%;
        }
    </style>
@endpush
@section('content')

    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row card-body">

                <div class="col-9">
                    <div class="form-group">
                        <label for="product">Name Product</label>
                        <input id="product" type="text" class="form-control" name="name_product"
                            value="{{ old('name_product') }}" placeholder="Please enter a name product...">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea id="description" class="form-control" name="description" rows="3" value=""
                            placeholder="Please enter description...">{{ old('description') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="product">Image List </label>
                        <input id="product" type="text" class="form-control" name="image_list" value="null"
                            placeholder="Input Image List">
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="category_id" class="form-control">
                            @if (!empty(old('category_id')))
                                @foreach ($category as $item)
                                    <option value="{{ old('category_id') }}">
                                        {{ $item->id == old('category_id') ? $item->name_category : '' }}</option>
                                @endforeach
                            @endif
                            
                            <option value="">-- Select One --</option>
                            @foreach ($category as $item)
                                <option value="{{ $item->id }}">{{ $item->name_category }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Price </label>
                        <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}"
                            min="5000" max="500000000" step="1000" placeholder="Please enter price...">
                    </div>
                    <div class="form-group">
                        <label for="sale_price">Sale Price </label>
                        <input id="sale_price" type="number" class="form-control" name="sale_price"
                            value="{{ old('sale_price') }}" min="5000" max="500000000" step="1000"
                            placeholder="Please enter sale_price...">
                    </div>
                    <div class="form-group">
                        <label for="image">Image </label>
                        <input id="image" type="file" class="form-control" name="image" value=""
                            accept=".png, .jpg, .jpeg">
                    </div>
                    <div class="form-group">
                        <label>Status </label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="1" name="status" checked="">
                            <label class="form-check-label">Public</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" value="0">
                            <label class="form-check-label">Private</label>
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <label for="prioty">Prioty </label>
                        <input id="prioty" type="text" class="form-control" name="prioty"
                            value="0">
                    </div> --}}
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <!-- /.card-body -->

    </div>

@endsection

@push('js')
    <script src="{{ asset('adminAssets/plugins/summernote/summernote-bs4.min.js') }}"></script>
@endpush

@push('jshand')
    <script type="text/javascript">
        $(function() {
            // Summernote
            $('#description').summernote({
                height: 350,
                placeholder: "Please enter description..."
            });
        });
    </script>
@endpush
