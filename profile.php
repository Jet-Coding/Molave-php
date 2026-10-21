<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jet (@cuyajet) | TikTok</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts: Proxima Nova fallback / Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  
  <style>
    :root {
      --bg-main: #0f0f0f;
      --bg-card: #1e1e1e;
      --bg-hover: #2a2a2a;
      --text-primary: #ffffff;
      --text-secondary: rgba(255, 255, 255, 0.75);
      --text-muted: rgba(255, 255, 255, 0.5);
      --border-color: rgba(255, 255, 255, 0.12);
      --tiktok-red: #fe2c55;
      --tiktok-pink: #ff3b5c;
      --tiktok-blue: #25f4ee;
      --radius-sm: 4px;
      --radius-md: 8px;
      --radius-lg: 12px;
      --radius-full: 9999px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: var(--bg-main);
      color: var(--text-primary);
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      overflow-x: hidden;
      -webkit-font-smoothing: antialiased;
    }

    /* Outer Wrapper to constrain max desktop width matching screenshot ratio */
    .app-wrapper {
      width: 100%;
      max-width: 1120px;
      padding: 16px 24px 60px 24px;
      position: relative;
    }

    /* 1. Top Utility Header (Floating Right Pills) */
    .top-header {
      display: flex;
      justify-content: flex-end;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }

    .utility-pills-wrap {
      display: inline-flex;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.08);
      border-radius: var(--radius-full);
      padding: 4px 6px;
      gap: 4px;
    }

    .utility-btn {
      background: transparent;
      border: none;
      color: var(--text-primary);
      width: 32px;
      height: 32px;
      border-radius: var(--radius-full);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      font-size: 0.95rem;
      transition: background 0.2s ease, transform 0.1s ease;
    }

    .utility-btn:hover {
      background-color: rgba(255, 255, 255, 0.15);
    }

    /* 2. Profile Header Layout */
    .profile-header-container {
      display: flex;
      gap: 24px;
      margin-bottom: 28px;
      align-items: flex-start;
    }

    /* Avatar */
    .profile-avatar-wrap {
      position: relative;
      flex-shrink: 0;
    }

    .profile-avatar {
      width: 116px;
      height: 116px;
      border-radius: var(--radius-full);
      object-fit: cover;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
    }

    /* Profile Info Details */
    .profile-info {
      display: flex;
      flex-direction: column;
      gap: 12px;
      flex-grow: 1;
    }

    .user-names-row {
      display: flex;
      align-items: baseline;
      gap: 8px;
    }

    .display-name {
      font-size: 1.75rem;
      font-weight: 800;
      letter-spacing: -0.02em;
      line-height: 1.1;
    }

    .user-handle {
      font-size: 1.05rem;
      font-weight: 500;
      color: var(--text-secondary);
    }

    /* Stats Counter Row */
    .stats-row {
      display: flex;
      align-items: center;
      gap: 20px;
      font-size: 0.95rem;
    }

    .stat-item {
      display: flex;
      align-items: center;
      gap: 6px;
      color: var(--text-secondary);
    }

    .stat-number {
      font-weight: 700;
      color: var(--text-primary);
    }

    /* Action Buttons Row */
    .actions-row {
      display: flex;
      align-items: center;
      gap: 10px;
      margin-top: 2px;
    }

    .btn-action {
      background-color: rgba(255, 255, 255, 0.12);
      color: var(--text-primary);
      border: none;
      padding: 7px 18px;
      border-radius: var(--radius-sm);
      font-weight: 600;
      font-size: 0.92rem;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      transition: background 0.2s ease;
    }

    .btn-action:hover {
      background-color: rgba(255, 255, 255, 0.2);
    }

    .btn-icon-square {
      width: 36px;
      height: 34px;
      padding: 0;
      border-radius: var(--radius-sm);
    }

    /* External Discord Link */
    .bio-link-wrap {
      display: flex;
      align-items: center;
      gap: 6px;
      font-size: 0.9rem;
      margin-top: 2px;
    }

    .bio-link {
      color: var(--text-primary);
      text-decoration: none;
      font-weight: 600;
      display: inline-flex;
      align-items: center;
      gap: 6px;
    }

    .bio-link:hover {
      text-decoration: underline;
    }

    /* 3. Navigation Tabs and Filter Controls Bar */
    .tabs-controls-bar {
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 1px solid var(--border-color);
      margin-bottom: 16px;
      position: relative;
    }

    /* Primary Tabs Left */
    .primary-tabs {
      display: flex;
      align-items: center;
      gap: 32px;
      position: relative;
    }

    .tab-btn {
      background: none;
      border: none;
      color: var(--text-muted);
      font-size: 1.05rem;
      font-weight: 700;
      padding: 12px 0 14px 0;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 6px;
      position: relative;
      transition: color 0.2s ease;
    }

    .tab-btn:hover {
      color: var(--text-primary);
    }

    .tab-btn.active {
      color: var(--text-primary);
    }

    /* Active Underline Indicator */
    .tab-indicator {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 2px;
      background-color: var(--text-primary);
      transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1), width 0.25s ease;
    }

    /* Secondary Sort Filter Pills Right */
    .sort-filter-group {
      display: flex;
      align-items: center;
      background-color: rgba(255, 255, 255, 0.08);
      border-radius: var(--radius-sm);
      padding: 3px;
      gap: 2px;
    }

    .sort-btn {
      background: transparent;
      border: none;
      color: var(--text-muted);
      font-size: 0.8rem;
      font-weight: 600;
      padding: 5px 12px;
      border-radius: 3px;
      cursor: pointer;
      transition: all 0.2s ease;
    }

    .sort-btn:hover {
      color: var(--text-primary);
    }

    .sort-btn.active {
      background-color: rgba(255, 255, 255, 0.2);
      color: var(--text-primary);
    }

    /* 4. High Density Video Grid (6 Columns Layout) */
    .video-grid {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      gap: 8px;
      width: 100%;
    }

    /* Video Card Item */
    .video-card {
      position: relative;
      width: 100%;
      aspect-ratio: 3 / 4;
      background-color: var(--bg-card);
      border-radius: var(--radius-sm);
      overflow: hidden;
      cursor: pointer;
    }

    .video-thumbnail {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform 0.3s ease;
    }

    .video-card:hover .video-thumbnail {
      transform: scale(1.05);
    }

    /* Dark Overlay Gradient for Text Legibility */
    .card-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, transparent 40%, rgba(0,0,0,0.7) 100%);
      pointer-events: none;
    }

    /* Pinned Badge (Top Left Pink Pill) */
    .badge-pinned {
      position: absolute;
      top: 6px;
      left: 6px;
      background-color: var(--tiktok-pink);
      color: #ffffff;
      font-size: 0.68rem;
      font-weight: 700;
      padding: 2px 6px;
      border-radius: 3px;
      z-index: 2;
    }

    /* Carousel Multi-Photo Badge (Top Right) */
    .badge-carousel {
      position: absolute;
      top: 6px;
      right: 6px;
      color: rgba(255, 255, 255, 0.9);
      font-size: 0.75rem;
      z-index: 2;
      filter: drop-shadow(0 1px 2px rgba(0,0,0,0.6));
    }

    /* Bottom Overlay Stats (Play Count) */
    .card-bottom-info {
      position: absolute;
      bottom: 6px;
      left: 6px;
      right: 6px;
      display: flex;
      align-items: center;
      gap: 4px;
      color: #ffffff;
      font-size: 0.78rem;
      font-weight: 700;
      z-index: 2;
      text-shadow: 0 1px 2px rgba(0,0,0,0.8);
    }

    .play-icon {
      font-size: 0.7rem;
    }

    /* Hover Play Button Overlay */
    .hover-play-btn {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.2);
      opacity: 0;
      transition: opacity 0.2s ease;
      z-index: 3;
    }

    .hover-play-btn i {
      font-size: 1.8rem;
      color: #ffffff;
      filter: drop-shadow(0 2px 8px rgba(0,0,0,0.5));
    }

    .video-card:hover .hover-play-btn {
      opacity: 1;
    }

    /* Hidden State for Tabs */
    .tab-content {
      display: none;
    }

    .tab-content.active {
      display: block;
    }

    .empty-state {
      text-align: center;
      padding: 60px 20px;
      color: var(--text-muted);
    }

    .empty-state i {
      font-size: 3rem;
      margin-bottom: 12px;
      opacity: 0.5;
    }

    /* Responsive Breakpoints for Tablet & Mobile */
    @media (max-width: 960px) {
      .video-grid {
        grid-template-columns: repeat(4, 1fr);
      }
    }

    @media (max-width: 640px) {
      .app-wrapper {
        padding: 12px 16px;
      }
      .profile-header-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 16px;
      }
      .user-names-row {
        justify-content: center;
      }
      .stats-row {
        justify-content: center;
      }
      .actions-row {
        justify-content: center;
        width: 100%;
      }
      .btn-action {
        flex: 1;
      }
      .video-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 4px;
      }
      .primary-tabs {
        gap: 16px;
      }
      .tab-btn {
        font-size: 0.95rem;
      }
    }
  </style>
