@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Subjects</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/subjects/create">Add New Subject</a>
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
    </div>

    <!-- <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Subjects</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>Section Name</td>
                        <td>Grade Level</td>
                        <td>Adviser</td>
                    </tr>
                </thead>

                <tbody>
                </tbody>
            </table>
        </div>

        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Manage Subjects</h2>
            </div>
            <div class="container">
                <a href="{{ route('sections.create') }}">
                    <span class="title"><b>Add New Subject</b></span>
                </a>
            </div>
        </div>
    </div> -->
@endsection