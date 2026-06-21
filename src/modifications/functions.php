<?php
add_action('woocommerce_after_add_to_cart_button', function () {
    global $product;

    if (!$product) {
        return;
    }

    $checkout_url = wc_get_checkout_url();
    if($product->is_type('simple')){
    ?>
        <button
            type="submit"
            class="button alt buy-now-button"
            formaction="<?php echo esc_url($checkout_url); ?>"
        >
            Pagar ahora
        </button>
    <?php
    }
    if($product->is_type('variable')){
    ?>
        <button type="button" class="button alt buy-now">
            Pagar ahora
        </button>

        <script>
        jQuery(function($){
            $('.buy-now').on('click', function(e){
                var variation_id = $('input.variation_id').val();
                if (!variation_id) {
                    alert('Por favor selecciona todas las opciones del producto antes de continuar.');
                    return;
                }
                $('form.cart').append(
                    '<input type="hidden" name="buy-now" value="1">'
                );
                $('form.cart').attr('action', '<?php echo esc_url($checkout_url); ?>');
                $('form.cart').submit();
            });
        });
        </script>
    <?php
    }
});
