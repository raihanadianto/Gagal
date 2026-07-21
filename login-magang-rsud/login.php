<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Magang RSUD Arjawinangun</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background:
                radial-gradient(circle at 20% 20%, #93c5fd 0, transparent 28%),
                radial-gradient(circle at 80% 25%, #86efac 0, transparent 25%),
                radial-gradient(circle at 75% 80%, #bfdbfe 0, transparent 28%),
                linear-gradient(135deg, #dbeafe, #f8fafc);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            perspective: 1000px;
        }

        .cube {
            position: absolute;
            width: 90px;
            height: 90px;
            border-radius: 22px;
            background: linear-gradient(145deg, rgba(255,255,255,0.9), rgba(147,197,253,0.55));
            box-shadow:
                18px 18px 35px rgba(15, 23, 42, 0.18),
                -10px -10px 25px rgba(255, 255, 255, 0.8);
            animation: floatCube 5s ease-in-out infinite;
            transform-style: preserve-3d;
        }

        .cube-1 {
            top: 12%;
            left: 12%;
            transform: rotateX(35deg) rotateY(35deg);
        }

        .cube-2 {
            top: 20%;
            right: 14%;
            width: 120px;
            height: 120px;
            background: linear-gradient(145deg, rgba(255,255,255,0.9), rgba(134,239,172,0.55));
            animation-delay: 1s;
        }

        .cube-3 {
            bottom: 12%;
            right: 20%;
            width: 150px;
            height: 150px;
            background: linear-gradient(145deg, rgba(255,255,255,0.9), rgba(96,165,250,0.45));
            animation-delay: 2s;
        }

        @keyframes floatCube {
            0%, 100% {
                transform: rotateX(35deg) rotateY(35deg) translateY(0);
            }
            50% {
                transform: rotateX(55deg) rotateY(55deg) translateY(-25px);
            }
        }

        .login-card {
            position: relative;
            z-index: 10;
            width: 470px;
            padding: 42px 46px;
            border-radius: 30px;
            background: rgba(255, 255, 255, 0.92);
            box-shadow:
                0 35px 80px rgba(15, 23, 42, 0.25),
                inset 0 2px 4px rgba(255, 255, 255, 0.85);
            transform-style: preserve-3d;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .login-card:hover {
            box-shadow:
                0 45px 100px rgba(15, 23, 42, 0.35),
                inset 0 2px 4px rgba(255, 255, 255, 0.85);
        }

        .logo-area {
            display: flex;
            justify-content: center;
            gap: 28px;
            margin-bottom: 26px;
            transform: translateZ(50px);
        }

        .logo-box {
            width: 118px;
            min-height: 118px;
            padding: 14px 10px;
            border-radius: 24px;
            text-align: center;
            background: linear-gradient(145deg, #ffffff, #e5ebf5);
            box-shadow:
                12px 12px 24px rgba(15, 23, 42, 0.20),
                -10px -10px 24px rgba(255, 255, 255, 0.95);
            transform: translateZ(55px) rotateX(8deg);
        }

        .logo-box img {
            width: 60px;
            height: 60px;
            object-fit: contain;
            display: block;
            margin: 0 auto 8px;
        }

        .logo-box span {
            font-size: 13px;
            font-weight: 800;
            color: #1f2937;
            line-height: 1.2;
        }

        h1 {
            margin: 0;
            text-align: center;
            font-size: 29px;
            line-height: 1.25;
            font-weight: 900;
            color: #111827;
            text-shadow: 0 8px 18px rgba(15, 23, 42, 0.16);
            transform: translateZ(45px);
        }

        .subtitle {
            margin: 16px 0 30px;
            text-align: center;
            color: #64748b;
            font-size: 16px;
            line-height: 1.5;
            transform: translateZ(35px);
        }

        .alert {
            padding: 12px 14px;
            border-radius: 12px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .alert-danger {
            background: #fee2e2;
            color: #991b1b;
        }

        .alert-success {
            background: #dcfce7;
            color: #166534;
        }

        form {
            transform: translateZ(40px);
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #111827;
            font-weight: 700;
            font-size: 15px;
        }

        input {
            width: 100%;
            height: 52px;
            border-radius: 15px;
            border: 1px solid #d8dee8;
            padding: 0 16px;
            font-size: 15px;
            outline: none;
            background: #ffffff;
            box-shadow:
                inset 3px 3px 7px rgba(15, 23, 42, 0.08),
                inset -3px -3px 7px rgba(255, 255, 255, 0.9);
            transition: 0.2s;
        }

        input:focus {
            border-color: #2563eb;
            box-shadow:
                0 0 0 4px rgba(37, 99, 235, 0.13),
                inset 3px 3px 7px rgba(15, 23, 42, 0.08);
        }

        .register-link {
            display: inline-block;
            margin-top: 4px;
            color: #2563eb;
            text-decoration: none;
            font-size: 14px;
            font-weight: 700;
        }

        .button-area {
            margin-top: 30px;
            text-align: right;
        }

        .btn-login {
            border: none;
            border-radius: 16px;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            padding: 14px 40px;
            font-size: 16px;
            font-weight: 900;
            cursor: pointer;
            box-shadow:
                0 14px 0 #1e40af,
                0 25px 35px rgba(37, 99, 235, 0.38);
            transition: 0.15s;
        }

        .btn-login:hover {
            transform: translateY(-4px);
            box-shadow:
                0 18px 0 #1e40af,
                0 32px 45px rgba(37, 99, 235, 0.45);
        }

        .btn-login:active {
            transform: translateY(8px);
            box-shadow:
                0 5px 0 #1e40af,
                0 12px 18px rgba(37, 99, 235, 0.35);
        }

        @media (max-width: 500px) {
            .login-card {
                width: 90%;
                padding: 34px 28px;
            }

            h1 {
                font-size: 23px;
            }

            .logo-area {
                gap: 14px;
            }

            .logo-box {
                width: 105px;
            }
        }
    </style>
</head>

<body>

    <div class="cube cube-1"></div>
    <div class="cube cube-2"></div>
    <div class="cube cube-3"></div>

    <div class="login-card" id="loginCard">

        <div class="logo-area">
            <div class="logo-box">
                <img src="<?= base_url('assets/images/logo-telkom.png'); ?>" alt="Logo Telkom University">
                <span>Telkom<br>University</span>
            </div>

            <div class="logo-box">
                <img src="<?= base_url('assets/images/logo-rsud.png'); ?>" alt="Logo RSUD Arjawinangun">
                <span>RSUD<br>Arjawinangun</span>
            </div>
        </div>

        <h1>
            Selamat Datang di Web Magang<br>
            RSUD Arjawinangun
        </h1>

        <p class="subtitle">
            Silakan masuk menggunakan akun Anda untuk mengakses sistem magang
        </p>

        <?php if (session()->getFlashdata('notif_error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('notif_error'); ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('notif_success')) : ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('notif_success'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('login'); ?>" method="post">
            <?= csrf_field(); ?>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="inputEmail" placeholder="Masukkan email Anda" required>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="inputPassword" placeholder="Masukkan password Anda" required>
            </div>

            <a href="<?= base_url('register'); ?>" class="register-link">
                Belum punya akun? Daftar sekarang
            </a>

            <div class="button-area">
                <button type="submit" class="btn-login">Masuk</button>
            </div>
        </form>

    </div>

    <script>
        const card = document.getElementById('loginCard');

        document.addEventListener('mousemove', function(e) {
            const x = (window.innerWidth / 2 - e.clientX) / 35;
            const y = (window.innerHeight / 2 - e.clientY) / 35;

            card.style.transform = `rotateY(${-x}deg) rotateX(${y}deg)`;
        });

        document.addEventListener('mouseleave', function() {
            card.style.transform = 'rotateY(0deg) rotateX(0deg)';
        });
    </script>

</body>
</html>
