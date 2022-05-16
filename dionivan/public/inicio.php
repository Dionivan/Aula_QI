<?php

use Database\Database;

require_once "../src/model/Database.php";

$db = new Database();

$db->insert(
    "INSERT INTO usuarios (nome, email, senha)
    VALUES ('Dionivan', 'santosdionivan@gmail.com', 'cgeense09')"
);
?>

<?php  require_once "../src/views/header.php"; ?>
    <header><hr>
    <div class="login-center">
    <h1>:::Login:::</h1>
    
        <form method="post" action="recebe.php">
            <div class="form-group">
                <div class="row">
                    <div class="col-10 offset-1">
                        <input type="email" class="form-control" name="email" placeholder="Digite seu email" required><br>
                        <input type="password" class="form-control" name="pass" minlength="6" placeholder="Digite sua senha" required>
                        <br><br>
                        <input type="submit" class="btn btn-outline-success" value="Enviar dados">
                        <input type="reset" class="btn btn-outline-danger" value="Apagar dados">
                        <br>
                        <a href="recebe.php">Entrar como visitante</a>
                    </div>    
                </div>
            </div>
        </form>
    </div>
    </header><hr>
    <main style="background-color:aqua;">
    <h2>Texto</h2>

    </main>
    <footer>

    </footer>
<?php require_once "../src/views/footer.php"; ?>