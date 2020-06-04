<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Get Drunk</title>

  <!-- Font awesome -->
  <link href="css/font-awesome.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- SmartMenus jQuery Bootstrap Addon CSS -->
  <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
  <!-- Product view slider -->
  <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">
  <!-- slick slider -->
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <!-- price picker slider -->
  <link rel="stylesheet" type="text/css" href="css/nouislider.css">
  <!-- Theme color -->
  <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
  <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
  <!-- Top Slider CSS -->
  <link href="css/sequence-theme.modern-slide-in.css" rel="stylesheet" media="all">

  <!-- Main style sheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Google Font -->
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
  <!-- wpf loader Two -->
  <div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
      <span>Loading</span>
    </div>
  </div>
  <!-- / wpf loader Two -->
  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header section -->
  <header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-top-area">
              <!-- start header top left -->
              <!-- / header top left -->
              <div class="aa-header-top-right">
                <ul class="aa-head-top-nav-right">
                  <li><a href="account.php">Login</a></li>
                  <li class="hidden-xs"><a href="meu-carrinho.php">Meu Carrinho</a></li>
                  <li class="hidden-xs"><a href="checkout.php">Checkout</a></li>
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header top  -->
    <!-- start header bottom  -->
    <div class="aa-header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-header-bottom-area">
              <!-- logo  -->
              <div class="aa-logo">
                <!-- Text based logo -->
                <a href="index.php">
                  <span class="fa fa-shopping-cart"></span>
                  <p>Get<strong>Drunk</strong> <span>Sua bebida na mão</span></p>
                </a>
                <!-- img based logo -->
                <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
              </div>
              <!-- / logo  -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / header bottom  -->
  </header>
  <!-- / header section -->
  <!-- menu -->
  <section id="menu">
    <div class="container">
      <div class="menu-area">
        <!-- Navbar -->
        <div class="navbar navbar-default" role="navigation">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse">
            <!-- Left nav -->
            <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Bebidas <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="nao-alcoolica.php">Não alcoólicas</a></li>
                  <li><a href="destilados.php">Destilados</a></li>
                  <li><a href="cerveja.php">Cervejas</a></li>
                  <li><a href="vinho.php">Vinhos</a></li>
                  <li><a href="whisky.php">Whiskys</a></li>
              </li>
            </ul>
            </li>
            <li><a href="sobre.php">Sobre <span class=""></span></a>
            </li>
            <li><a href="contact.php">Contato</a></li>
            </ul>
          </div>
          <!--/.nav-collapse -->
        </div>
      </div>
    </div>
  </section>
  <!-- / menu -->
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/checkout.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
        <div class="aa-catg-head-banner-content">
          <h2>Checkout</h2>
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Checkout</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <!-- / catg header banner section -->

  <!-- Cart view section -->
  <section id="checkout">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="checkout-area">
            <form action="">
              <div class="row">
                <div class="col-md-8">
                  <div class="checkout-left">
                    <div class="panel-group" id="accordion">
                      <!-- Coupon section -->
                      <div class="panel panel-default aa-checkout-coupon">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                              Have a Coupon?
                            </a>
                          </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                          <div class="panel-body">
                            <input type="text" placeholder="Coupon Code" class="aa-coupon-code">
                            <input type="submit" value="Apply Coupon" class="aa-browse-btn">
                          </div>
                        </div>
                      </div>
                      <!-- Login section -->
                      <div class="panel panel-default aa-checkout-login">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                              Client Login
                            </a>
                          </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                          <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptatibus modi pariatur qui reprehenderit asperiores fugiat deleniti praesentium enim incidunt.</p>
                            <input type="text" placeholder="Email">
                            <input type="password" placeholder="Senha">
                            <button type="submit" class="aa-browse-btn">Login</button>
                            <label for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
                            
                          </div>
                        </div>
                      </div>
                      <!-- Billing Details -->
                      <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Billing Details
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="First Name*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Last Name*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Company name">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="email" placeholder="Email Address*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="tel" placeholder="Phone*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <textarea cols="8" rows="3">Address*</textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <select>
                                    <option value="0">Select Your Country</option>
                                    <option value="1">Australia</option>
                                    <option value="2">Afganistan</option>
                                    <option value="3">Bangladesh</option>
                                    <option value="4">Belgium</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">Canada</option>
                                    <option value="7">China</option>
                                    <option value="8">Denmark</option>
                                    <option value="9">Egypt</option>
                                    <option value="10">India</option>
                                    <option value="11">Iran</option>
                                    <option value="12">Israel</option>
                                    <option value="13">Mexico</option>
                                    <option value="14">UAE</option>
                                    <option value="15">UK</option>
                                    <option value="16">USA</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Appartment, Suite etc.">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="City / Town*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="District*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Postcode / ZIP*">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- Shipping Address -->
                      <div class="panel panel-default aa-checkout-billaddress">
                        <div class="panel-heading">
                          <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                              Shippping Address
                            </a>
                          </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                          <div class="panel-body">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="First Name*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Last Name*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Company name">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="email" placeholder="Email Address*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="tel" placeholder="Phone*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <textarea cols="8" rows="3">Address*</textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <select>
                                    <option value="0">Select Your Country</option>
                                    <option value="1">Australia</option>
                                    <option value="2">Afganistan</option>
                                    <option value="3">Bangladesh</option>
                                    <option value="4">Belgium</option>
                                    <option value="5">Brazil</option>
                                    <option value="6">Canada</option>
                                    <option value="7">China</option>
                                    <option value="8">Denmark</option>
                                    <option value="9">Egypt</option>
                                    <option value="10">India</option>
                                    <option value="11">Iran</option>
                                    <option value="12">Israel</option>
                                    <option value="13">Mexico</option>
                                    <option value="14">UAE</option>
                                    <option value="15">UK</option>
                                    <option value="16">USA</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Appartment, Suite etc.">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="City / Town*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="District*">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="aa-checkout-single-bill">
                                  <input type="text" placeholder="Postcode / ZIP*">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12">
                                <div class="aa-checkout-single-bill">
                                  <textarea cols="8" rows="3">Special Notes</textarea>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="checkout-right">
                    <h4>Order Summary</h4>
                    <div class="aa-order-summary-area">
                      <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th>Product</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>T-Shirt <strong> x 1</strong></td>
                            <td>$150</td>
                          </tr>
                          <tr>
                            <td>Polo T-Shirt <strong> x 1</strong></td>
                            <td>$250</td>
                          </tr>
                          <tr>
                            <td>Shoes <strong> x 1</strong></td>
                            <td>$350</td>
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Subtotal</th>
                            <td>$750</td>
                          </tr>
                          <tr>
                            <th>Tax</th>
                            <td>$35</td>
                          </tr>
                          <tr>
                            <th>Total</th>
                            <td>$785</td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    <h4>Payment Method</h4>
                    <div class="aa-payment-method">
                      <label for="cashdelivery"><input type="radio" id="cashdelivery" name="optionsRadios"> Cash on Delivery </label>
                      <label for="paypal"><input type="radio" id="paypal" name="optionsRadios" checked> Via Paypal </label>
                      <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">
                      <input type="submit" value="Place Order" class="aa-browse-btn">
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->

  <!-- footer -->
  <footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-top-area">
              <div class="row">
                <div class="col-md-3 col-sm-6">
                  <div class="aa-footer-widget" style="margin-left: 40px">
                    <h3>Menu</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="index.php">Home</a></li>
                      <li>Bebidas</li>
                      <li><a href="nao-alcoolica.php">Não Alcoólicas</a></li>
                      <li><a href="destilado.php">Destilados</a></li>
                      <li><a href="cerveja.php">Cervejas</a></li>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" style="margin-left: -90px; margin-top: 50px">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <ul class="aa-footer-nav">
                        <li><a href="vinho.php">Vinhos</a></li>
                        <li><a href="whisky.php">Whiskys</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="contact.ph">Contato</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6" style="margin-left: 90px">
                  <div class="aa-footer-widget">
                    <div class="aa-footer-widget">
                      <h3>Fale Conosco</h3>
                      <address>
                        <p>Avenida Paulista, 1765, São Paulo</p>
                        <p>11 97070-7070</p>
                        <p>contato@getdrunk.com.br</p>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="aa-footer-bottom-area">
              <p>Feito por Anna, Larissa, Matheus e William</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
  <!-- Login Modal -->
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login</h4>
          <form class="aa-login-form" action="">
            <label for="">Email<span>*</span></label>
            <input type="text" placeholder="Email">
            <label for="">Senha<span>*</span></label>
            <input type="password" placeholder="Senha">
            <button class="aa-browse-btn" type="submit">Login</button>
            <div class="aa-register-now">
              Não tem uma conta?<a href="account.php">Registre-se</a>
            </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.js"></script>
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="js/jquery.smartmenus.bootstrap.js"></script>
  <!-- To Slider JS -->
  <script src="js/sequence.js"></script>
  <script src="js/sequence-theme.modern-slide-in.js"></script>
  <!-- Product view slider -->
  <script type="text/javascript" src="js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="js/custom.js"></script>

</body>

</html>