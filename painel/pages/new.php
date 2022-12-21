<?php

//  session_start();

?>

<section class="new">
  <div class="container">
    <form action="actions/insert.php" method="post" enctype="multipart/form-data">
      <label>Título
        <input type="text" name="title" /></label>
      <label>Descrição
        <textarea name="descr"></textarea></label>
      <div class="row middle imgmain">
        <div class="img">
          <img src="" alt="Imagem" />
        </div>
        <div class="alter">
          <label>Imagem principal<br>
            <input id="imgmain" type="file" name="imgmain" />
            <div class="bt">
              <button class="click_input_h" data-input="imgmain" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="square" stroke-linejoin="bevel"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M20.4 14.5L16 10 4 20"/></svg>
                <span>Editar</span>
              </button>
            </div>
          </label>
        </div>
      </div>
      <div class="gallery">
        <div class="title row middle">
          <div class="col-6">
            <label>Galeria</label>
          </div>
          <div class="col-6 end">
            <input id="gallery" type="file" name="gallery" multiple/>
            <div class="bt">
              <button class="click_input_h" data-input="gallery" type="button" name="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="square" stroke-linejoin="bevel"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="8.5" cy="8.5" r="1.5"/><path d="M20.4 14.5L16 10 4 20"/></svg>
                <span>Selecionar imagens</span>
              </button>
            </div>
          </div>
        </div>
        <div class="row imgs">
          <div class="img">
            <img class="fit" src="" alt="Imagem" />
          </div>
        </div>
      </div>
      <input type="submit" name="submit" value="Atualizar">
    </form>
  </div>
</section>
