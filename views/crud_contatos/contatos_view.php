<?php



?>

        <form class="form" action="router.php?controller=contatos&modo=novo" method="post">
          <div id="div_principal">
            <label>Nome:</label>
            <input type="text" name="nome" value="" class="inputs" required>
            <br>
            <label>Telefone:</label>
            <input type="text" name="telefone" value=""  class="inputs" required>
            <br>
            <label>Celular:</label>
            <input type="text" name="celular" value=""  class="inputs" required>
            <br>
            <label>Email:</label>
            <input type="text" name="email" value=""  class="inputs" required>
            <br>
            <input type="submit" name="btn_salvar" value="Salvar" id="botao">


          </div>
        </form>

        <div class="principal_select">
          <?php
            //Incluindo o arquivo da controller para fazer o select
            require_once('controllers/contatos_controller.php');
            //Instancia do objeto de controller, e chamada dos metodos para listar os registros
            $controller_contatos = new controllerContatos();
            $rsContatos = $controller_contatos->listar();
            $cont=0;
            while ($cont<count($rsContatos)) {



           ?>
          <div class="campos">
            <?php echo($rsContatos[$cont]->nome);?>
          </div>
          <div class="campos">
            <?php echo($rsContatos[$cont]->telefone);?>
          </div>
          <div class="campos">
            <?php echo($rsContatos[$cont]->celular);?>
          </div>
          <div class="campos">
            <?php echo($rsContatos[$cont]->email);?>
          </div>
          <div class="opc">
            <a href="#">Editar</a>
            <a href="router.php?controller=contatos&modo=excluir&idPoo=<?php echo($rsContatos[$cont]->idPoo);?>">Excluir</a>
          </div>
          <?php
            $cont+=1;

            }


           ?>

        </div>
