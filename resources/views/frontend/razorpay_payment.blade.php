<!-- Razorpay Payment Page -->
<form action="/orders/payment-success" method="POST">
    @csrf <!-- This will generate the CSRF token -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?= $apiKey ?>" 
        data-amount="<?= $orderAmount * 100 ?>" 
        data-currency="INR"
        data-order_id="<?= $razorpayOrderId ?>"
        data-buttontext="Pay with Razorpay"
        data-name="Your Company Name"
        data-description="Order Payment"
        data-prefill.name="<?= $userEmail ?>"
        data-prefill.email="<?= $userEmail ?>"
        data-prefill.contact="<?= $userContact ?>"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" name="order_id" value="<?= $orderId ?>">
</form>