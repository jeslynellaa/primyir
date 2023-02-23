@extends('layouts.admin-app')

@section('content')
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
                                <td><a href="/admin/subjects/{{$subject->id}}">View Classes</a> || <a href="#" data-toggle="modal" data-target="#ModalEdit{{$subject->id}}">Edit</a></td>

                                <!-- ======= EDIT MODAL FOR SUBJECTS ========= -->
                                <div class="modal fade text-left" id="ModalEdit{{$subject->id}}" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="false">
                                    <div class="modal-dialog modal-lg" role="document">
                                    <form action="/admin/subjects/{{$subject->id}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            @method('PATCH')
                                            <div class="modal-content">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="modal-header">
                                                    <h3 class="modal-title">{{ __('Edit Subject') }}</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-6">
                                                        <input hidden id="subject_id" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" value="{{ $subject->id}}" required autofocus>
                                                    </div>
                                                    <div class="form_item">
                                                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Subject Name') }}</label>
                                                        <div class="col-md-6">
                                                            <input id="name" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" value="{{ $subject->name}}" required autocomplete="name" placeholder="Enter Subject Name" autofocus>
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
                                                            <option value=7 @if($subject->grade_level ==7) echo selected @endif> Grade 7 </option>
                                                            <option value=8 @if($subject->grade_level ==8) echo selected @endif> Grade 8 </option>
                                                            <option value=9 @if($subject->grade_level ==9) echo selected @endif> Grade 9 </option>
                                                            <option value=10 @if($subject->grade_level ==10) echo selected @endif> Grade 10 </option>
                                                        </select>
                                                    </div>
                                                    <div class="form_item">
                                                        <label for="curriculum" class="col-md-4 col-form-label text-md-end">Curriculum</label>
                                                        <select name="curriculum" class="form-control wow" id="curriculum">
                                                            <option selected disabled>-- Select Curriculum --</option>
                                                            @foreach ($curricula as $curriculum)
                                                                <option value="{{ $curriculum->id }}" {{$subject->curriculum_id == $curriculum->id  ? 'selected' : ''}}> {{ $curriculum->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form_item">
                                                        <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                                                        <select name="schoolyear" class="form-control wow" id="schoolyear">
                                                            <option selected disabled>-- Select School Year --</option>
                                                            @foreach ($schoolyears as $schoolyear)
                                                                <option value="{{ $schoolyear->id }}" {{$subject->schoolyear_id == $schoolyear->id  ? 'selected' : ''}}> {{ $schoolyear->year_start }}-{{ $schoolyear->year_end }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label for="elective" class="col-md-4 col-form-label text-md-end">Check if Elective Subject: </label>
                                                            <input {{$subject->elective == 1 ? 'checked' : ''}} id="yes" type="checkbox" class="wow form-control @error('elective') is-invalid @enderror" name="elective" value="1">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="col-md-6 col-sm-6 offset-md-5">
                                                            <button class="btn btn-danger" type="reset">Reset</button>
                                                            <button type="submit" class="btn btn-success">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
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
                    <a class="list_function" href="/admin/subjects/create">Add New Curriculum</a>
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
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($curricula as $curriculum)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $curriculum->name }}</td>
                                <td>{{ $curriculum->acronym }}</td>
                                <td>{{ $curriculum->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
            <span>
            </span>
            <style>
                .w-5{
                    display: none;
                }
            </style>
    </div>
    
@endsection