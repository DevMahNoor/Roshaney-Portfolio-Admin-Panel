<?php
session_start();
if(!isset ($_SESSION['user'])){
  header("Location: signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard — PortfolioOS</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="admin-layout">

  <!-- Sidebar -->
  <div id="sidebar-overlay"></div>
  <aside class="sidebar" id="sidebar">
    <div class="sidebar__logo">
      <div class="logo-icon">✦</div>
      <span>PortfolioOS</span>
    </div>
    <div class="sidebar__section">
      <div class="sidebar__section-title">Main</div>
      <a class="nav-item active" href="dashboard.php"><span class="icon">⬛</span> Dashboard</a>
      <a class="nav-item" href="projects.php"><span class="icon">🗂</span> Projects <span class="nav-badge">4</span></a>
      <a class="nav-item" href="experiences.php"><span class="icon">💼</span> Experiences</a>
      <a class="nav-item" href="skills.php"><span class="icon">⚡</span> Skills</a>
      <a class="nav-item" href="certifications.php"><span class="icon">🎓</span> Certifications</a>
    </div>
    <div class="sidebar__section">
      <div class="sidebar__section-title">Settings</div>
      <a class="nav-item" href="#"><span class="icon">⚙</span> Profile Settings</a>
      <a class="nav-item" href="signin.php" style="color:#ef4444"><span class="icon">🚪</span> Log Out</a>
    </div>
    <div class="sidebar__footer">
      <div class="sidebar-user">
        <div class="avatar">RM </div>
        <div class="sidebar-user__info">
          <div class="sidebar-user__name">Roshaney Masood</div>
          <div class="sidebar-user__role">Portfolio Admin</div>
        </div>
      </div>
    </div>
  </aside>

  <!-- Main -->
  <div class="main-content">
    <nav class="topnav">
      <button class="menu-toggle" id="menu-toggle">☰</button>
      <div class="topnav__title">Dashboard</div>
      <div class="topnav__search">
        <div class="input-wrap">
          <span class="icon">🔍</span>
          <input type="text" placeholder="Search…" style="padding-top:9px;padding-bottom:9px;font-size:.84rem;" />
        </div>
      </div>
      <div class="topnav__actions">
        <a class="icon-btn notif-dot" href="#" title="Notifications">🔔</a>
        <a class="icon-btn" href="#" title="Help">❓</a>
        <div class="avatar" style="cursor:pointer">RM</div>
      </div>
    </nav>

    <div class="page-body">
      <div class="page-header">
        <div>
          <h2>Good morning, Roshaney 👋</h2>
          <p>Here's what's happening with your portfolio today.</p>
        </div>
        <a href="projects.php " class="btn btn-primary"><span>＋</span> Add Project</a>
      </div>

      <!-- Stat cards -->
      <div class="cards-grid cards-grid--4 mb-4" style="margin-bottom:24px;">
        <div class="stat-card fade-up">
          <div class="stat-icon stat-icon--blue">🗂</div>
          <div class="stat-body">
            <div class="num">12</div>
            <div class="lbl">Total Projects</div>
            <div class="trend">↑ 2 this month</div>
          </div>
        </div>
        <div class="stat-card fade-up" style="animation-delay:.08s">
          <div class="stat-icon stat-icon--cyan">💼</div>
          <div class="stat-body">
            <div class="num">5</div>
            <div class="lbl">Work Experiences</div>
          </div>
        </div>
        <div class="stat-card fade-up" style="animation-delay:.16s">
          <div class="stat-icon stat-icon--green">⚡</div>
          <div class="stat-body">
            <div class="num">18</div>
            <div class="lbl">Skills Listed</div>
            <div class="trend">↑ 3 added</div>
          </div>
        </div>
        <div class="stat-card fade-up" style="animation-delay:.24s">
          <div class="stat-icon stat-icon--amber">🎓</div>
          <div class="stat-body">
            <div class="num">2</div>
            <div class="lbl">Degrees / Certs</div>
          </div>
        </div>
      </div>

      <div class="cards-grid cards-grid--2" style="gap:20px;">
        <!-- Recent Projects -->
        <div class="card fade-up">
          <div class="card__title"><span class="icon">🗂</span> Recent Projects</div>
          <div class="table-wrap">
            <table>
              <thead>
                <tr><th>Name</th><th>Tech</th><th>Status</th></tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="projects.html">E-Commerce App</a></td>
                  <td><span class="badge badge-blue">React</span></td>
                  <td><span class="badge badge-green">Live</span></td>
                </tr>
                <tr>
                  <td>AI Dashboard</td>
                  <td><span class="badge badge-blue">Next.js</span></td>
                  <td><span class="badge badge-amber">WIP</span></td>
                </tr>
                <tr>
                  <td>Portfolio v3</td>
                  <td><span class="badge badge-blue">Vue</span></td>
                  <td><span class="badge badge-green">Live</span></td>
                </tr>
                <tr>
                  <td>Blog CMS</td>
                  <td><span class="badge badge-blue">Django</span></td>
                  <td><span class="badge badge-red">Draft</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="mt-4"><a href="projects.html" class="btn btn-ghost btn-sm">View All Projects →</a></div>
        </div>

        <!-- Skills overview -->
        <div class="card fade-up" style="animation-delay:.1s">
          <div class="card__title"><span class="icon">⚡</span> Skills Overview</div>
          <div style="display:flex; flex-direction:column; gap:14px;">
            <div>
              <div class="flex items-center gap-2 mb-4" style="justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:.85rem;">JavaScript</span><span style="font-size:.8rem; color:var(--text-muted);">90%</span>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:90%"></div></div>
            </div>
            <div>
              <div class="flex items-center gap-2 mb-4" style="justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:.85rem;">React / Next.js</span><span style="font-size:.8rem; color:var(--text-muted);">85%</span>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:85%"></div></div>
            </div>
            <div>
              <div class="flex items-center gap-2 mb-4" style="justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:.85rem;">Python</span><span style="font-size:.8rem; color:var(--text-muted);">78%</span>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:78%"></div></div>
            </div>
            <div>
              <div class="flex items-center gap-2 mb-4" style="justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:.85rem;">UI / UX Design</span><span style="font-size:.8rem; color:var(--text-muted);">70%</span>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:70%"></div></div>
            </div>
            <div>
              <div class="flex items-center gap-2 mb-4" style="justify-content:space-between; margin-bottom:6px;">
                <span style="font-size:.85rem;">Node.js</span><span style="font-size:.8rem; color:var(--text-muted);">75%</span>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:75%"></div></div>
            </div>
          </div>
          <div class="mt-4"><a href="skills.php" class="btn btn-ghost btn-sm">Manage Skills →</a></div>
        </div>
      </div>

      <!-- Quick links -->
      <div class="card mt-6" style="margin-top:24px;">
        <div class="card__title"><span class="icon">⚡</span> Quick Actions</div>
        <div style="display:flex; flex-wrap:wrap; gap:12px;">
          <a href="projects.php" class="btn btn-ghost"><span>＋</span> New Project</a>
          <a href="experience.php" class="btn btn-ghost"><span>＋</span> Add Experience</a>
          <a href="skills.php" class="btn btn-ghost"><span>＋</span> Add Skill</a>
          <a href="education.php" class="btn btn-ghost"><span>＋</span> Add Certification</a>
          <a href="#" class="btn btn-ghost"><span>📤</span> Export Portfolio</a>
        </div>
      </div>
    </div>

    <footer>
      <span>© 2025 PortfolioOS · Built with ❤ for your career</span>
      <span>Version 1.0.0 · <a href="#">Documentation</a> · <a href="#">Support</a></span>
    </footer>
  </div><!-- /main-content -->

</div>
<script src="js/main.js"></script>
</body>
</html>


