<?php 
require_once('cabecalho.php');
require_once('conecta.php');
require_once('cadastra_usuario.php');

?>

<body background="img/mercado6.jpg" onLoad="document.getElementById('in28').focus() ">
   <h2>Fazendo Cadastro</h2>
   <form action="valida.php" method="post">
   <table id="tab4" class="table">
        <tr>                   
        <td><h3 id="in30">Usuário:</h3><input id="in28" class="form-control" type="text" name="usunome" placeholder="Seu Login"></td>
        </tr>
        <tr>                    
        <td><h3 id="in31">Senha:</h3><input id="in29" class="form-control" type="password" name="senha" placeholder="Digite sua Senha"></td>
        </tr>
        <tr>
        <td><button id="in32" type="submit" class="btn btn-primary">Efetuar</button></td>
        </tr>
    </table>
    </form>
</body>
 
  
<?php require_once('rodape.php');?>	