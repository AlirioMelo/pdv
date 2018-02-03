
<tr>
 <td><h3 id="hcodigo">Codigo de Barra:</h3><input id="in23" class="form-control" type='text' name='cbarra' value="<?=$produto['cbarra']?>" placeholder="Codigo de Barra"/></td>
</tr> 

<tr>
 <td><h3 id="hnome">Nome:</h3><input id="in24" class="form-control" type='text' name='nome' value="<?=$produto['nome']?>" placeholder="Produto"/></td>
</tr> 

<tr>
  <td class="form-group">
      <h3 id="hpreco">Preço:</h3>
    <div id="in25" class="input-group">
      <div class="input-group-addon">R$</div>
      <input class="form-control" type='float' name='preco' value="<?= $produto['preco']?>" placeholder="Valor"/>
      <div class="input-group-addon">.00</div>
    </div>
  </td>
</tr>

<tr>
 <td><h3 id="hdescricao">Descrição:</h3><textarea id="in26" class="form-control" name="descricao" placeholder="Digite caracteristicas do produto aqui.">
  <?=$produto['descricao']?></textarea></td>
</tr>

<tr>
 <td id="hcat">
  <h3>Categorias:</h3>
<select  id="in27" name="categoria_id" class="form-control">
  <?php
  foreach ($vercategoria as $categoria):
    $estaCategoria=$produto['categoria_id']==$categoria['id'];
    $selecao=$estaCategoria?"selected='selected'":"";
  ?>  
 <option value="<?=$categoria['id']?>"<?=$selecao?>> <?=$categoria['nome']?> </option>
 <?php
  endforeach //final do for
 ?> 
 </select>
  <input type="hidden" name="usado"<?=$usado?> value="false">
  <input type="checkbox" name="usado"<?=$usado?> value="true"> Usado
</td>
</tr>