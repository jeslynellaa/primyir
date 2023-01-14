@extends('layouts.admin-app')

@section('content')
    <div class='signup-container'>
        <div class='left-container'>
            <h1>Mabuhay, ka-premier! Ensure that all of your information is accurate.</h1>
            
            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

            <div class="wrapper">

                <div class="header-count">
                    <ul>
                        <li class="active form_1_progessbar">
                            <div>
                                <p>1</p>
                            </div>
                        </li>
                        <li class="form_2_progessbar">
                            <div>
                                <p>2</p>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="form_wrap">

                    <!-- ====== FORM 1 ======== -->
                    <div class="form_1 data_info">
                        <h2>Personal Information</h2>

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

                        <form method="POST" action="/profile/{{ Auth::user()->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            
                            <div class="form_wrap fullname">
                                <div class="form_item">
                                    <label for="givenName" class="col-md-4 col-form-label text-md-end">{{ __('Given Name') }}</label>

                                    <div class="col-md-6">
                                        <input readonly id="givenName" type="text" class="form-control wow" name="givenName" value="{{ old('givenName') ?? $user->givenName }} " autofocus>
                                    </div>
                                </div>

                                <div class="form_item">
                                    <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input readonly id="lastName" type="text" class="form-control wow" name="lastName" value="{{ old('lastName') ?? $user->lastName }}" autofocus>
                                    </div>
                                </div>
                            </div> <!--form_wrap fullname-->

                            <div class="form_wrap fullname">
                                <div class="form_item">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="wow form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" autofocus>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form_item">
                                    <label for="contactNum" class="col-md-4 col-form-label text-md-end">{{ __('Contact Number') }}</label>

                                    <div class="col-md-6">
                                        <input id="contactNum" type="text" class="wow form-control @error('contactNum') is-invalid @enderror" name="contactNum" value="{{ old('contactNum') ?? $user->contactNum}}" autofocus>

                                        @error('contactNum')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div> <!--form_wrap fullname-->

                            <div class="form_item">
                                <label for="birthdate" class="col-md-4 col-form-label text-md-end">{{ __('Birth Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input readonly id="birthdate" type="date" class="wowform-control wow" name="birthdate" value="{{ old('birthdate') ?? $user->birthdate }}" placeholder="mm/dd/yyyy" autofocus>
                                </div>

                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="save_btn">
                                    {{ __('Save changes') }}
                                </button>
                            </div>

                        </form>

                    </div> <!--End of form_1 data_info-->

                    <!-- ====== FORM 2 ======== -->
                    <div class="form_2 data_info" style="display: none;">
                        <h2>Address Information</h2>

                        <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}">
                            @csrf
                            @method('PATCH')

                            <div class="form_wrap select_box">

                                <div class="form_item">
                                    <label>Region</label>
                                        <select id="region" class="wow"></select>
                                    </div>

                                <div class="form_item">
                                <label>Province</label>
                                    <select id="province" class="wow"></select>
                                </div>

                            </div>

                            <div class="form_wrap select_box">

                                <div class="form_item">
                                    <label>City/Municipality</label>
                                        <select id="city" class="wow"></select>
                                    </div>

                                    <div class="form_item">
                                <label>Barangay</label>
                                    <select id="barangay" class="wow"></select>

                                </div>
                            </div>
                        </form>
                    </div>


                </div> <!--End of form_wrap-->

                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_done">Done</button>
                    </div>
                </div>

            </div> <!--End of wrapper-->

        </div><!--End of left container -->

        <div class='right-container'>
            <img src="/png/side.png">
        </div>
    </div><!--End of signup container -->

    <!-- =========== Scripts =========  -->
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/loader.js') }}" defer></script>
    <script src="{{ asset('js/form.js') }}" defer></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <!-- script type="text/javascript" src="../../jquery.ph-locations.js"></script -->
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
    
    <script>
            var my_handlers = {

        fill_provinces:  function(){

            var region_code = $(this).val();
            $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
            
        },

        fill_cities: function(){

            var province_code = $(this).val();
            $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
        },


        fill_barangays: function(){

            var city_code = $(this).val();
            $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
        }
        };

        $(function(){
        $('#region').on('change', my_handlers.fill_provinces);
        $('#province').on('change', my_handlers.fill_cities);
        $('#city').on('change', my_handlers.fill_barangays);

        $('#region').ph_locations({'location_type': 'regions'});
        $('#province').ph_locations({'location_type': 'provinces'});
        $('#city').ph_locations({'location_type': 'cities'});
        $('#barangay').ph_locations({'location_type': 'barangays'});

        $('#region').ph_locations('fetch_list');
        });
    </script>
@endsection