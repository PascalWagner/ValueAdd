<div class="container">
	<section id="typography">   
                        <div class="row">
                    <div class="leftcolumn" >
                        <div class="profilebox">
                            <img class="profilepicture" src="https://pbs.twimg.com/profile_images/428630642579243008/M-EHHjhd.jpeg" ></img>
                            <h3 class="profilename"><?php echo $username['username']; ?>
                            </h3>
                            <a href="Logout_Controller/logout">Logout</a>
                                

                        </div>
                        
                        <div class="submitgoalbox box">
                            <div class="submitgoaltextarea">
                                <p>My goal is...<textarea class="submitgoaltextline"  rows="2" wrap="soft" maxlength="80"></textarea></p>
                                <p>I need...<textarea class="submitgoaltextline" rows="2" wrap="soft" maxlength="80"></textarea></p>
                            </div> 
                                           
                            <div class="submitgoalboxactions">
                                <button class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="rightcolumn box">
                        <div>
                            <h3 class="goalheader">Goals</h3>
                            <hr>
                        </div>
                          <?php
                            
                           $mysqli = new mysqli("localhost", "root", "root", "ValueAdd");
                           
                          $goalquery = "SELECT users_1.first_name, users_1.last_name, goals.goal, goals.need FROM Users_1
                            INNER JOIN Goals
                            ON users_1.user_id=goals.user_id";


                            if ($result = $mysqli->query($goalquery)) {

                                /* fetch associative array */
                                while ($row = $result->fetch_assoc()) {
                                    ?> 
                        
                        <div class="goal">
                            <img class="goalpicture" src="https://pbs.twimg.com/profile_images/428630642579243008/M-EHHjhd.jpeg" ></img>
                            <div class="goalname"><?php printf ($row["first_name"]); ?> <?php printf ($row["last_name"]); ?></div>
                            <div class="goaltext"> 
                                My goal is <?php printf ($row["goal"]); ?>. I need <?php printf ($row["need"]); ?>.
                            <div class="goalactionbar">
                                <div> <img height='12px' width='12px'src='http://upload.wikimedia.org/wikipedia/commons/thumb/3/36/WMF-Agora-Reply-000000.svg/120px-WMF-Agora-Reply-000000.svg.png' />      Help <?php printf ($row["first_name"]); ?></div>
                            </div>
                            
                        </div>
                            <hr class="goalhr">
                                <?php
                            }
                        }
                        /* close connection */
                        $mysqli->close();
                        ?>
                        </div>
                            
                            
                        
                        </div>
                    </div>
                </div>  
         
  
</section>
</div>

