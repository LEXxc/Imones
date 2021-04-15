<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
        <div class="container w-100">
            <h1 class="mt-5 text-center pt-5" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Naujos imones pridejimas</h1>
            <form method="post">
            <input type="text" name="name" placeholder="Imones pavadinimas">
            <input type="text" name="code" placeholder="Imones kodas">
            <input type="text" name="pvm code" placeholder="Imones PVM kodas">
            <input type="text" name="address" placeholder="Imones adresas">
            <input type="tel" name="phone" placeholder="Imones Tel. Nr.">
            <input type="email" name="email" placeholder="Imones el. pastas">
            <input type="text" name="activity" placeholder="Imones veikla">
            <input type="text" name="owner" placeholder="Imones vadovas">
            <button type="submit" name="send">Prideti</button>
    </div>
    </body>
</html>