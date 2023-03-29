<?php
define('HOST', 'db4free.net:3306');
define('USUARIO', 'sugiwama_root');
define('SENHA', 'Nicolas11@!');
define('DB', 'sugiwamafoda');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');