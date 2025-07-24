<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rainfall Prediction</title>
    <!-- Link to your external CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>

<body class="bg-light">

    <?php include('nav.php'); ?>

    <section class="section section-shaped">
        <div class="shape shape-style-1 shape-primary">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mb-4">Rainfall Prediction System</h2>
                    <p class="lead text-white">Our Rainfall Prediction System is designed with farmers in mind. By analyzing historical weather data, satellite imagery, and local climate patterns, our system provides accurate rainfall forecasts. 
                    With our user-friendly interface, you can plan irrigation schedules, protect crops, and make informed decisions. Stay ahead of the weather curve and cultivate success with our reliable rainfall predictions.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-light shadow-lg border-0">
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select id="region-select" name="region" class="form-control" required>
                                                <option value="">Select Region</option>
                                                <!-- Options dynamically filled via JavaScript -->
                                            </select>
                                            <script language="javascript">print_region("region-select");</script>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <select id="month-select" name="month" class="form-control" required>
                                                <option value="">Select Month</option>
                                                <!-- Options dynamically filled via JavaScript -->
                                            </select>
                                            <script language="javascript">print_months("month-select");</script>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" value="Yield" name="Rainfall_Predict" class="btn btn-primary">Predict</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card bg-light shadow-lg border-0 mt-3">
                        <div class="card-header text-center">
                            <h4 class="text-success">Result</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center">
                                <?php
                                if (isset($_POST['Rainfall_Predict'])) {
                                    $region = trim($_POST['region']);
                                    $month = trim($_POST['month']);

                                    echo "Predicted Rainfall for the Region $region in the month $month is (in mm): ";

                                    $Jregion = json_encode($region);
                                    $Jmonth = json_encode($month);

                                    $command = escapeshellcmd("python ML/rainfall_prediction/rainfall_prediction.py $Jregion $Jmonth");
                                    $output = passthru($command);
                                    echo $output;
                                }
                                ?>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require("footer.php"); ?>

</body>

</html>

