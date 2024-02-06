<div class="container mt-4 text-center">
    <h1>LeaderFiesta</h1>
</div>

<nav class="navbar navbar-expand-lg navbar-light centered-nav" style="background-color: white;">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">
                <a class="nav-link" href="index.php">Hjem</a>
            </li>
            <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'shop.php' ? 'active' : '' ?>">
                <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">
                <a class="nav-link" href="about.php">Om os</a>
            </li>
            <li class="nav-item <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">
                <a class="nav-link" href="contact.php">Kontakt</a>
            </li>
        </ul>
    </div>
</nav>