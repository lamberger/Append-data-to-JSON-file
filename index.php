<?php include_once 'addToJson.php'; ?>
<?php include_once 'parseJson.php'; ?>
<!DOCTYPE html>  
 <html>  
    <head>  
	<title>Save to JSON file using PHP</title>  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script></head>  
    <body>  
        <div class="container">  
    		<div class="row">
    		<div class="col-md-4">
            	<h3 align="">Append Data to JSON file</h3><br />                 
                	<form method="post">  
                    	<?php   
                        	if(isset($error))  
                         	{  
                            	echo $error;  
                        	}  
                        ?>  
                        <br />  
                        <label>Name</label>  
                        <input type="text" name="name" class="form-control" /><br />  
                        <label>Email</label>  
                        <input type="text" name="email" class="form-control" /><br />   
                    	<input type="submit" name="submit" value="Add to json file" class="btn btn-info" /><br /><br />                      
                	</form> 
    		</div>
    		<div class="col-md-8">
    			<h3>Results of reading JSON data file</h3>
    			<?php
    				foreach($jObject as $obj){
    					echo '<strong>Name: </strong>' . $obj->name . '<br /><strong> Email: </strong>' . $obj->email. '<hr />';
    				}
    			?>
    		</div>
    		</div> 
        </div>  
    </body>  
 </html>  