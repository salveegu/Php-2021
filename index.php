<?php
 echo "<h1>Mostrando os maiores times do Brasil </h1>";
 
 $nome = "Corinthians"; 
 
 echo (" O top 1 é:  ".$nome."<br>");
 
 $times = array ("Palmeiras",
 "Santos",
 "Fluminense",
 "São Paulo",
 "Vasco",
 "Gremio");
 
 // Aplicando o size off para que o proprio programa reconheça o tamanho so array automaticcamente
 for ($i=0; $i<sizeof($times) ; $i++){
	 
	 
	 echo ("<br> O nome do time é: ".$times[$i]);
 }
 
 echo ("<br><br>Visualizando o Vetor times:<br>");
 
 echo ('<pre>');
 print_r($times);
 echo ('</pre>');
 
 
 echo("Adicionando valores no array: ");
 
 // adicionando elemento na proxima posicao do array

 $times[]="Ituano";
 $times[]="Portuguesa";
 $times[]="Coritiba";
 
 echo ('<pre>');
 print_r($times);
 echo ('</pre>');

 //indice do "array associativos" com nome(String) antes usavamos números

 $time = array(

	 "nome" => "Atlético", 
	 "estado" => "MG" , 
	 "pontos" => 38 , 
	 "jogos" => 20
 );

 echo("<h3> ARRAY ASSOCIATIVO </h3>");	

 //comando para mostrar o Array
 echo ('<pre>');
 print_r($time);
 echo ('</pre>');
 

 echo("o Nome do array associa é: ".$time["nome"]."<br>");
 echo("o Estado do array associa é: ".$time["estado"]);

//percorrendo um array associativo

 echo("<h3> Como percorrrer um ARRAY ASSOCIATIVO com FOREACH </h3>");	

 foreach ($time as $indice => $valorArmazenado) {
	 echo("<br>".$indice ." : ".$valorArmazenado);
 }

 //_______________________________________________________________ PARTE 2
// array multidimensional matriz indexada

 echo("<h3> Array multidimensional MATRIZ 3x3 INDEXADA </h3>");	

 $tabela = array(
	 array("Atletico","MG",45),
	 array("Palmeiras","SP",38),
	 array("Fortaleza","CE",36)
 );

 echo ('<pre>');
 print_r($tabela);
 echo ('</pre>');

 echo ('<pre>');
 print_r($tabela[2][0]);
 echo ('</pre>');


 //criando o for de uma matriz 3x3 usando size off

 echo("<h3> Percorrendo os elementos da  MATRIZ 3x3 </h3>");	

 for ($i=0; $i < sizeof($tabela) ; $i++) { 
   
	for ($j=0; $j < sizeof($tabela) ; $j++) { 
	
	echo("<br>".$tabela[$i][$j]);
   }
	
 }
//__________________________________________________________
  //criando o for de uma matriz 3x3 usando sem SIZE OFF

  
 // echo("<h3> Percorrendo os elementos da  MATRIZ 3x3 </h3>");	

 //for ($i=0; $i < sizeof($tabela) ; $i++) { 
   
	//for ($j=0; $j < sizeof($tabela) ; $j++) { 
	
	//echo("<br>".$tabela[$i][$j]);
//}
	
 //}

 //_______________________________________________________________ PArte 3

 // Criando matriz 3x3 associativa 
 

 echo("<h3> Array multidimensional(MATRIZ) Associativa 3x3 </h3>");	

 $tabela = array(
	 array("nome" => "Atletico", "estado" => "MG","pontos" => 45),
	 array("nome" => "Palmeiras","estado" => "SP","pontos" =>38),
	 array("nome" => "Fortaleza","estado" => "CE","pontos" =>36)
 );

 echo ('<pre>');
 print_r($tabela);
 echo ('</pre>');


 //percorrendo array multidimensional

 echo("<h3> PERCORRENDO Array multidimensional(MATRIZ) Associativa 3x3 </h3>");	

 for ($i=0; $i < sizeof($tabela) ; $i++) { 
   
	 echo("<br>".$tabela[$i]["nome"]." - ".$tabela[$i]["estado"]." - ".$tabela[$i]["pontos"]);
   
	
 }