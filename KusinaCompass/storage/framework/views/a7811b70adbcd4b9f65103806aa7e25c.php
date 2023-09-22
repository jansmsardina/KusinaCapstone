<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kusina Compass</title>
    <img src="">
     <link rel="stylesheet" href="<?php echo e(asset('css/KusinaCompass.css')); ?>">
</head>
<body>
<div class="headerContainer" id="headerContainer">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="img-fluid" src="img1.jpg" alt="Logo" id="headerLogo" />

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto" id="navLinks">
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('Home')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('Stores')); ?>">Stores</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('About')); ?>">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('ContactUs')); ?>">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(url('StoreLogin')); ?>">Store Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Signup">Sign up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



<div id='body'>
    

    <div class="Carding">
        <div class="row" id='cardRow'>
            <div class="col">
                <div class="row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                            <img src="<?php echo e(asset('Images/Coffee.jpeg')); ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Coffee Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                            <img src="<?php echo e(asset('Images/BurgerShop.jpeg')); ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Burger Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                        <img src="<?php echo e(asset('Images/PizzaShop.jpeg')); ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Pizza Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        <div class="cards" style="width: 18rem;">
                        <img src="<?php echo e(asset('Images/Jenkins.jpeg')); ?>" class="card-img-top" alt="..." />
                            <div class="card-body">
                                <h5 class="card-title">New Cake Shop</h5>
                                <p class="card-text">
                                    So"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur,
                                    adipisci velit..."
                                </p>
                                <a href="#" class="btn btn-primary">Visit Store</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="Caros">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0"> <!-- Change col-sm-3 to col-sm-6 -->
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo e(asset('Images/plate-removebg-preview.png')); ?>"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('Images/plate-removebg-preview.png')); ?>"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo e(asset('Images/plate-removebg-preview.png')); ?>"
                                    class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button"
                            data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                         
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <div class="ratio ratio-4x3">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/NC9KlaxtfLg"
                                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <footer> 
  <div id="footerContainer">
    <div class="container w-100 p-3 footer" id="footerCard">
        <div class="row">
            <div class="col">
                <footer class="container py-5">
                    <div class="row">
                        <div class="col-12 col-md">
                            <div class="container-fluid">
                            <img class="img-fluid" src="<?php echo e(asset('Images/Logo.png')); ?>" alt="Logo"id='footerLogo' />
                            </div>
                        </div>
                        <div class="col-3 col-sm">
                            <h5>SITE LINKS</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary text-decoration-none" href="#">Contact Us</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">About Us</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Directions</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-3 col-sm">
                            <h5>Top Stores</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary text-decoration-none" href="#">Angel Store</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Pizza Store</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Coffee Store</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Burger Store</a></li>
                            </ul>
                        </div>
                        <div class="col-3 col-sm">
                            <h5>Top Food</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary text-decoration-none" href="#">Isaw</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Milk Shake</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Kare Kare</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Laing</a></li>
                            </ul>
                        </div>
                        <div class="col-3 col-sm">
                            <h5>About</h5>
                            <ul class="list-unstyled text-small">
                                <li><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Jobs</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                                <li><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>

   </footer> 
        
</body>

<script>
    function dropdownMenu() {
    let x = document.getElementById("dropdownClick");
    if (x.className === "topnav"){
        x.className += " responsive";
        /* change to top nav to topnav.responsive*/
        
    } else {
      x.className = "topnav";
    }
    }

    </script>
    

</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script><?php /**PATH C:\xampp\htdocs\capsFinal\KusinaCompass\resources\views/Home.blade.php ENDPATH**/ ?>