<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client's Review</title>

    <link rel="stylesheet" href="css/style4.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
  <!-- header section starts  -->
@include('header')
<!-- home section starts  -->

<!-- review section starts  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading">client's <span>review</span></h1>

    <h1 class="heading">client's <span>review</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <a href=""><img src="{{url('frontend/images/pic-1.png')}}" alt="" /></a>
                    <div class="user-info">
                        <h3>john</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>I recently attended a birthday celebration event that was managed by a professional event management company. The event was a great success. The event was well organized and the staff was very helpful and friendly.</p>
            </div>

            </div>
        <br>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <a href=""><img src="{{url('frontend/images/pic-2.png')}}" alt="" /></a>
                    <div class="user-info">
                        <h3>Olivia</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>My experience with this company was outstanding! Right from the initial consultation, I felt comfortable and confident that my wedding event would be perfect.</p>
            </div>

        </div>

    </div>

</section>

<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">

<!-- review section ends -->

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