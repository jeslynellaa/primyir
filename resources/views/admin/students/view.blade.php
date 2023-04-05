@extends('layouts.admin-app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="lists_wrap">
        <div class="well">
            <div id="success_message"></div>
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">{{ $student_model->user->lastName }}, {{ $student_model->user->givenName }} {{ $student_model->user->middleName }}</h2>

                <div class="functions_wrap">
                    <a class="list_function" style="margin:5px;" href="/admin/students">Back to Students</a>
                    <a class="list_function" style="margin:5px;" href="/admin/students/{{$student_model->id}}/edit">Edit Student Info</a>
                    <a class="list_function" style="margin:5px;" href="/admin/students/{{$student_model->id}}/enrollment/create">New Enrollment Record</a>
                </div>
            </div>
            <div>
                <h3>Student Info</h3>
                <div style="padding-left:15px;">
                    LRN Number: {{$student_model->LRN_no}}<br>
                    Birthday: {{$student_model->user->birthdate}}<br>
                    Gender: {{$student_model->user->sex}}<br>
                    Religion: {{$student_model->religion}}<br>
                    Contact Number: {{$student_model->user->contactNum}}<br>
                    Email: {{$student_model->user->email}}<br>
                    Username: {{$student_model->user->username}}<br>
                    Program: {{$student_model->curriculum->name}}<br>
                    Address: {{$address->street}} {{$address->brgy}} {{$address->province}} {{$address->region}}
                </div>
            </div>
            <div>
                <h3>Student Enrollment Records</h3>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> School Year</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Student Status</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($student_records as $student )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $student->year_start }}-{{ $student->year_end }}</td>
                                <td>{{ $student->grade_level }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->status}}</td>
                                <td>
                                    <a href="/admin/students/{{$student->stud_id}}/view/{{$student->syid}}">View</a>
                                    <button type="button" class="edit_studentRecord editbtn btn" value="{{$student->syid}}">
                                        &nbsp;<i class="fa-solid fa-pen-to-square"></i></i>&nbsp;
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- ======= EDIT MODAL FOR SUBJECTS ========= -->
    <div class="modal fade text-left" id="studentRecordEdit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-lg" role="document">
            <form id="editStudentRecord">
                
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-header">
                        <h3 class="modal-title">{{ __('Edit Student Enrollment Record') }}</h3>
                    </div>
                    <div class="modal-body">
                        
                        <div id="success_message"></div>
                        <ul id="update_errList"></ul>

                        <div class="col-md-6">
                            <input hidden id="studentRecord_id" type="text" required autofocus>
                        </div>

                        <div class="form_item">
                            <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                            <select name="schoolyear" class="form-control wow" id="schoolyear">
                                <option selected disabled>-- Select School Year --</option>
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="grade_level" class="col-md-4 col-form-label text-md-end">{{ __('Grade Level') }}</label>

                            <select name="grade_level" class="form-control wow" id="grade_level">
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
                                <option selected disabled>-- Select Section --</option>
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

                        
                        <div class="modal-footer">
                            <div class="col-md-6 col-sm-6 offset-md-5">
                                <button type="button" class="btn btn-success update_studentRecord">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div> <!--END OF EDIT MODAL -->

    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', '.edit_studentRecord', function(e) {
                e.preventDefault();
                var record_id = $(this).val();
                console.log(record_id);

                $('#studentRecordEdit').modal('show');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "/admin/students/view/"+record_id+"/edit",
                    success: function(response) {
                        console.log(response)
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else if(response.status == 200){
                            $('#grade_level').val(response.grade);
                            
                            $('#section').html('<option value="">-- Select Section --</option>');
                            $.each(response.sections, function (key, value) {
                                $('#section').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            $('#section').val(response.studentSY.section_id);

                            $('#grade_level').on('change', function () {
                                var gradeLevel = $(this).val();
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
                            $('#section').one('click', function () {
                                var gradeLevel = $('#grade_level').val();
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
                            $('#status').val(response.studentSY.status);

                            $('#schoolyear').html('<option value="">-- Select School Year --</option>');
                            $.each(response.schoolyears, function (key, value) {
                                $('#schoolyear').append('<option value="' + value.id + '">' + value.year_start + ' - ' + value.year_end + '</option>');
                            });
                            $('#schoolyear').val(response.studentSY.schoolyear_id);
                            $('#studentRecord_id').val(record_id);
                        }
                    }
                });
            });
            $(document).on('click', '.update_studentRecord', function(e) {
                e.preventDefault();
                var record_id = $('#studentRecord_id').val();

                var data = {
                    'schoolyear_id' : $('#schoolyear').val(),
                    'section_id' : $('#section').val(),
                    'status' : $('#status').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/admin/students/view/"+record_id,
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if(response.status == 400){
                            $('#update_errList').html("");
                            $('#update_errList').addClass('alert alert-danger');
                            $.each(respose.errors, function (key, err_values){
                                $('#update_errList').append('<li>'+err_values+'</li>')
                            });
                        }else if(response.status == 404){
                            $('#update_errList').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else{
                            alert("Changes Saved Successfully!");
                            location.reload();
                            // $('#update_errList').html("");
                            // $('#success_message').html("");
                            // $('#success_message').addClass('alert alert-danger');
                            // $('#success_message').text(response.message);
                            //$('#studentRecordEdit').modal('hide');
                        }
                    }
                });
                //console.log(sub_id);
            });
        });
    </script>
@endsection