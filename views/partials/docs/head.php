<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $pageTitle ?? 'Savv Framework'; ?></title>
    <meta name="description" content="<?php echo $pageDescription ?? 'A lightweight PHP web framework'; ?>" />

    <?php savv_head(); ?>

    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://savadub.com/<?php echo trim($_SERVER['REQUEST_URI'], '/'); ?>" />
    <meta property="og:title" content="<?php echo $pageTitle ?? 'Savv Framework'; ?>" />
    <meta property="og:description" content="<?php echo $pageDescription ?? 'A lightweight PHP web framework'; ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $pageTitle ?? 'Savv Framework'; ?>" />
    <meta name="twitter:description" content="<?php echo $pageDescription ?? 'A lightweight PHP web framework'; ?>" />

    <link rel="icon" type="image/png" href="/assets/images/icons/favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Fira+Code:wght@400;500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/main.css">

    <?php if (isset($extraCSS)) echo $extraCSS; ?>
</head>