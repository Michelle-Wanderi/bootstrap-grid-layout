<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn)
{
    echo "Connection success.";
}
else{
    echo "Error occurred.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">

</head>
<body>
    <!-- Navbar starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
           <a href="#" class="navbar-brand">Zalego Academy</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
            <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>

                </div>

           </div>
        </div>
    </nav>
    <!-- Navbar ends here -->

    <main class="p-5  bg-light text-black mb-4"><br><br>
    <h1>Welcome,Michelle Wanderi</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Inventore quidem dolorum quia? Maxime molestiae sunt quia sapiente, molestias cumque corporis quas eum veritatis. Nisi minima reiciendis delectus, praesentium cum voluptates.
        
    </p>
<button class="btn btn-primary">Learn More</button>
</main>
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <h1>Header 1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, officiis vitae exercitationem labore possimus nesciunt blanditiis architecto mollitia deserunt ullam.</p>
                    <button class="btn btn-primary">View Details</button>
        </div>
            <div class="col-lg-3 col-md-6">
                <h1>Header 2</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, officiis vitae exercitationem labore possimus nesciunt blanditiis architecto mollitia deserunt ullam.</p>
                        <button class="btn btn-primary">View Details</button>
            </div>
                <div class="col-lg-3 col-md-6">
                    <h1>Header 3</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, officiis vitae exercitationem labore possimus nesciunt blanditiis architecto mollitia deserunt ullam.</p>
                            <button class="btn btn-primary">View Details</button>
                </div>
                    <div class="col-lg-3 col-md-6">
                        <h1>Header 4</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, officiis vitae exercitationem labore possimus nesciunt blanditiis architecto mollitia deserunt ullam.</p>
                                <button class="btn btn-primary">View Details</button>
                    </div>
    </div>
</div>

<div class="container">
    <div class="row pt-5">
<form action="index.php" method= "POST">
    <div class="row">
        <div class= "mb-3 col-lg-6">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" placeholder="Enter your First Name">
        </div>
    <div class= "mb-3 col-lg-6">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" placeholder="Enter your Last Name">
</div>   

 <div class="row">
    <div class= "mb-3 col-lg-6 col-md-6">
    <label for="phonenumber" class="form-label">Phone Number</label>
    <input type="tel" class="form-control" placeholder="Enter your Phone Number">
</div>
    <div class= "mb-3 col-lg-6 col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your Email">
</div>
</div>

<div class="row">
    <div class= "mb-3 col-lg-6 col-md-6">
    <label for="message" class="form-label">Enter Your Message</label>
        <textarea name="Enter your Message" id="" cols="30" rows="5" class="form-control"></textarea>
</div>
</div>
<button type="submit" class ="btn btn-primary">Send a Message</button>
</form>

    
</div>

    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>