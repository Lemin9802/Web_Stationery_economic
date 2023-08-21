@extends('layouts.site')
@section('main')
    <!-- login area start -->
    <div class="login-register-area pt-100px pb-100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" href="{{ route('login') }}">
                                <h4>login</h4>
                            </a>
                            <a href="{{ route('viewRegister') }}">
                                <h4>register</h4>
                            </a>
                        </div>

                        <div class="tab-content">
                            {{-- Login --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            @if (Session::has('wrong'))
                                <div class="alert alert-danger">
                                    {{ Session::get('wrong') }}
                                </div>
                            @endif
                            {{-- <div id="lg1" class="tab-pane"> --}}
                            <div class="login-form-container">
                                <div class="login-register-form">

                                    <form action="{{ route('indexId',) }}" method="post">
                                        @csrf
                                        <input name="email" placeholder="Email" type="email"
                                            value="{{ old('email') }}" />

                                        <input type="password" name="password" placeholder="Password" value="" />

                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox" />
                                                <a class="flote-none" href="javascript:void(0)">Remember me</a>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
@endsection
