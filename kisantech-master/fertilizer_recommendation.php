
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fertilizer Recommendation</title>
    <style>
        /* General Body Styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            line-height: 1.6;
        }

        /* Header and Navigation Styling */
        header, nav {
            background-color: #343a40;
            color: #fff;
        }

        /* Section Styling */
        .section {
            padding: 60px 0;
        }

        .shape-primary {
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%);
        }

        /* Card Styling */
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .card-header {
            background-color: #4caf50;
            color: white;
            padding: 20px;
            border-radius: 8px 8px 0 0;
        }

        .card-body {
            padding: 20px;
            background-color: #fff;
            border-radius: 0 0 8px 8px;
        }

        .card .form-control {
            border: 2px solid #4caf50;
            border-radius: 4px;
            padding: 10px;
        }

        .btn-submit {
            background-color: #ff9800;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-submit:hover {
            background-color: #e68900;
        }

        /* Table Styling */
        table.table {
            margin-bottom: 0;
        }

        table.table th, table.table td {
            vertical-align: middle;
            padding: 15px;
        }

        /* Result Card Styling */
        .bg-gradient-success {
            background: linear-gradient(45deg, #4caf50 0%, #81c784 100%);
        }

        .text-default {
            color: #6c757d !important;
        }

        /* Badge Styling */
        .badge-danger {
            background-color: #e53935;
            color: white;
        }

        /* Additional Styles */
        .display-4 {
            font-size: 2.5rem;
            font-weight: 300;
        }

        .mb-3 {
            margin-bottom: 1rem !important;
        }

        .text-center {
            text-align: center !important;
        }

        .text-info {
            color: #17a2b8 !important;
        }

        .text-success {
            color: #28a745 !important;
        }

        .text-white {
            color: #fff !important;
        }

        .text-dark {
            color: #343a40 !important;
        }

        .pull-right {
            float: right;
        }

        .container-fluid {
            max-width: 1140px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-white" id="top">

    <?php include('header.php'); ?>
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
            <span></span>
            <span></span>
        </div>


            <div class="row row-content">
                <div class="col-md-12 mb-3">

                    <div class="card text-white bg-gradient-success mb-3">
                        <form role="form" action="#" method="post">  
                            <div class="card-header">
                                <span class="text-info display-4"> Fertilizer Recommendation  </span>
                                <span class="pull-right">
                                    <button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-warning btn-submit">SUBMIT</button>
                                </span>		
                            </div>

                            <div class="card-body text-dark">
                                <table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">
                                    <thead>
                                        <tr class="font-weight-bold text-default">
                                            <th><center>Nitrogen</center></th>
                                            <th><center>Phosphorus</center></th>
                                            <th><center>Potassium</center></th>
                                            <th><center>Temperature</center></th>
                                            <th><center>Humidity</center></th>
                                            <th><center>Soil Moisture</center></th>
                                            <th><center>Soil Type</center></th>
                                            <th><center>Crop</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="n" placeholder="Nitrogen Eg:37" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="p" placeholder="Phosphorus Eg:0" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="k" placeholder="Potassium Eg:0" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="t" placeholder="Temperature Eg:26" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="h" placeholder="Humidity Eg:52" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <input type="number" name="soilMoisture" placeholder="Soil Moisture Eg:38" required class="form-control">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select name="soil" class="form-control">
                                                        <option value="">Select Soil Type</option>
                                                        <option value="Sandy">Sandy</option>
                                                        <option value="Loamy">Loamy</option>
                                                        <option value="Black">Black</option>
                                                        <option value="Red">Red</option>
                                                        <option value="Clayey">Clayey</option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <select name="crop" class="form-control">
                                                        <option value="">Select Crop</option>
                                                        <option value="Maize">Maize</option>
                                                        <option value="Sugarcane">Sugarcane</option>
                                                        <option value="Cotton">Cotton</option>
                                                        <option value="Tobacco">Tobacco</option>
                                                        <option value="Paddy">Paddy</option>
                                                        <option value="Barley">Barley</option>
                                                        <option value="Wheat">Wheat</option>
                                                        <option value="Millets">Millets</option>
                                                        <option value="Oil seeds">Oil seeds</option>
                                                        <option value="Pulses">Pulses</option>
                                                        <option value="Ground Nuts">Ground Nuts</option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>

                    <div class="card text-white bg-gradient-success mb-3">
                        <div class="card-header">
                            <span class="text-success display-4"> Result  </span>					
                        </div>

                        <h4>
                            <?php 
                            if(isset($_POST['Fert_Recommend'])){
                                $n=trim($_POST['n']);
                                $p=trim($_POST['p']);
                                $k=trim($_POST['k']);
                                $t=trim($_POST['t']);
                                $h=trim($_POST['h']);
                                $sm=trim($_POST['soilMoisture']);
                                $soil=trim($_POST['soil']);
                                $crop=trim($_POST['crop']);

                                echo "Recommended Fertilizer is : ";

                                $Jsonn=json_encode($n);
                                $Jsonp=json_encode($p);
                                $Jsonk=json_encode($k);
                                $Jsont=json_encode($t);
                                $Jsonh=json_encode($h);
                                $Jsonsm=json_encode($sm);
                                $Jsonsoil=json_encode($soil);
                                $Jsoncrop=json_encode($crop);

                                $command = escapeshellcmd("python ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
                                $output = passthru($command);
                                echo $output;					
                            }
                            ?>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php require("footer.php"); ?>

</body>
</html>
