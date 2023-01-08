@extends('layouts.admin-app')

@section('content')
<div>
    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">

                    <!--?php
                        $sql = "SELECT* FROM `users` where `owner_type` = 'S'";

                        if ($result = mysqli_query($data, $sql)) {

                        $rowcount = mysqli_num_rows( $result );

                        echo $rowcount;
                        }
                    ?-->
                    5

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

                    <!--?php
                        $sql = "SELECT* FROM `users` where `owner_type` = 'T'";

                        if ($result = mysqli_query($data, $sql)) {

                        $rowcount = mysqli_num_rows( $result );

                        echo $rowcount;
                        }
                    ?-->
                    5

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

                    <!--?php
                        $sql = "SELECT* FROM `notices`";

                        if ($result = mysqli_query($data, $sql)) {

                        $rowcount = mysqli_num_rows( $result );

                        echo $rowcount;
                    }
                    ?-->
                    0

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

                    <!--?php
                        $sql = "SELECT* FROM `sections`";

                        if ($result = mysqli_query($data, $sql)) {

                        $rowcount = mysqli_num_rows( $result );

                        echo $rowcount;
                        }
                    ?-->
                    0

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
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Orders</h2>
                <a href="#" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Payment</td>
                        <td>Status</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        <td>Due</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>

                    <tr>
                        <td>Star Refrigerator</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status delivered">Delivered</span></td>
                    </tr>

                    <tr>
                        <td>Dell Laptop</td>
                        <td>$110</td>
                        <td>Due</td>
                        <td><span class="status pending">Pending</span></td>
                    </tr>

                    <tr>
                        <td>Apple Watch</td>
                        <td>$1200</td>
                        <td>Paid</td>
                        <td><span class="status return">Return</span></td>
                    </tr>

                    <tr>
                        <td>Addidas Shoes</td>
                        <td>$620</td>
                        <td>Due</td>
                        <td><span class="status inProgress">In Progress</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Curriculums</h2>
            </div>

            <table>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer01.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>David <br> <span>Italy</span></h4>
                    </td>
                </tr>

                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="/png/customer02.jpg" alt=""></div>
                    </td>
                    <td>
                        <h4>Amit <br> <span>India</span></h4>
                    </td>
                </tr>
            </table>
        </div>
    </div> <!-- End of Details -->
</div>
@endsection
