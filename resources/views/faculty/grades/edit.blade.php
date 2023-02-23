@extends('layouts.faculty-app')

@section('content')
<div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Input or Edit Grades</h2>
                
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

                <div class="card-body">
                    <form method="POST" action="/faculty/grades/{{$subject_class->id}}/{{$grading}}">
                        @csrf
                        @method('PATCH')
                        
                        <hr>
                        <div>
                            <div class="form_item">
                                <table id="example" class="table table-striped" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Student Name</th>
                                            <th>Grade</th>
                                        </tr>	
                                    </thead>
                                    <tbody>
                                        @foreach ( $student_grades as $student )
                                            <tr>
                                                <td>{{ $loop->index + 1}}</td>
                                                <td>
                                                    {{ $student->lastname }}, {{ $student->givenname }} {{ $student->middlename }}
                                                    <div class="form_item">
                                                        <div class="col-md-6">
                                                            <input hidden id="student_subgrades[]" type="text" class="wow form-control @error('student_subgrades') is-invalid @enderror" name="student_subgrades[]" value="{{$student->id}}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input hidden id="grading" type="text" class="wow form-control @error('grading') is-invalid @enderror" name="grading" value="{{$grading}}" required>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input id="grades[]" type="number" class="grade form-control @error('grades') is-invalid @enderror" name="grades[]" style="width:4rem" value="{{ $student->grades}}" placeholder="---">
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Save Grades') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection