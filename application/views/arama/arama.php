<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ekşi sözlük arama xml api v1.00</title>


<link href="<?php echo site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo site_url('assets/css/brain-theme.css'); ?>" rel="stylesheet" type="text/css">
<link href="<?php echo site_url('assets/css/styles.css'); ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Cuprum&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>


</head>

<body>

    <!-- Navbar -->
    



    <!-- Page container -->
    <div class="page-container full-width" style="padding-left: 2%; padding-right: 2%">
    	
    	
        <div class="page-content">
	
	
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h6 class="panel-title">ekşi sözlük arama xml api v1.00</h6>
				</div>
				<div class="panel-body">
					<?php echo form_open_multipart(site_url('home/arama/'), array('class' => 'form-horizontal')); ?>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">kime baktın: </label>
						<div class="col-sm-10">
							<?php $data = array('name' => 'kelime', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'buraya yazman gerektiğini bence anlamışsındır...'); echo form_input($data); ?>
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-sm-12">
							<button class="btn btn-info pull-right" type="submit"><i class="fa fa-check" ></i> gönder gelsin</button>
						</div>
					</div>	
					<?php echo form_close(); ?>

				</div>
				
			</div>
		</div>
	</div>
			

       

    </div>
</div>

</body>
</html>


