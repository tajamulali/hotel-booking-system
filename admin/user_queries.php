<?php
    require('inc/db_config.php');
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel-Admin User Queries</title>
    <?php require('inc/links.php')?>
</head>
<body class="bg-light">

<?php require('inc/header.php'); ?>

<div class="conatiner-fluid" id="main-content">
    <div class="row"> 
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
            <h3 class="mb-4">User Queries</h3>

            <div class="card border-0 shadow-sm mb-4">
                <div class="card-body border-0 shadow-sm">

                <div class="table-responsive-md" style="height: 400px; overflow-y: scroll;">
                    <table class="table table-danger table-hover border">
                        <thead class="sticky-top">
                            <tr class="table-warning">
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                </div>
            </div>

        </div>
    </div>
</div>
            

<?php require('inc/script.php')?>
</body>
</html>