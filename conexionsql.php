
<?php

    $driver   = 'sqlsrv';
    $servidor = 'RONY-VELASQUEZ';
    $usuario  = 'sa';
    $clave    = '1234';
    $base     = 'EDUCANDOSA';

    $cadena   = "$driver:server=$servidor;Database=$base";
    $cnx      = new pdo($cadena,$usuario,$clave);

?>
