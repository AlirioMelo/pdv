<?php 
require_once('cabecalho.php');
require_once('logica_usuario.php');
?>
  <div id="div4">
    <h2>Bem Vindo!</h2>
  </div>
<?php if(usuarioEstaLogado()) { ?>
<body background="img/indice.png">
 <p id="p3">Você esta Logado com <?=usuariologado()?>!</p>
 <table> 
  <form action="formulario.php">
       <button id="b1">
        <img id="img1" src="img\img2.png" alt="Imagem responsiva" width="200px" height="200px">
       </button>
   </form>
  <form action="lista_produto.php">
       <button id="b2">
        <img id="img2" src="img\img3.png" alt="Imagem responsiva" width="200px" height="200px">
       </button>
   </form>
  <form action="caixa.php">
       <button id="b3">
        <img id="img3" src="img\img1.png" alt="Imagem responsiva" width="200px" height="200px">
       </button>
   </form>
  </table> 
</body>     
<?php
} else { ?>
 <body background="img/mercado.png" onLoad="document.getElementById('in17').focus() ">
		<h2 id="p2">Login</h2>
            <form action="login.php" method="post">
            <table id="tab2" class="table">
                <tr>   
                    <td><h4 id="in21">Usuário:</h4><input id="in17" class="form-control" type="text" name="usunome" placeholder="Seu Login"></td>
                </tr>
                <tr>
                    <td><h4 id="in22">Senha:</h4><input id="in18" class="form-control" type="password" name="senha" placeholder="Digite sua Senha"></td>
                </tr>
                <tr>
                    <td><button id="in19" type="submit" class="btn btn-primary">Login</button></td>
                </tr>
            </table>
            </form>

    <form action="cadastroUsuario.php">
      <button id="in20" class="btn btn-primary" type='submit'> Fazer Cadastro </button> 
    </form>
 </body>   
<?php
}
?> 
<?php require_once('rodape.php');?>		