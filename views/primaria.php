<?php include 'header.php'; ?>

<h2>Primaria</h2>

<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#primero">Primero</a></li>
	<li><a data-toggle="tab" href="#segundo">Segundo</a></li>
	<li><a data-toggle="tab" href="#tercero">Tercero</a></li>
	<li><a data-toggle="tab" href="#cuarto">Cuarto</a></li>
	<li><a data-toggle="tab" href="#quinto">Quinto</a></li>
	<li><a data-toggle="tab" href="#sexto">Sexto</a></li>
</ul>

<div class="tab-content">
	
	<div id="primero" class="tab-pane fade in active">
		<?php grado("Primero", "primaria", array("A", "B", "C")); ?>
	</div>
	<div id="segundo" class="tab-pane fade">
		<?php grado("Segundo", "primaria", array("A", "B", "C")); ?>
	</div>
	<div id="tercero" class="tab-pane fade">
		<?php grado("Tercero", "primaria", array("A", "B", "C")); ?>
	</div>
	<div id="cuarto" class="tab-pane fade">
		<?php grado("Cuarto", "primaria", array("A", "B", "C")); ?>
	</div>
	<div id="quinto" class="tab-pane fade">
		<?php grado("Quinto", "primaria", array("A", "B", "C")); ?>
	</div>
	<div id="sexto" class="tab-pane fade">
		<?php grado("Sexto", "primaria", array("A", "B", "C")); ?>
	</div>
</div>

<p></p>

<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Primaria | Tareas Cedros';
    });

</script>

<?php include 'footer.php'; ?>