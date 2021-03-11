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
    <title>Hall</title>
</head>
<style>
    .button {
    border-radius: 4px;
    background-color: #f4511e;
    border: none;
    color: #FFFFFF;
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
        <div class="container mt-4 pt-5 mb-5">
            <div class="header text-center text-light">
                <h3>AVAILABLE HALL</h3>
            </div>
        </div>
        <div class="data m-5 p-5 pt-5">
            @foreach ($hall as $obj)
                <div class="row bg-light p-5">
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 text-right">
                            <img style="width:250px;" class="" src="{{ asset('Storage/' . $obj->Snap1) }}" alt="image not load">
                    </div>
                    <div class="col-sm-5 col-md-5 col-lg-5 col-xl-5 pl-5 text-dark">
                            <h3 class="text-primary">{{$obj->Hallname}}</h3>
                            <h6>{{$obj->Halladdress}}</h3>
                            <h6>People Capacity: {{$obj->Hallcapacity}} Parking: {{$obj->Hallparking}}</h4>
                            <h6>Price: PKR-{{$obj->amount}}</h6>
                            <button class="button"><span> <a href="{{url('\MoreHallinfo',[$obj->OID, $obj->id, $cid])}}" class="text-light"><b>More Details</b></a> </span></button>
                    </div>
                </div>
                <br class="text-light border border-light">
            @endforeach
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