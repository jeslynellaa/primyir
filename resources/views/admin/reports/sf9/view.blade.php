@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of SF 9 Records</h2>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">No.</th>
                            <th>Grade</th>
                            <th>Section</th>
                            <th>School Year</th>
                            <th>Options</th>
                        </tr>	
                    </thead>

                    <tbody>
                        @foreach($section_sy as $section)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $section->grade_level }}</td>
                                <td>{{ $section->name }}</td>
                                <td>{{ $section->year_start }} - {{ $section->year_end }}</td>
                                <td><a href="/admin/reports/sf9/{{$section->sy}}/{{$section->section}}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>

        <span>
            {{$section_sy->links()}}
        </span>
            
        <style>
            .w-5{
                display: none;
            }
        </style>
    </div>
@endsection