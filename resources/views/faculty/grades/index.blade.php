@extends('layouts.faculty-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Assigned Subject Classes</h2>

                <div class="functions_wrap">
                    <!-- <a class="list_function" href="/admin/sections/create">Create New Section</a> -->
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Subject Name</th>
                            <th>Grade & Section</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($subject_classes as $subclass )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $subclass->subject }}</td>
                            <td>Grade {{ $subclass->grade }} - {{ $subclass->section }}</td>
                            <td><a href="/faculty/grades/{{ $subclass->subclass_id}}">View</a></td>
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