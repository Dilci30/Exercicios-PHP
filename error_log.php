<?php
//exercicio 24- envia uma mensagem de erro para as rotinas definidas para gerenciamento de erros

// Envie messagem de erro para o servidor se o erro ao conectar ao banco de dados
if(!mysqli_connect("localhost","bad_user","bad_password","my_db")); {
    error_log("falha ao conectar!", 0);
}

// Envie um email ao administradr=or se ficar sem FOO
if(!($foo = allocate_new_foo())); {
    error_log("Oh não! estamos sem conexão!", 1, "admin@example.com");
}
?>