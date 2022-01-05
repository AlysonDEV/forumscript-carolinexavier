<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade Formulário</title>
</head>
<body>
<form method="GET" action="./ativ_resultado.php">
	<fieldset>
		<legend>Complete os dados</legend>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$nome = $_GET['nome'];
		$idade = $_GET['idade'];
		$sexo = $_GET['sexo'];

		$computador = $_GET['computador'];
		$notebook = $_GET['notebook'];
		$smartphone = $_GET['smartphone'];
		$experiencia = $_GET['experiencia'];
		?>

			<div>
				<label>Nome:</label>
				<input type="text" name="nome" value="<?php echo $nome;?>" readonly>
			</div>
			<div>
				<label>Idade:</label>
				<input type="number" name="idade" value="<?php echo $idade;?>" readonly>
			</div>
			<div>
				<label>Sexo</label>
				<input type="text" name="sexo" value="<?php echo $sexo;?>" readonly>
			</div>
			<div>
				<label>Computador?</label>
				<input type="text" name="computador" value="<?php echo $computador;?>" readonly>
			</div>
			<div>
				<label>Notebook?</label>
				<input type="text" name="notebook" value="<?php echo $notebook;?>" readonly>
			</div>
			<div>
				<label>Smartphone?</label>
				<input type="text" name="smartphone" value="<?php echo $smartphone;?>" readonly>
			</div>
			<div>
				<label>Experiencia?</label>
				<input type="text" name="experiencia" value="<?php echo $experiencia;?>" readonly>
			</div>


		<?php

		if($computador == "sim") {
			?>
			<div>
				<label>Descrição Computador:</label>
				<textarea name="descricaocomputador" placeholder="Insira os dados do seu computador aqui."></textarea>
			</div>
			<?php
		}

		if($notebook == "sim"){
			?>
			<div>
				<label>Descrição Notebook:</label>
				<textarea name="descricaonotebook" placeholder="Insira os dados do seu notebook aqui."></textarea>
			</div>
			<?php
		}

		if($smartphone == "sim"){
			?>
			<div>
				<label>Descrição Smartphone:</label>
				<textarea name="descricaosmartphone" placeholder="Insira os dados do seu smartphone aqui."></textarea>
			</div>
			<?php
		}

		if($experiencia != "naopossui") {
			?>
			<div>
				<fieldset>
					<legend>Selecione sua linguagem preferida:</legend>
					<select name="linguagem">
						<option value="c">C</option>
						<option value="c++">C++</option>
						<option value="java">Java</option>
						<option value="php">PHP</option>
						<option value="c">C</option>
						<option value="python">Python</option>
						<option value="pearl">Pearl</option>
						<option value="ruby">Ruby</option>
						<option value="outra">Outra</option>
					</select>
					<input type="input" name="linguagemoutra" placeholder="Caso selecione outra">
				</fieldset>
			</div>
			<?php
		}


	}else {
		header("Location: ./ativ_formulario.php");
	}
?>
		<div>
			<input type="submit" value="Concluir cadastro" />
		</div>
	</fieldset>
</form>
</body>
</html>