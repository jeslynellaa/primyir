@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Student Account and Record</h2>
                
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
                    <form method="POST" action="/admin/students">
                        @csrf
                        
                        <div class="form_item">
                            <label for="LRN_no" class="col-md-4 col-form-label text-md-end">{{ __('LRN Number') }}</label>

                            <div class="col-md-6">
                                <input id="LRN_no" type="text" class="wow form-control @error('LRN_no') is-invalid @enderror" name="LRN_no" value="{{ old('LRN_no') }}" autocomplete="LRN_no" autofocus>

                                @error('LRN_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                                <div class="radio_item">
                                    <input id="male" type="radio" class="wow form-control @error('sex') is-invalid @enderror" name="sex" value="M" required autofocus>
                                    <label for="male">Male</label><br>
                                </div>
                                <div class="radio_item">
                                    <input id="female" type="radio" class="wow form-control @error('sex') is-invalid @enderror" name="sex" value="F" required autofocus>
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
                                    
                                    <input id="birthdate" type="date" class="wow form-control @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="religion" class="col-md-4 col-form-label text-md-end">{{ __('Religion') }}</label>

                                <div class="col-md-6">
                                    <input id="religion" type="text" class="wow form-control @error('religion') is-invalid @enderror" name="religion" value="{{ old('religion') }}" required autocomplete="religion" autofocus>

                                    @error('religion')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form_item">
                                <label for="curriculum" class="col-md-4 col-form-label text-md-end">Curriculum</label>
                                <select name="curriculum" class="form-control wow" id="curriculum">
                                    <option selected disabled>-- Select Curriculum --</option>
                                    @foreach ($curricula as $curriculum)
                                        <option value="{{ $curriculum->id }}"> {{ $curriculum->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="status" class="col-md-4 col-form-label text-md-end">Student's Status</label>
                                <select name="status" class="form-control wow" id="status">
                                    <option disabled>-- Select status --</option>
                                    <option value="New" selected>New</option>
                                    <option value="Continuing">Continuing</option>
                                    <option value="Transferee">Transferee</option>
                                </select>
                            </div>

                            <div class="form_item">
                                <label for="schoolyear_id" class="col-md-4 col-form-label text-md-end">School Year</label>
                                <select name="schoolyear_id" class="form-control wow" id="schoolyear_id">
                                    <option selected disabled>-- Select School Year --</option>
                                    @foreach ($schoolyears as $schoolyear)
                                        <option value="{{ $schoolyear->id }}" @if($schoolyear->id ==$currentSY->id) echo selected @endif> {{ $schoolyear->year_start}} - {{ $schoolyear->year_end}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form_wrap select_box">
                            <div class="form_item">
                                <label for="grade_lvl" class="col-md-4 col-form-label text-md-end">Grade Level</label>
                                <select name="grade_lvl" class="form-control wow" id="grade_lvl">
                                    <option selected disabled>-- Select Grade Level --</option>
                                    <option value=7> Grade 7 </option>
                                    <option value=8> Grade 8 </option>
                                    <option value=9> Grade 9 </option>
                                    <option value=10> Grade 10 </option>
                                </select>
                            </div>

                            <div class="form_item">
                                <label for="section" class="col-md-4 col-form-label text-md-end">Section</label>
                                <select name="section" class="form-control wow" id="section">
                                    <option selected disabled>-- Select Grade Level --</option>
                                </select>
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
                                <label for="accountStatus" class="col-md-4 col-form-label text-md-end">Account Status</label>
                                <select name="accountStatus" class="form-control wow" id="accountStatus">
                                    <option selected disabled>-- Select Account Status --</option>
                                    <option value='Active' selected>Active </option>
                                    <option value='Inactive'> Inactive</option>
                                </select>
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

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="owner_type" type="text" class="wow form-control @error('owner_type') is-invalid @enderror" name="owner_type" value="S" required autocomplete="owner_type" autofocus>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap" style="float:left;margin-top:1rem;">
                    <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/students"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to Records</a>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#grade_lvl').on('change', function () {
                var gradeLevel = this.value;
                $('#section').html('');
                $.ajax({
                    url: '{{ route('getSections') }}?grade_lvl='+gradeLevel,
                    type: 'get',
                    success: function (res) {
                        $('#section').html('<option value="" selected disabled>-- Select Section --</option>');
                        $.each(res, function (key, value) {
                            $('#section').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection

