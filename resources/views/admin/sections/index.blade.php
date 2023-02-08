@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Sections</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/sections/create">Create New Section</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Section Name</th>
                            <th>Grade Level</th>
                            <th>Adviser</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($section_teachers as $section )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $section->name }}</td>
                            <td>{{ $section->grade_level }}</td>
                            <td>{{ $section->givenName }} {{ $section->lastName }}</td>
                            <td><a href="">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection