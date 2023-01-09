@extends('layouts.admin-app')

@section('content')
<div class='signup-container'>
    <div class='left-container'>
        <h1>Mabuhay, ka-premier! Ensure that all of your information is accurate.</h1>
        <!--
        <div class="wrapper">
            <div class="form_container">
                <form name="form">

                <div class="form_wrap fullname">

                    <div class="form_item">
                        <label>Name</label>
                        <input type="text" class="wow" placeholder="First Name"> 
                    </div>
                    
                    <div class="form_item">
                        <label>Last Name</label>
                        <input type="text" class="wow" placeholder="Last Name">
                    </div>
                    
                </div>
            
                <div class="form_wrap fullname">

                    <div class="form_item">
                        <label>Personal E-mail</label>
                        <input type="email" class="wow" placeholder="E-mail"> 
                    </div>
                    
                    <div class="form_item">
                        <label>Mobile Number</label>
                        <input type="text" class="wow" placeholder="Mobile Number">
                    </div>
                    
                </div>

                    <div class="form_wrap select_box">

                    <div class="form_item">
                        <label>Province</label>
                            <select name="country" class="wow" placeholder="Mobile Number">
                        <option>Sorsogon</option>
                        <option>Paris</option>
                        <option>Moscow</option>
                        <option>Tokyo</option>
                            </select>
                    </div>
                    
                    
                    <div class="form_item">
                        <label>City/Municipality</label>
                            <select name="country" class="wow" placeholder="Mobile Number">
                        <option>Sorsogon City</option>
                        <option>Canada</option>
                        <option>Germany</option>
                        <option>Australia</option>
                            </select>
                    </div>
                    
                    </div>

                    <div class="form_wrap select_box">

                    <div class="form_item">
                        <label>Barangay</label>
                            <select name="country" class="wow" placeholder="Mobile Number">
                        <option>Bibincahan</option>
                        <option>Paris</option>
                        <option>Moscow</option>
                        <option>Tokyo</option>
                            </select>
                    </div>
                    
                    
                    <div class="form_item">
                        <label>Zip Code</label>
                        <input type="text" class="wow" placeholder="Zip Code">
                    </div>
                    
                    </div>

                    <div class="btn">
                    <input type="submit" value="Save">
                    </div>
                    <div class="btn1">
                    <input type="submit" value="Change Password">
                    </div>
                    <select name="city" id="my-city-dropdown"></select>
                </form>
            </div>
            </div>
        -->

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
                    <form>
                        <div class="form_wrap fullname">

                            <div class="form_item">
                                <label>Name</label>
                                <input type="text" class="wow" placeholder="First Name" required=""> 
                            </div>
                            
                            <div class="form_item">
                                <label>Last Name</label>
                                <input type="text" class="wow" placeholder="Last Name">
                            </div>
                            
                        </div>
                    
                        <div class="form_wrap fullname">

                            <div class="form_item">
                                <label>Personal E-mail</label>
                                <input type="email" class="wow" placeholder="E-mail"> 
                            </div>
                            
                            <div class="form_item">
                                <label>Mobile Number</label>
                                <input type="text" class="wow" placeholder="Mobile Number">
                            </div>
                            
                        </div>

                        <div class="form_item">
                            <label>Birthdate</label>
                            <input type="date" class="wow" placeholder="mm/dd/yyyy">
                        </div>
                    </form>
                </div>
                <div class="form_2 data_info" style="display: none;">
                    <h2>Address Information</h2>
                    <form>

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
                    <form>
                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label>Father's Name</label>
                                <input type="text" class="wow" placeholder="Father's Name"> 
                            </div>
                            
                            <div class="form_item">
                                <label>Mother's Name</label>
                                <input type="text" class="wow" placeholder="Mother's Name">
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label>Father's Occupation</label>
                                <input type="text" class="wow" placeholder="Father's Occupation"> 
                            </div>
                            
                            <div class="form_item">
                                <label>Mother's Occupation</label>
                                <input type="text" class="wow" placeholder="Mother's Occupation">
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label>Father's Phone Number</label>
                                <input type="text" class="wow" placeholder="Father's Phone Number"> 
                            </div>
                            
                            <div class="form_item">
                                <label>Mother's Phone Number</label>
                                <input type="text" class="wow" placeholder="Mother's Phone Number"> 
                            </div>
                        </div>

                    </form>
                </div>
            </div> <!--End of form wrap -->

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
        </div> <!--End of wrapper -->
        
        <div class="modal_wrapper">
            <div class="shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                <p>You have successfully completed the process.</p>
            </div>
        </div>
        
    </div> <!--End of left container -->
    
    <div class='right-container'>
        <img src="/png/side.png">
                  
    </div>
</div> <!--End of signup container -->

<!-- =========== Scripts =========  -->
<script src="assets/js/script.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/loader.js"></script>
<script src="assets/js/form.js"></script>
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