@extends('layouts.admin')
@section('module', 'User')
@section('action', ' - Edit')
@section('content')

    @push('css')
        <style>
            .login-register-form {
                padding: 0 150px;
            }

            .login-register-form input {
                background-color: transparent;
                border: 1px solid #ebebeb;
                color: #3a3a3a;
                font-size: 16px;
                margin-bottom: 30px;
                padding: 25px 30px;
                width: 100%;
                outline: 0;
            }
        </style>
    @endpush

    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="login-register-form">
        <form action="{{ route('admin.user.update', ['id' => $user->id]) }}" method="post">

            @csrf
            <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Username...">

            <input name="email" class="form-control" placeholder="Email" type="email" value="{{ $user->email }}" />

            <input name="phone" class="form-control" type="tel" id="phone" name="phone"
                placeholder="Example: 0123456789 (total 10 number)" pattern="[0][0-9]{9}" required
                value="{{ $user->phone }}" />

            <input name="address" class="form-control" placeholder="Address" type="text" value="{{ $user->address }}" />

            {{-- <input type="password" class="form-control" name="password" autocomplete="current-password"
                placeholder="Enter your password" required />
            <input type="password" class="form-control" name="password_confirmation" autocomplete="current-password"
                placeholder="Enter your confirm password" required /> --}}
            <button type="submit" class="btn btn-info">Submit</button>

        </form>
    </div>

@endsection
