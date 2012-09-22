<?php include 'inc/header.php'; ?>
<section class="container">
	<img id="transparentImg" src="data:images/gif;base64,R0lGODlhAQABAIAAAP///////yH5BAEHAAEALAAAAAABAAEAAAICTAEAOw==" usemap="#mapPrdMenu" alt="transparent" width="500" height="718"  title="" /><!--b64 wont work here!!! ()-->
	<map name="mapPrdMenu" id="mapPrdMenu">
		<area id='prdShoppingMap' shape="poly" coords="364, 10, 124, 148, 124, 280, 368, 138" href="#" alt="" title="" />
		<area id='prdExhibitionMap' shape="poly" coords="315, 187, 72, 325, 73, 460, 316, 320" href="#" alt="" title="" />
		<area id='prdHomeMap' shape="poly" coords="276, 363, 32, 505, 34, 639, 276, 497" href="#" alt="" title="" />
		<area id='prdOfficeMap' shape="poly" coords="412, 433, 172, 573, 170, 709, 414, 565" href="#" alt="" title="" />
	</map>
	<section class="logo"></section>
	<section class="left-col left">
		<?php include "inc/menus.php"; ?>
	</section>
	<section class="right-col">
		<section class="pics_right">
			<section class="product-menu">
				<div class="prd1">
					<div class="rlt">
						<div class="bg-img1"></div>
						<div id="prdShopping" class="hover-mode">
							<div class="fg-img"></div>
							<a class="pic1">shopping</a>
						</div>
					</div>
				</div>
				<div class="prd2">
					<div class="rlt">
						<div class="bg-img2"></div>
						<div id="prdExhibition" class="hover-mode">
							<div class="fg-img"></div>
							<a class="pic2">exhibition</a>
						</div>
					</div>
				</div>
			<div class="prd3">
					<div class="rlt">
						<div class="bg-img3"></div>
						<div id="prdHome" class="hover-mode">
							<div class="fg-img"></div>
							<a class="pic3">home</a>
						</div>
					</div>
				</div>
				<div class="prd4">
					<div class="rlt">
						<div class="bg-img4"></div>
						<div id="prdOffice" class="hover-mode">
							<div class="fg-img"></div>
							<a class="pic4">office</a>
						</div>
					</div>
				</div>
			</section>
		</section>
	</section>
</section>
<?php include 'inc/footer.php'; ?>