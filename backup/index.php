<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Store</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/vendors/@fortawesome/fontawesome-free/css/all.min.css">
    
</head>
</body>
<!--- Navigation Start here ----> 
<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <h4>Book Store</h4>
        </a>
            <button class="navbar-toggler" type="button"
            data-toggle="collapse"
            data-target = "#collapse"
            aria-controls = "navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="navbar-nav mr-auto mb-2 mb-md-0">

                    <li class="nav-item active">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">Books</a>
                    </li>
                    <li class="nav-item ">
                        <a href="#" class="nav-link">Contact</a>
                    </li>

                </ul>
                <div class="dflex">
                    <a href="#" class="cart"> <i class="fa fa-shopping-cart"></i>
                        <span class="text-warning bg-dark"> 0 </span>
                    </a>
                </div>
            </div>
    </div>
</nav>
<!--- Navigation Ends here ---> 
<!--- Top banner starte here ---> 

<div class="container">
 <div class="row align-items-center">
    <div class="col-lg-12 py-5">
        <div class="card px-3">
            <div class="card-body">
                <h3>Limited offer !! Hurry and Order yours today.</h3>
            </div>
        
        </div>
    </div>
 </div>
</div>

<!-- Top banner ends here. ----> 
<!--- Side section start here.. ---> 

<div class="container-fluid">
    <div class="row">
        <div class="col-xm-12 col-sm-12 col-md-5 col-lg-3 py-5 px-5">
        
            <div class="card align-itmes-center category1">

            </div>
            <div class="row">
            <div class="card align-items-center mb-4">
                        <div class="card-body">
                            <div class="py-3">
                                <h3>Category</h3>
                                <p>Books on offer</p>
                            </div>
                        </div>
            </div>
            </div>
        </div>
     <!-- Side Section ends here. ---> 

        <!-- the products section --->

    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-9 py-5">
    
    <div class="row">
       <form action="" class="d-flex py-3">
        <input type="text" class="form-control" placeholder="Type here to search">
        <button type="submit" class="btn btn-success"> Submit</button>
       </form>
   

    <div class="card section-intro px-4">
    
    <div class="card-body">
        <div class="card-header  items-header">
            <h4><b>Featured Items</b></h4>
        </div>
        <div class=" row py-3 items">
        
     <?php 
     
            // fetch data from the database

            require "includes/conn.php";

            $query = "SELECT * FROM tblbooks";
            $result = mysqli_query($conn, $query);

            if($result):

                if(mysqli_num_rows ($result) > 0):
                    while ($product = mysqli_fetch_assoc($result)):
     ?>
       
      
            <div class="col-lg-4">
                <form action="checkout.php?action=add&id=<?php echo $product ['BookID'];?>" 
                method="post" enctype="multipart/form-data">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div>
                                <img src="<?php echo $product['book_image'];?>" class="img-fluid px-5 prdimg"  alt="">
                            </div>
                            <h6 class="secondary"><?php echo $product['BookName'];?></h6>
                            <h4 class="secondary"><?php echo $product['Bcontent'];?></h4>
                            <h5 class="secondary"><small><s>$<?php echo $product['Price'];?></h5>

                            <input type="number" class="form-control mb-3" name="quantity" value="1">
                            <input type="hidden" name="BookID" value="<?php echo $product['BookID'];?>">
                            <input type="hidden" name="book_image" value="<?php echo $product['book_image'];?>">
                            <input type="hidden" name="BookName" value="<?php echo $product['BookName'];?>">
                            <input type="hidden" name="Bcontent" value="<?php echo $product['Bcontent'];?>">
                            <input type="hidden" name="Price" value="<?php echo $product['Price'];?>">
                            <button type="submit" name="add_to_cart" class="btn btn-warning">
                            <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                        </div>
                    </div>
                </form>
            </div>
      <?php 
      
                    endwhile;
                endif;
            endif;
      ?>
        </div>
    </div>
    </div>
</div>

<!-- Products section ends here.. --->  
    </div>
</div>


















<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>