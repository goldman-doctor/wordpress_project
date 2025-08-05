<?php get_header('guyners'); ?>    

    <section class="sub_fv">
        <h3 class="sec_title_white">TEAM MEMBERS</h3>
        <p class="sec_subtitle_white">選手紹介</p>
    </section>


    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <a href="<?php echo home_url(); ?>/members">選手紹介</a>
        <p class='breadcrumb-arrow'>></p>
        <p>ガイナくん</p>
    </section>

    <section class="player-detail-contents gaina">
        <div class="player-profile">
            <div class="player-profile-inner">
				<div class="player-profile-img pc">
					<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/gaina.png" alt="ガイナくん" class="player-detail-img">
				</div>
				<div class="player-profile-txt">
					<h2>
						<span class="player-name">ガイナくん</span>
					</h2>
					<h6 class="en-name">GAINA KUN</h6>
					<h5 class="player-role">マスコットキャラクター</h5>
					<div class='player-info pc'>
						<p>
							<span class="dob">2005.4.29生</span>
						</p>
					</div>					
				</div>
				<div class="player-profile-img sp">
					<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/gaina.png" alt="ガイナくん" class="player-detail-img">
				</div>
				<div class='player-info sp'>
					<p>
						<span class="dob">2005.4.29生</span>
					</p>
				</div>
            </div>			
        </div>

        <div class="player-origin">
            <div class="player-origin-item">
                <p>出身</p>
                <p>香川県</p>
            </div>
            <div class="player-origin-item">
                <p>性別</p>
                <p>不明</p>
            </div>
        </div>

        <div class="player-detail">
            <div class="player-caption">
                <h3 class="sec_title_green">CHARACTER DETAILS</h3>
                <p class="sec_subtitle_green">キャラクター詳細</p>
            </div>
            <div class="player-detail-table gaina-table">
                <table>
                    <tr>
                        <th>種別</th>
                        <td>香川県の県木であるオリーブの木の精霊</td>
                    </tr>
                    <tr>
                        <th>特徴</th>
                        <td>頭の上の新芽がセンサーで目の役割を果たしている</td>
                    </tr>
                    <tr>
                        <th>自慢</th>
                        <td>他のマスコットには負けない、腕っ節の強さが自慢。<br>映画にも出たことがある。（アニメ『劇場版ゲゲゲの鬼太郎日本爆裂！』中四国バージョンにて登場）</td>
                    </tr>
                    <tr>
                        <th>性格</th>
                        <td>争いは好まない。みんななかよく。<br>自分がチームの人気ナンバーワンだと思っている。<br>チームが勝てばパワーアップ！</td>
                    </tr>
                    <tr>
                        <th>一言</th>
                        <td>球場に来たら僕もいるよ！みんな遊びに来てね！</td>
                    </tr>
                    </table>
            </div>
        </div>
    </section>


<?php get_footer('guyners'); ?>