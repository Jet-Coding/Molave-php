<?php 
  session_start();

  // Retrieve user name or fallback
  $name = $_SESSION['name'] ?? null;

  // Page-specific variable
  $page_title = "Profile | Molave";

?>
<!DOCTYPE html>
<html lang="en">
<?php require_once __DIR__ . '/includes/clientHead.php'; ?>
<body>
  <!-- Main Layout Container -->
  <div class="app-container">
    <?php require_once __DIR__ . '/includes/clientSidebar.php'; ?>
    <div class="app-wrapper">
      
      <!-- Top Utility Header -->
      <header class="top-header">
        <div class="utility-pills-wrap">
          <button class="utility-btn" title="Explore"><i class="fa-regular fa-compass"></i></button>
          <button class="utility-btn" title="QR Code / App"><i class="fa-solid fa-mobile-screen"></i></button>
          <button class="utility-btn" title="Settings"><i class="fa-solid fa-gear"></i></button>
        </div>
      </header>

      <!-- Profile Header Section -->
      <section class="profile-header-container">
        <div class="profile-avatar-wrap">
          <img src="https://picsum.photos/seed/cuyajet-user/200/200" alt="Avatar" class="profile-avatar">
        </div>

        <div class="profile-info">
          <div class="user-names-row">
            <h1 class="display-name"><?= htmlspecialchars($name ?? 'Jet'); ?></h1>
            <span class="user-handle">@<?= htmlspecialchars(strtolower(str_replace(' ', '', $name ?? 'cuyajet'))); ?></span>
          </div>

          <div class="stats-row">
            <div class="stat-item"><span class="stat-number">12</span> Following</div>
            <div class="stat-item"><span class="stat-number">764</span> Followers</div>
            <div class="stat-item"><span class="stat-number">9576</span> Likes</div>
          </div>

          <div class="actions-row">
            <button class="btn-action">Edit profile</button>
            <button class="btn-action">Promote post</button>
            <button class="btn-action btn-icon-square" title="Settings"><i class="fa-solid fa-gear"></i></button>
            <button class="btn-action btn-icon-square" title="Share"><i class="fa-solid fa-share"></i></button>
          </div>

          <div class="bio-link-wrap">
            <a href="https://discord.gg/vTqASzECp" target="_blank" class="bio-link">
              <i class="fa-solid fa-link" style="font-size: 0.8rem; color: var(--text-muted);"></i>
              https://discord.gg/vTqASzECp
            </a>
          </div>
        </div>
      </section>

      <!-- Navigation Tabs & Content Grid -->
      <div class="tabs-controls-bar">
        <nav class="primary-tabs">
          <button class="tab-btn active" data-tab="videos">
            <i class="fa-solid fa-bars-staggered" style="font-size: 0.9rem;"></i> Videos
          </button>
          <button class="tab-btn" data-tab="reposts">
            <i class="fa-solid fa-arrows-rotate" style="font-size: 0.9rem;"></i> Reposts
          </button>
          <button class="tab-btn" data-tab="favorites">
            <i class="fa-regular fa-bookmark" style="font-size: 0.9rem;"></i> Favorites
          </button>
          <button class="tab-btn" data-tab="liked">
            <i class="fa-solid fa-lock" style="font-size: 0.8rem;"></i> Liked
          </button>
          <div class="tab-indicator" id="tabIndicator"></div>
        </nav>

        <div class="sort-filter-group" id="sortFilterGroup">
          <button class="sort-btn active" data-sort="latest">Latest</button>
          <button class="sort-btn" data-sort="popular">Popular</button>
          <button class="sort-btn" data-sort="oldest">Oldest</button>
        </div>
      </div>

      <main class="tab-content active" id="tab-videos">
        <div class="video-grid" id="videoGrid"></div>
      </main>

      <section class="tab-content" id="tab-reposts">
        <div class="empty-state">
          <i class="fa-solid fa-arrows-rotate"></i>
          <p>No reposts yet</p>
        </div>
      </section>

      <section class="tab-content" id="tab-favorites">
        <div class="empty-state">
          <i class="fa-regular fa-bookmark"></i>
          <p>Your favorite videos are private</p>
        </div>
      </section>

      <section class="tab-content" id="tab-liked">
        <div class="empty-state">
          <i class="fa-solid fa-lock"></i>
          <p>This user's liked videos are private</p>
        </div>
      </section>

    </div>
  </div>
  <!-- JAVASCRIPT LOGIC -->
  <script src="public/js/script.js"></script>
  <script>
    // Data mockup corresponding exactly to Jet's TikTok video grid from screenshot
    const videoData = [
      { id: 1, views: "61.2K", isPinned: true, isCarousel: true, seed: "john5" },
      { id: 2, views: "1583", isPinned: true, isCarousel: false, seed: "skyline" },
      { id: 3, views: "247", isPinned: false, isCarousel: true, seed: "coldtext" },
      { id: 4, views: "123", isPinned: false, isCarousel: true, seed: "tabledinner" },
      { id: 5, views: "151", isPinned: false, isCarousel: true, seed: "bluegod" },
      { id: 6, views: "190", isPinned: false, isCarousel: true, seed: "thankful" },

      { id: 7, views: "36", isPinned: false, isCarousel: true, seed: "stronghope" },
      { id: 8, views: "205", isPinned: false, isCarousel: true, seed: "believemessiah" },
      { id: 9, views: "40", isPinned: false, isCarousel: true, seed: "sandwood" },
      { id: 10, views: "107", isPinned: false, isCarousel: true, seed: "openbible" },
      { id: 11, views: "184", isPinned: false, isCarousel: true, seed: "lakeview" },
      { id: 12, views: "229", isPinned: false, isCarousel: true, seed: "codingsymbols" },

      { id: 13, views: "202", isPinned: false, isCarousel: true, seed: "heartquote" },
      { id: 14, views: "110", isPinned: false, isCarousel: true, seed: "houseonrock" },
      { id: 15, views: "128", isPinned: false, isCarousel: false, seed: "manarch" },
      { id: 16, views: "203", isPinned: false, isCarousel: true, seed: "eyesongod" },
      { id: 17, views: "172", isPinned: false, isCarousel: true, seed: "communityappeal" },
      { id: 18, views: "31", isPinned: false, isCarousel: false, seed: "onthisdayguy" },

      { id: 19, views: "97", isPinned: false, isCarousel: true, seed: "blessings" },
      { id: 20, views: "60", isPinned: false, isCarousel: true, seed: "cityrain" },
      { id: 21, views: "195", isPinned: false, isCarousel: true, seed: "unfailinglove" },
      { id: 22, views: "214", isPinned: false, isCarousel: true, seed: "hillcross" },
      { id: 23, views: "200", isPinned: false, isCarousel: true, seed: "blueverse" },
      { id: 24, views: "196", isPinned: false, isCarousel: true, seed: "romansverse" },

      { id: 25, views: "82", isPinned: false, isCarousel: false, seed: "birdyellow" },
      { id: 26, views: "207", isPinned: false, isCarousel: true, seed: "openscripture" },
      { id: 27, views: "85", isPinned: false, isCarousel: true, seed: "matchadrink" },
      { id: 28, views: "210", isPinned: false, isCarousel: true, seed: "lordlooks" },
      { id: 29, views: "207", isPinned: false, isCarousel: true, seed: "orphans" },
      { id: 30, views: "82", isPinned: false, isCarousel: false, seed: "manpark" },

      { id: 31, views: "200", isPinned: false, isCarousel: true, seed: "darkverse" },
      { id: 32, views: "17", isPinned: false, isCarousel: false, seed: "sitpark" },
      { id: 33, views: "199", isPinned: false, isCarousel: true, seed: "greenfoliage" },
      { id: 34, views: "72", isPinned: false, isCarousel: true, seed: "blackscreen" },
      { id: 35, views: "184", isPinned: false, isCarousel: true, seed: "groupfriends" },
      { id: 36, views: "13", isPinned: false, isCarousel: true, seed: "goldenglow" },

      { id: 37, views: "28", isPinned: false, isCarousel: true, seed: "augustcollage" },
      { id: 38, views: "37", isPinned: false, isCarousel: true, seed: "abstractlight" },
      { id: 39, views: "15", isPinned: false, isCarousel: true, seed: "yellowsingers" },
      { id: 40, views: "26", isPinned: false, isCarousel: true, seed: "choirperform" },
      { id: 41, views: "90", isPinned: false, isCarousel: true, seed: "crowdchurch" },
      { id: 42, views: "6", isPinned: false, isCarousel: true, seed: "speakerroom" },

      { id: 43, views: "31", isPinned: false, isCarousel: true, seed: "womanstage" },
      { id: 44, views: "173", isPinned: false, isCarousel: true, seed: "manreading" },
      { id: 45, views: "23", isPinned: false, isCarousel: false, seed: "mangreenpath" },
      { id: 46, views: "196", isPinned: false, isCarousel: true, seed: "distresslord" },
      { id: 47, views: "187", isPinned: false, isCarousel: true, seed: "darktext" },
      { id: 48, views: "110", isPinned: false, isCarousel: true, seed: "thanksgod" }
    ];

    // Render Grid Cards
    function renderVideoGrid(items) {
      const gridContainer = document.getElementById('videoGrid');
      gridContainer.innerHTML = '';

      items.forEach(item => {
        const card = document.createElement('article');
        card.className = 'video-cards';

        // High quality varied stock placeholders
        const imgUrl = `https://picsum.photos/seed/${item.seed}/300/400`;

        card.innerHTML = `
          <img class="video-thumbnail" src="${imgUrl}" alt="TikTok Video Thumbnail" loading="lazy">
          <div class="card-overlay"></div>
          
          ${item.isPinned ? `<span class="badge-pinned">Pinned</span>` : ''}
          ${item.isCarousel ? `<span class="badge-carousel"><i class="fa-regular fa-clone"></i></span>` : ''}
          
          <div class="card-bottom-info">
            <i class="fa-regular fa-play play-icon"></i>
            <span>${item.views}</span>
          </div>

          <div class="hover-play-btn">
            <i class="fa-solid fa-play"></i>
          </div>
        `;

        gridContainer.appendChild(card);
      });
    }

    // Tab Switching Logic
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');
    const tabIndicator = document.getElementById('tabIndicator');
    const sortFilterGroup = document.getElementById('sortFilterGroup');

    function updateTabIndicator(activeBtn) {
      tabIndicator.style.width = `${activeBtn.offsetWidth}px`;
      tabIndicator.style.transform = `translateX(${activeBtn.offsetLeft}px)`;
    }

    tabButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const targetTab = btn.getAttribute('data-tab');

        // Update Tab Buttons UI
        tabButtons.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        // Update Tab Contents
        tabContents.forEach(content => {
          content.classList.remove('active');
          if (content.id === `tab-${targetTab}`) {
            content.classList.add('active');
          }
        });

        // Hide/Show Sort Filter when on Videos vs other tabs
        if (targetTab === 'videos') {
          sortFilterGroup.style.display = 'flex';
        } else {
          sortFilterGroup.style.display = 'none';
        }

        updateTabIndicator(btn);
      });
    });

    // Sort Pills Toggle Logic
    const sortButtons = document.querySelectorAll('.sort-btn');
    sortButtons.forEach(sortBtn => {
      sortBtn.addEventListener('click', () => {
        sortButtons.forEach(b => b.classList.remove('active'));
        sortBtn.classList.add('active');

        const sortType = sortBtn.getAttribute('data-sort');
        let sortedData = [...videoData];

        if (sortType === 'popular') {
          // Mock sort high views first
          sortedData.sort((a, b) => b.isPinned - a.isPinned || b.id - a.id);
        } else if (sortType === 'oldest') {
          sortedData.reverse();
        }

        renderVideoGrid(sortedData);
      });
    });

    // Initial Load Setup
    window.addEventListener('DOMContentLoaded', () => {
      renderVideoGrid(videoData);
      const activeTab = document.querySelector('.tab-btn.active');
      if (activeTab) {
        updateTabIndicator(activeTab);
      }
    });

    // Recalculate tab underline indicator on window resize
    window.addEventListener('resize', () => {
      const activeTab = document.querySelector('.tab-btn.active');
      if (activeTab) {
        updateTabIndicator(activeTab);
      }
    });
  </script>
</body>
</html>