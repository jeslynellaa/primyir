@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Event</h2>
                
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
                    <form method="POST" action="/admin/events" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form_item">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <input id="title" type="text" class="wow form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" autocomplete="title" required placeholder="Enter Event Title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="event_date" class="col-md-4 col-form-label text-md-end">Event Date</label>
                                <input id="event_date" type="date" class="wow form-control @error('event_date') is-invalid @enderror" name="event_date" value="{{ old('event_date') }}" placeholder="mm/dd/yyyy" required autofocus>
                            </div>

                            <div class="form_item">
                                <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                                <select name="category" class="form-control wow" id="category">
                                    <option selected disabled>-- Select Category --</option>
                                    <option value='Students'> Students </option>
                                    <option value='Faculty'> Faculty </option>
                                    <option value='Institution'> Institution </option>
                                    <option value='Holidays'> Holidays </option>
                                </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form_wrap">
                            <div class="form_item">
                                <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>
                                <div class="col-md-6">
                                    <textarea style="padding:10px; font: 20px;" id="content" class="wow form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content">
                                    </textarea>

                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form_wrap fullname">
                            <div class="form_item">
                                <label for="thumbnail" class="col-md-4 col-form-label text-md-end">{{ __('Add Thumbnail') }}</label>
                                <div class="col-md-6">
                                    <input id="thumbnail" class="form-control-file" type="file" name="thumbnail">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Create New Event') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        textarea {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;

            width: 100%;
        }
    </style>
@endsection

