<?php

session_start();

$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

session_unset();

if ($name !== null) $_SESSION['name'] = $name;

// Page-specific variable
$page_title = "Home | Molave";

// Include the shared head section
require_once __DIR__ . '/includes/head.php';

?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php require_once __DIR__ . '/includes/header.php'; ?>
<section>
    <h1>Hey <?= $name ?? 'Developer' ?>!</h1>
</section>

<?php if (!empty($alerts)): ?>
<div class="alert-box">
    <?php foreach ($alerts as $alert): ?>
    <div class="alert <?= $alert['type']; ?>">
        <i class='bx <?= $alert['type'] ==='success' ? 'bxs-check-circle' : 'bxs-x-circle'; ?>'></i>
        <span><?= $alert['message']; ?></span>
    </div>
    <?php endforeach; ?>
</div>
<?php endif; ?>

<div class="auth-modal <?= $active_form === 'register' ? 'show slide' :($active_form === 'login' ? 'show' : ''); ?>">
    <button type="button" class="close-btn-modal"><i class='bx bx-x'></i></button>

    <div class="form-box login">
        <h2>Login</h2>
        <form action="auth_process.php" method="POST">
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i> 
            </div>
             <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock'></i> 
            </div>
            <button type="submit" name="login_btn" class="btn">Login</button>
            <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </form>
    </div>

    <div class="form-box register">
        <h2>Register</h2>
        <form action="auth_process.php" method="POST">
            <div class="input-box">
                <input type="text" name="name" placeholder="Name" required>
                <i class='bx bxs-user'></i>  
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i> 
            </div>
             <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock'></i> 
            </div>
            <button type="submit" name="register_btn" class="btn">Register</button>
            <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </form>
    </div>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<script src="public/js/script.js"></script>
</body>
</html>