<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <!-- header section starts  -->
@include('header')
<!-- home section starts  -->


<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"><span>about</span> us </h1>

    <h1 class="heading"><span>about</span> us </h1>
    
    <div class="row">
    
        <div class="image">
            <a href=""><img src="{{url('frontend/images/2.jpg')}}" alt="" /></a>
        </div>
    
        <div class="content">
            <h3>we will give a very special celebration for you</h3>
            <p>We are a full-service event management company with over 10 years of experience in the industry. We specialize in creating memorable, one-of-a-kind events that are tailored to our individual clients. Our event management team covers all aspects of event planning and execution, from concept to completion. We have worked with a variety of clients, from corporate events to weddings, birthdays and more. </p>
            <p>Our team is dedicated to providing our clients with the highest quality of service and creating an unforgettable experience. We strive to make sure every event is a success, no matter the size or budget. We look forward to helping you create your next amazing event.</p>
            <a href="#" class="btn">contact us</a>
        </div>
    
    </div>
    
    </section>
    
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">

    <!-- about section ends -->

<!-- footer section starts  -->
   @include('footer')
<!-- footer section ends --> 

<!-- Javascript  -->

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="public\frontend\js\Jquery.js"></script>

<!-- javascript end  -->

</body>
</html>