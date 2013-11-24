<?php

require '../includes/form.php';

<<<<<<< HEAD
$form_fields = array('username', 'password');    
$required_fields = array('username', 'password');    
=======
$form_fields = array('username', 'password');
$required_fields = array('username', 'password');
>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf

$form = form_get_data($form_fields, $_POST);
$valid = form_is_valid($form, $required_fields);

?>
<<<<<<< HEAD

=======
>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <pre><?php var_dump($form); ?></pre>
        <?php if ($valid) {
            ?>
<<<<<<< HEAD
            <div> this form is valid.</div>
            <?php }
            ?>
=======
            <div>
                This form is valid!!
            </div>
            <?php
        } ?>
>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
        <form method="post">
            <ul>
                <li>
                    <label for="username">Username</label>
                    <input type="text" name="username" value="<?php echo htmlentities($form['username']); ?>" />
                </li>
                <li>
                    <label for="password">Password</label>
<<<<<<< HEAD
                    <input type="text" name="password" />
                </li>
                <li>
                    <input type="submit" name="Submit" />
                </li>
            <ul>    
=======
                    <input type="password" name="password" />
                </li>
                <li>
                    <input type="submit" value="Submit" />
                </li>
            </ul>
>>>>>>> ce8c39d1871dde3e4f18ccbd216eb5d091d95dbf
        </form>
    </body>
</html>