@extends('layouts.faculty-app')

@section('content')
    @if(isset($advisory))
        <div class="well" style="margin:1rem;">
            <h3>
                Forms for Assigned Advisory Class (Grade {{$advisory->grade_level}} - {{$advisory->name}})
            </h3>
            <div style="float:right">
                
            </div>
        </div>
        <div class="cardBox">
            <a class="card" href="/faculty/reports/sf1/{{$advisory->schoolyear_id}}/{{$advisory->id}}">
                <div>
                    <div class="numbers">
                        SF 1
                    </div>
                    <div class="cardName">Student Registers</div>
                </div>
                <div class="iconBx">
                        <i class="fa-solid fa-file-text icon-dash"></i>
                </div>
            </a>

            <a class="card" href="/faculty/reports/sf5">
                <div>
                    <div class="numbers">
                        SF 5
                    </div>
                    <div class="cardName">Report on Promotions</div>
                </div>
                <div class="iconBx">
                        <i class="fa-solid fa-chart-simple icon-dash"></i>
                </div>
            </a>

            <a class="card" href="/faculty/reports/sf6">
                <div>
                    <div class="numbers">
                        SF 6
                    </div>
                    <div class="cardName">Summary Report on Promotion</div>
                </div>
                <div class="iconBx">
                        <i class="fa-solid fa-folder icon-dash"></i>
                </div>
            </a>

            <a class="card" href="/faculty/reports/sf8">
                <div>
                    <div class="numbers">
                        SF 8
                    </div>
                    <div class="cardName">Student Health Form</div>
                </div>
                <div class="iconBx">
                        <i class="fa-solid fa-notes-medical icon-dash"></i>
                </div>
            </a>

            <a class="card" href="#">
                <div>
                    <div class="numbers">
                        SF 9
                    </div>
                    <div class="cardName">Learner Progress Report Card</div>
                </div>
                <div class="iconBx">
                        <i class="fa-solid fa-file-text icon-dash"></i>
                </div>
            </a>
        </div><!--End of Cardbox -->
    @else
        <div style="text-align:center; padding-top:5rem;">
            You do not have an advisory class. Nothing to see here!
        </div>
    @endif
@endsection
