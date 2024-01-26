<?php
include_once '../assets/config/config.php';
include_once '../assets/config/functions.php';
include_once '../assets/config/contacts.php';
include_once '../assets/config/menu.php';
include_once '../assets/config/user.php';
$db = new Database();
$user = new User($db);
$contacts = new Contacts($db);
$allContacts = $contacts->readAllContacts();
$configs = new SiteConfigs($db);

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
                            <th>Mesazhi</th>
                            <th>email</th>
                            <th>Ndrysho</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($allContacts as $contact): ?>
                        <tr>
                            <td><?php echo $contact['id']; ?></td>
                            <td><?php echo $contact['emri'] . ' ' .$contact['mbiemri'] ; ?></td>
                        
                            <td><?php echo $contact['message']; ?></td>
                        
                            <td><?php echo $contact['email']; ?></td>
                            <td>
                                <a class="btn btn-keq" href="delete_contacts.php?id=<?php echo $contact['id']; ?>">Fshi</a>
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
