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
<body class="bg-dark">
    <div class="navbarhead">
        <nav class="navbar navbar-expand-lg navbar-light bg-light pt-3 pb-3">
            <a class="navbar-brand" href="#"><b>{{$data->ownername}}</b></a>
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
                            <a class="nav-link" href="#myhall">My halls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('\profile',$data->id)}}">Profile</a>
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
                <h5 class="text-center text-danger mb-5">({{$data->ownername}})</h4>

                <div class="row text-center mt-5 pt-5">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 border border-success p-4">
                        <h5 class="text-light "> Total Hall: {{$fetch->count()}} </h5>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 border border-success p-4">
                        <h5 class="text-light "> Overall Rating: </h5>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 border border-success p-4">
                        <h5 class="text-light "> Total Client: {{$booking->count()}} </h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="halls bg-light">
        <div class="section mb-5 pb-5 mt-5 pt-5" id="myhall">
            <h4 class="text-center text-primary">MY HALLS</h4>
            <!-- Large modal -->
            <div class="addhall text-center mb-5">
                <button type="button" class="btn btn-primary tex-center" data-toggle="modal" data-target=".bd-example-modal-lg">Add new Hall</button>
            </div>

            <div class="ownerdata m-5 pl-5 pr-5">
                @foreach( $fetch as $info)
                    <div class="row ml-5 mr-5 pl-5 bg-dark p-3">
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 text-light">Hall Name: {{$info->Hallname}}</div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 text-light">Hall Address: {{$info->Halladdress}}</div>
                        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4 text-light">Hall Type:
                             @if($info->Halltype=="1")
                                Marriage Hall
                            @elseif($info->Halltype=="2")
                                Party Hall
                            @elseif($info->Halltype=="3")
                                Open Hall
                            @endif
                        </div>
                    </div>
                @endforeach 
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add new Hall</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <form action="{{url('\addhall',$data->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <h4 class="text-dark">Hall Information</h4>
                                    <div class="row mt-3">
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" required name="hname" placeholder="Hall Name" class="form-control">
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" required name="haddress" placeholder="Hall Address" class="form-control">   
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="htype" required id="" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Select Hall Type --</option>
                                                <option value="1"> Marriage Hall</option>
                                                <option value="2"> Party Hall</option>
                                                <option value="3"> Open Hall</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" required name="hcapacity" placeholder="Hall Capacity" class="form-control">
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" required name="hparking" placeholder="Hall Parking Capacity" class="form-control">   
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="text" required name="HR" id="HR" placeholder="Hall Rent" class="form-control">    
                                        </div>
                                    </div>

                                    <h4 class="text-dark mt-4">Food Information</h4>
                                    <div class="row mt-3">
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d1" required id="d1" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Dish1 --</option>
                                                <option value="Chicken Korma"> Chicken Korma</option>
                                                <option value="Beef Korma"> Beef Korma</option>
                                                <option value="Mutton Korma"> Mutton Korma</option>
                                            </select>
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d2" required id="d2" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Dish2 --</option>
                                                <option value="Chicken Biryani"> Chicken Biryani</option>
                                                <option value="Mutton Biryani"> Mutton Biryani</option>
                                                <option value="Beef Biryani"> Beef Biryani</option>
                                            </select>
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d3" required id="d3" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Dish3 --</option>
                                                <option value="Chicken Tikka"> Chicken Tikka </option>
                                                <option value="Mutton Tikkia"> Mutton Tikkia</option>
                                                <option value="Chicken Roast"> Chicken Roast</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d4" required id="d4" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Sweet Dish1 --</option>
                                                <option value="Kheer"> Kheer</option>
                                                <option value="Zarda Rice"> Zarda Rice</option>
                                                <option value="Gajar ka Halwa"> Gajar ka Halwa</option>
                                            </select>
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d5" required id="d5" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Sweet Dish2 --</option>
                                                <option value="Gulab jamun"> Gulab jamun</option>
                                                <option value="Falooda"> Falooda</option>
                                                <option value="Doodh Dulari"> Doodh Dulari</option>
                                            </select>
                                        </div>
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <select name="d6" required id="d6" placeholder="Hall type" class="form-control">
                                                <option value=""> -- Drinks --</option>
                                                <option value="Nestle Drinks"> Nestle Drinks</option>
                                                <option value="Soft Drinks"> Soft Drinks</option>
                                                <option value="Nestle Soft Drinks"> Nestle\Soft Drinks</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h4 class="text-dark mt-4">Hall Snaps</h4>
                                    <div class="row mt-3">
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Snap1</label>
                                            <input type="file" required name="file1" id="" placeholder="Upload File" class="form-control">    
                                        </div>
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Snap2</label>
                                            <input type="file" required name="file2" id="" placeholder="Upload File" class="form-control">
                                        </div>
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Snap3</label>
                                            <input type="file" required name="file3" id="" placeholder="Upload File" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Snap4</label>
                                            <input type="file" required name="file4" id="" placeholder="Upload File" class="form-control">    
                                        </div>
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Snap5</label>
                                            <input type="file" required name="file5" id="" placeholder="Upload File" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        
                                        <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for="">Food Amount (PerHead)</label>
                                            <input type="text" required name="FA" id="FA" placeholder="Food Amount"  class="form-control">
                                        </div>
                                        <div class="colcol-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <label for=""> Total Amount</label>
                                            <input type="text" required name="TA" id="TA" placeholder=" Total Amount"  class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="colcol-sl-4 col-md-4 col-lg-4 col-xl-4"></div>
                                        <div class="colcol-sl-4 col-md-4 col-lg-4 col-xl-4">
                                            <input type="submit" value="Add" class="form-control btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                </div>
            </div>

        </div>
    </div>

    <div class="halls bg-light">
        <div class="section mb-5 pb-5 mt-5 pt-5" id="myhall">
            <h4 class="text-center text-primary">Booking</h4>
            <!-- Large modal -->
            <div class="addhall text-center mb-5">
                <!-- <button type="button" class="btn btn-primary tex-center" data-toggle="modal" data-target=".bd-example-modal-lg">Add new Hall</button> -->
            </div>

            <div class="ownerdata m-5 pl-5 pr-5">
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Client Name</th>
                            <th scope="col">Hall Name</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Payement Status</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $booking as $book)
                            <tr>
                                @if($book->booking == '1')
                                    <th>{{$book->cid}}</th>
                                    <td>{{$book->halladdress}}</td>
                                    <td>{{$book->bookingdate}}</td>
                                    <td>
                                        @if($book->status == '0')
                                            <h6 class="text-warning">UnPaid</h5>
                                        @elseif($book->status == '1')
                                            <h6 class="text-success">Paid</h5>
                                        @endif
                                    </td>
                                    <td><a href="{{url('\clientprofile',[$book->cid,$book->cbid])}}" class="btn btn-primary">Detail</a></td>
                                @endif
                            </tr>
                        @endforeach 
                        
                    </tbody>
                </table>
            </div>

            
        </div>
    </div>

    <div class="halls bg-light">
        <div class="section mb-5 pb-5 mt-5 pt-5" id="myhall">
            <h4 class="text-center text-primary">New Clients</h4>
            <!-- Large modal -->
            <div class="addhall text-center mb-5">
                <!-- <button type="button" class="btn btn-primary tex-center" data-toggle="modal" data-target=".bd-example-modal-lg">Add new Hall</button> -->
            </div>

            <div class="ownerdata m-5 pl-5 pr-5">
            <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Client Name</th>
                            <th scope="col">Hall Name</th>
                            <th scope="col">Booking Date</th>
                            <th scope="col">Accept</th>
                            <th scope="col">Deny</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach( $booking as $book)
                            <tr>
                                @if($book->booking == '0')
                                    <th>{{$book->cid}}</th>
                                    <td>
                                        {{$book->halladdress}}
                                    </td>
                                    <td>{{$book->bookingdate}}</td>
                                    <td><a href="{{url('\accept',$book->cbid)}}" class="btn btn-success">Book</a></td>
                                    <td><a href="{{url('\reject',$book->cbid)}}" class="btn btn-danger">Reject</a></td>
                                    <td><a href="{{url('\clientprofile',[$book->cid,$book->cbid])}}" class="btn btn-primary">Detail</a></td>
                                @endif
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

