<li class="nav-item">
            <li class="nav-item"><?=$usuario['name']?></li>
            <li>
              <a class="nav-link" href="perfil.php">
                <!-- <span class="d-block d-md-none">Usuario</span> -->
                <?php if (isset(($usuario['avatar'])) && $usuario['avatar'] != 'error'):?>
                  <img class="rounded-circle img-responsive" style="height: 2.5em; width: 2.5em" src="<?=$usuario['avatar']?>" alt="foto perfil">
                <?php else :?>
                  <i class="fa fa-user d-none d-sm-none d-md-none d-lg-block d-xl-block"></i>
                <?php endif ?>
              </a>
            </li>
          </li>