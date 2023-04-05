@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>ASSIGN SUBJECTS TO STUDENT</h2>
                
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
                    <form method="POST" action="/admin/students/{{$student_model->id}}/view/{{$schoolyear->id}}/destroy">
                        @csrf
                        @method('DELETE')
                        
                        <div class="form_item">
                            <label for="LRN_no" class="col-md-4 col-form-label text-md-end">{{ __('LRN Number') }}</label>

                            <div class="col-md-6">
                                <input readonly id="LRN_no" 
                                type="text" 
                                class="wow form-control @error('LRN_no') is-invalid @enderror" name="LRN_no" 
                                value="{{ $student_model->LRN_no }}" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input readonly id="fullname" 
                                type="text" 
                                class=" wow form-control @error('fullname') is-invalid @enderror" name="fullname" 
                                value="{{ $student_model->user->lastName }}, {{ $student_model->user->givenName }} {{ $student_model->user->middleName }}" autofocus>
                            </div>
                        </div>

                        <div class="form_wrap select_box">
                            <div class="form_item">
                                <label for="grade_level" class="col-md-4 col-form-label text-md-end">{{ __('Grade Level') }}</label>

                                <div class="col-md-6">
                                    <input readonly id="grade_level" 
                                    type="text" 
                                    class=" wow form-control @error('grade_level') is-invalid @enderror" name="grade_level" 
                                    value="{{ $grade}}" autofocus>
                                </div>
                            </div>
                            <div class="form_item">
                                <label for="section" class="col-md-4 col-form-label text-md-end">Section</label>
                                <div class="col-md-6">
                                    <input readonly id="section" 
                                    type="text" 
                                    class=" wow form-control @error('section') is-invalid @enderror" name="section" 
                                    value="{{ $section}}" autofocus>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h4>ASSIGNED SUBJECTS</h4>
                            <div class="form_item">
                                <table id="example" class="table table-striped" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th> Subject Class</th>
                                            <th> Section</th>
                                            <th style="width=10% align=left"><input name="select_all"  type="checkbox" id="all_assigned"></th>
                                        </tr>	
                                    </thead>
                                    <tbody>
                                        @foreach ($assigned_subs as $assigned )
                                            <tr>
                                                <td>{{ $loop->index + 1}}</td>
                                                <td>{{ $assigned->subject}}</td>
                                                <td>{{ $assigned->name}}</td>
                                                <td><input id="assigned" type="checkbox" class="assigned wow form-control @error('elective') is-invalid @enderror" name="assigned[]" value="{{$assigned->stud_subj_id}}"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Remove Subjects') }}
                            </button>
                        </div>
                    </form>

                    <form method="POST" action="/admin/students/{{$student_model->id}}/view/{{$schoolyear->id}}">
                        @csrf
                        <div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="student" 
                                type="text" 
                                class=" wow form-control @error('student') is-invalid @enderror" name="student" 
                                value="{{ $student_model->id}}" autofocus>
                            </div>
                        </div>
                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="student_sy" 
                                type="text" 
                                class=" wow form-control @error('student_sy') is-invalid @enderror" name="student_sy" 
                                value="{{ $schoolyear->id}}" autofocus>
                            </div>
                        </div>
                            <div class="form_item">
                                <table id="example" class="table table-striped" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th> Subject Class</th>
                                            <th> Section</th>
                                            <th style="width=10% align=left"><input name="select_all"  type="checkbox" id="all_avail"></th>
                                        </tr>	
                                    </thead>
                                    <tbody>
                                        @foreach ($avail_subs as $subject )
                                            <tr>
                                                <td>{{ $loop->index + 1}}</td>
                                                <td>{{ $subject->subject}}</td>
                                                <td>{{ $subject->section}}</td>
                                                <td><input id="subjects" type="checkbox" class="avail wow form-control @error('elective') is-invalid @enderror" name="subjects[]" value="{{$subject->subclass_id}}"></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="student_id" type="text" class="wow form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{$student_model->id}}" required>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Add Subjects') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap" style="float:left;margin-top:1rem;">
                    <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/students/{{$student_model->id}}/view/{{$schoolyear->id}}"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to School Year Record</a>
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
            $('#all_assigned').on('change', function() {     
                $('.assigned').prop('checked', $(this).prop("checked"));              
            });
            //deselect "checked all", if one of the listed checkbox category is unchecked amd select "checked all" if all of the listed checkbox category is checked
            $('.assigned').change(function(){ //".assigned" change 
                if($('.assigned:checked').length == $('.assigned').length){
                    $('#all_assigned').prop('checked',true);
                }else{
                    $('#all_assigned').prop('checked',false);
                }
            });

            $('#all_avail').on('change', function() {     
                $('.avail').prop('checked', $(this).prop("checked"));              
            });
            //deselect "checked all", if one of the listed checkbox category is unchecked amd select "checked all" if all of the listed checkbox category is checked
            $('.avail').change(function(){ //".avail" change 
                if($('.avail:checked').length == $('.avail').length){
                    $('#all_avail').prop('checked',true);
                }else{
                    $('#all_avail').prop('checked',false);
                }
            });
        });
    </script>
@endsection