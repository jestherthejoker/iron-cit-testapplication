<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Iron Software | IRONPDF for C++</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    </head>
    <body>
        <?php include('_components/_main_nav.php');  ?>

        <div ref="is-topbanner" class="is-topbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <img class="is-ipdfcpp-logo" src="<?php echo $headerImage; ?>" />
                        <p class="head-line"><?php echo $bannerHeader; ?></p>
                        <h1 class="tagline-1"><?php echo $bannerTagline1; ?></h1>
                        <h2 class="tagline-2"><?php echo $bannerTagline2; ?></h2>
                    </div>
                    <div class="col-md-4">
                        <span class="is-ipdf">
                            <img class="is-page" src="assets/image/icon-page.svg" />
                            <img class="is-cpp" src="assets/image/icon-cpp.svg" />
                        </span>
                    </div>
                </div>

                <p class="comingsoon"><?php echo $bannerStatement; ?></p>
            </div>

            <!-- Displaying the Logo element in svg form to float on top right of the page  -->
            <img class="is-emblem-illu" src="<?php echo $ironSoftwareImage; ?>" />
        </div>


        <div ref="is-subscription" class="is-subscription">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <p class="area-headline"><?php echo $beTheFirstHeader; ?></p>
                        <p class="area-headline-sub"><?php echo $beTheFirstHeaderSub; ?></p>

                        <div class="input-group mb-3 subscription-input">
                            <input type="email" class="form-control" placeholder="Email email address" aria-label="Email email address" aria-describedby="is-subscription-btn">
                            <button class="btn btn-outline-secondary" type="button" id="is-subscription-btn">Sign up now</button>
                        </div>
                    </div>
                </div>

                <p class="subs-info"><span class="badge"># Coming Soon</span> IronPDF Beta Program also coming soon for <span class="bold">Python</span> | <span class="bold">NodeJs</span> | <span class="bold">Java</span></p>
            </div>
        </div>

        <div ref="is-info1" class="is-info1">
            <div class="container text-center">
                <h2>
                    <span class="image-badge">
                        IronPDF for C++
                        <img class="" src="assets/image/coming-soonbadge.svg" />
                    </span>
                </h2>
                <ul class="list-inline">
                    <?php
                        foreach ( $ironPDFFeature as $feature)
                            echo '<li class="list-inline-item"><span>#</span> ' . $feature . '</li>';
                    ?>
                </ul>
            </div>
        </div>

        <div ref="is-info2" class="is-info2">
            <div class="container">
                <?php
                foreach ( $ironPDFDescription as $description)
                    echo '<p> ' . $description . '</p>';
                ?>
            </div>
            <div class="backelement-info2"></div>
        </div>

        <div ref="is-info3" class="is-info3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <img class="" src="assets/image/html-to-pdf.svg" />
                        <dv class="bg-element"></dv>
                    </div>
                    <div class="col-md-6 col-lg-9">
                        <h3><?php echo $ironPDFDescriptionl ?>></h3>
                        <?php
                        foreach ( $whyIronPDFDescription as $whyDescription)
                            echo '<p> ' . $whyDescription . '</p>';
                        ?>
                    </div>
                </div>
            </div>

        </div>

        <div ref="is-info4" class="is-info4">
            <div class="container">
                <h3><?php echo $easyIronPDF ?>></h3>
                <?php
                foreach ( $easyIronPDFDesc as $easyDescription)
                    echo '<p> ' . $easyDescription . '</p>';
                ?>

                <div class="row ipdf-release-card row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card active h-100">
                            <div class="card-body row">
                                <div class="col-md-12 col-lg-6 text-center">
                                    <span class="badge active"># Released</span>
                                </div>
                                <div class="col-md-12 col-lg-6 is-serv">
                                    <span class="text-uppercase serv"><span class="bold">IRON</span>PDF</span>
                                    <span class="desc">for Java</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body row">
                                <div class="col-md-12 col-lg-6 text-center">
                                    <span class="badge"># Coming Soon</span>
                                </div>
                                <div class="col-md-12 col-lg-6 is-serv">
                                    <span class="text-uppercase serv"><span class="bold">IRON</span>PDF</span>
                                    <span class="desc">for Python</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body row">
                                <div class="col-md-12 col-lg-6 text-center">
                                    <span class="badge"># Coming Soon</span>
                                </div>
                                <div class="col-md-12 col-lg-6 is-serv">
                                    <span class="text-uppercase serv"><span class="bold">IRON</span>PDF</span>
                                    <span class="desc">for NodeJs</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="backelement"></div>

            </div>
        </div>

        <div ref="is-subscription-bottom" class="is-subscription-bottom">
            <div class="container text-center">
                <div class="row justify-content-md-center">
                    <div class="col col-lg-7">
                        <h4>Sign up for our <span class="highlight">Beta Program</span></h4>
                        <div class="input-group subscription-input mb-3">
                            <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="is-subscription-btn">
                            <button class="btn btn-outline-secondary" type="button" id="is-subscription-btn">Sign up now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include ('_components/_js_files.php'); ?>
    </body>
</html>