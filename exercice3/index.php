<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<br><br>
<h1 style="text-align: center;">ExerciceXP 3 Check Student Grade</h1>

<div class="container">
        <form method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Entrer un nombre</label>
                <input type="number" name="number" class="form-control">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form><br>

        <?php

            function trie_Function($nombre){
                $init = $nombre > 30
                ? "est supérieur à 30"
                : ($nombre > 20
                ? "est supérieur à 20"
                : ($nombre >10
                ? " est supérieur à 10"
                : "Saisissez un nombre au moins supérieur à 10 !")); 
                echo " le nombre saisie est ",$nombre." ".$init."\n";
                }

            if(isset($_POST['submit']))
            {
                $nombre = $_POST['number'];

                trie_Function ($nombre);/// appelle la fonction trinary_Test
        }
        ?>
</div>

</body>
</html>