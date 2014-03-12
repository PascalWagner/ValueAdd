<ul class="nav navbar-nav">
	<li class="<?php echo isActive($pageName,"home")?>"><img class="navicons" src='<?php echo base_url();?>/images/home.png' /><a href="<?php echo  base_url('Home_Controller')?>">HOME</a></li>
	<!--<li class="<?php echo isActive($pageName,"notifications")?>"><img class="navicons" src='<?php echo base_url();?>/images/notifications.png' /><a href="<?php echo  base_url()?>">NOTIFICATIONS</a></li>-->
	<li class="<?php echo isActive($pageName,"me")?>"><img class="navicons" src='<?php echo base_url();?>/images/user.png' /><a href="<?php echo  base_url('Me_Controller')?>">ME</a></li>
        <li class="navsetting"><img class="navicons" src='<?php echo base_url();?>/images/settings.png' /><a href="<?php echo  base_url('Settings_Controller')?>">SETTINGS</a></li>

        <!--<li><img class="navicons navsetting" src='<?php echo base_url();?>/images/settings.png' /></li>-->
</ul>


