<?php
$missing = [];
if (isset($_POST['send'])) {

    $expected = ['name', 'email', 'comments'];

    foreach ($expected as $item) {
        if (trim($_POST[$item]) == false) {
            $missing[] = $item;
        }
    }
}

?>

<!DOCTYPE html>
<html>
<meta charset="utf-8"
<title>
    Login
</title>

<link href="style.css" rel="stylesheet" type="text/css">

<body>
<?php if ($missing) : ?>
    <p class="warning"> Please fix one or more missing Fields</p>
<?php endif; ?>


<form name="contact" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

    <label for="name">Name:
        <?php if ($missing && in_array('name', $missing)) : ?>
            <span class="warning"> Please enter name </span>
        <?php endif; ?>
    </label>
    <p>
        <input type="text" id="name" name="name">
    </p>

    <p>
        <label for="email">Email:
            <?php if ($missing && in_array('email', $missing)) : ?>
                <span class="warning"> Please enter email </span>
            <?php endif; ?>
        </label>
    </p>

    <p>
        <input type="text" id="email" name="email">
    </p>

    <p>
        <label for="comments">Comments:
            <?php if ($missing && in_array('comments', $missing)) : ?>
                <span class="warning"> Please enter comments </span>
            <?php endif; ?>
        </label>
    </p>

    <p>
        <textarea id="comments" name="comments"> </textarea>
    </p>
    <p>
        <input type="submit" id="send" name="send" value="Login"">
    </p>
</form>


</body>

</html>