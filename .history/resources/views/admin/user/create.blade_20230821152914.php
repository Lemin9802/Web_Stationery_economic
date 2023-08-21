@extends('layouts.admin')
@section('module', 'User')
@section('action', ' - Create')

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

        <form action="{{ route('admin.user.save') }}" method="post">
            @csrf
            <div class="row card-body">
                <div class="col-9">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" type="text" class="form-control" name="name"
                               value="{{ old('name') }}" placeholder="Please enter a name...">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email"
                               value="{{ old('email') }}" placeholder="Please enter email...">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input id="phone" type="tel" class="form-control" name="phone"
                               value="{{ old('phone') }}" placeholder="Please enter phone...">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input id="address" type="text" class="form-control" name="address"
                               value="{{ old('address') }}" placeholder="Please enter address...">
                    </div>
                    <div class="form-group">
                        <label for="role">Address</label>
                        <input id="address" type="text" class="form-control" name="address"
                               value="{{ old('address') }}" placeholder="Please enter address...">
                    </div>
                </div>

                <div class="col-3">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" name="password"
                               placeholder="Please enter a password...">
                    </div>
                    <button type="submit" class="btn btn-info">Create User</button>
                </div>
            </div>
        </form>
    </div>
@endsection
