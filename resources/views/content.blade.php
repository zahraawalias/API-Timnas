<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body {
        background-color: #EFEFEF;
        font-family: "Poppins", sans-serif;
        overflow-x: hidden;
    }

    body p {
        font-size: 11px;
    }

    .card-sider {
        width: 394px;
    }

    .card-detail {
        width: 552px;
    }

    .card-detail button {
        justify-content: center;
        padding-left: 15px;
        padding-right: 15px;
        width: 180px;
    }

    .card-profile {
        width: 228px;
    }

    @media (max-width: 576px) {
        .card-sider {
            width: 100%;
        }

        .card-sider button {
            justify-content: center;
        }

        .card-body a {
            width: 100%
        }

        .card-detail {
            width: 100%;
        }

        .card-profile {
            width: 100%;
        }

        .navbar img {
            width: 100px;
            float: end;
        }

        .buttons-group a {
            font-size: 10px;
        }

        .card-detail button {
            justify-content: center;
            width: 100px;
        }
    }
</style>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white custom-navbar">
        <div class="container navbar-container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img class="img-fluid mx-auto" src="https://www.kalbe.co.id/_next/static/media/Logo-Kalbe.0cf6623a.svg"
                alt="Logo" width="80" height="70">
            <div class="collapse navbar-collapse justify-content-center fw-medium" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active mx-2">
                        <a class="nav-link" href="index.php">Find Apps</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="about.php">Report Bugs</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="contact.php">Submit Apps</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link" href="login.php">Request Apps</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- main -->
    <div class="main-container" style="margin-top: 7rem;">
        <div class="row m-2">
            <div class="col">
                <div class="col mb-3">
                    <div class="card card-sider">
                        <div class="card-body d-flex justify-content-center">
                            <a type="button" class="btn btn-dark px-2 btn-lg" style="font-size: 11px;">Descriptions</a>
                            <a type="button" class="btn px-3 btn-lg" data-bs-toggle="button"
                                style="font-size: 11px;">Featured</a>
                            <a type="button" class="btn px-3 btn-lg" data-bs-toggle="button"
                                style="font-size: 11px;">Most Recent</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- CARD 1 -->
                    <div class="card mt-3 card-sider">
                        <div class="row mt-2">
                            <div class="col-3 me-0">
                                <img src="https://s3-alpha.figma.com/hub/file/2815952264/7a5ebfb0-0508-48ab-be9a-31b36ba53f97-cover.png"
                                    class="rounded float-start ms-2 mt-2" alt="..." width="70" height="70">
                            </div>
                            <div class="col-8 g-col-12">
                                <div class="text-start">
                                    <p class="pt-2 fw-semibold">Repair Step Analyst</p>
                                    <p style="font-size: 11px;">We are looking for figma designers who can help desiging
                                        the entire mobile application...</p>
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="bi bi-bookmark float-end me-3 fs-5"></i>
                            </div>
                        </div>
                        <div class="row ms-2">
                            <div class="buttons-group">
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">UI Designer</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Figma</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Landing Page</a>
                            </div>
                        </div>
                        <div class="row mx-2 mt-2">
                            <div class="col">
                                <p>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo '<i class="bi bi-star-fill" style="color: yellow;"></i>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="col-5">
                                <p style="font-size: 11px;"><i class="bi bi-patch-check-fill"
                                        style="color: #5776dc"></i> Apps Verified</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="card mt-3 card-sider">
                        <div class="row mt-2">
                            <div class="col-3 me-0">
                                <img src="https://s3-alpha.figma.com/hub/file/2815952264/7a5ebfb0-0508-48ab-be9a-31b36ba53f97-cover.png"
                                    class="rounded float-start ms-2 mt-2" alt="..." width="70"
                                    height="70">
                            </div>
                            <div class="col-8 g-col-12">
                                <div class="text-start">
                                    <p class="pt-2 fw-semibold">Repair Step Analyst</p>
                                    <p style="font-size: 11px;">We are looking for figma designers who can help
                                        desiging the entire mobile application...</p>
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="bi bi-bookmark float-end me-3 fs-5"></i>
                            </div>
                        </div>
                        <div class="row ms-2">
                            <div class="buttons-group">
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">UI
                                    Designer</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Figma</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Landing
                                    Page</a>
                            </div>
                        </div>
                        <div class="row mx-2 mt-2">
                            <div class="col">
                                <p>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo '<i class="bi bi-star-fill" style="color: yellow;"></i>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="col-5">
                                <p style="font-size: 11px;"><i class="bi bi-patch-check-fill"
                                        style="color: #5776dc"></i> Apps Verified</p>
                            </div>
                        </div>
                    </div>

                    <!-- CARD 3 -->
                    <div class="card my-3 card-sider">
                        <div class="row mt-2">
                            <div class="col-3 me-0">
                                <img src="https://s3-alpha.figma.com/hub/file/2815952264/7a5ebfb0-0508-48ab-be9a-31b36ba53f97-cover.png"
                                    class="rounded float-start ms-2 mt-2" alt="..." width="70"
                                    height="70">
                            </div>
                            <div class="col-8 g-col-12">
                                <div class="text-start">
                                    <p class="pt-2 fw-semibold">Repair Step Analyst</p>
                                    <p style="font-size: 11px;">We are looking for figma designers who can help
                                        desiging the entire mobile application...</p>
                                </div>
                            </div>
                            <div class="col-1">
                                <i class="bi bi-bookmark float-end me-3 fs-5"></i>
                            </div>
                        </div>
                        <div class="row ms-2">
                            <div class="buttons-group">
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">UI
                                    Designer</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Figma</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">Landing
                                    Page</a>
                            </div>
                        </div>
                        <div class="row mx-2 mt-2">
                            <div class="col">
                                <p>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo '<i class="bi bi-star-fill" style="color: yellow;"></i>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="col-5">
                                <p style="font-size: 11px;"><i class="bi bi-patch-check-fill"
                                        style="color: #5776dc"></i> Apps Verified</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col mb-3">
                <div class="col mb-3">
                    <div class="card card-detail">
                        <div class="card-body d-flex justify-content-center">
                            <a type="button" class="btn btn-dark px-2 btn-lg"
                                style="font-size: 11px;">Descriptions</a>
                            <a type="button" class="btn px-3 btn-lg" data-bs-toggle="button"
                                style="font-size: 11px;">Featured</a>
                            <a type="button" class="btn px-3 btn-lg" data-bs-toggle="button"
                                style="font-size: 11px;">Most Recent</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-detail">
                        <div class="row mt-2">
                            <div class="col-3 g-col-2 me-0">
                                <img src="https://s3-alpha.figma.com/hub/file/2815952264/7a5ebfb0-0508-48ab-be9a-31b36ba53f97-cover.png"
                                    class="rounded ms-2 mt-2" alt="..." width="100" height="100">
                            </div>
                            <div class="col-7 g-col-12 ms-1">
                                <div class="text-start mt-3">
                                    <p class="fw-semibold">ELITE LIMITED</p>
                                    <h6>Repair Step Analyst</h6>
                                </div>
                            </div>
                            <div class="col-1 mt-3">
                                <i class="bi bi-bookmark float-end me-3 fs-5"></i>
                            </div>
                        </div>
                        <div class="row mx-2 mt-3">
                            <h6>Apps Overview</h6>
                            <p style="font-size: 10px;">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type
                                specimen book. It has survived not only five centuries, but also the leap into
                                electronic typesetting, remaining essentially unchanged. It was popularised in
                                the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                                and more recently with desktop publishing software like Aldus PageMaker including
                                versions of Lorem Ipsum.</p>
                        </div>
                        <div class="row m-2">
                            <h6>Dept</h6>
                            <div class="buttons-group">
                                <a type="button" class="btn btn-light btn-lg" style="font-size: 11px;">UI
                                    Designer</a>
                                <a type="button" class="btn btn-light btn-lg" style="font-size: 11px;">Figma</a>
                                <a type="button" class="btn btn-light btn-lg" style="font-size: 11px;">Landing
                                    Page</a>
                            </div>
                        </div>
                        <div class="row mx-2 mt-4">
                            <div class="col-5">
                                <h6>Detail Apps</h6>
                                <p class="pt-2">5.00 of 48 reviews <br>
                                    <?php
                                    for ($i = 0; $i < 5; $i++) {
                                        echo '<i class="bi bi-star-fill" style="color: yellow;"></i>';
                                    }
                                    ?>
                                </p>
                            </div>
                            <div class="col-5">
                                <h6>Status Apps</h6>
                                <p class="pt-2"><i class="bi bi-patch-check-fill" style="color: #5776dc"></i> Apps
                                    Verified</p>
                            </div>
                        </div>
                        <div class="row mx-2 my-4">
                            <div class="col-7">
                                <div class="input-group">
                                    <input class="form-control form-control-sm" type="text"
                                        value="https://ltdp.kalbe.site" aria-label="default input example">
                                    <span class="input-group-text">
                                        <i class="bi bi-copy" style="cursor: pointer;"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-2 ">
                                <button type="button" class="btn btn-primary ms-3 rounded-1"
                                    style="background-color: #1DB75A; color: #fff; font-size: 12px; height: 38px;">Primary</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="col mb-3">
                    <div class="card card-profile">
                        <div class="card-body text-center" style="font-size: 14px">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQTSKbCFe_QYSVH-4FpaszXvakr2Eti9eAJpQ&s"
                                class="rounded-circle mx-auto d-block" alt="..." width="50" height="50">
                            <h6 class="pt-2">Laura Sivallian</h6>
                            <p class="fw-light">Author Apps</p>
                        </div>
                        <a href="#" type="button" class="btn btn-light m-2">Light</a>
                    </div>
                </div>
                <div class="col">
                    <div class="card card-profile">
                        <div class="card-body text-start card-profile" style="font-size: 14px">
                            <h6 class="pt-2">Kalbe Farma Tbk</h6>
                            <div class="container rounded-pill"
                                style="background-color: #1DB75A; color: #fff; font-size: 10px;">
                                <p class="p-1 text-center">🔥 Pasti Kelas Dunia - BO Cikarang</p>
                            </div>
                            <div class="row">
                                <h6>Skills and Expertise</h6>
                                <div class="col card-profile">
                                    <?php
                                    for ($i = 0; $i < 10; $i++) {
                                        echo '<button type="button" class="btn btn-light btn-lg my-1 mx-3" style="font-size: 11px;">Light</button>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
