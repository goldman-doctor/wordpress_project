<?php get_header('guyners'); ?>

<section class="sub_fv">
        <h3 class="sec_title_white">RECRUITMENT</h3>
        <p class="sec_subtitle_white">採用情報</p>
    </section>

    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <p>採用情報</p>
    </section>

    <section class="recruit-contents">
        <div class="recruit-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/recruit_1.png" alt="recruit_1">
            <div class="recruit-txt">
                <h6>JOIN OUR TEAM</h6>
                <div class="recruit-box-caption">
                    <h4>入団(選手)をご希望の方へ</h4>
                    <div class="dec"></div>
                </div>
                <p>香川オリーブガイナーズでは、独立リーグからプロを目指す熱意ある選手を募集しています。<br>四国・香川の地で、地域の声援を背に受けながら成長し、日本球界の新たな一歩を共に踏み出しませんか。<br>本気で野球と向き合い、夢を叶えたい方の挑戦をお待ちしています。</p>
                <a href="<?php echo home_url(); ?>/recruits/recruits_join" class="btn-buy-ticket">詳しく見る</a>
            </div>
        </div>
        <div class="recruit-box">
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/recruit_2.png" alt="recruit_2" class="sp">
            <div class="recruit-txt">
                <h6>JOIN OUR STAFF</h6>
                <div class="recruit-box-caption">
                    <h4>球団職員をご希望の方へ</h4>
                    <div class="dec"></div>
                </div>
                <p>香川オリーブガイナーズでは、球団運営を支えるスタッフを募集しています。<br>試合の企画・運営、広報、ファンサービス、地域活動など、球団職員の仕事は多岐にわたります。<br>選手やファン、地域の方々をつなぐ架け橋として、野球の持つ力を信じ、共に挑戦してくださる方をお待ちしています。<br>野球が好きな方はもちろん、スポーツを通じて地域に貢献したいという想いをお持ちの方、私たちと一緒に未来をつくっていきませんか？</p>
                <a href="<?php echo home_url(); ?>/recruits/recruits_staff" class="btn-buy-ticket">詳しく見る</a>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/recruit_2.png" alt="recruit_2" class="pc">
        </div>
    </section>
<?php get_footer('guyners'); ?>