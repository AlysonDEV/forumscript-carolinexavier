<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atividade Formulário</title>
</head>
<body>
	<form method="GET" action="./ativ_formulario2.php">
		<fieldset>
			<legend>Informações</legend>
			<label>Nome:</label>
			<input type="text" name="nome" size="40" maxlength="30" required/>
			<?php echo '</br>'?>
			Idade:
			<input type="number" name="idade" />
			<?php echo '</br>'?>
			Sexo:
			<?php echo '</br>'?>
			<input type="radio" name="sexo" value="masculino">Masculino
			<input type="radio" name="sexo" value="feminino" >Feminino
			<?php echo '</br>'?>
			Tem computador?
			<?php echo '</br>'?>
			<input type="checkbox" name="computador" value="sim">Sim
			<input type="checkbox" name="computador" value="não">Não
			<?php echo '</br>'?>
			Tem notebook?
			<?php echo '</br>'?>
			<input type="checkbox" name="notebook" value="sim">Sim
			<input type="checkbox" name="notebook" value="não">Não
			<?php echo '</br>'?>
			Tem smartphone?
			<?php echo '</br>'?>
			<input type="checkbox" name="smartphone" value="sim">Sim
			<input type="checkbox" name="smartphone" value="não">Não
			<?php echo '</br>'?>
			Experiência com programação:
			<select name="experiencia">
				<option value="naopossui">Não Possui</option>
				<option value="iniciante">Iniciante</option>
				<option value="intermediario">Intermediario</option>
				<option value="avançado">Avançado</option>
			</select>
			<?php echo '</br>'?>
			<input type="submit" value="Cadastrar" />
		</fieldset>
	</form>
</body>
</html>