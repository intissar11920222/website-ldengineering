<?php include 'includes/head.php'; ?>
	
    <body data-spy="scroll" data-offset="80">

		<!-- START PRELOADER -->
        <?php include 'includes/preloader.php'; ?>
		<!-- END PRELOADER -->
		
		<!-- START NAVBAR -->
        <?php include 'includes/navbar.php'; ?>
		<!-- END NAVBAR -->	
		
		<!-- START HOME Slider -->
	
	
<?php

function isIphone($user_agent=NULL) {
    if(!isset($user_agent)) {
        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
    }
    return (strpos($user_agent, 'iPhone') !== FALSE);
}

if(isIphone()) {
 include 'includes/slider_iphone.php';

}
else{
 include 'includes/slider.php'; 
}


?>
	

		<!-- START ABOUT US -->
       <?php include 'includes/about-us.php'; ?>
		<!-- END ABOUT US -->
                
		<!-- START WHY CHOOSE US -->
       <?php include 'includes/why-us.php'; ?>
		<!-- END WHY CHOOSE US -->
		
		<!-- START SERVICE  -->
       <?php include 'includes/services.php'; ?>
		<!-- END SERVICE-->	

                <!-- START IP - 14/05/2018  ---->

            <?php /*include 'includes/intervention-plan.php'; */ ?>

		<!-- END IP -->	
		
		
		<!-- START OUR TEAM -->
		<?php include('includes/team.php') ; ?>
		<!-- END TEAM -->		
		
		<!-- START COMPANY PARTNER LOGO  -->
                <?php include 'includes/partners.php'; ?>
		<!-- END COMPANY PARTNER LOGO -->

		
		<!-- PROMOTION -->
                <?php include 'includes/promo.php'; ?>
		<!-- END PROMOTION -->
		
	

		
		<!-- START FOOTER -->
                <?php include 'includes/footer.php'; ?>
		<!-- END FOOTER -->						 

		 		 
                <?php include 'includes/body-scripts.php'; ?>


<!-------------------------------------------------------------------->
    </body>
</html>