</head>
<body>

  <div class="app-wrapper">
    
    <!-- 1. TOP UTILITY BAR (Floating Top Right) -->
    <header class="top-header">
      <div class="utility-pills-wrap">
        <button class="utility-btn" title="Explore"><i class="fa-regular fa-compass"></i></button>
        <button class="utility-btn" title="QR Code / App"><i class="fa-solid fa-mobile-screen"></i></button>
        <button class="utility-btn" title="Settings"><i class="fa-solid fa-gear"></i></button>
      </div>
    </header>

    <!-- 2. PROFILE HEADER SECTION -->
    <section class="profile-header-container">
      <div class="profile-avatar-wrap">
        <img src="https://picsum.photos/seed/cuyajet-user/200/200" alt="Jet Avatar" class="profile-avatar">
      </div>

      <div class="profile-info">
        <!-- Names Header -->
        <div class="user-names-row">
          <h1 class="display-name">Jet</h1>
          <span class="user-handle">cuyajet</span>
        </div>

        <!-- Stats Counter -->
        <div class="stats-row">
          <div class="stat-item"><span class="stat-number">12</span> Following</div>
          <div class="stat-item"><span class="stat-number">764</span> Followers</div>
          <div class="stat-item"><span class="stat-number">9576</span> Likes</div>
        </div>

        <!-- Action Buttons -->
        <div class="actions-row">
          <button class="btn-action">Edit profile</button>
          <button class="btn-action">Promote post</button>
          <button class="btn-action btn-icon-square" title="Settings"><i class="fa-solid fa-gear"></i></button>
          <button class="btn-action btn-icon-square" title="Share"><i class="fa-solid fa-share"></i></button>
        </div>

        <!-- External Link -->
        <div class="bio-link-wrap">
          <a href="https://discord.gg/vTqASzECp" target="_blank" class="bio-link">
            <i class="fa-solid fa-link" style="font-size: 0.8rem; color: var(--text-muted);"></i>
            https://discord.gg/vTqASzECp
          </a>
        </div>
      </div>
    </section>

    <!-- 3. NAVIGATION TABS & FILTER CONTROLS BAR -->
    <div class="tabs-controls-bar">
      <!-- Main Tabs -->
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

        <!-- Dynamic Animated Tab Underline Indicator -->
        <div class="tab-indicator" id="tabIndicator"></div>
      </nav>

      <!-- Secondary Sort Filter (Right) -->
      <div class="sort-filter-group" id="sortFilterGroup">
        <button class="sort-btn active" data-sort="latest">Latest</button>
        <button class="sort-btn" data-sort="popular">Popular</button>
        <button class="sort-btn" data-sort="oldest">Oldest</button>
      </div>
    </div>

    <!-- 4. TAB CONTENTS & VIDEO GRID -->

    <!-- Videos Tab (Active by default) -->
    <main class="tab-content active" id="tab-videos">
      <div class="video-grid" id="videoGrid">
        <!-- JS dynamically populates items matching screenshot data -->
      </div>
    </main>

    <!-- Reposts Tab -->
    <section class="tab-content" id="tab-reposts">
      <div class="empty-state">
        <i class="fa-solid fa-arrows-rotate"></i>
        <p>No reposts yet</p>
      </div>
    </section>

    <!-- Favorites Tab -->
    <section class="tab-content" id="tab-favorites">
      <div class="empty-state">
        <i class="fa-regular fa-bookmark"></i>
        <p>Your favorite videos are private</p>
      </div>
    </section>

    <!-- Liked Tab -->
    <section class="tab-content" id="tab-liked">
      <div class="empty-state">
        <i class="fa-solid fa-lock"></i>
        <p>This user's liked videos are private</p>
      </div>
    </section>

  </div>

  <!-- JAVASCRIPT LOGIC -->
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
        card.className = 'video-card';

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