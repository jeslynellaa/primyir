@extends('layouts.admin-app')

@section('content')
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Faculty</h2>
            </div>

            <table>
                <thead>
                    <tr>
                        <td></td>
                        <td>First Name</td>
                        <td>Middle Name</td>
                        <td>Last Name</td>
                        <td>Department</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($teacher_users as $teacher )
                        <tr>
                            <td></td>
                            <td>{{ $teacher->givenName }}</td>
                            <td>{{ $teacher->middleName }}</td>
                            <td>{{ $teacher->lastName }}</td>
                            <td>{{ $teacher->department}}</td>
                            <td>{{ $teacher->accountStatus}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Manage Faculty</h2>
            </div>
            <div class="container">
                <a href="{{ route('faculty.create') }}">
                    <span class="title"><b>Add New Teacher</b></span>
                </a>
            </div>
        </div>
    </div>
@endsection