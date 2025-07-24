<!DOCTYPE html>
<html>
<?php include ('header.php'); ?>

<body class="bg-white" id="top">

<?php include ('nav.php'); ?>

<style>
    /* General styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #e0f7fa; /* Light cyan background */
        color: #333;
        min-height: 100vh; /* Ensures background covers full height */
        display: flex;
        flex-direction: column;
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    .container-fluid {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
        flex: 1; /* Ensures it takes the remaining space */
    }

    /* Section styles */
    .section {
        padding: 60px 0;
    }

    .section-shaped {
        position: relative;
        overflow: hidden;
        background-color: #00796b; /* Teal background for the section */
        color: #ffffff; /* White text for contrast */
        min-height: 100vh; /* Ensures background covers full height */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .shape-style-1 {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        height: 100%;
        opacity: .1;
    }

    .shape-style-1 span {
        display: block;
        position: absolute;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.15);
    }

    .shape-primary {
        background: #007bff;
    }

    .shape-primary span:nth-child(1) { top: 20px; left: 10%; }
    .shape-primary span:nth-child(2) { top: 60px; left: 20%; }
    .shape-primary span:nth-child(3) { top: 100px; left: 30%; }
    .shape-primary span:nth-child(4) { top: 140px; left: 40%; }
    .shape-primary span:nth-child(5) { top: 180px; left: 50%; }
    .shape-primary span:nth-child(6) { top: 220px; left: 60%; }
    .shape-primary span:nth-child(7) { top: 260px; left: 70%; }
    .shape-primary span:nth-child(8) { top: 300px; left: 80%; }
    .shape-primary span:nth-child(9) { top: 340px; left: 90%; }
    .shape-primary span:nth-child(10) { top: 380px; left: 100%; }

    /* Table styles */
    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529;
        background-color: #fff;
    }

    .table th,
    .table td {
        padding: .75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }

    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6;
    }

    .table tbody + tbody {
        border-top: 2px solid #dee2e6;
    }

    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075);
    }

    /* Card styles */
    .card {
        border: 1px solid #ddd;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 1.5rem;
    }

    .card-header {
        background-color: #f7f7f9;
        border-bottom: 1px solid #ddd;
        padding: .75rem 1.25rem;
        border-radius: 5px 5px 0 0;
    }

    .card-body {
        padding: 1.25rem;
    }

    /* Buttons */
    .btn {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: .25rem;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0056b3;
        border-color: #004085;
    }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745;
    }

    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00;
    }

    /* Footer */
    footer {
        background: #333;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }
</style>

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
        <span></span>
        <span></span>
    </div>

        <div class="row row-content">
            <div class="col-md-12 mb-3">

                <div class="card text-white bg-gradient-success mb-3">
                    <form role="form" action="#" method="post">
                        <div class="card-header">
                            <span class="text-info display-4" style="padding-top: 60px;"> Crop Recommendation </span>
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
                                        <th><center>PH</center></th>
                                        <th><center>Rainfall</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='n' placeholder="Nitrogen Eg:90" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='p' placeholder="Phosphorus Eg:42" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='k' placeholder="Potassium Eg:43" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='t' step=0.01 placeholder="Temperature Eg:21" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='h' step=0.01 placeholder="Humidity Eg:82" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='ph' step=0.01 placeholder="PH Eg:6.5" required class="form-control">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type='number' name='r' step=0.01 placeholder="Rainfall Eg:203" required class="form-control">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center">
                                <button type="submit" value="Recommend" name="Crop_Recommend" class="btn btn-warning btn-submit mt-3">SUBMIT</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card text-white bg-gradient-success mb-3">
                    <div class="card-header">
                        <span class="text-success display-4"> Result </span>
                    </div>

                    <h4>
                        <?php 
                        if(isset($_POST['Crop_Recommend'])){
                            $n=trim($_POST['n']);
                            $p=trim($_POST['p']);
                            $k=trim($_POST['k']);
                            $t=trim($_POST['t']);
                            $h=trim($_POST['h']);
                            $ph=trim($_POST['ph']);
                            $r=trim($_POST['r']);

                            echo "Recommended Crop is : ";

                            $Jsonn=json_encode($n);
                            $Jsonp=json_encode($p);
                            $Jsonk=json_encode($k);
                            $Jsont=json_encode($t);
                            $Jsonh=json_encode($h);
                            $Jsonph=json_encode($ph);
                            $Jsonr=json_encode($r);

                            $command = escapeshellcmd("python ML/crop_recommendation/recommend.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonph $Jsonr ");
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
