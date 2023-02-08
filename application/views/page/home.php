<div class="featured-page">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="section-heading">
                <div class="line-dec"></div>
                    <?php if($page == 'home') { ?>
                        <h1>Featured Items</h1>
                    <?php }else if($page == 'profil') { ?>
                        <h1>My Items</h1>
                    <?php } ?>
                </div>
          </div>
        </div>
    </div>
</div>
<div class="featured container no-gutter">
    <div class="row posts">
        <a href="#"><h6>Upload objet</h6></a>
    </div>
    <div class="row posts">
        <?php
            $i = 1;
            foreach($objets as $element){
        ?>
            <div id="<?php echo $i; ?>" class="item new col-md-4">
                <a href="<?php echo base_url('client/details/test?idObj='.$element['idObjet']); ?>">
                    <div class="featured-item">
                        <img src="<?php echo base_url('assets/images/'.$element['cover']); ?>" alt="">
                        <h4><?php echo $element['nom']; ?></h4>
                        <h6><?php echo $element['valeur']; ?> Ar</h6>
                        <p><?php echo $element['userName']; ?></p>
                    </div>
                </a>
            </div>
        <?php
                $i ++;
            }
        ?>
    </div>
</div>