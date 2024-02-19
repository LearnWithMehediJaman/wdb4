<?php


function validate($full_name, $email, $password, $confirm)
{
    $errors = [];

    if (empty($full_name))
        $errors['full_name'][] = 'Full name is required';

    if (strlen($full_name) > 25)
        $errors['full_name'][] = 'Full name must be less than 25 characters';

    if (empty($email))
        $errors['email'][] = 'Email is required';

    if (strlen($email) > 25)
        $errors['email'][] = 'Email must be less than 25 characters';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        $errors['email'][] = 'Email is not valid';

    if (empty($password))
        $errors['password'][] = 'Password is required';

    if (strlen($password) < 8 || strlen($password) > 16)
        $errors['password'][] = 'Password must be at least 8 and upto 16 characters';


    if (!preg_match("/[A-Z]/", $password))
        $errors['password'][] = 'Password must contain at least one uppercase letter';


    if (!preg_match("/[a-z]/", $password))
        $errors['password'][] = 'Password must contain at least one lowercase letter';


    if (!preg_match("/[0-9]/", $password))
        $errors['password'][] = 'Password must contain at least one number';


    if (!preg_match("/[^A-Za-z0-9]/", $password))
        $errors['password'][] = 'Password must contain at least one special character';


    if (empty($confirm))
        $errors['confirm'][] = 'Confirm password is required';


    if ($confirm !== $password)
        $errors['confirm'][] = 'Password and confirm password must match';

    return $errors;
}

if (isset($_POST['submit'])) {
    $errors = validate($_POST['full_name'], $_POST['email'], $_POST['password'], $_POST['confirm']);

    if (sizeof($errors) == 0) {
        $message = "Form Submitted !";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>

<body>
    <div class="bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form action="index.php" method="POST" class="bg-white p-10 rounded-lg shadow-lg min-w-full">
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Register</h1>

                <?php

                    if (isset($message)) {
                ?>
                    <p class='text-green-500 text-sm'><?php echo $message ?></p>
                <?php
                }
                ?>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="FullName">Full Name</label>
                    <?php 
                        if(isset($errors['full_name']) && sizeof($errors['full_name']) > 0) {
                            foreach($errors['full_name'] as $error) {
                                echo "<p class='text-red-500 text-sm'>".$error."</p>";
                            }

                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none border border-red-500" type="text" name="full_name" id="FullName" placeholder="FullName" max="25" />';
                        }
                        else{
                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="full_name" id="FullName" placeholder="FullName" max="25" />';
                        }
                    ?>
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Email</label>
                    <?php 
                        if(isset($errors['email']) && sizeof($errors['email']) > 0) {
                            foreach($errors['email'] as $error) {
                                echo "<p class='text-red-500 text-sm'>".$error."</p>";
                            }

                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none border border-red-500" type="text" name="email" id="email" placeholder="@email" />';
                        }
                        else{
                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="@email" />';
                        }
                    ?>                    
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Password</label>
                    <?php
                        if(isset($errors['password']) && sizeof($errors['password']) > 0) {
                            foreach($errors['password'] as $error) {
                                echo "<p class='text-red-500 text-sm'>".$error."</p>";
                            }

                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none border border-red-500" type="text" name="password" id="password" placeholder="password" />';
                        }
                        else{
                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="password" />';
                        }
                    ?>
                    
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Confirm password</label>
                    <?php 
                        if(isset($errors['confirm']) && sizeof($errors['confirm']) > 0) {
                            foreach($errors['confirm'] as $error) {
                                echo "<p class='text-red-500 text-sm ".$error."</p>";
                            }

                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none border border-red-500" type="text" name="confirm" id="confirm" placeholder="confirm password" />';
                        }
                        else{
                            echo '<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="confirm password" />';
                        }
                    ?>
                    
                </div>
                <button type="submit" name="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
            </form>
        </div>
    </div>
</body>

</html>