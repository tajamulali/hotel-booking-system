<?php
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Admin Dashboard</title>
    <?php require('inc/links.php')?>
</head>
<body class="bg-light">

<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
    <h3 class="mb-0">ADMIN PANEL</h3>
    <a href="logout.php" class="btn btn-sm btn-light">LogOut</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>