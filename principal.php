<div class='row'>
	<div class='col s12 l7'>
		<br>
		<img class='responsive-img' src="img/cantina.png" style=''>
	</div>
	<div class="col s12 l5"> 
		<center><p class="grey-text text-lighten-2">
			Para adicionar créditos ou realizar algum pedido, faça login através do botão abaixo.
			<br>
			<br>
			Confira também o cardápio da cantina de sua escola.
		</p></center>
		<form action="index.php?link=3" method='POST'>
			<div class="row" style='display:none' id='loginBox'>
				<div class='row'>
					<center>
						<div class='input-field' style="width: 90%">
							<input class='validate white-text' type="number" id="rmUsu" name='rmUsu'>
							<label for='rmUsu'>Login</label>
						</div>
					</center>
				</div>
				<div class='row'>
					<center>
						<div class='input-field' style="width: 90%">
							<input class='validate white-text' type="password" id="senUsu" name='senUsu'>
							<label for='senUsu'>Senha</label>
						</div>
					</center>
				</div>
				<div class='row right-align'>
					<button type='submit' id='btnLogar' name='btnLogar' class='btn waves-effect waves-light green'>Logar</button>
				</div>
			</div>
		</form>
		<div class='row right-align'>
			<center><a href='#!' class='waves-effect btn green' id='btnLogin'>Logar</a></center>
		</div>
	</div>
</div>
<!-- Login -->

<!-- Fim do trecho do Login -->