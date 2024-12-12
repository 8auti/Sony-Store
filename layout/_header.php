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

        <?php if (isset($user)): ?>
            <a style="display: contents;" href="/nexus/auth/profile.php">

                <span class="text-capitalize"> <?php echo htmlspecialchars($user['nombre_usuario'] ?? 'Usuario'); ?> </span>
                <img
                class="rounded-circle h-100"
                style="aspect-ratio: 1/1; object-fit:cover"
                src="<?php echo $user['imagen_perfil'] ?? 'https://res.cloudinary.com/dtnk8oggj/image/upload/v1721083530/boom-recorder/placeholders/v3der7jjr4ljprscr9dj.png'; ?>"
                alt="Perfil de usuario">
            </a>

            <?php if ($user['rol_usuario'] === 'user'): ?>
                <a href="/nexus/auth/profile.php" class="px-0 align-middle">
                    <div class="text-secondary bg-light p-2 rounded my-2 text-dark">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="ms-1 d-sm-inline align-bottom">Editar Perfil</span>
                    </div>
                </a>
            <?php endif; ?>
            <?php if ($user['rol_usuario'] === 'admin'): ?>
                <a href="/nexus/admin/panel.php" class="px-0 align-middle">
                    <div class="text-secondary bg-light p-2 rounded my-2 text-dark">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span class="ms-1 d-sm-inline align-bottom">Admin Panel</span>
                    </div>
                </a>
            <?php endif; ?>
            <form action="" method="POST"">
                <button class=" btn btn-danger" type="submit" name="logout" id="logout" value="true">
                <i class="fa-solid fa-right-from-bracket"></i>
                </button>
            </form>
        <?php else: ?>
            <a href="/nexus/auth/login.php" class="btn bg-grey-300" onMouseOver="this.style.color='white'">Iniciar Sesion</a>
            <a href="/nexus/auth/register.php" class="btn btn-light">Registrarse</a>
        <?php endif; ?>
    </div>
</header>