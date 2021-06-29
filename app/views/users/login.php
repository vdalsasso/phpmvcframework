<?php
    require APPROOT . '/views/includes/head.php';
?>

<div class="navbar">
    <?php
    require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container-login">
    <div class="wrapper-login">
        <h2>Entrar</h2>

        <form action="<?php echo URLROOT;?>/users/login" method="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data ['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data ['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Entrar</button>

            <p class="options">Não possui registro ainda? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</p>
        </form>
    </div>
</div>