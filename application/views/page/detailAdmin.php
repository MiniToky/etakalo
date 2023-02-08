<div class="featured-page">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="section-heading">
                <div class="line-dec"></div>
                    <h1>Details - Historique</h1>
                </div>
          </div>
        </div>
    </div>
</div>
<div class="featured container no-gutter">
    <h6>Nombre d'utilisateurs: <?php echo $nbUser; ?></h6>
    <h6>Nombre de transaction: <?php echo $nbTransac; ?></h6>
</div>
<div class="featured container no-gutter single-product">
    <?php
        $i = 1;
        foreach($historique as $his){
    ?>
        <div class="row posts right-content">
            <div id="<?php echo $i; ?>" class="item new col-md-4">
                <a href="#">
                    <div class="featured-item">
                        <img src="<?php echo base_url('assets/images/'.$his['sary1']); ?>" alt="">
                        <h4><?php echo  $his['objet1']; ?></h4>
                        <p><?php echo  $his['user1']; ?></p>
                    </div>
                </a>
            </div>
            <div id="<?php echo $i+1; ?>" class="item new col-md-4" style="text-align:center;">
                <?php if($his['typeTransac'] == 0){ ?>
                    <h6>Accepté</h6>
                <?php }else{ ?></h6>
                    <h6 style="color:red;">Refusé</h6>
                <?php } ?></h6>
                <p><?php echo  $his['dateTransac']; ?></p>
            </div>
            <div id="<?php echo $i+2; ?>" class="item new col-md-4">
                <a href="#">
                    <div class="featured-item">
                        <img src="<?php echo base_url('assets/images/'.$his['sary2']); ?>" alt="">
                        <h4><?php echo  $his['objet2']; ?></h4>
                        <p><?php echo  $his['user2']; ?></p>
                    </div>
                </a>
            </div>
        </div> 
    <?php
        $i++;
        }
    ?>
</div>