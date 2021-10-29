<?php
$servername = "localhost";
$username = "root";
$password = "agmtech100r";
$dbname = "basea";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$baseA = array( 
	0 =>'cpf', 
	1 => 'nome',
	2=> 'endereco',
	3 => 'lista_de_dividas'
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT cpf, nome, endereco, lista_de_dividas  FROM basea";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT cpf, nome, endereco, lista_de_dividas FROM basea WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( cpf LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR nome LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR endereco LIKE '".$requestData['search']['value']."%' )";
	$result_usuarios.=" OR lista_de_dividas LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $baseA[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["cpf"];
	$dado[] = $row_usuarios["nome"];
	$dado[] = $row_usuarios["endereco"];
	$dado[] = $row_usuarios["lista_de_dividas"];	
	$dados[] = $dado;
}


//Cria o array de informações a serem retornadas para o Javascript
$json_data = array(
	"draw" => intval( $requestData['draw'] ),//para cada requisição é enviado um número como parâmetro
	"recordsTotal" => intval( $qnt_linhas ),  //Quantidade de registros que há no banco de dados
	"recordsFiltered" => intval( $totalFiltered ), //Total de registros quando houver pesquisa
	"data" => $dados   //Array de dados completo dos dados retornados da tabela 
);

echo json_encode($json_data);  //enviar dados como formato json
