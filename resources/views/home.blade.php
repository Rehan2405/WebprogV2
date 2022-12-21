@extends ('template')


@section('content','home')

@section('body')

<?php
    echo "<br>";
?>
<!-- <div class="title">
    <h1>Welcome To Rolling Dice</h1>
</div> -->
<style>
.button {
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
.title {
  margin: 0;
  position: absolute;
  top: 30%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  
}
body {
  background-image: url('https://rare-gallery.com/uploads/posts/1051416-sunlight-lights-water-minimalism-reflection-blue-simple-dots-dice-light-cloud-weather-hand-atmospheric-phenomenon-computer-wallpaper-atmosphere-of-earth-macro-photograp.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
}
.card{
  padding-left: ;
}

</style>


<div class="card text-center bg-transparent">
  <div class="card-header ">
    Featured
  </div>
  <div class="card-body">
    <h5 class="card-title"><h1>Welcome To Rolling Dice</h1></h5>
    <p class="card-text">Roll the dice with random 1-12 result!</p>
    <button onclick="myFunction()" class="btn btn-success btn-lg "><h5>Let's Roll</h5></button>
  </div>
</div>
    <h1 id="butn" class="text-center text-color-white"></h1>
    <script>
        function myFunction() {
        document.getElementById("butn").innerHTML = Math.floor(Math.random() *12) + 1;
        }
        
    </script>
    </div>
</div>
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
  <div class="toast-header">
    <img src="..." class="rounded me-2" alt="...">
    <strong class="me-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
  </div>
  <div class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>
@endsection


