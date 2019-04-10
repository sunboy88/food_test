<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home | Order Food</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <header>
        <div class="inner">
            <div class="container">
                <div class="logo">
                    <span>Food Order Demo</span>
                </div>
                <div class="icon-responsive">
                </div>
            </div>
            <div class="top-navbar">
                <div class="container">
                    <nav class="navbar navbar-expand-sm">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="./index.php">
                                    <i class="fa fa-home"></i>
                                    <span class="top-navbar--item">Home</span>
                                </a>
                            </li>
<!-- 
                            <li class="nav-item" data-toggle="modal" data-target="#myModal">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-plus"></i>
                                    <span class="top-navbar--item">Create</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link joined-order" href="#">
                                    <i class="fa fa-tasks"></i>
                                    <span class="top-navbar--item">Joined Orders</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./OrderManagement.html">
                                    <i class="fa fa-list-ul"></i>
                                    <span class="top-navbar--item">Created Orders</span>
                                </a -->>
                            </li>
                            <li class="nav-item" data-toggle="modal" data-target="#login" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <a class="nav-link" href="#">
                                    <i class="fa fa-cog"></i>
                                    <span class="top-navbar--item">Log in</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="nav navbar-nav">
                </div>
            </div>
            <div class="header-background"></div>
        </div>
    </header>
    <section class="main-content flex-1">
        <div class="container">
        	<div class="col-md-20">
            <h4>Shopping Cart</h4>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Items</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="detail_cart">
 
                </tbody>
                 
            </table>
        </div>
            <div class="content-list">
                <div class="list-order">
                <?php foreach ($products as $key => $item): ?>
                    <div class="row article">
                              
                        <div class="col-md-4 col-sm-4 col-xs-4 thumbnail-wrapper">
                            <div class="thumbnail">
                                <!-- <a href="./order_detail.html"> -->
                                    <img src="<?php echo base_url();?>assets/products/<?php echo $item->avatar ?>" />
                                <!-- </a> -->
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-6 info-wrapper" >
                            <h2 class="article-title">
              								<a class="article-title" href="./order_detail.html"><?php echo $item->name ?></a>
              							</h2>
                            <span class="description">
              								<?php echo $item->detail ?>
              							</span>

                            <h2 class="price">
								<span class="price-text">Price:</span> <?php  echo number_format( $item->price, 2, ',', ' ' ); ?> &nbsp; (USD)
							</h2>
							<?php //foreach ($tax as $t): ?>
								<h2 class="price">
									<span class="price-text"><?php echo $tax->name ?>: </span> <?php echo $tax->value ?> &nbsp; (%)
								</h2>
							<?php //endforeach; ?>
							<div class="col-md-5">
                                    <input  type="number" name="quantity" id="<?php echo $item->id;?>" value="1" class="quantity form-control">
                                </div>
                            <!-- <div class="time-out">
                                <span class="fa fa-clock-o"></span>
                                <span class="count-down">15:00</span>
                            </div> -->

                            <div class="number-joine-res">
                                <span class="fa fa-user joined-res"></span> &nbsp;
                                <span>(6 / 9)</span>
                            </div>

                        </div>

                        <div class="col-md-2 join-order">
                        <button class="add_cart btn btn-success btn-block" data-productid="<?php echo $item->id;?>" data-productname="<?php echo $item->name;?>" data-productprice="<?php echo $item->price;?>">Buy</button>
                            <!-- <button type="button" class="btn btn-success btn-lg" data-toggle="collapse" data-target="#join-form"><span class="fa fa-plus"></span> Buy</button> -->

                           <!--  <div class="number-join">
                                <span class="fa fa-user joined"></span> &nbsp;
                                <span>(6 / 9)</span>
                            </div> -->
                        </div>
                        
                    </div>
                   <?php endforeach; ?>





                    

                

                </div>
            </div>
        </div>

      <!--   <div class="container" >
            <div class="row">
                <div class="col-lg-6 offset-lg-3 py-5 d-flex">
                    <ul class="pagination mx-auto">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">»</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div> -->
    </section>

    <footer>
        <div class="subfooter">
            <div class="container">
                
                <div class="row bottom-footer">
                    <div class="col-md-12 sprate-line"></div>
                    <div class="col-md-8">Food order demo @ 2019 | All rights reserved</div>
                    <div class="col-md-4" style="text-align: right;">
                        <a href="#">About us |</a>
                        <a href="#" title="#">Privacy statement</a>
                </div>

            </div>
        </div>
    </footer>

    <div id="myModal" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title login-form-title">Create Order</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="#" method="get" style="font-family: Poppins-Regular">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-4" style="text-align: center;">
                                    <img class="img-CO" src="../images/Axon-icon.jpg">
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Title" />
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" type="number" min="0" step="1000" placeholder="Price" />
                                            <div class="input-group-append">
                                                <span class="input-group-text">VND</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="number" min="0" step="1" placeholder="Maximum Joiner" />
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group date" style="height: 38px">
                                            <input class="form-control" type="number" min="0" step="5" placeholder="Minutes to Time Out" id="timeText" value="">
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="timepicker">MIN</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <textarea style="height: 181px" class="form-control" placeholder="Description"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="login-form-btn">
                        <Span>Submit</Span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="login" role="dialog" data-dismiss="modal">
        <div class="modal-dialog modal-lg modal-dialog-centered" style="width: auto">
            <div class="container-login">
                <div class="wrap-login modal-content">
                    <form class="login-form">
                        <span class="login-form-title p-b-34">
													<strong>Account Login</strong>
												</span>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input  m-b-20" data-validate="Type user name">
                            <input id="first-name" class="input100" type="text" name="username" placeholder="User name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input  m-b-20" data-validate="Type password">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs1-wrap-input100 validate-input  m-b-20" data-validate="">
                            <input id="team-name-input" class="input100" type="text" name="teamName" placeholder="Team name">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 rs2-wrap-input100 validate-input  m-b-20" data-validate="">
                            <input id ="skype-input" class="input100" type="text" name="skype" placeholder="Skype">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="login-form-label">
                            <input type="checkbox" name="rememberme" value="newletter">
                            <label for="rememberme"><strong>Remember me</strong></label>
                        </div>

                        <div class="container-login-form-btn p-b-10">
                            <button type="button" class="login-form-btn" id ="btnSingin">
                                Sign in
                            </button>
                        </div>
                        <div class="container-login-form-btn">
                            <button type="button" class="login-form-btn" id="btnRegister">
                               Register
                            </button>
                        </div>
                    </form>

                    <div class="login-more" style="background-image: url('../images/Axon-icon.jpg');"></div>
                </div>
            </div>
        </div>
    </div>

