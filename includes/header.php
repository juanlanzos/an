<?php
// Header component
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="default-src * 'self' blob: data: gap:; style-src * 'self' 'unsafe-inline' blob: data: gap:; script-src * 'self' 'unsafe-eval' 'unsafe-inline' blob: data: gap:; object-src * 'self' blob: data: gap:; img-src * 'self' 'unsafe-inline' blob: data: gap:; connect-src * 'self' blob: data: gap:; frame-src * 'self' blob: data: gap:;">
    <meta name="description" content="Grupo AN Arquitectura & Construcción - Arquitectura con presencia real en obra. Diseño, gestión y ejecución sin sorpresas.">
    <meta name="keywords" content="arquitectura, construcción, reformas, revoques proyectados, microcemento, CABA, Buenos Aires, Grupo AN">
    <title><?php echo isset($page_title) ? $page_title . ' | Grupo AN' : 'Grupo AN - Arquitectura & Construcción'; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="index.php" class="nav-logo">
                    <img src="assets/img/logo.png" alt="Grupo AN" style="height: 60px; width: auto;">
                </a>
                <ul class="nav-menu">
                    
                    <li><a href="index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">Inicio</a></li>
                    <li><a href="nosotros.php" class="nav-link <?php echo $current_page === 'nosotros' ? 'active' : ''; ?>">Nosotros</a></li>
                    <li><a href="servicios.php" class="nav-link <?php echo $current_page === 'servicios' ? 'active' : ''; ?>">Servicios</a></li>
                    <li><a href="proyectos.php" class="nav-link <?php echo $current_page === 'proyectos' ? 'active' : ''; ?>">Proyectos</a></li>
                    <li><a href="contacto.php" class="nav-link <?php echo $current_page === 'contacto' ? 'active' : ''; ?>">Contacto</a></li>
                    <li><a href="contacto.php" class="btn btn-primary">Cotizar</a></li>
                </ul>
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
   