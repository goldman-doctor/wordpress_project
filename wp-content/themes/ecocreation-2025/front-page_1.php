<?php get_header(); ?>
<main>
    <div class="wrapper">
        <div class="hero">
            <div class="hero__body">
                <h2 class="hero-heading">
                    <span class="hero-heading__re">
                        <span class="hero-heading__re-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/re_arrow_top.svg" class="hero-heading__re-icon hero-heading__re-icon--top" />
                            <span class="hero-heading__re-text">Re</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/img/re_arrow_bottom.svg" class="hero-heading__re-icon hero-heading__re-icon--bottom" />
                        </span>
                    </span>
                    <span class="hero-heading__text-wrapper">
                        <span class="hero-heading__text">ユースで<br></span>
                        <span class="hero-heading__text">笑顔を広げる</span>
                    </span>
                </h2>
            </div>
            <div class="hero-img">
                <div class="hero-img__inner">
                    <ul class="hero-img__list">
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-01.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-02.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-03.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-04.png" class="hero-img__list-item-img" />
                        </li>
                    </ul>
                    <ul class="hero-img__list hero-img__list--2">
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-01.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-02.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-03.png" class="hero-img__list-item-img" />
                        </li>
                        <li class="hero-img__list-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero-04.png" class="hero-img__list-item-img" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container container--bg-white container--radius-top">
                <div class="container__inner">
                    <section id="about us" class="section section--has-float-item section--has-bottom-padding">
                        <div class="large-heading large-heading--floating">
                            <span class="large-heading__main">About Us</span>
                            <h3 class="large-heading__sub">私たちについて</h3>
                        </div>
                        <div class="about-us">
                            <div class="about-us__item about-us__item--left">
                                <div class="writing">
                                    <p>当社は、資源循環型社会を実現させるために、誰でも気軽にできる『リユース』をもっと社会に広げたいと考えています。</p>
                                    <p>リユース活動事業を推進するために、「ハードオフコーポレーション」FCチェーンに加盟し、経営理念を共有し、「ハードオフ」「オフハウス」「ホビーオフ」を運営しています。</p>
                                    <p>お客様が楽しく、喜んで頂ける「リユース」が、社会貢献に繋がるよう、橋渡しを担っていきます。</p>
                                </div>
                            </div>
                            <div class="about-us__item about-us__item--right">
                                <div class="feature-circle-list">
                                    <div class="feature-circle">
                                        <div class="feature-circle__inner">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/feature_ecology.svg" class="feature-circle__img" />
                                            <p class="feature-circle__heading">Ecology</p>
                                            <p class="feature-circle__text">人間生活と自然との<br>調和・共存</p>
                                        </div>
                                    </div>
                                    <div class="feature-circle">
                                        <div class="feature-circle__inner">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/feature_creation.svg" class="feature-circle__img" />
                                            <p class="feature-circle__heading">Creation</p>
                                            <p class="feature-circle__text">創造・創作</p>
                                        </div>
                                    </div>
                                    <div class="feature-circle feature-circle--shadow feature-circle--floating feature-circle--small">
                                        <div class="feature-circle__inner">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/feature_ecocreation.png" class="feature-circle__img" />
                                            <p class="feature-circle__heading">
                                                <span>EcoC</span>
                                                <span class="feature-circle__heading__re">Re</span>
                                                <span>ation</span>
                                            </p>
                                            <p class="feature-circle__text feature-circle__text--small">エコクリエーション</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="image-link-list">
                            <li class="image-link-list__item image-link">
                                <a href="<?php echo home_url() ?>/company#message" class="image-link__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/link_message.png" class="image-link__img" />
                                    <div class="image-link__bottom">
                                        <span class="image-link__text">代表メッセージ</span>
                                        <span class="image-link__icon-wrapper">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right_white.svg" class="image-link__icon" />
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="image-link-list__item image-link">
                                <a href="<?php echo home_url() ?>/company#policy" class="image-link__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/link_philosophy.png" class="image-link__img" />
                                    <div class="image-link__bottom">
                                        <span class="image-link__text">経営理念</span>
                                        <span class="image-link__icon-wrapper">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right_white.svg" class="image-link__icon" />
                                        </span>
                                    </div>
                                </a>
                            </li>
                            <li class="image-link-list__item image-link">
                                <a href="<?php echo home_url() ?>/company#company" class="image-link__link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/link_company.png" class="image-link__img" />
                                    <div class="image-link__bottom">
                                        <span class="image-link__text">会社概要</span>
                                        <span class="image-link__icon-wrapper">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right_white.svg" class="image-link__icon" />
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </section>
                    <section id="store" class="section">
                        <div class="bg bg--primary bg--has-vertical-padding">
                            <div class="bg__content">
                                <div class="large-heading large-heading--center large-heading--white">
                                    <span class="large-heading__main">Store</span>
                                    <h3 class="large-heading__sub">店舗情報</h3>
                                </div>
                                <div class="float-layout">
                                    <img class="float-layout__float-item" src="<?php echo get_template_directory_uri(); ?>/img/store.png" />
                                    <ul class="float-layout__item link-list">
                                        <li class="link-list__item link-list__item--top link">
                                            <a href="<?php echo home_url() ?>/stores#store-konan" class="link__inner">
                                                <span class="link__text">コーナン港北センター南店</span>
                                                <span class="link__icon-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" class="link__icon" />
                                                </span>
                                            </a>
                                        </li>
                                        <li class="link-list__item link">
                                            <a href="<?php echo home_url() ?>/stores#store-kamakura" class="link__inner">
                                                <span class="link__text">鎌倉大船モール店</span>
                                                <span class="link__icon-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" class="link__icon" />
                                                </span>
                                            </a>
                                        </li>
                                        <li class="link-list__item link">
                                            <a href="<?php echo home_url() ?>/stores#store-higashikurume" class="link__inner">
                                                <span class="link__text">東久留米店</span>
                                                <span class="link__icon-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" class="link__icon" />
                                                </span>
                                            </a>
                                        </li>
                                        <li class="link-list__item link">
                                            <a href="<?php echo home_url() ?>/stores#store-kisarazu" class="link__inner">
                                                <span class="link__text">木更津店</span>
                                                <span class="link__icon-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" class="link__icon" />
                                                </span>
                                            </a>
                                        </li>
                                        <li class="link-list__item link">
                                            <a href="<?php echo home_url() ?>/stores#store-aikawa" class="link__inner">
                                                <span class="link__text">愛川店</span>
                                                <span class="link__icon-wrapper">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.svg" class="link__icon" />
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="full-width full-width--bg-recruit">
                <section id="recruit" class="full-width__content full-width__content--recruit">
                    <div class="catchphrase catchphrase--white">
                        <h4 class="catchphrase__heading">Recruit</h4>
                        <p class="catchphrase__body">
                            毎日ドキドキ、<br>
                            ワクワクする仕事、<br>
                            はじめませんか？
                        </p>
                    </div>
                    <a href="<?php echo home_url() ?>/recruit" class="button button--fixed-xl button--fill-red">
                        <span class="button__text">採用情報はこちら</span>
                        <div class="button__icon-wrapper">
                            <svg class="button__icon" width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.905 0.219L15.768 4.979C16.066 5.271 16.066 5.744 15.768 6.038L10.905 10.797C10.606 11.089 10.122 11.089 9.824 10.797C9.526 10.504 9.526 10.032 9.824 9.739L13.334 6.304H0.8C0.358 6.304 0 5.951 0 5.516C0 5.081 0.358 4.73 0.8 4.73H13.351L9.824 1.276C9.526 0.985 9.526 0.511 9.824 0.219C10.122 -0.073 10.606 -0.073 10.905 0.219Z" />
                            </svg>
                        </div>
                    </a>
                </section>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>