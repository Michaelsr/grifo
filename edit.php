<?php  
  mysql_connect('localhost','root','');
  mysql_select_db("grifo");
  $id=$_REQUEST['id'];
  $sql=mysql_query("SELECT * FROM trabajador WHERE id=$id");
  $rs=mysql_fetch_array($sql);
?>
<h2>Actualizar trabajador</h2>
<div class="panel panel-default">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>Nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?=$rs['nombre']?>">
    </div>
    <div class="form-group">
      <label>Apellido Paterno</label>
      <input type="text" class="form-control" name="apellidop" value="<?=$rs['apellidop']?>">
    </div>
    <div class="form-group">
      <label>Apellido Materno</label>
      <input type="text" class="form-control" name="apellidom" value="<?=$rs['apellidom']?>">
    </div>
    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" name="dni" value="<?=$rs['dni']?>">
    </div>
    <div class="form-group">
      <label>Número de Celular</label>
      <input type="number" class="form-control" name="celular" value="<?=$rs['celular']?>">
    </div>
    <div class="form-group">
      <label>Dirección</label>
      <input type="text" class="form-control" name="direccion" value="<?=$rs['direccion']?>">
    </div>
    <div class="form-group">
      <label>Puesto de Trabajo</label>
      <input type="text" class="form-control" placeholder="Introdusca el puesto" name="puesto" value="<?=$rs['puesto']?>">
    </div>
    <div class="form-group">
      <label>Horario de Trabajo</label>
      <input type="text" class="form-control" placeholder="Horario" name="horario" value="<?=$rs['horario']?>">
    </div>
    <input type="hidden" name="opt" value="edit">
    <input type="hidden" name="id" value="<?=$id?>">
    <button type="button" class="btn btn-success" id="guardar">Actualizar</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>





<script>
  $('#cerrar').click(function(){
    $('#formulario').slideUp('slow');
  });
  $('#guardar').click(function(){
    $.post( "crud.php", $("#frm").serialize(),function(data){
      $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
      $('#formulario').slideUp('slow');
      $('#listar').load("list.php").fadeIn('slow');
    });
  });
</script>
**************************************************************************************************

<?php  
  mysql_connect('localhost','root','');
  mysql_select_db("grifo");
  $id=$_REQUEST['id'];
  $sql=mysql_query("SELECT * FROM factura WHERE id=$id");
  $rs=mysql_fetch_array($sql);
?>
<h2>Actualizar factura</h2>
<div class="panel panel-default">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm1">
    


    <div class="form-group">
      <label>numero de cliente</label>
      <input type="text" class="form-control" name="id_cliente" value="<?=$rs['id_cliente']?>">
    </div>
    <div class="form-group">
      <label>nombre</label>
      <input type="text" class="form-control" name="nombre" value="<?=$rs['nombre']?>">
    </div>
    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" name="dni" value="<?=$rs['dni']?>">
    </div>
    <div class="form-group">
      <label>Número de Celular</label>
      <input type="number" class="form-control" name="celular" value="<?=$rs['celular']?>">
    </div>
    <div class="form-group">
      <label>descripcion</label>
      <input type="text" class="form-control" name="descripcion" value="<?=$rs['descripcion']?>">
    </div>
    <div class="form-group">
      <label>ruc</label>
      <input type="text" class="form-control" placeholder="Introdusca el ruc" name="ruc" value="<?=$rs['ruc']?>">
    </div>
    <input type="hidden" name="opt" value="edit">
    <input type="hidden" name="id" value="<?=$id?>">
    <button type="button" class="btn btn-success" id="guardar">Actualizar</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>





<script>
  $('#cerrar1').click(function(){
    $('#formulario1').slideUp('slow');
  });
  $('#guardar1').click(function(){
    $.post( "crud2.php", $("#frm1").serialize(),function(data){
      $('#mensaje1').html(data).fadeIn('slow').fadeOut(4000);
      $('#formulario1').slideUp('slow');
      $('#listar1').load("list2.php").fadeIn('slow');
    });
  });
</script>