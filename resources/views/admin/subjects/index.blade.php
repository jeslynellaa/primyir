@extends('layouts.admin-app')

@section('content')

    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="lists_wrap">
        <div class="well">
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
            <div id="success_message"></div>
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Subjects</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/subjects/create">Add New Subject</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Subject Name</th>
                            <th>Grade Level</th>
                            <th>Curriculum</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($subjects as $subject)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->grade_level }}</td>
                                <td>{{ $subject->curriculum }}</td>
                                <td>
                                <a href="/admin/subjects/{{$subject->id}}" class="viewbtn">&nbsp;<i class="fa-solid fa-eye"></i>&nbsp;</a>
                                    <button type="button" class="edit_subject editbtn btn" value="{{$subject->id}}">
                                        &nbsp;<i class="fa-solid fa-pen-to-square"></i></i>&nbsp;
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <!-- ======= EDIT MODAL FOR SUBJECTS ========= -->
        <div class="modal fade text-left" id="subjectEdit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-lg" role="document">
                <form id="editSubject">
                    
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-header">
                            <h3 class="modal-title">{{ __('Edit Subject') }}</h3>
                        </div>
                        <div class="modal-body">
                            
                            <div id="success_message"></div>
                            <ul id="update_errList"></ul>
                            <div class="col-md-6">
                                <input hidden id="edit_subject_id" type="text" required autofocus>
                            </div>
                            <div class="form_item">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Subject Name') }}</label>
                                <div class="col-md-6">
                                    <input id="edit_name" type="text" class="wow form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Enter Subject Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form_item">
                                <label for="grade_level" class="col-md-4 col-form-label text-md-end">{{ __('Grade Level') }}</label>

                                <select name="grade_level" class="form-control wow" id="edit_grade_level">
                                    <option selected disabled>-- Select Grade Level --</option>
                                    <option value=7> Grade 7 </option>
                                    <option value=8> Grade 8 </option>
                                    <option value=9> Grade 9 </option>
                                    <option value=10> Grade 10 </option>
                                </select>
                            </div>
                            <div class="form_item">
                                <label for="curriculum" class="col-md-4 col-form-label text-md-end">Curriculum</label>
                                <select name="curriculum" class="form-control wow" id="curriculum">
                                    <option selected disabled>-- Select Curriculum --</option>
                                </select>
                            </div>
                            <div class="form_item">
                                <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                                <select name="edit_schoolyear" class="form-control wow" id="edit_schoolyear">
                                    <option selected disabled>-- Select School Year --</option>
                                </select>
                            </div>
                            <div class="checkbox">
                                <label for="elective" class="col-md-4 col-form-label text-md-end">Elective Subject? </label>
                                    <input id="elective_yes" type="radio" class="elective wow form-control @error('elective') is-invalid @enderror" name="elective" value="1">
                                    <label for="elective_yes">Yes</label><br>
                                    <input id="elective_no" type="radio" class="elective wow form-control @error('elective') is-invalid @enderror" name="elective" value="0">
                                    <label for="elective_no">No</label><br>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="button" class="btn btn-success update_subject">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!--END OF EDIT MODAL -->
        
        <span>
            {{$subjects->links()}}
        </span>
        <style>
            .w-5{
                display: none;
            }
        </style>
    </div>
    
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Curricula</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/curriculum/create">Add New Curriculum</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Name</th>
                            <th>Acronym</th>
                            <th>Description</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($curricula as $curriculum)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $curriculum->name }}</td>
                                <td>{{ $curriculum->acronym }}</td>
                                <td>{{ $curriculum->description }}</td>
                                <td><a href="/admin/curriculum/{{$curriculum->id}}/edit">Edit</a>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <span>
        </span>
        <style>
        .viewbtn{
  text-decoration: none;
  color:white;
  background: #1a6426;
  border-radius: 8px;
  padding: 2px;
  font-size: 100%;
  transition: 0.2s ease-in-out;
}

.list_function{
    background: #1a6426;
}

.viewbtn:hover, .list_function:hover{
  background: #38a249;
}

.editbtn{
  text-decoration: none;
  color:white;
  background: #ff9f00;
  border-radius: 8px;
  border: transparent;
  padding: 5px;
  font-size: 100%;
  transition: 0.2s ease-in-out;
}

.editbtn:hover{
    cursor: pointer;
  background: #ffcc00;
}

th, td{
    text-align: center;
}

tr{
    transition: 0.2s ease-in-out;
}

.main{
    background:#f9f9f9;
}

.well{
    background:white;
    border: none;
    box-shadow: 0 5px 11px 0 rgba(0, 0, 0, .1), 0 4px 11px 0 rgba(0, 0, 0, .08);
    border-radius: 25px;
}
tr:nth-child(even) {background: #ffffff;
    border: none;
}
tr:nth-child(odd) {background: #e6e6e6;
    border: none;
}
tr:first-child{
        background: #fff;
}

tr:first-child:hover{
        background: #fff;
        color:black;
}
th{
    font-weight: 500;
}

tr:hover{
    background:#023a02;
    color: white;
}
    </style>
    </div>
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', '.edit_subject', function(e) {
                e.preventDefault();
                var sub_id = $(this).val();
                //console.log(sub_id);

                $('#subjectEdit').modal('show');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "/admin/subjects/"+sub_id+"/edit",
                    success: function(response) {
                        console.log(response)
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else if(response.status == 200){
                            $('#edit_name').val(response.subjectData.name);
                            $('#edit_grade_level').val(response.subjectData.grade_level);

                            $('#curriculum').html('<option value="">-- Select Curriculum --</option>');
                            $.each(response.curricula, function (key, value) {
                                $('#curriculum').append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            $('#curriculum').val(response.subjectData.curriculum_id);

                            $('#edit_schoolyear').html('<option value="">-- Select School Year --</option>');
                            $.each(response.schoolyears, function (key, value) {
                                $('#edit_schoolyear').append('<option value="' + value.id + '">' + value.year_start + ' - ' + value.year_end + '</option>');
                            });
                            $('#edit_schoolyear').val(response.subjectData.schoolyear_id);

                            $('#elective_yes').prop('checked', response.elective);
                            $('#elective_no').prop('checked', !(response.elective));
                            $('#edit_subject_id').val(sub_id);
                        }
                    }
                });
            });
            $(document).on('click', '.update_subject', function(e) {
                e.preventDefault();
                var sub_id = $('#edit_subject_id').val();
                var elective = $('.elective:checked').val();

                var data = {
                    'name' : $('#edit_name').val(),
                    'grade_level' : $('#edit_grade_level').val(),
                    'curriculum_id' : $('#curriculum').val(),
                    'schoolyear_id' : $('#edit_schoolyear').val(),
                    'elective' : elective
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/admin/subjects/"+sub_id,
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
                            //$('#subjectEdit').modal('hide');
                        }
                    }
                });
                //console.log(sub_id);
            });
        });
    </script>


    <!-- <script type="text/javascript">
        $(document).ready(function(){

            $('#editSubject').on('submit', function(e){
                e.preventDefault();

                var sub_id = $

                $.ajax({
                    type: "POST",
                    url: "/admin/subjects/edit",
                    data: $('#editSubject').serialize(),
                    success: function(response) {
                        console.log(response)
                        $('#subjectEdit{{$subject->id}}').modal('hide')
                        alert("Changes Saved Successfully");
                    },
                    error: function(error){
                        console.log(error)
                        alert("Error");
                    }
                });
            });
        });
    </script> -->
@endsection