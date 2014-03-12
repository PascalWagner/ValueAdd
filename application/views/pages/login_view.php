<?php // echo validation_errors(); ?>
   <?php echo form_open('Verifylogin_Controller'); ?>
<div class="container">

	<section id="typography"> 
            <div class="centerregistration">
                <div class="registrationleftcolumn box">
                    <h3>Welcome to Needzilla</h3>
                    <p>Start a conversation, explore your interests, help your network. </p>
                </div>             
                <div class="registrationrightcolumn">
                    <div class="signinbox box">
                        <form id='login' method='post' accept-charset='UTF-8' action="index.php/Home_Controller/index" class="form-horizontal">                            
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                          <div class="control-group">
                            <div class="controls">
                              <input type="text" size="20" class="signinoptinboxemail" id="email" name="email" placeholder="Email" />
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <input type="password" size="20" id="passowrd" name="password" class="signinoptinboxpass" placeholder="Password"/>
                            </div>
                          </div>
                            <div class="remembermeandsignin">  
                                <div class="control-group">
                                    <div class="controls">
                                      <label class="checkbox rememberme">
                                        <input type="checkbox"> Remember me
                                      </label>
                                        <input class="btn signinbutton" type="submit" value="Login"/>
                                        <p class="forgotpass">Forgot your password?</p>
                                    </div>
                                  </div>
                            </div>
                        </form>
                    </div>
                    <div class="registerbox box">
                        <h3>New to Needzilla? Sign up!</h3>
                        <form action="index.php/Home_Controller/index" class="form-horizontal">
                          <div class="control-group">
                            <div class="controls">
                              <input type="text" id="inputFullname" class="signinoptinboxemail" placeholder="Full name">
                            </div>
                          </div>
                            <div class="control-group">
                            <div class="controls">
                                 <input type="text" size="20" id="email" name="email"class=" signinoptinboxemail" placeholder="Email"/>
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <input type="password" size="20" id="passowrd" name="password" class="signinoptinboxemail" placeholder="Password"/>
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <input type="submit" value="Login" class="btn signupbutton"/>
                            </div>
                          </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
</div>