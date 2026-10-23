<?php
    $currentPage = basename($_SERVER['PHP_SELF']);
?>
<aside class="sidebar">
    <div>
        <!-- Brand Header -->
        <div class="brand-header">
            <a href="index.php" class="brand-logo">
                <img src="public/images/Logo.svg" alt="logo" />
                <span class="brand-name">Molave</span>
            </a>
            <button class="sidebar-toggle-btn" id="sidebar-toggle-btn" title="Toggle Sidebar">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>

        <!-- Search Box -->
        <div class="search-box">
            <div class="search-input-wrapper">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" placeholder="Search" class="search-input">
            </div>
        </div>

        <!-- Navigation List -->
        <nav class="nav-list">
            <a href="index.php" class="nav-item <?= $currentPage === 'index.php' ? 'active' : ''; ?>">
                <div class="nav-icon-wrap"><i class="fa-solid fa-house"></i></div>
                <span>For You</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-regular fa-compass"></i></div>
                <span>Explore</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-solid fa-user-plus"></i></div>
                <span>Following</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-solid fa-user-group"></i></div>
                <span>Friends</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-solid fa-satellite-dish"></i></div>
                <span>LIVE</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-regular fa-paper-plane"></i></div>
                <span>Messages</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap badge-icon">
                    <i class="fa-regular fa-bell"></i>
                    <!--<span class="badge">4</span>-->
                </div>
                <span>Activity</span>
            </a>
            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-solid fa-square-plus"></i></div>
                <span>Upload</span>
            </a>
            <?php if (!empty($name)): ?>
            <a href="index.php?page=profile" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-regular fa-circle-user"></i></div>
                <span><?= htmlspecialchars($name) ?></span>
            </a>
            <?php endif; ?>

            <a href="#" class="nav-item">
                <div class="nav-icon-wrap"><i class="fa-solid fa-ellipsis"></i></div>
                <span>More</span>
            </a>
        </nav>

        <hr class="sidebar-divider">
    </div>
</aside>