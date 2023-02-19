@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Subject Record</h2>
                
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
                    <form method="POST" action="/admin/subjects">
                        @csrf
                        
                        <div class="form_item">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Subject Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Subject Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="grade_level" class="col-md-4 col-form-label text-md-end">{{ __('Grade Level') }}</label>

                            <select name="grade_level" class="form-control wow" id="grade_level">
                                <option selected disabled>-- Select Grade Level --</option>
                                <option value=7> Grade 7 </option>
                                <option value=8> Grade 8 </option>
                                <option value=9> Grade 9 </option>
                                <option value=10> Grade 10 </option>
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="curriculum" class="col-md-4 col-form-label text-md-end">Curriculum</label>
                            <select name="curriculum" class="form-control wow" id="curriculum">
                                <option selected disabled>-- Select Curriculum --</option>
                                @foreach ($curricula as $curriculum)
                                    <option value="{{ $curriculum->id }}"> {{ $curriculum->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="schoolyear" class="col-md-4 col-form-label text-md-end">School Year</label>
                            <select name="schoolyear" class="form-control wow" id="schoolyear">
                                <option selected disabled>-- Select School Year --</option>
                                @foreach ($schoolyears as $schoolyear)
                                    <option value="{{ $schoolyear->id }}"> {{ $schoolyear->year_start }}-{{ $schoolyear->year_end }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="checkbox">
                            <label for="elective" class="col-md-4 col-form-label text-md-end">Check if Elective Subject: </label>
                                <input id="yes" type="checkbox" class="wow form-control @error('elective') is-invalid @enderror" name="elective" value="1">
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Create New Subject') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

