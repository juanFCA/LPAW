<?php include_once "../visao/cabecalho.php"?>
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 06</div>
            <div class="card-body">
                <p class="card-text">Ler dois números inteiros, x e y, e imprimir o quociente e o resto da divisão inteira entre eles.</p>
                <form action="exercicio06.php" method="POST">
                    <div class="form-group">
                        <label for="inteiroX">Número X:</label>
                        <input type="number" class="form-control" id="inteiroX" name="inteiroX" placeholder="Insira um Inteiro X Qualquer">
                    </div>
                    <div class="form-group">
                        <label for="inteiroY">Número Y:</label>
                        <input type="number" class="form-control" id="inteiroY" name="inteiroY" placeholder="Insira um Inteiro Y Qualquer">
                    </div>
                    <button type="submit" class="btn btn-primary">Imprimir Quociente e Resto</button>
                </form>     
                <?php 
                    if (isset($_POST["inteiroX"]) && isset($_POST["inteiroY"])) {
                        if(!empty($_POST["inteiroX"])) {
                            $inteiroX = $_POST["inteiroX"];
                        } else {
                            $inteiroX = 0;
                        }
                        if(!empty($_POST["inteiroY"])) {
                            $inteiroY = $_POST["inteiroY"];
                        } else {
                            $inteiroY = 0;
                        }
                        
                        function quocienteResto($intX, $intY) {	
                            if ($intY != 0) {
                            	return [
                            		"Q" => (int) ($intX / $intY),
                            		"R" => $intX % $intY,
                            	]; 
                            }
                        }
                        
                        $resultado = quocienteResto($inteiroX, $inteiroY);

                        echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : Quociente (' . $resultado["Q"] . ') e Resto (' . $resultado["R"] . ') </div>';                             
                    }
                ?> 
            </div> 
        </div>
    </div>
    
<?php include_once "../visao/rodape.php"?>