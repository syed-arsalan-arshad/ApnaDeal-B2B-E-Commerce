<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Apna Deal</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active mr-3">
                <div class="dropdown">
                    <a class="nav-link" href="#" role="button" id="dropdownMenuLinkAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION["vname"]; ?> <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkAdmin">
                        <a class="dropdown-item" href="vendorlogout.php">LogOut</a>
                        <a class="dropdown-item" href="changePassword.php">Change Password</a>

                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div style="background-color:#335BFF">
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item ">
                <a class="nav-link text-light" href="index.php">Dashboard</a>
            </li>

            
            <li class="nav-item">
                <div class="dropdown">
                    <a class="nav-link text-light" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="addProduct.php">Add Product</a>
                        <a class="dropdown-item" href="viewProduct.php">View Product</a>
                        <a class="dropdown-item" href="productOrder.php">View Product Order</a>
                    </div>
                </div>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-light" href="parcelReceiving.php">Parcel Receiving</a>
            </li>
        </ul>
    </div>
</div>