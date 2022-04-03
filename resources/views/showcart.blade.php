<!DOCTYPE html>
<html lang="en">

  <head>

  	<base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/js/bootstrap-notify.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.css">
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">




<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <!-- <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css"> -->

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    
    <body>


    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->



    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">

                                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                      <li>
                          
                        <x-app-layout>

                        </x-app-layout>

                      </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>

                        @if (Route::has('register'))
                          <li>  <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif


                        </ul>        


                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


<div  id="top" style="overflow-x: hidden;">


    <table align="center" bgcolor="yellow">
    	

    	<tr>
    		<th style="padding: 30px;">Food Name</th>
    		<th style="padding: 30px;">Price</th>
    		<th style="padding: 30px;">Quantity</th>
    		<th style="padding: 30px;">Action</th>
    		
    	</tr>



   <form action="{{url('orderconfirm')}}" method="POST" >

    @csrf

@foreach($data as $data)


    	<tr align="center">

    		<td>

        <input type="text" name="foodname[]" value="{{$data->title}}" hidden="">
                {{$data->title}}
            </td>

    		<td>
                 <input type="text" name="price[]" value="{{$data->price}}" hidden="">
                {{$data->price}}

            </td>
             <input type="text" name="quantity[]" value="{{$data->quantity}}" hidden="">
            
    		<td>{{$data->quantity}}</td>

            
    		
    	</tr>

 @endforeach


         @foreach($data2 as $data2)


            <tr style="position: relative; top: -80px; left:360px;">

             <td>
                 <a class="btn btn-warning" href="{{url('/remove',$data2->id)}}" >Remove</a>
             </td>

            </tr>

        @endforeach




</table>


<div align="center" style="padding: 10px;">
    
<button class="btn btn-primary" type="button" id="order">Order Now</button>

</div>




<div id="appear" align="center" style="padding: 10px; display: none;">


    <div style="padding: 10px;">
        <label>Name</label>
        <input type="text" name="name" placeholder="Name">
    </div>

    <div style="padding: 10px;">
        <label>Phone</label>
        <input type="number" name="phone" placeholder="Phone Number">
    </div>
    
    <div style="padding: 10px;">
        <label>Address</label>
        <input type="text" name="address" placeholder="Address">
    </div>


    <div style="padding: 10px;">
       
        <input class="btn btn-success" type="submit" value="Order Confirm">

        <button id="close" type="button" class="btn btn-danger">Close</button>
    </div>
    

</div>

</form>










        










</div>


    <script type="text/javascript">
        
        $("#order").click(

            function()
            {
                $("#appear").show();

            }
            );




        $("#close").click(

            function()
            {
                $("#appear").hide();

            }
            );



    </script>




        <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>



   


  </body>
</html>