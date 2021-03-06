<?php
$cirif = array(
    'id' => 'cirif',
    'name' => 'cirif',
    'class' => 'span12',
    'value' => $this->input->post('cirif')
);

$nombre = array(
    'id' => 'nombre',
    'name' => 'nombre',
    'class' => 'span12',
    'value' => $this->input->post('nombre')
);

$direccion = array(
    'id' => 'direccion',
    'name' => 'direccion',
    'class' => 'span12',
    'rows' => 2,
    'value' => $this->input->post('direccion')
);

$estado = array(
    'name' => 'estado',
    'options' => $options_estados,
    'selected' => $this->input->post('estado'),
    'extra' => 'class="span12" id="estado"'
);

$municipio = array(
    'name' => 'municipio',
    'options' => $options_municipios,
    'selected' => $this->input->post('municipio'),
    'extra' => 'class="span12" id="municipio"'
);

$parroquia = array(
    'name' => 'parroquia',
    'options' => $options_parroquias,
    'selected' => $this->input->post('parroquia'),
    'extra' => 'class="span12" id="parroquia"'
);

$email = array(
    'id' => 'email',
    'name' => 'email',
    'class' => 'span12',
    'value' => $this->input->post('email')
);

$telefono1 = array(
    'id' => 'telefono1',
    'name' => 'telefono1',
    'class' => 'span12',
    'maxlength' => '11',
    'value' => $this->input->post('telefono1')
);

$telefono2 = array(
    'id' => 'telefono2',
    'name' => 'telefono2',
    'class' => 'span12',
    'maxlength' => '11',
    'value' => $this->input->post('telefono2')
);

?>
<?php echo $this->session->flashdata('msj') ?>
<?php echo form_open() ?>
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">   
            <div class="span6 lightblue">
                <label>CI / RIF</label>
                <?php echo form_input($cirif) ?>
                <?php echo form_error($cirif['name']); ?>
            </div><!--/span-->
            <div class="span6 lightblue">
                <label>Nombre / Razón Social</label>
                <?php echo form_input($nombre) ?>
                <?php echo form_error($nombre['name']); ?>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid">
            <div class="span12 lightblue">
                <label>Dirección de Habitación / Domicilio Fiscal</label>
                <?php echo form_textarea($direccion) ?>
                <?php echo form_error($direccion['name']); ?>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/span-->
</div><!--/row-->
<div class="row-fluid">
    <div class="span12">
        <div class="row-fluid">
            <div class="span4 lightblue">
                <label>Estado</label>
                <?php echo form_dropdown($estado['name'], $estado['options'], $estado['selected'], $estado['extra']) ?>
                <?php echo form_error($estado['name']); ?>
            </div><!--/span-->
            <div class="span4 lightblue">
                <label>Municipio</label>
                <?php echo form_dropdown($municipio['name'], $municipio['options'], $municipio['selected'], $municipio['extra']) ?>
                <?php echo form_error($municipio['name']); ?>
            </div><!--/span-->
            <div class="span4 lightblue">
                <label>Parroquia</label>
                <?php echo form_dropdown($parroquia['name'], $parroquia['options'], $parroquia['selected'], $parroquia['extra']) ?>
                <?php echo form_error($parroquia['name']); ?>
            </div><!--/span-->
        </div><!--/row-->
        <div class="row-fluid">
            <div class="span4 lightblue">
                <label>Correo electrónico</label>
                <?php echo form_input($email) ?>
                <?php echo form_error($email['name']); ?>
            </div><!--/span-->
            <div class="span4 lightblue">
                <label>Teléfono de contacto</label>
                <?php echo form_input($telefono1) ?>
                <?php echo form_error($telefono1['name']); ?>
            </div><!--/span-->
            <div class="span4 lightblue">
                <label>Teléfono alternativo</label>
                <?php echo form_input($telefono2) ?>
                <?php echo form_error($telefono2['name']); ?>
            </div><!--/span-->
        </div><!--/row-->
    </div><!--/span-->
</div><!--/row-->
<div class="form-actions text-center">
    <?php echo anchor('.', 'Cancelar', 'class="btn"') ?>
    <?php echo form_reset('limpiar', 'Limpiar', 'class="btn"'); ?>
    <?php echo form_submit('aceptar', 'Aceptar', 'class="btn"'); ?>
</div>
<?php echo form_close() ?>