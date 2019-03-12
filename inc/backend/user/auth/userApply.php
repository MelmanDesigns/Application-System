<?php
session_name('hydrid');
session_start();
require_once '../../../connect.php';

require_once '../../../config.php';

$username = !empty($_POST['linear_name']) ? trim($_POST['linear_name']) : null;
$username = !empty($_POST['linear_email']) ? trim($_POST['linear_email']) : null;
$username = !empty($_POST['linear_age']) ? trim($_POST['linear_age']) : null;
$username = !empty($_POST['linear_discord']) ? trim($_POST['linear_discord']) : null;
$username = !empty($_POST['linear_legalcopy']) ? trim($_POST['linear_legalcopy']) : null;
$username = !empty($_POST['linear_dept']) ? trim($_POST['linear_dept']) : null;
$username = !empty($_POST['linear_experience']) ? trim($_POST['linear_experience']) : null;
$username = !empty($_POST['linear_describe']) ? trim($_POST['linear_describe']) : null;
$username = !empty($_POST['linear_why']) ? trim($_POST['linear_why']) : null;
$username = !empty($_POST['linear_pastrp']) ? trim($_POST['linear_pastrp']) : null;
$username = !empty($_POST['linear_anything']) ? trim($_POST['linear_anything']) : null;
$username = !empty($_POST['linear_referral']) ? trim($_POST['linear_referral']) : null;


$username = strip_tags($linear_name);
$username = strip_tags($linear_email);
$username = strip_tags($linear_age);
$username = strip_tags($linear_discord);
$username = strip_tags($linear_legalcopy);
$username = strip_tags($linear_dept);
$username = strip_tags($linear_experience);
$username = strip_tags($linear_describe);
$username = strip_tags($linear_why);
$username = strip_tags($linear_pastrp);
$username = strip_tags($linear_anything);
$username = strip_tags($linear_referral);


$error = array();

$sql = "SELECT * FROM users WHERE username = :username";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':username', $username);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);
if ($user === false) {
    $error['msg'] = "That account couldn't be found in our Database.";
    echo json_encode($error);
    exit();
}
else {
    $validPassword = password_verify($passwordAttempt, $user['password']);
    if ($validPassword) {
        if ($user['usergroup'] === NULL) {
            $sql2 = "UPDATE `users` SET `usergroup`= ? WHERE `user_id`= ?";
            $stmt2 = $pdo->prepare($sql2);
            $updateUserGroup = $stmt2->execute([$settings['unverifiedGroup'], $user['user_id']]);
        }
        if ($settings['account_validation'] === "Yes" && $user['usergroup'] === $settings['unverifiedGroup']) {
            $error['msg'] = "Your account is pending Validation from an Admin.";
            echo json_encode($error);
            exit();
        }
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['logged_in'] = time();

        logAction('Logged In', $user['username']);

        //Successful login
        $error['msg'] = "";
        echo json_encode($error);
        exit();
    }
    else {
        $error['msg'] = "Your password is invalid. Please try again.";
        echo json_encode($error);
        exit();
    }
}
