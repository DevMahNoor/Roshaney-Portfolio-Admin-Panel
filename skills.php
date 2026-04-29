<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Skills — PortfolioOS</title>
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
      <a class="nav-item" href="projects.php"><span class="icon">🗂</span> Projects</a>
      <a class="nav-item" href="experiences.php"><span class="icon">💼</span> Experiences</a>
      <a class="nav-item active" href="skills.php"><span class="icon">⚡</span> Skills</a>
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
      <div class="topnav__title">Skills</div>
      <div class="topnav__search">
        <div class="input-wrap">
          <span class="icon">🔍</span>
          <input type="text" placeholder="Search skills…" style="padding-top:9px;padding-bottom:9px;font-size:.84rem;" />
        </div>
      </div>
      <div class="topnav__actions">
        <a class="icon-btn notif-dot" href="#">🔔</a>
        <div class="avatar" style="cursor:pointer">RM</div>
      </div>
    </nav>

    <div class="page-body">
      <div class="page-header">
        <div><h2>Skills</h2><p>Manage your technical and soft skills.</p></div>
      </div>
      <div style="text-align:right; margin-bottom:20px;">
        <button class="btn btn-primary">＋ Add Skill</button>
      </div>
      <div class="cards-grid cards-grid--1" style="align-items:start;">

        <!-- Skills Grid -->
        <div class="card fade-up" style="animation-delay:.1s;">
          <div class="card__title"><span class="icon">📋</span> Skill Library</div>

          <div class="tabs">
            <button class="tab active">All</button>
            <button class="tab">Frontend</button>
            <button class="tab">Backend</button>
            <button class="tab">Database</button>
            <button class="tab">Others</button>
          </div>

          <div style="display:flex; flex-direction:column; gap:10px;">
            <!-- Skill row -->
            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:12px 16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:6px;">
                <div style="display:flex; align-items:center; gap:8px;">
                  <span>⚛</span>
                  <strong style="font-size:.88rem;">HTML5 & CSS3</strong>
                  <span class="badge badge-blue">Frontend</span>
                </div>
                <div style="display:flex; align-items:center; gap:8px;">
                  <button class="btn btn-ghost btn-sm" style="padding:4px 8px;">✏Edit</button>
                  <button style="background:rgba(239,68,68,.12); color:#fca5a5; border:none; border-radius:6px; padding:4px 8px; cursor:pointer; font-size:.78rem;">🗑Delete</button>
                </div>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:90%"></div></div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:12px 16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:6px;">
                <div style="display:flex; align-items:center; gap:8px;">
                  <span>🐍</span>
                  <strong style="font-size:.88rem;">Python</strong>
                  <span class="badge badge-green">Backend</span>
                </div>
                <div style="display:flex; align-items:center; gap:8px;">
                  <button class="btn btn-ghost btn-sm" style="padding:4px 8px;">✏Edit</button>
                  <button style="background:rgba(239,68,68,.12); color:#fca5a5; border:none; border-radius:6px; padding:4px 8px; cursor:pointer; font-size:.78rem;">🗑Delete</button>
                </div>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:78%"></div></div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:12px 16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:6px;">
                <div style="display:flex; align-items:center; gap:8px;">
                  <span>🎨</span>
                  <strong style="font-size:.88rem;">Canva</strong>
                  <span class="badge badge-amber">Design</span>
                </div>
                <div style="display:flex; align-items:center; gap:8px;">
                  <button class="btn btn-ghost btn-sm" style="padding:4px 8px;">✏Edit</button>
                  <button style="background:rgba(239,68,68,.12); color:#fca5a5; border:none; border-radius:6px; padding:4px 8px; cursor:pointer; font-size:.78rem;">🗑Delete</button>
                </div>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:70%"></div></div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:12px 16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:6px;">
                <div style="display:flex; align-items:center; gap:8px;">
                  <span>🐳</span>
                  <strong style="font-size:.88rem;">MySQL</strong>
                  <span class="badge badge-blue">Database</span>
                </div>
                <div style="display:flex; align-items:center; gap:8px;">
                  <button class="btn btn-ghost btn-sm" style="padding:4px 8px;">✏Edit</button>
                  <button style="background:rgba(239,68,68,.12); color:#fca5a5; border:none; border-radius:6px; padding:4px 8px; cursor:pointer; font-size:.78rem;">🗑Delete</button>
                </div>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:65%"></div></div>
            </div>

            <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:12px 16px; border:1px solid var(--border);">
              <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:6px;">
                <div style="display:flex; align-items:center; gap:8px;">
                  <span>📦</span>
                  <strong style="font-size:.88rem;">PHP</strong>
                  <span class="badge badge-green">Backend</span>
                </div>
                <div style="display:flex; align-items:center; gap:8px;">
                  <button class="btn btn-ghost btn-sm" style="padding:4px 8px;" data-toggle="modal" data-target="#editSkillModal">✏Edit</button>
                  <button style="background:rgba(239,68,68,.12); color:#fca5a5; border:none; border-radius:6px; padding:4px 8px; cursor:pointer; font-size:.78rem;" data-toggle="modal" data-target="#deleteSkillModal">🗑Delete</button>
                </div>
              </div>
              <div class="progress-bar"><div class="progress-bar__fill" style="width:80%"></div></div>
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
<script>
function updateBar(val) {
  document.getElementById('skill-bar').style.width = val + '%';
}
</script>
</body>
</html>
