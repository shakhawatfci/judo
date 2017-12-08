<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<style type="text/css">
		
		.margin{
              
              margin-top: 10px;

		}
	</style>
</head>
<body>
     <div class="container">
     	
     	<div class="row">
     		<div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
     				<div class="form-group">
     				<button id="add_input" class="btn btn-primary">Add new</button>
     			</div>
     			<form action="" method="post">
     			<p>Enter Product Name</p>
     			<div class="form-group">
     				<input type="text" name="name[]" class="form-control" placeholder="Your name">
     			</div>
     				<div  id="dynamic">
     			
     					<!-- <input type="text" name="name[]" class="form-control"> -->
     				</div>	
     				<div class="form-group">
     			
     					<input type="submit" name="sb" class="btn btn-success" value="Save">
     				</div>
     			</form>
     			<?php

                    if(isset($_POST['sb'])){

                    	$name = $_POST['name'];

                    	foreach ($name as  $value) {
                    		
                    		echo $value."<br>";
                    	}

                    }

     			 ?>
     		</div>
     	</div>
     	<script type="text/javascript">
     		$(document).ready(function(){
               
               var i =1;

               $('#add_input').click(function(){
                 
                 i++;
                 $('#dynamic').append('<div class="form-group" id="row'+i+'"><input type="text" name="name[]" class="form-control" placeholder="Your name"><button type="button" class="btn btn-danger btn_remove" id="'+i+'">X</button></div>');


                
               });

                         $(document).on('click', '.btn_remove', function(){
                          var button_id = $(this).attr("id");
                     $('#row'+button_id+'').remove();
                               });

     		});

    
     	</script>
     </div>
     
</body>
</html>