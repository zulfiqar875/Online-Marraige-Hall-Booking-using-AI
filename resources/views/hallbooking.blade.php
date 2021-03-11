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
    <title>Booking</title>
</head>
<body class="bg-dark">
    <a href="/back"><i class="fa fa-arrow-left fa-1x text-light mt-3 pl-3" aria-hidden="true"> Back</i></a>
    <div class="containter">
    <form action="{{url('\clientportal',[$book->OID,$cid])}}" method="post" class="text-light">
        @csrf
        <div class="header m-5 mt-5">
            <h3 class="text-left">Booking</h3>
            <div class="price text-right">
                <div class="row">
                    <div class="col-sm-3">
                        <b>HAll Price</b> <br>
                        <input id="" class=" text-success border-light " disabled type="text" value="{{$book->HallAmount}}">
                    </div>
                    <div class="col-sm-3">
                        <b>Food Price (PerHead)</b>
                        <input id="" class=" text-success border-light " disabled type="text" value="{{$book->FoodAmount}}"> 
                    </div>
                    <div class="col-sm-3">
                        <b>Total Price</b>
                        <input id="ACP" class=" text-success border-light " disabled type="text" value="{{$book->amount}}">
                    </div>
                    <div class="col-sm-3">
                        <b>Final Booking Price</b>
                        <input id="FBP" class=" text-success border-light " required   name="FBP"  type="text" value="{{$book->amount}}">
                    </div>
                </div>
            </div>
        </div>
        

            <div class="hallinfo ml-5 mr-5 mt-4">
                <h5>Hall infornation</h5>
                <div class="row mt-2 pr-3 pb-2 pl-3">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="hname" value="{{$book->Hallname}}"  class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="haddress" value="{{$book->Halladdress}}"  class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="htype" value="{{$book->Halltype}}"  class="form-control">
                    </div>
                </div>
                <div class="row mt-2 pr-3 pt-3 pl-3">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="hparking" value="{{$book->Hallparking}}"  class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="text" name="hcapacity" value="{{$book->Hallcapacity}}"  class="form-control">
                    </div>
                </div>

                <h5 class="mt-3">Dishes infornation</h5>
                <div class="row mt-2">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="row p-3 ">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish1" id="d1" value="" class="form-control">
                                    <option value="{{$book->Dish1}}" >{{$book->Dish1}}</option>
                                    <option value="Beef Korma"> Beef Korma</option>
                                    <option value="Mutton Korma"> Mutton Korma</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish2" id="d2" value="" class="form-control">
                                    <option value="{{$book->Dish2}}">{{$book->Dish2}}</option>
                                    <option value="Mutton Biryani"> Mutton Biryani</option>
                                    <option value="Beef Biryani"> Beef Biryani</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish3" id="d3" value="" class="form-control">
                                    <option value="{{$book->Dish3}}">{{$book->Dish3}}</option>
                                    <option value="Mutton Tikkia"> Mutton Tikkia</option>
                                    <option value="Chicken Roast"> Chicken Roast</option>
                                </select>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish4" id="d4" value="" class="form-control">
                                    <option value="{{$book->Dish4}}">{{$book->Dish4}}</option>
                                    <option value="Zarda Rice"> Zarda Rice</option>
                                    <option value="Gajar ka Halwa"> Gajar ka Halwa</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish5" id="d5" value="" class="form-control">
                                    <option value="{{$book->Dish5}}">{{$book->Dish5}}</option>
                                    <option value="Falooda"> Falooda</option>
                                    <option value="Doodh Dulari"> Doodh Dulari</option>
                                </select>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                                <select name="dish6" id="d6" value="" class="form-control">
                                    <option value="{{$book->Dish6}}">{{$book->Dish6}}</option>
                                    <option value="Soft Drinks"> Soft Drinks</option>
                                    <option value="Nestle\Soft Drinks"> Nestle\Soft Drinks</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <h5>Booking Date</h5>
                <div class="row mt-2 p-3 text-dark">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input type="date" required name="date" class="form-control">
                    </div>

                </div>



                <div class="row mt-4 pl-3 pt-2 pr-3 mb-5 pb-5">
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
                        <input class="btn btn-primary form-control" type="submit" value="Book">
                    </div>
                    
                </div>

            </div>
        </form>
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
      var total = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price);
      $("#FBP").val(total);
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
      var price2 = $('#ACP').val();
      var total2 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price2);
      $("#FBP").val(total2);
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
      var price3 = $('#ACP').val();
      var total3 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price3);
      $("#FBP").val(total3);
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
      var price4 = $('#ACP').val();
      var total4 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price4);
      $("#FBP").val(total4);
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

      var price5 = $('#ACP').val();
      var total5 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price5);
      $("#FBP").val(total5);
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
      var price6 = $('#ACP').val();
      var total6 = Number(val1) + Number(val2) + Number(val3) + Number(val4) + Number(val5) + Number(val6) + Number(price6);
      $("#FBP").val(total6);
    });

</script>
</html>
