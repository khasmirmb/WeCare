<!-- Top Navigation -->
        <div class="container-first-nav">
            <ul class="nav justify-content-center">
            <li class="nav-item">
                <p class="nav-link text-white" href="#"><i class="fa-solid fa-clock"></i> Mon to Sat 9:00am to 9:00pm</p>
            </li>
            </ul>
        </div>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="logo-nav mt-2 mb-2">
                <a class="navbar-brand" href="../homepage/home.php"><img src="../images/logo.png" alt="Logo" width="45px"></a>
            </div>
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="../homepage/home.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../about/about.php">About</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../service/service.php">Service</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../contact/contact.php">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../history/history.php">History</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../appointment/appointment.php">Appointment</a>
                </li>

            </ul>
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
            <?php
                if(isset($_SESSION['logged_id'])){
            ?>
            <div class="user-bell">
                <i class="fa-solid fa-bell"></i>
            </div>

            <div class="user-profile">
                <img src="<?php echo $_SESSION['profile_pic'] ?>" alt="Avatar" width="65px" data-bs-toggle="dropdown" aria-expanded="false">

                <ul class="dropdown-menu dropdown-menu-end">
                    <li class="ms-3 mt-2"><p class="font-weight-bold"><?php echo $_SESSION['fullname'] ?></p></li>
                    <hr>
                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-desktop"></i><span>Family Monitoring</span></button></a></li>

                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-money-bill"></i><span>Payment/History</span></button></a></li>

                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-ticket"></i><span>Admission</span></button></a></li>

                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-gear"></i><span>Account Settings</span></button></a></li>

                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-circle-info"></i><span>Help & Support</span></button></a></li>

                    <li><a href="#"><button class="dropdown-item" type="button"><i class="fa-solid fa-comment"></i><span>Give Feedback</span></button></a></li>

                    <hr>
                    <li><a href="../account/logout.php"><button class="dropdown-item" type="button"><i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span></button></a></li>
                </ul>


            </div>
                
            <?php } ?>
        </div>
        </nav>
        <!-- Top Navigation End-->