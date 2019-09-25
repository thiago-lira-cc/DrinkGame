<?php if(isset($_GET['jogadores'])){ 
	$jogadores = $_GET['jogadores'];
	?>
	<form name="form-login" id="form-login" method="get" action="homepage.php">
		
		<p class="info" align="center">Informe a quantidade de beberrões para jogar.</p>
											
		<div class="form-group">
				<select class="form-control" id="jogadores" name="jogadores">
					<option selected><?php echo $jogadores ?></option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
		</div>
																					
		<div class="form-group botao-centralizado">
			<button type="submit" class="btn btn-primary">Escolher</button>
		</div>
			<?php
				if ($jogadores==1) { ?>
							<div class="form-group">
								<label for="txt_login">Jogador 1:</label> 
								<input class="form-control" type="text" name="p1" id="txt_login"/>
							</div>
										
							<div class="form-group botao-centralizado">
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
				<?php } 
				if ($jogadores==2) { ?>
							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p1" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p2" id="txt_login" />
							</div>
										
							<div class="form-group botao-centralizado">
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
				<?php }
				if ($jogadores==3) {?>
							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p1" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p2" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p3" id="txt_login" />
							</div>
										
							<div class="form-group botao-centralizado">
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
				<?php }
				if ($jogadores==4) {?>
							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p1" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p2" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="tp3" id="txt_login" />
							</div>

							<div class="form-group">
								<label for="txt_login">Login:</label> 
								<input class="form-control" type="text" name="p4" id="txt_login" />
							</div>
										
							<div class="form-group botao-centralizado">
								<button type="submit" class="btn btn-primary">Entrar</button>
							</div>
				<?php }
				if ($jogadores==5) {?>
						<div class="form-group">
							<label for="txt_login">Login:</label> 
							<input class="form-control" type="text" name="p1" id="txt_login" />
						</div>

						<div class="form-group">
							<label for="txt_login">Login:</label> 
							<input class="form-control" type="text" name="p2" id="txt_login" />
						</div>

						<div class="form-group">
							<label for="txt_login">Login:</label> 
							<input class="form-control" type="text" name="p3" id="txt_login" />
						</div>

						<div class="form-group">
							<label for="txt_login">Login:</label> 
							<input class="form-control" type="text" name="p4" id="txt_login" />
						</div>

						<div class="form-group">
							<label for="txt_login">Login:</label> 
							<input class="form-control" type="text" name="p5" id="txt_login" />
						</div>
									
						<div class="form-group botao-centralizado">
							<button type="submit" class="btn btn-primary">Jogar</button>
						</div>
	</form>
<?php }
}else{ ?>
	<form name="form-login" id="form-login" method="get" action="">
									
		<p class="info" align="center">Informe a quantidade de beberrões para jogar.</p>
										
		<div class="form-group">
			<select class="form-control" id="jogadores" name="jogadores">
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
		</div>
												
		<div class="form-group botao-centralizado">
			<button type="submit" class="btn btn-primary">Escolher</button>
		</div>							

	</form>
<?php } ?>