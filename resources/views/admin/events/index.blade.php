@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of events</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/events/create">Create New Event</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Title</th>
                            <th> Content</th>
                            <th> Event Date</th>
                            <th> Date Posted</th>
                            <th> Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->content }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>{{ $event->date_posted }}</td>
                            <td><a href="">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </form>
        </div>
    </div>
@endsection