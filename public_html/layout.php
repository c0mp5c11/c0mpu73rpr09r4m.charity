<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Nonprofit Public Benefit Computer Program (Software Development, Computer Programming) Charity Corporation based in Rancho Cordova, Sacramento County, California, United States of America (USA), owned by Daniel Ohm">
    <meta name="robots" content="all">
    <meta name="author" content="Daniel Ohm, C0MPU73R PR09R4M CHARITY">
    <title><?= $title ? $title . ' - ' : '' ?>c0mpu73rpr09r4m.charity</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="/css/site.css" />
    <?php if (!empty($_SERVER['SUCCESS_MESSAGE'])) { ?>
        <div class="alert alert-success">
            <?= $_SERVER['SUCCESS_MESSAGE'] ?>
        </div>
    <?php } ?>
    <?php
        $today = new DateTime();
        $monthDay = $today->format('m-d');
    ?>
    <?php if ($monthDay >= '12-21' || $monthDay <= '03-20'): ?>
        <link rel="stylesheet" href="/css/season-winter.css" />
    <?php elseif ($monthDay >= '03-21' && $monthDay <= '06-21'): ?>
        <link rel="stylesheet" href="/css/season-spring.css" />
    <?php elseif ($monthDay >= '06-22' && $monthDay <= '09-22'): ?>
        <link rel="stylesheet" href="/css/season-summer.css" />
    <?php elseif ($monthDay >= '09-23' && $monthDay <= '12-20'): ?>
        <link rel="stylesheet" href="/css/season-autumn.css" />
    <?php endif; ?>
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
    <nav class="navbar navbar-expand-sm navbar-light bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">C0MPU73R PR09R4M CHARITY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/test') === 0) ? 'active' : ''; ?>" href="/test">Test</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php echo (strpos($_SERVER['REQUEST_URI'], '/software') === 0) ? 'active' : ''; ?>" href="/software">Software</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mailto:email@c0mpu73rpr09r4m.charity">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/c0mp5c11" target="_blank">Github</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
