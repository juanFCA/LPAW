<?php include "../visao/cabecalho.php"?>
       
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">Exercício 04</div>
            <div class="card-body">
                <p class="card-text">Leia um número	e exiba	seu	sucessor</p>
                <form action="exercicio04.php" method="POST">
                    <div class="form-group">
                        <label for="numero">Número:</label>
                        <input type="number" class="form-control" id="numero" name="numero" placeholder="Insira um Número Qualquer">
                    </div>
                    <button type="submit" class="btn btn-primary">Encontrar Sucessor</button>
                </form>     
                <?php 
                    if (isset($_POST["numero"])) {
                        if(!empty($_POST["numero"])) {
                            $numero = $_POST["numero"];
                        } else {
                            $numero = 0;
                        }
                        
                        function encontraSucessor($num) {	
                            return $num+=1;
                        }
                         
                        echo '<div class="alert alert-success mt-3 text-center" role="alert"> Resultado : ' . encontraSucessor($numero) . '</div>';                             
                    }
                ?> 
            </div> 
        </div>
    </div>
     
<?php include "../visao/rodape.php"?>