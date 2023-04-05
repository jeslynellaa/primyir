@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>Edit Article</h2>
                
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
                    <form method="POST" action="/admin/articles/{{$article->id}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form_item">
                            <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                            <input id="title" type="text" class="wow form-control @error('title') is-invalid @enderror" name="title" value="{{$article->title}}" autocomplete="title" required placeholder="Enter Title/Headline" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form_item">
                            <label for="category" class="col-md-4 col-form-label text-md-end">{{ __('Category') }}</label>

                            <select name="category" class="form-control wow" id="category">
                                <option selected disabled>-- Select Category --</option>
                                <option value='News' @if($article->category =='News') echo selected @endif> News </option>
                                <option value='Editorial' @if($article->category =='Editorial') echo selected @endif> Editorial </option>
                                <option value='Feature' @if($article->category =='Feature') echo selected @endif> Feature </option>
                                <option value='Sports' @if($article->category =='Sports') echo selected @endif> Sports </option>
                                <option value='DevComm' @if($article->category =='DevComm') echo selected @endif> DevComm </option>
                                <option value='Literary' @if($article->category =='Literary') echo selected @endif> Literary </option>
                            </select>
                        </div>

                        <div class="form_item">
                            <label for="author" class="col-md-4 col-form-label text-md-end">{{ __('Author') }}</label>

                            <input id="author" type="text" class="wow form-control @error('author') is-invalid @enderror" name="author" value="{{$article->author}}" autocomplete="author" required placeholder="Author" autofocus>

                            @error('author')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="form_wrap">
                            <div class="form_item">
                                <label for="content" class="col-md-4 col-form-label text-md-end">{{ __('Content') }}</label>
                                <div class="col-md-6">
                                    <textarea style="padding:10px; font: 20px;" id="content" class="wow form-control @error('content') is-invalid @enderror" name="content" required autocomplete="content" rows="10"> {{$article->content}}
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
                                {{ __('Edit Article') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div class="btns_wrap" style="float:left;margin-top:1rem;">
                    <a class="save_btn" style="text-decoration:none; color:black;align:center;" href="/admin/events"><span class="icon"><ion-icon name="arrow-back-sharp"></ion-icon></span>Back to Events & Articles</a>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        textarea {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: auto;

            width: 100%;
        }
    </style>
@endsection

