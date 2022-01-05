<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado da Pesquisa</title>
</head>
<body>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET"){
		$nome = $_GET['nome'];
		$idade = $_GET['idade'];
		$sexo = $_GET['sexo'];
		$computador = $_GET['computador'];
		$notebook = $_GET['notebook'];
		$smartphone = $_GET['smartphone'];
		$experiencia = $_GET['experiencia'];

		$descricaocomputador = $_GET['descricaocomputador'];
		$descricaonotebook = $_GET['descricaonotebook'];
		$descricaosmartphone = $_GET['descricaosmartphone'];
		$linguagem = $_GET['linguagem'];
		$linguagemoutra = $_GET['linguagemoutra'];

		?>

		<h1>Bem vindo <?php echo $nome;?>!!!</h1>
		<span>
			Vamos ver o que eu aprendi sobre você.<br>
			Você e do sexo <?php echo $sexo;?> e tem <?php echo $idade;?> anos.<br>
			<?php
			if($computador == "nao" && $notebook == "nao" && $smartphone == "nao"){
				?>
				Você não tem nenhum equipamento eletrônico (computador, notebook ou smartphone).
				<?php
			} else {
				?>
				Você tem o(s) seguinte(s) equipamento(s):
				<ul>

					<?php 
					if($computador == "sim"){ ?>
						<li>Computador:</li>
						<ul>
							<li>Sobre: <?php echo $descricaocomputador;?></li>
						</ul>
					<?php
					}

					if($notebook == "sim"){ ?>
						<li>Notebook:</li>
						<ul>
							<li>Sobre: <?php echo $descricaonotebook;?></li>
						</ul>
					<?php
					}

					if($smartphone == "sim"){ ?>
						<li>Smartphone:</li>
						<ul>
							<li>Sobre: <?php echo $descricaosmartphone;?></li>
						</ul>
					<?php
					}
					
					?>

				</ul>

				<?php 
				if ($experiencia == "naopossui") { ?>
					Você não tem conhecimento de programação (ainda)!<br>
				<?php
				} else { ?>
					Você tem o <?php echo $experiencia;?> de programação e sabe programar em <?php if($linguagem == "outro"){echo $linguagemoutra;} else{ echo $linguagem;}?>.
				<?php
				}

				?>


				<?php
			}
			?>
		</span>
		<?php


	}else {
		header("Location: ./ativ_formulario.php");
	}
?>
</body>
</html>