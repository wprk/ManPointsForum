    <div class="container visible-desktop">
      <div class="row-fluid">
        <div class="span4">Site Logo Will Go Here</div>
        <div class="span8">This is where the silohettes of PUA's will go</div>
      </div>
    </div>
    <div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="/">ManPointsForum</a>
          <div class="nav-collapse collapse">
            <?php if ($this->flexi_auth->is_logged_in()) { ?>
            <ul class="nav pull-right">
              <li<?= ($nav_active == 'account' ? ' class="active dropdown"' : ' class="dropdown"') ?>>
                <a href="<?= base_url(); ?>account/" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                  Account
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>auth/logout">Logout</a></li>
                </ul>
              </li>
            </ul>
            <p class="navbar-text pull-right">
              Logged in as <a href="<?= base_url(); ?>account/" class="navbar-link"><?= $user->uacc_username; ?></a>
            </p>
            <?php } else { ?>
            <ul class="nav pull-right">
              <li<?= ($nav_active == 'account' ? ' class="active"' : '') ?>>
                <a href="<?= base_url(); ?>auth/">Login / Register</a>
              </li>
            </ul>
            <?php } ?>
            <ul class="nav">
              <li<?= ($nav_active == 'index' ? ' class="active"' : '') ?>>
                <a href="<?= base_url(); ?>">Home</a>
              </li>
              <li<?= ($nav_active == 'forum' ? ' class="active dropdown"' : ' class="dropdown"') ?>>
                <a href="<?= base_url(); ?>forum/" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                  Forum
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>forum/#">Submit a Question</a></li>
                </ul>
              </li>
              <li<?= ($nav_active == 'points' ? ' class="active dropdown"' : ' class="dropdown"') ?>>
                <a href="<?= base_url(); ?>points/" class="dropdown-toggle" data-toggle="dropdown" data-target="#">
                  MyManPoints
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="<?= base_url(); ?>points/#">View Profile</a></li>
                  <li><a href="<?= base_url(); ?>points/#">Submit a Conquest</a></li>
                  <li><a href="<?= base_url(); ?>points/#">Submit a Challenge</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>