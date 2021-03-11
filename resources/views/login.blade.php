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
    <title>login</title>
</head>

<style>
    .logo
    {
        width: 250px;
    }
    .login-btn :hover
    {
        background-color: black;

    }
</style>
<body class="bg-dark">

    <div class="container ">
        <a href="/"><i class="fa fa-arrow-left fa-1x text-light mt-2" aria-hidden="true"> Back</i></a>
        <div class="row">
            <div class="col-sl-6 col-md-6 col-lg-6 col-xl-6 mt-5 pt-5 text-center">
                <img class="logo" src="https://www.pngkit.com/png/full/249-2499175_banquet-clip-art-material-wedding-hall-icon-png.png" alt="">
            </div>
            <div class="col-sl-6 col-md-6 col-lg-6 col-xl-6">
                <div class="box  pt-5">
                    
                    <div class="box1 border mt-5 mb-5 pb-5 rounded pt-5 ml-5 mr-5 pl-5 pr-5">
                        <h3 class="text-light text-center">Login</h3>
                        <div class="form-group">
                            <form action="/portal" method="post">
                            @csrf
                                <div class="row">
                                    <div class="col-sl-12 col-md-12 col-lg-12 col-xl-12">
                                        <select name="user" id="" required class="form-control mt-3">
                                            <option value="" selected> Select Type </option>
                                            <option value="0"> Am Owner</option>
                                            <option value="1"> Am Client</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sl-12 col-md-12 col-lg-12 col-xl-12">
                                        <label class="text-light mt-3" for="">Username/Email</label>
                                        <input type="text" required name="username" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sl-12 col-md-12 col-lg-12 col-xl-12">
                                        <label class="text-light mt-3" for="">Password</label>
                                        <input type="password" required name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sl-3 col-md-3 col-lg-3 col-xl-3">
                                    </div>
                                    <div class="col-sl-6 col-md-6 col-lg-6 col-xl-6">
                                        <label class="text-light mt-3" for=""></label>
                                       <input type="submit" value="Login" class="form-control login-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
</html>