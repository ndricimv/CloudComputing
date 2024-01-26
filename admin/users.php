<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/News.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);
$allUsers = $user->readAllUsers();

session_start();
if ($_SESSION['user_id']) {
    $user_id = $_SESSION['user_id'];
    $user_role = $user->checkUserRole($user_id);

    if ($user_role === 'admin') {
    } else {
        header('Location: ../index.php');
        exit();
    }
    } else {
        header('Location: ../login.php');
        exit();
    }
$pageid = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cloud Computing</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container front-page">
        <?php include "header.php" ?>            
        <div class="pastro"></div>
        <div class="feature">

        </div>
        <div class="articels width65">
            <div class="table-wrapper">
                <table class="serverat">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Emri</th>
                            <th>username</th>
                            <th>Email</th>
                            <th>Roli</th>
                            <th>Ndrysho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allUsers as $users): ?>
                        <tr>
                            <td><?php echo $users['id']; ?></td>
                            <td><?php echo $users['emri']; ?> <?php echo $users['mbiemri']; ?></td>
                            <td><?php echo $users['username']; ?></td>
                            <td><?php echo $users['email']; ?></td>
                            <td><?php echo $users['role']; ?></td>
                            <td>
                                <a class="btn btn-mir" href="user_update.php?id=<?php echo $users['id']; ?>">Ndrysho</a>
                                <a class="btn btn-keq" href="delete_user.php?id=<?php echo $users['id']; ?>">Fshi</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <tbody>
                </table>
            </div>
        </div>
        <?php include "../footer.php" ?>
    </div>
    <script src="../assets/js/scripts.js"></script>
</body>
</html>
