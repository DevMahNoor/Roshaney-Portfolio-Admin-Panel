<?php
function connectDB(){
    $conn = mysqli_connect("localhost", "root", "", "portfolio");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $conn;
}
actions($_POST['action']);

function actions(){
    $action = $_POST['action'];
    print_r($action);
    switch ($action){
        case "add":
            addExperience();
            break;
        case "edit":
            editExperience();
            break;
        case "delete":
            deleteExperience();
            break;
        default:
            echo "No action specified.";
         
    }
}

function addExperience() {
    $conn = connectDB();
    $title = $_POST["title"];
    $company = $_POST["company"];
    $description = $_POST["description"];

    $conn->query("INSERT INTO experiences (title, company, description) 
                  VALUES ('$title', '$company', '$description')");
}

function editExperience(){
    $conn =connectDB();
    $id = $_POST["id"];
    $title = $_POST["title"];   
    $company = $_POST["company"];
    $description = $_POST["description"];
    $conn->query("UPDATE experiences 
                  SET title='$title', company='$company', description='$description' 
                  WHERE id='$id'");
}
function deleteExperience(){
    $conn = connectDB();
    $id = $_POST["id"];
    $conn->query("DELETE FROM experiences WHERE id='$id'");
}
//  $action = $_POST['action'];

// ============================================
// SHOW SUBMITTED VALUES (for debugging)
// ============================================
// echo "<h3>Action: " . $action . "</h3>";
// echo "<pre>";
// print_r($_POST);  // Shows all submitted data
// echo "</pre>";
// echo "<hr>";

// ============================================
// ADD EXPERIENCE
// ============================================
// if ($action == "add") {
//     $title = $_POST["title"];
//     $company = $_POST["company"];
//     $duration = $_POST["duration"];
//     $description = $_POST["description"];

//     echo "<p><strong>Adding:</strong> $title at $company</p>";

//     $conn->query("INSERT INTO experiences (title, company, duration, description) 
//                   VALUES ('$title', '$company', '$duration', '$description')");

//     echo "<p style='color:green;'>✅ Experience added successfully!</p>";
// }

// ============================================
// FETCH SINGLE EXPERIENCE (for edit modal)
// ============================================
// if ($action == "fetch") {
//     $id = $_POST["id"];
    
//     echo "<p><strong>Fetching ID:</strong> $id</p>";

//     $result = $conn->query("SELECT * FROM experiences WHERE id='$id'");
//     $data = $result->fetch_assoc();
    
//     echo "<p><strong>Found:</strong> " . $data['title'] . "</p>";
    
//     echo json_encode($data);  // Only this goes to JS
//     exit;  // Stop here so HTML doesn't break JSON
// }

// ============================================
// FETCH SINGLE EXPERIENCE (for edit modal)
// ============================================
function fetchExperience() {
    $conn = connectDB();
    $result = $conn->query("SELECT * FROM experiences");
    $data = $result->fetch_assoc();

    return array($data);  // Only this goes to JS
    exit;  // Stop here so HTML doesn't break JSON
}

// ============================================
// UPDATE EXPERIENCE
// ============================================
// if ($action == "update") {
//     $id = $_POST["id"];
//     $title = $_POST["title"];
//     $company = $_POST["company"];
//     $duration = $_POST["duration"];
//     $description = $_POST["description"];

//     echo "<p><strong>Updating ID:</strong> $id</p>";
//     echo "<p><strong>New Title:</strong> $title</p>";

//     $conn->query("UPDATE experiences 
//                   SET title='$title', company='$company', duration='$duration', description='$description' 
//                   WHERE id='$id'");

//     echo "<p style='color:green;'>✅ Experience updated successfully!</p>";
// }

// ============================================
// DELETE EXPERIENCE
// ============================================
// if ($action == "delete") {
//     $id = $_POST["id"];
    
//     echo "<p><strong>Deleting ID:</strong> $id</p>";

//     $conn->query("DELETE FROM experiences WHERE id='$id'");

//     echo "<p style='color:green;'>✅ Experience deleted successfully!</p>";
// }
?>