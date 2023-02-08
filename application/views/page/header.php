<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/header-logo.png'); ?>" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($page == 'home') echo 'active'; ?>">
                <a class="nav-link" href="<?php echo base_url('client/index'); ?>">Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if($page == 'product') echo 'active'; ?>" href="#">Product</a>
            </li>
            <?php if($_SESSION['typeUser'] == 1){ ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'notif') echo 'active'; ?>" href="<?php echo base_url('client/notification'); ?>">Notification</a>
                </li>
            <?php } ?>
            <?php if($_SESSION['typeUser'] == 0){ ?>
                <li class="nav-item">
                    <a class="nav-link <?php if($page == 'detail') echo 'active'; ?>" href="<?php echo base_url('admin/details'); ?>">Details</a>
                </li>
            <?php } ?>
            <li class="nav-item <?php if($page == 'profil') echo 'active'; ?>">
                <?php if($this->session->userdata('typeUser') == 1){ ?>
                    <a class="nav-link" href="<?php echo base_url('client/profil'); ?>">My Items (<?php echo $this->session->userdata('nom'); ?>)</a>
                <?php }else{ ?>
                    <a class="nav-link" href="#">Admin</a>
                <?php } ?>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('login/logout'); ?>">Deconnexion</a>
            </li>
            </ul>
        </div>
    </div>
</nav>