<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPAW - Atividades</title>
    <?php if ($_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/index.php' || $_SERVER['REQUEST_URI'] == '/LPAW/index.php' || 
        $_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/' || $_SERVER['REQUEST_URI'] == '/LPAW/') {
            echo '<link rel="stylesheet" href="./css/bootstrap.min.css">';
            echo '<link rel="stylesheet" href="./css/padrao.css">';
        } else {
            echo '<link rel="stylesheet" href="../css/bootstrap.min.css">';
            echo '<link rel="stylesheet" href="../css/padrao.css">';
        }
    ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <?php    
                if ($_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/index.php' || $_SERVER['REQUEST_URI'] == '/LPAW/index.php' || 
                $_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/' || $_SERVER['REQUEST_URI'] == '/LPAW/' )
                {
                    echo '<a class="navbar-brand" href="./index.php">LPAW</a>';
                } else {
                    echo '<a class="navbar-brand" href="../index.php">LPAW</a>';
                }
            ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Atividades</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php    
                            if ($_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/index.php' || $_SERVER['REQUEST_URI'] == '/LPAW/index.php' || 
                                $_SERVER['REQUEST_URI'] == '/GitHub/GitHub/PHP/LPAW/' || $_SERVER['REQUEST_URI'] == '/LPAW/') {
                                echo ' <p class="dropdown-header">Dia 1</p>
                                <a class="dropdown-item" href="./atividades/exercicio01.php">Exercício 01</a>
                                <a class="dropdown-item" href="./atividades/exercicio02.php">Exercício 02</a>
                                <a class="dropdown-item" href="./atividades/exercicio03.php">Exercício 03</a>
                                <a class="dropdown-item" href="./atividades/exercicio04.php">Exercício 04</a>
                                <div class="dropdown-divider"></div>
                                <p class="dropdown-header">Dia 2</p>
                                <a class="dropdown-item" href="./atividades/exercicio05.php">Exercício 05</a>
                                <a class="dropdown-item" href="./atividades/exercicio06.php">Exercício 06</a>
                                <a class="dropdown-item" href="./atividades/exercicio07.php">Exercício 07</a>
                                <a class="dropdown-item" href="./atividades/exercicio08.php">Exercício 08</a>';
                            } else {
                                echo ' <p class="dropdown-header">Dia 1</p>
                                <a class="dropdown-item" href="./exercicio01.php">Exercício 01</a>
                                <a class="dropdown-item" href="./exercicio02.php">Exercício 02</a>
                                <a class="dropdown-item" href="./exercicio03.php">Exercício 03</a>
                                <a class="dropdown-item" href="./exercicio04.php">Exercício 04</a>
                                <div class="dropdown-divider"></div>
                                <p class="dropdown-header">Dia 2</p>
                                <a class="dropdown-item" href="./exercicio05.php">Exercício 05</a>
                                <a class="dropdown-item" href="./exercicio06.php">Exercício 06</a>
                                <a class="dropdown-item" href="./exercicio07.php">Exercício 07</a>
                                <a class="dropdown-item" href="./exercicio08.php">Exercício 08</a>';
                            }
                        ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </header>