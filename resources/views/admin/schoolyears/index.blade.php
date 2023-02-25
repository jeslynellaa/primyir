@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <!-- ERROR NOTIFS -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Schoolyears</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/schoolyears/create">Add New Schoolyear</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Schoolyear</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($schoolyears as $schoolyear)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $schoolyear->year_start }} - {{ $schoolyear->year_end }}</td>
                                <td>{{ $schoolyear->date_start }}</td>
                                <td>{{ $schoolyear->date_end }}</td>
                                <td><a href="/admin/subjects/{{$schoolyear->id}}">Edit</a>
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