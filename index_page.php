<!Doctype html>
<html>
    <?php require "includes/header1.php"; ?>
    <body>
        <?php require "includes/header2.php"; ?>
        <div class = "slider_container">
            <figure>
                <img src="images/Sliders/slider12.jpg" alt="">
                <img src="images/Sliders/slider9.jpg" alt="">
                <img src="images/Sliders/slider10.jpg" alt="">
                <img src="images/Sliders/slider11.jpg" alt="">
                <img src="images/Sliders/slider12.jpg" alt="">
            </figure>

        </div>

        <div class="slider">
            <div class="slider_items">
                <div class="item active">
                    <img src="images/Sliders/slider1.jpg">
                    <div class="caption">Slider 1</div>
                </div>

                <div class="item">
                    <img src="images/Sliders/slider3.jpg">
                    <div class="caption">Slider 2</div>
                </div>

                <div class="item">
                    <img src="images/Sliders/slider9.jpg">
                    <div class="caption">Slider 3</div>
                </div>

                <div class="item">
                    <img src="images/Sliders/slider12.jpg">
                    <div class="caption">Slider 4</div>
                </div>
            </div>

            <!--Slider controls starts-->
            <div class="left_slide"><</div>
            <div class="right_slide">></div>

            <!--Slider controls ends-->
        </div>

        <div class = "homepage_container">
            <div class="home_product_container">
                <div class="product">
                    <img src="images/products/ac.jpg">
                    <h4>Air Conditioner</h4>
                </div>

                <div class="product">
                    <img src="images/products/fan.jpg">
                    <h4>Ceiling Fan</h4>
                </div>

                <div class="product">
                    <img src="images/products/fridge.jpg">
                    <h4>Refrigerator</h4>
                </div>

                <div class="product">
                    <img src="images/products/gen.jpg">
                    <h4>Power Generator</h4>
                </div>
            </div>
            <div class="home_product_container">
                <div class="product">
                    <img src="images/products/iron.jpg">
                    <h4>Pressing Iron</h4>
                </div>

                <div class="product">
                    <img src="images/products/microwave.jpg">
                    <h4>Microwave Oven</h4>
                </div>

                <div class="product">
                    <img src="images/products/stove.jpg">
                    <h4>Electric Stove</h4>
                </div>

                <div class="product">
                    <img src="images/products/tv.jpg">
                    <h4>Plasma Tv</h4>
                </div>
            </div>

            <a href="products_page.php"><button type="submit" class="products_button" >More Products >></button></a>
        </div>

        <?php include "includes/footer.php"; ?>
        <script src="javascript/script.js"></script>
        <script src="javascript/script2.js"></script>
    </body>
</html>