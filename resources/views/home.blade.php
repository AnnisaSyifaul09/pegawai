@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="jumbotron text-center" style="color: rgb(32, 108, 146);">
                <h1 class="display-4">{{ __('Welcome to Our Website!') }}</h1>
                <p class="lead">{{ __('Your one-stop solution for all your needs.') }}</p>
                <hr class="my-4">
                <p>{{ __('Please login if you already have an account or register if you don\'t have an account.') }}</p>
            </div>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

