<?php include("cabecalho.php") ?>
<?php include("menu.php") ?>

        <main class="bg-light row pe-3 ps-3">
            <div class="row">
                <h2 class="mt-4 h1">A melhor pizza da região</h2>
                <hr>
                <div class="col text-center">
                    <img src="calabreza.png" alt="Calabresa">
                    <p>Calabresa</p>
                </div>

                <div class="col text-center">
                    <img src="calabreza.png" alt="Calabresa">
                    <p>Calabresa</p>
                </div>

                <div class="col text-center">
                    <img src="calabreza.png" alt="Calabresa">
                    <p>Calabresa</p>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Nossos sabores</h3>
                    <p class="sabores"> À Moda da Casa  <br>
                    <?php
                    $servidor = "10.125.47.28" ;
                    $usuario = "pizzaiolo" ; // root
                    $senha = "123" ;
                    $bd = "bd_pizza" ;

                    //conexão
                    $conexao = mysqli_connect($servidor, $usuario, $senha, $bd, 3300);
                    
                    //criar o sql
                    $sql ="select nome from pizzas_novo";

                    //executar sql no banco 
                    $todaaspizzas = mysqli_query($conexao, $sql);

                    // laço de repetição - mostrar cada um dos dados, linha a linha 
                    while($umapizza =mysqli_fetch_assoc($todaaspizzas))
                    {
                        echo $umapizza["nome"] . "<br>";
                    }
                    mysqli_close($conexao);
                    ?>
                    </p>
                </div><!-- coluna -->
                <div class="col">
                    <h3>Uma casa com história</h3>
                    <div class="row">
                        <div class="col-4">
                            <img src="historia.png" class="img-fluid" alt="historia">
                        </div>
                        <div class="col">
                            <p>Muito famosa em toda a região por sua excelência na qualidade, a nossa pizzzaria tem mais de 25 anos de história.</p>
                            <p>
                                <a href="quem-somos.php" class="link-destaque">Conheça</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- linha -->
        </main>

        <?php include("rodape.php") ?>

