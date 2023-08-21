@extends('layouts.admin')
@section('module', 'Category')
@section('action', 'Edit')
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
        <form action="{{ route('admin.category.update', ['id' => $data->id]) }}" method="post">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="category">Name @yield('module') </label>
                    <input id="category" type="text" class="form-control" name="name_category"
                        value="{{ $data->name_category }}" placeholder="Please enter category...">
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
            </div>

        </form>
    </div>
    <!-- /.card-body -->

    </div>
@endsection
