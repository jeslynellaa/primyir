@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Section Record</h2>
                
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
                    <form method="POST" action="/sections">
                        @csrf
                        
                        <div class="form_item">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Section Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Enter Section Name" autofocus>

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
                        </div>

                        <div class="form_item">
                            <label for="adviser" class="col-md-4 col-form-label text-md-end">Adviser</label>
                            <select name="adviser" class="form-control wow" id="adviser">
                                <option selected disabled>-- Select Adviser --</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"> {{ $teacher->lastName }}, {{ $teacher->givenName }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Create New Section') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

