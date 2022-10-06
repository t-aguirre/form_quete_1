<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commande</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="thanks.php" method="post" class="container bg-light border rounded p-5">

        <h1 class="text-center">CONTACT</h1>

        <div class="row">
            <label for="lastname" class="form-label" required>Nom : </label>
            <input type="text" name="lastname" id="lastname" required class="form-control">
        </div>

        <div class="row">
            <label for="firstname" class="form-label" required>Prénom: </label>
            <input type="text" name="firstname" id="firstname" required class="form-control">
        </div>

        <div class="row">
            <label for="email" class="form-label" required>Email : </label>
            <input type="email" name="email" id="email" required class="form-control">
        </div>

        <div class="row">
            <label for="phone" class="form-label">Tel. : </label>
            <input type="text" name="phone" id="phone" class="form-control">
        </div>

        <div class="row">
            <label for="subject" class="form-label" required>Sujet</label>
            <select name="subject" id="subject" class="form-control">
                <option value="">--Choisissez l'objet de votre message--</option>
                <option value="réclamation">Réclamation</option>
                <option value="information">Information</option>
            </select>
        </div>

        <div class="row">
            <label for="message" class="form-label" required>Message : </label>
            <input type="textarea" name="message" id="message" class="form-control">
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary mt-5">Envoyer</button>
        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>