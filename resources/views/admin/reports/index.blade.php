@extends('layouts.admin-app')

@section('content')
<div>
    <!-- ======================= Cards 
================== -->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">
                </div>
                <div class="cardName">School Form 1
                    <h4>School Register</h4>
                </div>
                <div class="functions_wrap">
    <a href="/admin/reports/sf1" data-toggle="modal" data-target="">View</a>
</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-file-text icon-dash"></i>
            </div>
            
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                </div>
                <div class="cardName">Faculty</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-user 
icon-dash"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                </div>
                <div class="cardName">Event</div>
            </div>

            <div class="iconBx">
                <i class="fa-regular fa-calendar-days 
icon-dash"></i>
            </div>
        </div>

        <div class="card">
            <div>
                <div class="numbers">
                </div>
                <div class="cardName">Class</div>
            </div>

            <div class="iconBx">
                <i class="fa-solid fa-book 
icon-dash"></i>
            </div>
        </div>
    </div><!--End of Cardbox -->
@endsection