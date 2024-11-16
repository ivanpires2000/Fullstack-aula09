<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <pre>
        <h1>POST</h1>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" required pattern="(\d{2}\d{5}-\d{4})"/>

        <label>Digite seu email:</label>
        <input type="text" name="email" required pattern=^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$qpp-hheu-szo/>

        <input type="submit" value="Enviar para o servidor">
    </form>

<h1>GET</h1>
     <form action="formulario.php" method="get">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]+\s?[A-Za-zéÉáÁíÍóÓúÚçÇâÂêÊîÎôÔûÛãÃõÕüÜ]*$"/>

        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" required pattern="(\d{2}\d{5}-\d{4})"/>

        <label>Digite seu email:</label>
        <input type="text" name="email" required pattern=^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$qpp-hheu-szo/>

        <input type="submit" value="Enviar para o servidor">
    </form>

    </pre>

    <hr>
    <?php
    $nome = ''; // nome inicia vazio

    if (isset($_POST['nome'])) { //existe o $_POST com name do form nome
        $nome = $_POST['nome'];
    } elseif (isset($_GET['nome'])) { //existe o $_GET com name do form nome
        $nome = $_GET['nome'];
    }



    if ($nome != '') {
        echo '<p>Olá, ' . $nome . '! Seja bem-vindo(a)</p>';
    }else{
        echo 'Formulario ainda não preenchido';
    }

    ?>
</body>

</html>