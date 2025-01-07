<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color: rgb(255, 0, 0);
        }
        p {
            text-indent: 1cm;
            font-size: larger;
            text-align: justify;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Teste</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consequatur nostrum, debitis quisquam soluta possimus alias hic iure?
        Dolore, minus excepturi. Totam, recusandae. Enim harum aut et aliquid deleniti minus at!
    </p>
    <button>Clique</button>
    <?php
        $a = 'Hello PHP';
        echo '<br>';
        echo $a;
        echo '<br>';
    ?>
</body>
<script>
    function minhaFuncao() {
        alert('Hello!');
    }
    const bt = document.querySelector('button');
    bt.addEventListener('click', minhaFuncao);
</script>
</html>