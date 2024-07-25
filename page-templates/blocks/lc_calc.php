<section class="calc py-5">
    <div class="container-xl">
        <h2><?=get_field('title')?></h2>
        <div class="calc__grid">
            <div class="calc__sliders">
                <div class="slider">
                    <div class="slider__title">Your single property value:</div>
                    <input type="range" class="form-range" name="price" id="price" min="100000" max="1500000"
                        step="10000" value="100000">
                    <div class="valContainer">£<span id="value">100,000</span></div>
                </div>
                <div class="slider">
                    <div class="slider__title">Your estate agent commission</div>
                    <input type="range" class="form-range" name="commission" id="commission" min="0" max="10" step="0.1"
                        value="1.5">
                    <div class="comContainer"><span id="comPct">1.5</span>%</div>
                </div>
            </div>
            <div class="calc__output">
                <div class="intro">No cost when using us!</div>
                <div class="save">You Save £<span id="save">1,500</span></div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal"
                data-bs-target="#valuationModal">Get Cash Offer</button>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    document.getElementById('price').oninput = function() {
        var val = document.getElementById('price').value;
        val = parseInt(val);
        val = val.toLocaleString();
        console.log(val);
        document.getElementById('value').innerHTML = val;
        calcPct();
    }

    document.getElementById('commission').oninput = function() {
        var val = document.getElementById('commission').value;
        document.getElementById('comPct').innerHTML = val;
        calcPct();
    }

    function calcPct() {
        var price = document.getElementById('price').value;
        var commission = document.getElementById('commission').value;

        var amt = (commission / 100) * price;
        amt = amt.toLocaleString();
        document.getElementById('save').innerHTML = amt;
    }
</script>
<?php
});
        ?>