@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Teacher Account</h2>
                
                <!-- ERROR NOTIFS -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="card-body">
                    <form method="POST" action="/admin/faculty/{{$teacher->id}}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form_item">
                            <label for="givenName" class="col-md-4 col-form-label text-md-end">{{ __('Given Name') }}</label>
                            <div class="col-md-6">
                                <input id="givenName" type="text" class=" wow form-control @error('givenName') is-invalid @enderror" name="givenName" value="{{ $teacher->user->givenName }}" required autocomplete="givenName" autofocus>

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
                                    <input id="middleName" type="text" class="wow form-control @error('middleName') is-invalid @enderror" name="middleName" value="{{ $teacher->user->middleName }}" autocomplete="middleName" autofocus>

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
                                    <input id="lastName" type="text" class="wow form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $teacher->user->lastName }}" required autocomplete="lastName" autofocus>

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

                                <div class="radio_item">
                                    <input id="male" @if($teacher->user->sex =='M') echo checked @endif type="radio" class="wow form-control @error('sex') is-invalid @enderror" name="sex" value="M" required autofocus>
                                    <label for="male">Male</label><br>
                                </div>
                                <div class="radio_item">
                                    <input id="female" @if($teacher->user->sex =='F') echo checked @endif type="radio" class="wow form-control @error('sex') is-invalid @enderror" name="sex" value="F" required autofocus>
                                    <label for="female">Female</label><br>
                                </div>
                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                
                            </div>
                            <div class="form_item">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input id="birthdate" type="date" class="wow form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ $teacher->user->birthdate }}" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="department" class="col-md-4 col-form-label text-md-end">{{ __('Department') }}</label>

                                <select name="department" class="form-control wow" id="department">
                                    <option selected disabled>-- Select Department --</option>
                                    <option value="Science" @if($teacher->department =='Science') echo selected @endif> Science </option>
                                    <option value="Math" @if($teacher->department =='Math') echo selected @endif> Math </option>
                                    <option value="English" @if($teacher->department =='English') echo selected @endif> English </option>
                                    <option value="Filipino" @if($teacher->department =='Filipino') echo selected @endif> Filipino </option>
                                    <option value="MAPeH" @if($teacher->department =='MAPeH') echo selected @endif> MAPeH </option>
                                    <option value="TLE" @if($teacher->department =='TLE') echo selected @endif> TLE </option>
                                    <option value="ICT" @if($teacher->department =='ICT') echo selected @endif> ICT </option>
                                    <option value="ESP" @if($teacher->department =='ESP') echo selected @endif> ESP </option>
                                </select>
                                
                            </div>
                            <div class="form_item">
                                <div class="col-md-6">
                                    <label for="accountStatus" class="col-md-4 col-form-label text-md-end">Account Status</label>
                                    <select name="accountStatus" class="form-control wow" id="accountStatus">
                                        <option value="Active" @if($teacher->user->accountStatus =='Active') echo selected @endif>Active</option>
                                        <option value="Inactive" @if($teacher->user->accountStatus =='Inactive') echo selected @endif>Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="contactNum" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                                <div class="col-md-6">
                                    <input id="contactNum" type="text" class="wow form-control @error('contactNum') is-invalid @enderror" name="contactNum" value="{{ $teacher->user->contactNum }}" autocomplete="contactNum" autofocus>

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
                                    <input id="username" type="text" class="wow form-control @error('username') is-invalid @enderror" name="username" value="{{ $teacher->user->username }}" required autocomplete="username" autofocus>

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
                                <input id="email" type="email" class="wow form-control @error('email') is-invalid @enderror" name="email" value="{{ $teacher->user->email }}" required autocomplete="email">

                                @error('email')
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

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap" style="float:left;margin-top:1rem;">
                    <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/faculty/{{$teacher->id}}"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to Records</a>
                </div>
            </div>
        </div>
    </div>
@endsection

