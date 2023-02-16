@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of SF 1 Records</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/reports/sf1/create">Add New Record</a>
                </div>
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