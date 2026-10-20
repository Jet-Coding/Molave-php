const authModal = document.querySelector('.auth-modal');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const loginBtnModal = document.querySelector('.login-btn-modal');
const closeBtnModal = document.querySelector('.close-btn-modal');
const profileBox = document.querySelector('.profile-box');
const avatarCircle= document.querySelector('.avatar-circle');
const alertBox= document.querySelector('.alert-box');

registerLink.addEventListener('click', () => authModal.classList.add('slide'));
loginLink.addEventListener('click', () => authModal.classList.remove('slide'));

if (loginBtnModal) loginBtnModal.addEventListener('click', () => authModal.classList.add('show'));
closeBtnModal.addEventListener('click', () => authModal.classList.remove('show', 'slide'));

if (avatarCircle) avatarCircle.addEventListener('click', () => profileBox.classList.toggle('show'));

if (alertBox){
    setTimeout(() => alertBox.classList.add('show'), 50);

    setTimeout(() => {
        alertBox.classList.remove('show');
        setTimeout(() => alertBox.remove(), 1000)
    }, 6000);
}

document.addEventListener("DOMContentLoaded", () => {
    const sidebar = document.getElementById("sidebar") || document.querySelector(".sidebar");
    const toggleBtn = document.getElementById("sidebar-toggle-btn");
    const logo = document.querySelector(".brand-logo");

    if (!sidebar) return;

    // Restore saved collapse state from localStorage (Desktop View)
    const isCollapsed = localStorage.getItem("sidebar-collapsed") === "true";
    if (isCollapsed && window.innerWidth > 1023) {
        sidebar.classList.add("collapsed");
    }

    // Helper function to set collapsed state
    const setCollapsed = (collapsed) => {
        if (collapsed) {
            sidebar.classList.add("collapsed");
        } else {
            sidebar.classList.remove("collapsed");
        }
        localStorage.setItem("sidebar-collapsed", collapsed);
    };

    // Toggle sidebar on menu button click
    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            if (window.innerWidth <= 767) {
                // Mobile view: Toggle sliding drawer
                sidebar.classList.toggle("mobile-open");
            } else {
                // Desktop view: Toggle collapsed mini-sidebar
                const willBeCollapsed = !sidebar.classList.contains("collapsed");
                setCollapsed(willBeCollapsed);
            }
        });
    }

    // Expand sidebar when clicking the logo while collapsed
    if (logo) {
        logo.addEventListener("click", (e) => {
            if (sidebar.classList.contains("collapsed")) {
                e.preventDefault(); // Prevent accidental navigation while expanding
                setCollapsed(false);
            }
        });
    }
});