@extends('layouts.app')

@section('content')


@if(session('warning'))
        <div class="alert alert-danger">
            {{ session('warning') }}
        </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Change Password') }}</div>
                <div class="card-body">
                    <form method="POST" action="/password/change" name="form2">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ $user ['id'] }}">
                            
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Current Password') }}</label>

                                <div class="col-md-6">
                                    <input id="original" type="password" class="form-control @error('password') is-invalid @enderror" name="original" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="newpass" type="password" class="form-control @error('password') is-invalid @enderror" name="newpass" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Comfirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="renewpass" type="password" class="form-control @error('password') is-invalid @enderror" name="renewpass" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('SUBMIT') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
