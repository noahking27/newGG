<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Minimal Restaurant Template">
    <meta name="keywords" content="responsive, retina ready, html5, css3, restaurant, food, bar, events" />
    <meta name="author" content="KingStudio.ro">

    <!-- favicon -->
    <link rel="icon" href="Temp/images/favicon.png">
    <!-- page title -->
    <title>Goodness GraceUs</title>
    <!-- bootstrap css -->
<link href="Temp/css/bootstrap.min.css" rel="stylesheet" />
    <!-- css -->
<link href="Temp/css/style.css" rel="stylesheet" />
    <link href="Temp/css/animate.css" rel="stylesheet">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link href="Temp/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='Temp/fonts/FontAwesome.otf' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
function forprint(){
if (!window.print){

return
}
window.print()
}
</script>
</head>

<body onload="getOrder()">
    <!-- preloader -->
    <div id="preloader">
        <div class="spinner spinner-round"></div>
    </div>
    <!-- / preloader -->

    <div id="top"></div>

    <!-- header -->
    <header>
        <nav class="navbar navbar-default dark-bg page-nav navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../goodnessGraceUs/Temp/MenuJan2018/Menu.pdf" download>

                        <button type="button" class="btn btn-lg btn-primary-filled btn-pill">
                            <i class=""></i><b style="color: white;">Download Menu</b></button></a>
                </div>
                <!-- / navbar-header -->
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                           <li><a href="Menu.html">Menu</a></li>
                        <li><a href="testimonial.html">Testimonials</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!-- / container -->
        </nav>
    </header>
    <!-- / header -->

    <!-- content -->

    <div class="space-80">&nbsp;</div>

    <section id="starter-menu">
        <div class="container">

            <!-- <input type="file" id="file-input">
            <div id="file-content"></div> -->
            <!-- <br> -->


            <!-- / page-header -->
            <img src="Temp/images/menuheader.png" alt="" class="food-img wow fadeInUp first">

            <div class="row">
                <div class="col-md-12 menu-items wow fadeIn first">
                    <div id="simpleDiv"></div>
                    <p id="food"></p>

                    <!-- <h5 class="food-title">Tableside Guac <span class="pull-right food-price text-primary">$12.99</span></h5>
                    <p class="food-text">Fresh Hass avocados, diced jalapeños, pico de gallo, topped with fresh lime juice and cojita cheese.</p>

                    <h5 class="food-title">Crispy Chicken <span class="pull-right food-price text-primary">$14.99</span></h5>
                    <p class="food-text">Lightly crisped flour tortillas stuffed with fire-roasted red peppers, cheese, and grilled corn.</p>

                    <h5 class="food-title">Nachos Grande <span class="pull-right food-price text-primary">$9.99</span></h5>
                    <p class="food-text">A heaping platter of crispy chips topped with Salsa Chicken, sour cream and black beans.</p>

                    <h5 class="food-title">Border Wings <span class="pull-right food-price text-primary">$13.99</span></h5>
                    <p class="food-text">Gigante chicken wings tossed in your choice of Mexican BBQ or spicy wing sauce served with ranch dipping sauce.</p>

                    <h5 class="food-title">Fajita Nachos <span class="pull-right food-price text-primary">$19.99</span></h5>
                    <p class="food-text">Individual tortilla chips topped with refried beans, grilled chicken and jack cheese. Available with Steak and cheese.</p>
                </div>
                <!-- / menu-items -->

                <!-- <div class="col-md-12 menu-items wow fadeIn first">
                    <div class="col-md-4">
                        <h5 class="food-title">BAKED POTATO BAR</h5>
                        <p class="food-text"> served with the following toppings scallions, shredded cheddar cheese, shredded mozzarella cheese, bacon, butter and sour cream.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">BISCUIT BAR </h5>
                        <p class="food-text">Buttermilk & blueberry biscuits served with bacon, country ham, molasses, honey, brown sugar, whipped butter, grape and strawberry jam.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">FAJITA BAR </h5>
                        <p class="food-text">Beef or chicken, flour tortillas, cheese, salsa, sour cream, lettuce, tomato, sautéed onions and green peppers, black beans and rice.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">GRITS BAR </h5>
                        <p class="food-text">Southern creamy grits served with cheese, ham, bacon, sun-dried tomatoes, caramelized onions, jalapenos, and scallions. (Optional add-ons: shrimp, blackened chicken or roasted vegetables – for an additional cost).</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">NACHO BAR</h5>
                        <p class="food-text">Ground beef/chicken/brisket/2 meat combo, salsa, lettuce, tomatoes, olives, black beans, pinto beans, sour cream, jalepenos, tortilla chips, mexi-blend cheese.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">MASHED POTATO BAR </h5>
                        <p class="food-text">mashed potatoes with butter, sour cream, chives, bacon, sun-dried tomatoes, shredded cheddar cheese, shredded mozzarella cheese and diced jalapenos.</p>

                    </div>

                </div>
                <!-- / menu-items

                <div class="col-md-12 menu-items wow fadeIn first">
                    <div class="col-md-4">
                        <h5 class="food-title">PASTA BAR </h5>
                        <p class="food-text">Choice of 2 pastas, diced chicken and meat sauce (turkey or ground beef) and alfredo or pesto sauce.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">SWEET POTATO BAR </h5>
                        <p class="food-text">Mashed sweet potatoes with marshmallow whip, mini marshmallows, brown sugar butter, whipped butter and sugar.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">YOGURT BAR</h5>
                        <p class="food-text">Vanilla yogurt and/or Greek yogurt with the following toppings - assorted fresh fruits, granola, raisins, honey and shredded coconut.</p>

                    </div>

                    <div class="col-md-4">
                        <h5 class="food-title">WAFFLE BAR</h5>
                        <p class="food-text">Belgian waffles served with regular and blueberry syrup, sweet cream whipped butter, whipped cream, fresh strawberries/seasonal fruit, chocolate syrup, chocolate chips (You can add on fried chicken, sausage or bacon for an additional
                            cost).
                        </p>
                    </div>


                    <div class="col-md-4">
                        <h5 class="food-title">FISH FRY</h5>
                        <p class="food-text">Battered and fried fish filets, hushpuppies or fries and 2 sides. Choose from – coleslaw, baked beans, potato salad, green beans or pasta salad.</p>

                    </div>

                </div> -->
                <!-- / menu-items -->
            </div>
            <!-- / row -->
        </div>

        <div class="row">
            <div class="col-md-12 menu-items wow fadeIn first">
                <div id="CostumeDiv">
                  <div id="header"></div>
                    <p id="food"></p>
                </div>



                <!-- <div class="col-md-4">
                    <h5 class="food-title">FISH FRY</h5>
                    <p class="food-text">Battered and fried fish filets, hushpuppies or fries and 2 sides. Choose from – coleslaw, baked beans, potato salad, green beans or pasta salad.</p>

                </div> -->
              </div>
            </div>
        <!-- / container -->
    </section>
    <!-- / starter-menu -->

    <!-- <section id="main-menu">
        <div class="container">
            <div class="page-header text-center">
                <h2 class="text-primary">Main Courses</h2>
            </div>
            <!-- / page-header
            <img src="Temp/images/main-food.jpg" alt="" class="food-img wow fadeInUp first">
            <div class="row">
                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Grilled Steak <span class="pull-right food-price text-primary">$23.99</span></h5>
                    <p class="food-text">Citrus-chile marinated and mesquite-grilled skirt steak served sizzling at your table.</p>

                    <h5 class="food-title">Roasted Carnitas <span class="pull-right food-price text-primary">$24.99</span></h5>
                    <p class="food-text">Tender, marinated pork simmered with fresh lemons, oranges, garlic and fuego spices.</p>

                    <h5 class="food-title">Shrimp <span class="pull-right food-price text-primary">$39.99</span></h5>
                    <p class="food-text">Shrimp sautéed with fresh diced garlic, white wine and citrus juices with a hint of chile.</p>

                    <h5 class="food-title">Seasonal Veggies <span class="pull-right food-price text-primary">$11.99</span></h5>
                    <p class="food-text">Mesquite-grilled portobello mushroom over farm-fresh yellow squash, zucchini, carrots and green beans.</p>

                    <h5 class="food-title">Grill Fajitas <span class="pull-right food-price text-primary">$17.99</span></h5>
                    <p class="food-text">The Best of the Best! Mesquite-grilled chicken breast marinated in fresh citrus and chiles.</p>
                </div>
                <!-- / menu-items

                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Grilled Steak <span class="pull-right food-price text-primary">$23.99</span></h5>
                    <p class="food-text">Citrus-chile marinated and mesquite-grilled skirt steak served sizzling at your table.</p>

                    <h5 class="food-title">Roasted Carnitas <span class="pull-right food-price text-primary">$24.99</span></h5>
                    <p class="food-text">Tender, marinated pork simmered with fresh lemons, oranges, garlic and fuego spices.</p>

                    <h5 class="food-title">Shrimp <span class="pull-right food-price text-primary">$39.99</span></h5>
                    <p class="food-text">Shrimp sautéed with fresh diced garlic, white wine and citrus juices with a hint of chile.</p>

                    <h5 class="food-title">Seasonal Veggies <span class="pull-right food-price text-primary">$11.99</span></h5>
                    <p class="food-text">Mesquite-grilled portobello mushroom over farm-fresh yellow squash, zucchini, carrots and green beans.</p>

                    <h5 class="food-title">Grill Fajitas <span class="pull-right food-price text-primary">$17.99</span></h5>
                    <p class="food-text">The Best of the Best! Mesquite-grilled chicken breast marinated in fresh citrus and chiles.</p>
                </div>
                <!-- / menu-items

                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Grilled Steak <span class="pull-right food-price text-primary">$23.99</span></h5>
                    <p class="food-text">Citrus-chile marinated and mesquite-grilled skirt steak served sizzling at your table.</p>

                    <h5 class="food-title">Roasted Carnitas <span class="pull-right food-price text-primary">$24.99</span></h5>
                    <p class="food-text">Tender, marinated pork simmered with fresh lemons, oranges, garlic and fuego spices.</p>

                    <h5 class="food-title">Shrimp <span class="pull-right food-price text-primary">$39.99</span></h5>
                    <p class="food-text">Shrimp sautéed with fresh diced garlic, white wine and citrus juices with a hint of chile.</p>

                    <h5 class="food-title">Seasonal Veggies <span class="pull-right food-price text-primary">$11.99</span></h5>
                    <p class="food-text">Mesquite-grilled portobello mushroom over farm-fresh yellow squash, zucchini, carrots and green beans.</p>

                    <h5 class="food-title">Grill Fajitas <span class="pull-right food-price text-primary">$17.99</span></h5>
                    <p class="food-text">The Best of the Best! Mesquite-grilled chicken breast marinated in fresh citrus and chiles.</p>
                </div>
                <!-- / menu-items
            </div>
            <!-- / row
        </div>
        <!-- / container
    </section> -->
    <!-- / main-menu -->

    <!-- <section id="desserts-menu">
        <div class="container">
            <div class="page-header text-center">
                <h2 class="text-primary">Desserts</h2>
            </div>
            <!-- / page-header
            <img src="Temp/images/deserts-food.jpg" alt="" class="food-img wow fadeInUp first">
            <div class="row">
                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Fried IceCream <span class="pull-right food-price text-primary">$5.99</span></h5>
                    <p class="food-text">We roll our creamy vanilla ice cream in a crispy coating, topped with homemade Cajeta caramel.</p>

                    <h5 class="food-title">Flan <span class="pull-right food-price text-primary">$7.99</span></h5>
                    <p class="food-text">Our creamy vanilla custard in a homemade sweet caramel sauce.</p>

                    <h5 class="food-title">Grilled Pineapple <span class="pull-right food-price text-primary">$6.99</span></h5>
                    <p class="food-text">Chambord-infused grilled pineapple topped with ice cream, whipped cream and drizzled with Chambord sauce.</p>

                    <h5 class="food-title">Chewy Sundae <span class="pull-right food-price text-primary">$10.99</span></h5>
                    <p class="food-text">Fresh-baked brownie, rich vanilla ice cream drenched in homemade Cajeta caramel and chocolate sauces.</p>

                    <h5 class="food-title">Tequila Bread Pudding <span class="pull-right food-price text-primary">$14.99</span></h5>
                    <p class="food-text">Bread pudding soaked in a creamy Kahlua and tequila sauce, then baked to perfection.</p>
                </div>
                <!-- / menu-items

                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Fried IceCream <span class="pull-right food-price text-primary">$5.99</span></h5>
                    <p class="food-text">We roll our creamy vanilla ice cream in a crispy coating, topped with homemade Cajeta caramel.</p>

                    <h5 class="food-title">Flan <span class="pull-right food-price text-primary">$7.99</span></h5>
                    <p class="food-text">Our creamy vanilla custard in a homemade sweet caramel sauce.</p>

                    <h5 class="food-title">Grilled Pineapple <span class="pull-right food-price text-primary">$6.99</span></h5>
                    <p class="food-text">Chambord-infused grilled pineapple topped with ice cream, whipped cream and drizzled with Chambord sauce.</p>

                    <h5 class="food-title">Chewy Sundae <span class="pull-right food-price text-primary">$10.99</span></h5>
                    <p class="food-text">Fresh-baked brownie, rich vanilla ice cream drenched in homemade Cajeta caramel and chocolate sauces.</p>

                    <h5 class="food-title">Tequila Bread Pudding <span class="pull-right food-price text-primary">$14.99</span></h5>
                    <p class="food-text">Bread pudding soaked in a creamy Kahlua and tequila sauce, then baked to perfection.</p>
                </div>
                <!-- / menu-items

                <div class="col-md-4 menu-items wow fadeIn first">
                    <h5 class="food-title">Fried IceCream <span class="pull-right food-price text-primary">$5.99</span></h5>
                    <p class="food-text">We roll our creamy vanilla ice cream in a crispy coating, topped with homemade Cajeta caramel.</p>

                    <h5 class="food-title">Flan <span class="pull-right food-price text-primary">$7.99</span></h5>
                    <p class="food-text">Our creamy vanilla custard in a homemade sweet caramel sauce.</p>

                    <h5 class="food-title">Grilled Pineapple <span class="pull-right food-price text-primary">$6.99</span></h5>
                    <p class="food-text">Chambord-infused grilled pineapple topped with ice cream, whipped cream and drizzled with Chambord sauce.</p>

                    <h5 class="food-title">Chewy Sundae <span class="pull-right food-price text-primary">$10.99</span></h5>
                    <p class="food-text">Fresh-baked brownie, rich vanilla ice cream drenched in homemade Cajeta caramel and chocolate sauces.</p>

                    <h5 class="food-title">Tequila Bread Pudding <span class="pull-right food-price text-primary">$14.99</span></h5>
                    <p class="food-text">Bread pudding soaked in a creamy Kahlua and tequila sauce, then baked to perfection.</p>
                </div>
                <!-- / menu-items
            </div>
            <!-- / row
        </div>
        <!-- / container
    </section> -->
    <!-- / desserts-menu -->

    <!-- <section id="coffee-menu">
        <div class="container">
            <div class="page-header text-center">
                <h2 class="text-primary">Coffee</h2>
            </div>
            <!-- / page-header
            <img src="Temp/images/coffee-menu.jpg" alt="" class="food-img  wow fadeInUp first">
            <div class="row">
                <div class="col-md-6 menu-items wow fadeIn first">
                    <h5 class="food-title">Mexican Coffee <span class="pull-right food-price text-primary">$1.99</span></h5>
                    <p class="food-text">Cuervo Tradicional Tequila, Kahlua, coffee and whipped cream.</p>

                    <h5 class="food-title">Patrón XO Coffee <span class="pull-right food-price text-primary">$2.99</span></h5>
                    <p class="food-text">Patron Citronge, Patron XO, cinnamon, coffee and whipped cream.</p>

                    <h5 class="food-title">Keoke coffee <span class="pull-right food-price text-primary">$3.99</span></h5>
                    <p class="food-text">Presidente Brandy, Patron XO, coffee and whipped cream.</p>

                    <h5 class="food-title">B-52 Coffee <span class="pull-right food-price text-primary">$4.99</span></h5>
                    <p class="food-text">Baileys Irish Cream, Kahlua, Grand Marnier, coffee and whipped cream.</p>
                </div>
                <!-- / menu-items

                <div class="col-md-6 menu-items wow fadeIn first">
                    <h5 class="food-title">Mexican Coffee <span class="pull-right food-price text-primary">$1.99</span></h5>
                    <p class="food-text">Cuervo Tradicional Tequila, Kahlua, coffee and whipped cream.</p>

                    <h5 class="food-title">Patrón XO Coffee <span class="pull-right food-price text-primary">$2.99</span></h5>
                    <p class="food-text">Patron Citronge, Patron XO, cinnamon, coffee and whipped cream.</p>

                    <h5 class="food-title">Keoke coffee <span class="pull-right food-price text-primary">$3.99</span></h5>
                    <p class="food-text">Presidente Brandy, Patron XO, coffee and whipped cream.</p>

                    <h5 class="food-title">B-52 Coffee <span class="pull-right food-price text-primary">$4.99</span></h5>
                    <p class="food-text">Baileys Irish Cream, Kahlua, Grand Marnier, coffee and whipped cream.</p>
                </div>
                <!-- / menu-items
            </div>
            <!-- / row
        </div>
        <!-- / container
    </section> -->
    <!-- / coffee-menu -->

    <!-- <section id="drinks-menu">
        <div class="container">
            <div class="page-header text-center">
                <h2 class="text-primary">Drinks</h2>
            </div>
            <!-- / page-header
            <img src="Temp/images/drinks-menu.jpg" alt="" class="food-img wow fadeInUp first">
            <div class="row">
                <!-- <div class="col-md-6 menu-items wow fadeIn first">
                    <h5 class="food-title">Cadillac Margarita <span class="pull-right food-price text-primary">$9.99</span></h5>
                    <p class="food-text">1800 Reposado Tequila, triple sec and sweet & sour mix with a side shot of Cointreau Noir.</p>

                    <h5 class="food-title">Mexican Bulldog <span class="pull-right food-price text-primary">$10.99</span></h5>
                    <p class="food-text">On the rocks or frozen: Coronita served upside-down in a premium Cazadores margarita.</p>

                    <h5 class="food-title">Bottled Beers <span class="pull-right food-price text-primary">$4.99</span></h5>
                    <p class="food-text">Red Pinot Noir, delicate and smooth</p>

                    <h5 class="food-title">Seaglass <span class="pull-right food-price text-primary">$11.99</span></h5>
                    <p class="food-text">Baileys Irish Cream, Kahlua, Grand Marnier, coffee and whipped cream.</p>

                    <h5 class="food-title">Noble Vines 337 <span class="pull-right food-price text-primary">$32.99</span></h5>
                    <p class="food-text">Red Cabernet Sauvignon, rich and full-bodied</p>
                </div> -->
    <!-- / menu-items -->

    <!-- <div class="col-md-6 menu-items wow fadeIn first">
                    <h5 class="food-title">Cadillac Margarita <span class="pull-right food-price text-primary">$9.99</span></h5>
                    <p class="food-text">1800 Reposado Tequila, triple sec and sweet & sour mix with a side shot of Cointreau Noir.</p>

                    <h5 class="food-title">Mexican Bulldog <span class="pull-right food-price text-primary">$10.99</span></h5>
                    <p class="food-text">On the rocks or frozen: Coronita served upside-down in a premium Cazadores margarita.</p>

                    <h5 class="food-title">Bottled Beers <span class="pull-right food-price text-primary">$4.99</span></h5>
                    <p class="food-text">Red Pinot Noir, delicate and smooth</p>

                    <h5 class="food-title">Seaglass <span class="pull-right food-price text-primary">$11.99</span></h5>
                    <p class="food-text">Baileys Irish Cream, Kahlua, Grand Marnier, coffee and whipped cream.</p>

                    <h5 class="food-title">Noble Vines 337 <span class="pull-right food-price text-primary">$32.99</span></h5>
                    <p class="food-text">Red Cabernet Sauvignon, rich and full-bodied</p>
                </div> -->
    <!-- / menu-items
            </div>
            <!-- / row
        </div>
        <!-- / container
    </section> -->
    <!-- / drinks-menu -->

    <!-- / content -->

    <!-- scroll to top -->
    <a href="javascript:forprint()">Print</a>
    <a href="#top" class="scroll-to-top page-scroll is-hidden" data-nav-status="toggle"><i class="fa fa-angle-up"></i></a>
    <!-- / scroll to top -->
    <div id="Menu">
      <?php
