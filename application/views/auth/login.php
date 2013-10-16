  			  <?php if (! empty($message)) { ?>
  			    <div id="messages">
  				  <?php echo $message; ?>
  			    </div>
  			  <?php } ?>
		      </div>
          <div class="row-fluid">
            <div class="span6">
              <div class="well">
                <h2>Login</h2>
                <form method="POST" action="<?= base_url(); ?>auth/login/">
                  <label for="identity">Email or Username:</label>
                  <input type="text" id="identity" name="login_identity" value="<?= set_value('login_identity', ''); ?>" />
                  <label for="password">Password:</label>
                  <input type="password" id="password" name="login_password" value="<?= set_value('login_password', ''); ?>" />
                  <?php
                    if (isset($captcha)) {
                      echo $captcha;
                    }
                  ?>
                  <label for="remember_me">Remember Me:</label>
                  <input type="checkbox" id="remember_me" name="remember_me" value="1" <?= set_checkbox('remember_me', 1); ?> />
                  <input type="submit" name="login_user" id="submit" value="Submit" class="btn btn-primary" data-loading-text="Loggin in..." />
                </form>
                <ul>
                  <li><a href="<?= base_url(); ?>auth/forgotten_password">Reset Forgotten Password</a></li>
                  <li><a href="<?= base_url(); ?>auth/resend_activation_token">Resend Account Activation Token</a></li>
                </ul>
              </div>
            </div>
            <div class="span6">
              <div class="well">
                <h2>New Users</h2>
                <p>New users can register for an account <a href="<?= base_url(); ?>auth/register/">here</a>.</p>
                <p>Alternatively select the Login with Facebook option below</p>
                <!-- Facebook Connect will go here -->
              </div>
            </div>
          </div>