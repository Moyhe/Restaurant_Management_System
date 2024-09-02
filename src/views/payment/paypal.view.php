<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/navbar.php') ?>
<?php require base_path('views/partials/banner.php') ?>

<div class="container mt-5 ">
    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=Adt4PbNdrCrnsPn2w8trgMiKx3o698SbCFHhsY3klD6ZMKxGdjVQ3X_fZBeXqFhZ1qrHdfPyKHkErn6C&currency=USD"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
        paypal.Buttons({
            // Sets up the transaction when a payment button is clicked
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: "<?= $_SESSION['total_price'] ?>" // Can also reference a variable or function
                        }
                    }]
                });
            },
            // Finalize the transaction after payer approval
            onApprove: (data, actions) => {
                return actions.order.capture().then(function(orderData) {

                    window.location.href = '/clear-cart';
                });
            }
        }).render('#paypal-button-container');
    </script>

</div>
</div>
</div>
<?php require base_path('views/partials/footer.php') ?>