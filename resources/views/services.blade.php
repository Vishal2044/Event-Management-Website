<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>

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


<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>    

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
            <p>When it comes to selecting the right venue for your event, our goal is to make the process as easy and stress-free as possible. We will work with you to determine the best location that meets your needs and fits within your budget. </p>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
            <p>Our invitation card design service is tailored to meet the needs of our clients. We work with clients to create a unique design that reflects their event theme, color scheme, and overall style.</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
            <p>Entertainment services in event management include live music, DJs, karaoke, dancing, comedians, magicians, and other performers. Additional services may include coordinating audio/visual, lighting, and staging, as well as planning activities, games, and trivia.</p>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <p> Food and drink service is also an important part of event management. It involves hiring caterers, bartenders, servers, and other personnel to handle the food and beverage service at the event. This service can also include menu planning, food and beverage coordination, and menu presentation.</p>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
            <p>Photo and video services are an important part of event management. This service involves hiring professional photographers and videographers to capture the event and create a lasting memory. </p>
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
            <p>Custom food service in event management is the process of providing tailored meals and snacks to meet the specific needs of attendees. This includes everything from customizing menu items.</p>
        </div>

    </div>
</section>
<!-- service section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading"> our <span>price</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">for birthdays (Person)</h3>
            <h3 class="amount">₹250</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="/booking" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for weddings (Person)</h3>
            <h3 class="amount">₹450</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="/booking" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for concerts (Person)</h3>
            <h3 class="amount">₹650</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="/booking" class="btn">check out</a>
        </div>

        <div class="box">
            <h3 class="title">for others (Person)</h3>
            <h3 class="amount">₹850</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            <a href="/booking" class="btn">check out</a>
        </div>

    </div>


</section>

<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">

<!-- price section ends -->

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