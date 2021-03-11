<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Hall Info</title>
</head>

<style>
    .button {
    border-radius: 4px;
    background-color: green;
    border: none;
    color: white;
    text-align: center;
    font-size: 14px;
    padding: 16px;
    width: 200px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
    }

    .button span {
    cursor: pointer;
    display: inline-block;
    position: relative;
    transition: 0.5s;
    }

    .button span:after {
    content: '\00bb';
    position: absolute;
    opacity: 0;
    top: 0;
    right: -20px;
    transition: 0.5s;
    }

    .button:hover span {
    padding-right: 25px;
    }

    .button:hover span:after {
    opacity: 1;
    right: 0;
    }
</style>
<body class="bg-dark">
    <a href="/back"><i class="fa fa-arrow-left fa-1x text-light mt-3 pl-3" aria-hidden="true"> Back</i></a>
    <div class="container mt-3 mb-5 pb-5 pt-5">
        <div class="header text-light ml-5 ">
            <h1>{{$hall->Hallname}}</h3>
        </div>
        <div class="owner-body">
            <h4 class="text-light ml-5 mt-5 pt-2">Owner Information</h3>
            <div class="row ml-5 mt-5">
                <div  class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <img style="width: 200px" class="rounded-circle " src="{{asset('Storage/'.$owner->image)}}" alt="">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    
                    <div class="row mt-1 "> 
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Owner Name</h3></label>
                            <input disabled type="text" value="{{$owner->ownername}}" class="form-control">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Contact Number</h3></label>
                            <input disabled type="text" value="{{$owner->phone}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-1 "> 
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Email</h3></label>
                            <input disabled type="text" value="{{$owner->email}}" class="form-control">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="hall-body">
            <h4 class="text-light ml-5 mt-5 pt-2">Hall Information</h3>
            <div class="row ml-5 mt-3">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    
                    <div class="row mt-1 "> 
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Hall Name</h3></label>
                            <input disabled type="text" value="{{$hall->Hallname}}" class="form-control">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Hall Address</h3></label>
                            <input disabled type="text" value="{{$hall->Halladdress}}" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-1 "> 
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Hall Capacity </h3></label>
                            <input disabled type="text" value="{{$hall->Hallcapacity}}" class="form-control">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Parking Capacity </h3></label>
                            <input disabled type="text" value="{{$hall->Hallparking}}" class="form-control">
                        </div>
                    </div>

                    <div class="row mt-1 "> 
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                            <label for=""><h5 class="text-light mt-2">Dishes (Spicy) </h3></label>
                            <input disabled type="text" value="{{$hall->Dish1}} {{$hall->Dish2}} {{$hall->Dish3}} " class="form-control">
                        </div>

                    </div>

                    <div class="row mt-1 "> 
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
                            <label for=""><h5 class="text-light mt-2">Dishes (Sweet) </h3></label>
                            <input disabled type="text" value="{{$hall->Dish4}} {{$hall->Dish5}} {{$hall->Dish6}}" class="form-control">
                        </div>

                    </div>

                    <div class="row mt-1 "> 
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2"> Type </h3></label>
                            @if($hall->Halltype=="1")
                                <input disabled type="text" value="Marraige Hall" class="form-control">
                            @elseif($hall->Halltype=="2")
                                <input disabled type="text" value="Party Hall" class="form-control">
                            @elseif($hall->Halltype=="3")
                                <input disabled type="text" value="Open HAll" class="form-control">
                            @endif
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                            <label for=""><h5 class="text-light mt-2">Booking Price </h3></label>
                            <input disabled type="text" value="{{$hall->amount}}" class="form-control">
                        </div>

                    </div>
                    
                </div>

                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                    <div class="row">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img style="width:100%" class="d-block" src="{{asset('Storage/'.$hall->Snap1)}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width:100%" class="d-block" src="{{asset('Storage/'.$hall->Snap2)}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width:100%" class="d-block" src="{{asset('Storage/'.$hall->Snap3)}}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width:100%" class="d-block" src="{{asset('Storage/'.$hall->Snap4)}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img style="width:100%" class="d-block" src="{{asset('Storage/'.$hall->Snap5)}}" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-6 ml-4">
            <h4 class="text-light  mt-5 pb-3">Hall Location</h3>
                    <h4 class="text-light"></h4>
                    <div class="mapouter">
                        <div class="gmap_canvas">
                            <iframe width="1300" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q={{$hall->Halladdress}}&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            <a href="https://123movies-org.net"></a>
                        </div>
                        <style>
                            .mapouter{
                                position:relative;
                                text-align:left;
                                height:300px;
                                width:auto;
                                }
                            .gmap_canvas {
                                overflow:hidden;
                                background:none!important;
                                height:300px;
                                width:1100px;
                                }
                            </style>
                        </div>
                </div> 
        </div>
        <div class="Booking mt-5 pl-5 text-white">
            <button class="button"><span> <a href="{{url('\booking',$hall->id)}}" class="text-light"><b>Book Now</b></a> </span></button>
        </div>
    </div>
    <div class="abouttab bg-dark text-light text-center mt-5 p-3">
        <a href="" class="text-light"><i class=" p-1 fa fa-facebook-official" aria-hidden="true"></i></a>
        <a href="" class="text-light"><i class=" p-1 fa fa-twitter-square" aria-hidden="true"></i></a>
        <a href="" class="text-light"><i class=" p-1 fa fa-instagram" aria-hidden="true"></i></a>
        <a href="" class="text-light"><i class=" p-1 fa fa-linkedin-square" aria-hidden="true"></i></a>
        <a href="" class="text-light"><i class=" p-1 fa fa-youtube-play" aria-hidden="true"></i></a>
        <a href="" class="text-light"><i class=" p-1 fa fa-reddit-square" aria-hidden="true"></i></a>

    </div>
</body>
</html>