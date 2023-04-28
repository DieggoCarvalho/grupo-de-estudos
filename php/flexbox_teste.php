<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox</title>
    <style type="text/css">
        .container {
            display: flex;
            /* flex-direction: row; */
            background-color: #ddd;
            /* margin: 10px; */
            /* flex-wrap: wrap; quebrar em linhas | nowrap - padrão */
            flex-flow: row wrap; /* direction, wrap */
            /* flex-start; flex-end; space-around: espaçar igualmente os itens. 
            space-between: primeiro na borda, último na borda e demais distribuidos*/
            justify-content: center; /* HORIZONTAL - conteúdo no meio do container, conforme a direção dada pelo row/column  | */
            height: 500px;
            align-items: center; /* VERTICAL - conteúdo no meio do container, conforme a direção dada pelo row/column */
        }
        .container div {
            /* flex: 1; */
            width: 200px;
            height: 200px;
            background-color: #ff0000;
            margin: 10px;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <!-- <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
        <div>8</div>
        <div>9</div>
        <div>10</div> -->
    </div>
</body>
</html>