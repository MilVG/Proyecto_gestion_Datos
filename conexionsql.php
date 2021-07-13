
<?php

    $driver   = 'sqlsrv';
    $servidor = 'MILTON\SQLEXPRESS';
    $usuario  = 'sa';
    $clave    = '1234';
    $base     = 'EDUCANDOSA';

    $cadena   = "$driver:server=$servidor;Database=$base";
    $cnx      = new pdo($cadena,$usuario,$clave);

?>