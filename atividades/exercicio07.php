<?php include_once "../visao/cabecalho.php"?>
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 07</div>
            <div class="card-body">
                <p class="card-text">Construa um algoritmo para entrar com um número de 1 a 10 e imprimi-lo o número de vezes correspondente ao seu valor.</p>
                <form action="exercicio07.php" method="POST">
                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="number" class="form-control" id="numero" name="numero" placeholder="Insira um Número de 1 a 10" min="1" max="10">
                    </div>
                    <button type="submit" class="btn btn-primary">Imprimir Número</button>
                </form>     
                <?php 
                    if (isset($_POST["numero"])) {
                        if(!empty($_POST["numero"])) {
                            $numero = $_POST["numero"];
                        } else {
                            $numero = 0;
                        }

                        function imprimir($num) {
                        	$lista = array();	
                            for ($i=0; $i < $num; $i++) { 
                            	$lista[] = $num;
                            }
                            return $lista;
                        }
                         
                        echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : ' . implode(", ", imprimir($numero)) . '</div>';                             
                    }
                ?> 
            </div> 
        </div>
    </div>
    
<?php include_once "../visao/rodape.php"?>