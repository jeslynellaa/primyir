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
                <h2 style="align:left">List of Schoolyears</h2>

                <div class="functions_wrap">
                    <button type="button" class="list_function editbtn btn" data-toggle="modal" data-target="#schoolyearAdd">
                        Add New School Year
                    </button>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Schoolyear</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($schoolyears as $schoolyear)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $schoolyear->year_start }} - {{ $schoolyear->year_end }}</td>
                                <td>{{ $schoolyear->date_start }}</td>
                                <td>{{ $schoolyear->date_end }}</td>
                                <td>
                                    <button type="button" class="edit_schoolyear editbtn btn" value="{{$schoolyear->id}}">
                                        &nbsp;<i class="fa-solid fa-pen-to-square"></i></i>&nbsp;
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        <!-- ======= ADD MODAL ========= -->
        <div class="modal fade text-left" id="schoolyearAdd" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-lg" role="document">
                <form id="addSchoolyear">
                    @csrf
                    
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-header">
                            <h3 class="modal-title">{{ __('Add School Year') }}</h3>
                        </div>
                        <div class="modal-body">
                            
                            <div id="success_message"></div>
                            <ul id="update_errList"></ul>

                            <div class="form_item">
                                <label for="date_start" class="col-md-4 col-form-label text-md-end">{{ __('Start Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input id="date_start" type="date" class="wow form-control @error('date_start') is-invalid @enderror" name="date_start" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>

                            <div class="form_item">
                                <label for="date_end" class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input id="date_end" type="date" class="wow form-control @error('date_end') is-invalid @enderror" name="date_end" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="submit" class="save_btn">Add School Year</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!--END OF ADD MODAL -->

        <!-- ======= EDIT MODAL ========= -->
        <div class="modal fade text-left" id="schoolyearEdit" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
            <div class="modal-dialog modal-lg" role="document">
                <form id="editSchoolyear">
                    
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="modal-header">
                            <h3 class="modal-title">{{ __('Edit School Year') }}</h3>
                        </div>
                        <div class="modal-body">
                            
                            <div id="success_message"></div>
                            <ul id="update_errList"></ul>
                            <div class="col-md-6">
                                <input hidden id="schoolyear_id" type="text" required autofocus>
                            </div>

                            <div class="form_item">
                                <label for="date_start" class="col-md-4 col-form-label text-md-end">{{ __('Start Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input id="date_start" type="date" class="wow form-control @error('date_start') is-invalid @enderror" name="date_start" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>

                            <div class="form_item">
                                <label for="date_end" class="col-md-4 col-form-label text-md-end">{{ __('End Date') }}</label>   
                                
                                <div class="col-md-6">
                                    <input id="date_end" type="date" class="wow form-control @error('date_end') is-invalid @enderror" name="date_end" placeholder="mm/dd/yyyy" required autofocus>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="col-md-6 col-sm-6 offset-md-5">
                                    <button type="button" class="btn btn-success update_schoolyear">Save Changes</button>
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
            $('#addSchoolyear').on('submit', function(e){
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "/admin/schoolyears",
                    data: $('#addSchoolyear').serialize(),
                    success: function(response) {
                        console.log(response)
                        // $('#schoolyearAdd').modal('hide')
                        alert("Successfully Created New School Year");
                        location.reload();
                    },
                    error: function(error){
                        console.log(error)
                        alert("Error");
                    }
                });
            });

            $(document).on('click', '.edit_schoolyear', function(e) {
                e.preventDefault();
                var sy_id = $(this).val();
                //console.log(sub_id);

                $('#schoolyearEdit').modal('show');
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "/admin/schoolyears/"+sy_id+"/edit",
                    success: function(response) {
                        console.log(response)
                        if(response.status == 404){
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-danger');
                            $('#success_message').text(response.message);
                        }else if(response.status == 200){
                            $('#date_start').val(response.schoolyear.date_start);
                            $('#date_end').val(response.schoolyear.date_end);

                            $('#schoolyear_id').val(sy_id);
                        }
                    }
                });
            });
            $(document).on('click', '.update_schoolyear', function(e) {
                e.preventDefault();
                var sy_id = $('#schoolyear_id').val();

                var data = {
                    'date_start' : $('#date_start').val(),
                    'date_end' : $('#date_end').val(),
                }
                console.log(data);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "PUT",
                    url: "/admin/schoolyears/"+sy_id,
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        //console.log(response);
                        if(response.status == 400){
                            $('#update_errList').html("");
                            $('#update_errList').addClass('alert alert-danger');
                            $.each(response.errors, function (key, err_values){
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
                //console.log(sub_id);
            });
        });
    </script>
@endsection