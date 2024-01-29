<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking form</title>
    <link rel="stylesheet" href="{{url('frontend/css/booking.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/style2.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <!-- header section starts  -->
    @include('header')
    <!-- home section starts  -->
    <form class="d-flex flex-column gap-2" action="{{route('booking.data')}}" method="post">

    <div class="container">
            <div id="form">
                <h1 class="text-white text-center">Booking Now</h1>
                    @csrf
                    <div id="first-group">
                        <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="fname" placeholder="First name">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('fname')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" name="phone" placeholder="Phone number">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('phone')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" name="datefrom" placeholder="Event's Date From">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('datefrom')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" name="guests" style="background-color: rgb(255, 255, 255);">
                            <option value="No.of guests">No.of guests</option>
                            <option value="Less Then 100">Less Then 100</option>
                            <option value="100-150">100-150</option>
                            <option value="150-200">150-200</option>
                            <option value="200-300">200-300</option>
                            <option value="More Then 300">More Then 300</option>
                        </select>
                    </div>
                </div>
                <div id="second-group">
                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" name="lname" placeholder="Last name">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('lname')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <input type="" id="input-group" name="email" placeholder="Email">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('email')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" id="input-group" name="dateto" placeholder="Event's Date To">
                    </div>
                    <span class="danger">
                        <h5>
                            @error('dateto')
                                {{$message}}
                            @enderror
                        </h5>
                    </span>
                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" name="type"style="background-color: white;">
                            <option value="Event Type">Event Type</option>
                            <option value="Birthday Party">Birthday Party</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Concerts">Concerts</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                </div>
                <button type="submit" name="submit" value="Submit" id="submit-btn" href="{{url('/data')}}">Book Now</button>
            </div>
        </div>
    </form>
</body>
</html>
<!-- footer section starts  -->
@include('footer')
<!-- footer section ends --> 
