<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-commerce</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php
        include 'nav.php';
    ?>
    <div class="container mt-3">
    <div class="row">
        <?php
            for($i=0;$i<10;$i++){

            
        ?>
        <div class="col-3">
            <div class="card">
                <img src="https://picsum.photos/200/200" class="img-fluid" alt='la photo de produit'>
                <div class="card-body">
                    <h1 class="card-title">Mac Pro</h1>
                    <p class="card-text">Lorem ipsum  eligendi saepe et accusamus architecto minus perferendis, error facilis esse non? Voluptate officia hic et error.</p>
                    <a href="#" class="btn-success btn-sm">details</a>
                    <a href="#" class="btn-danger btn-sm"><i class="fas fa-shopping-cart"></i>Add</a>


                </div>

            </div>
        </div>
        <?php
            }
    ?>
    </div>
           <div class="container">
                <?php
                    include 'footer.php'
                ?>
           </div>
    </div>
</body>
</html>