<script type="text/javascript">

    $('#d1').change(function(){

        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }

      var price = $('#ACP').val();
      var total = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
      $("#FA").val(total);

      var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    $('#d2').change(function(){
        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }
      var total2 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
      $("#FA").val(total2);

      var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    $('#d3').change(function(){
        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }
    
      var total3 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
      $("#FA").val(total3);

      var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    $('#d4').change(function(){
        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }
      var total4 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
      $("#FA").val(total4);

      var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    $('#d5').change(function(){
        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }

  
      var total5 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
      $("#FA").val(total5);

      var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    $('#d6').change(function(){
        if ($('#d1').val() == 'Chicken Korma') 
        {
            var val1 = 1000;
        } else if ($('#d1').val() == 'Beef Korma') 
        {
            var val1 = 1500;
        } else if ($('#d1').val() == 'Mutton Korma') {
            var val1 = 2000;
        }

        if ($('#d2').val() == 'Chicken Biryani') 
        {
            var val2 = 1000;
        } else if ($('#d2').val() == 'Mutton Biryani') 
        {
            var val2 = 1500;
        } else if ($('#d2').val() == 'Beef Biryani') {
            var val2 = 2000;
        }

        if ($('#d3').val() == 'Chicken Tikka') 
        {
            var val3 = 1000;
        } else if ($('#d3').val() == 'Mutton Tikkia') 
        {
            var val3 = 1500;
        } else if ($('#d3').val() == 'Chicken Roast') {
            var val3 = 3000;
        }

        if ($('#d4').val() == 'Kheer') 
        {
            var val4 = 1000;
        } else if ($('#d4').val() == 'Zarda Rice') 
        {
            var val4 = 2000;
        } else if ($('#d4').val() == 'Gajar ka Halwa') {
            var val4 = 3000;
        }

        if ($('#d5').val() == 'Gulab jamun') 
        {
            var val5 = 1000;
        } else if ($('#d5').val() == 'Falooda') 
        {
            var val5 = 2000;
        } else if ($('#d5').val() == 'Doodh Dulari') {
            var val5 = 3000;
        }

        if ($('#d6').val() == 'Nestle Drinks') 
        {
            var val6 = 100;
        } else if ($('#d6').val() == 'Soft Drinks') 
        {
            var val6 = 150;
        } else if ($('#d6').val() == 'Nestle Soft Drinks') {
            var val6 = 250;
        }
        
        var total6 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6);
        $("#FA").val(total6);
        var HR = $('#HR').val();
        var TA = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(HR);
        $("#TA").val(TA);
    });

    

</script>
</html>