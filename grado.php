<?php function grado($nombre, $nivel, $grupos) { ?>

	<!--h3><?php echo $nombre . " de " . $nivel; ?></h3-->
	<div class="row">
		<div class="col-sm-3">
			<ul class="nav nav-pills nav-stacked">
				<?php for ($i = 0; $i < sizeof($grupos); $i++) { ?>
					<?php $idGrupo = strtolower($nombre) . $grupos[$i]; ?>
					<li <?php echo ($i == 0)? "class=\"active\"" : ""; ?>><a data-toggle="pill" href="#<?php echo $idGrupo; ?>"><?php echo $nombre . " " . $grupos[$i]; ?></a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="col-sm-9">
			<div class="tab-content">
				
				<?php for ($i = 0; $i < sizeof($grupos); $i++) { ?>
					<?php $idGrupo = strtolower($nombre) . $grupos[$i]; ?>
					<div id="<?php echo $idGrupo; ?>" class="tab-pane fade <?php echo ($i == 0)? "in active" : ""; ?>">
						<h4><?php echo $nombre . " " . $grupos[$i]; ?></h4>
						<?php if (!isset($_SESSION["user"])) : ?>
							<a href="editarTarea.php" class="btn btn-default pull-right"><i class="fa fa-plus-circle"></i> Añadir tarea</a>
						<?php endif; ?>
						<p>Some content.</p>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } // end grado. ?>