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
                    <div class="cardName">
                        @if ($student_count<=1)
                            Student
                        @else
                            Students
                        @endif
                    </div>
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
                    <div class="cardName">
                        @if ($event_count<=1)
                            Upcoming Event
                        @else
                            Upcoming Events
                        @endif
                    </div>
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
                    <div class="cardName">
                        @if ($class_count<=1)
                            Section
                        @else
                            Sections
                        @endif
                    </div>
                </div>

                <div class="iconBx">
                    <i class="fa-solid fa-book icon-dash"></i>
                </div>
            </div>
        </div><!--End of Cardbox -->

        <!-- ================ Order Details List ================= -->
        <div class="details">
            <div class="recentCustomers">
                <div class="cardHeader">
                    <h3>Students <br>Per School Year</h3>
                    <div class="btnn">
                        <button id="button7"><i class="fa-solid fa-chart-line hayst"></i></button>
                        <button id="button8"><i class="fa-solid fa-chart-simple hayst"></i></button>
                        <button id="button9"><i class="fa-solid fa-chart-pie hayst"></i></button>
                    </div>
                </div>

                <div id="chart-container" style= "position: relative; height:20vh; width:20vw; margin-left: auto; margin-right: auto;">
                    <canvas id="graph1" style= "width:20vw;"></canvas>
                </div>
            </div>


            <div class="recentOrders">
                <div class="cardHeader">
                    <h3>Students <br>Per Grade Level</h3>
                    <div class="btnn">
                        <button id="button1"><i class="fa-solid fa-chart-line hayst"></i></button>
                        <button id="button2"><i class="fa-solid fa-chart-simple hayst"></i></button>
                        <button id="button3"><i class="fa-solid fa-chart-pie hayst"></i></button>
                    </div>
                </div>

                <div class="container-fluid"> 
                    <div class="row">
                        <div class="col">
                        </div>
                        <div class="coll" style= "position: relative; height:20vh; width:20vw; margin-left: auto; margin-right: auto;"> 
                            <canvas id="graph" style= "width:20vw;"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="recentCustomers">
                <div class="cardHeader">
                    <h3>Students <br>Per Curriculum</h3>
                    <div class="btnn">
                        <button id="button4"><i class="fa-solid fa-chart-line hayst"></i></button>
                        <button id="button5"><i class="fa-solid fa-chart-simple hayst"></i></button>
                        <button id="button6"><i class="fa-solid fa-chart-pie hayst"></i></button>
                    </div>
                </div>

                <div id="chart-container" style= "position: relative; height:20vh; width:20vw; margin-left: auto; margin-right: auto;">
                    <canvas id="graphCanvas" style= "width:20vw;"></canvas>
                </div>
            </div>
        </div> <!--End of details-->
        
        <div class="details2">
            <div class="calendar">

                <div class="cardHeader">
                    <h2>Calendar</h2>
                </div>

                <iframe src="https://embed.styledcalendar.com/#rWS5eOO6rwZCPuYqakFU" title="Styled Calendar" class="styled-calendar-container" style="width: 100%; border: none;" data-cy="calendar-embed-iframe"></iframe>
                <script async type="module" src="https://embed.styledcalendar.com/assets/parent-window.js"></script>

            </div>
            <div class="events">
                
                <div class="cardHeader">
                    <h2>Events</h2>
                </div>
                <div class="aaa">
                    <div class="side-post">
                        @foreach($s as $event)
                            <div class="sidecol">
                                <div class="sideimg-con">
                                    <img src="png/{{$event->img}}" class="imahe">
                                </div>
                                <div class="sideline">
                                    <h3 class="titulo">{{$event->title}}</h3>
                                    <div class="sidecontent">
                                        <i class="fa-solid fa-calendar-days acce"></i>
                                        <h6>&nbsp;{{$event->date_posted}}</h6>
                                        <h6>&nbsp;&nbsp;&nbsp;&#x2022;&nbsp;&nbsp;&nbsp;</h6>
                                        <h6>{{$event->category}}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div> <!--End of details2-->
    </div><!--End of div-->

    <!-- =========== Scripts =========  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/loader.js"></script>

    <script type="text/javascript">

        var curricula =  {{ Js::from($labels1) }};
        var curriculaUsers =  {{ Js::from($data1) }};

        const button4 = document.getElementById("button4");
        const button5 = document.getElementById("button5");
        const button6 = document.getElementById("button6");

        $(document).ready(function () {
            showGraph1();
        });

        function showGraph1()
        {
            {
                var chartdata = {
                    labels: curricula,
                    datasets: [
                        {
                            label: 'Total',
                            backgroundColor: ['#88D969', '#46CB1B', '#06A10B', '#1D800E'],
                            fill: true,
                            hoverBackgroundColor: '#FCA510',
                            data: curriculaUsers,
                            barPercentage: 1.0,
                            categoryPercentage: 1.0
                        }
                    ],
                };
                

                var graphTarget = $("#graphCanvas");

                var pieGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                        maintainAspectRatio: false,
                        plugins:{
                            legend:{
                                position: 'right'
                            }
                        },

                        scales: {
                            x: {
                                display: false,
                            },
                            y: {
                                beginAtZero: true,
                                display: false
                            }
                            },

                        responsive: true
                    }
                });

                button4.addEventListener("click", () => {
                    console.log(pieGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    pieGraph.config.type = pieGraph.config.type === "line" ? "line" : "line";
                    pieGraph.update("none");
                });

                button5.addEventListener("click", () => {
                    console.log(pieGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    pieGraph.config.type = pieGraph.config.type === "bar" ? "bar" : "bar";
                    pieGraph.update("none");
                });

                button6.addEventListener("click", () => {
                    console.log(pieGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    pieGraph.config.type = pieGraph.config.type === "doughnut" ? "doughnut" : "doughnut";
                    pieGraph.update("none");
                });
            }
        }
    </script>

    <script type="text/javascript">

        var grade =  {{ Js::from($labels2) }};
        var gradeUsers =  {{ Js::from($data2) }};

        const button1 = document.getElementById("button1");
        const button2 = document.getElementById("button2");
        const button3 = document.getElementById("button3");

        $(document).ready(function () {
            showGraph();
        });

        const showGraph = () => {
            {
                var chartdata1 = {
                    labels: grade,
                    datasets: [
                        {
                            label: 'Total',
                            backgroundColor: ['#88D969', '#46CB1B', '#06A10B', '#1D800E'],
                            hoverBackgroundColor: '#FCA510',
                            fill: true,
                            data: gradeUsers,
                            barPercentage: 1.0,
                            categoryPercentage: 1.0
                        }
                    ],
                };

                var graphTarget = $("#graph");

                var barGraph = new Chart(graphTarget, {
                    type: 'doughnut',
                    data: chartdata1,
                    options: {
                        maintainAspectRatio: false,
                        plugins:{
                            legend:{
                                position: 'right'
                            }
                        },

                        scales: {
                            x: {
                                display: false,
                            },
                            y: {
                                beginAtZero: true,
                                display: false
                            }
                            },

                        responsive: true
                    }
                });

                button1.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "line" ? "line" : "line";
                    barGraph.update("none");
                });

                button2.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "bar" ? "bar" : "bar";
                    barGraph.update("none");
                });

                button3.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "doughnut" ? "doughnut" : "doughnut";
                    barGraph.update("none");
                });
            }
        };
    </script>

    <script type="text/javascript">

        var year =  {{ Js::from($labels3) }};
        var studentCount =  {{ Js::from($data3) }};

        const button7 = document.getElementById("button7");
        const button8 = document.getElementById("button8");
        const button9 = document.getElementById("button9");

        $(document).ready(function () {
            showGraph2();
        });

        const showGraph2 = () => {
            {
                var chartdata2 = {
                    labels: year,
                    datasets: [
                        {
                            label: 'Total',
                            backgroundColor: ['#88D969', '#46CB1B', '#06A10B', '#1D800E'],
                            hoverBackgroundColor: '#FCA510',
                            fill: true,
                            data: studentCount,
                            barPercentage: 1.0,
                            categoryPercentage: 1.0
                        }
                    ],
                };

                var graphTarget = $("#graph1");

                var barGraph = new Chart(graphTarget, {
                    type: 'doughnut',
                    data: chartdata2,
                    options: {
                        maintainAspectRatio: false,
                        plugins:{
                            legend:{
                                position: 'right'
                            }
                        },

                        scales: {
                            x: {
                                display: false,
                            },
                            y: {
                                beginAtZero: true,
                                display: false
                            }
                            },

                        responsive: true
                    }
                });

                button7.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "line" ? "line" : "line";
                    barGraph.update("none");
                });

                button8.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "bar" ? "bar" : "bar";
                    barGraph.update("none");
                });

                button9.addEventListener("click", () => {
                    console.log(barGraph.config.type);
                    console.log("change chart type!");
                    // change chart type
                    barGraph.config.type = barGraph.config.type === "doughnut" ? "doughnut" : "doughnut";
                    barGraph.update("none");
                });
            }
        };
    </script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
@endsection
