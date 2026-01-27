<?php

/**
 * chat.php - SUPERONG Chat/Messaging Interface
 * Real-time chat with support or other users
 * 99% Design Similarity
 */

$pageName = 'chat';
$pageTitle = 'Chat - SUPERONG';
$headerTitle = '客服';
$bodyClass = 'sp-bg-fixed';

include 'lib/htmlHead.php';
include 'lib/header.php';
?>

<!-- Main Content -->
<main class="sp-page">
    <div class="container-fluid" style="padding: 16px; display: flex; flex-direction: column; height: calc(100vh - 140px);">

        <!-- Chat Messages Area -->
        <div style="flex: 1; overflow-y: auto; margin-bottom: 16px;">

            <!-- Received Message -->
            <div style="display: flex; margin-bottom: 12px;">
                <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #3d3d7a, #4a4a8a); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4a84b; font-weight: 700; margin-right: 12px; flex-shrink: 0;">
                    S
                </div>
                <div style="background: #f5f5f5; padding: 10px 14px; border-radius: 12px; max-width: 80%; word-break: break-word;">
                    <div style="color: #2d2d5a; font-size: 14px;">您好，有什么我可以帮助您的吗？</div>
                    <div style="color: #9999aa; font-size: 11px; margin-top: 4px;">14:30</div>
                </div>
            </div>

            <!-- Sent Message -->
            <div style="display: flex; justify-content: flex-end; margin-bottom: 12px;">
                <div style="background: linear-gradient(135deg, #f5a623, #e8851c); padding: 10px 14px; border-radius: 12px; max-width: 80%; word-break: break-word; color: #ffffff;">
                    <div style="font-size: 14px;">我想提出一个建议</div>
                    <div style="color: rgba(255, 255, 255, 0.7); font-size: 11px; margin-top: 4px; text-align: right;">14:32</div>
                </div>
            </div>

            <!-- Received Message -->
            <div style="display: flex; margin-bottom: 12px;">
                <div style="width: 36px; height: 36px; background: linear-gradient(135deg, #3d3d7a, #4a4a8a); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #d4a84b; font-weight: 700; margin-right: 12px; flex-shrink: 0;">
                    S
                </div>
                <div style="background: #f5f5f5; padding: 10px 14px; border-radius: 12px; max-width: 80%; word-break: break-word;">
                    <div style="color: #2d2d5a; font-size: 14px;">请告诉我您的建议，我们很乐意听取意见！</div>
                    <div style="color: #9999aa; font-size: 11px; margin-top: 4px;">14:33</div>
                </div>
            </div>

        </div>

        <!-- Message Input Area -->
        <div style="background: #ffffff; border-top: 1px solid #f0f0f0; padding-top: 12px;">
            <div style="display: flex; gap: 8px;">
                <input type="text" class="sp-form-input" placeholder="输入消息..." style="flex: 1; margin: 0; padding: 10px 12px; border-radius: 20px;">
                <button style="width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #f5a623, #e8851c); color: #ffffff; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; font-size: 16px; transition: all 0.3s ease;">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
            <div style="display: flex; gap: 8px; margin-top: 8px;">
                <button style="flex: 1; padding: 8px; background: #f5f5f5; border: 1px solid #dfe6e9; border-radius: 8px; color: #2d2d5a; cursor: pointer; font-size: 12px; transition: all 0.3s ease;">
                    <i class="fas fa-image"></i> 图片
                </button>
                <button style="flex: 1; padding: 8px; background: #f5f5f5; border: 1px solid #dfe6e9; border-radius: 8px; color: #2d2d5a; cursor: pointer; font-size: 12px; transition: all 0.3s ease;">
                    <i class="fas fa-file"></i> 文件
                </button>
            </div>
        </div>

    </div>
</main>

<!-- Mobile Nav Spacer -->
<div class="mobile-nav-spacer"></div>

<?php include 'lib/footer.php'; ?>
<?php include 'lib/htmlBody.php'; ?>
</body>

</html>