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
                <h2 style="align:left">List of Classes for {{$subject_model->name}}</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/subjects">Back to Subjects</a>
                    <a class="list_function" href="/admin/subjects/class/{{$subject_model->id}}/create">Create New Class</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">No.</th>
                            <th>Grade and Section</th>
                            <th>Teacher</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($subject_records as $subject )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>Grade {{ $subject->grade }} - {{ $subject->section }}</td>
                            <td>{{ $subject->lastName }}, {{ $subject->givenName }} {{ $subject->middleName }}</td>
                            <td>
                                <button type="button" class="edit_subclass editbtn btn" value="{{$subject->id}}">
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
        <div class="modal fade text-left" id="subclassEdit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-lg" role="document">
                <form id="editSubclass">
                    
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-header">
                            <h3 class="modal-title">{{ __('Edit Subject Class') }}</h3>
                        </div>
                        <div class="modal-body">
                            
                            <div id="success_message"></div>
                            <ul id="update_errList"></ul>
                            <div class="col-md-6">
                                <input hidden id="subclass_id" type="text" required autofocus>
                            </div>

                            <div class="form_item">
                                <label for="section" class="col-md-4 col-form-label text-md-end">Sections</label>
                                <select name="section" class="form-control wow" id="section">
                                    <option value="" selected disabled>-- Select Section --</option>
                                </select>
                            </div>

                            <div class="form_item">
                                <label for="teacher" class="col-md-4 col-form-label text-md-end">Teacher</label>
                                <select name="teacher" class="form-control wow" id="teacher">
                                    <option selected disabled>-- Select Teacher --</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="button" class="btn btn-success update_subclass">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!--END OF EDIT MODAL -->
            <span>
            </span>
            <style>
                .w-5{
                display: none;
            }
            </style>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', '.edit_subclass', function(e) {
                e.preventDefault();
                var subclass_id = $(this).val();
                //console.log(subclass_id);

                $('#subclassEdit').modal('show');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "/admin/subjects/class/"+subclass_id+"/edit",
                    success: function(response) {
                        console.log(response)
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else if(response.status == 200){
                            $('#section').html('<option value="">-- Select Section --</option>');
                            $.each(response.sections, function (key, value) {
                                $('#section').append('<option value="' + value.id + '">' +  'Grade '+ value.grade_level +' - '+ value.name + '</option>');
                            });
                            $('#section').val(response.subject_class.section_id);

                            $('#teacher').html('<option value="">-- Select Teacher --</option>');
                            $.each(response.teachers, function (key, value) {
                                $('#teacher').append('<option value="' + value.id + '">' + value.lastName + ', ' + value.givenName + ' ' + value.middleName + '</option>');
                            });
                            $('#teacher').val(response.subject_class.teacher_id);

                            $('#subclass_id').val(subclass_id);
                        }
                    }
                });
            });
            $(document).on('click', '.update_subclass', function(e) {
                e.preventDefault();
                var subclass_id = $('#subclass_id').val();

                var data = {
                    'section_id' : $('#section').val(),
                    'teacher_id' : $('#teacher').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/admin/subjects/class/"+subclass_id,
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
                        }
                    }
                });
            });
        });
    </script>
@endsection