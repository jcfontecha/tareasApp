<?php include 'header.php'; ?>

<h2>Secundaria</h2>

<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#primero">Primero</a></li>
	<li><a data-toggle="tab" href="#segundo">Segundo</a></li>
	<li><a data-toggle="tab" href="#tercero">Tercero</a></li>
</ul>

<div class="tab-content">
	
	<div id="primero" class="tab-pane fade in active">
		<?php grado("Primero", "secundaria", array("A", "B", "C")); ?>
	</div>
	
	<div id="segundo" class="tab-pane fade">
		<?php grado("Segundo", "secundaria", array("A", "B", "C")); ?>
	</div>
	<div id="tercero" class="tab-pane fade">
		<?php grado("Tercero", "secundaria", array("A", "B", "C")); ?>
	</div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Secundaria | Tareas Cedros';
    });

</script>

<?php include 'footer.php'; ?>