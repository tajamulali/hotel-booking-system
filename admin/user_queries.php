<?php
    require('inc/db_config.php');
    require('inc/essentials.php');
    adminLogin();
    session_regenerate_id(true);

    if(isset($_GET['seen']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['seen']=='all'){
            $q = "UPDATE `user_queries` SET `seen`=?";
            $values = [1];
            if(update($q,$values,'i')){
            alert('success','Marked all as read');
            }
            else{
                alert('error','operation failed!');
            }
        }
        else{
          $q = "UPDATE `user_queries` SET `seen`=? WHERE `s_no`=?";
          $values = [1,$frm_data['seen']];
          if(update($q,$values,'ii')){
            alert('success','Marked as read');
          }
          else{
            alert('error','operation failed!');
          }
        }
    }

    if(isset($_GET['del']))
    {
        $frm_data = filteration($_GET);

        if($frm_data['del']=='all'){
            $q = "DELETE FROM `user_queries`";
            if(mysqli_query($con,$q)){
                alert('success','All Data deleted!');
            }
            else{
                alert('error','operation failed!');
            }
        }
        else{
          $q = "DELETE FROM `user_queries` WHERE `s_no`=?";
          $values = [$frm_data['del']];
          if(delete($q,$values,'i')){
            alert('success','Data deleted!');
          }
          else{
            alert('error','operation failed!');
          }
        }
    }
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
                    <div class="text-end mb-4">
                        <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
                            Mark all read <i class="bi bi-check2-all"></i>
                        </a>
                        <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
                            Delete <i class="bi bi-trash3"></i>
                        </a>

                    </div>

                <div class="table-responsive-md" style="height: 420px; overflow-y: scroll;">
                    <table class="table table-danger table-hover border">
                        <thead class="sticky-top">
                            <tr class="table-warning">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col" width="15%">Subject</th>
                            <th scope="col" width="30%">Message</th>
                            <th scope="col">Date</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $q = "SELECT * FROM `user_queries` ORDER BY `s_no` DESC";
                                $data = mysqli_query($con,$q);
                                $i=1;

                                while($row = mysqli_fetch_assoc($data))
                                {
                                    $seen='';
                                    if($row['seen']!=1){
                                        $seen = "<a href='?seen=$row[s_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a> <br>";
                                    }
                                    $seen.= "<a href='?del=$row[s_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                    echo<<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>
                                        </tr>
                                    query;
                                    $i++;
                                }
                            ?>
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