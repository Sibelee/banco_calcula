
<!doctype html>
	<html lang="pt-br">
	<head>
	    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">	
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css">
		<title>Cálculo de Média</title>
			
	</head>

	<body>
		<header>
			
		<h3>Calcula Média</h3>
		<br>
        

		</header>
	
        <br><br><br>
		<section class="calcular">
		<h1>Vamos Calcular a Média?</h1><br>
		<p>Insira abaixo suas três notas e após isso clique em Calcular em Nota!<br>Caso queire a sua média em conceito, clique em Calcular em Conceito.</p><br><br>

		<section class="media">
			<form method="POST">

			    <label for="nome">Nome</label>
				<input class="nomedousuário" type="text" name="Nome" placeholder="Insira o Seu Nome!"><br><br>
                
                <label for="nota1">Primeira Nota</label>
				<input class="informaçãonota" type="number" id="nota1" name="Primeira_Nota" placeholder="Insira sua 1º Nota"><br><br>

				<label for="nota2">Segunda Nota</label>
				<input class="informaçãonota" type="number" id="nota2" name="Segunda_Nota" placeholder="Insira sua 2º Nota"><br><br>

				<label for="nota3">Terceira Nota</label>
				<input class="informaçãonota" type="number" id="nota3" name="Terceira_Nota" placeholder="Insira sua 3º Nota"><br><br><br>
				<button onclick="calcularnota()">CALCULAR EM NOTA</button>
				<button onclick="calcularconceito()">CALCULAR EM CONCEITO</button>
                <button onclick="limpar()">LIMPAR </button><br><br>
				<button type="SUBMIT">Banco de Dados</button><br><br>

	    	    
	    	    <p><b>MÉDIA EM CONCEITO: <input class="mediaem_conceito" type="text" id="mediaemconceito" name="Media_em_Conceito"></b></p>
	    	    <br>
	    	    <p><b>MÉDIA EM NOTA: <input class="mediaem_nota" type="text" id="mediaemnota" name="Media_em_Nota"></p><br><br>
				</form>

		</section>
		</section>
		<br><br>
        


		<script type="text/javascript">

			function calcularnota(){


			let nota1 = (document.querySelector('#nota1').value);
			let nota2 = (document.querySelector('#nota2').value);
			let nota3 = (document.querySelector('#nota3').value);
			nota1 = Number(nota1);
			nota2 = Number(nota2);
			nota3 = Number(nota3);
			
		
			document.querySelector("#mediaemnota").value = ((nota1+nota2+nota3)/3).toFixed(2);


			
			

			}



	

		    function calcularconceito(){


			let nota1 = (document.querySelector('#nota1').value);
			let nota2 = (document.querySelector('#nota2').value);
			let nota3 = (document.querySelector('#nota3').value);
			nota1 = Number(nota1);
			nota2 = Number(nota2);
			nota3 = Number(nota3);

			document.querySelector("#mediaemconceito").value = ((nota1+nota2+nota3)/3);


			

			if (document.querySelector("#mediaemconceito").value >= 8) {

				document.querySelector("#mediaemconceito").value = ("Seu conceito é A");

            } if (document.querySelector("#mediaemconceito").value >=6)

			document.querySelector("#mediaemconceito").value = ("Seu conceito é B");

				if (document.querySelector("#mediaemconceito").value < 6)
			    document.querySelector("#mediaemconceito").value = ("Seu conceito é C");

			} 

			function limpar(){

				document.querySelector("#nota1").value = "";
				document.querySelector("#nota2").value = "";
				document.querySelector("#nota3").value = "";
				mediaemconceito.innerHTML = "";
				mediaemnota.innerHTML = "";


			}

</script>
	

<?php
$nome = $_POST['Nome'];
$primeira_nota = $_POST['Primeira_Nota'];
$segunda_nota = $_POST['Segunda_Nota'];
$terceira_nota = $_POST['Terceira_Nota'];
$media_em_conceito = $_POST['Media_em_Conceito'];
$media_em_nota = $_POST['Media_em_Nota'];

$host = 'localhost';
$username = 'root';
$password = '1234';
$bancodedados = 'calcula';

$conectar = new mysqli($host, $username, $password, $bancodedados);

$sql = "INSERT INTO media VALUES(NULL, '$nome', '$primeira_nota', '$segunda_nota', '$terceira_nota', '$media_em_conceito', '$media_em_nota')";

if($conectar->query($sql) === true){
	echo "Dados inseridos <br>";
} else {
	echo "Erro ao inserir os dados: " . $conectar->error;
}

$conectar->close();
?>
            

	</body>
</html>