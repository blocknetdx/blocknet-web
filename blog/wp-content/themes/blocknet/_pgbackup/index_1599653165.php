<?php get_header(); ?>

<div data-animation="default" class="navbar w-nav" data-easing2="ease-in-out" data-easing="ease-in-out" data-collapse="medium" data-w-id="d35dffeb-0076-0599-6e1c-5bcf354f093e" role="banner" data-duration="400" data-doc-height="1">
    <div class="navbar-wrap">
        <a href="<?php echo esc_url( home_url() ); ?>" class="brand w-nav-brand"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blocknet-logo-dark.svg" alt="" class="logo"></a>
        <nav role="navigation" class="nav-menu light w-nav-menu">
            <a href="<?php echo esc_url( home_url() ); ?>/blocknet-protocol" class="nav-link"><?php _e( 'Protocol', 'blocknet' ); ?></a>
            <a href="<?php echo esc_url( home_url() ); ?>/built-on-blocknet" class="nav-link"><?php _e( 'Solutions', 'blocknet' ); ?></a>
            <div data-hover="" data-delay="200" class="nav-link nav-with-sub w-dropdown">
                <div class="dropdown-toggle light w-dropdown-toggle" data-ix="nav-sub-menu-open">
                    <div>
                        <?php _e( 'Developers', 'blocknet' ); ?>
                    </div>
                </div>
                <nav class="nav-sub-menu light w-dropdown-list">
                    <a href="<?php echo esc_url( home_url() ); ?>/learn-about-blocknet" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Learn', 'blocknet' ); ?></a>
                    <a href="<?php echo esc_url( home_url() ); ?>/build-with-blocknet" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Build', 'blocknet' ); ?></a>
                    <a href="http://docs.blocknet.co" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Documentation', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="http://api.blocknet.co" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'API Docs', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="https://github.com/blocknetdx/" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'GitHub', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                </nav>
            </div>
            <a href="<?php echo esc_url( home_url() ); ?>/downloads" class="nav-link"><?php _e( 'Downloads', 'blocknet' ); ?></a>
            <div data-hover="" data-delay="200" class="nav-link nav-with-sub w-dropdown">
                <div class="dropdown-toggle light w-dropdown-toggle" data-ix="nav-sub-menu-open">
                    <div>
                        <?php _e( 'Community', 'blocknet' ); ?>
                    </div>
                </div>
                <nav class="nav-sub-menu w-dropdown-list">
                    <a href="https://discord.gg/mZ6pTneMx3" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Join Discord', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="https://t.me/Blocknet" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Join Telegram', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="<?php echo esc_url( home_url() ); ?>/contribute-to-blocknet" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Contribute', 'blocknet' ); ?></a>
                    <a href="http://forum.blocknet.co" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Proposal Forum', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                </nav>
            </div>
            <a href="<?php echo esc_url( home_url() ); ?>" blog="archive-link" aria-current="page" class="nav-link w--current"><?php _e( 'Blog', 'blocknet' ); ?></a>
            <a href="<?php echo esc_url( home_url() ); ?>/roadmap" class="nav-link"><?php _e( 'Roadmap', 'blocknet' ); ?></a>
        </nav>
        <div class="mobile-menu-button w-nav-button">
            <div class="nav-btn-line-top"></div>
            <div class="nav-btn-line-bottom"></div>
        </div>
    </div>
