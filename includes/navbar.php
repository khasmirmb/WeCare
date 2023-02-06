<!-- Top Navigation -->
        <div class="container-first-nav">
            <ul class="nav justify-content-center">
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
                <img src="../images/home1.jpg" alt="Avatar" width="65px" data-bs-toggle="dropdown" aria-expanded="false">

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                </ul>
            </div>

            <div class="user-bell">
                <i class="fa-solid fa-bell"></i>
            </div>
                
            <?php } ?>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
                    if(!isset($_SESSION['logged_id'])){
            ?>
            <div class="logo-nav mt-2 mb-2">
                <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="Logo" width="45px"></a>
            </div>
            <?php }?>
            
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="../homepage/home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../about/about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../service/service.php">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../contact/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../history/history.php">History</a>
                </li>
                <?php
                if(isset($_SESSION['logged_id'])){
                ?>
                <li class="nav-item">
                <a class="nav-link" href="../appointment/appointment.php">Appointment</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../account/logout.php">Tempo Logout</a>
                </li>
                <?php } ?>

            </ul>
            <?php
                if(isset($_SESSION['logged_id'])){
            ?>
            <div class="logo-nav">
                <a class="navbar-brand" href="#"><img src="../images/logo.png" alt="Logo" width="45px"></a>
            </div>
            <?php } ?>
            <?php
                    if(!isset($_SESSION['logged_id'])){
                ?>
                <div class="nav-item m-1">
                    <a class="btn btn-outline-info" href="../account/signin.php">Login</a>
                </div>
                <div class="nav-item m-1">
                    <a class="btn btn-outline-info" href="../account/signup.php">Sign Up</a>
                </div>
                <?php } ?>
            </div>
        </div>
        </nav>
        <!-- Top Navigation End-->