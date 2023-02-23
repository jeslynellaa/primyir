@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Create a new Curriculum</h2>
                
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
                    <form method="POST" action="/admin/curriculum/{{$curriculum->id}}">
                        @csrf
                        @method('PATCH')
                        
                        <div class="form_item">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Curriculum Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class=" wow form-control @error('name') is-invalid @enderror" name="name" value="{{ $curriculum->name }}" required autocomplete="name" placeholder="Enter Curriculum Name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form_item">
                            <label for="acronym" class="col-md-4 col-form-label text-md-end">{{ __('Curriculum Acronym') }}</label>
                            <div class="col-md-6">
                                <input id="acronym" type="text" class=" wow form-control @error('acronym') is-invalid @enderror" name="acronym" value="{{$curriculum->acronym}}" required autocomplete="acronym" placeholder="Enter Curriculum Acronym" autofocus>
                                @error('acronym')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form_item">
                            <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Curriculum Description') }}</label>
                            <div class="col-md-6">
                                <textarea style="padding:10px; font: 16px;" id="description" class="wow form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" rows="4" cols="100">{{ $curriculum->description }}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-6 offset-md-4" style="align:right;">
                            <button type="submit" class="save_btn">
                                {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap" style="float:left;margin-top:1rem;">
                    <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/subjects"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to Records</a>
                </div>
            </div>
        </div>
    </div>
@endsection

