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
    <title>Portal</title>
</head>
<style>
    div.stars {
    width: 250px;
    display: inline-block;
    }

    input.star { display: none; }

    label.star {
    float: right;
    padding: 10px;
    font-size: 36px;
    color: #444;
    transition: all .2s;
    }

    input.star:checked ~ label.star:before {
    content: '\f005';
    color: #FD4;
    transition: all .25s;
    }

    input.star-5:checked ~ label.star:before {
    color: #FE7;
    text-shadow: 0 0 20px #952;
    }

    input.star-1:checked ~ label.star:before { color: #F62; }

    label.star:hover { transform: rotate(-15deg) scale(1.3); }

    label.star:before {
    content: '\f006';
    font-family: FontAwesome;
    }
</style>
<body class="bg-dark">
    <div class="navbarhead">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 pb-3">
            <a class="navbar-brand" href="#"><b>{{$data->customername}}</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                  
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#myhall">Bookings</a>
                        </li>
                        <li class="nav-item">
                            <button type="button" class="btn btn-light text-secondary" data-toggle="modal" data-target="#exampleModalCenter"> Profile </button>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Profile</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-left m-3">
                                        <div class="row mb-3">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">Customer Name</label>
                                                <input disabled type="text" required value="{{$data->customername}}" class="form-control">
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">Father Name</label>
                                                <input disabled type="text" required value="{{$data->fathername}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">CNIC NO</label>
                                                <input disabled type="text" required value="{{$data->cnic}}" class="form-control">
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">Phone No</label>
                                                <input disabled type="text" required value="{{$data->phoneno}}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mmb-3">
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">Email</label>
                                                <input disabled type="text" required value="{{$data->email}}" class="form-control">
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                                                <label class="text-left" for="">Password</label>
                                                <input disabled type="text" required value="{{$data->password}}" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <h6>MarriageHall.com</h6>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('\morebooking',$data->cid)}}">More Booking</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Logout</a>
                        </li>
                    </ul>
                </form>
            </div>
        </nav>
        <div class="dashboard  mt-5 pt-5 mb-5 pb-5">
            <div class="container mt-5 pb-5">
                <h4 class="text-center text-light">MARRIAGEHALL.COM</h4>
                <h5 class="text-center text-danger mb-5">({{$data->customername}})</h4>

                <div class="row text-center mt-5 p-5 border border-success">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 p-4">
                        
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 p-4">
                       <h5 class="text-light "> Total Hall: {{$fetch->count()}} </h5>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4  p-4">
                        
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="halls bg-light">
        <div class="section mb-5 pb-5 mt-5 pt-5" id="myhall">
            <h4 class="text-center text-primary">MY Bookings</h4>
            <div class="ownerdata m-5 pl-5 pr-5">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Hall Name</th>
                            <th scope="col">Hall Address</th>
                            <th scope="col">Hall Type</th>
                            <th scope="col">Booking</th>
                            <th scope="col">Payment</th>
                            <th scope="col">Cancel</th>
                            <th scope="col">Feedback</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $fetch as $info)
                            <tr>
                                <th>{{$info->hallname}}</th>
                                <td>{{$info->halladdress}}</td>
                                <td>
                                    @if($info->halltype=="1")
                                        <h6>Marriage Hall</h4>
                                    @elseif($info->halltype=="2")
                                        <h6>Party Hall</h4>
                                    @elseif($info->halltype=="3")
                                        <h6>Open Hall</h4>
                                    @endif
                                </td>
                                <td>
                                    @if($info->booking=="0")
                                        <h6 class="text-warning">Panding</h4>
                                    @elseif($info->booking=="1")
                                        <h6 class="text-success">Accept</h4>
                                    @elseif($info->booking=="2")
                                        <h6 class="text-danger">Reject</h4>
                                    @endif
                                </td>
                                <td>
                                    @if($info->status == '0')
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"> Payment </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark" id="exampleModalLabel">Easypaisa Cash</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{url('\cashamount',$info->cbid)}}" method="post">
                                                    @csrf
                                                        <div class="row p-3">
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                                                <input type="text" name="username" placeholder="Username" id="" class="form-control">
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                                                <input type="text" name="mobileno" placeholder="Mobile No" id="" class="form-control">
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                                                                <input type="text" name="amount" value="{{$info->amount}}" id="" class="form-control">
                                                            </div>
                                                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4">
                                                                <input type="submit" value="Proceed" class="bg-success text-light form-control">
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                                <div class="modal-footer text-center">
                                                    <h4 class="text-dark">MarraigeHall.com</h4>
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($info->status == '1')
                                        <i class="fa fa-check-circle-o text-success" aria-hidden="true"> Paid </i> 
                                    @endif
                                </td>
                                <td>
                                    @if($info->status == '0')
                                        <a href="{{url('\delbooking',$info->cbid)}}"class="btn btn-danger"> Booking Cancel</a>
                                    @elseif($info->status == '1')
                                        <a href=""class="btn btn-danger disabled"> Booking Cancel</a>
                                    @endif
                                </td>
                                <td>
                                    @if($info->booking == '1' && $info->status == '1' && $info->rating == 'n/a' )
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Feedback">
                                        Feedback
                                    </button>

                                    <!-- Modal -->
                                        <div class="modal fade" id="Feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Feedback</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="rating" action="{{url('\rating',$info->cbid)}}" method="post">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <textarea style="height:105px" class="w-500" placeholder="Add Comment Here" name="feedback" id="" cols="30" rows="10"></textarea>
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <input class="star star-5" id="star-5" type="radio" value="5" name="star"/>
                                                                <label class="star star-5" for="star-5"></label>
                                                                <input class="star star-4" id="star-4" type="radio" value="4" name="star"/>
                                                                <label class="star star-4" for="star-4"></label>
                                                                <input class="star star-3" id="star-3" type="radio" value="3" name="star"/>
                                                                <label class="star star-3" for="star-3"></label>
                                                                <input class="star star-2" id="star-2" type="radio" value="2" name="star"/>
                                                                <label class="star star-2" for="star-2"></label>
                                                                <input class="star star-1" id="star-1" type="radio" value="1" name="star"/>
                                                                <label class="star star-1" for="star-1"></label>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <input type="submit" value="Add" class="btn btn-success form-Control bg-success">
                                                        </div>
                                                        
                                                    </form>
                                                </div>
                                                
                                                </div>
                                            </div>
                                        </div>
                                    @elseif($info->rating >= '0' && $info->rating != 'n/a' )
                                        Feedback Done
                                    @endif
                                </td>
                            </tr>
                        @endforeach 
                        
                    </tbody>
                </table>
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
    
</body>
<script>

</script>
</html>