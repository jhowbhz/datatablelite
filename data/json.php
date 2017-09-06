<?php
// conexão do banco
$conn_banco = array(
	'user' => 'username',
	'pass' => 'password',
	'db'   => 'db_17042017',
	'host' => 'app.sulamericanaseguroauto.com.br'
	);

// tabela utilizada
$tbl_banco = 'tbl_cadastro';

// Primary key
$tbl_key = 'id_cadastro';

// colunas do banco
$colunas = array(
	array( 'db' => 'cod_cadastro', 'dt' => 0 ),
	array( 'db' => 'dt_cadastro',  'dt' => 1 ),
	array( 'db' => 'nm_cadastro',   'dt' => 2 ),
	);

require( 'ssp.class.php' );

echo json_encode(
	SSP::simple($_GET, $conn_banco, $tbl_banco, $tbl_key, $colunas)
	);