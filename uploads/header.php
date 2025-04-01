<header class="fusion-header-wrapper">
    <div
        class="fusion-header-v3 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo-  fusion-mobile-menu-design-flyout fusion-header-has-flyout-menu">

        <div class="fusion-secondary-header">
            <div class="fusion-row">
                <div class="fusion-alignleft">
                    <div class="fusion-social-links-header">
                        <div class="fusion-social-networks">
                            <div class="fusion-social-networks-wrapper">
                                <div>
                                    <a class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
                                        style="" data-placement="bottom" data-title="Instagram" data-toggle="tooltip"
                                        title="Instagram" href="https://www.instagram.com/" target="_blank"
                                        rel="noopener noreferrer"><span
                                            class="screen-reader-text">Instagram</span></a><a
                                        class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
                                        style="" data-placement="bottom" data-title="Facebook" data-toggle="tooltip"
                                        title="Facebook" href="https://www.facebook.com/" target="_blank"
                                        rel="noreferrer"><span class="screen-reader-text">Facebook</span></a>
                                </div>
                                <div class="language-selector">
                                    <button class="dropdown-btn">RU | EN</button>
                                    <ul class="dropdown-menu">
                                        <li><a href="?lang=ru">RU - Русский</a></li>
                                        <li><a href="?lang=en">EN - English</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fusion-header-sticky-height"></div>
        <div class="fusion-header">
            <div class="fusion-row">
                <div class="fusion-header-has-flyout-menu-content" style="display: flex; flex-direction: column;">
                    <div class="fusion-logo" data-margin-top="5px" data-margin-bottom="5px" data-margin-left="0px"
                        data-margin-right="0px">
                        <a class="fusion-logo-link" href="/">

                            <!-- standard logo -->
                            <img src="wp-content/uploads/2021/06/the-firm-lawgroup.png"
                                srcset="wp-content/uploads/2021/06/the-firm-lawgroup.png 1x" width="280" height="49"
                                alt="Acarkan Semenov Logo" data-retina_logo_url="" class="fusion-standard-logo">


                        </a>
                    </div>
                    <nav class="fusion-main-menu" aria-label="Main Menu">
                        <div class="fusion-overlay-search">
                            <form role="search" class="searchform fusion-search-form  fusion-search-form-clean">
                                <div class="fusion-search-form-content">


                                    <div class="fusion-search-field search-field">
                                        <label><span class="screen-reader-text">Search for:</span>
                                            <input type="search" name="s" class="s" placeholder="Search..."
                                                required="" aria-required="true" aria-label="Search...">
                                        </label>
                                    </div>
                                    <div class="fusion-search-button search-button">
                                        <input type="submit" class="fusion-search-submit searchsubmit"
                                            aria-label="Search">
                                    </div>


                                </div>

                            </form>
                            <div class="fusion-search-spacer"></div><a href="/" role="button" aria-label="Close Search"
                                class="fusion-close-search"></a>
                        </div>
                        <ul id="menu-main-menu" class="fusion-menu">
                            <li id="menu-item-3535"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3443 current_page_item menu-item-3535"
                                data-item-id="3535"><a href="/" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Главная</span></a></li>
                            <li id="menu-item-3534"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="about" class="fusion-textcolor-highlight"><span
                                        class="menu-text">О
                                        Нас</span></a></li>
                            <?php foreach ($categories as $category): ?>
                                <li
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children fusion-dropdown-menu">
                                    <a href="<?php echo $category ?>" class="fusion-textcolor-highlight">
                                        <span
                                            class="menu-text"><?= htmlspecialchars($categoryNames[$category] ?? $category) ?></span>
                                        <span class="fusion-caret"><i class="fusion-dropdown-indicator"
                                                aria-hidden="true"></i></span>
                                    </a>
                                    <ul class="sub-menu">
                                        <?php if (!empty($groupedPosts[$category])): ?>
                                            <?php foreach ($groupedPosts[$category] as $post): ?>
                                                <li class="menu-item fusion-dropdown-submenu">
                                                    <a href="post<?= $post['id'] ?>" class="fusion-textcolor-highlight">
                                                        <span><?= htmlspecialchars($post['name']) ?></span>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <li class="menu-item fusion-dropdown-submenu">
                                                <span class="fusion-textcolor-highlight fusion-textcolor-highlight">Нет
                                                    статей</span>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>


                            <li id="menu-item-3531"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3531"
                                data-item-id="3531"><a href="post51" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Лоббизм</span></a></li>
                            <li id="menu-item-3530"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3530"
                                data-item-id="3530"><a href="contact" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Контакты</span></a></li>
                        </ul>
                    </nav>
                    <div class="fusion-mobile-navigation">
                        <ul id="menu-main-menu-1" class="fusion-mobile-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3443 current_page_item menu-item-3535"
                                data-item-id="3535"><a href="/" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Главная</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="about" class="fusion-textcolor-highlight"><span
                                        class="menu-text">О
                                        Нас</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="business" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Бизнес</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="tax" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Налоги</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="immigration" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Иммиграция</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="criminal" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Уголовное
                                        Право</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="family" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Семейные
                                        Споры</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
                                data-item-id="3534"><a href="estate" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Недвижимость</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3531"
                                data-item-id="3531"><a href="post51" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Лоббизм</span></a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3531"
                                data-item-id="3531"><a href="contact" class="fusion-textcolor-highlight"><span
                                        class="menu-text">Контакты</span></a></li>
                        </ul>
                    </div>
                    <div class="fusion-flyout-menu-icons fusion-flyout-mobile-menu-icons">


                        <a class="fusion-flyout-menu-toggle" aria-hidden="true" aria-label="Toggle Menu" href="/">
                            <div class="fusion-toggle-icon-line"></div>
                            <div class="fusion-toggle-icon-line"></div>
                            <div class="fusion-toggle-icon-line"></div>
                        </a>
                    </div>


                    <div class="fusion-flyout-menu-bg"></div>

                    <nav class="fusion-mobile-nav-holder fusion-flyout-menu fusion-flyout-mobile-menu"
                        aria-label="Main Menu Mobile">

                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="fusion-clearfix"></div>
</header>