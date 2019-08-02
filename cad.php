<!-- Alterado Por Geremias-->
<style>
 
	.inline-icon {
	   vertical-align: middle;
	}
</style>
<div class="row">
	<div class="col s12" style="margin-top: 3vh">
		<ul class="tabs tabs-transparent green lighten-1">
			<li class='tab col s6'><a class='active white-text' href="#cliente"> <i class="inline-icon material-icons">person</i>Cliente</a></li>
			<li class="tab col s6"><a class='white-text' href="#empresa"><i style="width: 28px !important;" class="inline-icon material-icons">account_balanced</i>Empresa</a></li>
		</ul> <!-- Fim Geremias -->
	</div>
	<div id='cliente' class="col s12">
		<form action="cadastrar.php" method="POST">
			<div class="card-panel grey darken-3">
				<div class='input-field'>
					<input type="text" name="login">
					<label for='login'>Login</label>
				</div>
				<br>
				<div class='input-field'>
					<input type='text' name='nome'>
					<label for='nome'>Nome Completo</label>
				</div>
				<br>
				<div class='input-field'>
					<input type="password" name="senha">
					<label for='login'>Senha</label>
				</div>
				<!-- Alterado Por Pedro-->
				<div class="btn waves-effect green darken-1 col l2 m2 s10 offset-l5 offset-m5 offset-s1">
					<input href="cadastrar.php" class="white-text" type="submit" value="Cadastrar">
				</div>
			</div>
		</form>
	</div>
	<div id='empresa' class="col s12">
		<form action="cadastrar.php" method="POST">
			<div class='card-panel grey darken-3'>
				<div class='input-field'>
					<input type='text' name='login'>
					<label for='login'>Login Empresarial</label>
				</div>
				<br>
				<div class='input-field'>
					<input type="text" name="nome">
					<label for='nome'>Nome da Empresa</label>
				</div>
				<br>
				<div class='input-field'>
					<input type="password" name="senha">
					<label for='senha'>Senha</label>					
				</div>
				<div class="btn waves-effect green darken-1 col l2 m2 s10 offset-l5 offset-m5 offset-s1">
					<input href="cadastrarEmp.php" class="white-text" type="submit" value="Cadastrar">
				</div> <!-- Fim Pedro -->
			</div>
		</form>
	</div>
</div>