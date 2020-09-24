<!DOCTYPE html>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta content="summary_large_image" name="twitter:card">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/webclip.png" rel="apple-touch-icon">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
    WebFont.load({
        google: {
            families: ["IBM Plex Sans:300,regular,italic,500,600,700"]
        }
    });
    </script>
        <?php wp_head(); ?>
    </head>
    <body page="archive" class="body <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>