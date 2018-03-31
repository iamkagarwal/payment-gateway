
<!DOCTYPE html>
<html lang="en">
  <head>
     <link type="text/css" rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <style>
.footer {
   
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: white;
   text-align: center;
}
</style>

    <title>Payment Mojo Demo Only</title>


  </head>

  <body>

    <div class="container">

      <div class="page-header">
        <h1><a href="index.php">Instamojo Payment</a></h1>
        <p class="lead">A test payment integration for instamojo payment gateway. Written in PHP</p>
      </div>

      <h3>Details</h3>
  
<div class="col-md-4">
<img src="hmprod.jpg" width="300"  class="img-rounded">
<h4> Jeans Mens </h4>
<h6> Price: 1500</h6>
<h5> ID: 100</h5>
    <a href="modal_order.php?id=100" data-toggle="modal" data-target="#myModal" class="btn btn-success">Buy Now</a>

</div>



      
    </div> 
<div id="myModal" role="dialog" class="modal fade text-center">
    <div class="modal-dialog">
      <div class="modal-content">
      </div>
    </div>
  </div>
      <div class="footer">
  <p>Footer</p>
</div>
      

  </body>
</html>
