<!-- BARRA LATERAL -->
<aside id="lateral">

    <div id="carrito" class="block_aside">
        <h3>Mi carrito</h3>
        <ul class="navbar-nav">
            <?php $stats = Utils::statsCarrito(); ?>
            <li class="nav-item"><a href="<?= base_url ?>carrito/index">Productos (<?= $stats['count'] ?>)</a></li>
            <li class="nav-item"><a href="<?= base_url ?>carrito/index">Total: <?= $stats['total'] ?> $</a></li>
            <li class="nav-item"><a href="<?= base_url ?>carrito/index">Ver el carrito</a></li>
        </ul>
    </div>

    <div id="login" class="block_aside">

        <?php if (!isset($_SESSION['identity'])): ?>
            <h3>Ingresar</h3>
            <form action="<?= base_url ?>usuario/login" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" />
                <label for="password">Contraseña</label>
                <input type="password" name="password" />
                <input class="btn btn-outline-primary" type="submit" value="Entrar" />
            </form>
        <?php else: ?>
            <h3><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellidos ?></h3>
        <?php endif; ?>

        <ul>
            <?php if (isset($_SESSION['admin'])): ?>
                <li><a href="<?= base_url ?>categoria/index">Categorias</a></li>
                <li><a href="<?= base_url ?>producto/gestion">Productos</a></li>
                <li><a href="<?= base_url ?>pedido/gestion">Pedidos</a></li>
            <?php endif; ?>

            <?php if (isset($_SESSION['identity'])): ?>
                <li><a href="<?= base_url ?>pedido/mis_pedidos">Mis pedidos</a></li>
                <li><a href="<?= base_url ?>usuario/logout">Cerrar sesión</a></li>
            <?php else: ?> 
                <a class="btn btn-outline-success" href="<?= base_url ?>usuario/registro">Registrar</a>
            <?php endif; ?> 
        </ul>
    </div>

</aside>

<!-- CONTENIDO CENTRAL -->
<div id="central">
