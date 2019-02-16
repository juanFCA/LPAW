<?php include_once "../visao/cabecalho.php"?>
      
<div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 02</div>
            <div class="card-body">
                <p class="card-text">Elabore um	programa em	PHP	que, a partir de um	número inteiro e positivo, escreva todos os	seus divisores.	
                    Por	exemplo: se	o número for 6,	os divisores serão: 1, 2, 3	e 6.</p>
                <form action="exercicio02.php" method="POST">
                    <div class="form-group">
                        <label for="inteiro">Inteiro Positivo:</label>
                        <input type="number" class="form-control" id="inteiro" name="inteiro" placeholder="Insira um Número Inteiro Positico">
                    </div>
                    <button type="submit" class="btn btn-primary">Encontrar Divisores</button>
                </form>     
                <?php 
                    if (isset($_POST["inteiro"])) {
                        if(!empty($_POST["inteiro"]) && $_POST["inteiro"] > 0) {
                            $inteiro = $_POST["inteiro"];
                            $divisores = array();
                            function encontraDivisores($inteiro) {
                                for ($i=1; $i <= $inteiro; $i++) { 
                                    if ($inteiro % $i == 0) {
                                        $divisores[] = $i;
                                    }			
                                }	
                                return $divisores;
                            }
                            echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : ' . implode(', ', encontraDivisores($inteiro)) . '</div>';           
                        } else {
                            echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : Número Inválido </div>';           
                        }                 
                    }
                ?> 
            </div> 
        </div>
    </div>
    
<?php include_once "../visao/rodape.php"?>