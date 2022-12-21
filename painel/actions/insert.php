<?php

 //session_start();

  $click = filter_input(INPUT_POST, 'submit', FILTER_SANITIZE_STRING );

  if($click) :

  //  $image    = strtolower($_FILES['new_banner']['name']);
  //  $new_name = time().'-'.$image;

    $title   = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING );
    $descr   = filter_input(INPUT_POST, 'descr', FILTER_SANITIZE_STRING );
    $imgmain = filter_input(INPUT_POST, 'imgmain', FILTER_SANITIZE_STRING );
    $gallery = filter_input(INPUT_POST, 'gallery', FILTER_SANITIZE_STRING );

    $path = strtolower( preg_replace("/[^a-zA-Z0-9-]/", "-", strtr(utf8_decode(trim($title)), utf8_decode("áàãâéêíóôõúüñçÁÀÃÂÉÊÍÓÔÕÚÜÑÇ"),"aaaaeeiooouuncAAAAEEIOOOUUNC-")) );

  echo $title;
  echo $descr;
  echo $imgmain;
  echo $gallery;
  echo $path;

  else :

    echo 'Erro';


  endif;


    /*

    $db->insert('portfolio', "`title`, `description`, `imgmain`, `gallery`, `path`, `option`", ":title, :description, :imgmain, :gallery, :path, :option")
                ->bind([
                    'title' => $title,
                    'description' => $descr,
                    'imgmain' => $imgmain,
                    'gallery' => $gallery,
                    'path' => $path,
                    ])
                ->execute();

    if($db->lastInsertId())
        echo 'insert successfuly';
    else
        echo 'insert failed';

  else



              $image    = strtolower($_FILES['new_banner']['name']);
              $new_name = time().'-'.$image;
              $name     = filter_input(INPUT_POST, 'new_nome', FILTER_SANITIZE_STRING );
              $link     = filter_input(INPUT_POST, 'new_link', FILTER_SANITIZE_STRING );
              $opt      = filter_input(INPUT_POST, 'new_opt', FILTER_SANITIZE_STRING );

              include_once('connect.php');

              $insert = $db->prepare('INSERT INTO banners (image, name, link, opt) VALUES(:image, :name, :link, :opt )');
              $insert->bindParam(":image",$new_name);
              $insert->bindParam(":name",$name);
              $insert->bindParam(":link",$link);
              $insert->bindParam(":opt",$opt);

              $type = $_FILES['new_banner']['type'];

              if(preg_match("/^image\/(gif|jpeg|jpg|png)$/", $type)) :

                  $folder = 'assets/images/banners/'.$new_name;
                  $url    = $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
                  $dir    = $url.$folder;

                  $file_extension = pathinfo($dir, PATHINFO_EXTENSION);
                  $file_extension = strtolower($file_extension);

                  if(move_uploaded_file($_FILES['new_banner']['tmp_name'], $dir)) :

                      $_SESSION['msgOk'] = '<div class="msg"><p class="ok">Banner cadastrado com sucesso!</p></div>';
                      $insert->execute();

                      header('Location: ../dashboard.php?p=banners');
                      exit;

                  else :

                      $_SESSION['msgERRO'] = '<div class="msg"><p class="erro">ERRO: Não foi possível fazer o upload da imagem.</p></div>';

                  endif;

              else :

                   $_SESSION['msgERRO'] = '<div class="msg"><p class="erro">ERRO: A imagem deve ter uma extensão válida: gif, jpeg, jpg ou png </p></div>';

              endif;
                       //echo '<script>location.href="/admin/dashboard.php?p=users";</script>';

          endif;
*/
