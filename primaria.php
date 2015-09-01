<?php include 'header.php'; ?>

<h2>Primaria</h2>

<ul class="nav nav-tabs">
	<li class="active"><a data-toggle="tab" href="#primero">Primero</a></li>
	<li><a data-toggle="tab" href="#segundo">Segundo</a></li>
	<li><a data-toggle="tab" href="#tercero">Tercero</a></li>
</ul>

<div class="tab-content">
	
	<div id="primero" class="tab-pane fade in active">
		<h3>Primero de primaria</h3>
		<div class="row">
			<div class="col-sm-3">
				<ul class="nav nav-pills nav-stacked">
					<li class="active"><a data-toggle="pill" href="#primeroA">Primero A</a></li>
					<li><a data-toggle="pill" href="#primeroB">Primero B</a></li>
					<li><a data-toggle="pill" href="#primeroC">Primero C</a></li>
				</ul>
			</div>
			<div class="col-sm-9">
				<div class="tab-content">
					<div id="primeroA" class="tab-pane fade in active">
						<h4>Primero A</h4>
						<p>Some content.</p>
						</div>
						<div id="primeroB" class="tab-pane fade">
						<h4>Primero B</h4>
						<p>Some content in menu 1.</p>
						</div>
						<div id="primeroC" class="tab-pane fade">
						<h4>Primero C</h4>
						<p>Some content in menu 2.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="segundo" class="tab-pane fade">
		<h3>Segundo de primaria</h3>
		<p>Some content in menu 1.</p>
	</div>
	<div id="tercero" class="tab-pane fade">
		<h3>Tercero de primaria</h3>
		<p>Some content in menu 2.</p>
	</div>
</div>

<p></p>

<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Primaria | Tareas Cedros';
    });

</script>

<?php include 'footer.php'; ?>