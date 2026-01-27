<?php

/**
 * ranking.php - SUPERONG Ranking & Leaderboard
 * Display top players and rankings
 * 99% Design Similarity
 */

$pageName = 'ranking';
$pageTitle = 'Rankings - SUPERONG';
$headerTitle = '排名';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 0;">

        <!-- Tab Navigation - Ranking Types -->
        <div class="sp-tab-bar">
            <a href="#" class="sp-tab-item active">周排行榜</a>
            <a href="#" class="sp-tab-item">月排行榜</a>
            <a href="#" class="sp-tab-item">总排行榜</a>
        </div>

        <!-- Top 3 Winners Showcase -->
        <div style="background: linear-gradient(135deg, #3d3d7a, #4a4a8a); padding: 24px 16px; margin-bottom: 20px;">
            <div style="display: grid; grid-template-columns: 1fr 1.2fr 1fr; gap: 12px; align-items: flex-end;">

                <!-- 2nd Place -->
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: #d4a84b; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; border: 3px solid #e5c16e;">
                        <span style="font-size: 28px; font-weight: 700; color: #2d2d5a;">2</span>
                    </div>
                    <div style="color: #ffffff; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Player2</div>
                    <div style="color: #e0e0e0; font-size: 11px;">¥ 8,500</div>
                    <div style="background: #2d2d5a; padding: 4px 8px; border-radius: 8px; margin-top: 8px; font-size: 10px; color: #d4a84b;">银牌🥈</div>
                </div>

                <!-- 1st Place (Center - Tallest) -->
                <div style="text-align: center;">
                    <div style="width: 70px; height: 70px; background: linear-gradient(135deg, #f5a623, #e8851c); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; border: 3px solid #ffc107;">
                        <span style="font-size: 32px; font-weight: 700; color: #ffffff;">👑</span>
                    </div>
                    <div style="color: #ffffff; font-size: 14px; font-weight: 700; margin-bottom: 4px;">Player1</div>
                    <div style="color: #d4a84b; font-size: 12px; font-weight: 600;">¥ 12,500</div>
                    <div style="background: #d4a84b; padding: 4px 8px; border-radius: 8px; margin-top: 8px; font-size: 10px; color: #2d2d5a; font-weight: 600;">金牌🥇</div>
                </div>

                <!-- 3rd Place -->
                <div style="text-align: center;">
                    <div style="width: 60px; height: 60px; background: #c4a67a; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 12px; border: 3px solid #d4a84b;">
                        <span style="font-size: 28px; font-weight: 700; color: #2d2d5a;">3</span>
                    </div>
                    <div style="color: #ffffff; font-size: 13px; font-weight: 600; margin-bottom: 4px;">Player3</div>
                    <div style="color: #e0e0e0; font-size: 11px;">¥ 6,200</div>
                    <div style="background: #2d2d5a; padding: 4px 8px; border-radius: 8px; margin-top: 8px; font-size: 10px; color: #c4a67a;">铜牌🥉</div>
                </div>

            </div>
        </div>

        <!-- Full Ranking List -->
        <div style="padding: 16px;">
            <h3 class="sp-section-title">完整排行榜</h3>

            <?php for ($i = 4; $i <= 20; $i++): ?>
                <div class="sp-list-item" style="padding: 12px 16px;">
                    <div style="width: 44px; text-align: center; font-weight: 700; color: #d4a84b; font-size: 16px;">
                        <?php echo $i; ?>
                    </div>
                    <div class="sp-list-content">
                        <div class="sp-list-title">Player<?php echo $i; ?></div>
                        <div class="sp-list-desc">赢取金额</div>
                    </div>
                    <div style="text-align: right; font-weight: 600; color: #d4a84b;">
                        ¥ <?php echo number_format(rand(1000, 15000), 0); ?>
                    </div>
                </div>
            <?php endfor; ?>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>