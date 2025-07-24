
<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

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
                    <h2 class="text-white mb-4">Crop Prediction System</h2>
                    <p class="lead text-white">Our crop prediction system leverages machine learning algorithm and historical data to suggest you the best crop that you can sow for getting the maximum yield based on the season.</p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-8 mx-auto">
                    <div class="card bg-light shadow-lg border-0">
                        <div class="card-body">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select onchange="print_city('state', this.selectedIndex);" id="sts" name="stt" class="form-control">
                                                <option value="">Select State</option>
                                                <!-- Options dynamically filled via JavaScript -->
                                            </select>
                                            <script language="javascript">print_state("sts");</script>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select id="state" name="district" class="form-control">
                                                <option value="">Select District</option>
                                                <!-- Options dynamically filled via JavaScript -->
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="Season" class="form-control">
                                                <option value="">Select Season</option>
                                                <option value="Kharif">Kharif</option>
                                                <option value="Whole Year">Whole Year</option>
                                                <option value="Autumn">Autumn</option>
                                                <option value="Rabi">Rabi</option>
                                                <option value="Summer">Summer</option>
                                                <option value="Winter">Winter</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" name="Crop_Predict" class="btn btn-primary">Predict</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
					<h4>
                     <?php
					 if(isset($_POST['Crop_Predict'])){
                     $state=trim($_POST['stt']);
                    $district=trim($_POST['district']);
                    $season=trim($_POST['Season']);

                     echo "Crops grown in ".$district." during the ".$season." season are :- ";

                    $JsonState=json_encode($state);
                    $JsonDistrict=json_encode($district);
                    $JsonSeason=json_encode($season);
                    $command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
                    $output = passthru($command);
                    echo $output; 
}
?>
   </h4>
 
                </div>
            </div>
        </div>
    </section>

    <?php require("footer.php"); ?>

</body>

</html>
