@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">{{ $student->lastName }}, {{ $student->givenName }} {{ $student->middleName }}</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/students/{{$student->stud_id}}/enrollment/create">New Enrollment Record</a>
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
                                <td><a href="/admin/students/{{$student->stud_id}}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection