<?php
include("header.php")
?>
<body>
    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Marketplace</h1>

        <div class="row product-card">
            <div class="col-md-4">
                <img src="product-image1.jpg" alt="Product 1">
            </div>
            <div class="col-md-8">
                <h3>Product Name 1</h3>
                <p>Seller: John Doe</p>
                <p>Location: Nairobi, Kenya</p>
                <p class="price">Price: 0.005 ETH / 1,000 KES</p>
                <a href="#" class="btn btn-primary">Pay with Crypto</a>
                <a href="#" class="btn btn-success">Pay with M-Pesa</a>
            </div>
        </div>

        <div class="row product-card">
            <div class="col-md-4">
                <img src="product-image2.jpg" alt="Product 2">
            </div>
            <div class="col-md-8">
                <h3>Product Name 2</h3>
                <p>Seller: Jane Smith</p>
                <p>Location: Mombasa, Kenya</p>
                <p class="price">Price: 0.0025 ETH / 500 KES</p>
                <a href="#" class="btn btn-primary">Pay with Crypto</a>
                <a href="#" class="btn btn-success">Pay with M-Pesa</a>
            </div>
        </div>

        <h2 class="text-center my-5">Location of Products on the Map</h2>
        <div class="map-container" id="map">
            
            <p class="text-center">Map showing product locations will go here</p>
        </div>
    </div>

  <?php
  include("footer.php");
  ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>

</html>
