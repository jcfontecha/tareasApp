<?php include 'header.php'; ?>

<div class="row">
	<div class="col-xs-1 col-sm-2 col-md-3"></div>
	<div class="col-xs-10 col-sm-8 col-md-6">
		<div class="panel panel-default" style="margin-bottom: 100px;">
			<div class="panel-body login-form">
				<h1>Iniciar sesión</h1>
				<form id="loginform" class="form-horizontal" role="form">
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
						<input type="text" class="form-control" placeholder="Usuario" aria-describedby="basic-addon2">
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="basic-addon1"><i class="fa fa-lock"></i></span>
						<input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
					</div>
					<button type="button" class="btn btn-block btn-primary">Iniciar sesión</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xs-1 col-sm-2 col-md-3"></div>
</div>

<script type="text/javascript">

    $(document).ready(function() {
        document.title = 'Login | Tareas Cedros';
    });

</script>

<?php include 'footer.php'; ?>