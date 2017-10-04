
<html>
        <head>
                <title>CodeIgniter Tutorial</title>

  				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">







  			<link rel="stylesheet" type="text/css" href="/CI/CSS/style.css">

        </head>
        <body>
 
                <h1>Crud</h1>
                <p><a href="<?php echo site_url('blogs'); ?>">Home</a> | <a href="<?php echo site_url('blogs/create'); ?>">Add blogs</a></p>
                <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
      			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
			    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			    <?php if( $this->session->flashdata('success')) 
			    {?>
			    <div class="alert alert-success">
			    	<a href="#" class="close" data-dismiss='alert'>
			    		&times;
			    	</a>
			    	<strong>Success!</strong> <?php echo $this->session->flashdata('success');?>

			    </div>	
			    
			   <?php } ?>
			   
