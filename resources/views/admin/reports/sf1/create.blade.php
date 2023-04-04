@extends('layouts.'.$roleName.'-app')

@section('content')
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new SF 1 Record</h2>
                
                <!-- ERROR NOTIFS -->
                @if (session('error'))
                    <div class="alert alert-danger" style="color:red;">
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
                                    <option value="{{$schoolyear->id}}" @if($studSY->schoolyear_id == $schoolyear->id) echo selected @endif>{{ $schoolyear->year_start}}-{{ $schoolyear->year_end}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form_item">
                            <label for="grade_lvl" class="col-md-4 col-form-label text-md-end">Grade Level</label>
                            <select name="grade_lvl" class="form-control wow" id="grade_lvl">
                                <option selected disabled>-- Select Grade Level --</option>
                                <option value=7 @if($studSY->Section->grade_level == 7) echo selected @endif> Grade 7 </option>
                                <option value=8 @if($studSY->Section->grade_level == 8) echo selected @endif> Grade 8 </option>
                                <option value=9 @if($studSY->Section->grade_level == 9) echo selected @endif> Grade 9 </option>
                                <option value=10 @if($studSY->Section->grade_level == 10) echo selected @endif> Grade 10 </option>
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="section" class="col-md-4 col-form-label text-md-end">Section</label>
                            <select name="section" class="form-control wow" id="section">
                                <option selected value="{{$studSY->Section->id}}">{{$studSY->Section->name}}</option>
                            </select>
                        </div>
                    </div>
                    <hr>

                    <div class="form_item">
                        <label for="student_name" class="col-md-4 col-form-label text-md-end">{{ __('Student') }}</label>

                        <div class="col-md-6">
                            <input readonly id="student_name" 
                            type="text" value="{{$studSY->Student->User->lastName}}, {{$studSY->Student->User->givenName}} {{$studSY->Student->User->middleName}}"
                            class="wow form-control @error('student_name') is-invalid @enderror" name="student_name">
                        </div>
                        <div class="col-md-6">
                            <input hidden readonly id="student" 
                            type="text" value="{{$studSY->Student->id}}" name="student">
                        </div>
                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Age as of 1st Friday of June') }}</label>

                            <div class="col-md-6">
                                <input id="age" value="{{ $age }}"
                                type="text" placeholder="Age"
                                class="wow form-control @error('age') is-invalid @enderror" name="age">
                            </div>
                        </div>
                        <div class="form_item">
                            <label for="mother_tongue" class="col-md-4 col-form-label text-md-end">{{ __('Mother Tongue') }}</label>

                            <!-- <div class="col-md-6">
                                <input id="mother_tongue"  value="{{ $studSY->Student->StudentData->mother_tongue ?? old('mother_tongue')}}"
                                type="text" placeholder="Mother Tongue"
                                class="wow form-control @error('mother_tongue') is-invalid @enderror" name="mother_tongue">
                            </div> -->
                            
                            <select name="mother_tongue" class="form-control wow" id="mother_tongue">
                                <option selected disabled>-- Select Mother Tongue --</option>
                                <option value='Akeanon'> Akeanon </option>
                                <option value='Bikolano'> Bikolano </option>
                                <option value='Bisaya'> Bisaya </option>
                                <option value='Boholano'> Boholano </option>
                                <option value='Capizeño'> Capizeño </option>
                                <option value='Cebuano'> Cebuano </option>
                                <option value='Hiligaynon Ilonggo'> Hiligaynon Ilonggo </option>
                                <option value='Ilocano'> Ilocano </option>
                                <option value='Ivatan'> Ivatan </option>
                                <option value='Kalinga'> Kalinga </option>
                                <option value='Kankanaey'> Kankanaey </option>
                                <option value='Kapampangan'> Kapampangan </option>
                                <option value='Karay-a'> Karay-a </option>
                                <option value='Maguindanao'> Maguindanao </option>
                                <option value='Maranao'> Maranao </option>
                                <option value='Masbateño/Masbatenon'> Masbateño/Masbatenon </option>
                                <option value='Other Local Dialects'> Other Local Dialects </option>
                                <option value='Pangasinan/Panggalato'> Pangasinan/Panggalato </option>
                                <option value='Sama/Samal'> Sama/Samal </option>
                                <option value='Surigaonon'> Surigaonon </option>
                                <option value='Tagalog' selected> Tagalog </option>
                                <option value='Tausug'> Tausug </option>
                                <option value='Tuwali'> Tuwali </option>
                                <option value='Waray'> Waray </option>
                                <option value='Yakan'> Yakan </option>
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="IP_ethnicGroup" class="col-md-4 col-form-label text-md-end">{{ __('IP or Ethnic Group') }}</label>

                            <div class="col-md-6">
                                <input id="IP_ethnicGroup"  value="{{ $studSY->Student->StudentData->IP_ethnicGroup ?? old('IP_ethnicGroup') }}"
                                type="text"  placeholder="IP or Ethnic Group"
                                class="wow form-control @error('IP_ethnicGroup') is-invalid @enderror" name="IP_ethnicGroup">
                            </div>
                        </div>
                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="father_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Father Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_givenName"  value="{{ $studSY->Student->StudentData->father_givenName ?? old('father_givenName') }}"
                                type="text"  placeholder="Father's Given Name"
                                class="wow form-control @error('father_givenName') is-invalid @enderror" name="father_givenName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="father_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Father Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_middleName" value="{{$studSY->Student->StudentData->father_middleName ?? old('father_middleName') }}"
                                type="text"  placeholder="Father's Middle Name"
                                class="wow form-control @error('father_middleName') is-invalid @enderror" name="father_middleName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="father_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Father Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="father_lastName" value="{{$studSY->Student->StudentData->father_lastName ?? old('father_lastName') }}"
                                type="text"  placeholder="Father's Last Name"
                                class="wow form-control @error('father_lastName') is-invalid @enderror" name="father_lastName">
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="mother_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_givenName" value="{{$studSY->Student->StudentData->mother_givenName ?? old('mother_givenName') }}"
                                type="text" placeholder="Mother's Given Name"
                                class="wow form-control @error('mother_givenName') is-invalid @enderror" name="mother_givenName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="mother_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_middleName" value="{{$studSY->Student->StudentData->mother_middleName ?? old('mother_middleName') }}"
                                type="text" placeholder="Mother's Middle Name"
                                class="wow form-control @error('mother_middleName') is-invalid @enderror" name="mother_middleName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="mother_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Mother Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="mother_lastName" value="{{$studSY->Student->StudentData->mother_lastName ?? old('mother_lastName') }}"
                                type="text" placeholder="Mother's Last Name"
                                class="wow form-control @error('mother_lastName') is-invalid @enderror" name="mother_lastName">
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="guardian_givenName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Given Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_givenName" value="{{$studSY->Student->StudentData->guardian_givenName ?? old('guardian_givenName') }}"
                                type="text" placeholder="Guardian's Given Name"
                                class="wow form-control @error('guardian_givenName') is-invalid @enderror" name="guardian_givenName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_middleName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Middle Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_middleName" value="{{$studSY->Student->StudentData->guardian_middleName ?? old('guardian_middleName') }}"
                                type="text" placeholder="Guardian's Middle Name"
                                class="wow form-control @error('guardian_middleName') is-invalid @enderror" name="guardian_middleName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_lastName" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_lastName" value="{{$studSY->Student->StudentData->guardian_lastName ?? old('guardian_lastName') }}"
                                type="text" placeholder="Guardian's Last Name"
                                class="wow form-control @error('guardian_lastName') is-invalid @enderror" name="guardian_lastName">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="guardian_relationship" class="col-md-4 col-form-label text-md-end">{{ __('Guardian Relationship') }}</label>

                            <div class="col-md-6">
                                <input id="guardian_relationship" value="{{$studSY->Student->StudentData->guardian_relationship ?? old('guardian_relationship') }}"
                                type="text"  placeholder="Reationship with Guardian"
                                class="wow form-control @error('guardian_relationship') is-invalid @enderror" name="guardian_relationship">
                            </div>
                        </div>

                    </div>

                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <label for="contact" class="col-md-4 col-form-label text-md-end">{{ __('Parent or Guardian Contact Number') }}</label>

                            <div class="col-md-6">
                                <input id="contact" value="{{$studSY->Student->StudentData->parent_guardian_contactNo ?? old('contact') }}"
                                type="text"  placeholder="Contact #"
                                class="wow form-control @error('contact') is-invalid @enderror" name="contact">
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="remarks" class="col-md-4 col-form-label text-md-end">{{ __('Remarks') }}</label>

                            <div class="col-md-6">
                                <input id="remarks" value="{{ old('remarks') }}"
                                type="text"  placeholder="Remarks"
                                class="wow form-control @error('remarks') is-invalid @enderror" name="remarks">
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-6 offset-md-4" style="align:right;">
                        <button type="submit" class="save_btn">
                            {{ __('Create Record') }}
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

