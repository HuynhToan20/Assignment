<?php include '../view/admin/header_cpanel.php';?>
<div class="container">
    <div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Lorem Ipsum is not simply dummy  </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
						<a href="single.html">Learn More</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>There are many variations </h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
												<a href="single.html">Learn More</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>Sed ut perspiciatis unde omnis</h3>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor .</p>
								<a href="single.html">Learn More</a>

						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>
    
</div>
<?php include '../view/footer.php';?>