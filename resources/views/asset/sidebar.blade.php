@extends('layouts.deshboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboarddsdf') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif






                        {{ __('You are logged in!sdf') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
