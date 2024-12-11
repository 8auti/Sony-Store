<?php
    $user = $_SESSION['user'] ?? null;
?>

<header class="d-flex justify-content-between h-60px mb-3 pt-3">
    <form action="#" method="get">
        <input
            type="text"
            placeholder="🔎︎ Buscar productos por nombre o categoria..."
            class="px-3"
            id="searchInput"
            name="searchQuery" />
    </form>
    <div class="d-none d-sm-flex justify-content-around align-items-center gap-3">

        <?php if ($user): ?>
            <span class="text-capitalize"> <?php echo htmlspecialchars($user['nombre_usuario'] ?? 'Usuario'); ?> </span>
            <img
                class="rounded-circle h-100"
                src="https://res.cloudinary.com/dtnk8oggj/image/upload/v1721083530/boom-recorder/placeholders/v3der7jjr4ljprscr9dj.png"
                alt="Perfil de usuario" />
            
            <?php if ($user['rol_usuario'] === 'admin'): ?>
                <div class="text-secondary bg-light p-2 rounded my-2 text-dark">
                    <a href="/nexus/admin/panel.php" class="px-0 align-middle">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="ms-1 d-sm-inline align-bottom">Admin Panel</span>
                    </a>
                </div>
            <?php endif; ?>
        <?php else: ?>
            <a href="/nexus/auth/login.php" class="btn bg-grey-300" onMouseOver="this.style.color='white'">Iniciar Sesion</a>
            <a href="/nexus/auth/register.php" class="btn btn-light">Registrarse</a>
        <?php endif; ?>
    </div>
</header>
