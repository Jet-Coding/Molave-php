<header>
    <a href="#" class="logo">Molave</a>

    <nav>
        <a href="../views/about.php">About</a>
        <a href="../views/skills.php">Skills</a>
        <a href="../views/projects.php">Projects</a>
        <a href="../views/contact.php">Contact</a>
    </nav>

    <div class="user-auth">
        <?php if (!empty($name)): ?>
        <div class="profile-box">
            <div class="avatar-circle"><?= strtoupper($name[0]); ?></div>
            <div class="dropdown">
                <a href="#">My Account</a>
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <?php else: ?>
        <button type="button" class="login-btn-modal">Login</button>
        <?php endif; ?>
    </div>
</header>