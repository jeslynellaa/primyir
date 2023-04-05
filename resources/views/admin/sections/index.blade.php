@extends('layouts.admin-app')

@section('content')
    <script src="https://code.jquery.com/jquery-3.6.3.js"
    integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <div class="lists_wrap">
    <div class="lists_wrap">

        <div class="well">
            <div id="success_message"></div>
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Sections</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/sections/create">Create New Section</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Section Name</th>
                            <th>Grade Level</th>
                            <th>Adviser</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($section_teachers as $section )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $section->name }}</td>
                            <td>{{ $section->grade_level }}</td>
                            <td>{{ $section->givenName }} {{ $section->lastName }}</td>
                            <td>
                                <button type="button" class="edit_section editbtn btn" value="{{$section->sect_id}}">
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
        <div class="modal fade text-left" id="sectionEdit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-lg" role="document">
                <form id="editSection">
                    
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-header">
                            <h3 class="modal-title">{{ __('Edit Section') }}</h3>
                        </div>
                        <div class="modal-body">
                            
                            <div id="success_message"></div>
                            <ul id="update_errList"></ul>
                            <div class="col-md-6">
                                <input hidden id="section_id" type="text" required autofocus>
                            </div>

                            <div class="form_item">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Section Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="wow form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Enter Section Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
                                <label for="adviser" class="col-md-4 col-form-label text-md-end">Adviser</label>
                                <select name="adviser" class="form-control wow" id="adviser">
                                    <option selected disabled>-- Select Adviser --</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="button" class="btn btn-success update_section">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!--END OF EDIT MODAL -->
        <span>
            {{$section_teachers->links()}}
        </span>
        <style>
            .w-5{
            display: none;
        }
        </style>
    </div>
    
    <script type="text/javascript">
        $(document).ready(function(){

            $(document).on('click', '.edit_section', function(e) {
                e.preventDefault();
                var section_id = $(this).val();
                //console.log(section_id);

                $('#sectionEdit').modal('show');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "/admin/sections/"+section_id+"/edit",
                    success: function(response) {
                        console.log(response)
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else if(response.status == 200){
                            $('#name').val(response.section.name);
                            $('#grade_level').val(response.section.grade_level);
                            
                            $('#adviser').html('<option value="">-- Select Adviser --</option>');
                            $.each(response.teachers, function (key, value) {
                                $('#adviser').append('<option value="' + value.id + '">' + value.lastName + ', ' + value.givenName + ' ' + value.middleName + '</option>');
                            });
                            $('#adviser').val(response.section.adviser);

                            $('#section_id').val(section_id);
                        }
                    }
                });
            });
            $(document).on('click', '.update_section', function(e) {
                e.preventDefault();
                var section_id = $('#section_id').val();

                var data = {
                    'name' : $('#name').val(),
                    'grade_level' : $('#grade_level').val(),
                    'adviser' : $('#adviser').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/admin/sections/"+section_id,
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
                //console.log(section_id);
            });
        });
    </script>
@endsection