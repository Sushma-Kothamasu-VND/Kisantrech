<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            KisanTech
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPrediction" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Prediction
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownPrediction">
                        <a class="dropdown-item" href="crop_prediction.php">Crop Prediction</a>
                        <a class="dropdown-item" href="crop_price_prediction.php">Crop Price Prediction</a>
                        <a class="dropdown-item" href="rainfall_prediction.php">Rainfall Prediction</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownRecommendation" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Recommendation
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownRecommendation">
                        <a class="dropdown-item" href="crop_recommendation.php">Crop Recommendation</a>
                        <a class="dropdown-item" href="fertilizer_recommendation.php">Fertilizer Recommendation</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar-dark .navbar-nav .nav-link {
    color: rgba(255, 255, 255, 0.75);
}

.navbar-dark .navbar-nav .nav-link:hover, 
.navbar-dark .navbar-nav .nav-link:focus {
    color: #ffffff;
}

.navbar-dark .navbar-brand {
    color: #ffffff;
    font-weight: 700;
}

.navbar-dark .navbar-toggler {
    border-color: rgba(255, 255, 255, 0.1);
}

.navbar-dark .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
}

.dropdown-menu {
    background-color: #343a40;
    border: none;
}

.dropdown-item {
    color: rgba(255, 255, 255, 0.75);
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: #495057;
    color: #ffffff;
}

@media (max-width: 991px) {
    .navbar-collapse {
        background-color: #343a40;
    }
}
</style>

<script>
$(document).ready(function() {
    $('#navbarNav .nav-link').each(function() {
        if (this.href === window.location.href) {
            $(this).addClass('active');
        }
    });
});
</script>

