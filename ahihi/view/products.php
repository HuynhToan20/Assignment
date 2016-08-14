<?php
	include '../view/header.php';
?>
<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="#">Men </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Women </a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails </a></li>
			</ul>
		</li>
		<li class="item3"><a href="#">Kids</a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">Accesories</a>
			<ul class="cute">
				<li class="subitem1"><a href="single.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="single.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="single.html">Automatic Fails</a></li>
			</ul>
		</li>
				
		<li class="item4"><a href="#">Shoes</a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
			</ul>
		</li>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Lorem Ipsum</h6>
						<a href="single.html" class="shop-now">SHOP NOW</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">dress</a></li>
										<li><a href="#">design</a></li>
										<li><a href="#">fashion</a></li>
										<li><a href="#">lorem</a></li>
										<li><a href="#">dress   </a></li>
										
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Best Sellers</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href="single.html"><img class="img-responsive " src="../view/images/p1.jpg" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
                                                    <a href="single.html"><img class="img-responsive " src="../view/images/p2.jpg" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="single.html" >Lorem ipsum dolor sit
amet consectetuer </a></h6>
								
								<span class=" price-in1"> $40.00</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
    <a href="single.html" ><img class="img-responsive" src="../view/images/pro.jpg" alt="">
				<div class="six1">
					<h4>DISCOUNT</h4>
					<p>Up to</p>
					<span>60%</span>
				</div></a>
			</div>
				</div>
				<div class="col-md-9 product1">
				<div class=" bottom-product">
                                    
                                     <?php
        $pro = new Products();
        
        
        $display = 12;
        if(isset($_GET['page']) && (int)$_GET['page']) {
                $page = $_GET['page'];
            } else { //neu chua xac dinh, thi tim so trang
                $count = $pro->CountProduct($Category);
                $record = $count[0];
                
                if($record > $display) {
                    $page = ceil($record/$display);
                } else {
                    $page = 1;
                }
            }
        $start = (isset($_GET['start']) && (int)$_GET['start']>=0) ? $_GET['start'] : 0;

        $result = $pro->getListPageOrderProduct($start,$display,$Category);
        $dem =0;
        while($set = $result -> fetch()):
            $dem++;?>         
                                    <div class="col-md-4 bottom-cd simpleCart_shelfItem" style="margin-bottom: 15px;">
		<div class="product-at ">
                    <a href="?action=products_details&id=<?php echo $set['ProductID'] ?>"><img class="img-responsive" src="<?php echo '../view/images/'.$set['ProductImage'] ?>" width="255" height="300" alt="">
		<div class="pro-grid">
		<span class="buy-in">Buy Now</span>
		</div>
		</a>	
		</div>
		<p class="tun"><?php echo $set['ProductDesc']?></p>
		<a href="#" class="item_add"><p class="number item_price"><i> </i>Giá: <?php echo number_format($set['ProductPrice'])?> đồng</p></a>						
            </div>
           <?php
        if($dem%4==0)
       {
        echo '';
       }
        endwhile;
      
      ?>
          
					<div class="clearfix"> </div>
				</div>
				
				</div>
		
		</div>
		
		</div>
			
<?php
        include '../view/footer.php';
?>
