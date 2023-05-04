<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Institucional</title>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= media() ?>/portalweb/css/style.css?version=<?= getVersion() ?>">

    <?php if (isset($data['page_css']) && !empty($data['page_css'])) { ?>
        <link href="<?= media() ?>/portalweb/css/<?= $data['page_css'] ?>.css?version=<?= getVersion() ?>" rel="stylesheet" />
    <?php } ?>
</head>

<body>
    <?php require_once('./Views/Template/nav_portal.php'); ?>