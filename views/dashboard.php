<?php
session_start();

include "../classes/user.php";

$user = new User;
$user_list = $user->getAllusers();
// $user_list = $result
// $user_list contains all the records from the users table


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
        <?php include "main-menu.php"; ?>
        <main class="container" style="padding-top: 80px"> 
            <h2 class="text-muted display-6">USER LIST</h2>
            <table class="table table-hover">
                <thead class="table-secondary">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="lead">
                    <?php
                    while($user = $user_list->fetch_assoc()){
                    ?>

                        <tr>
                            <td><?= $user['id']?></td>        
                            <td><?= $user['first_name']?></td>
                            <td><?= $user['last_name']?></td>
                            <td><?= $user['username']?></td>
                            <td>
                                <a href="edit-user.php?user_id=<?= $user['id'] ?>" class="btn btn-outline-warning"><i class="fas fa-pencil-alt"></i></a>
                                <a href="delete-user.php?user_id=<?= $user['id'] ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>