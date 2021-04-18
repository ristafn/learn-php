        <!-- menu -->
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-warning text-white">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php?page=views/menu/home"><strong>Digital Marketing</strong></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php?page=views/menu/home">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link active" href="index.php?page=views/menu/aboutUs">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Pegawai
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="index.php?page=views/menu/dataPegawai">Data Pegawai</a></li>
                                    <li><a class="dropdown-item" href="#">Daftar Lain</a></li>
                                </ul>
                            </li>
                            <?php
                            $member = isset($_SESSION['MEMBER']) ? $_SESSION['MEMBER'] : null;
                            // $member = $_SESSION['MEMBER'];
                            if(!isset($member)) {

                            ?>
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php?page=views/menu/login">Login</a>
                                </li>
                            <?php 
                            } else {
                                
                            ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <?= $member['fullname']; ?>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="#">Users</a></li>
                                        <li><a class="dropdown-item" href="index.php?page=views/menu/profile">Profile</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="views/menu/logout.php" onclick="return confirm('Anda akan logout')">Logout</a></li>
                                    </ul>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- end menu -->