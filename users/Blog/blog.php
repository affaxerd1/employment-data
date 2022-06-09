<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Job available</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!">Kipkelion East</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Register</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4" id="header" >
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder">Jobs Available</h1>
                    <p class="lead mb-0">Register so you can always get frequent alerts of new jobs within your field</p>
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            
            <div class="row">
                <!-- Blog entries-->
                
                <div class="col-lg-8">
                    <!-- Featured blog post-->
                    <?php

                    include_once 'database.php'; // Using database connection file here
                    $sql="SELECT * FROM blog ";
                    $query=mysqli_query($conn, $sql);

                    foreach($query as $q)
                    {
                    ?>

                    
                    <div class="card mb-4">
                       
                        <div class="card-body">
                        


                            <div class="small text-muted"><?php echo $q['date_of_post']; ?></div>
                            <h2 class="card-title h4"><?php echo $q['job_title']; ?></h2>
                            <h2 class="card-title h6">Job Description</h2>
                            <p class="card-text"><?php echo $q['description'];?></p>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                            <h2 class="card-title h6">responsibilities</h2>
                            <p class="card-text"><?php echo $q['responsibilities'];?></p>
                            <h2 class="card-title h6">requirements</h2>
                            <p class="card-text"><?php echo $q['requirements'];?></p>
                            <a class="btn btn-primary" href="<?php echo $q['application_link'];?>">click to apply </a>





                                
                                
                           
                        </div>
                    </div>
                    <?php
                            }
                            ?>
                    <!-- Pagination-->
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Events</div>
                        <div class="card-body">Upcoming events will be posted here</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
