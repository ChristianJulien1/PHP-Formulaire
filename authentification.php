<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class = "justify-content align-items text-center text-white bg-dark mt-5 col-3">
    <form action="authentification.php" method="POST">
        <!-- <label class="text-center mt-5" for="email">Email</label>
        <input type="email" id="email" name="email" required><br><br> -->
        <label class="mt-5" for="id">ID</label>
        <input type="text" id="id" name="id" required><br><br>
        <input type="submit" value="Envoyer" class="mb-5">
    </form>
    <h1>
        <?php
            $id = $_POST['id'];
            // je récupère

            $pattern = '[^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|-|"|#|\')).{8,}$]';
            
            if(preg_match($pattern, $id)){
                echo "Le mot de passe est valide.";
            } else {
                echo "Le mot de passe n'est pas valide.";
            }
        ?>
    </h1>
</div>
</body>
</html>