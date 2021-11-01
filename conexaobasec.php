<?php
$servername = "localhost";
$username = "root";
$password = "agmtech100r";
$dbname = "basec";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Receber a requisão da pesquisa 
$requestData= $_REQUEST;


//Indice da coluna na tabela visualizar resultado => nome da coluna no banco de dados
$baseC = array( 
	0 =>'ultima_consulta', 
	1 => 'movi_financ_cpf',
	2=> 'ultima_compra',
);

//Obtendo registros de número total sem qualquer pesquisa
$result_user = "SELECT ultima_consulta, movi_financ_cpf, ultima_compra FROM basec";
$resultado_user =mysqli_query($conn, $result_user);
$qnt_linhas = mysqli_num_rows($resultado_user);

//Obter os dados a serem apresentados
$result_usuarios = "SELECT ultima_consulta, movi_financ_cpf, ultima_compra FROM basec WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // se houver um parâmetro de pesquisa, $requestData['search']['value'] contém o parâmetro de pesquisa
	$result_usuarios.=" AND ( ultima_consulta LIKE '".$requestData['search']['value']."%' ";    
	$result_usuarios.=" OR movi_financ_cpf LIKE '".$requestData['search']['value']."%' ";
	$result_usuarios.=" OR ultima_compra LIKE '".$requestData['search']['value']."%' )";
}

$resultado_usuarios=mysqli_query($conn, $result_usuarios);
$totalFiltered = mysqli_num_rows($resultado_usuarios);
//Ordenar o resultado
$result_usuarios.=" ORDER BY ". $baseC[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
$resultado_usuarios=mysqli_query($conn, $result_usuarios);

// Ler e criar o array de dados
$dados = array();
while( $row_usuarios =mysqli_fetch_array($resultado_usuarios) ) {  
	$dado = array(); 
	$dado[] = $row_usuarios["ultima_consulta"];
	$dado[] = $row_usuarios["movi_financ_cpf"];
	$dado[] = $row_usuarios["ultima_compra"];
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