$myfile = fopen("../goodnessGraceUs/Temp/MenuJan2018/menu.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("../goodnessGraceUs/Temp/MenuJan2018/menu.txt"));
fclose($myfile);
?>
    </div>
    <!-- footer -->
    <footer>
        <div class="container">
          <p class="footer-info">© <strong> </strong> Goodness GraceUs.
                <span class="social pull-right">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </span>
            </p>
        </div>
        <!-- / container -->
    </footer>
    <!-- / footer -->

    <!-- javascript -->
    <script src="Temp/js/jquery.min.js"></script>
    <script src="Temp/js/bootstrap.min.js"></script>

    <!-- sticky nav -->
    <script src="Temp/js/jquery.easing.min.js"></script>
    <script src="Temp/js/scrolling-nav-sticky.js"></script>
    <!-- / sticky nav -->

    <!-- preloader -->
    <script src="Temp/js/preloader.js"></script>
    <!-- / preloader -->

    <!-- wow -->
    <script src="Temp/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!-- / wow -->

    <!-- hide nav -->
    <script src="Temp/js/hide-nav.js"></script>
    <!-- / hide nav -->
    <script src="Temp/js/custom.js"></script>

    <!-- / javascript -->
    <!-- <script>
        function getMenu() {

            var rawFile = new XMLHttpRequest();
            rawFile.open("GET", "../MenuJan2018/Menu.txt", true);
            rawFile.onreadystatechange = function() {
                if (rawFile.readyState === 4) {
                    if (rawFile.status === 200 || rawFile.status == 0) {
                        var allText = rawFile.responseText;
                        console.log(allText);
                    }
                }
            }

            //rawFile.send(null);
        }
    </script> -->
    <!-- <script>
        $.ajax({
            url: "../goodnessGraceUslines/../goodnessGraceUs/MenuJan2018/menu.txt", // path to file
            dataType: 'text', // type of file (text, json, xml, etc)
            success: function(data) { // callback for successful completion
                $("#sentences").html(data);
            },
            error: function() { // callback if there's an error
                alert("error");
            }
        });
    </script> -->
</body>

</html>
