@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of SF 6 Records</h2>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>School Year</th>
                            <th>Options</th>
                        </tr>	
                    </thead>

                    <tbody>
                        @foreach($schoolyears as $sy)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $sy->year_start }} - {{ $sy->year_end }}</td>
                                <td><a href="/admin/reports/sf6/{{$sy->id}}/generate">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
            
        <style>
            .w-5{
                display: none;
            }
        </style>
    </div>
@endsection