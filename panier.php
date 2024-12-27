<!DOCTYPE html>
<html lang="fr">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="Light Brown and Tan Elegant Arts and Crafts Logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <meta name="description" content="Discover unique Moroccan handmade crafts and chic artisanal designs. Shop Beldi Chic for authentic, elegant products.">

    <title>Beldi Chic</title>
       
</head>
<body>
      <?php include("header.php") ?>
      
    <div class="cart-container">
        <!-- Header -->
        <div class="cart-header">
            <h1>Mon Panier</h1>
        </div>

        <!-- Cart Items -->
        <div class="cart-item">
            <img src="https://via.placeholder.com/100" alt="Produit 1">
            <div class="cart-item-info">
                <h2>Produit 1</h2>
                <p>Description courte du produit</p>
            </div>
            <div class="cart-item-price">150 DH</div>
            <div class="cart-item-actions">
                <button>-</button>
                <span>1</span>
                <button>+</button>
            </div>
        </div>

        <div class="cart-item">
            <img src="https://via.placeholder.com/100" alt="Produit 2">
            <div class="cart-item-info">
                <h2>Produit 2</h2>
                <p>Description courte du produit</p>
            </div>
            <div class="cart-item-price">300 DH</div>
            <div class="cart-item-actions">
                <button>-</button>
                <span>2</span>
                <button>+</button>
            </div>
        </div>

        <!-- Total -->
        <div class="cart-total">
            Total : <span>750 DH</span>
        </div>

        <!-- Checkout Button -->
        <a href="checkout.php" class="checkout-btn">Passer la commande</a>
    </div>
    <?php include("footer.php") ?>
</body>
</html>
