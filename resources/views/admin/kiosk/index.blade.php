@extends('layouts.admin-app')

@section('content')
<div class='signup-container'>
    <div class='left-container'>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        
        <div class="wrapper">
            <div class="form_wrap">
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

                <form method="POST" action="/admin/kiosk">
                    @csrf
                    @method('PATCH')

                    <div class="form_1 data_info">
                        <h2>School Information</h2>
                        <div class="form_item">
                            <label>School Name</label>
                            <input type="text" class="wow" value="{{$info->name}}" id="name" name="schoolName" required>
                        </div>

                        <div class="form_item">
                            <label>General Description</label>
                            <textarea style="padding:10px; font: 20px;" class="wow" placeholder="General Desciption" id="gen_desc" name="gen_desc" required rows=4>{{$info->details}}</textarea>
                        </div>

                        <hr>
                        @foreach($description as $offer)
                            <button type="button" class="collapsible">School Description {{$loop->index+1}}</button>
                            <div class="collapse_content">
                                <div class="form_item" style="margin-bottom:0.5rem;">
                                    <!-- <label>School Offer {{$loop->index+1}}</label> -->
                                    <input type="text" class="wow" id="desc_title" name="desc_title{{$loop->index+1}}" placeholder="Title" value="{{$offer->title}}" required> 
                                </div>

                                <div class="form_item">
                                    <textarea style="padding:10px; font: 20px;" placeholder="Description" class="wow" id="description" name="description{{$loop->index+1}}" required rows=4>{{$offer->description}}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <hr>

                    <div class="form_1 data_info">
                        <h2>Map Information</h2>
                        <div class="form_item">    
                            <label> First Floor</label>
                            <input type="file" id="myFile1" name="filename1">
                        </div>
                        
                        <div class="form_item">
                            <label> Second Floor</label>
                            <input type="file" id="myFile2" name="filename2">
                        </div>

                        <div class="form_item">
                            <label> Third Floor</label>
                            <input type="file" id="myFile3" name="filename3">
                        </div>
                        
                        <div class="form_item">
                            <label> Fourth Floor</label>
                            <input type="file" id="myFile4" name="filename4">
                        </div>

                        <div class="form_item">    
                            <label>Evacuation Plan</label>
                            <input type="file" id="myFile4" name="filename5">
                        </div>
                    </div>
                    <hr>

                    <div class="form_1 data_info">
                        <h2>History</h2>
                            
                        @foreach($history as $history)
                            <button type="button" class="collapsible">History Section {{$loop->index+1}}</button>
                            <div class="collapse_content">
                                <div class="form_item" style="margin-bottom:0.5rem;">
                                    <input type="text" class="wow" id="history_title" name="history_title{{$loop->index+1}}"  value="{{$history->title}}" required> 
                                </div>

                                <div class="form_item">
                                    <textarea style="padding:10px; font: 20px;" placeholder="Description" class="wow" id="history_desc" name="history_desc{{$loop->index+1}}" required rows=4>{{$history->description}}</textarea>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-md-6 offset-md-4" style="align:right;">
                        <button type="submit" class="save_btn">
                            {{ __('Save Changes') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- <div class="modal_wrapper">
            <div class="shadow"></div>
            <div class="success_wrap">
                <span class="modal_icon"><ion-icon name="checkmark-sharp"></ion-icon></span>
                <p>Your password has been successfully changed.</p>
            </div>
        </div> -->
    </div>
    <div class='right-container'>
            <div class="well_top" style="align-items:top;">
                <div class="functions_wrap" style="margin-left: 20px;">
                    <!-- <a class="list_function" href="https://primyir-eskwelahan.online/Kiosk/snhs.php" target="_blank">Setup Kiosk</a> -->
                    <a class="list_function" href="/public/" target="_blank">Setup Kiosk</a>
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
        /* Style the button that is used to open and close the collapsible collapse_content */
        .collapsible {
            background-color: #e7e7e7;
            color: #444;
            cursor: pointer;
            margin: 5px;
            padding: 10px;
            width: 100%;
            border: 1px solid #dadce0;
            border-radius: 20px;
            text-align: center;
            outline: none;
            font-size: 15px;
        }

        /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
        .collapsible.active, .collapsible:hover {
            background-color: #ccc;
        }

        /* Style the collapsible collapse_content. Note: hidden by default */
        .collapse_content {
            padding: 0 18px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
        .collapsible:after {
            content: '\02795'; /* Unicode character for "plus" sign (+) */
            font-size: 10px;
            color: black;
            float: right;
            margin-left: 5px;
        }
        .collapsible.active:after {
            content: "\2796"; /* Unicode character for "minus" sign (-) */
        }
    </style>
    <script>
        $(document).ready(function(){
            var coll = document.getElementsByClassName("collapsible");
            var i;

            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var collapse_content = this.nextElementSibling;
                    if (collapse_content.style.maxHeight){
                        collapse_content.style.maxHeight = null;
                    } else {
                        collapse_content.style.maxHeight = collapse_content.scrollHeight + "px";
                    }
                });
            }
        });
    </script>
@endsection