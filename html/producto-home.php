<div class="col-sm-2 col-md-3">
    <div class="thumb-wrapper">
        <div class="img-box">
            <img src="../img/productos/producto-<?=$imagen?>.jpg" class="img-responsive img-fluid" alt="">
        </div>
        <div class="thumb-content">
            <br>
            <h4>Apple iPad</h4>
            <p class="item-price">
                <?php if (isset($ofertas)) :?>
                    <strike>$350.00</strike> 
                    <span>$369.00</span>
                <?php else : ?> 
                    <span>$369.00</span>
                <?php endif ?>
            </p>
            <!-- <div class="star-rating">
                <ul class="list-inline">
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star"></i></li>
                    <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                </ul>
            </div> -->
            <div class="row">
                <div class="col-2"></div>
                <div class="col-10">
                     <?php  require('ratings.php')?> 
                </div>
            </div>
            <br>
            <a href="shopping-cart.html" class="btn btn-primary">Comprar</a>
        </div>						
    </div>
    <br>
</div>