@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">Grade {{$section->grade_level}}-{{$section->name}} ({{$schoolyear->year_start}}-{{$schoolyear->year_end}})</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/reports/sf5/{{$schoolyear->id}}/{{$section->id}}/generate">Generate</a>
                    <!-- <a class="list_function" href="/admin/reports/sf1/create">Add New Record</a> -->
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width=10% align=left">No.</th>
                            <th>LRN</th>
                            <th>Student</th>
                            <th>Gen. Average</th>
                            <th>Action Taken</th>
                            <th>Failed Learning Areas</th>
                            <th>Options</th>
                        </tr>	
                    </thead>

                    <tbody>
                        @foreach($studentSY as $student)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $student->Student->LRN_no }}</td>
                                <td>{{ $student->Student->User->lastName}}, {{ $student->Student->User->givenName}} {{ $student->Student->User->middleName}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="/admin/reports/sf5/create-update/{{$student->id}}">Create or Edit </a>
                                </td>
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