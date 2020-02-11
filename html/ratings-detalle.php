<style>

fieldset, label { margin: 0; padding: 0; }
            
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }     

    .rating > label{float:right}

</style>




<p>
    <fieldset class="rating">
        <input class="stars" type="radio" id="star5<?=$idProducto?>" name="rating<?=$idProducto?>" value="5" <?php if($valoracion==5){echo 'checked';}?>/>
            <label class = "full" for="star5<?=$idProducto?>" title="excelente"></label>
        <input class="stars" type="radio" id="star4.5<?=$idProducto?>" name="rating<?=$idProducto?>" value="4.5" <?php if($valoracion==4.5){echo 'checked';}?>/>
            <label class = "half" for="star4.5<?=$idProducto?>" title="4.5"></label>
        <input class="stars" type="radio" id="star4<?=$idProducto?>" name="rating<?=$idProducto?>" value="4" <?php if($valoracion==4){echo 'checked';}?>/>
            <label class = "full" for="star4<?=$idProducto?>" title="4"></label>
        <input class="stars" type="radio" id="star3.5<?=$idProducto?>" name="rating<?=$idProducto?>" value="3.5" <?php if($valoracion==3.5){echo 'checked';}?>/>
            <label class = "half" for="star3.5<?=$idProducto?>" title="3.5"></label>
        <input class="stars" type="radio" id="star3<?=$idProducto?>" name="rating<?=$idProducto?>" value="3" <?php if($valoracion==3){echo 'checked';}?>/>
            <label class = "full" for="star3<?=$idProducto?>" title="3"></label>
            <input class="stars" type="radio" id="star2.5<?=$idProducto?>" name="rating<?=$idProducto?>" value="2.5" <?php if($valoracion==2.5){echo 'checked';}?>/>
            <label class = "half" for="star2.5<?=$idProducto?>" title="2.5"></label>
        <input class="stars" type="radio" id="star2<?=$idProducto?>" name="rating<?=$idProducto?>" value="2" <?php if($valoracion==2){echo 'checked';}?>/>
            <label class = "full" for="star2<?=$idProducto?>" title="2"></label>
        <input class="stars" type="radio" id="star1.5<?=$idProducto?>" name="rating<?=$idProducto?>" value="1.5" <?php if($valoracion==1.5){echo 'checked';}?>/>
            <label class = "half" for="star1.5<?=$idProducto?>" title="1.5"></label>
        <input class="stars" type="radio" id="star1<?=$idProducto?>" name="rating<?=$idProducto?>" value="1" <?php if($valoracion==1){echo 'checked';}?>/>
            <label class = "full" for="star1<?=$idProducto?>" title="1"></label>
        <input class="stars" type="radio" id="star0.5<?=$idProducto?>" name="rating<?=$idProducto?>" value="0.5" <?php if($valoracion==0.5){echo 'checked';}?>/>
            <label class = "half" for="star0.5<?=$idProducto?>" title="0.5"></label>
    </fieldset>
</p>