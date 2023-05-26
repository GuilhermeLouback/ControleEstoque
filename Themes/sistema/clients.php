<?php
include_once 'includes/config.php';
$pages = 'clients';
?>

<main>
	<!-- Modal Edição de Dados -->
	<div class="modal" style="display:none">
		<div class="modal_container radius">
			<p class="text-right">
				<br><a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i
						class="fa fa-times-circle"></i></a>
			</p>

			<h1 class="text-center font-text-min">Editar Dados do Cliente</h1>

			<form method="post" enctype="multipart/form-data" id="form_editclient">
				<div class="divisor2">
					<label for="imagem">Foto do Cliente</label><br>
					<input type="file" name="files" required accept="image/*" onchange="loadFile(event)">
				</div>

				<div class="divisor2">
					<label for="client">Nome do Cliente</label><br>
					<input type="text" name="client" id="client" required>
				</div>

				<div class="divisor2">
					<label for="email">E-mail</label><br>
					<input type="email" name="email" id="email" required>
				</div>

				<div class="divisor2">
					<label for="phone">Telefone</label><br>
					<input type="text" name="phone" maxlength="14" class="phone" id="phone" required>
				</div>

				<div class="divisor2">
					<label for="doc">Escolha o Tipo de Documento</label><br>
					<select name="doc" id="doc">
						<option value="n">Selecione uma opção</option>
						<option value="1">CPF</option>
						<option value="2">CNPJ</option>
					</select>
				</div>

				<div class="divisor2 cpf">
					<label for="cpf">CPF</label><br>
					<input type="text" name="cpf" maxlength="14" id="cpf" class="cpf">
				</div>

				<div class="divisor2 cnpj" style="display:none">
					<label for="cnpj">CNPJ</label><br>
					<input type="text" name="cnpj" maxlength="18" id="cnpj" class="cnpj">
				</div>

				<div class="divisor2">
					<label for="zipcode">CEP</label><br>
					<input type="text" name="zipcode" maxlength="9" id="zipcode" class="zipcode">
				</div>

				<div class="divisor2">
					<label for="address">Endereço Completo</label><br>
					<input type="text" name="address" id="address" class="address" required>
				</div>

				<div class="divisor2">
					<label for="number">Número do Endereço</label><br>
					<input type="text" name="number" id="number" required>
				</div>

				<div class="divisor2">
					<label for="neighborhood">Bairro</label><br>
					<input type="text" name="neighborhood" id="neighborhood" class="neighborhood" required>
				</div>

				<div class="divisor2">
					<label for="city">Cidade</label><br>
					<input type="text" name="city" id="city" class="city" required>
				</div>

				<div class="divisor2">
					<label for="state">Estado</label><br>
					<input type="text" name="state" id="state" class="state" required>

				</div>

				<div class="divisor2">
					<br><button name="btn_editclient" id="btn_editclient" class="btn_edit radius"><i
							class="fa fa-pen"></i> Atualizar Dados</button>
				</div>

			</form>

			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>

	<!-- Modal Novo Usuário -->
	<div class="new" style="display:none;">
		<div class="modal_container radius">
			<p class="text-right">
				<br><a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i
						class="fa fa-times-circle"></i></a>
			</p>

			<h1 class="text-center font-text-min">Dados do Novo Cliente</h1>

			<form method="post" enctype="multipart/form-data" id="form_clientNew">
				<div class="divisor2">
					<label for="imagem">Foto do Cliente</label><br>
					<input type="file" name="files" required accept="image/*" onchange="loadFile(event)">
				</div>

				<div class="divisor2">
					<label for="client">Nome do Cliente</label><br>
					<input type="text" name="client" id="client" required>
				</div>

				<div class="divisor2">
					<label for="email">E-mail</label><br>
					<input type="email" name="email" id="email" required>
				</div>

				<div class="divisor2">
					<label for="phone">Telefone</label><br>
					<input type="text" name="phone" maxlength="14" class="phone" id="phone" required>
				</div>

				<div class="divisor2">
					<label for="doc">Escolha o Tipo de Documento</label><br>
					<select name="doc" id="doc">
						<option value="n">Selecione uma opção</option>
						<option value="1">CPF</option>
						<option value="2">CNPJ</option>
					</select>
				</div>

				<div class="divisor2 cpf">
					<label for="cpf">CPF</label><br>
					<input type="text" name="cpf" maxlength="14" id="cpf" class="cpf">
				</div>

				<div class="divisor2 cnpj" style="display:none">
					<label for="cnpj">CNPJ</label><br>
					<input type="text" name="cnpj" maxlength="18" id="cnpj" class="cnpj">
				</div>

				<div class="divisor2">
					<label for="zipcode">CEP</label><br>
					<input type="text" name="zipcode" maxlength="9" id="zipcode" class="zipcode">
				</div>

				<div class="divisor2">
					<label for="address">Endereço Completo</label><br>
					<input type="text" name="address" id="address" class="address" required>
				</div>

				<div class="divisor2">
					<label for="number">Número do Endereço</label><br>
					<input type="text" name="number" id="number" required>
				</div>

				<div class="divisor2">
					<label for="neighborhood">Bairro</label><br>
					<input type="text" name="neighborhood" id="neighborhood" class="neighborhood" required>
				</div>

				<div class="divisor2">
					<label for="city">Cidade</label><br>
					<input type="text" name="city" id="city" class="city" required>
				</div>

				<div class="divisor2">
					<label for="state">Estado</label><br>
					<input type="text" name="state" id="state" class="state" required>

				</div>

				<div class="divisor2">
					<br><button name="btn_newclient" id="btn_newclient" class="btn_new radius"><i class="fa fa-pen"></i>
						Cadastrar Dados</button>
				</div>

			</form>

			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>

	<!-- Modal Deletar Usuário -->
	<div class="delete" style="display:none">
		<div class="modal_container radius">
			<div class="espaco-medium"></div>
			<h1 class="text-center font-text-min">Você Deseja Remover Este Cliente?</h1>
			<p class="text-center"><br>
				<a href="#" title="Remover este cliente" class="btn_edit radius removeClient"><i
						class="fa fa-check"></i> SIM </a>&nbsp;&nbsp;
				<a href="#" title="Fechar a modal" class="btn_delete radius modal-close"><i
						class="fa fa-times-circle"></i> NÃO</a>
			</p>

			<div class="clear"></div>
			<div class="espaco-medium"></div>
		</div>
	</div>

	<section class="content_left">
		<!-- Chama o menu da página-->
		<?php require 'includes/left.php'; ?>
	</section>

	<section class="content_right">
		<!-- Chama o cabeçalho da página-->
		<?php require 'includes/header.php'; ?>

		<article class="bgcolor-white">

			<div class="searching">


				<form method="post" id="form_search">
					<div class="espaco-min"></div>
					<h2 class="text-margin text-center">Digite o termo abaixo e selecione uma opção para sua consulta.
					</h2>
					<div class="divisor2">
						<label for="searching">Busca Por Cliente:</label>
						<input type="text" name="searching" id="searching" placeholder="Digite o nome do cliente" required>
					</div>

					<br>
					<div class="divisor2" style="display: flex; justify-content: center; align-items: center;">
						<button name="btn_search" id="btn_search" class="btn_edit radius" style="float: left"><i
								class="fa fa-search"></i> Pesquisar</button>

						<a href="#" class="btn_new radius font-text-sub newClient"><i class="fa fa-plus-circle"></i>
							NOVO</a>
					</div>

					<div class="clear"></div>
					<div class="espaco-min"></div>
				</form>
				<table>
					<?php
					if (isset($_POST['btn_search'])) {
						$Search = strip_tags(filter_input(INPUT_POST, 'searching', FILTER_SANITIZE_STRIPPED));

						if (empty($Search)) {
							echo "<div class='result btn_new'>
									<p class = 'color-white font-text-min'>Favor Preecher campo de busca</p>
								</div>";
						} else {
							$Read = $pdo->prepare("SELECT cliente_nome, cliente_status, cliente_cadastro, cliente_email  FROM ".DB_CLIENTS." WHERE cliente_nome = :cliente_nome AND cliente_status = :cliente_status");
							$Read->bindValue(':cliente_nome', $Search);
							$Read->bindValue(':cliente_status', 1);
							$Read->execute();


							$Lines = $Read->rowCount();

							if ($Lines == 0) {
								echo "<div class='result btn_new'>
							<p class = 'color-white font-text-min'>Cliente nao encontrado :'( </p>
						</div>";

							} else {
								foreach ($Read as $Show) {



									?>


									<tr>
										<td>
											<p class="font-text-sub"><b>Cliente:</b></p>
											<p><?= strip_tags($Show['cliente_nome']) ?></p>
										</td>

										<td>
											<p class="font-text-sub"><b>Cadastrado:</b></p>
											<p class ="text-center"><?= ($Show['cliente_cadastro'] == '' || $Show['cliente_cadastro'] == '0000-00-00 00:00:00' ? '-' : date('d/m/Y',strtotime($Show['cliente_cadastro']))) ?></p>
										</td>

										<td>
											<p class="font-text-sub"><b>E-mail:</b></p>
											<p><?= strip_tags($Show['cliente_email']) ?></p>
										</td>

										<td>
											<p class="font-text-sub"><b>Status:</b></p>
											<p class="font-text-sub">
												<?php
												if($Show['cliente_status'] == 0){
													echo '<span class="inactive radius">INATIVO</span>';
												}else{
													echo '<span class="active radius">ATIVO</span>';
												}																							
												?>
											</p>
										</td>

										<td>
											<p class="text-center">
												<a href="#" title="Visualizar e editar informações"
													class="radius btn_edit editClient" data-id="<?php strip_tags($Show['cliente_id']) ?>"><i class="fa fa-pen"></i></a>
												<a href="#" title="Remover este registro" class="radius btn_delete deleteClient" data-id="<?php strip_tags($Show['cliente_id']) ?>"><i
														class="fa fa-trash-alt"></i></a>
											</p>
										</td>
									</tr>

								<?php
								}
							}
						}
					}

					?>

				</table>

			</div>
			<div class="espaco-min"></div>
		</article>

		<div class="espaco-min"></div>
	</section>
	<div class="clear"></div>
</main>