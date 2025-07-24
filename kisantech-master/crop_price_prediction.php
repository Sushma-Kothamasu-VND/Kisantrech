<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Price Prediction</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f06, #48f);
            color: #fff;
            margin: 0;
            padding: 0;
        }
        .section-shaped {
            position: relative;
            overflow: hidden;
            padding: 50px 0;
        }
        .shape-style-1 {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background: rgba(0, 0, 0, 0.3);
        }
        .shape-style-1 span {
            display: block;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.15);
            margin: 20px;
            border-radius: 50%;
        }
        .container-fluid {
            position: relative;
            z-index: 2;
        }
        .card {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card-header .text-info {
            color: #17a2b8;
        }
        .btn-submit {
            background-color: #ff9800;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .btn-submit:hover {
            background-color: #e68a00;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .form-group select {
            background-color: #fff;
            color: #333;
        }
        .badge-pill {
            background-color: #dc3545;
            padding: 10px 20px;
            font-size: 18px;
        }
        .table {
            width: 100%;
            margin-bottom: 20px;
        }
        .table th,
        .table td {
            padding: 15px;
            vertical-align: middle;
        }
        .table th {
            background-color: #343a40;
            color: #fff;
        }
        .table td {
            background-color: #fff;
            color: #333;
        }
    </style>
</head>

<?php include('header.php'); ?>

<body class="bg-white" id="top">

    <?php include('nav.php'); ?>

    <section class="section section-shaped section-lg">
        <div class="shape shape-style-1 shape-primary">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>

        

            <div class="row row-content">
                <div class="col-md-12 mb-3">
                    <div class="card text-dark bg-gradient-light mb-3">
                        <div class="card-header">
                            <span class="text-info display-4"> Crop Price Prediction </span>
                            <span class="pull-right">
                                <button type="submit" value="Predict" name="Predict_Price" class="btn btn-warning btn-submit">SUBMIT</button>
                            </span>
                        </div>
                        <div class="card-body">
                            <p>Enter the details below to predict the price of various crops based on the given parameters.</p>
                            <form role="form" action="#" method="post">  
                                <table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
                                    <thead>
                                        <tr class="font-weight-bold text-default">
                                            <th><center>Crop</center></th>
                                            <th><center>Year</center></th>
                                            <th><center>Month</center></th>
                                            <th><center>Rainfall</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <div class="form-group">
                                                    <select name="crop" class="form-control" required>
                                                        <option value="">Select Crop</option>
                                                        <option value="Maize">Maize</option>
                                                        <option value="Paddy">Paddy</option>
                                                        <option value="Soyabean">Soyabean</option>
                                                        <option value="Wheat">Wheat</option>
                                                        <option value="Jute">Jute</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="year" placeholder="Year Eg:2023" required class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="month" placeholder="Month Eg:6" required class="form-control">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="rainfall" placeholder="Rainfall Eg:50.5" required class="form-control">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                    </div>

                    <div class="card text-dark bg-gradient-light mb-3">
                        <div class="card-header">
                            <span class="text-success display-4"> Result </span>                    
                        </div>

                        <div class="card-body">
                            <h4>
                                <?php 
                                if(isset($_POST['Predict_Price'])){
                                    $crop = trim($_POST['crop']);
                                    $year = trim($_POST['year']);
                                    $month = trim($_POST['month']);
                                    $rainfall = trim($_POST['rainfall']);

                                    $price = 0;

                                    if ($crop == 'Maize') {
                                        if ($rainfall > 40) {
                                            $price = 100.1;
                                        } else {
                                            $price = 90.1;
                                        }
                                    } elseif ($crop == 'Paddy') {
                                        if ($rainfall > 40) {
                                            $price = 150.1;
                                        } else {
                                            $price = 140.1;
                                        }
                                    } elseif ($crop == 'Soyabean') {
                                        if ($rainfall > 40) {
                                            $price = 200.1;
                                        } else {
                                            $price = 190.1;
                                        }
                                    } elseif ($crop == 'Wheat') {
                                        if ($rainfall > 40) {
                                            $price = 250.1;
                                        } else {
                                            $price = 240.1;
                                        }
                                    } elseif ($crop == 'Jute') {
                                        if ($rainfall > 40) {
                                            $price = 300.1;
                                        } else {
                                            $price = 290.1;
                                        }
                                    }

                                    echo "Predicted Price: $".$price;                    
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
