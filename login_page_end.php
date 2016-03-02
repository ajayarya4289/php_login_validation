<?php
$empty = [];

if (isset($_POST['submit'])) {

    $fields = ['user_name', 'password', 'email'];
    foreach ($fields as $field) {
        if (trim($_POST[$field]) == false) {
            $empty[] = $field;
        }
    }
}

?>

<!DOCTYPE HTML>
<html>
<head>
    <title>
    Login Sample
    </title>
</head>
<body>

<center><h1> Login Page </h1></center>
<hr color="red">


<?php if ($empty) : ?>
    <p class="warning">Please fill all the details </p>
<?php endif; ?>

<form name="login" method="post"  action="<?= $_SERVER['PHP_SELF']; ?>">
    <p>
        <label for="user_name">User Name:
            <?php if ($empty && in_array('user_name', $empty)) : ?>
                <span class="warning">Please Enter User Name</span>
            <?php endif; ?>
        </label>
    </p>
    <p>
        <input type="user_name" id="user_name" name="user_name">
    </p>

    <p>
        <label for="password">Password:
            <?php if ($empty && in_array('password', $empty)) : ?>
                <span class="warning">Please Enter Password</span>
            <?php endif; ?>
        </label>
    </p>
    <p>
        <input type="password" id="password" name="password">
    </p>

    <p>
        <label for="email">Email:
            <?php if ($empty && in_array('email', $empty)) : ?>
                <span class="warning">Please Enter Email</span>
            <?php endif; ?>
        </label>
    </p>
    <p>
        <input type="email" id="email" name="email">
    </p>

    <p>
        <input type="submit" id="submit" name="submit" value="Login">
    </p>
</form>
</body>
</html>
