<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Docker PHP Hello World</title>
</head>
<body>
<h1>Bem vindo à aula de Docker!</h1>

<p>
<?php 
    echo 'Hello, world!';
?>
</p>

<h2>Informações do Servidor:</h2>

<pre>
<?php 
    // Mostra informações detalhadas sobre o servidor PHP em uso
    ob_start();
    phpinfo();
    $info = ob_get_contents();
    ob_end_clean();

    // Limpa as informações para apenas o necessário 
    $info_lines = explode("\n", strip_tags($info, "<tr><td><h2>"));
    $new_lines = array();
    
    foreach($info_lines as $line)
    {
        // Limpa até 2º token '<td>' (configuração de limite para 3)
        $cleaned_line = trim(strip_tags($line));
        if(strpos($cleaned_line, 'PHP Version') !== false)
            $new_lines[] = $cleaned_line;

        else if(strpos($cleaned_line, 'System ') !== false)
            $new_lines[] = str_replace("System ", "", $cleaned_line);
    }
    
    // Mostra agora as linhas limpas
    foreach($new_lines as $line)
        echo $line . "\n";

?>
</pre>

<h2>Hora Atual:</h2>

<p>
<?php 
    // Mostra a data e hora atuais
    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y H:i:s');
?>
</p>

</body>
</html>
