<?php

    if (!isset($_SESSION)) :
        session_start();
    endif;

    require '../class/global.php';

?>

<!DOCTYPE html>
<html lang="pt" dir="ltr">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="content-language" content="pt-BR">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

  <title>Maya - A agência de comunicação mais premiada do interior paulista</title>
  <meta name="description" content="A Maya é uma agência de comunicação, especialista em publicidade e marketing digital, que há mais de 13 anos atua em São José do Rio Preto, interior paulista.">
  <meta name="keywords" content="Maya, Maya comunicação, publicidade, marketing, marketing digital, São José do Rio Preto, Agência,Design, Mídias Sociais, Redes Sociais" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Maya Comunicação">
  <meta name="msapplication-TileColor" content="#36d38a">
  <meta name="theme-color" content="#003460">

  <link rel="shortcut icon" href="../ssets/img/favicon.ico" type="image/x-icon"/>

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../assets/css/app.min.css" />
  <link rel="stylesheet" type="text/css" href="../assets/css/panel.css" />

</head>

<body>
  <section class="login">
    <div class="container">
      <div class="row middle center">
        <div class="wrap">
          <img class="logo" src="<?php echo DIRIMG; ?>/logo-maya-white.svg" alt="Logotipo Maya Comunicação">
          <h3>Painel administrativo</h3>
          <form action="inc/check.php" method="post" />
            <?php

                if(isset($_SESSION['loginErro'])) :

                    echo '<label class="error">';

                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);

                    echo '</label>';
                endif;

            ?>
            <fieldset>
              <input type="text" name="user" placeholder="Usuário:" minlength="3" required/>
              <input type="password" name="pass" placeholder="Senha:" minlength="3" required/>
              <input type="submit" name="submit" value="Logar" />
            </fieldset>
          </form>
          <div class="link">
            <a href="<?php echo 'https://'.$_SERVER['HTTP_HOST'] ?>">Voltar ao site</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="../assets/js/panel.js"></script>

  </body>
</html>
