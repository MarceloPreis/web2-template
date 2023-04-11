<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body>
    <div class="header-bar">
        <div class="">
            <div class="flex-column pull-left">
                <span class="bubble"></span>
                <span class="bubble"></span>
            </div>
        </div>
        <div>
            <h1>Consultório Médico</h1>
            <ul class="nav-bar">
                <li><i class="bi bi-person-lines-fill"></i> Contato</li>
                <li>Blog</li>
            </ul>
        </div>
    </div>
    <div class="banner-top">
        <div class="banner-title flex-column">
            <span class="title">
                AGENDE JÁ SUA CONSULTA
            </span>
            <button class="contato">
                <span>Fale Conosco</span>
            </button>
            <div>
                <span style="margin-right: 60px;">contato@email.com</span>
                <span>(47) 99604-2380</span>
            </div>
        </div>
        <div class="banner-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/medico.png" alt="" />
        </div>
    </div>

    <hr>
