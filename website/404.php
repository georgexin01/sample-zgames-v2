<!DOCTYPE html>
<html lang="en">
<head>
<?php
    // init head
    $pageName = '404';
    include('lib/htmlHead.php');
?>
</head>
<body>

    <!-- 404 pages -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .error-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 50%, #7e22ce 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        /* Animated background circles */
        .error-container::before,
        .error-container::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: float 6s ease-in-out infinite;
        }

        .error-container::before {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
            animation-delay: 0s;
        }

        .error-container::after {
            width: 400px;
            height: 400px;
            bottom: -150px;
            right: -150px;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0) scale(1);
            }
            50% {
                transform: translateY(-30px) scale(1.05);
            }
        }

        .error-content {
            background: rgba(255, 255, 255, 0.98);
            padding: 50px 40px;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
            max-width: 550px;
            width: 100%;
            position: relative;
            z-index: 1;
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .error-icon {
            margin-bottom: 20px;
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-15px);
            }
        }

        .error-icon svg {
            width: 120px;
            height: 120px;
        }

        .error-code {
            font-size: 100px;
            font-weight: 900;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            text-shadow: 0 5px 15px rgba(102, 126, 234, 0.2);
            line-height: 1;
            animation: glow 3s ease-in-out infinite;
        }

        @keyframes glow {
            0%, 100% {
                filter: drop-shadow(0 0 8px rgba(102, 126, 234, 0.3));
            }
            50% {
                filter: drop-shadow(0 0 15px rgba(118, 75, 162, 0.4));
            }
        }

        .error-title {
            font-size: 28px;
            color: #2d3748;
            margin-bottom: 15px;
            font-weight: 700;
            letter-spacing: -0.5px;
        }

        .error-message {
            font-size: 16px;
            color: #718096;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .error-message:last-of-type {
            margin-bottom: 30px;
            font-size: 14px;
            color: #a0aec0;
        }

        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .home-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 35px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
            position: relative;
            overflow: hidden;
        }

        .home-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .home-button:hover::before {
            left: 100%;
        }

        .home-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.6);
        }

        .contact-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 30px;
            background: white;
            color: #667eea;
            text-decoration: none;
            border-radius: 50px;
            font-size: 15px;
            font-weight: 600;
            border: 2px solid #667eea;
            transition: all 0.3s ease;
        }

        .contact-button:hover {
            background: #667eea;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
        }

        .decorative-line {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            margin: 20px auto;
            border-radius: 2px;
        }

        .credit-footer {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 13px;
            z-index: 2;
        }

        .credit-footer a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .credit-footer a:hover {
            color: white;
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .error-code {
                font-size: 80px;
            }

            .error-title {
                font-size: 24px;
            }

            .error-message {
                font-size: 15px;
            }

            .error-content {
                padding: 40px 25px;
            }

            .error-icon svg {
                width: 100px;
                height: 100px;
            }

            .button-group {
                flex-direction: column;
                align-items: stretch;
            }

            .home-button,
            .contact-button {
                width: 100%;
                justify-content: center;
            }

            .credit-footer {
                font-size: 12px;
                bottom: 15px;
            }
        }
    </style>

    <div class="error-container">
        <div class="error-content">
            <div class="error-icon">
                <svg viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="100" cy="100" r="90" fill="#f7fafc" stroke="#667eea" stroke-width="4"/>
                    <path d="M70 80 Q100 50 130 80" stroke="#667eea" stroke-width="6" stroke-linecap="round" fill="none"/>
                    <circle cx="75" cy="85" r="8" fill="#764ba2"/>
                    <circle cx="125" cy="85" r="8" fill="#764ba2"/>
                    <path d="M70 130 Q100 150 130 130" stroke="#764ba2" stroke-width="6" stroke-linecap="round" fill="none"/>
                </svg>
            </div>

            <div class="error-code">404</div>

            <div class="decorative-line"></div>

            <h1 class="error-title">Oops! Page Not Found</h1>

            <p class="error-message">
                The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.
            </p>

            <p class="error-message">
                Please contact the administrator for assistance or report this issue if the problem persists.
            </p>
        </div>

        <div class="credit-footer">
            Designed with <a href="#" target="_blank">Zeta</a>
        </div>
    </div>


<?php include('lib/htmlBody.php'); ?>
</body>
</html>
