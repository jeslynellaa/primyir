@extends('layouts.admin-app')

@section('content')
    <div class="signup-container">
        <div class='left-container'>
            <h1>Choosing a hard-to-guess, but easy-to-remember password is important!</h1>

            <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

            <div class="wrapper">
                <div class="form_wrap">

                    <div class="form_1 data_info">
                        <h2>Change Password</h2>

                        <div class="panel-body">
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

                            <form method="POST" action="{{ route('pw.update', Auth::user()->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <div class="actual-forms">
                                    <div class="form_item form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">Current Password</label>
                                        <input 
                                        id="current-password" 
                                        type="password" 
                                        class="wow form-control" 
                                        placeholder="Enter Current Password"
                                        name="current-password" required>

                                        @if ($errors->has('current-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('current-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form_item form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                                        <label for="new-password" class="col-md-4 control-label">New Password</label>

                                        <input 
                                        id="new-password" 
                                        type="password" 
                                        class="wow form-control"
                                        placeholder="Enter New Password" 
                                        name="new-password" required>

                                        @if ($errors->has('new-password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('new-password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form_item form-group">
                                        <label for="new-password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                        <input 
                                        id="new-password-confirm" 
                                        type="password" 
                                        class="wow form-control"
                                        placeholder="Enter New Password Again"  
                                        name="new-password_confirmation" required>
                                    </div>
                                </div>

                                <div class="btns_wrap">
                                    <div class="common_btns form_3_btns">
                                        <button type="submit" class="btn_done">
                                            Done
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div><!--End of panel body-->
                    </div><!--End of form_1 data_info-->
                </div> <!--End of form_wrap-->
            </div> <!--End of wrapper-->
        </div> <!--End of Left container-->

        <div class='right-container'>
            <img src="/png/side1.png">
        </div>

    </div><!--End of signup container-->


    <!-- =========== Scripts =========  -->
    <script src="{{ asset('js/script.js') }}" defer></script>
    <script src="{{ asset('js/passform.js') }}" defer></script>
    <script src="{{ asset('js/showpass.js') }}" defer></script>
@endsection