<?php include_once "../visao/cabecalho.php"?>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 05</div>
            <div class="card-body">
                <p class="card-text">Calcular a	média final	dadas as notas das 3 provas	e produzir uma saída com a média e a situação do aluno 
                    de acordo com o seguinte critério: média >= 7, aprovado; 5 < média < 7,	recuperação; média < 5, reprovado.</p>
                <form action="exercicio05.php" method="POST">
                    <div class="form-group">
                        <label for="nota1">Nota da 1ª Prova:</label>
                        <input type="number" class="form-control" id="nota1" name="nota1" step="0.01" placeholder="Insira o Valor da 1ª Nota">
                    </div>
                    <div class="form-group">
                        <label for="nota2">Nota da 2ª Prova:</label>
                        <input type="number" class="form-control" id="nota2" name="nota2" step="0.01" placeholder="Insira o Valor da 2ª Nota">
                    </div>
                    <div class="form-group">
                        <label for="nota3">Nota da 3ª Prova:</label>
                        <input type="number" class="form-control" id="nota3" name="nota3" step="0.01" placeholder="Insira o Valor da 3ª Nota">
                    </div>
                    <button type="submit" class="btn btn-primary">Calcular Média e Situação</button>
                </form>     
                <?php 
                    if (isset($_POST["nota1"]) && isset($_POST["nota2"]) && && isset($_POST["nota3"])) {
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
                        if(!empty($_POST["nota3"])) {
                            $c = $_POST["nota3"];
                        } else {
                            $c = 0;
                        }

                        function media($a, $b, $c) {
                            $notaFinal = ($a+$b+$c)/3;
                            if($notaFinal < 5) {
                                echo '<div class="alert alert-danger mt-3 text-center" role="alert"> Resultado : Nota Final ('. $notaFinal .') -> Reprovado </div>';
                            } elseif($notaFinal < 7) {
                                echo '<div class="alert alert-warning mt-3 text-center" role="alert"> Resultado : Nota Final ('. $notaFinal .') -> Recuperação </div>';
                            } else {
                                echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : Nota Final ('. $notaFinal .') -> Aprovado </div>';
                            }
                        }

                        media($a, $b, $c);     
                    }
                ?> 
            </div> 
        </div>
    </div>
        
<?php include_once "../visao/rodape.php"?>