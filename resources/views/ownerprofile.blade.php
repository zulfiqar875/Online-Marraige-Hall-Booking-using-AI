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
    <title>RegisgterHAll</title>
</head>
<style>

</style>
<body class="bg-dark">
    <a href="/back"><i class="fa fa-arrow-left fa-1x text-light mt-2 ml-5" aria-hidden="true"> Back</i></a>
    <div class="comtainer-fluid m-5 p-5">
        
        <h3 class="text-light text-center ">PROFILE</h3>

        <div class="ownerimage text-center">
            <img class="rounded-circle mt-5" src="{{asset('Storage/'.$data->image)}}" alt="">
            
        </div>
        <div class="form-group mt-5">
            <form action="{{url('\updateowner',$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf 
                <h5 class="text-light">Personal Information <i class="fa fa-pencil-square-o" aria-hidden="true"></i></h3>
                <div class="row">
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Owner Name</label>
                        <input type="text" name="oname" value="{{$data->ownername}}" required class="form-control">
                    </div>
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Owner Father Name</label>
                        <input type="text" name="fname" value="{{$data->fathername}}" required class="form-control">
                    </div>
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Owner CNIC</label>
                        <input type="text" name="ocnic" value="{{$data->cnic}}" required class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Phone No</label>
                        <input type="text" name="ophone" value="{{$data->phone}}" required class="form-control">
                    </div>
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Email</label>
                        <input type="text" name="oemail" value="{{$data->email}}" required class="form-control">
                    </div>
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                        <label for="" class="text-light">Password</label>
                        <input type="text" name="opassword" value="{{$data->password}}" required class="form-control">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col text-center">
                        <input type="submit" value="Update" class="form-control">
                    </div>
                </div>

            </form>
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