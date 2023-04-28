<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flexbox Alinhamento</title>
    <style type="text/css">
        .container {
            display: flex;
            height: 500px;
            flex-direction: row;
            justify-content: center;
            align-items: flex-start;
            background-color: #ddd;
            flex-wrap: wrap;
            align-content: flex-end; /* quando tem wrap, consigo alinhar todo o conteúdo sem
            perder a formação flex-end, flex-start, center, space-between, space-around */
            /* PESQUISAR: FLEX BASIS*/
        }
        .container div {
            width: 100px;
            height: 100px;
            background-color: #ff0000;
            margin: 10px;
            padding: 10px;
            font-size: 18px;
        }
        .div10 {
            align-self: flex-start; /* define proprio alinhamento */
            order: 1; /* as demais são order 0 quando não especificadas. -1/-999: para começo */
        }
    </style>
</head>
<body>
<div class="container">
        <div>1</div>
        <div>2</div>
        <div>3</div>
        <div>4</div>
        <div>5</div>
        <div>6</div>
        <div>7</div>
        <div>8</div>
        <div>9</div>
        <div class="div10">10</div>
        <div>11</div>
        <div>12</div>
        <div>13</div>
        <div>14</div>
        <div>15</div>
    </div>
</body>
</html>