<div id="ModalJoinConfirm" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="ModalJoinConfirm" aria-hidden="true" >
    <div class="modal-dialog modal-lg modal-dialog-centered Del" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="#" method="get">
                    <div class="container-fluid">
                        <div class="row-content">
                            <div class="col-sm-6">
                                <h4>Are you sure to join this order?</h4>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">OK</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
            </div>
        </div>
    </div>
</div>


    <script type="text/javascript">
        $('.joined-order').click(function() {
            $('.btn-success').replaceWith("<a href='#' class='btn btn-danger btn-lg'><span class='fa fa-times'></span> Join</a>");
        });

        function redirect(url) {
            window.location.replace(url);
        }
    </script>
<!-- form login -->

    <script>
        $( document ).ready(function() {
            $("#btnRegister").click(function() {
            $("#team-name-input").show();
             $("#skype-input").show();
              $(".remember-form-label").hide();
              $("#title-form").html("<strong>Register Account<strong>");
        });


        $("#btnSingin").click(function() {
                $("#team-name-input").hide();
                $("#skype-input").hide();
                $(".remember-form-label").show();
                $("#title-form").html("<strong>Sigin Account<strong>");
            });

        });


        function redirectUrl(url){
            window.location.href = url;
        }
           $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
			console.log(product_price);
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('product/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    $('#detail_cart').html(data);
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('product/load_cart');?>");
 
         
        $(document).on('click','.remove_cart',function(){
            var row_id=$(this).attr("id");
			console.log(row_id);
            $.ajax({
                url : "<?php echo site_url('product/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

		 $(document).on('click','.coupon',function(){
            var coupon_code=$('#coupon_code').val();; 
            $.ajax({
                url : "<?php echo site_url('product/check_coupon');?>",
                method : "POST",
                data : {coupon_code : coupon_code},
                success :function(data){
                    $('#detail_cart').html(data);
                }
            });
        });

		$(document).on('click','.save_order',function(){
           // var coupon_code=$('#coupon_code').val();; 
            $.ajax({
                url : "<?php echo site_url('product/save_order');?>",
                method : "POST",
                //data : {coupon_code : coupon_code},
                success :function(data){
                    //$('#detail_cart').html(data);
                }
            });
        });
    </script>


</body>

</html>