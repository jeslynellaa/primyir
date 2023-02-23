@extends('layouts.faculty-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top">
                <div><h2 style="align:left">Student Grades for {{$subject_class->subject->name}}</h2></div>
                
                <div class="functions_wrap">
                    <a class="list_function" href="/faculty/grades/{{$subject_class->id}}/edit">Input Grades</a>
                </div>
            </div>
            <div><h3>Grade {{$subject_class->section->grade_level}} - {{$subject_class->section->name}}</h3></div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> No.</th>
                            <th>Student</th>
                            <th>
                                1st 
                                <a href="/faculty/grades/{{$subject_class->id}}/1/edit">
                                    <i class="fa-solid fa-pen icon-nav"></i>
                                </a>
                            </th>
                            <th>
                                2nd
                                <a href="/faculty/grades/{{$subject_class->id}}/2/edit">
                                    <i class="fa-solid fa-pen icon-nav"></i>
                                </a>
                            </th>
                            <th>
                                3rd
                                <a href="/faculty/grades/{{$subject_class->id}}/3/edit">
                                    <i class="fa-solid fa-pen icon-nav"></i>
                                </a>
                            </th>
                            <th>
                                4th
                                <a href="/faculty/grades/{{$subject_class->id}}/4/edit">
                                    <i class="fa-solid fa-pen icon-nav"></i>
                                </a>
                            </th>
                            <th>Gen. Average</th>
                            <th>Remarks</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($student_grades as $student )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $student->lastname }}, {{ $student->givenname }} {{ $student->middlename }}</td>
                                <td>{{ $student->first_grading ?? "-"}}</td>
                                <td>{{ $student->second_grading ?? "-"}}</td>
                                <td>{{ $student->third_grading ?? "-"}}</td>
                                <td>{{ $student->fourth_grading ?? "-"}}</td>
                                <td>{{ $student->gen_ave ?? "-"}}</td>
                                <td>{{ $student->remarks ?? "-" }}</td>
                                <td><a href="#">View</a></td>
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