<?php 


    if(isset($_POST['nome'], $_POST['senha'])) {

        // Utilizamos o strip_tags para impedir que o usuário envie tags html
        // Utilizamos o trim para remover os espaços em brancos

        $nome = trim(strip_tags($_POST['nome']));
        $senha = trim(strip_tags($_POST['senha']));

        if(empty($nome) || empty($senha)) {
            echo "Por favor, preencha os campos!";
        }

        else if(strlen($nome) < 3 || strlen($senha) < 3) {
            echo "Os campos precisam ser acima de 3 caracteres";
        }
        
        else {
            echo "Nome: $nome <br> Senha: $senha";
        }
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação - PHP</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="senha" placeholder="senha">

        <button type="submit">Enviar</button>
    </form>

 
</body>
</html>

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

<?php 

// Criamos um array vazio
$erros = [];

if(isset($_POST['nome'], $_POST['senha'])) {

    // Utilizamos o strip_tags para impedir que o usuário envie tags html
    // Utilizamos o trim para remover os espaços em brancos
    $nome = trim(strip_tags($_POST['nome']));
    $senha = trim(strip_tags($_POST['senha']));


    // Guardamos os erros da validação em um array
    if(empty($nome) || empty($senha)) {
        $erros[] = "Os campos nome e senha precisam ser preenchidos";
    }

    if(strlen($senha) < 8) {
        $erros[] = "A senha precisa ter no mínimo 8 caracteres";
    }

    if(strlen($nome) < 4) {
        $erros[] = "O nome não pode ter menos que 4 caracteres";
    }
    else {
        echo "Passou pela validação <Br>";
        echo "Nome: $nome, Senha: $senha"; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação - PHP</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="senha" placeholder="senha">

        <button type="submit">Enviar</button>
    </form>

    <!-- Se a quantidade de erros do array for maior que 0, é porque existem erros, então ele vai imprimir -->

    <?php if(count($erros) > 0): ?>
        <ul>
            <?php foreach($erros as $erro): ?>
                <li><?php echo $erro; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
</body>
</html>