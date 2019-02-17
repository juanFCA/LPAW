<?php include_once "../visao/cabecalho.php"?>
      
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 03</div>
            <div class="card-body">
                <p class="card-text">Elabore um	programa em	PHP	que	compare	três números inteiros e	determine qual o maior entre eles.	
                    Imprima	os três	números	em ordem crescente e informe o maior.</p>
                <form action="exercicio03.php" method="POST">
                    <div class="form-group">
                        <label for="int1">1º Número Inteiro:</label>
                        <input type="number" class="form-control" id="inteiro1" name="inteiro1" placeholder="Insira o Valor do 1º Número">
                    </div>
                    <div class="form-group">
                        <label for="int1">2º Número Inteiro:</label>
                        <input type="number" class="form-control" id="inteiro2" name="inteiro2" placeholder="Insira o Valor do 2º Número">
                    </div>
                    <div class="form-group">
                        <label for="int1">3º Número Inteiro:</label>
                        <input type="number" class="form-control" id="inteiro3" name="inteiro3" placeholder="Insira o Valor do 3º Número">
                    </div>
                    <button type="submit" class="btn btn-primary">Ordenar e Encontrar o Maior</button>
                </form>     
                <?php 
                    if(isset($_POST["inteiro1"]) && isset($_POST["inteiro2"]) && isset($_POST["inteiro3"])){
                        if(!empty($_POST["inteiro1"])) {$inteiro1 = $_POST["inteiro1"];} else {$inteiro1 = 0;}
                        if(!empty($_POST["inteiro2"])) {$inteiro2 = $_POST["inteiro2"];} else {$inteiro2 = 0;}
                        if(!empty($_POST["inteiro3"])) {$inteiro3 = $_POST["inteiro3"];} else {$inteiro3 = 0;}

                        function ordemCrescente($int1, $int2, $int3) {
                            $ordenado = array();
                            if($int1 < $int2) {
                                if($int2 < $int3) {
                                    $ordenado = [$int1, $int2, $int3];
                                } elseif($int1 < $int3) {
                                    $ordenado = [$int1, $int3, $int2];
                                } else {
                                    $ordenado = [$int3, $int1, $int2];
                                }
                            } else {
                                if($int2 < $int3) {
                                    if ($int1 < $int3) {
                                        $ordenado = [$int2, $int1, $int3];
                                    } else {
                                        $ordenado = [$int2, $int3, $int1];
                                    }
                                } else {
                                    if ($int1 < $int3) {
                                        $ordenado = [$int3, $int1, $int2];
                                    } else {
                                        $ordenado = [$int3, $int2, $int1];
                                    }            
                                }
                            }
                            return $ordenado;
                        }

                        $crescente = ordemCrescente($inteiro1, $inteiro2, $inteiro3);
                        echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : Ordem Crescente ('
                        . implode(', ', $crescente) .') e Maior Valor ('. $crescente[count($crescente)-1].')</div>';           
                    }
                ?> 
            </div> 
        </div>
    </div>
     
<?php include_once "../visao/rodape.php"?>