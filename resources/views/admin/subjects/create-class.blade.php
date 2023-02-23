@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Subject Class</h2>
                
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
                    <form method="POST" action="/admin/subjects/class">
                        @csrf

                        <div class="form_item">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Subject Name') }}</label>
                            <div class="col-md-6">
                                <input readonly id="name" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" required value="{{$subject->name}}" autofocus>
                            </div>
                        </div>

                        <div class="form_item">
                            <div class="col-md-6">
                                <input hidden id="subId" type="text" class=" wow form-control @error('subId') is-invalid @enderror" name="subId" required value="{{$subject->id}}" autofocus>
                            </div>
                        </div>


                        <div class="form_item">
                            <label for="section" class="col-md-4 col-form-label text-md-end">Sections for Grade {{$subject->grade_level}}</label>
                            <select name="section" class="form-control wow" id="section">
                                <option value="" selected disabled>-- Select Section --</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}"> {{ $section->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="teacher" class="col-md-4 col-form-label text-md-end">Teacher</label>
                            <select name="teacher" class="form-control wow" id="teacher">
                                <option selected disabled>-- Select Teacher --</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"> {{ $teacher->lastName }}, {{ $teacher->givenName }} {{ $teacher->middleName }}</option>
                                @endforeach
                            </select>
                        </div>

                        
            <div class="btns_wrap" style="float:left;margin-top:1rem;">
                <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/subjects/{{$subject->id}}"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to Subject Classes</a>
            </div>
                        <div class="col-md-6 offset-md-4" style="float:left;">
                            <button type="submit" class="save_btn">
                                {{ __('Create New Subject') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- =========== Scripts =========  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#grade_lvl').on('change', function () {
                var subject = this.value;
                $('#subject').html('');
                $.ajax({
                    url: '{{ route('getSubjects') }}?grade_lvl='+subject,
                    type: 'get',
                    success: function (res) {
                        $('#subject').html('<option value="" selected disabled>-- Select Subject --</option>');
                        $.each(res, function (key, value) {
                            $('#subject').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
        $(document).ready(function () {
            $('#grade_lvl').on('change', function () {
                var gradeLevel = this.value;
                $('#section').html('');
                $.ajax({
                    url: '{{ route('getSections') }}?grade_lvl='+gradeLevel,
                    type: 'get',
                    success: function (res) {
                        $('#section').html('<option value="" selected disabled>-- Select Section --</option>');
                        $.each(res, function (key, value) {
                            $('#section').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            });
        });
    </script>
@endsection

