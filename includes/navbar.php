<!-- Top Navigation -->
<div class="container-first-nav">
            <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-twitter"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fa-brands fa-google"></i></a>
            </li>
            <li class="nav-item">
                <p class="nav-link text-white" href="#"><i class="fa-solid fa-phone"></i> (062) 991 3236</p>
            </li>
            <li class="nav-item">
                <p class="nav-link text-white" href="#"><i class="fa-solid fa-location-dot"></i> Bernado Drive, 143 S. De Leon Street, Sta.Maria Road</p>
            </li>
            <li class="nav-item">
                <p class="nav-link text-white" href="#"><i class="fa-solid fa-clock"></i> Mon to Sat 9:00pm to 9:00pm</p>
            </li>
            </ul>
        </div>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <?php
                if(isset($_SESSION['logged_id'])){
            ?>
            <div class="user-profile">
                <img src="../images/home1.jpg" alt="Avatar" width="65px">
            </div>

            <div class="user-bell">
                <i class="fa-solid fa-bell"></i>
            </div>
                
            <?php } ?>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Service</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">History</a>
                </li>
                <?php
                if(isset($_SESSION['logged_id'])){
                ?>
                <li class="nav-item">
                <a class="nav-link" href="#">Appointment</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../account/logout.php">Tempo Logout</a>
                </li>
                <?php } ?>
                <?php
                    if(!isset($_SESSION['logged_id'])){
                ?>
                <li class="nav-item m-1">
                    <a class="btn btn-outline-info" href="../account/signin.php">Login</a>
                </li>
                <li class="nav-item m-1">
                    <a class="btn btn-outline-info" href="#">SignUp</a>
                </li>
                <?php } ?>

            </ul>
                <div class="logo-nav">
                    <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="Logo" width="45px"></a>
                </div>
            </div>
        </div>
        </nav>
        <!-- Top Navigation End-->