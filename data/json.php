<?php
// conexão do banco
$conn_banco = array(
	'user' => 'USUARIO',
	'pass' => 'SENHA',
	'db'   => 'BANCO',
	'host' => 'HOST'
	);

// tabela utilizada
$tbl_banco = 'SUA TABELA NO BANCO ';

// Primary key
$tbl_key = 'PRIMARY KEY DO BANCO';

// colunas do banco
$colunas = array(
	array( 'db' => 'CAMPO1', 'dt' => 0 ),
	array( 'db' => 'CAMPO2',  'dt' => 1 ),
	array( 'db' => 'CAMPO3',   'dt' => 2 ),
	);

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple($_GET, $conn_banco, $tbl_banco, $tbl_key, $colunas)
	);
	?>