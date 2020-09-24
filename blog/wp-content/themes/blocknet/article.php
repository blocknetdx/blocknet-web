<?php get_header(); ?>

<div data-animation="default" class="navbar w-nav" data-easing2="ease-in-out" data-easing="ease-in-out" data-collapse="medium" data-w-id="d35dffeb-0076-0599-6e1c-5bcf354f093e" role="banner" data-duration="400" data-doc-height="1">
    <div class="navbar-wrap">
        <a href="index.html" class="brand w-nav-brand"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blocknet-logo-dark.svg" alt="" class="logo"></a>
        <nav role="navigation" class="nav-menu light w-nav-menu">
            <a href="blocknet-protocol.html" class="nav-link"><?php _e( 'Protocol', 'blocknet' ); ?></a>
            <a href="built-on-blocknet.html" class="nav-link"><?php _e( 'Solutions', 'blocknet' ); ?></a>
            <div data-hover="" data-delay="200" class="nav-link nav-with-sub w-dropdown">
                <div class="dropdown-toggle light w-dropdown-toggle" data-ix="nav-sub-menu-open">
                    <div>
                        <?php _e( 'Developers', 'blocknet' ); ?>
                    </div>
                </div>
                <nav class="nav-sub-menu light w-dropdown-list">
                    <a href="learn-about-blocknet.html" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Learn', 'blocknet' ); ?></a>
                    <a href="build-with-blocknet.html" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Build', 'blocknet' ); ?></a>
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
            <a href="downloads.html" class="nav-link"><?php _e( 'Downloads', 'blocknet' ); ?></a>
            <div data-hover="" data-delay="200" class="nav-link nav-with-sub w-dropdown">
                <div class="dropdown-toggle light w-dropdown-toggle" data-ix="nav-sub-menu-open">
                    <div>
                        <?php _e( 'Community', 'blocknet' ); ?>
                    </div>
                </div>
                <nav class="nav-sub-menu w-dropdown-list">
                    <a href="https://discord.gg/2e6s7H8" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Join Discord', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="https://t.me/Blocknet" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Join Telegram', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                    <a href="contribute-to-blocknet.html" class="nav-sub-menu-link w-dropdown-link"><?php _e( 'Contribute', 'blocknet' ); ?></a>
                    <a href="http://forum.blocknet.co" target="_blank" class="nav-sub-menu-link-external w-inline-block"> <div class="nav-sub-link">
                            <?php _e( 'Proposal Forum', 'blocknet' ); ?>
                        </div><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/nav-external-link-dark.svg" alt="" class="icon-external"></a>
                </nav>
            </div>
            <a href="blog.html" blog="archive-link" class="nav-link"><?php _e( 'Blog', 'blocknet' ); ?></a>
            <a href="roadmap.html" class="nav-link"><?php _e( 'Roadmap', 'blocknet' ); ?></a>
        </nav>
        <div class="mobile-menu-button w-nav-button">
            <div class="nav-btn-line-top"></div>
            <div class="nav-btn-line-bottom"></div>
        </div>
    </div>
</div>
<div class="section blog-header">
    <div class="container">
        <div class="section-heading-wrap">
            <h1 class="heading-3"></h1>
        </div>
        <div class="blog-meta-wrap">
            <div item="date" class="blog-post-meta-title">
                <?php _e( 'Published:', 'blocknet' ); ?> 
            </div>
            <div item="date" class="blog-post-date"></div>
        </div>
    </div>
</div>
<div class="post-image">
    <div class="container text-center">
        <img width="960" alt="" item="featured-image" src="">
    </div>
</div>
<div class="blog-post-content">
    <div class="container blog-narrow">
        <div post="content" class="w-richtext"></div>
    </div>
