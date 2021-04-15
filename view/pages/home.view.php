<!DOCTYPE html>
<html lang="en">
    <?php include "view/_partials/head.view.php"; ?>
    <body class="bg-dark text-white">
    <?php include "view/_partials/nav.view.php";?>
        <div class="container w-100">
            <h1 class="mt-5 text-center pt-5" style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Įmonės</h1>
            <form method="post">
                <input type="text" name="search" placeholder="Imones paieska">
                <button type="submit" name="send">Ieskoti</button>
            </form>
        </div>
    </body>
</html>