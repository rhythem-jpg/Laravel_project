 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/card.scss">
    <title>Document</title>

</head>
<body>








 <!-- ***** Menu Area Starts ***** -->
 <!-- <section class="section" id="menu">
     <div class="menu-item-carousel">
         <div class="col-lg-12">
             <div class="owl-menu-item owl-carousel"> -->
                 
                     
                 @foreach($data2 as $data2)
                 
                     
                     @csrf
                     
                     <div class="item">
                      
<div class='card'>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="chefimage/{{$data2->image}}"  alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$data2->name}}</h5>
    <h5 class="card-text">{{$data2->speciality}}</h5>
  </div>
</div>
 





</div>



                        
                    @endforeach
                    <br>
                    <br>





                    <!-- </div>
                </div>
            </div>
        </div>
    </section> -->
</div>
    <!-- ***** Menu Area Ends ***** -->
</body>
</html>
 <!-- ***** Chefs Area Starts ***** -->
