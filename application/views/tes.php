<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Uji Coba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>

<body>
    <form action="<?= base_url('tester') ?>" method="post" enctype="multipart/form-data">
        <input type="file" name='gambar'>
        <button type="submit">SUBMIT!</button>
    </form>
</body>

</html>