<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url; ?>Assets/css/font-awesome.min.css">

    <title>Biblioteca EMEF Julieta Rago Foloni</title>
    <style>
        .material-half-bg {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            overflow: hidden;
        }

        .background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .material-half-bg .cover {
            background-color: rgba(0, 0, 0, 0.6);
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .login-content .logo {
            margin-bottom: 40px;
            font-family: "Times New Roman";
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
            color: #fff;
        }

        .login-content .logo h1 {
            font-size: 25px;
            font-weight: 400;
        }

        /* Ajustes para telas médias */
        @media (max-width: 768px) {
            .login-content .logo h1 {
                font-size: 48px;
            }
        }

        /* Ajustes para telas pequenas */
        @media (max-width: 480px) {
            .login-content .logo h1 {
                font-size: 36px;
            }
        }

        .btn-primary {
            color: #FFF;
            background-color: #120a8f;
            border-color: #120a8f;
        }

        .btn-primary:hover {
            color: #FFF;
            background-color: #000080;
            border-color: #000080;
        }

        .form-control:focus {
            border-color: #00008B;
            outline: none;
        }



/* Ajuste para tablets */
@media (max-width: 768px) {
    .login-content .logo h1 {
        font-size: 22px; /* Reduz o tamanho da fonte para telas menores */
        font-weight: 400; /* Mantém o mesmo peso */
    }
}

/* Ajuste para smartphones */
@media (max-width: 480px) {
    .login-content .logo h1 {
        font-size: 20px; /* Tamanho menor para smartphones */
        font-weight: 400; /* Pode ser alterado para um peso mais leve se necessário */
    }
}



    </style>
</head>

<body>
    <section class="material-half-bg">
        <video class="background-video" autoplay muted loop>
            <source src="https://videos.pexels.com/video-files/8199319/8199319-hd_1920_1080_25fps.mp4" type="video/mp4">
            Seu navegador não suporta a tag de vídeo.
        </video>
        <div class="cover"></div>
    </section>

    <section class="login-content">
    <div class="logo" style="position: absolute; top: 20px; left: 20px;">
        <h1>Biblioteca EMEF Julieta Rago Foloni</h1>
    </div>
    <div class="login-box" style="margin-top: 220px;"> <!-- Ajuste a margem superior aqui -->
        <form class="login-form" id="frmLogin" onsubmit="frmLogin(event);">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Iniciar Sessão</h3>
            <div class="form-group">
                <label class="control-label">USUÁRIO</label>
                <input class="form-control" type="text" placeholder="Usuário" id="usuario" name="usuario" autofocus required>
            </div>
            <div class="form-group">
                <label class="control-label">SENHA</label>
                <input class="form-control" type="password" placeholder="Senha" id="clave" name="clave" required>
            </div>
            <div class="alert alert-danger d-none" role="alert" id="alerta"></div>
            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block" type="submit"><i class="fa fa-sign-in fa-lg fa-fw"></i>Login</button>
            </div>
        </form>
    </div>
</section>
    <!-- Essential javascripts for application to work-->
    <script src="<?php echo base_url; ?>Assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url; ?>Assets/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="<?php echo base_url; ?>Assets/js/pace.min.js"></script>
    <script>
        const base_url = '<?php echo base_url; ?>';
    </script>
    <script src="<?php echo base_url; ?>Assets/js/login.js"></script>
    <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>
</body>

</html>
