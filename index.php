<!DOCTYPE html>

<html>
	<head>
		<title>TODO supply a title</title>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link type="text/css" rel="stylesheet" href="style/jquery-ui.css" />
		<link href="style/lightbox.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style/font-awesome.css"  rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" href="style/foundation.css" type="text/css">
		<link rel="stylesheet" href="style/index.css" type="text/css">
		<script type="text/javascript" src="js/jquery-3.1.1.js" ></script>
		<script type="text/javascript" src="js/jquery-ui.js" ></script>
		<style>
		</style>
	</head>
	<body>
		<div class="conteneur-global">
			<div class="menu-haut">
				<ul>
					<li><a><img src="style/drapeau.bmp"></a> </li>						
					<li><span>Good Evening, </span>versesdesign</li>
					<li><a><i class="fa fa-comment" aria-hidden="true"></i></a></li>
					<li><a><i class="fa fa-star" aria-hidden="true"></i></a></li>
					<li><a><i class="fa fa-heart" aria-hidden="true"></i></a></li>
					<li><a><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
					<li><a href><i class="fa fa-lock" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="slide">	
			</div>
			<div class="conteneur-menu-bas">
				<div class="menu-bas">
					<ul> 
						<?php
						include_once 'menu.php';
						?>
					</ul>
				</div>	
			</div>
			<div class="conteneur-featured-items">
				<div class="featured-items">
					<div class="titres">
						<h2>Featured Items</h2>
						<a>View all items</a>
						<h2>Top Selling Brands</h2>
					</div>	
					<div class="img-featured-items">
						<div class="columne">
							<img src="style/chaussure1.jpg">
							<div class="marques">Gucci Shoes</div>
						</div>
						<div class="columne">
							<img src="style/chaussure2.jpg">
							<div class="marques">Nike Sports Shoes</div>
						</div>
						<div class="columne">
							<img src="style/chaussure3.jpg">
							<div class="marques">Nike Golf Cap</div>
						</div>
						<div class="columne">
							<img src="style/chaussure4.jpg">
							<div class="marques">Nike Golf Cap</div>
						</div>
						<div class="columne"><img src="style/gucci.jpg"></div>
					</div>
				</div>

			</div>
			<div class="conteneur-items-globale">
				<div class="conteneur-items">
					<div class="titres">
						<h2>Popular categories</h2>
						<h2>Top Selling items</h2>
						<a>View all items</a>
					</div>

					<div class="right-column">
						<div class="categories">
							<a href="#">
								<div class="button-categories">
									<p class="choix">
										<span>WOMEN</span> SHOES STARTS FROM <span class="prix">50$</span>
									</p>

								</div>
							</a>
							<div class="first-triangle"></div>
							<div class="seconde-triangle"></div>
						</div>
						<div class="categories">
							<a href="#">
								<div class="button-categories">
									<p class="choix">
										<span>MEN</span> DRESS SHOES STARTS FROM  
									</p>
								</div>
							</a>
							<div class="first-triangle"></div>
							<div class="seconde-triangle"></div>
						</div>
						<div class="categories">
							<a href="#">
								<div class="button-categories">
									<p class="choix">
										<span>KIDS</span> ACCESSORIES STARTS FROM 
									</p>
								</div>
							</a>
							<div class="first-triangle"></div>
							<div class="seconde-triangle"></div>
						</div>
						<div class="categories">
							<a href="#">
								<div class="button-categories">
									<p class="choix">
										<span>MEN</span> SUITS STARTS FROM 
									</p>
								</div>
								<div class="price"></div>
							</a>
							<div class="first-triangle"></div>
							<div class="seconde-triangle"></div>
						</div>
						<h2>What's hot</h2>
						<div class="stores">

							<div class="button-stores">
								<p>WOMEN STORE</p>
								<p>GARMENTS & ACCESSORIES</p>
							</div>
							<div class="price-stores">
								<p>Starts from</p>
								<p>45</p>
							</div>
							<div class="triangle a"></div>
							<div class="triangle b"></div>
							<div class="triangle c"></div>
							<div class="triangle d"></div>
							<div class="triangle e"></div>
							<div class="triangle f"></div>
							<div class="triangle g"></div>
							<div class="triangle h"></div>
							<div class="triangle i"></div>
							<div class="triangle j"></div>
							<div class="triangle k"></div>

						</div>
						<div class="stores">

							<div class="button-stores">
								<p>MAN STORE</p>
								<p>GARMENTS & ACCESSORIES</p>
							</div>
							<div class="price-stores">
								<p>Starts from</p>
								<p>45</p>
							</div>
							<div class="triangle a"></div>
							<div class="triangle b"></div>
							<div class="triangle c"></div>
							<div class="triangle d"></div>
							<div class="triangle e"></div>
							<div class="triangle f"></div>
							<div class="triangle g"></div>
							<div class="triangle h"></div>
							<div class="triangle i"></div>
							<div class="triangle j"></div>
							<div class="triangle k"></div>
						</div>
						<h2>Promotions</h2>
						<div class="promotion1">NO PROMOTION ATM</div>
						<div class="promotion2">NO PROMOTION ATM</div>

					</div>
					<div class="left-column">
						<div class="searche-bar">
							<i class="fa fa-search" aria-hidden="true"></i>
							<div class="demo">
								<form action="#">
									<fieldset>
										<select name="salutation" id="salutation">
											<option disabled selected>Choose brand</option>
											<option>Article1</option>
											<option>Article2</option>
											<option>Article3</option>
											<option>Article4</option>
											<option>Article5</option>
										</select>
									</fieldset>
								</form>
							</div>
							<input type="text" />
							<button>search</button>
						</div>
						<div class="row small-up-3 select-clothe">
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-1" ><img class="img-clothe1" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$550</div>
									<a class="clothe-detail detail1 detail-img1" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img1" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img1" href="#">View details</a>
								</div>

								<h3>Gucci ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-2"><img class="img-clothe2" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$350</div>
									<a class="clothe-detail detail1 detail-img2" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img2" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img2" href="#">View details</a>
								</div>
								<h3>Ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image3"><img class="img-clothe3" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$450</div>
									<a class="clothe-detail detail1 detail-img3" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img3" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img3" href="#">View details</a>
								</div>
								<h3>Gucci suit</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
						</div>
						<hr/>
						<div class="row small-up-3 select-clothe">
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-1" ><img class="img-clothe1" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$550</div>
									<a class="clothe-detail detail1 detail-img1" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img1" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img1" href="#">View details</a>
								</div>

								<h3>Gucci ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-2"><img class="img-clothe2" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$350</div>
									<a class="clothe-detail detail1 detail-img2" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img2" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img2" href="#">View details</a>
								</div>
								<h3>Ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image3"><img class="img-clothe3" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$450</div>
									<a class="clothe-detail detail1 detail-img3" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img3" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img3" href="#">View details</a>
								</div>
								<h3>Gucci suit</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
						</div>
						<hr/>
						<div class="row small-up-3 select-clothe">
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-1" ><img class="img-clothe1" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$550</div>
									<a class="clothe-detail detail1 detail-img1" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img1" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img1" href="#">View details</a>
								</div>

								<h3>Gucci ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image-2"><img class="img-clothe2" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$350</div>
									<a class="clothe-detail detail1 detail-img2" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img2" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img2" href="#">View details</a>
								</div>
								<h3>Ready to wear</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
							<div class="column">
								<div class="contain-picture">
									<a href="img/model1.jpg" data-lightbox="image3"><img class="img-clothe3" src="img/model1.jpg" alt="vetement" /></a>
									<div class="price-clothe">$450</div>
									<a class="clothe-detail detail1 detail-img3" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail2 detail-img3" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a class="clothe-detail detail3 detail-img3" href="#">View details</a>
								</div>
								<h3>Gucci suit</h3>
								<span>Enim ad mini veniam quis nostrud exercitation</span>
							</div>
						</div>
						<hr/>
					</div>
				</div> 
			</div>

		</div>
		<footer>
			<div class="max-width">
				<ul>
					<li><a href="#">Blog</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="#">Press</a></li>
					<li><a href="#">Developers</a></li>
					<li><a href="#">Careers</a></li>
					<li><a href="#">Terms</a></li>
					<li><a href="#">Privacy</a></li>
					<li><a href="#">Copyright</a></li>
				</ul>
				<div class="social-icon">
					<span>Connect with us</span>
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					<i class="fa fa-rss" aria-hidden="true"></i>
				</div>
			</div>
		</footer>
		<script type="text/javascript" src="js/lightbox.js"></script>
		<script type="text/javascript" src="slick/slick.js"></script>
	</body>
</html>  


<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>