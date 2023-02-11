@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
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
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Subject Name.</th>
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
                                <td><a href="">View</a></td>
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
@endsection