<?php
$pageName = 'home';
$pageTitle = 'SUPERONG';
include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<main class="sp-page">
    <div class="container-fluid" style="padding: 0;">

        <!-- Banner --
<section class="sp-banner-section">
<div class="sp-banner-slider">
<div class="sp-banner-slide active">
<img src="resource/game-icons/pp-wang-zhe-slot-banner.png" alt="Banner">
<div class="sp-banner-overlay">
<span class="sp-banner-label">PLAYTECH</span>
<h3 class="sp-banner-title">PP王者电子特供</h3>
<a href="games.php" class="sp-banner-btn">立即前往</a>
</div>
</div>
<div class="sp-banner-slide">
<img src="resource/game-icons/golden-temple.png" alt="Banner">
<div class="sp-banner-overlay">
<span class="sp-banner-label">MEGA</span>
<h3 class="sp-banner-title">金庙大奖</h3>
<a href="games.php" class="sp-banner-btn">立即前往</a>
</div>
</div>
</div>
<div class="sp-banner-indicators"><span class="sp-indicator active"></span><span class="sp-indicator"></span></div>
</section>

<!-- Points -->
        <div class="sp-point-section">
            <div class="sp-point-bar">
                <span class="sp-point-label">当前余额</span>
                <div class="sp-point-value-wrap"><span class="sp-point-value">¥ 15,250.50</span></div>
            </div>
        </div>

        <!-- Features -->
        <section class="sp-feature-section">
            <div class="sp-feature-scroll">
                <a href="games.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-gift"></i></div><span class="sp-feature-label">活动</span>
                </a>
                <a href="ranking-page.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-trophy"></i></div><span class="sp-feature-label">排行</span>
                </a>
                <a href="#" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-qrcode"></i></div><span class="sp-feature-label">二维码</span>
                </a>
                <a href="chat-page.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-headset"></i></div><span class="sp-feature-label">客服</span>
                </a>
                <a href="#" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-user-plus"></i></div><span class="sp-feature-label">邀请</span>
                </a>
                <a href="#" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-star"></i></div><span class="sp-feature-label">等级</span>
                </a>
                <a href="#" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-exchange-alt"></i></div><span class="sp-feature-label">转账</span>
                </a>
                <a href="transaction-page.php" class="sp-feature-item">
                    <div class="sp-feature-icon"><i class="fas fa-history"></i></div><span class="sp-feature-label">记录</span>
                </a>
            </div>
        </section>

        <!-- Promos -->
        <div class="sp-promo-section">
            <h2 class="sp-section-title">热门推荐</h2>
            <div class="sp-promo-grid">
                <?php $p = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png', 'king-arthur.png', 'ragnarok-odin.png', 'super-pink-joker.png', 'dancing-joker.png', 'trick-or-treat.png'];
                for ($i = 0; $i < 8; $i++): ?>
                    <a href="games.php" class="sp-promo-card"><img src="resource/game-icons/<?php echo $p[$i % 8]; ?>" alt=""><span class="sp-promo-label">HOT</span></a>
                <?php endfor; ?>
            </div>
        </div>

        <!-- Categories -->
        <div class="sp-category-section">
            <h2 class="sp-section-title">游戏分类</h2>
            <div class="sp-category-grid">
                <?php $c = [['SLOT', '128'], ['LIVE', '85'], ['SPORT', '42'], ['LOTTO', '36'], ['电子', '94'], ['棋牌', '58'], ['捕鱼', '27'], ['真人', '71'], ['彩票', '45']];
                $im = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png'];
                foreach ($c as $i => $cat): ?>
                    <a href="games.php" class="sp-category-card"><img src="resource/game-icons/<?php echo $im[$i % 3]; ?>" alt="">
                        <div class="sp-category-overlay">
                            <div class="sp-category-name"><?php echo $cat[0]; ?></div>
                            <div class="sp-category-count"><?php echo $cat[1]; ?> 款</div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Games -->
        <div class="sp-game-section">
            <h2 class="sp-section-title">热门游戏</h2>
            <div class="sp-game-grid">
                <?php $g = [['Wild Fury', 4.8], ['Dynasty', 4.7], ['Piggy', 4.9], ['Dragon', 4.6], ['Temple', 4.8], ['Arthur', 4.7], ['Odin', 4.9], ['Joker', 4.5]];
                $gi = ['dragon-gem.png', 'golden-temple.png', 'lucky-piggy.png', 'king-arthur.png', 'ragnarok-odin.png', 'super-pink-joker.png', 'dancing-joker.png', 'trick-or-treat.png'];
                foreach ($g as $ix => $game): ?>
                    <a href="game.php" class="sp-game-card">
                        <div class="sp-game-image"><img src="resource/game-icons/<?php echo $gi[$ix % 8]; ?>" alt=""><span class="sp-game-badge">HOT</span></div>
                        <div class="sp-game-body">
                            <div class="sp-game-name"><?php echo $game[0]; ?></div>
                            <div class="sp-game-meta"><span class="sp-game-rating"><i class="fas fa-star"></i><?php echo $game[1]; ?></span></div>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div style="padding:20px 16px;"><a href="games.php" class="sp-btn-primary sp-btn-large" style="display:block;text-align:center;"><i class="fas fa-gamepad"></i>查看所有</a></div>

    </div>
</main>

<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>