<?php
session_start();

// Retrieve session values
$name = $_SESSION['name'] ?? null;
$alerts = $_SESSION['alerts'] ?? [];
$active_form = $_SESSION['active_form'] ?? '';

// Clear ONLY alerts and form state after reading (preserves $name)
unset($_SESSION['alerts'], $_SESSION['active_form']);

// Page-specific variable
$page_title = "Home | Molave";

// Include the shared head section
require_once __DIR__ . '/includes/clientHead.php';
?>
<!DOCTYPE html>
<html lang="en">
	<body>
		<!-- Main Layout Container -->
		<div class="app-container">
			<?php require_once __DIR__ . '/includes/clientSidebar.php'; ?>
			<main class="main-content">

				<!-- Top Header Utilities -->
				<header class="top-header">
					<button class="btn-utility">
						<i class="fa-solid fa-coins"></i>
						<span>Get Coins</span>
					</button>

					<button class="btn-utility">
						<i class="fa-solid fa-mobile-screen-button"></i>
						<span>Get App</span>
					</button>

					<div class="user-auth">
						<?php if (!empty($name)): ?>
							<div class="profile-box">
								<div class="avatar-circle"><?= strtoupper($name[0]); ?></div>
								<div class="dropdown">
									<a href="#"><?= htmlspecialchars($name); ?></a>
									<a href="logout.php">Logout</a>
								</div>
							</div>
						<?php else: ?>
							<button type="button" class="login-btn-modal">Login</button>
						<?php endif; ?>
					</div>
				</header>

				<!-- Feed Section -->
				<section class="feed-section">

					<!-- Video Card -->
					<div class="video-card">
						<video id="videoPlayer" loop muted autoplay playsinline>
							<source src="https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4" type="video/mp4">
							Your browser does not support video.
						</video>

						<!-- Play/Pause Indicator -->
						<div id="playOverlay" class="play-overlay">
							<div class="play-icon-badge">
								<i id="playIcon" class="fa-solid fa-play"></i>
							</div>
						</div>

						<!-- Mute Toggle Button -->
						<button id="muteBtn" class="mute-btn" title="Toggle Mute">
							<i id="muteIcon" class="fa-solid fa-volume-xmark"></i>
						</button>

						<!-- Bottom Info Overlay -->
						<div class="video-info-overlay">
							<div class="capcut-badge">
								<i class="fa-solid fa-scissors"></i>
								<span>CapCut · Editing made easy</span>
							</div>
							<div class="author-handle">ViralPreneur By JET</div>
							<div class="video-caption">
								<span>Paano Napunta Ang MSG Sa Phone At</span>
								<button class="btn-more">more</button>
							</div>
							<button class="btn-translation">See translation</button>
						</div>

						<!-- Progress Bar -->
						<div class="progress-container">
							<div id="progressBar" class="progress-bar"></div>
						</div>
					</div>

					<!-- Floating Social Action Buttons -->
					<div class="social-actions">
						<!-- Creator Avatar + Follow -->
						<div class="creator-avatar-wrap">
							<div class="creator-avatar">
								<img src="https://i.pravatar.cc/150?img=11" alt="Creator">
							</div>
							<button id="followBtn" class="follow-btn" title="Follow">
								<i class="fa-solid fa-plus"></i>
							</button>
						</div>

						<!-- Like -->
						<div class="action-group">
							<button id="likeBtn" class="action-btn">
								<i id="likeIcon" class="fa-solid fa-heart"></i>
							</button>
							<span id="likeCount" class="action-counter">29</span>
						</div>

						<!-- Comment -->
						<div class="action-group">
							<button class="action-btn">
								<i class="fa-solid fa-comment-dots"></i>
							</button>
							<span class="action-counter">2</span>
						</div>

						<!-- Bookmark -->
						<div class="action-group">
							<button id="bookmarkBtn" class="action-btn">
								<i id="bookmarkIcon" class="fa-solid fa-bookmark"></i>
							</button>
							<span id="bookmarkCount" class="action-counter">6</span>
						</div>

						<!-- Share -->
						<div class="action-group">
							<button class="action-btn">
								<i class="fa-solid fa-share"></i>
							</button>
							<span class="action-counter">1</span>
						</div>

						<!-- Spinning Audio Disk -->
						<div class="audio-disk" title="Original Sound">
							<img src="https://i.pravatar.cc/150?img=11" alt="Audio Disk">
						</div>
					</div>

					<!-- Up / Down Navigation Controls (Desktop/Laptop) -->
					<div class="video-nav-controls">
						<button id="prevBtn" class="nav-arrow-btn" title="Previous Video">
							<i class="fa-solid fa-chevron-up"></i>
						</button>
						<button id="nextBtn" class="nav-arrow-btn" title="Next Video">
							<i class="fa-solid fa-chevron-down"></i>
						</button>
					</div>

				</section>
			</main>

			<!-- ================= 3. MOBILE BOTTOM NAVIGATION BAR ================= -->
			<nav class="mobile-bottom-nav">
				<a href="#" class="mobile-nav-item active">
					<i class="fa-solid fa-house"></i>
					<span>Home</span>
				</a>
				<a href="#" class="mobile-nav-item">
					<i class="fa-solid fa-user-group"></i>
					<span>Friends</span>
				</a>
				<a href="#" class="mobile-nav-item">
					<div class="mobile-post-btn">
						<div class="mobile-post-btn-inner">
							<i class="fa-solid fa-plus"></i>
						</div>
					</div>
				</a>
				<a href="#" class="mobile-nav-item">
					<i class="fa-regular fa-message"></i>
					<span>Inbox</span>
				</a>
				<a href="#" class="mobile-nav-item">
					<i class="fa-regular fa-user"></i>
					<span>Profile</span>
				</a>
			</nav>

		</div>

		<div class="auth-modal <?= $active_form === 'register' ? 'show slide' :($active_form === 'login' ? 'show' : ''); ?>">
			<button type="button" class="close-btn-modal"><i class="fa-solid fa-x"></i></button>

			<div class="form-box login">
				<h2>Login</h2>
				<form action="auth/auth_process.php" method="POST">
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
				<form action="auth/auth_process.php" method="POST">
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
		<script src="public/js/script.js"></script>
		<!-- ================= 4. INTERACTIVE JAVASCRIPT LOGIC ================= -->
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				const video = document.getElementById('videoPlayer');
				const playOverlay = document.getElementById('playOverlay');
				const playIcon = document.getElementById('playIcon');
				const muteBtn = document.getElementById('muteBtn');
				const muteIcon = document.getElementById('muteIcon');
				const progressBar = document.getElementById('progressBar');
				
				const likeBtn = document.getElementById('likeBtn');
				const likeIcon = document.getElementById('likeIcon');
				const likeCount = document.getElementById('likeCount');
				
				const bookmarkBtn = document.getElementById('bookmarkBtn');
				const bookmarkIcon = document.getElementById('bookmarkIcon');
				const bookmarkCount = document.getElementById('bookmarkCount');

				const followBtn = document.getElementById('followBtn');
				const nextBtn = document.getElementById('nextBtn');
				const prevBtn = document.getElementById('prevBtn');

				let isLiked = false;
				let currentLikes = 29;
				let isBookmarked = false;
				let currentBookmarks = 6;
				let isFollowing = false;

				// Video playlist array for cycling
				const videoPlaylist = [
					"https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerBlazes.mp4",
					"https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
					"https://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerFun.mp4"
				];
				let currentVideoIndex = 0;

				// Toggle Play/Pause on Video Click
				video.addEventListener('click', () => {
					if (video.paused) {
						video.play();
						playIcon.className = "fa-solid fa-play";
					} else {
						video.pause();
						playIcon.className = "fa-solid fa-pause";
					}
					playOverlay.classList.add('show');
					setTimeout(() => {
						playOverlay.classList.remove('show');
					}, 500);
				});

				// Update Progress Bar as Video Plays
				video.addEventListener('timeupdate', () => {
					if (video.duration) {
						const percentage = (video.currentTime / video.duration) * 100;
						progressBar.style.width = `${percentage}%`;
					}
				});

				// Mute / Unmute Toggle
				muteBtn.addEventListener('click', (e) => {
					e.stopPropagation();
					video.muted = !video.muted;
					if (video.muted) {
						muteIcon.className = "fa-solid fa-volume-xmark";
					} else {
						muteIcon.className = "fa-solid fa-volume-high";
					}
				});

				// Like Toggle
				likeBtn.addEventListener('click', () => {
					isLiked = !isLiked;
					if (isLiked) {
						likeBtn.classList.add('liked');
						currentLikes++;
					} else {
						likeBtn.classList.remove('liked');
						currentLikes--;
					}
					likeCount.textContent = currentLikes;
				});

				// Bookmark Toggle
				bookmarkBtn.addEventListener('click', () => {
					isBookmarked = !isBookmarked;
					if (isBookmarked) {
						bookmarkBtn.classList.add('bookmarked');
						currentBookmarks++;
					} else {
						bookmarkBtn.classList.remove('bookmarked');
						currentBookmarks--;
					}
					bookmarkCount.textContent = currentBookmarks;
				});

				// Follow Button Toggle
				followBtn.addEventListener('click', () => {
					isFollowing = !isFollowing;
					if (isFollowing) {
						followBtn.innerHTML = '<i class="fa-solid fa-check"></i>';
						followBtn.classList.add('following');
					} else {
						followBtn.innerHTML = '<i class="fa-solid fa-plus"></i>';
						followBtn.classList.remove('following');
					}
				});

				// Next / Previous Video Logic
				function loadVideo(index) {
					currentVideoIndex = (index + videoPlaylist.length) % videoPlaylist.length;
					video.src = videoPlaylist[currentVideoIndex];
					video.play();
				}

				nextBtn.addEventListener('click', () => loadVideo(currentVideoIndex + 1));
				prevBtn.addEventListener('click', () => loadVideo(currentVideoIndex - 1));

				// Sidebar Nav Items Active State Toggle
				const navItems = document.querySelectorAll('.nav-item');
				navItems.forEach(item => {
					item.addEventListener('click', (e) => {
						e.preventDefault();
						navItems.forEach(i => i.classList.remove('active'));
						item.classList.add('active');
					});
				});
			});
		</script>
	</body>
</html>