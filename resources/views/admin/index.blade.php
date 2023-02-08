@extends('layouts.admin-app')

@section('content')
<div>
    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">
                    {{$student_count}}
                </div>
                <div class="cardName">Student</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-graduation-cap icon-dash"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                    {{$faculty_count}}
                </div>
                <div class="cardName">Faculty</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-user icon-dash"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                    {{$event_count}}
                </div>
                <div class="cardName">Event</div>
            </div>

            <div class="iconBx">
                <i class="fa-regular fa-calendar-days icon-dash"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                    {{$class_count}}
                </div>
                <div class="cardName">Class</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-book icon-dash"></i>
            </div>
        </div>
    </div><!--End of Cardbox -->

    <!-- ================ Order Details List ================= -->
    <div class="details">


        <div class="SchoolYear">
            <div class="cardHeader">
                <h2>School Year</h2>
                <a href="#" class="btn">View All</a>
            </div>
        </div>

    
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Grade Level</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <div class="container-fluid w-75"> 
                <div class="row">
                    <div class="col-md-12 my-5 d-flex justify-content-center">
                    </div>
                    <div class="col-md-12"> 
                        <canvas id="graph"></canvas>
                    </div>
                </div>
            </div>
            
            <div class="btnn">
                <p>Select</p>
                <input id="button1" type="button" value="Line">
                <input id="button2" type="button" value="Bar">
                <input id="button3" type="button" value="Doughnut">
            </div>

        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Curriculums</h2>
            </div>

            <div id="chart-container">
                <canvas id="graphCanvas"></canvas>
            </div>

            <div class="btnn">
                <p>Select</p>
                <input id="button4" type="button" value="Line">
                <input id="button5" type="button" value="Bar">
                <input id="button6" type="button" value="Doughnut">
            </div>
        </div>
    </div>
</div>
@endsection
