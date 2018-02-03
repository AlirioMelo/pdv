<?php 
require_once ('cabecalho.php');
require_once ('logica_usuario.php');
verificaUsuario();                 
                  //<h2 id="in3">Lista de Itens</h2>
                /*<form action="">
                  <button id="b6" tabindex="5">
                   <img id="icon1" src="img/icon1.png">
                   </button>
                </form>*/
?>
<body id="bod1" onLoad="document.getElementById('in1').focus() " background="img/mercado1.jpg">
         <h3 id="tag1">Caixa Aberto</h3>

            <form id="form" >
             <article>
              <section>
                  <input id="in1" class="form-control" tabindex="1" type="text" name="codigo" placeholder="Código de Barra" required>
               </section>  
             </article>
            </form>

                    <table id="tab1" class="form-control"></table> 

               <table id="tab3">
                <tr><td>
                  <h3 id="in6">Valor Dado:<h3>
                  <h3 id="in9">Total:<h3>
                  <h3 id="in8">Troco:</h3>
                      <div>
                        <form id="formValor"> 
                          <input id="in7" class="form-control" tabindex="2" type="float" name="valorcliente" placeholder="Valor" required>
                        </form>                        
                      </div>
                        <div id="div2" class="form-control" name="vcompra">
                             <?php echo number_format($total, 2, ',', '.');?>
                        </div>
                       <div id="in10" class="form-control" type="text" name="troco" >
                             <?php  echo number_format(@$troco, 2, ',', '.');  ?>
                       </div>
                      </td></tr>  
               </table>         

            <h3 id="tag2">Outras Opções</h3>
              <div id="div1">
                <form action="formulario.php">
                  <button id="b5"  tabindex="4">
                   <img id="icon2" src="img/img2.png">
                  </button> 
                </form>                
                <form action="lista_produto.php">
                  <button id="b4"  tabindex="3">
                   <img id="icon3" src="img/img3.png">
                  </button> 
                </form>
              </div>  
</body>
  
<script src="js/jquery.js"></script>
<script>
    var input = $('#in1');
    var total = 0;
    var tabela = $('#tab1');
    var totalDiv = $('#div2');

    $('#form').submit(function(e) {
      e.preventDefault();
      var codigo = input.val();
      input.val('');
      input.focus();
   
      $.post('caixa_consultar.php', {codigo: codigo}, function(data) {
        if (data) {
          var format = parseFloat(data.preco).toFixed(2);

          var html =  `<tr id="linha">
                        <td id="tdtab1">${data.nome}</td>
                        <td id="tdtab2" class="tdireita">R$ ${format} 
                        <button id="butlixo" tabindex="3" class="btn btn-danger deletar" data-valor="${data.preco}">
                        <span class="glyphicon glyphicon-trash"></span></button></td>
                       </tr>`;

          tabela.append(html);
  
          total += parseFloat(data.preco);
          totalDiv.html(parseFloat(total).toFixed(2));
          totalDiv.data("valor", total);

        }
      }, "json");
    });

    $('#formValor').submit(function(e) {
      e.preventDefault();
      var valor = $('#in7').val();
      if (!valor) {
        return;
      }

      var troco = valor - total;
      $('#in10').html(parseFloat(troco).toFixed(2));
    });

    $(document).on("click", ".deletar", function() {
      var preco = $(this).data('valor');
      var tr = $(this).closest('tr');

      tr.remove();
      total -= parseFloat(preco);
      totalDiv.html(parseFloat(total).toFixed(2));
      totalDiv.data("valor", total);
    });

</script>


<script>
$(document).ready(function(){
  $(document).keypress(function(e){
  if(e.wich == 112 || e.keyCode == 112){
  alert("Apertou o F1 ");
  }
  })
})
</script>
<?php require_once('rodape.php');?> 

                 

                    

       