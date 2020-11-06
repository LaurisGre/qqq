<?php 

if ($_POST['email'] !== '') {
    if ($_POST['password'] !== '') {
        foreach ($users as $user) {
            if ($_POST['email'] === $user['user_email']) {
                if ($_POST['password'] === $user['password']) {
                    $log_message = 'Welcome ' . $_POST['email'];
                    break;
                } else {
                    $log_message = 'Wrong password';
                    break;
                }
            } else {
                $log_message = $_POST['email'] . ' was not found in the system </br> please check your inputs';
            }
        }
    } else {
        $log_message = 'Please enter your password';
    }
} else {
	$log_message = 'Please enter your email';
}
