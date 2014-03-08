
<div class="container">

	<section id="typography"> 
            <div class="centerregistration">
                <div class="registrationleftcolumn box">
                    <h3>Welcome to Needzilla</h3>
                    <p>Start a conversation, explore your interests, help your network. </p>
                </div>             
                <div class="registrationrightcolumn">
                    <div class="signinbox box">
                        <form id='login' method='post' accept-charset='UTF-8' action="index.php/HomeController/index" class="form-horizontal">                            
                            <!--action=""-->
                            <input type='hidden' name='submitted' id='submitted' value='1'/>
                          <div class="control-group">
                            <div class="controls">
                              <input type="text" id="email" class="signinoptinboxemail" placeholder="Email">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <input type="password" id="password" class="signinoptinboxpass" placeholder="Password">
                            </div>
                          </div>
                            <div class="remembermeandsignin">  
                                <div class="control-group">
                                    <div class="controls">
                                      <label class="checkbox rememberme">
                                        <input type="checkbox"> Remember me
                                      </label>

                                      
                                        <input type='submit' class="btn signinbutton" name='Signin' value='Signin' />
                                       <p class="forgotpass">Forgot your password?</p>
                                    </div>
                                  </div>
                            </div>
                        </form>
                    </div>
                    <div class="registerbox box">
                        <h3>New to Needzilla? Sign up!</h3>
                        <form action="index.php/HomeController/index" class="form-horizontal">
                          <div class="control-group">
                            <div class="controls">
                              <input type="text" id="inputFullname" class="signinoptinboxemail" placeholder="Full name">
                            </div>
                          </div>
                            <div class="control-group">
                            <div class="controls">
                              <input type="text" id="inputEmail" class="signinoptinboxemail" placeholder="Email">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <input type="password" id="inputPassword" class="signinoptinboxemail" placeholder="Password">
                            </div>
                          </div>
                          <div class="control-group">
                            <div class="controls">
                              <button type="submit" class="btn signupbutton" action="home.php">Sign up for Needzilla</button>
                            </div>
                          </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </section>
</div>