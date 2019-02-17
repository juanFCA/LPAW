<?php include_once "../visao/cabecalho.php"?>
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 08</div>
            <div class="card-body">
                <p class="card-text">Construa um algoritmo que leia o salário de 3 pessoas, escreva o maior valor e a diferença percentual para o menor valor.</p>
                <form action="exercicio08.php" method="POST">
                    <div class="form-group">
                        <label for="salario1">Salário da 1ª Pessoa:</label>
                        <input type="number" class="form-control" id="salario1" name="salario1" step="0.01" placeholder="Insira o Valor do Salário">
                    </div>
                    <div class="form-group">
                        <label for="salario2">Salário da 2ª Pessoa:</label>
                        <input type="number" class="form-control" id="salario2" name="salario2" step="0.01" placeholder="Insira o Valor do Salário">
                    </div>
                    <div class="form-group">
                        <label for="salario3">Salário da 3ª Pessoa:</label>
                        <input type="number" class="form-control" id="salario3" name="salario3" step="0.01" placeholder="Insira o Valor do Salário">
                    </div>
                    <button type="submit" class="btn btn-primary">Encontrar Maior Valor e Diferença Percentual</button>
                </form>     
                <?php 
                    if(isset($_POST["salario1"]) && isset($_POST["salario2"]) && isset($_POST["salario3"])){
                        if(!empty($_POST["salario1"])) {$salario1 = $_POST["salario1"];} else {$salario1 = 0;}
                        if(!empty($_POST["salario2"])) {$salario2 = $_POST["salario2"];} else {$salario2 = 0;}
                        if(!empty($_POST["salario3"])) {$salario3 = $_POST["salario3"];} else {$salario3 = 0;}

                        function ordemCrescente($sal1, $sal2, $sal3) {
                            $ordenado = array();
                            if($sal1 < $sal2) {
                                if($sal2 < $sal3) {
                                    $ordenado = [$sal1, $sal2, $sal3];
                                } elseif($sal1 < $sal3) {
                                    $ordenado = [$sal1, $sal3, $sal2];
                                } else {
                                    $ordenado = [$sal3, $sal1, $sal2];
                                }
                            } else {
                                if($sal2 < $sal3) {
                                    if ($sal1 < $sal3) {
                                        $ordenado = [$sal2, $sal1, $sal3];
                                    } else {
                                        $ordenado = [$sal2, $sal3, $sal1];
                                    }
                                } else {
                                    if ($sal1 < $sal3) {
                                        $ordenado = [$sal3, $sal1, $sal2];
                                    } else {
                                        $ordenado = [$sal3, $sal2, $sal1];
                                    }            
                                }
                            }
                            return $ordenado;
                        }

                        function diferencaPercentual($maior, $menor) {
    						if($maior != 0) {
        						return number_format((($menor * 100)/$maior), 2, '.', '');
    						}
						}

                        $crescente = ordemCrescente($salario1, $salario2, $salario3);
                        $diferenca = diferencaPercentual($crescente[count($crescente)-1], $crescente[0]);
                        echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : Maior Valor ('. $crescente[count($crescente)-1].') e Diferença Percentual (' . $diferenca . ') </div>';           
                    }
                ?> 
            </div> 
        </div>
    </div>
    
<?php include_once "../visao/rodape.php"?>