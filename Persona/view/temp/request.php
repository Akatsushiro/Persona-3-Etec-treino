<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>P3 - Requests</title>
    <link rel="stylesheet" href="../frameworks/bootstrap.css">
    <link rel="stylesheet" href="../css/geral.css">
</head>

<body class="container">
    <center>
        <h1>Request cadastro</h1>
        <br>
        <form action="..\..\Controller\temp\request_save.php" method="post">
            <div class="row">
                <div class="col-6">
                    Titulo: <input type="text" name="titulo" id="">
                    <br>
                    <br>
                    Data de Inicio: <input type="text" name="inicio" id="">
                    <br>
                    <br>
                    Data de Término: <input type="text" name="termino" id="">
                    <br>
                    <br>
                    Recompença: <input type="text" name="recompenca" id="">
                    <br>
                    <br>
                    Tipo:
                    <select name="tipo" id="">
                        <option value="sword">Sword</option>
                        <option value="shadow">Shadow</option>
                        <option value="fusion">Fusion</option>
                        <option value="item">Item</option>
                        <option value="elizabeth">Elizabeth</option>
                    </select>
                </div>
                <div class="col-6">
                    <h3>Descrição:</h3>
                    <br>
                    <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                    <br>
                    <br>
                    <h3>Solução: </h3>
                    <br>
                    <textarea name="solucao" id="" cols="30" rows="10"></textarea>

                </div>
            </div>
            <input type="submit" value="Salvar">
        </form>
    </center>
</body>

</html>