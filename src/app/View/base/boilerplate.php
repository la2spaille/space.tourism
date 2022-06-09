<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="canonical" href="<?= $this->head['url']; ?>">
    <!-- Robots -->
    <meta name="robots" content="<?= $this->head['robots']; ?>">
    <!-- Device -->
    <?php include ROOT . 'app/View/head/device.php'; ?>
    <!-- SEO -->
    <title><?= $this->head['title']; ?></title>
    <meta name="description" content="<?= $this->head['description']; ?>">
    <!-- Social -->
    <?php include ROOT . 'app/View/head/social.php'; ?>
    <!-- Favicon -->
    <?php include ROOT . 'app/View/head/favicon.php'; ?>
    <!-- Static -->
    <?php include ROOT . 'app/View/head/static.php'; ?>
</head>
<body>
<!-- App -->
<div id="app">
    <!-- Main -->
    <main id="main">
        <?= $this->content; ?>
    </main>
    <!-- GL -->
    <?php include ROOT . 'app/View/gl/gl.php'; ?>
    <!-- Header -->
    <?php include ROOT . 'app/View/common/header.php'; ?>
    <!-- Loader -->
    <?php include ROOT . 'app/View/common/loader.php'; ?>
</div>
<!-- Script -->
<?php include ROOT . 'app/View/script/script.php'; ?>
</body>
</html>
