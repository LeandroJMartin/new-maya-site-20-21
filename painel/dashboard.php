<?php

session_start();

if(!$_SESSION['id']) :

    session_destroy();
    header('Location:'.DIR);
    exit();

endif;

// Require Files;
require_once 'class/config.php';
require_once 'class/interface.php';
require_once 'class/class.php';
require_once '../class/global.php';

// Create PDO_Connect Class
$db = new PDO_Connect();


include_once 'header.php';

echo '<main class="container">';

$p = $_GET['p'];

if(isset($p)) :

    if(is_file("pages/".$p.".php")) :

      include 'modules/breadcrumb.php';

      ?>


      <?php

      include "pages/".$p.".php";

    else :

      echo '<p>Olá <span>'.$_SESSION['name'].',</span> bem vindo ao painel administrativo.</p>';

      echo '<h2>Página não encontrada! :(</h2><br><a href="dashboard.php?p=home">Voltar a home</a>';

    endif;

else :

  echo 'Olá <span>'.$_SESSION['name'].',</span> bem vindo(a) ao painel administrativo.';

  echo '<h2>Página não encontrada! :(</h2><br><a href="dashboard.php?p=home">Voltar a home</a>';

  include "pages/home.php";

endif;

echo '</main>';

include_once 'footer.php';
