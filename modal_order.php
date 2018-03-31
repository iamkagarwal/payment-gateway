<?php 

if(isset($_GET['id']) && $_GET['id'] == 100){

    $prd_name = "Jeans Mens #100";
	$price = 1500;
 } 
 	 else {

 	echo "No such a prodcut to purchase :(";
 	exit();
 }

 ?>



<div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">X</button>
      <h1>Your payment details</h1>
    </div>
    <div class="modal-body">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          Buy <?php echo $prd_name; ?>
        </div>
        <div class="panel-body">
            
            <form action="pay.php" method="POST" accept-charset="utf-8">
	
		<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
		<input type="hidden" name="product_price" value="<?php echo $price; ?>"> 

		<div class="form-group">
    	<label>Your Name</label>
   		<input type="text" class="form-control" name="name" placeholder="Enter your name" required>	 <br/>
		</div>

		<div class="form-group">
    	<label>Your Phone</label>
   		<input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required> <br/>
		</div>


		<div class="form-group">
    	<label>Your Email</label>
   		<input type="email" class="form-control" name="email" placeholder="Enter you email" required> <br/>
		</div>

	  
		<input type="submit" class="btn btn-success btn-lg" value="Click here to Pay Rs:<?php echo $price; ?> ">

		 </form>
        </div>
      </div>
      <div class="modal-footer">
        <div class="panel-footer">
          
          
        </div>
      </div>
    </div>