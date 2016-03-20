@extends('layout.base')
@section('content')

    <div id="checker">
        <div class="grey lighten-5">
            <div class="section">
                <div class="container">
                    @include('browse.index-partials._app-description')

                    <check-bar>
                        {{--<status></status>--}}
                        <websites-list type="most-checked"></websites-list>

                    </check-bar>

                </div>
            </div>
        </div>

        <div class="">
            <div class="section">
                <div class="container">
                    <websites-list type="most-checked"></websites-list>
                </div>
            </div>
        </div>
    </div>

@endsection