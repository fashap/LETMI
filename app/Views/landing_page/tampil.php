<?php
if (isset($_POST['view'])) {
    header("content-type: application/pdf");
    readfile("<?= base_url() ?>/pdf/company-profile.pdf");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= base_url("LandingPage/tampil"); ?>" method="post">
        <button name="view">view PDF</button>
    </form>
</body>

</html>