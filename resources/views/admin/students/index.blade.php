@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Students</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/students/create">Add New Student</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> LRN#.</th>
                            <th>Fullname</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>Sex</th>
                            <th>Birth Date</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($student_users as $student )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $student->LRN_no }}</td>
                                <td>{{ $student->lastName }}, {{ $student->givenName }} {{ $student->middleName }}</td>
                                <td>{{ $student->grade_level }}</td>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->sex }}</td>
                                <td>{{ $student->birthdate }}</td>
                                <td>{{ $student->accountStatus}}</td>
                                <td><a href="/admin/students/{{$student->stud_id}}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection