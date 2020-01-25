<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><</a>
        </li>
    <!-- <li class="page-item"><a class="page-link" href="#">1</a></li> -->
    <?php for ($i=1; $i <= $paginas; $i++) :?> 
        <li class="page-item"><a class="page-link" href="#"><?=$i?></a></li>
        <?php if ($i >=11){
        break;
        } ?>
        <?php endfor ?>
        <li class="page-item">
            <a class="page-link" href="#">></a>
        </li>
    </ul>
</nav>