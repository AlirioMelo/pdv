<?php
require_once ('cabecalho.php');
require_once ('logica_usuario.php');
verificaUsuario();

 if (isset($_POST['ok1'])) { 
   $valor=$_POST['valor'];
  }
  if (isset($_POST['ok2'])) {
    $valor=$_POST['valor'];
    $valorcliente=$_POST['valorcliente'];
    $troco=$valorcliente-$valor;
   }
?>
 <body onLoad="document.getElementById('in7').focus() " background="img/mercado5.png">         
  <h2>Finalizando Compra</h2>
   <table id="tab3">
    <tr>
      <td>
        <h3 id="in6">Valor dado Pelo Cliente:<h3>
          <form  method="post">	
            <input id="in7" class="form-control" type="float" name="valorcliente" placeholder="Valor" required>
      		  <input id="in14" type="submit" name="ok2" value="Calcular">
            <input type="hidden" name="valor" value= "<?php echo $_POST['valor']; ?>">
      		</form>
      		  <h3 id="in8">Total das Compras:</h3>      	
                 <div id="div3" class="form-control" type="text" name="valortotal">
                  <?php  echo @number_format(@$valor, 2, ',', '.');  ?>
                 </div>	
         		  <h3 id="in9">Troco:</h3>
      		 <div id="in10" class="form-control" type="text" name="troco" >
                     <?php  echo number_format(@$troco, 2, ',', '.');  ?>
      		 </div>
          <form action="caixa.php" method="post">		 
      		  <input id="in11" type="submit" name="ok3" value="Voltar" accesskey="v">
          </form>
          </td>
        </tr>  
   </table>        
 </body>    