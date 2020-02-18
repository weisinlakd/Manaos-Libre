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
        <input class="stars" type="radio" id="star1<?=$idProducto?>" name="rating<?=$idProducto?>" value="1" />
            <label class = "full" for="star1<?=$idProducto?>" title="excelente"></label>
        <input class="stars" type="radio" id="star2<?=$idProducto?>" name="rating<?=$idProducto?>" value="2" />
            <label class = "full" for="star2<?=$idProducto?>" title="muy bueno"></label>
        <input class="stars" type="radio" id="star3<?=$idProducto?>" name="rating<?=$idProducto?>" value="3" />
            <label class = "full" for="star3<?=$idProducto?>" title="bueno"></label>
        <input class="stars" type="radio" id="star4<?=$idProducto?>" name="rating<?=$idProducto?>" value="4" />
            <label class = "full" for="star4<?=$idProducto?>" title="regular"></label>
        <input class="stars" type="radio" id="star5<?=$idProducto?>" name="rating<?=$idProducto?>" value="5" />
            <label class = "full" for="star5<?=$idProducto?>" title="malo"></label>
    </fieldset>
</p>