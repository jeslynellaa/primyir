@extends('layouts.admin-app')

@section('content')
    <div class="wrapper">
        <div class="form_wrap">
            <div class="form_1 data_info">
                <h2>School Form 8</h2>
                
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
            
                    <div class="form_item">
                        <label for="age">Age:</label>
                        <input type="number" name="age" id="age" class="form-control" required>
                    </div>
                    <div class="form_item">
                        <label for="height">Height (in m):</label>
                        <input type="number" name="height" id="height" class="form-control" required>
                    </div>
                    <div class="form_item">
                        <label for="weight">Weight (in kg):</label>
                        <input type="number" name="weight" id="weight" class="form-control" required>
                    </div>
                    <div class="col-md-6 offset-md-4" style="align:right;">
                        <button type="submit" class="save_btn">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
//<script>
//    function calculate() {
//        var height = parseInt(document.getElementById("height").value);
//        var weight = parseInt(document.getElementById("weight").value);
//        var height_squared = height * height;
//        var bmi = weight / height_squared;
//        
//        document.getElementById("height_squared").value = height_squared;
//        document.getElementById("bmi").value = bmi.toFixed(2);
//        
//        if (bmi < 16) {
//                document.getElementById("bmi_category").value = "Severely Wasted";
//            } else if (bmi >= 16 && bmi < 18.5) {
//                document.getElementById("bmi_category").value = "Wasted";
//            } else if (bmi >= 18.5 && bmi <= 24.9) {
//                document.getElementById("bmi_category").value = "Normal";
//            } else if (bmi >= 25 && bmi <= 29.9) {
//                document.getElementById("bmi_category").value = "Overweight";
//            } else {
//                document.getElementById("bmi_category").value = "Obese";
//            }
//
//            var birthdate = new Date(document.getElementById("birthdate").value);
//            var today = new Date();
//            var age = today.getFullYear() - birthdate.getFullYear();
//            var birthMonth = birthdate.getMonth() + 1;
//            var todayMonth = today.getMonth() + 1;
//                
//            if (todayMonth < birthMonth) {
//                age--;
//            } else if (todayMonth == birthMonth) {
//                var birthDay = birthdate.getDate();
//                var todayDay = today.getDate();
//            
//                if (todayDay < birthDay) {
//                    age--;
//                }
//            }
//        
//            document.getElementById("age").value = age;
//        
//            if (height < 3 * age - 97) {
//                document.getElementById("height_for_age").value = "Severely Stunted";
//            } else if (height >= 3 * age - 97 && height < 2 * age + 8) {
//                document.getElementById("height_for_age").value = "Stunted";
//            } else if (height >= 2 * age + 8 && height < 2 * age + 12) {
//                document.getElementById("height_for_age").value = "Normal";
//            } else {
//                document.getElementById("height_for_age").value = "Tall";
//            }
//        }
//        
//        document.getElementById("height").addEventListener("input", calculate);
//        document.getElementById("weight").addEventListener("input", calculate);
//        document.getElementById("birthdate").addEventListener("input", calculate);
//
//        var form = document.querySelector('form');
//        form.addEventListener('submit', function(event) {
//            calculate();
//            event.preventDefault();
//        });
//</script>
@endsection

