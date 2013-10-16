  			  <?php if (! empty($message)) { ?>
  			    <div id="messages">
  				  <?php echo $message; ?>
  			    </div>
  			  <?php } ?>
		      </div>
          <div class="row-fluid">
            <div class="span8">
              <div class="well">
                <h2>User Registration</h2>
                <form method="POST" action="<?= base_url(); ?>auth/register/">
                  <label for="user_username">Email:</label>
                  <input type="text" id="user_email" name="login_user_email" value="<?= set_value('user_email', ''); ?>" />
                  <label for="user_username">Username:</label>
                  <input type="text" id="user_username" name="login_user_username" value="<?= set_value('user_username', ''); ?>" />
                  <?php
                    if (isset($captcha)) {
                      echo $captcha;
                    }
                  ?>
                  <input type="submit" name="register_user" id="submit" value="Submit" class="btn btn-primary" data-loading-text="Registering..." />
                </form>
              </div>
            </div>
            <div class="span4">
              <div class="well">
                
              </div>
            </div>
          </div>