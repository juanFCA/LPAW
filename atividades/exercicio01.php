<?php include_once "../visao/cabecalho.php"?>
    
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 01</div>
            <div class="card-body">
                <p class="card-text">Elabore um programa em PHP que calcule	a média aritmética de duas notas e exiba o resultado na tela.</p>
                <form action="exercicio01.php" method="POST">
                    <div class="form-group">
                        <label for="nota1">1ª Nota:</label>
                        <input type="number" class="form-control" id="nota1" name="nota1" step="0.01" placeholder="Insira o Valor da 1ª Nota">
                    </div>
                    <div class="form-group">
                        <label for="nota2">2ª Nota:</label>
                        <input type="number" class="form-control" id="nota2" name ="nota2" step="0.01" placeholder="Insira o Valor da 2ª Nota">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular Média</button>
                </form>     
                <?php 
                    if (isset($_POST["nota1"]) && isset($_POST["nota2"])) {
                        if(!empty($_POST["nota1"])) {
                            $a = $_POST["nota1"];
                        } else {
                            $a = 0;
                        }
                        if(!empty($_POST["nota2"])) {
                            $b = $_POST["nota2"];
                        } else {
                            $b = 0;
                        }
                        function media($a, $b) {
                            echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : ' . (($a + $b) / 2) . '</div>';
                        }
                        media($a, $b);     
                    }
                ?> 
            </div> 
        </div>
    </div>
    
<?php include_once "../visao/rodape.php"?>