<?php
$conn = mysqli_connect("localhost", "root", "", "portfolio");
$result = $conn->query("SELECT * FROM experiences ORDER BY id DESC");

include "action.php";

$result = fetchExperience();
// echo "<pre>";
// print_r($result);
// echo "</pre>";
// exit;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Experience — PortfolioOS</title>

  <link rel="stylesheet" href="css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="admin-layout">

  <div id="sidebar-overlay"></div>

  <!-- Sidebar -->
  <aside class="sidebar" id="sidebar">
    <div class="sidebar__logo">
      <div class="logo-icon">✦</div><span>PortfolioOS</span>
    </div>

    <div class="sidebar__section">
      <div class="sidebar__section-title">Main</div>
      <a class="nav-item" href="dashboard.php">Dashboard</a>
      <a class="nav-item" href="projects.php">Projects</a>
      <a class="nav-item active" href="experiences.php">Experiences</a>
      <a class="nav-item" href="skills.php">Skills</a>
      <a class="nav-item" href="certifications.php">Certifications</a>
    </div>

    <div class="sidebar__section">
      <div class="sidebar__section-title">Settings</div>
      <a class="nav-item" href="#">Profile Settings</a>
      <a class="nav-item" href="signin.php" style="color:#ef4444">Log Out</a>
    </div>
  </aside>

  <!-- Main Content -->
  <div class="main-content">

    <!-- Top Nav -->
    <nav class="topnav">
      <button class="menu-toggle" id="menu-toggle">☰</button>
      <div class="topnav__title">Work Experience</div>
    </nav>

    <!-- Page Body -->
    <div class="page-body">

      <div class="page-header">
        <h2>Work Experience</h2>
        <p>Document your professional journey.</p>
      </div>

      <div style="text-align:right; margin-bottom:20px;">
        <button class="btn btn-primary" onclick="openAddModal()">＋ Add Experience</button>
      </div>

      <!-- Cards -->
      <div class="cards-grid cards-grid--1">

        <div class="card">
          <div class="card__title">Experience Timeline</div>

          <?php foreach ($result as $row => $val): ?>

          <div style="margin-bottom:20px; border:1px solid #ddd; padding:15px; border-radius:8px;">
            <strong><?php echo $val['title']; ?></strong><br>
            <small><?php echo $val['company']; ?></small><br>
            

            <p><?php echo $val['description']; ?></p>

            <button class="btn btn-sm btn-warning"
              onclick="openEditModal(<?php echo $val['id'] ?>)">Edit</button>

            <button class="btn btn-sm btn-danger"
              onclick="deleteExperience(<?php echo $val['id'] ?>)">Delete</button>
          </div>

          <?php endforeach; ?>

        </div>

      </div>
    </div>

    <footer style="padding:20px;">
      © 2025 PortfolioOS
    </footer>

  </div> <!-- end main-content -->

</div> <!-- end admin-layout -->


<!-- ✅ Modal (correct position: outside layout) -->
<div class="modal fade" id="experienceModal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <form id="experienceForm">

        <div class="modal-header">
          <h5 class="modal-title">Add Experience</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">

          <input type="hidden" id="exp_id" name="id">

          <input type="text" name="title" class="form-control mb-2" placeholder="Job Title" required>
          <input type="text" name="company" class="form-control mb-2" placeholder="Company" required>
          <textarea name="description" class="form-control mb-2" placeholder="Description"></textarea>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" >Save</button>
        </div>

      </form>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="js/main.js"></script>
<script src="js/ajax.js"></script>

</body>
</html>