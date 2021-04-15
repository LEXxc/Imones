<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
        <div class="container w-100">
            <h1 class="mt-5 text-center pt-5" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Imones redagavimas</h1>
            <form method="post">
            <input type="text" name="name" value="<?=$company['pavadinimas']?>" placeholder="Imones pavadinimas">
            <input type="text" name="code" value="<?=$company['kodas']?>" placeholder="Imones kodas">
            <input type="text" name="pvm code" value="<?=$company['pvm_kodas']?>" placeholder="Imones PVM kodas">
            <input type="text" name="address" value="<?=$company['adresas']?>" placeholder="Imones adresas">
            <input type="tel" name="phone" value="<?=$company['telefonas']?>" placeholder="Imones Tel. Nr.">
            <input type="email" name="email" value="<?=$company['elpastas']?>" placeholder="Imones el. pastas">
            <input type="text" name="activity" value="<?=$company['veikla']?>" placeholder="Imones veikla">
            <input type="text" name="owner" value="<?=$company['vadovas']?>" placeholder="Imones vadovas">
            <button type="submit" name="send">Redaguoti</button>
    </div>
    </body>
</html>