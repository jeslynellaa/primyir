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

                        <form method="POST" action="/profile/info/{{ Auth::user()->id }}" enctype="multipart/form-data">
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
                                    <input readonly id="birthdate" type="date" class="form-control wow" name="birthdate" value="{{ old('birthdate') ?? $user->birthdate }}" placeholder="mm/dd/yyyy" autofocus>
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
                        <form method="POST" action="/profile/address/{{ Auth::user()->id }}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')

                            <div class="form_wrap select_box">
                                <div class="form_item">
                                    <label for="region" class="col-md-4 col-form-label text-md-end">Region</label>
                                    <select name="region" class="form-control wow" id="region">
                                        <option value="{{ $user_region->code }}"selected disabled> {{ $user_region->name }} </option>

                                        <!-- @foreach ($regions as $region)
                                            <option value="{{ $region->code }}"> {{ $region->name }}</option>
                                        @endforeach -->
                                    </select>
                                </div>
                                <div class="form_item">
                                    <label for="province" class="col-md-4 col-form-label text-md-end">Province</label>
                                    <select name="province" class="form-control wow" id="province">
                                        <option value="{{ $user_province->code }}"selected disabled> {{ $user_province->name }} </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form_wrap select_box">
                                <div class="form_item">
                                    <label for="cities" class="col-md-4 col-form-label text-md-end">City/Municipality</label>
                                    <select name="city"  class="form-control wow" id="city">
                                        <option value="{{ $user_city->code }}"selected disabled> {{ $user_city->name }} </option>
                                    </select>
                                    
                                </div>

                                <div class="form_item">
                                    <label for="barangay" class="col-md-4 col-form-label text-md-end">Barangay</label>
                                    <select name="barangay" class="form-control wow" id="barangay">
                                        <option value="{{ $user_barangay->code }}"selected disabled> {{ $user_barangay->name }} </option>
                                    </select>
                                </div>
                            </div>

                            <div class="form_item">
                                <label for="street" class="col-md-4 col-form-label text-md-end">{{ __('Other Address Details') }}</label>

                                <div class="col-md-6">
                                    <input id="street" type="text" class="wow form-control @error('street') is-invalid @enderror" name="street" value="{{ old('street') ?? $user->address->street }}" placeholder="House No./Street/Purok" autofocus>

                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="save_btn">
                                    {{ __('Save changes') }}
                                </button>
                            </div>
                        </form>

                        <!-- <form method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="form_wrap select_box">

                                <div class="form_item">
                                <label for="region" class="col-md-4 col-form-label text-md-end">Region</label>   
                                    <select name="region" id="region" class="wow form-control">
                                        <option value="">--- Select Region ---</option>
                                    </select>
                                </div>

                                <div class="form_item">
                                <label for="province" class="col-md-4 col-form-label text-md-end">Province</label>   
                                    <select name="province" id="province" class="wow form-control" >
                                        <option value="">--- Select Province ---</option>
                                    </select>
                                </div>

                            </div>

                            <div class="form_wrap select_box">

                                <div class="form_item">
                                <label for="city" class="col-md-4 col-form-label text-md-end">City/Municipality</label>   
                                    <select name="city" id="city" class="wow form-control">
                                        <option value="">--- Select City/Municipality ---</option>
                                    </select>
                                </div>

                                <div class="form_item">
                                <label for="barangay" class="col-md-4 col-form-label text-md-end">Barangay</label>   
                                    <select name="barangay" id="barangay" class="wow form-control" valu>
                                        <option value="">--- Select Barangay ---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="save_btn">
                                    {{ __('Save changes') }}
                                </button>
                            </div>
                        </form> -->
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
    <!-- <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script> -->
    <!-- <script src="{{ asset('js/location-dropdown.js') }}" defer></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    


    <script type="text/javascript">
        $(document).ready(function () {
            $('#region').one('click', function () {
                $.ajax({
                    url: '{{ route('regions') }}',
                    type: 'get',
                    success: function (res) {
                        $('#region').html('<option value="">-- Select region --</option>');
                        $.each(res, function (key, value) {
                            $('#region').append('<option value="' + value.code + '">' + value.name + '</option>');
                        });
                    }
                });
            });
            $('#region').on('click', function () {
                var regionCode = this.value;
                $('#province').html('');
                $.ajax({
                    url: '{{ route('provinces') }}?region_code='+regionCode,
                    type: 'get',
                    success: function (res) {
                        $('#province').html('<option value="" selected disabled>-- Select Province --</option>');
                        $.each(res, function (key, value) {
                            $('#province').append('<option value="' + value.code + '">' + value.name + '</option>');
                        });
                        $('#city').html('<option value="" selected disabled>-- Select City/Municipality --</option>');
                    }
                });
            });
            $('#province').on('change', function () {
                var provinceCode = this.value;
                $('#city').html('');
                $.ajax({
                    url: '{{ route('cities') }}?province_code='+provinceCode,
                    type: 'get',
                    success: function (res) {
                        $('#city').html('<option value="" selected disabled>-- Select City/Municipality --</option>');
                        $.each(res, function (key, value) {
                            $('#city').append('<option value="' + value.code + '">' + value.name + '</option>');
                        });
                        $('#barangay').html('<option value="" selected disabled>-- Select Barangay --</option>');
                    }
                });
            });
            $('#city').on('change', function () {
                var cityCode = this.value;
                $('#barangay').html('');
                $.ajax({
                    url: '{{ route('barangays') }}?city_code='+cityCode,
                    type: 'get',
                    success: function (res) {
                        $('#barangay').html('<option value="" selected disabled>-- Select Barangay --</option>');
                        $.each(res, function (key, value) {
                            $('#barangay').append('<option value="' + value.code + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <!-- <script>
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
            $('#region').on('change', my_handlers.select_region);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);

            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'});

            $('#region').ph_locations('fetch_list');
        });
    </script> -->
@endsection