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
                        <li class="form_3_progessbar">
                            <div>
                                <p>3</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form_wrap">

                    <div class="form_1 data_info">
                        <h2>Personal Information</h2>
                        <form method="POST" action="/profile/({ Auth::user()->id }}">
                            @csrf
                            @method('PATCH')

                            <div class="form_wrap fullname">

                                <div class="form_item">
                                    <label>Name</label>
                                    <input
                                    readonly 
                                    id="givenName"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Given Name"
                                    value="{{ old('givenName') ?? $user->givenName }}" 
                                    required=""> 
                                </div>
                                
                                <div class="form_item">
                                    <label>Last Name</label>
                                    <input 
                                    readonly
                                    id="lastName"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Last Name"
                                    value="{{ old('lastName') ?? $user->lastName }}" >
                                </div>
                                
                            </div>
                        
                            <div class="form_wrap fullname">

                                <div class="form_item">
                                    <label>Personal E-mail</label>
                                    <input 
                                    id="email"
                                    type="email" 
                                    class="wow" 
                                    placeholder="E-mail"
                                    value="{{ old('email') ?? $user->email }}" > 
                                </div>
                                
                                <div class="form_item">
                                    <label>Mobile Number</label>
                                    <input  
                                    id="mobileNum"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Mobile Number"
                                    value="{{ old('mobileNum') ?? $user->contactNum }}" >
                                </div>
                                
                            </div>

                            <div class="form_item">
                                <label>Birthdate</label>
                                <input 
                                readonly
                                id="birthdate"
                                type="date" 
                                class="wow" 
                                placeholder="mm/dd/yyyy"
                                value="{{ old('birthdate') ?? $user->birthdate }}" >
                            </div>
                        </form>
                    </div>
                    <div class="form_2 data_info" style="display: none;">
                        <h2>Address Information</h2>
                        <form method="POST" action="/profile/({ Auth::user()->id }}">
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


                    <div class="form_3 data_info" style="display: none;">
                        <h2>Parent's Information</h2>
                        <form method="POST" action="/profile/({ Auth::user()->id }}">
                            @csrf
                            @method('PATCH')
                            
                            <div class="form_wrap fullname">
                                <div class="form_item">
                                    <label>Father's Name</label>
                                    <input 
                                    id="fatherName"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Father's Name"
                                    value="{{ old('fatherName') ?? $user->givenName }}" > 
                                </div>
                                
                                <div class="form_item">
                                    <label>Mother's Name</label>
                                    <input 
                                    id="motherName"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Mother's Name"
                                    value="{{ old('motherName') ?? $user->motherName }}" >
                                </div>
                            </div>

                            <div class="form_wrap fullname">
                                <div class="form_item">
                                    <label>Father's Occupation</label>
                                    <input 
                                    id="fatherOccupation"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Father's Occupation"
                                    value="{{ old('fatherOccupation') ?? $user->fatherOccupation }}" > 
                                </div>
                                
                                <div class="form_item">
                                    <label>Mother's Occupation</label>
                                    <input 
                                    id="motherOccupation"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Mother's Occupation"
                                    value="{{ old('motherOccupation') ?? $user->motherOccupation }}" >
                                </div>
                            </div>

                            <div class="form_wrap fullname">
                                <div class="form_item">
                                    <label>Father's Phone Number</label>
                                    <input 
                                    id="fatherContact"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Father's Phone Number"
                                    value="{{ old('fatherContact') ?? $user->fatherContact }}" > 
                                </div>
                                
                                <div class="form_item">
                                    <label>Mother's Phone Number</label>
                                    <input 
                                    id="motherContact"
                                    type="text" 
                                    class="wow" 
                                    placeholder="Mother's Phone Number"
                                    value="{{ old('motherContact') ?? $user->motherContact }}" > 
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

                <div class="btns_wrap">
                    <div class="common_btns form_1_btns">
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_2_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_next">Next <span class="icon"><ion-icon name="arrow-forward-sharp"></ion-icon></span></button>
                    </div>
                    <div class="common_btns form_3_btns" style="display: none;">
                        <button type="button" class="btn_back"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back</button>
                        <button type="button" class="btn_done">Done</button>
                    </div>
                </div>
            </div><!--End of Wrapper -->

            <div class="modal_wrapper">
                <div class="shadow"></div>
                <div class="success_wrap">
                    <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                    <p>You have successfully completed the process.</p>
                </div>
            </div>
            
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

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        
    </script>  
@endsection