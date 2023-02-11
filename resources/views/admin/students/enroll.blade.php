@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Student Enrollment Record</h2>
                
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
                    <form method="POST" action="/admin/students/{{$student->id}}/enrollment">
                        @csrf
                        
                        <div class="form_item">
                            <label for="LRN_no" class="col-md-4 col-form-label text-md-end">{{ __('LRN Number') }}</label>

                            <div class="col-md-6">
                                <input readonly id="LRN_no" 
                                type="text" 
                                class="wow form-control @error('LRN_no') is-invalid @enderror" name="LRN_no" 
                                value="{{ $student->LRN_no }}" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input readonly id="fullname" 
                                type="text" 
                                class=" wow form-control @error('fullname') is-invalid @enderror" name="fullname" 
                                value="{{ $student->lastName }}, {{ $student->givenName }} {{ $student->middleName }}" autofocus>
                            </div>
                        </div>

                        <!-- <div class="form_item">
                            <label for="curriculum" class="col-md-4 col-form-label text-md-end">Curriculum</label>
                            <select name="curriculum" class="form-control wow" id="curriculum">
                                <option selected disabled>-- Select Curriculum --</option>
                                
                            </select>
                        </div> -->

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
                                <label for="status" class="col-md-4 col-form-label text-md-end">Status</label>
                                <select name="status" class="form-control wow" id="status">
                                    <option selected disabled>-- Select Status --</option>
                                    <option value="New">New</option>
                                    <option value="Continuing">Continuing</option>
                                    <option value="Transferee">Transferee</option>
                                </select>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="student_id" type="text" class="wow form-control @error('student_id') is-invalid @enderror" name="student_id" value="{{$student->id}}" required>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="owner_type" type="text" class="wow form-control @error('owner_type') is-invalid @enderror" name="owner_type" value="S" required autocomplete="owner_type" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="status" type="text" class="wow form-control @error('status') is-invalid @enderror" name="status" value="New" required autocomplete="status" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="schoolyear_id" type="text" class="wow form-control @error('schoolyear_id') is-invalid @enderror" name="schoolyear_id" value=10103 required autocomplete="schoolyear_id" autofocus>
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