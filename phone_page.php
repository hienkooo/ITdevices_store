<?php
session_start();
if(isset($_POST['check'])){
    $_SESSION['laptop'] = $_POST['check'];
    $lap = $_SESSION['laptop'];
    foreach($lap as $i){
        echo $i;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laptops</title>
    <?php
    include('navbar.html');
    ?>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fullwidth">
        <div class="row">
    <div class="card-group">
    <div class="card">
        <img class="card-img-top" id="bigsize" src="IpadAir.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">I-pad Air($155)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="Ipad_air" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="Iphone8.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">I-phone 8($400)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="Iphone8" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="iphoneX.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Chrome Elite($345)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="iphoneX" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="RedmiNote8.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">RedmiNote8($400)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="RedmiNote8" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="RemiNote9S.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">RedmiNote9S($500)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="RemiNote9S" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    
    </div>
    <div class="row">
    <div class="card-group">
    <div class="card">
        <img class="card-img-top" id="bigsize" src="SamSaung Note9.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">SamSaung Note9($1000)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="SamSaung Note9" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="SamsungA20.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">SamsungA20($400)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="SamsungA20" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="SamsungTabletS4.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">SamsungTabletS4($300)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="SamsungTabletS4" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="IpadAir2.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">IpadAir2($1500)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="IpadAir2   " class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="IpadRenew.jpg" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">IpadRenew($900)</h5>
            <p class="card-text">High Performance Dual Core Porcessor.</p>
            <p class="card-text"><small class="text-muted">In-Stock only 3 devices.</small></p>
            <div class="text-right">
                <button type="button" name="check1[]" value="IpadRenew" class="btn btn-primary">Add to cart</button>
            </div>
        </div>
    </div>
    
    </div>
</div>
    
    
</body>
</html>