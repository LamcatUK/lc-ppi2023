<section class="calc py-5">
    <div class="container-xl">
        <?php
        $hasTitle = false;
        if (get_field('section_title')) {
            ?>
        <h2><?=get_field('section_title')?></h2>
            <?php
            $hasTitle = true;
        }
        ?>
        <div class="row">
            <div class="col-md-6 mb-4">
                <?php
                if ($hasTitle) {
                    ?>
                <h3><?=get_field('single_property_title')?></h3>
                    <?php
                }
                else {
                    ?>
                    <h2 class="h3"><?=get_field('single_property_title')?></h2>
                    <?php
                }
                ?>
                <div class="calc__sliders mb-4">
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
                    <div class="save">You Save £<span id="save">15,000</span></div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <?php
                if ($hasTitle) {
                    ?>
                <h3><?=get_field('portfolio_title')?></h3>
                    <?php
                }
                else {
                    ?>
                    <h2 class="h3"><?=get_field('portfolio_title')?></h2>
                    <?php
                }
                ?>
                <div class="calc__sliders mb-4">
                    <div class="slider">
                        <div class="slider__title">Your portfolio value:</div>
                        <input type="range" class="form-range" name="pPrice" id="pPrice" min="1000000" max="10000000"
                            step="100000" value="1000000">
                        <div class="valContainer">£<span id="pValue">1,000,000</span></div>
                    </div>
                    <div class="slider">
                        <div class="slider__title">Your estate agent commission</div>
                        <input type="range" class="form-range" name="pCommission" id="pCommission" min="0" max="10" step="0.1"
                            value="1.5">
                        <div class="comContainer"><span id="pComPct">1.5</span>%</div>
                    </div>
                </div>
                <div class="calc__output">
                    <div class="intro">No cost when using us!</div>
                    <div class="save">You Save £<span id="pSave">150,000</span></div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-secondary" title="Book Valuation" data-bs-toggle="modal"
                data-bs-target="#valuationModal">Free Valuation</button>
        </div>
    </div>
</section>
<?php
add_action('wp_footer', function () {
    ?>
<script>
    // portfolio calc
    document.getElementById('pPrice').oninput = function() {
        var val = document.getElementById('pPrice').value;
        val = parseInt(val);
        val = val.toLocaleString();
        console.log(val);
        document.getElementById('pValue').innerHTML = val;
        calcPPct();
    }

    document.getElementById('pCommission').oninput = function() {
        var val = document.getElementById('pCommission').value;
        document.getElementById('pComPct').innerHTML = val;
        calcPPct();
    }

    function calcPPct() {
        var price = document.getElementById('pPrice').value;
        var commission = document.getElementById('pCommission').value;

        var amt = (commission / 100) * price;
        amt = amt.toLocaleString();
        document.getElementById('pSave').innerHTML = amt;
    }

    // single calc
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