</div>
<div class="section news-section">
    <div class="container text-center w-container">
        <div class="section-heading-wrap">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <div class="sub-header">
                <?php bloginfo( 'description' ); ?>
            </div>
        </div>
        <div class="news-items-wrapper">
            <?php
                $post_query_args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'paged' => get_query_var( 'paged' ) ?: 1,
                    'order' => 'DESC',
                    'orderby' => 'date'
                )
            ?>
            <?php $post_query = new WP_Query( $post_query_args ); ?>
            <?php if ( $post_query->have_posts() ) : ?>
                <?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
                    <?php PG_Helper::rememberShownPost(); ?>
                    <div <?php post_class( 'news-item-wrap' ); ?> id="post-<?php the_ID(); ?>">
                        <div class="news-item-img-wrap">
                            <?php echo PG_Image::getPostImage( null, 'medium', array(
                                    'sizes' => 'max-width(320px) 91vw, max-width(1024px) 44vw, max-width(1280px) 29vw, max-width(1600px) 366px, 366px',
                                    'loading' => 'lazy'
                            ), 'both', null ) ?>
                        </div>
                        <div class="news-item-content">
                            <h3 class="news-item-header"><?php the_title(); ?></h3>
                            <?php the_excerpt( ); ?>
                            <a href="<?php echo esc_url( get_permalink() ); ?>" class="link text-link-with-icon"><?php _e( 'Text Link', 'blocknet' ); ?></a>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'blocknet' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="section newsletter-section">
    <div class="container">
        <div class="w-layout-grid newsletter-grid">
            <div id="w-node-e5765f78ba69-5f78ba66" class="w-layout-grid newsletter-form-grid-1">
                <h3 id="w-node-e5765f78ba6a-5f78ba66" class="newsletter-title"><?php _e( 'The Blocknet Newsletter', 'blocknet' ); ?></h3>
                <p id="w-node-e5765f78ba6c-5f78ba66" class="p-short text-center-mobile"><?php _e( 'Subscribe for the latest Blocknet updates and news', 'blocknet' ); ?></p>
            </div>
            <div id="w-node-e5765f78ba6e-5f78ba66" class="newsletter-form-wrap">
                <div class="form-block w-form">
                    <form id="wf-form-newsletter-form" name="wf-form-newsletter-form" data-name="newsletter form" action="https://blocknet.us16.list-manage.com/subscribe/post?u=5d0a376e982034a2ddd6edb98&amp;id=6ae2c503df" method="post" class="newsletter-form">
                        <input type="email" class="text-input newsletter-email w-input" maxlength="256" name="Email" data-name="Email" placeholder="Email address" id="email" required="">
                        <input type="submit" value="Submit" data-wait="Please wait..." class="button subscribe w-button">
                    </form>
                    <div class="w-form-done">
                        <div>
                            <?php _e( 'Thank you for joining the Blocknet newsletter.', 'blocknet' ); ?>
                        </div>
                    </div>
                    <div class="w-form-fail">
                        <div>
                            <?php _e( 'Something went wrong while submitting the form.', 'blocknet' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section footer-section light-text">
    <div class="container">
        <div class="w-layout-grid footer-nav-columns-wrap">
            <h5 class="footer-links-header"><?php _e( 'Quick Links', 'blocknet' ); ?></h5>
            <h5><?php _e( 'Documentation', 'blocknet' ); ?></h5>
            <h5 id="w-node-5181204afa34-204afa2d"><?php _e( 'Developers', 'blocknet' ); ?></h5>
            <h5 id="w-node-5181204afa36-204afa2d"><?php _e( 'Exchanges', 'blocknet' ); ?></h5>
            <div id="w-node-5181204afa38-204afa2d" class="footer-links-list">
                <a href="blocknet-protocol.html" class="footer-link"><?php _e( 'Protocol', 'blocknet' ); ?></a>
                <a href="built-on-blocknet.html" class="footer-link"><?php _e( 'Solutions', 'blocknet' ); ?></a>
                <a href="build-with-blocknet.html" class="footer-link"><?php _e( 'Developers', 'blocknet' ); ?></a>
                <a href="downloads.html" class="footer-link"><?php _e( 'Downloads', 'blocknet' ); ?></a>
                <a href="contribute-to-blocknet.html" class="footer-link"><?php _e( 'Community', 'blocknet' ); ?></a>
                <a href="roadmap.html" class="footer-link"><?php _e( 'Roadmap', 'blocknet' ); ?></a>
                <a href="blog.html" class="footer-link"><?php _e( 'Blog', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa47-204afa2d" class="footer-links-list">
                <a href="https://docs.blocknet.co" target="_blank" class="footer-link"><?php _e( 'Documentation Portal', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/service-nodes/introduction/" target="_blank" class="footer-link"><?php _e( 'Service Nodes Guide', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/wallet/setup/" target="_blank" class="footer-link"><?php _e( 'Staking Wallet Guide', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/governance/introduction/" target="_blank" class="footer-link"><?php _e( 'Governance', 'blocknet' ); ?></a>
                <a href="brand-resources" class="footer-link"><?php _e( 'Brand Resources', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa54-204afa2d" class="footer-links-list">
                <a href="https://api.blocknet.co/#getting-started" target="_blank" class="footer-link"><?php _e( 'Getting Started Guides', 'blocknet' ); ?></a>
                <a href="https://github.com/blocknetdx/" target="_blank" class="footer-link"><?php _e( 'GitHub', 'blocknet' ); ?></a>
                <a href="https://api.blocknet.co" target="_blank" class="footer-link"><?php _e( 'API Docs', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa5b-204afa2d" class="footer-links-list">
                <a href="https://blockdx.com" target="_blank" class="footer-link"><?php _e( 'Block DX', 'blocknet' ); ?></a>
                <a href="https://bittrex.com/Market/Index?MarketName=BTC-BLOCK" target="_blank" class="footer-link"><?php _e( 'Bittrex', 'blocknet' ); ?></a>
                <a href="https://www.digifinex.vip/en-ww/trade/BTC/BLOCK" target="_blank" class="footer-link"><?php _e( 'DigiFinex', 'blocknet' ); ?></a>
                <a href="https://vcc.exchange/exchange/basic?currency=btc&amp;coin=block" target="_blank" class="footer-link"><?php _e( 'VCC Exchange', 'blocknet' ); ?></a>
                <a href="https://www.finexbox.com/market/pair/BLOCK-BTC.html" target="_blank" class="footer-link"><?php _e( 'Finexbox', 'blocknet' ); ?></a>
                <a href="https://stakecube.net/app/exchange/BLOCK_BTC" target="_blank" class="footer-link"><?php _e( 'Stakecube', 'blocknet' ); ?></a>
                <a href="https://www.altilly.com/market/BLOCK_BTC" target="_blank" class="footer-link"><?php _e( 'Altilly', 'blocknet' ); ?></a>
            </div>
        </div>
        <div class="w-layout-grid footer-bottom-grid">
            <a id="w-node-5181204afa6c-204afa2d" href="blocknet.co" class="logo-footer-link w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blocknet-logo-white.svg" height="30" alt=""></a>
            <div id="w-node-5181204afa6e-204afa2d" class="footer-legal-links-wrap">
                <a href="#" class="footer-legal-link"><?php _e( '© Copyright 2020', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa75-204afa2d" class="social-media-icons-wrap">
                <a href="https://t.me/Blocknet" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-telegram.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://discord.gg/mZ6pTneMx3" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-discord.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://twitter.com/The_Blocknet" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-twitter.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://www.reddit.com/r/theblocknet/" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-reddit.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://en-gb.facebook.com/theblocknet/" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-facebook.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://www.linkedin.com/company/blocknet/" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-linkedin.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="http://github.com/blocknetdx/" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-github.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://www.youtube.com/channel/UCCDBoR9fHb21bLH7FGvFrQg/videos" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-youtube.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://www.instagram.com/the_blocknet/" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-instagram.svg" width="30" alt="" class="social-media-icon"></a>
            </div>
        </div>
    </div>
</div>        

<?php get_footer(); ?>