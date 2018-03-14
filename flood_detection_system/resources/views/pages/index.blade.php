<<<<<<< HEAD
@extends('layouts.master') 
@section('content')
<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">Flood</h1>
                    <p class="intro-text"></p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- About Section -->
<section id="about" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>About Grayscale</h2>
            <p>Grayscale is a free Bootstrap 3 theme created by Start Bootstrap. It can be yours right now, simply download the template on <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>
            <p>This theme features stock photos by <a href="http://gratisography.com/">Gratisography</a> along with a custom Google Maps skin courtesy of <a href="http://snazzymaps.com/">Snazzy Maps</a>.</p>
            <p>Grayscale includes full HTML, CSS, and custom JavaScript files along with LESS files for easy customization.</p>
        </div>
    </div>
</section>

<!-- Download Section -->
<section id="download" class="content-section text-center">
    <div class="download-section">
        <div class="container">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Download Grayscale</h2>
                <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="container content-section text-center">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2>Contact Start Bootstrap</h2>
            <p>Feel free to email us to provide some feedback on our templates, give us suggestions for new templates and themes, or to just say hello!</p>
            <p><a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a>
            </p>

        </div>
    </div>
</section> 
=======
@extends('layouts.master')

@section('body')
<section id="newsSection">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea"> <span>Latest News</span>
				<ul id="ticker01" class="news_sticker">
					<li><a href="#"><img src="images/river1.jpg" alt="">My First News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Second News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Third News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Four News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Five News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Six News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Seven News Item</a></li>
					<li><a href="#"><img src="imagesriver1.jpg" alt="">My Eight News Item</a></li>
					<li><a href="#"><img src="images/river1.jpg" alt="">My Nine News Item</a></li>
				</ul>
				<div class="social_area">
					<ul class="social_nav">
						<li class="facebook"><a href="#"></a></li>
						<li class="twitter"><a href="#"></a></li>
						<li class="flickr"><a href="#"></a></li>
						<li class="pinterest"><a href="#"></a></li>
						<li class="googleplus"><a href="#"></a></li>
						<li class="vimeo"><a href="#"></a></li>
						<li class="youtube"><a href="#"></a></li>
						<li class="mail"><a href="#"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="sliderSection">
	<div class="row">
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="slick_slider">
				<div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/river2.jpg" alt=""></a>
					<div class="slider_article">
						<h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
						<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
					</div>
				</div>
				<div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/river3.jpg" alt=""></a>
					<div class="slider_article">
						<h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
						<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
					</div>
				</div>
				<div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/river1.jpg" alt=""></a>
					<div class="slider_article">
						<h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
						<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
					</div>
				</div>
				<div class="single_iteam"> <a href="pages/single_page.html"> <img src="images/river2.jpg" alt=""></a>
					<div class="slider_article">
						<h2><a class="slider_tittle" href="pages/single_page.html">Fusce eu nulla semper porttitor felis sit amet</a></h2>
						<p>Nunc tincidunt, elit non cursus euismod, lacus augue ornare metus, egestas imperdiet nulla nisl quis mauris. Suspendisse a pharetra urna. Morbi dui...</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="latest_post">
				<h2><span>Latest post</span></h2>
				<div class="latest_post_container">
					<div id="prev-button"><i class="fa fa-chevron-up"></i></div>
					<ul class="latest_postnav">
						<li>
							<div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/river1.jpg"> </a>
								<div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 1</a> </div>
							</div>
						</li>
						<li>
							<div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/river1.jpg"> </a>
								<div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
							</div>
						</li>
						<li>
							<div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/river1.jpg"> </a>
								<div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 3</a> </div>
							</div>
						</li>
						<li>
							<div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/river1.jpg"> </a>
								<div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 4</a> </div>
							</div>
						</li>
						<li>
							<div class="media"> <a href="pages/single_page.html" class="media-left"> <img alt="" src="images/river1.jpg"> </a>
								<div class="media-body"> <a href="pages/single_page.html" class="catg_title"> Aliquam malesuada diam eget turpis varius 2</a> </div>
							</div>
						</li>
					</ul>
					<div id="next-button"><i class="fa  fa-chevron-down"></i></div>
				</div>
			</div>
		</div>
	</div>
</section>
>>>>>>> 48b5443f3912808c3cf64dbd72442c2e59cb27a1
@endsection