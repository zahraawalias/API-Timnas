<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: "Poppins", sans-serif;
            background-color: #EFEFEF;
        }

        .card-sider {
            width: 394px;
        }

        @media (max-width: 576px) {
            .card {
                width: 100%;
            }

            .buttons-group a {
                font-size: 10px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white custom-navbar">
        <div class="container navbar-container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img src="{{ asset('assets/images/user/avatar-1.jpg') }}" class="rounded float-start" alt="...">
            <div class="collapse navbar-collapse justify-content-center fw-medium" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
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
    <div class="main-container m-3">
        <div class="row" style="margin-top: 5rem;">
            <?php $cards = [1, 2, 3, 4, 5, 6]; ?>
            @foreach ($cards as $card)
                <div class="col-md-4">
                    <div class="card card-sider">
                        <div class="row pt-2">
                            <div class="col-2 g-col-1 me-3">
                                <img src="https://s3-alpha.figma.com/hub/file/2815952264/7a5ebfb0-0508-48ab-be9a-31b36ba53f97-cover.png"
                                    class="rounded float-start ms-2 mt-2" alt="..." width="70" height="70">
                            </div>
                            <div class="col-8 g-col-8 me-1">
                                <div class="text-start">
                                    <p class="pt-2 fw-semibold">LTDP Monitoring System</p>
                                    <p style="font-size: 11px;">We are looking for figma designers who can help
                                        designing the entire mobile application...</p>
                                </div>
                            </div>
                            <div class="col-1 g-col-1">
                                <i class="bi bi-bookmark float-end me-1 fs-5"></i>
                            </div>
                        </div>
                        <div class="row ms-2">
                            <div class="buttons-group g-col-5">
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">MSTD</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">QA</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">IT Pharma</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">ENG</a>
                                <a type="button" class="btn btn-light btn-sm" style="font-size: 11px;">LAINNYA</a>
                            </div>
                        </div>
                        <div class="row mx-2 mt-2">
                            <div class="col">
                                <p>
                                    <?php for ($i = 0; $i < 5; $i++) {
                                        echo '<i class="bi bi-star-fill" style="color: yellow;"></i>';
                                    } ?>
                                </p>
                            </div>
                            <div class="col">
                                <p style="font-size: 11px;"><i class="bi bi-patch-check-fill"
                                        style="color: #5776dc"></i> Apps Verified</p>
                            </div>
                            <div class="col">
                                <p style="font-size: 11px;">
                                    <strong>Last Views:</strong> 13124x
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- SCRIPT JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
