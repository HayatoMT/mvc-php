<!DOCTYPE html>
<html>
    <body>
        <h1>Hayato phrases</h1>
        <p><?= $phrase ?></p>
        <p><a href="<?= $base_url ?>hayato">Frases randômica</a></p>
        <p>ou</p>
        <form method="get" action="">
            <label for="index">Escolher o index:</label>
            <input name="index" type="text"/>
            <button type="submit">Escolher</button>
        </form>
        <p><a href="<?= $base_url ?>home">Home page</a></p>
        <p>
            <small>
                All random phrases generated by Dummy Text Generator Plugin for PHPStorm
            </small>
        </p>
    </body>
</html>