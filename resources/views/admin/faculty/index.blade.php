@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Faculty</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/teachers/create">Add New Teacher</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Fullname</th>
                            <th>Department</th>
                            <th>Contact #</th>
                            <th>Email</th>
                            <th>Sex</th>
                            <th>Birthdate</th>
                            <th>Status</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($teacher_users as $teacher )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $teacher->lastName }}, {{ $teacher->givenName }} {{ $teacher->middleName }}</td>
                                <td>{{ $teacher->department}}</td>
                                <td>{{ $teacher->contactNum}}</td>
                                <td>{{ $teacher->email}}</td>
                                <td>{{ $teacher->sex}}</td>
                                <td>{{ $teacher->birthdate}}</td>
                                <td>{{ $teacher->accountStatus}}</td>
                                <td><a href="">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
            <span>
                {{$teacher_users->links()}}
            </span>
        <style>
            .w-5{
                display: none;
            }
        </style>
    </div>
@endsection