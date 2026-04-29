<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Education — PortfolioOS</title>
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
      <a class="nav-item" href="skills.php"><span class="icon">⚡</span> Skills</a>
      <a class="nav-item active" href="certifications.php"><span class="icon">🎓</span> Certifications</a>
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
      <div class="topnav__title">Cerifications</div>
      <div class="topnav__search">
        <div class="input-wrap">
          <span class="icon">🔍</span>
          <input type="text" placeholder="Search…" style="padding-top:9px;padding-bottom:9px;font-size:.84rem;" />
        </div>
      </div>
      <div class="topnav__actions">
        <a class="icon-btn notif-dot" href="#">🔔</a>
        <div class="avatar" style="cursor:pointer">RM</div>
      </div>
    </nav>

    <div class="page-body">
      <div class="page-header">
        <div><h2>Certifications</h2><p>Manage your certifications.</p></div>
      </div>

      <div class="cards-grid cards-grid--1" style="align-items:start; margin-bottom:24px;">

      
        <div style="max-width:900px; margin:0 auto; width:100%;">

  <!-- Add Button (Centered) -->
  <div style="text-align:right; margin-bottom:20px;">
    <button class="btn btn-primary">＋ Add Certification</button>
  </div>

  <!-- Certifications Card -->
  <div class="card fade-up">

    <div class="card__title">
      <span class="icon">📋</span> Certifications
    </div>

    <div style="display:flex; flex-direction:column; gap:14px; margin-top:10px;">

      <!-- Certification 1 -->
      <div style="position:relative; margin-bottom:28px;">
        <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
          <div class="cert-card">
          <div class="cert-header">
            <div>
              <strong><?php echo $certification['name']; ?></strong>
              <p class="org"><?php echo $certification['organization']; ?></p>
              <p class="meta">Issued: <?php echo $certification['issue_date']; ?></p>
            </div>
            <span class="badge badge-green">Certification</span>
          </div>

          <div class="actions">
            <button class="btn btn-ghost btn-sm ">✏ Edit</button>
            <button class="btn btn-ghost btn-sm ">🔗 View</button>
            <button class="btn btn-danger btn-sm">🗑 Delete</button>
          </div>
        </div>
        </div>
      </div>
      <!-- Certification 2 -->
      
      <div style="position:relative; margin-bottom:28px;">
        <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
          <div class="cert-card">
            <div class="cert-header">
              <div>
                <strong><?php echo $certification['name']; ?></strong>
                <p class="org"><?php echo $certification['organization']; ?></p>
                <p class="meta">Issued: <?php echo $certification['issue_date']; ?></p>
              </div>
              <span class="badge badge-amber">Course</span>
            </div>
            

            <div class="actions">
              <button class="btn btn-ghost btn-sm">✏ Edit</button>
              <button class="btn btn-danger btn-sm">🗑 Delete</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Certification 3 -->
      <div style="position:relative; margin-bottom:28px;">
        <div style="background:var(--bg-input); border-radius:var(--radius-sm); padding:16px; border:1px solid var(--border);">
          <div class="cert-card">
            <div class="cert-header">
              <div>
                <strong><?php echo $certification['name']; ?></strong>
                <p class="org"><?php echo $certification['organization']; ?></p>
                <p class="meta">Issued: <?php echo $certification['issue_date']; ?></p>
              </div>
              <span class="badge badge-blue">Certification</span>
            </div>

           
            <div class="actions">
              <button class="btn btn-ghost btn-sm">✏ Edit</button>
              <button class="btn btn-danger btn-sm">🗑 Delete</button>
            </div>
          </div>
        </div>
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
