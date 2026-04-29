<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Projects — PortfolioOS</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="admin-layout">

  <div id="sidebar-overlay"></div>
  <aside class="sidebar" id="sidebar">
    <div class="sidebar__logo"><div class="logo-icon">✦</div><span>PortfolioOS</span></div>
    <div class="sidebar__section">
      <div class="sidebar__section-title">Main</div>
      <a class="nav-item" href="dashboard.php"><span class="icon">⬛</span> Dashboard</a>
      <a class="nav-item active" href="projects.php"><span class="icon">🗂</span> Projects <span class="nav-badge">4</span></a>
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
        <div class="avatar">RM</div>
        <div class="sidebar-user__info">
          <div class="sidebar-user__name">Roshaney Masood</div>
          <div class="sidebar-user__role">Portfolio Admin</div>
        </div>
      </div>
    </div>
  </aside>

  <div class="main-content">
    <nav class="topnav">
      <button class="menu-toggle" id="menu-toggle">☰</button>
      <div class="topnav__title">Projects</div>
      <div class="topnav__search">
        <div class="input-wrap">
          <span class="icon">🔍</span>
          <input type="text" placeholder="Search projects…" style="padding-top:9px;padding-bottom:9px;font-size:.84rem;" />
        </div>
      </div>
      <div class="topnav__actions">
        <a class="icon-btn notif-dot" href="#">🔔</a>
        <div class="avatar" style="cursor:pointer">RM</div>
      </div>
    </nav>

    <div class="page-body">
      <div class="page-header">
        <div><h2>Projects</h2><p>Add and manage your portfolio projects.</p></div>
      </div>
      <div style = "text-align: right ; margin-bottom: 20px;">
        <button class= "btn btn-primary" >+ Add Project</button>
      </div> 

      <div class="cards-grid cards-grid--1" style="align-items:start;">


        <!-- Project List -->
        <div class="card fade-up" style="animation-delay:.1s">
          <div class="card__title"><span class="icon">📋</span> Existing Projects</div>

          <div class="tabs">
            <button class="tab active">All</button>
            <button class="tab">Live</button>
            <button class="tab">WIP</button>
            <button class="tab">Draft</button>
          </div>

          <div style="display:flex; flex-direction:column; gap:14px;">

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:8px;">
                <strong style="font-size:.92rem;">E-Commerce Platform</strong>
                <span class="badge badge-green">Live</span>
              </div>
              <p style="font-size:.8rem; color:var(--text-muted); margin-bottom:10px;">A full-stack marketplace built with React and Node.js.</p>
              <div class="tags-wrap" style="margin-bottom:10px;">
                <span class="tag">React</span><span class="tag">Node.js</span><span class="tag">Stripe</span>
              </div>
              <div style="display:flex; gap:8px;">
                <button class="btn btn-ghost btn-sm">✏ Edit</button>
                <button class="btn btn-sm" style="background:rgba(239,68,68,.12); color:#fca5a5; border:none;">🗑 Delete</button>
              </div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:8px;">
                <strong style="font-size:.92rem;">AI Dashboard</strong>
                <span class="badge badge-amber">WIP</span>
              </div>
              <p style="font-size:.8rem; color:var(--text-muted); margin-bottom:10px;">Analytics dashboard powered by OpenAI and Next.js.</p>
              <div class="tags-wrap" style="margin-bottom:10px;">
                <span class="tag">Next.js</span><span class="tag">OpenAI</span>
              </div>
              <div style="display:flex; gap:8px;">
                <button class="btn btn-ghost btn-sm">✏ Edit</button>
                <button class="btn btn-sm" style="background:rgba(239,68,68,.12); color:#fca5a5; border:none;">🗑 Delete</button>
              </div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:8px;">
                <strong style="font-size:.92rem;">Portfolio v3</strong>
                <span class="badge badge-green">Live</span>
              </div>
              <p style="font-size:.8rem; color:var(--text-muted); margin-bottom:10px;">Personal portfolio site with dark theme and animations.</p>
              <div class="tags-wrap" style="margin-bottom:10px;">
                <span class="tag">Vue</span><span class="tag">GSAP</span>
              </div>
              <div style="display:flex; gap:8px;">
                <button class="btn btn-ghost btn-sm">✏ Edit</button>
                <button class="btn btn-sm" style="background:rgba(239,68,68,.12); color:#fca5a5; border:none;">🗑 Delete</button>
              </div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:8px;">
                <strong style="font-size:.92rem;">Blog CMS</strong>
                <span class="badge badge-red">Draft</span>
              </div>
              <p style="font-size:.8rem; color:var(--text-muted); margin-bottom:10px;">Headless CMS for publishing technical articles.</p>
              <div class="tags-wrap" style="margin-bottom:10px;">
                <span class="tag">Django</span><span class="tag">PostgreSQL</span>
              </div>
              <div style="display:flex; gap:8px;">
                <button class="btn btn-ghost btn-sm">✏ Edit</button>
                <button class="btn btn-sm" style="background:rgba(239,68,68,.12); color:#fca5a5; border:none;">🗑 Delete</button>
              </div>
            </div>

          </div>
        </div>

      </div>
    </div>

    <footer>
      <span>© 2025 PortfolioOS · Built with ❤ for your career</span>
      <span>Version 1.0.0 · <a href="#">Documentation</a></span>
    </footer>
  </div>
</div>
<script src="js/main.js"></script>
</body>
</html>
