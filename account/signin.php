<?php

    $page_title = 'WeCare - Sign In';
    require_once '../includes/header.php';
    session_start();


?>

<body id="sign-in">
<!-- Header -->
<header>
    <div class="col-lg-2">
        <div class="header_logo">
            <a href="../homepage/home.php"><img src="../images/logo.png" alt="" class="logo_login"></a>
        </div>
    </div>
</header>
    <!-- End Header -->

    <form action="" method="post">
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="Email">

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">

        <button type="submit" name="submit">Login</button>
    </form>

</body>