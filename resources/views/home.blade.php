<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Spa</title>

    <link rel="stylesheet" href="css/style2.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- custom css file link  -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
<style>
       li,a{
     text-decoration: none;
}
    </style>
</head>
<body>
    
<!-- header section starts  -->
@include('header')
<!-- home section starts  -->
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div id="columnSlider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
          <img src="frontend/images/slide-1.jpg" alt="Uploaded Image">
          </div>
          <div class="carousel-item">
            <img src="frontend/images/slide-2.jpg" class="d-block w-100" alt="Image 2">
          </div>
          <div class="carousel-item">
            <img src="frontend/images/slide-3.jpg" class="d-block w-100" alt="Image 3">
          </div>
          <div class="carousel-item">
            <img src="frontend/images/slide-4.jpg" class="d-block w-100" alt="Image 4">
          </div>
          <div class="carousel-item">
            <img src="frontend/images/slide-5.jpg" class="d-block w-100" alt="Image 5">
          </div>
          <div class="carousel-item">
            <img src="frontend/images/slide-6.jpg" class="d-block w-100" alt="Image 6">
          </div>
        </div>
        <a class="carousel-control-prev" href="#columnSlider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#columnSlider" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>



<!-- home section ends -->

<!-- contact section starts  -->


<link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">

<!-- contact section ends -->

<!-- footer section starts  -->
@include('footer')
<!-- footer section ends --> 

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="public\frontend\js\Jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>