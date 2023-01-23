@extends('layouts.admin-app')

@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Sections</h2>
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
                    @foreach ($section_teachers as $section )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $section->name }}</td>
                            <td>{{ $section->grade_level }}</td>
                            <td>{{ $section->givenName }} {{ $section->lastName }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Manage Sections</h2>
            </div>
            <div class="container">
                <a href="{{ route('sections.create') }}">
                    <span class="title"><b>Add New Section</b></span>
                </a>
            </div>
        </div>
    </div>
@endsection