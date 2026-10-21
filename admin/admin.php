<!doctype html>
<html lang="en">
  <?php require_once dirname(__DIR__) . '/includes/adminHead.php'; ?>
  <body>
    <div class="overlay" id="overlay"></div>
    <div class="app">
      <?php require_once dirname(__DIR__) . '/includes/adminSidebar.php'; ?>
      <main class="main">
        <header class="topbar">
          <div class="top-left">
            <button
              class="menu-toggle"
              id="menuToggle"
              aria-label="Open navigation"
            >
            <span class="material-icons-sharp"> menu </span>
            </button>
            <div>
              <div class="page-title" id="currentTitle">Overview</div>
              <div class="breadcrumb">
                Workspace / <span id="crumb">Overview</span>
              </div>
            </div>
          </div>
          <div class="actions">
            <label class="search"
              ><span>⌕</span
              ><input
                id="search"
                type="search"
                placeholder="Search orders..." /></label
            ><button
              class="icon-btn"
              id="notifications"
              aria-label="Notifications"
            >
              <span class="material-icons-sharp">notifications</span><i class="dot"></i>
            </button>
            <div class="profile">
              <div class="avatar">JS</div>
              <div class="profile-info">
                <strong>Jet_Syndol</strong><small>Administrator</small>
              </div>
            </div>
          </div>
        </header>
        <section class="content">
          <div class="welcome">
            <div>
              <h1>Good morning, Jet</h1>
              <p>Here's what's happening with your app today.</p>
            </div>
            <div class="date"><span id="today">Today</span></div>
          </div>
          <div class="stats">
            <article class="stat">
              <div class="stat-top">
                <span class="label">Total Revenue</span
                ><span class="stat-icon blue">↗</span>
              </div>
              <div class="value">$48,294</div>
              <div class="foot">
                <span class="trend">↗ 12.8%</span><span>vs. last month</span>
              </div>
            </article>
            <article class="stat">
              <div class="stat-top">
                <span class="label">Total Orders</span
                ><span class="stat-icon orange">▤</span>
              </div>
              <div class="value">2,840</div>
              <div class="foot">
                <span class="trend">↗ 8.2%</span><span>vs. last month</span>
              </div>
            </article>
            <article class="stat">
              <div class="stat-top">
                <span class="label">New Customers</span
                ><span class="stat-icon green">♙</span>
              </div>
              <div class="value">1,246</div>
              <div class="foot">
                <span class="trend">↗ 18.4%</span><span>vs. last month</span>
              </div>
            </article>
            <article class="stat">
              <div class="stat-top">
                <span class="label">Refund Rate</span
                ><span class="stat-icon purple">↩</span>
              </div>
              <div class="value">1.24%</div>
              <div class="foot">
                <span class="trend down">↘ 0.4%</span
                ><span>vs. last month</span>
              </div>
            </article>
          </div>
          <div class="grid">
            <section class="panel">
              <div class="panel-head">
                <div>
                  <h2>Revenue Overview</h2>
                  <div class="sub">
                    Track your revenue performance over time
                  </div>
                </div>
                <select id="period" aria-label="Revenue period">
                  <option value="week">This week</option>
                  <option value="month" selected>This month</option>
                  <option value="year">This year</option>
                </select>
              </div>
              <div class="revenue" id="revenue">
                $48,294 <span>↗ 12.8%</span>
              </div>
              <div class="legend">
                <span><i style="background: #3467eb"></i>Revenue</span
                ><span><i style="background: #ffb36e"></i>Previous period</span>
              </div>
              <div class="chart">
                <svg
                  viewBox="0 0 600 230"
                  role="img"
                  aria-label="Revenue line chart"
                >
                  <defs>
                    <linearGradient id="fill" x1="0" y1="0" x2="0" y2="1">
                      <stop
                        offset="0%"
                        stop-color="#3467eb"
                        stop-opacity=".19"
                      />
                      <stop
                        offset="100%"
                        stop-color="#3467eb"
                        stop-opacity="0"
                      />
                    </linearGradient>
                  </defs>
                  <g>
                    <line class="gridline" x1="42" y1="25" x2="585" y2="25" />
                    <line class="gridline" x1="42" y1="70" x2="585" y2="70" />
                    <line class="gridline" x1="42" y1="115" x2="585" y2="115" />
                    <line class="gridline" x1="42" y1="160" x2="585" y2="160" />
                    <line class="gridline" x1="42" y1="205" x2="585" y2="205" />
                    <text class="chart-label" x="3" y="29">$12k</text>
                    <text class="chart-label" x="3" y="74">$9k</text>
                    <text class="chart-label" x="3" y="119">$6k</text>
                    <text class="chart-label" x="3" y="164">$3k</text>
                    <text class="chart-label" x="13" y="209">$0</text>
                    <path
                      class="area"
                      id="area"
                      d="M42 164 L87 143 L132 151 L177 112 L222 125 L267 87 L312 99 L357 68 L402 83 L447 47 L492 60 L537 30 L537 205 L42 205 Z"
                    />
                    <path
                      class="line"
                      id="line"
                      d="M42 164 L87 143 L132 151 L177 112 L222 125 L267 87 L312 99 L357 68 L402 83 L447 47 L492 60 L537 30"
                    />
                    <circle class="point" cx="537" cy="30" r="5" />
                    <text class="chart-label" x="42" y="225">1</text>
                    <text class="chart-label" x="132" y="225">5</text>
                    <text class="chart-label" x="222" y="225">10</text>
                    <text class="chart-label" x="312" y="225">15</text>
                    <text class="chart-label" x="402" y="225">20</text>
                    <text class="chart-label" x="492" y="225">25</text>
                    <text class="chart-label" x="530" y="225">30</text>
                  </g>
                </svg>
              </div>
            </section>
            <section class="panel">
              <div class="panel-head">
                <div>
                  <h2>Sales by Category</h2>
                  <div class="sub">Where your sales are coming from</div>
                </div>
                <button class="view" id="details">Details ↗</button>
              </div>
              <div class="donut-wrap">
                <svg
                  class="donut"
                  viewBox="0 0 160 160"
                  role="img"
                  aria-label="Sales category donut chart"
                >
                  <circle
                    cx="80"
                    cy="80"
                    r="58"
                    fill="none"
                    stroke="#eef1f7"
                    stroke-width="18"
                  />
                  <circle
                    cx="80"
                    cy="80"
                    r="58"
                    fill="none"
                    stroke="#3467eb"
                    stroke-width="18"
                    stroke-dasharray="174 365"
                    transform="rotate(-90 80 80)"
                  />
                  <circle
                    cx="80"
                    cy="80"
                    r="58"
                    fill="none"
                    stroke="#ff8a3d"
                    stroke-width="18"
                    stroke-dasharray="102 365"
                    stroke-dashoffset="-181"
                    transform="rotate(-90 80 80)"
                  />
                  <circle
                    cx="80"
                    cy="80"
                    r="58"
                    fill="none"
                    stroke="#8d72ec"
                    stroke-width="18"
                    stroke-dasharray="58 365"
                    stroke-dashoffset="-290"
                    transform="rotate(-90 80 80)"
                  />
                  <text
                    x="80"
                    y="76"
                    text-anchor="middle"
                    font-size="10"
                    fill="#8b96aa"
                  >
                    Total sales
                  </text>
                  <text
                    x="80"
                    y="96"
                    text-anchor="middle"
                    font-size="19"
                    font-weight="800"
                    fill="#17233c"
                  >
                    $48.3k
                  </text>
                </svg>
                <div class="legend-list">
                  <div class="legend-item">
                    <i style="background: #3467eb"></i>
                    <div><strong>47.6%</strong><span>Electronics</span></div>
                  </div>
                  <div class="legend-item">
                    <i style="background: #ff8a3d"></i>
                    <div><strong>28.1%</strong><span>Fashion</span></div>
                  </div>
                  <div class="legend-item">
                    <i style="background: #8d72ec"></i>
                    <div><strong>16.4%</strong><span>Home & Living</span></div>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <section class="panel table-panel">
            <div class="panel-head">
              <div>
                <h2>Recent Users</h2>
                <div class="sub">A quick look at your latest users</div>
              </div>
              <button class="view" id="viewAll">View all Users →</button>
            </div>
            <div class="table-wrap">
              <table id="orders">
                <thead>
                  <tr>
                    <th>ACCOUNT</th>
                    <th>DATE</th>
                    <th>ROLE</th>
                    <th>STATUS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="customer">
                        <div class="customer-avatar">EW</div>
                        <div>Emma Wilson<small>emma.w@example.com</small></div>
                      </div>
                    </td>
                    <td>Oct 13, 2026</td>
                    <td>$248.00</td>
                    <td><span class="status paid">Paid</span></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="customer">
                        <div
                          class="customer-avatar"
                          style="background: #fff0e5; color: #c86b2e"
                        >
                          LJ
                        </div>
                        <div>Liam Johnson<small>liam.j@example.com</small></div>
                      </div>
                    </td>
                    <td>Oct 13, 2026</td>
                    <td>$129.50</td>
                    <td><span class="status pending">Pending</span></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="customer">
                        <div
                          class="customer-avatar"
                          style="background: #e9f8f1; color: #168a63"
                        >
                          SM
                        </div>
                        <div>
                          Sophia Martinez<small>sophia.m@example.com</small>
                        </div>
                      </div>
                    </td>
                    <td>Oct 12, 2026</td>
                    <td>$560.00</td>
                    <td><span class="status paid">Paid</span></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="customer">
                        <div class="customer-avatar" style="background: #f0eaff; color: #8058d8">
                          NB
                        </div>
                        <div>Noah Brown<small>noah.b@example.com</small></div>
                      </div>
                    </td>
                    <td>Oct 12, 2026</td>
                    <td>$74.99</td>
                    <td><span class="status cancelled">Cancelled</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </section>
      </main>
    </div>
    <div class="toast" id="toast" role="status" aria-live="polite"></div>
    <script>
      const toast = document.getElementById("toast");
      let toastTimer;
      function notify(text) {
        toast.textContent = text;
        toast.classList.add("show");
        clearTimeout(toastTimer);
        toastTimer = setTimeout(() => toast.classList.remove("show"), 2500);
      }
      document.querySelectorAll(".nav button").forEach((btn) =>
        btn.addEventListener("click", () => {
          document
            .querySelectorAll(".nav button")
            .forEach((b) => b.classList.remove("active"));
          btn.classList.add("active");
          document.getElementById("currentTitle").textContent =
            btn.dataset.page;
          document.getElementById("crumb").textContent = btn.dataset.page;
          if (btn.dataset.page !== "Overview")
            notify(btn.dataset.page + " selected — demo navigation");
          document.body.classList.remove("menu-open");
        }),
      );
      document
        .getElementById("menuToggle")
        .addEventListener("click", () =>
          document.body.classList.toggle("menu-open"),
        );
      document
        .getElementById("overlay")
        .addEventListener("click", () =>
          document.body.classList.remove("menu-open"),
        );
      document
        .getElementById("notifications")
        .addEventListener("click", () => notify("You're all caught up!"));
      document
        .getElementById("helpBtn")
        .addEventListener("click", () =>
          notify("Help center opened in demo mode."),
        );
      document
        .getElementById("details")
        .addEventListener("click", () =>
          notify("Category report — demo data."),
        );
      document
        .getElementById("viewAll")
        .addEventListener("click", () =>
          notify("Showing the latest 4 demo orders."),
        );
      document.getElementById("search").addEventListener("input", (e) => {
        const q = e.target.value.toLowerCase().trim();
        let n = 0;
        document.querySelectorAll("#orders tbody tr").forEach((r) => {
          const match = r.textContent.toLowerCase().includes(q);
          r.style.display = match ? "" : "none";
          if (match) n++;
        });
        if (q && !n) notify("No matching orders found.");
      });
      const data = {
        week: {
          total: "$11,840",
          line: "M42 155 L125 115 L208 135 L291 75 L374 95 L457 48 L537 32",
          area: "M42 155 L125 115 L208 135 L291 75 L374 95 L457 48 L537 32 L537 205 L42 205 Z",
        },
        month: {
          total: "$48,294",
          line: "M42 164 L87 143 L132 151 L177 112 L222 125 L267 87 L312 99 L357 68 L402 83 L447 47 L492 60 L537 30",
          area: "M42 164 L87 143 L132 151 L177 112 L222 125 L267 87 L312 99 L357 68 L402 83 L447 47 L492 60 L537 30 L537 205 L42 205 Z",
        },
        year: {
          total: "$524,680",
          line: "M42 174 L87 159 L132 141 L177 150 L222 105 L267 117 L312 85 L357 91 L402 60 L447 70 L492 43 L537 25",
          area: "M42 174 L87 159 L132 141 L177 150 L222 105 L267 117 L312 85 L357 91 L402 60 L447 70 L492 43 L537 25 L537 205 L42 205 Z",
        },
      };
      document.getElementById("period").addEventListener("change", (e) => {
        const d = data[e.target.value];
        document.getElementById("revenue").innerHTML =
          d.total + " <span>↗ 12.8%</span>";
        document.getElementById("line").setAttribute("d", d.line);
        document.getElementById("area").setAttribute("d", d.area);
      });
      document.getElementById("today").textContent =
        new Date().toLocaleDateString("en-US", {
          weekday: "long",
          month: "long",
          day: "numeric",
          year: "numeric",
        });
    </script>
  </body>
</html>
