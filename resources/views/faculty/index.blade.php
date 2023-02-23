@extends('layouts.faculty-app')

@section('content')
    <!-- ======================= Header Carousel ================== -->
    
    <div class="img-slider">
        <div class="slideshow-container">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade" id="slide">
                <img src="png/primyir1.png" style="width:100%">
            </div>

            <div class="mySlides fade" id="slide">
                <img src="png/primyir.png" style="width:100%">
            </div>

            <div class="mySlides fade" id="slide">
                <img src="png/primyir3.png" style="width:100%">
            </div>
        </div>
    </div>

    <!-- ======================= Welcome ================== -->
    <div class = "trio">
        <div class = "trio-one">
            <div class = "trio-con1">
                <br><br>
                <img src="/png/welcome.png">
            </div>

            <div class = "trio-con2">
                <br><br><br>
                <h2>Pagbati sa ngalan ng #EduKalidad</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                <br>
                <p><b>Juan De la Cruz</b></p>
                <p>Principal, SNHS</p>
            </div>
        </div>

        <div class = "trio-two">
            <div class="socmed">
                <div class="socmed-header">
                    <h3>Stay Connected</h3>
                </div>
                <div class="socmed-icons">
                    <a href="https://www.facebook.com/sorsogonnationalhs"><i class="fa-brands fa-facebook soc"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter soc"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube soc"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram soc"></i></a>
                    <a href="#"><i class="fa-brands fa-google-plus-g soc"></i></a>
                </div>
            </div>

            <div class="map">
                <div class="map-header">
                    <h3>Location</h3>
                </div>

                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.9526780710867!2d124.00744786166501!3d12.974878567195091!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a0ef1a84aedd23%3A0xcfd3ff8d8142b55e!2sSorsogon%20National%20High%20School!5e0!3m2!1sen!2sph!4v1673371998174!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>
            
        </div>
        
    </div>

    <style>
        /* Slideshow container */
        .slideshow-container {
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }
        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function () {
            let slideIndex = 0;
            showSlides();

            function showSlides() {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}
                    slides[slideIndex-1].style.display = "block";
                setTimeout(showSlides, 5000); // Change image every 2 seconds
            }
        });
    </script>
@endsection
