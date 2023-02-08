<!-- Single Starts Here -->
<div class="single-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="section-heading">
                <div class="line-dec"></div>
                <h1><?php echo $objet['nom']; ?></h1>
            </div>
            </div>
            <div class="col-md-6">
            <div class="product-slider">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <?php foreach($images as $sary){ ?>
                            <li>
                            <img src="<?php echo base_url('assets/images/'.$sary['chemin']); ?>" />
                            </li>
                        <?php } ?>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <?php foreach($images as $sary){ ?>
                            <li>
                            <img src="<?php echo base_url('assets/images/'.$sary['chemin']); ?>" />
                            </li>
                        <?php } ?>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="right-content">
                <h4><?php echo $objet['userName']; ?></h4>
                <h6><?php echo $objet['valeur']; ?> Ar</h6>
                <p><?php echo $objet['descri']; ?></p>
                <?php if($objet['idUser'] != $_SESSION['idUser'] && $_SESSION['typeUser'] != 0){ ?>
                    <form action="<?php echo base_url('client/proposer') ?>" method="get">
                        <label for="quantity">Product:</label>
                        <input type="hidden" name="user1" value="<?php echo $objet['idUser']; ?>">
                        <input type="hidden" name="objet1" value="<?php echo $objet['idObjet']; ?>">
                        <input type="hidden" name="user2" value="<?php echo $_SESSION['idUser']; ?>">
                        <select name="objet2">
                            <?php foreach($mesObjets as $mesObjets){ ?>
                                <option value="<?php echo $mesObjets['idObjet']; ?>"><?php echo $mesObjets['nom']; ?></option>
                            <?php } ?>
                        </select>
                        <input type="submit" class="button" value="Exchange!">
                    </form>
                <?php } ?>
                <div class="down-content">
                <div class="categories">
                    <h6>Category: <span><a href="#"><?php echo $objet['nomCat']; ?></a></span></h6>
                </div>
                <div class="share">
                    <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Single Page Ends Here -->