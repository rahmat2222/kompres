<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>Adapa</title>
    <link href="<?php echo base_url("assets/css/main.css");?> " type="text/css" rel="stylesheet"  />
    <link href="<?php echo base_url("assets/css/uikit.min.css"); ?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>" type="text/css" rel="stylesheet"/>
    <link href="<?php echo base_url("assets/fonts/css/font-awesome.min.css"); ?>" type="text/css" rel="stylesheet"/>
    <link href="http://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css" rel="stylesheet">

</head>
    
<body>
    <!--Header-->
<div class="header-menu">
    <div class="header-logo"><a href="<?php echo base_url();?>"> <img src="<?php echo base_url("assets/img/logo.jpg");?>" alt="Logo" id="logo"></a></div>
    <div class="header-slogan">Find the best place in Jabodetabek</div>
    <div class="header-tools">
        <?php if(!$this->session->userdata('logged_in')):?>
		<a href="<?php echo base_url();?>users/login"><i class="fa fa-user"></i> Masuk </a> |
		<a href="<?php echo base_url();?>users/register"><i class="fa fa-circle-o"></i> Daftar </a>
	<?php endif;?>
		
	<?php if($this->session->userdata('logged_in')):?>
		<a href="<?php echo base_url();?>home"><i class="fa fa-user"></i>
			<?php if($this->session->userdata('username')):?>
			<?php echo $this->session->userdata('username') ?>
			<?php endif;?>
		</a> |
		<a href="<?php echo base_url();?>users/logout">Logout</a>
	<?php endif;?>
    </div>
</div>
    <!--Main menu-->
<div class="main-menu">
    <ul>
        <li><a href="#Beach" id="main-menu">Beach</a></li>
        <li><a href="#Diving" id="main-menu">Diving</a></li>
        <li><a href="#Lake" id="main-menu">Lake</a></li>
        <li><a href="#Mountain" id="main-menu">Mountain</a></li>
        <li><a href="#Forest" id="main-menu">Forest</a></li>
        <li><a href="#Waterfall" id="main-menu">Waterfall</a></li>
        <li><a href="#City Tour" id="main-menu">City Tour</a></li>
    </ul>        
</div>
<div class="header-content">
    <div class="hc-background"></div>
    <div class="hc-caption">Find The Beautiful Place Nearest You...</div>
</div>
 
<div class="main-feature">
	<div class="im-layout">	
       <?php $this->load->view($main_view);?>
        
    </div>
</div>

<div class="main-content">
    <div class="im-content">
    <?php echo "Akan berisi kontent";?>
    </div>
</div>



<script type="text/javascript" src="<?php echo base_url();?>Assets/js/jquery-2.1.4.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>Assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>Assets/js/summernote.js"></script>
    <script>
        $(document).ready(function () {
            $('#kompres').summernote({
                height: 250,// set height for editor
            });
        });
    </script>
</body>
</html>