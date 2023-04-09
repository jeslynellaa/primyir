@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Faculty</h2>

                <div class="functions_wrap">
                    @if(Route::is('faculty_search') || Route::is('faculty_filter'))
                        <a class="list_function" href="/admin/faculty">Back to full list</a>
                    @endif
                    <a class="list_function" href="/admin/faculty/create">Add New Teacher</a>
                </div>
            </div>
        
            <div style="display:flex; align-items:baseline;">
                <form action="{{ route ('faculty_search')}}" method="GET">
                    <div class="search form_item" style="display:flex">
                        <input type="text" id="search-input" name="query" placeholder="Search by name" class="form-control"> 
                        <button type="submit" class="btn btn-primary" id="search-button">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </div>
                </form>
                
                <h3>Filter: </h3>
                <form action="{{ route ('faculty_filter')}}" method="GET"style="display:flex;">
                    <div class="form_item">
                        <select name="department" class="form-control wow" id="department">
                            <option selected disabled>Select Department</option>
                            <option value="Science"> Science </option>
                            <option value="Math"> Math </option>
                            <option value="English"> English </option>
                            <option value="Filipino"> Filipino </option>
                            <option value="MAPeH"> MAPeH </option>
                            <option value="TLE"> TLE </option>
                            <option value="ICT"> ICT </option>
                            <option value="ESP"> ESP </option>
                        </select>
                    </div>
                    <div class="form_item">
                        <select name="sex" class="form-control wow" id="sex">
                            <option selected disabled> Select Sex</option>
                            <option value='M'> Male </option>
                            <option value='F'> Female </option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" id="filter-button">
                        <ion-icon name="filter-outline"></ion-icon>
                    </button>
                </form>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Department</th>
                            <th>Contact #</th>
                            <th>Sex</th>
                            <th>Birthdate</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($teacher_users as $teacher )
                            <tr>
                                @if(Route::is('admin.faculty.index'))
                                    <td>{{(($teacher_users->currentpage()-1)*$teacher_users->perpage()+1)+$loop->index}}</td>
                                @else
                                    <td>{{ $loop->index + 1}}</td>
                                @endif
                                <td>{{ $teacher->lastName }}, {{ $teacher->givenName }} {{ $teacher->middleName }}</td>
                                <td>{{ $teacher->department}}</td>
                                <td>{{ $teacher->contactNum}}</td>
                                <td>{{ $teacher->sex}}</td>
                                <td>{{ $teacher->birthdate}}</td>
                                <td><a href="/admin/faculty/{{$teacher->id}}">Classes</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        @if(Route::is('admin.faculty.index'))
            <span>
                {{$teacher_users->links()}}
            </span>
            <style>
                .w-5{
                    display: none;
                }
            </style>
        @endif
    </div>
@endsection