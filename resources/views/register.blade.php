@extends('layouts.site')
@section('main')

    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a href="{{ route('login') }}">
                                <h4>login</h4>
                            </a>
                            <a class="active" href="{{ route('viewRegister') }}">
                                <h4>register</h4>
                            </a>
                        </div>
                        <div class="tab-content">
                            {{-- Register --}}
                            {{-- <div id="lg2" class="tab-pane active"> --}}

                            <div class="login-form-container">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <div class="login-register-form">
                                    <form action="{{ route('register') }}" method="post">

                                        @csrf
                                        <input type="text" name="name" placeholder="Username"
                                            value="{{ old('name') }}" />

                                        <input name="email" placeholder="Email" type="email"
                                            value="{{ old('email') }}" />

                                        <input name="phone" type="tel" id="phone" name="phone"
                                            placeholder="Example: 0123456789 (total 10 number)" pattern="[0][0-9]{9}"
                                            required value="{{ old('phone') }}" />

                                        <input name="address" placeholder="Address" type="text"
                                            value="{{ old('address') }}" />

                                        <input type="password" name="password" autocomplete="current-password"
                                            placeholder="Enter your password" required />

                                        <input type="password" name="password_confirmation" autocomplete="current-password"
                                            placeholder="Enter your confirm password" required />

                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
@endsection
