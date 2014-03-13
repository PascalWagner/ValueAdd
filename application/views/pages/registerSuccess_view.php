
<div class="centerbox">
    <p>Your registration was a success!</p>
    <p>Now signin below</p>
    <?php echo form_open('Verifylogin_Controller'); ?>
     <div class="signinbox box">
        <form id='login' method='post' accept-charset='UTF-8' action="../Home_Controller/index" class="form-horizontal">                            
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
         <?php echo form_close(); ?>
    </div>
</div>