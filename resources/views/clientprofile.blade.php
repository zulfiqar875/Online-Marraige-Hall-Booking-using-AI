<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ClientProfile</title>
</head>
<body class="bg-dark">
    <a href="/back"><i class="fa fa-arrow-left fa-1x text-light mt-2 ml-5" aria-hidden="true"> Back</i></a>
    <div class="container mt-3">
        <div class="header">
            <h4 class=" text-light mt-5 mb-5 ml-3"><i class="fa fa-user-circle fa-2x" aria-hidden="true"></i> Client Profile</h4>
        </div>
        <div class="client p-3">
            <h6 class="text-light"> <i class="fa fa-user fa-2x" aria-hidden="true"></i> Personal Information </h6>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cp->customername}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cp->phoneno}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cp->email}}" disabled class="form-control">
                </div>
            </div>
            
            <h6 class="text-light mt-4"> <i class="fa fa-building-o fa-2x" aria-hidden="true"></i> Hall Information </h6>
            <div class="row">
                
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->hallname}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->bookingdate}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->halltype}}" disabled class="form-control">
                </div>
            </div>

            <h6 class="text-light mt-4"> <i class="fa fa-cutlery fa-2x" aria-hidden="true"></i> Food Information </h6>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish1}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish2}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish3}}" disabled class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish4}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish5}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->dish6}}" disabled class="form-control">
                </div>
            </div>

            <h6 class="text-light mt-4"> <i class="fa fa-money fa-2x" aria-hidden="true"></i> Payment Information </h6>
            <div class="row">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->amount}}" disabled class="form-control">
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    @if($cb->status == "0")
                        <input type="text" value="UnPaid" disabled class="form-control">
                    @elseif($cb->status == "1")
                        <input type="text" value="Paid" disabled class="form-control">
                    @endif
                </div>

                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 mt-3">
                    <input type="text" value="{{$cb->feedback}}" disabled class="form-control">
                </div>

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
    </div>
</body>
</html>