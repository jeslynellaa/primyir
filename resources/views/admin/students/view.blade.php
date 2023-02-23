@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
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
                                <td><a href="/admin/students/{{$student->stud_id}}/view/{{$student->syid}}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection