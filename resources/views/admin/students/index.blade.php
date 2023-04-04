@extends('layouts.admin-app')

@section('content')
    <div class="lists_wrap">
        <!-- <div class="search"> -->
            <!-- <label> -->
                <!-- <input type="text" id="search-input" placeholder="Search here" class="form-control"> --> 
                <!-- <button class="btn btn-primary" id="search-button"> -->
                    <!-- <ion-icon name="search-outline"></ion-icon> -->
                <!-- </button>      -->
                <!-- </label> -->
        <!-- </div> -->

        <div class="well">
            <div class="well_top" style="align-items:center">
                <h2 style="align:left">List of Current Students</h2>

                <div class="functions_wrap">
                    @if(Route::is('student_search') || Route::is('student_filter'))
                        <a class="list_function" href="/admin/students">Back to full list</a>
                    @endif
                    <a class="list_function" href="/admin/students/create">Add New Student</a>
                </div>
            </div>
        
            <div style="display:flex; align-items:baseline;">
                <form action="{{ route ('student_search')}}" method="GET">
                    <div class="search form_item" style="display:flex">
                        <input type="text" id="search-input" name="query" placeholder="Search students (by name or LRN #)" class="form-control wow">
                        <button type="submit" class="btn btn-primary" id="search-button">
                            <ion-icon name="search-outline"></ion-icon>
                        </button>
                    </div>
                </form>
                
                <h3>Filter: </h3>
                <form action="{{ route ('student_filter')}}" method="GET">
                    <div class="form_wrap fullname">
                        <div class="form_item">
                            <select name="grade_lvl" class="form-control wow" id="grade_lvl">
                                <option selected disabled> Grade</option>
                                <option value=7> Grade 7 </option>
                                <option value=8> Grade 8 </option>
                                <option value=9> Grade 9 </option>
                                <option value=10> Grade 10 </option>
                            </select>
                        </div>

                        <div class="form_item">
                            <select name="section" class="form-control wow" id="section">
                                <option selected disabled>  Section</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" id="filter-button">
                            <ion-icon name="filter-outline"></ion-icon>
                        </button>
                    </div>
                </form>
            </div>

            <form>  					
                <table id="example" class="table table-striped" cellspacing="0">
                
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th> LRN#.</th>
                            <th>Fullname</th>
                            <th>Sex</th>
                            <th>Birth Date</th>
                            <th>Current Grade & Section</th>
                            <th>Options</th>
                        </tr>	
                    </thead>
                    <tbody>
                        @foreach ($student_users as $student )
                            <tr>
                                <td>{{ $loop->index + 1}}</td>
                                <td>{{ $student->LRN_no }}</td>
                                <td>{{ $student->lastName }}, {{ $student->givenName }} {{ $student->middleName }}</td>
                                <td>{{ $student->sex }}</td>
                                <td>{{ $student->birthdate }}</td>
                                <td>Gr. {{ $student->grade_level}} - {{ $student->name}}</td>
                                <td><a href="/admin/students/{{$student->stud_id}}">View</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
            <span>
                {{$student_users->links()}}
            </span>
            <style>
                .w-5{
                    display: none;
                }
            </style>
    </div>
    <!-- =========== Scripts =========  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#grade_lvl').on('change', function () {
                var gradeLevel = this.value;
                $('#section').html('');
                $.ajax({
                    url: '{{ route('getSections') }}?grade_lvl='+gradeLevel,
                    type: 'get',
                    success: function (res) {
                        $('#section').html('<option value="" selected disabled> Select Section </option>');
                        $.each(res, function (key, value) {
                            $('#section').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
    <!-- <script> 
        // document.getElementById('search-button').onclick = function (){
            // var query = document.getElementById('search-input').value;
            // // window.location.href = "{{ route ('student_search') }}?query=" + query;
        // };
    // </script>-->
@endsection