@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>School Form 5</h2>
                
                <!-- ERROR NOTIFS -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif
            
                <form method="POST" action="/admin/reports/sf5/{{$studentHealth->id}}">
                    @csrf
                    @method('PATCH')

                    <div class="form_wrap select_box">

                        <div class="form_item" style="width:33%; margin-right:10px;">
                            <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                            <select name="schoolyear" class="form-control wow" id="schoolyear">
                                <option selected disabled>-- Select School Year--</option>
                                @foreach ($schoolyears as $schoolyear)
                                    <option value="{{$schoolyear->id}}" @if($studSY->schoolyear_id == $schoolyear->id) echo selected @endif>{{ $schoolyear->year_start}}-{{ $schoolyear->year_end}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form_item" style="width:33%; margin-right:10px;">
                            <label for="grade_lvl" class="col-md-4 col-form-label text-md-end">Grade Level</label>
                            <select name="grade_lvl" class="form-control wow" id="grade_lvl">
                                <option selected disabled>-- Select Grade Level --</option>
                                <option value=7 @if($studSY->Section->grade_level == 7) echo selected @endif> Grade 7 </option>
                                <option value=8 @if($studSY->Section->grade_level == 8) echo selected @endif> Grade 8 </option>
                                <option value=9 @if($studSY->Section->grade_level == 9) echo selected @endif> Grade 9 </option>
                                <option value=10 @if($studSY->Section->grade_level == 10) echo selected @endif> Grade 10 </option>
                            </select>
                        </div>

                        <div class="form_item" style="width:33%; margin-right:10px;">
                            <label for="section" class="col-md-4 col-form-label text-md-end">Section</label>
                            <select name="section" class="form-control wow" id="section">
                                <option selected value="{{$studSY->Section->id}}">{{$studSY->Section->name}}</option>
                            </select>
                        </div>
                    </div>
                    <hr>

                    <div class="form_wrap fullname">
                        <div class="form_item" style="width:33%; margin-right:10px;">
                            <label for="age">Age:</label>
                            <input type="text" value="{{$studentHealth->age}}" name="age" id="age" class="wow form-control" required>
                        </div>
                        <div class="form_item" style="width:33%; margin-right:10px;">
                            <label for="height">Height (in m):</label>
                            <input type="text" value="{{$studentHealth->height}}" name="height" id="height" class="wow form-control" required>
                        </div>
                    
                        <div class="form_item" style="width:33%;">
                            <label for="weight">Weight (in kg):</label>
                            <input type="text" value="{{$studentHealth->weight}}" name="weight" id="weight" class="wow form-control" required>
                        </div>
                    </div>
                    <div class="form_wrap fullname">
                        <div class="form_item" style="width:50%; margin-right:10px;">
                            <label for="height2">Height<sup>2</sup> (in m<sup>2</sup>):</label>
                            <input type="text" value="{{$studentHealth->height2}}" name="height2" id="height2" class="wow form-control" required>
                        </div>
                    
                        <div class="form_item" style="width:50%;">
                            <label for="bmi2">BMI</label>
                            <input type="text" value="{{$studentHealth->bmi2}}" name="bmi2" id="bmi2" class="wow form-control" required>
                        </div>
                    </div>
                    <div class="form_wrap fullname">
                        <div class="form_item" style="width:50%; margin-right:10px;">
                            <label for="bmi_category">BMI Category</label>
                            <input readonly disabled type="text" value="{{$studentHealth->bmi_category}}" name="bmi_category" id="bmi_category" class="wow form-control" required>
                        </div>
                    
                        <div class="form_item" style="width:50%;">
                            <label for="hfa">Height for Age</label>
                            <input readonly disabled type="text" value="{{$studentHealth->hfa}}" name="hfa" id="hfa" class="wow form-control" required>
                        </div>
                    </div>
                    <div class="form_item">
                        <label for="remarks">Remarks:</label>
                        <input type="text" value="{{$studentHealth->remarks}}" name="remarks" id="remarks" class="wow form-control">
                    </div>
                        <div class="col-md-6">
                            <input hidden readonly id="student" 
                            type="text" value="{{$studSY->Student->id}}" name="student">
                        </div>

                    <div class="col-md-6 offset-md-4" style="align:right;">
                        <button type="submit" class="save_btn">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

