<nav aria-label="Page navigation example">
    <?php 
        $and = isset($_GET['buscar']) ? "?buscar=$busqueda&" : '?';
        // echo "HAY BUSQUEDA"; echo $and;
    ?>
    <ul class="pagination justify-content-center">
        <?php if (!isset($_GET['offset']) || $_GET['offset'] == 1) :?>
        <li class="page-item disabled">
            <a class="page-link" href="<?=$and?>offset=<?=$_GET['offset']-1?>" tabindex="-1"><</a>
        </li>
        <?php else : ?>
        <li class="page-item">
            <a class="page-link" href="<?=$and?>offset=<?=$_GET['offset']-1?>" ><</a>
        </li>
        <?php endif ?>
    <!-- <li class="page-item"><a class="page-link" href="<?=$and?>offset=<?=$i?>">1</a></li> -->
    <?php for ($i=1; $i <= $paginas; $i++) :?> 
        <li class="page-item"><a class="page-link" href="<?=$and?>offset=<?=$i?>"><?=$i?></a></li>
        <?php if ($i >=11){
        break;
        } ?>
        <?php endfor ?>
        <li class="page-item">
            <a class="page-link" href="<?=$and?>offset=<?=isset($_GET['offset']) ? $_GET['offset']+1 : 2?>">></a>
        </li>
    </ul>
</nav>