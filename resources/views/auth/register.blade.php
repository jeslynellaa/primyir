@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
            <h2>Create a new Teacher Account and Record</h2>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                            <div class="form_item">
                                <label for="givenName" class="col-md-4 col-form-label text-md-end">{{ __('Given Name') }}</label>
                                <div class="col-md-6">
                                    <input id="givenName" type="text" class=" wow form-control @error('givenName') is-invalid @enderror" name="givenName" value="{{ old('givenName') }}" required autocomplete="givenName" autofocus>

                                    @error('givenName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="middleName" class="col-md-4 col-form-label text-md-end">{{ __('Middle Name') }}</label>

                                <div class="col-md-6">
                                    <input id="middleName" type="text" class="wow form-control @error('middleName') is-invalid @enderror" name="middleName" value="{{ old('middleName') }}" autocomplete="middleName" autofocus>

                                    @error('middleName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="form_item">
                                <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="wow form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" required autocomplete="lastName" autofocus>

                                    @error('lastName')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="sex" class="col-md-4 col-form-label text-md-end">Gender</label>

                                <div class="col-md-6">
                                    <input id="sex" type="text" class="wow form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus>

                                    @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form_item">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>   
                                
                                <div class="col-md-6">
                                    
                                    <input id="birthdate" type="date" class="wow form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="contactNum" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                                <div class="col-md-6">
                                    <input id="contactNum" type="text" class="wow form-control @error('contactNum') is-invalid @enderror" name="contactNum" value="{{ old('contactNum') }}" autocomplete="contactNum" autofocus>

                                    @error('contactNum')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item">
                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('User Name') }}</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="wow form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="wow form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="wow form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form_item">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="wow form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="accountStatus" type="text" class="wow form-control @error('accountStatus') is-invalid @enderror" name="accountStatus" value="Active" required autocomplete="accountStatus" autofocus>

                                @error('accountStatus')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="owner_type" type="text" class="wow form-control @error('owner_type') is-invalid @enderror" name="owner_type" value="T" required autocomplete="owner_type" autofocus>

                                @error('owner_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

