<?php 
  require_once './auth_check.php'; // Include secure authentication check for user

  require_once '../../database/database.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Payment | Revaux</title>
  <link rel="icon" type="image/png" href="../../images/revaux-light.png" />
  <link rel="stylesheet" href="../../css/payment.css" />
  <link rel="stylesheet" href="../../css/header-user.css">
  <link rel="stylesheet" href="../../css/footer.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>
<body>

  <?php include '../../includes/header-user.php'; ?>

  <!-- Cart Section -->
  <main class="cart-container">
    <div class="cart-left">

      <!-- Contact Info -->
      <div class="contact-info-row">
        <div class="contact-column">
          <h4><span class="material-icons contact-icon">phone</span> Contact Person</h4>
          <p>Kween Yasmine</p>
          <p>(+63) 9876543210</p>
        </div>
        <div class="contact-column">
          <h4><span class="material-icons location-icon">location_on</span> Delivery Address</h4>
          <p>16 Rizal Street, Sampaloc Subdivision,</p>
          <p>Barangay San Isidro, Antipolo City, Rizal, 1870</p>
        </div>
      </div>

      <!-- Headwear -->
      <div class="cart-category-box">
        <div class="cart-header with-category">
          <div class="category-label">Headwear</div>
          <div class="col">Product</div>
          <div class="col">Unit Price</div>
          <div class="col">Quantity</div>
          <div class="col">Total</div>
        </div>

        <!-- Items -->
        <div class="cart-item">
          <img src="../../images/products/hat1.png" alt="Item Image" class="item-img" />
          <div class="item-name">Men's Baseball<br>Hat Fancy</div>
          <div class="item-price">₱260.00</div>
          <div class="quantity-container">
            <div class="quantity-number">2</div>
          </div>
          <div class="total-price">₱520.00</div>
        </div>

        <div class="cart-item">
          <img src="../../images/products/hat1.png" alt="Item Image" class="item-img" />
          <div class="item-name">HISSHE Men<br>Oversize Skull</div>
          <div class="item-price">₱1,569.00</div>
          <div class="quantity-container">
            <div class="quantity-number">1</div>
          </div>
          <div class="total-price">₱1,569.00</div>
        </div>
      </div>

      <!-- Footwear -->
      <div class="cart-category-box">
        <div class="cart-header with-category">
          <div class="category-label">Footwear</div>
          <div class="col">Product</div>
          <div class="col">Unit Price</div>
          <div class="col">Quantity</div>
          <div class="col">Total</div>
        </div>

        <div class="cart-item">
          <img src="../../images/products/hat1.png" alt="Item Image" class="item-img" />
          <div class="item-name">Old Street Shoes<br>Kavalrie</div>
          <div class="item-price">₱3,400.00</div>
          <div class="quantity-container">
            <div class="quantity-number">1</div>
          </div>
          <div class="total-price">₱3,400.00</div>
        </div>

        <div class="cart-item">
          <img src="../../images/products/hat1.png" alt="Item Image" class="item-img" />
          <div class="item-name">Doctor Martens<br>Leather Shoes</div>
          <div class="item-price">₱3,900.00</div>
          <div class="quantity-container">
            <div class="quantity-number">1</div>
          </div>
          <div class="total-price">₱3,900.00</div>
        </div>
      </div>
    </div>

    <!-- Order Summary -->
    <aside class="order-summary">
      <h3 class="order-title">Order Summary</h3>
      <hr class="summary-line" />
      <div class="summary-item">
        <span>Subtotal (4 Items):</span>
        <span>₱9,389.00</span>
      </div>
      <div class="summary-item">
        <span>Shipping Fee:</span>
        <span>₱138.00</span>
      </div>
      <div class="summary-item total">
        <span>Subtotal:</span>
        <span>₱9,572.00</span>
      </div>
      <hr class="summary-line" />

      <!-- Payment Method Section -->
 <h3 class="order-title" style="margin-top: 20px;">Select Payment Method</h3>
    <div class="payment-method">
      <label class="payment-option" id="cod-option">
        <input type="radio" name="payment" value="cod" checked />
        <img src="../../images/cod-icon.png" alt="Cash" />
        <div class="payment-info">
          <span class="payment-title">Cash on Delivery</span>
          <span class="payment-desc">Pay when you receive</span>
        </div>
      </label>

      <label class="payment-option" id="gcash-option">
        <input type="radio" name="payment" value="gcash" />
        <img src="../../images/gcash-icon.png" alt="GCash" />
        <div class="payment-info">
          <span class="payment-title">GCash e-Wallet</span>
          <span class="payment-desc">Online Payment</span>
        </div>
      </label>
    </div>

    <button class="checkout-btn" style="margin-top: 16px;">Place Order Now</button>
  </aside>
  <?php include '../../includes/footer.php'; ?>
  <!-- JS -->
  <script type="module" src="../../scripts/main.js"></script> 
</body>
</html>
