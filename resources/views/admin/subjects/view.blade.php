@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Classes for {{$subject_model->name}}</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/subjects">Back to Subjects</a>
                    <a class="list_function" href="/admin/subjects/class/{{$subject_model->id}}/create">Create New Class</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">No.</th>
                            <th>Grade and Section</th>
                            <th>Teacher</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($subject_records as $subject )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>Grade {{ $subject->grade }} - {{ $subject->section }}</td>
                            <td>{{ $subject->lastName }}, {{ $subject->givenName }} {{ $subject->middleName }}</td>
                            <td><a href="">View</a></td>
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