@extends('layout.base', ['excludeFooter' => true])

@section('content')
<div class="container">
    <div class="row">
        <br>
        <br>
        <div class="col m8 col offset-m2">
            <!-- BEGIN Login icon -->
            <div class="row">
                <div class="col m12 center">
                    <i class="material-icons large light-blue-text">lock</i>
                </div>
            </div>
            <!-- END Login icon -->

            <form role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}

                <!-- BEGIN Email input -->
                <div>
                    @if ($errors->has('email'))
                    <!-- BEGIN Error message -->
                    <div class="card-panel red lighten-1 white-text">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                    <!-- END Error message -->
                    @endif

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" autocomplete="off">
                            <label for="email">{{ trans('login.email') }}</label>
                        </div>
                    </div>

                </div>
                <!-- END Email input -->

                <!-- BEGIN Password input -->
                <div>
                    @if ($errors->has('password'))
                        <!-- BEGIN Error message -->
                        <div class="card-panel red lighten-1 white-text">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                        <!-- END Error message -->
                    @endif
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" name="password" class="validate" autocomplete="off">
                            <label for="password">{{ trans('login.password') }}</label>
                        </div>
                    </div>
                </div>
                <!-- END Password input -->

                <br>
                <!-- BEGIN Login button -->
                <div class="row">
                    <div class="col m6 offset-m3">
                        <button type="submit" class="btn col m12 light-blue">
                            <i class="fa fa-btn fa-sign-in"></i>{{ trans('login.login') }}
                        </button>
                    </div>
                </div>
                <!-- END Login button -->
            </form>
        </div>
    </div>
</div>
@endsection
