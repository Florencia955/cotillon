<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Cotillon "Todo Bonito"</title>
        <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
		<link rel="stylesheet" href="<?= base_url ?>assets/bootstrap/css/bootstrap.css" />
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="<?= base_url ?>assets/img/poster1.png" />
                    <a href="<?= base_url ?>">
                        Cotillon "Todo Bonito"
                    </a>
                </div>
            </header>

            <!-- MENU -->
            <?php $categorias = Utils::showCategorias(); ?>
            <nav id="menu" class="navbar navbar-dark bg-dark">
                <ul>
                    <li class="nav-item active">
                        <a href="<?= base_url ?>">Inicio</a>
                    </li>
                    <?php while ($cat = $categorias->fetch_object()): ?>
                        <li class="nav-item active">
                            <a href="<?= base_url ?>categoria/ver&id=<?= $cat->id ?>"><?= $cat->nombre ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>

            <div id="content">