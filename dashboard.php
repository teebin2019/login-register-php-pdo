<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.css">
    <link rel="stylesheet" href="sidebars.css">

    <title>ระบบหลังบ้าน</title>
</head>


<body style="min-height: 100vh; " class="d-flex flex-column bg-primary bg-opacity-25">
    <!-- Navbar -->
    <nav class="navbar bg-primary p-3">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">โค้ชส้นตีน</a>
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">โค้ชส้นตีน</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <!-- สถิตติ -->
        <div class="row row-cols-2 row-cols-lg-3 g-2 g-lg-3 mt-3">

            <div class="col">
                <div class="card ">

                    <div class="card-body">
                        <h5 class="card-title text-center">รถเข้าวันนี้</h5>
                        <p class="card-text text-center">0</p>
                        <p class="card-text text-center">คัน</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">

                    <div class="card-body">
                        <h5 class="card-title text-center">รถเข้าวันนี้</h5>
                        <p class="card-text text-center">0</p>
                        <p class="card-text text-center">คัน</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card ">

                    <div class="card-body">
                        <h5 class="card-title text-center">รถเข้าวันนี้</h5>
                        <p class="card-text text-center">0</p>
                        <p class="card-text text-center">คัน</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container my-2">
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3 mt-3">
            <div class="col">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        วิดีโอ & ทะเบียนล่าสุด
                    </div>
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>A well-known quote, contained in a blockquote element.</p>
                            </blockquote>
                            <figcaption class="blockquote-footer">
                                Someone famous in <cite title="Source Title">Source Title</cite>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div>
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header bg-primary text-white">
                        ทะเบียนที่บันทึก
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        สถิติวันนี้
                    </div>
                    <div class="card-body">
                        <figure>
                            <blockquote class="blockquote">
                                <p>จำนวนผู้เข้าเรียนทั้งหมด 0</p>
                            </blockquote>
                        </figure>
                    </div>
                </div>

            </div>




        </div>


    </div>

    <footer class="footer mt-auto py-3 bg-primary ">
        <div class="container text-center"> <span class="text-white ">&copy; 2025 ระบบ LPR โดยทีมคุณธญาวัฒน์</span> </div>
    </footer>

    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://common.olemiss.edu/_js/sweet-alert/sweet-alert.min.js"></script>
    <script src="login.js"> </script>
</body>

</html>