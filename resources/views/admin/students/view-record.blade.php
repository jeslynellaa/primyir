@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">Enrollment Record for {{$schoolyear->schoolyear->year_start}}-{{$schoolyear->schoolyear->year_end}}</h2>

                <div class="functions_wrap">
                    <a class="list_function" style="margin:5px;" href="/admin/students/{{$student_model->id}}">Back to Student Record</a>
                    <a class="list_function" style="margin:5px;" href="/admin/students/{{$student_model->id}}/view/{{$schoolyear->id}}/add">Enroll Subjects</a>
                </div>
            </div>
            
            <div>
                <h3>Enrolled Subjects and Grades</h3>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> No.</th>
                            <th>Subject</th>
                            <th>1st</th>
                            <th>2nd</th>
                            <th>3rd</th>
                            <th>4th</th>
                            <th>Gen. Average</th>
                            <th>Remarks</th>
                        </tr>	
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection