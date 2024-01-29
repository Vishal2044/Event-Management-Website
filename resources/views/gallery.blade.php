<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

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


<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-1.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/001.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-3.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-4.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-5.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-6.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-7.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-8.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <a href=""><img src="{{url('frontend/images/g-9.jpg')}}" alt="" /></a>
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">

<!-- gallery section ends -->

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