@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">{{ $teacher->user->lastName }}, {{ $teacher->user->givenName }} {{ $teacher->user->middleName }}</h2>

                <div class="functions_wrap">
                    <a class="list_function" style="margin:5px;" href="/admin/faculty">Back to Faculty</a>
                    <a class="list_function" style="margin:5px;" href="/admin/faculty/{{$teacher->id}}/edit">Edit Teacher Info</a>
                </div>
            </div>
            <div>
                <h3>Teacher Info</h3>
                <div style="padding-left:15px;">
                    Birthday: {{$teacher->user->birthdate}}<br>
                    Gender: {{$teacher->user->sex}}<br>
                    Contact Number: {{$teacher->user->contactNum}}<br>
                    Email: {{$teacher->user->email}}<br>
                    Username: {{$teacher->user->username}}<br>
                    Department: {{$teacher->department}}<br>
                    Address: {{$address->street}} {{$address->brgy}} {{$address->province}} {{$address->region}}
                </div>
            </div>
            <div>
                <h3>Teacher Loads and Assignments</h3>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Grade & Section</th>
                            <th>Subject</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @if ($teacher->advisory == 1)
                            <tr>
                                <td>></td>
                                <td>{{ $teacher->Section->grade_level }} - {{ $teacher->Section->name}}</td>
                                <td>Advisory</td>
                            </tr>
                        @endif
                        @foreach ($teacher_subjects as $subclass )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $subclass->grade }} - {{ $subclass->section}}</td>
                                <td>{{ $subclass->subject }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection