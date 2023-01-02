<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victory Open</title>
</head>
<body>
    <form action="/login-process" method="POST">
        <?php csrf_field() ?>
        <label for="keyname">keyname: </label>
        <input type="text" name="keyname" placeholder="ur key-name">
    </form>
    <br>
    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger alert-dismissible show fade">
            <div class="alert-body">
                <b>whoops,</b>
                <?= session()->getFlashdata('error') ?>
            </div>
        </div>
    <?php endif ?>
</body>
</html>