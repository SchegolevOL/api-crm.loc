@extends('Pub::layouts.layout')


@section('content')
    <div class="content d-flex justify-content-center align-items-center">

        <!-- Login form -->
        <form method="POST" class="login-form" action="{{ route('login.post') }}">
            @csrf
            <div class="card mb-0">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                        <h5 class="mb-0">{{__('public.login_title')}}</h5>
                        <span class="d-block text-muted">{{__('public.spanLogin')}}</span>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="email" type="email"
                               class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               placeholder="{{ __('public.enterEmail') }}" name="email" value="{{ old('email') }}" required autofocus>
                        <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group form-group-feedback form-group-feedback-left">
                        <input id="password" type="password"
                               class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" placeholder="{{ __('public.password') }}" required>
                        <div class="form-control-feedback">
                            <i class="icon-lock2 text-muted"></i>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('public.buttonLogin') }}<i class="icon-circle-right2 ml-2"></i>
                        </button>
                    </div>

                </div>
            </div>
        </form>
        <!-- /login form -->

    </div>
@endsection
