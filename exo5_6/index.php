<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div id="res" class="alert"></div>
    <form method="post" action="traitement.php" id="formulaire">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOM</label>
            <div id="nameerror" class="error hidden">Veuillez insérer votre nom</div>
            <input type="text" class="form-control" name="name" id="name">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PRENOM</label>
            <div id="firstnameerror" class="error hidden">Veuillez insérer votre prenom</div>
            <input type="text" class="form-control" name="firstname" id="firstname">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">MAIL</label>
            <div class="mailerror error hidden">Veuillez insérer votre mail</div>
            <input type="text" class="form-control" name="mail" id="mail">
            <div id="emailHelp" class="form-text">On ne le partagera pas :) </div>
        </div>

        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
    </form>
    <script src="ajax.js"></script>
</body>

</html>