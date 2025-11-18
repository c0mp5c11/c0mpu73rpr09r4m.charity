<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nonprofit Public Benefit Computer Program (Software Development, Computer Programming) Charity Corporation based in Rancho Cordova, Sacramento County, California, United States of America, owned by Daniel Ohm">
    <meta name="robots" content="all">
    <title><?= $title ? $title . ' - ' : '' ?>c0mpu73rpr09r4m.charity</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/css/site.css" />
    <?php if (!empty($_SERVER['SUCCESS_MESSAGE'])) { ?>
        <div class="alert alert-success">
            <?= $_SERVER['SUCCESS_MESSAGE'] ?>
        </div>
    <?php } ?>
    <?= (new DateTime() >= new DateTime('December 21') && new DateTime() <= new DateTime('March 20')) ? '<link rel="stylesheet" href="/css/season-winter.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('March 21') && new DateTime() <= new DateTime('June 21')) ? '<link rel="stylesheet" href="/css/season-spring.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('June 21') && new DateTime() <= new DateTime('September 22')) ? '<link rel="stylesheet" href="/css/season-summmer.css" />' : ''; ?>
    <?= (new DateTime() >= new DateTime('September 22') && new DateTime() <= new DateTime('December 21')) ? '<link rel="stylesheet" href="/css/season-autumn.css" />' : ''; ?>
</head>
<body>
    <?php if (!empty($_SERVER['SUCCESS_MESSAGE'])) { ?>
        <div class="alert alert-success">
            <?= $_SERVER['SUCCESS_MESSAGE'] ?>
        </div>
    <?php } ?>
    
    <?php if (!empty($_SERVER['ERROR_MESSAGE'])) { ?>
        <div class="alert alert-danger">
            <?= $_SERVER['ERROR_MESSAGE'] ?>
        </div>
    <?php } ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col d-flex align-items-center">
                <a href="/" class="text-decoration-none me-2">
                    <img src="/images/logo.png" class="img-fluid h-100 w-auto logo" alt="C0MPU73R PR09R4M CHARITY" />
                </a>
                <h1 class="logo-title mt-4">C0MPU73R PR09R4M CHARITY</h1>
            </div>
        </div>
    </div>
    <hr />
    <main role="main" class="pb-3">
        <div class="container">
            <?= $content ?? '' ?>
        </div>
    </main>
    <footer class="border-top footer text-muted">
        <div class="container">
            <div class="row">
                <div class="col-6"> &copy; <?= date('Y') ?> - C0MPU73R PR09R4M CHARITY</div>
                <div class="col-6 d-flex flex-column justify-content-end theme text-end"></div>
            </div>
        </div>
    </footer>
    <script type="text/javascript" src="/lib/jquery.min.js"></script>
    <script type="text/javascript" src="/lib/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/lib/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/lib/jquery.validate.unobtrusive.min.js"></script>
    <script type="text/javascript" src="/lib/site.js"></script>
    <?= $scripts ?? '' ?>
</body>
</html>
