@extends('layouts.admin-app')

@section('content')

    <div class="grades-container" id="grades">
        <div class="sidePanel col-1">
            <div class="profile-image">
                <img src="/png/pfp.png" alt="profile picture">
            </div>
            <div class="profile-info">
                <div class="name">
                    <h3>Joshua Bandola</h3>
                    <span>2018-CS-100140</span>
                </div>
                <div class="info-flex">
                    <div class="college-info">
                        <span class="course">BS in Information Technology</span><br>
                        <span class="college">College of Science</span>
                    </div>
                    <div class="year-div">
                        <span class="year">4th</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="gradePanel col-2">
            <h3>My Grades</h3>
            <hr>

            <!-- 1st sem  -->
            <div class="semesterOne">
                <div class="titleOne">
                    <div class="title-div">
                        <!-- <h4>1st Semester</h4> -->
                        <input type="radio" id="semester1" name="sem1">
                        <h4 class="sem1">1st Semester</h4>
                        <span class="year">AY. 2022-2023</span>
                    </div>
                </div>
                <hr>
                <div class="subjects">
                    <div>
                        <p class="subjectCode">
                            IT 123
                        </p>
                        <p class="subjectTitle">
                            System Administration and Maintenance
                        </p>
                    </div>
                    <div class="subjectGrade">
                        <h3>1.7</h3>
                    </div>
                </div>
            </div>


        </div>
    </div>

@endsection