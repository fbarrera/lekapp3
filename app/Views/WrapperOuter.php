<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        <?= $this->renderSection('siteTitle') ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />

    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />

    <?= $this->renderSection('headCSS') ?>
    <?= $this->renderSection('headJS') ?>

</head>

<body class="bg-surface">
    <?= $this->renderSection('bodyContent') ?>
    <?= $this->renderSection('bodyJS') ?>
    
    <!-- Bootstrap bundle JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/pace.min.js"></script>
    <!--app-->
    <!--
    <script src="assets/js/app.js"></script>
    -->
</body>

</html>