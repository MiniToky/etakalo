<div class="featured-page">
    <div class="container">
        <div class="row">
        <div class="col-md-4 col-sm-12">
            <div class="section-heading">
                <div class="line-dec"></div>
                    <h1>Propositions</h1>
                </div>
          </div>
        </div>
    </div>
</div>
<div class="featured container no-gutter single-product">
    <?php
        if(isset($objet1)){
            for($i=0; $i<count($objet1); $i++){
    ?>
        <div class="row posts right-content">
            <div id="<?php echo $i; ?>" class="item new col-md-4">
                <a href="<?php echo base_url('client/details/test?idObj='.$objet1[$i]['idObjet']); ?>">
                    <div class="featured-item">
                        <img src="<?php echo base_url('assets/images/'.$objet1[$i]['cover']); ?>" alt="">
                        <h4><?php echo  $objet1[$i]['nom']; ?></h4>
                        <h6><?php echo  $objet1[$i]['valeur']; ?> Ar</h6>
                        <p><?php echo  $objet1[$i]['userName']; ?></p>
                    </div>
                </a>
            </div>
            <div id="<?php echo $i+1; ?>" class="item new col-md-4">
                <form action="<?php echo base_url('client/action') ?>" method="get">
                    <label for="quantity">Product:</label>
                    <input type="hidden" name="idProp" value="<?php echo $idProp[$i]; ?>">
                    <input type="hidden" name="user1" value="<?php echo $_SESSION['idUser']; ?>">
                    <input type="hidden" name="objet1" value="<?php echo $objet1[$i]['idObjet']; ?>">
                    <input type="hidden" name="user2" value="<?php echo $objet2[$i]['idUser']; ?>">
                    <input type="hidden" name="objet2" value="<?php echo $objet2[$i]['idObjet']; ?>">
                    <select name="type">
                        <option value="0">Accepter</option>
                        <option value="1">Refuser</option>
                    </select>
                    <input type="submit" class="button" value="OK">
                </form>
                <h6><?php echo $date[$i]; ?></h6>
            </div>
            <div id="<?php echo $i+2; ?>" class="item new col-md-4">
                <a href="<?php echo base_url('client/details/test?idObj='.$objet2[$i]['idObjet']); ?>">
                    <div class="featured-item">
                        <img src="<?php echo base_url('assets/images/'.$objet2[$i]['cover']); ?>" alt="">
                        <h4><?php echo  $objet2[$i]['nom']; ?></h4>
                        <h6><?php echo  $objet2[$i]['valeur']; ?> Ar</h6>
                        <p><?php echo  $objet2[$i]['userName']; ?></p>
                    </div>
                </a>
            </div>
        </div>
    <?php }
    }else{ ?>
        <h6>Pas de propositions</h6>
    <?php } ?>
</div>