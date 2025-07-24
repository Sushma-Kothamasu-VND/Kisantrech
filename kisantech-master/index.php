
<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>

<body class="bg-light" id="top">

<?php include ('nav.php'); ?>

<div class="wrapper">

    <div class="wrapper">
        <header class="jumbotron bg-gradient-primary text-white text-center">
            <div class="container">
                <div class="row row-header">
                    <div class="col-12">
                        <h1>Smart Agriculture Management System</h1>
                        <p>Developed as a part of Prasunethon -2024</p>
                        <link rel="stylesheet" href="styles.css">
                        <p>Our system aims to empower farmers by providing intelligent and data-driven insights. By offering recommendations for crops and fertilizers, predicting crop prices, and forecasting rainfall, the system helps farmers make informed decisions, optimize resources, and improve crop yield and profitability.</p>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->

        <div class="section features-2 text-dark bg-white py-5" id="features">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 text-center mb-5">
                        <h3 class="display-4">Features</h3>
                        <p class="lead">The time is now for the next step in farming. We bring you the future of farming along with great tools for assisting the farmers.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 mb-4 text-center">
                        <a href="crop_prediction.php">
                            <img src="assets/img/crop_prediction.jpg" alt="Crop Prediction" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                            <h6>Crop Prediction and Recommendation</h6>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 text-center">
                        <a href="fertilizer_recommendation.php">
                            <img src="assets/img/fertilizer_recommendation.jpg" alt="Fertilizer Recommendation" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                            <h6>Fertilizer Recommendation</h6>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 text-center">
                        <a href="crop_price_prediction.php">
                            <img src="assets/img/crop_price_prediction.webp" alt="Crop Price Prediction" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                            <h6>Crop Price Prediction</h6>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 mb-4 text-center">
                        <a href="rainfall_prediction.php">
                            <img src="assets/img/rainfall_prediction.avif" alt="Rainfall Prediction" class="img-fluid rounded-circle mb-3" style="width: 150px; height: 150px;">
                            <h6>Rainfall Prediction</h6>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <?php require("footer.php"); ?>

    </div>

</body>
</html>
