<?php   
    if($this->session->userdata('logged_in'))
       { 
?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<header id="header" class="navbar navbar-fixed-top">
	<div class="container">
		
                         <div class="navbar">
			<?php echo $nav?>
		</div>            
                             
	</div>
</header>
<?php 

       } 
       
       else {
?>
    <header id="header" class="navbar navbar-fixed-top">
	<div class="container"></div>
    </header>
<?php  } ?>
