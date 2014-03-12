<ul class="nav navbar-nav">
	<li class="<?php echo isActive($pageName,"home")?>"><img class="navicons" src='<?php echo base_url();?>/images/home.png' /><a href="<?php echo  base_url()?>">HOME</a></li>
	<li class="<?php echo isActive($pageName,"notifications")?>"><img class="navicons" src='<?php echo base_url();?>/images/notifications.png' /><a href="<?php echo  base_url()?>">NOTIFICATIONS</a></li>
	<li class="<?php echo isActive($pageName,"me")?>"><img class="navicons" src='<?php echo base_url();?>/images/user.png' /><a href="<?php echo  base_url()?>">ME</a></li>
        <li><img class="navicons navsetting" src='<?php echo base_url();?>/images/settings.png' /></li>
</ul>