</div>
<div class="blog-latest-posts">
    <div class="container">
        <h2 class="text-center"><?php _e( 'Latest Posts', 'blocknet' ); ?></h2>
        <div class="blog-posts-related-wrapper">
            <div class="w-layout-grid news-grid">
                <div class="news-item-wrap">
                    <div class="news-item-img-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg" loading="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler-p-500.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg 730w" sizes="(max-width: 479px) 90vw, (max-width: 767px) 23vw, (max-width: 991px) 82vw, 730px" alt="">
                    </div>
                    <div class="news-item-content">
                        <h3 class="news-item-header"><?php _e( 'Heading', 'blocknet' ); ?></h3>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', 'blocknet' ); ?></p>
                        <a href="#" class="link text-link-with-icon"><?php _e( 'Text Link', 'blocknet' ); ?></a>
                    </div>
                </div>
                <div class="news-item-wrap">
                    <div class="news-item-img-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg" loading="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler-p-500.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg 730w" sizes="(max-width: 479px) 90vw, (max-width: 767px) 23vw, (max-width: 991px) 82vw, 730px" alt="">
                    </div>
                    <div class="news-item-content">
                        <h3 class="news-item-header"><?php _e( 'Heading', 'blocknet' ); ?></h3>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', 'blocknet' ); ?></p>
                        <a href="#" class="link text-link-with-icon"><?php _e( 'Text Link', 'blocknet' ); ?></a>
                    </div>
                </div>
                <div class="news-item-wrap">
                    <div class="news-item-img-wrap">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg" loading="lazy" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler-p-500.jpeg 500w, <?php echo esc_url( get_template_directory_uri() ); ?>/images/news-filler.jpg 730w" sizes="(max-width: 479px) 90vw, (max-width: 767px) 23vw, (max-width: 991px) 82vw, 730px" alt="">
                    </div>
                    <div class="news-item-content">
                        <h3 class="news-item-header"><?php _e( 'Heading', 'blocknet' ); ?></h3>
                        <p><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique. Duis cursus, mi quis viverra ornare, eros dolor interdum nulla, ut commodo diam libero vitae erat. Aenean faucibus nibh et justo cursus id rutrum lorem imperdiet. Nunc ut sem vitae risus tristique posuere.', 'blocknet' ); ?></p>
                        <a href="#" class="link text-link-with-icon"><?php _e( 'Text Link', 'blocknet' ); ?></a>
                    </div>
                </div>
            </div>
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
               <div class="w-embed">
                    <form id="mc-embedded-subscribe-form" action="https://blocknet.us16.list-manage.com/subscribe/post?u=5d0a376e982034a2ddd6edb98&amp;id=6ae2c503df" method="post" name="mc-embedded-subscribe-form" class="inline-form validate" target="_blank" novalidate="">
                        <div class="form-inner newsletter-form">
                            <div>
                                <input id="mce-EMAIL" class="text-input newsletter-email" type="email" value="" name="EMAIL" placeholder="Email Address" required="">
                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                    <input type="text" name="b_5d0a376e982034a2ddd6edb98_6ae2c503df" tabindex="-1" value="">
                                </div>
                            </div>
                            <div>
                                <button id="mc-embedded-subscribe" type="submit" class="button subscribe" name="subscribe"></button>
                            </div>
                        </div>
                    </form>
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
                <a href="../blocknet-protocol.html" class="footer-link"><?php _e( 'Protocol', 'blocknet' ); ?></a>
                <a href="../built-on-blocknet.html" class="footer-link"><?php _e( 'Solutions', 'blocknet' ); ?></a>
                <a href="../build-with-blocknet.html" class="footer-link"><?php _e( 'Developers', 'blocknet' ); ?></a>
                <a href="../downloads.html" class="footer-link"><?php _e( 'Downloads', 'blocknet' ); ?></a>
                <a href="../contribute-to-blocknet.html" class="footer-link"><?php _e( 'Community', 'blocknet' ); ?></a>
                <a href="../roadmap.html" class="footer-link"><?php _e( 'Roadmap', 'blocknet' ); ?></a>
                <a href="../blog.html" class="footer-link"><?php _e( 'Blog', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa47-204afa2d" class="footer-links-list">
                <a href="https://docs.blocknet.co" target="_blank" class="footer-link"><?php _e( 'Documentation Portal', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/service-nodes/introduction/" target="_blank" class="footer-link"><?php _e( 'Service Nodes Guide', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/wallet/setup/" target="_blank" class="footer-link"><?php _e( 'Staking Wallet Guide', 'blocknet' ); ?></a>
                <a href="https://docs.blocknet.co/governance/introduction/" target="_blank" class="footer-link"><?php _e( 'Governance', 'blocknet' ); ?></a>
                <a href="brand-resources.html" class="footer-link"><?php _e( 'Brand Resources', 'blocknet' ); ?></a>
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
            <a id="w-node-5181204afa6c-204afa2d" href="https://blocknet.co" class="logo-footer-link w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/blocknet-logo-white.svg" height="30" alt=""></a>
            <div id="w-node-5181204afa6e-204afa2d" class="footer-legal-links-wrap">
                <a href="#" class="footer-legal-link"><?php _e( '© Copyright 2020', 'blocknet' ); ?></a>
            </div>
            <div id="w-node-5181204afa75-204afa2d" class="social-media-icons-wrap">
                <a href="https://t.me/Blocknet" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-telegram.svg" width="30" alt="" class="social-media-icon"></a>
                <a href="https://discord.gg/2e6s7H8" target="_blank" class="sm-link-block w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icon-discord.svg" width="30" alt="" class="social-media-icon"></a>
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