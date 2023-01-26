@extends('layouts.admin-app')

@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Students</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>#</td>
                        <td>LRN</td>
                        <td>Name</td>
                        <td>Grade</td>
                        <td>Section</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($student_users as $student )
                        <tr>
                            <td>{{ $loop->index + 1}}</td>
                            <td>{{ $student->LRN_no }}</td>
                            <td>{{ $student->lastName }}, {{ $student->givenName }} {{ $student->middleName }}</td>
                            <td>{{ $student->grade_level }}</td>
                            <td>{{ $student->name}}</td>
                            <td>{{ $student->accountStatus}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Manage Students</h2>
            </div>
            <div class="container">
                <a href="{{ route('students.create') }}">
                    <span class="title"><b>Add New Student</b></span>
                </a>
            </div>
        </div>
    </div>
@endsection