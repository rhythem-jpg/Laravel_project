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
                 
                     
                 @foreach($data as $data)
                 
                 <form action="{{url('/addcart',$data->id)}}" method="post">
                     
                     @csrf
                     
                     <div class="item">
                      
<div class='card'>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/foodimage/{{$data->image}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">{{$data->price}}$</h5>
    <h5 class="card-text">{{$data->title}}</h5>
        <p class="card-text">{{$data->description}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    
    <input type="number" name="quantity" min="1" value="1" class="form-control">
    <input type="submit" value="add cart">
  </div>
</div>
 





</div>

</form>

                        
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