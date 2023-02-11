@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of events</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/events/create">Create New Event</a>
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
            <span>
                {{$events->links()}}
            </span>
            <style>
                .w-5{
                display: none;
            }
            </style>
    </div>

    <div class="lists_wrap">

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Articles</h2>

                <div class="functions_wrap">
                    <a class="list_function" href="/admin/articles/create">Create New Article</a>
                </div>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th style="width=10% align=left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');"> Title</th>
                            <th> Content</th>
                            <th> Author</th>
                            <th> Category</th>
                            <th> Date Posted</th>
                            <th> Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $article->title }}</td>
                                <td>{{ $article->content }}</td>
                                <td>{{ $article->author }}</td>
                                <td>{{ $article->category }}</td>
                                <td>{{ $article->date_posted }}</td>
                                <td><a href="">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
            <span>
                {{$articles->links()}}
            </span>
            <style>
                .w-5{
                display: none;
            }
            </style>
    </div>
@endsection