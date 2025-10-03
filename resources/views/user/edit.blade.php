@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div> --}}
            <div class="card-body">
                 <div class="card-body">
                    <form method="POST" action="/user/update">
                        @csrf

                        <x-input label="Username" name="username"/>
                        <x-input label="Email" name="email" type="email"/>
                        <x-input label="Biodata" name="bio" type="bio"/>
                        <x-input label="Ulangi Password" name="password_confirmation" type="password"/>
                        <p>to do avatar</p>

                        <x-submittbtn text="Update Profile"/>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
