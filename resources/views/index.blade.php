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
    <title>MarriageHall</title>
</head>
<style>
    .header
    {
        background-image: url('https://www.dulhaniyaa.com/assets/blogs/images/69455559fcbdabcf8edfd055b841c93a.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    .CBn
    {
        background-color: hsla(120, 60%, 70%, 0.3);
    }
    .CBG
    {
        background-color: rgb(192,192,192,0.1)
    }
    .register:hover
    {
        background-color: red;
        color:white;
    }

    .halltab, .servicetab, .abouttab
    {
        font-fmaily: Brush Script MT;
    }

    .clienttab
    {
        background-image: url('https://images.unsplash.com/photo-1521727284875-14f6b020d1d6?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8d2VkZGluZyUyMHZlbnVlfGVufDB8fDB8&ixlib=rb-1.2.1&w=1000&q=80');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .servicetab
    {
        background-image: url('https://media.istockphoto.com/photos/wedding-hall-or-other-function-facility-set-for-fine-dining-picture-id584573082?k=6&m=584573082&s=612x612&w=0&h=GzGoDJl_EpS3yrLkASJ5nIgUuHE6tlsqYICCIOFF58s=');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .halltab
    {
        background-image: url('https://static8.depositphotos.com/1010263/1023/i/600/depositphotos_10230948-stock-photo-wedding-hall.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .parttab
    {
        background-image: url('https://fullhdpictures.com/wp-content/uploads/2016/12/Business-Partners.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }


    .register :hover
    {
        
        color: white;
    }

    
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
<body>
    <div class="header pb-3">
        <nav class="navbar navbar-expand-lg navbar-light CBN">
            <a class="navbar-brand ml-5 text-danger" style = "font-family:Brush Script MT; font-size: 28px; color: red" href="#"><b>Marriage Hall</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#HALLs">Hall</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#about">About</a>
                </li>
                
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="/registerhall" class=" register text-danger  p-2 pl-3 pr-3 rounded"><b>Register as Hall</b></a>
                    <a class="nav-link mr-5 text-danger" href="/login"><b>LOGIN</b></a>
                </form>
            </div>
        </nav>
        <div class="jumbotron jumbotron-fluid CBG">
            <div class="container pt-5">
                <h1 class="display-4 text-primary pt-5"> <b> Memorable events. </b></h1>
                <h1 class="display-4 text-primary pb-5"> <b> Start here </b></h1>
                
                <button class="button"><span> <a href="registerhall" class="text-light"><b>Register as Hall</b></a> </span></button>
            
            </div>
        </div>
    </div>
    <div class="halltab" id="HALLs">
        <div class="events mt-5 pt-3 p-2">
            <h1 class=" text-center text-light" style = "font-family:Brush Script MT;">Halls</h3>
            <div class="row mt-5 p-5">
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="{{url('\marriagehall',1)}}">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://acenews.pk/wp-content/uploads/2019/03/Karachi-marriage-halls.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">MARRIAGE HALL</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="{{url('\marriagehall',3)}}">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://i1.wp.com/bookirea.com/blog/wp-content/uploads/2019/11/53075091_1468982486571271_4535543322080444416_o.jpg?resize=696%2C522&is-pending-load=1" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">OPEN HALL</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="{{url('\marriagehall',2)}}">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://www.shapewedding.com/business_images/small/jpueyhcbgbyosmziwegq_ziv.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">PARTY LAWN</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="servicetab">
        <div class="services" id="services">
            <h1 class="text-center text-light mt-5 pt-3 p-2" style = "font-family:Brush Script MT;">Our Services</h3>
            <div class="row mt-5 p-5">
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="/eventcaterers">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://www.buttcaterers.com/wp-content/uploads/2019/12/caterers.jpg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">EVENTS CATERERS</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="/floristdeco">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://5.imimg.com/data5/WZ/WX/AJ/ANDROID-46777112/product-jpeg-500x500.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">FLORIST DECORATORS</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4">
                    <a href="/carrental">
                        <div class="card" style="width: 20rem;">
                            <img class="card-img-top" src="https://cdn.citymapia.com/kottayam/luxury-wedding-cars/18092/Portfolio.jpg?biz=3047" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text text-center text-warning">CAR RENTALS</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="clienttab bg- text-light mt-5 pt-5 pb-5">
        <div class="about" id="#">
            <h1 class="text-center text-light mt-5 pt-3 p-2" style = "font-family:Brush Script MT;"> Our Client</h3>
            <div class="row ml-5">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 p-5">
                <div id="carouselExampleIndicators" class="arousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 500px;" class="d-block rounded-circle " src="https://www.itnonline.com/sites/default/files/styles/content_large/public/GettyImages-1213300831.jpg?itok=Ecq33cyI" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Fatime Zehir</h5>
                                    <p class="text-left">Imperssive</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="width: 500px;" class="d-block rounded-circle" src="https://images.squarespace-cdn.com/content/v1/5b99d4954eddec512b7d53f2/1556681371716-XL7W5H3SMOAYLCFT750H/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/AsemaHassan.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Sidra Osama</h5>
                                    <p class="text-left">Amazing Service</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="width: 500px;" class="d-block rounded-circle" src="https://t4.ftcdn.net/jpg/03/75/36/59/360_F_375365965_N5cerE41U9b5pi5w8Rc7iqZoGFFE7yeK.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Sheik Abdul Reheman</h5>
                                    <p class="text-left">Nice Services and Great Work</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 p-5">
                    <div id="carouselExampleIndicators" class="arousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img style="width: 500px;" class="d-block rounded-circle " src="https://www.itnonline.com/sites/default/files/styles/content_large/public/GettyImages-1213300831.jpg?itok=Ecq33cyI" alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Fatime Zehir</h5>
                                    <p class="text-left">Imperssive</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="width: 500px;" class="d-block rounded-circle" src="https://images.squarespace-cdn.com/content/v1/5b99d4954eddec512b7d53f2/1556681371716-XL7W5H3SMOAYLCFT750H/ke17ZwdGBToddI8pDm48kHH9S2ID7_bpupQnTdrPcoF7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z4YTzHvnKhyp6Da-NYroOW3ZGjoBKy3azqku80C789l0nQwvinDXPV4EYh2MRzm-RRB5rUELEv7EY2n0AZOrEupxpSyqbqKSgmzcCPWV5WMiQ/AsemaHassan.jpg" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Sidra Osama</h5>
                                    <p class="text-left">Amazing Service</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img style="width: 500px;" class="d-block rounded-circle" src="https://t4.ftcdn.net/jpg/03/75/36/59/360_F_375365965_N5cerE41U9b5pi5w8Rc7iqZoGFFE7yeK.jpg" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h3 class="text-left">Sheik Abdul Reheman</h5>
                                    <p class="text-left">Nice Services and Great Work</p>
                                    <div class="ratig text-left">
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                        <span class="text-left text-warning fa fa-star checked"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="abouttab bg-dark text-light mt-5 pt-5">
        <div class="about" id="about">
            <h1 class="text-center text-light mt-5 pt-3 p-2" style = "font-family:Brush Script MT;"> MarriageHall.com</h3>
            <div class="text-center mt-5">
                <h5 style = "font-family:Copperplate;">MarriageHall.com is Pakistan's innovative venue booking portal where you can browse and <br>

                    compare hundreds of venues, explore their facilities, check their prices and <br>

                    availability, and even book them through only a few clicks</h4>
            </div>

            <div class="contact text-center ml-5  pb-5 mt-5">
                <div class="row ml-5 pl-5 pb-5">
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4 ml-5 pl-5">
                        <i class="fa fa-phone ml-5 pl-5 fa-1x text-success" aria-hidden="true">  +92 3111 222 723</i>
                    </div>
                    <div class="col-sl-4 col-md-4 col-lg-4 col-xl-4 ml-5 pl-5">
                        <i class="fa fa-envelope ml-5 pl-5 fa-1x text-success" aria-hidden="true"> info@Marrigehall.com</i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parttab bg-dark text-light mt-5 pt-5 pb-5">
        <div class="about" id="#">
            <h1 class="text-center text-light mt-5 pt-3 p-2" style = "font-family:Brush Script MT;"> Group Patners</h3>
            <div class="text-center mt-5">
                <img class="rounded-circle p-3" style="width: 100px;" src="https://1000logos.net/wp-content/uploads/2017/05/Pepsi-Logo.png" alt="">
                <img class="rounded-circle p-3" style="width: 100px;" src="https://seeklogo.com/images/M/Mountain_Dew-logo-8600FA5EBA-seeklogo.com.jpg" alt="">
                <img class="p-3" style="width: 200px;" src="https://static.pakwheels.com/2016/09/PakWheels-Logo-Blue-Tagline.png" alt="">
                <img class="rounded-circle p-3" style="width: 90px;" src="https://seeklogo.com/images/C/coca-cola-circle-logo-A9EBD3B00A-seeklogo.com.png" alt="">
                <img class="rounded-circle p-3" style="width: 90px;" src="https://play-lh.googleusercontent.com/qldXZOa6z80s3___bXbpsBgXzr6KJeHTK9M-IOy6hwATHAa6QBrl6qWRj7wWzha_F_o" alt="">
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