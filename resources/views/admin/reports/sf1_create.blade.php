@extends('layouts.admin-app')

@section('content')
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new SF 1 Record</h2>
                
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

                <form method="POST" action="/admin/reports/sf1">
                    @csrf
                    
                    <div class="form_wrap select_box">

                        <div class="form_item">
                            <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                            <select name="schoolyear" class="form-control wow" id="schoolyear">
                                <option selected disabled>-- Select School Year--</option>
                                @foreach ($schoolyears as $schoolyear)
                                    <option value="{{$schoolyear->id}}">{{ $schoolyear->year_start}}-{{ $schoolyear->year_end}}</option>
                                @endforeach
                            </select>
                        </div>
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
                    <br>
                    <hr>

                    <div class="form_item">
                        <div class="form_item">
                            <label for="student" class="col-md-4 col-form-label text-md-end">Student</label>
                            <select name="student" class="form-control wow" id="student">
                                <option value="" selected disabled>-- Select Student --</option>
                            </select>
                        </div>
                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age as of 1st Friday of June') }}</label>

                            <div class="col-md-6">
                                <input id="age" 
                                type="text" 
                                class="wow form-control @error('age') is-invalid @enderror" name="age" autofocus>
                            </div>
                        </div>
                        <div class="form_item">
                            <label for="mother_tongue" class="col-md-4 col-form-label text-md-end">{{ __('Mother Tongue') }}</label>

                            <div class="col-md-6">
                                <input id="mother_tongue" 
                                type="text" 
                                class="wow form-control @error('mother_tongue') is-invalid @enderror" name="mother_tongue" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="IP_ethnicGroup" class="col-md-4 col-form-label text-md-end">{{ __('IP or Ethnic Group') }}</label>

                            <div class="col-md-6">
                                <input id="IP_ethnicGroup" 
                                type="text" 
                                class="wow form-control @error('IP_ethnicGroup') is-invalid @enderror" name="IP_ethnicGroup" autofocus>
                            </div>
                        </div>
                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="father_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Father Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_givenName" 
                                type="text" 
                                class="wow form-control @error('father_givenName') is-invalid @enderror" name="father_givenName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="father_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Father Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_middleName" 
                                type="text" 
                                class="wow form-control @error('father_middleName') is-invalid @enderror" name="father_middleName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="father_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Father Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_lastName" 
                                type="text" 
                                class="wow form-control @error('father_lastName') is-invalid @enderror" name="father_lastName" autofocus>
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="mother_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_givenName" 
                                type="text" 
                                class="wow form-control @error('mother_givenName') is-invalid @enderror" name="mother_givenName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="mother_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_middleName" 
                                type="text" 
                                class="wow form-control @error('mother_middleName') is-invalid @enderror" name="mother_middleName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="mother_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_lastName" 
                                type="text" 
                                class="wow form-control @error('mother_lastName') is-invalid @enderror" name="mother_lastName" autofocus>
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="guardian_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_givenName" 
                                type="text" 
                                class="wow form-control @error('guardian_givenName') is-invalid @enderror" name="guardian_givenName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_middleName" 
                                type="text" 
                                class="wow form-control @error('guardian_middleName') is-invalid @enderror" name="guardian_middleName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_lastName" 
                                type="text" 
                                class="wow form-control @error('guardian_lastName') is-invalid @enderror" name="guardian_lastName" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_relationship" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Relationship') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_relationship" 
                                type="text" 
                                class="wow form-control @error('guardian_relationship') is-invalid @enderror" name="guardian_relationship" autofocus>
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Parent or Guardian Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact" 
                                type="text" 
                                class="wow form-control @error('contact') is-invalid @enderror" name="contact" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="remarks" class="col-md-4 col-form-label text-md-end">{{ __('Remarks') }}</label>

                            <div class="col-md-6">
                                <input id="remarks" 
                                type="text" 
                                class="wow form-control @error('remarks') is-invalid @enderror" name="remarks" autofocus>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-6 offset-md-4" style="align:right;">
                        <button type="submit" class="save_btn">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
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
                        $('#student').html('<option value="" selected disabled>-- Select Student --</option>');
                    }
                });
            });
            $('#section').on('change', function () {
                var section = this.value;
                $('#student').html('');
                $.ajax({
                    url: '{{ route('getStudents') }}?section='+section,
                    type: 'get',
                    success: function (res) {
                        $('#student').html('<option value="" selected disabled>-- Select Student --</option>');
                        $.each(res, function (key, value) {
                            $('#student').append('<option value="' + value.student_id + '">' + value.lastName + ', ' + value.givenName + ' ' + value.middleName + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection

