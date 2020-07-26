<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Dendory Capital - Cloud and DevOps services for the world</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Dendory Capital - Cloud and DevOps services for the world">
    <meta name="author" content="Dendory Capital">    
    <link rel="shortcut icon" href="/favicon.jpg"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700|Roboto:400,400i,700&display=swap" rel="stylesheet">
    
    <!-- FontAwesome JS-->
    <script defer src="/assets/fontawesome/js/all.min.js"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="/assets/css/theme.css">

</head> 

<body>    

<?php
if($_POST['email'])
{
    system("alert " .  filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    echo "<div class='author-section section theme-bg-primary py-5'><p><center>Thank you for reaching out! You will be contacted by email shortly.</center></p></div>\n";
}
?>

    <header class="header">	    
        <div class="branding">
            <div class="container-fluid position-relative py-3">
                <div class="logo-wrapper">
	                <div class="site-logo"><a class="navbar-brand" href="/"><img class="logo-icon mr-2" src="/assets/images/site-logo.svg" alt="logo" ><span class="logo-text">Dendory Capital</span></a></div>    
                </div><!--//docs-logo-wrapper-->
	        
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->
    
    <section class="hero-section">
	    <div class="container">
		    <div class="row">
			    <div class="col-12 col-md-7 pt-5 mb-5 align-self-center">
				    <div class="promo pr-md-3 pr-lg-5">
					    <h1 class="headline mb-3">
						    Dendory Capital - Cloud and DevOps services for the world
					    </h1><!--//headline-->
					    <div class="subheadline mb-4">
						    <p>Based in Montreal, Canada, we offer consulting services to entrepreneurs and businesses looking to expand their operations in the cloud, either through Amazon Web Services (AWS) or Microsoft Azure. We also offer DevOps services, including agile workflows, CI/CD, and more.</p>
						    <p>Contact us today to setup a free consulting call and get a quote for your needs.</p>
					    </div><!--//subheading-->
					    
					    <div class="cta-holder">
						    <a class="btn btn-primary mr-lg-2" href="#contactus">Contact us</a>
						    <a class="btn btn-secondary scrollto" href="#benefits-section">Learn More</a>
						    
					    </div><!--//cta-holder-->
					    
				    </div><!--//promo-->
			    </div><!--col-->
			    <div class="col-12 col-md-5 mb-5 align-self-center">
				    <div class="book-cover-holder">
					    <img class="img-fluid book-cover" src="/assets/images/cover.png" alt="book cover" >
					    <div class="book-badge d-inline-block shadow">
						    Since<br>2019!
					    </div>
				    </div><!--//book-cover-holder-->
				    <!--<div class="text-center"><a class="theme-link scrollto" href="#reviews-section">See all book reviews</a></div>-->
			    </div><!--col-->
		    </div><!--//row-->
	    </div><!--//container-->
    </section><!--//hero-section-->
    
    <section id="benefits-section" class="benefits-section theme-bg-light-gradient py-5">
	    <div class="container py-5">
		    <h2 class="section-heading text-center mb-3">Services</h2>
		    <div class="section-intro single-col-max mx-auto text-center mb-5">Dendory Capital offers multiple consulting services depending on your needs. Our pricing can be hourly or project based.</div>
		    <div class="row text-center">
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-laptop-code"></i></div>
						    <h3 class="item-heading">Cloud hosting</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    Whether you need to deploy a web site, mobile app, database, or any sort of IT workload into the cloud, we can design, deploy and manage your servers for you.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fab fa-js-square"></i></div>
						    <h3 class="item-heading">Custom integration</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    Connecting data pipelines, calling REST APIs and designing serverless Python functions are just some of the things we can do depending on your needs.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fab fa-rocketchat"></i></div>
						    <h3 class="item-heading">Consulting calls</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    If your team needs advice on picking the right cloud platform, implementing a CI/CD pipeline or finding the right tool for the job, we can help. 
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fab fa-angular"></i></div>
						    <h3 class="item-heading">Security and audit</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    Security, logging, monitoring and audits are crucial to a well running platform, and we can provide these services as well.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-code-branch"></i></div>
						    <h3 class="item-heading">Hybrid deployments</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    Whether you're looking to move to AWS, Azure, or implement a new DevOps solution in your own datacenter, we have you covered.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			    <div class="item col-12 col-md-6 col-lg-4">
				    <div class="item-inner p-3 p-lg-4">
					    <div class="item-header mb-3">
						    <div class="item-icon"><i class="fas fa-hand-holding-usd"></i></div>
						    <h3 class="item-heading">Transparent billing</h3>
					    </div><!--//item-heading-->
					    <div class="item-desc">
						    We provide services with an hourly cost or fixed-priced based on the project, with detailed invoices so you know what you're paying for.
					    </div><!--//item-desc-->
				    </div><!--//item-inner-->
			    </div><!--//item-->
			</div><!--//row-->
         	  </div>
	    </div><!--//container-->
    </section><!--//benefits-section-->

    <section class="audience-section py-5">
	    <div class="container">
		    <h2 class="section-heading text-center mb-4">Projects</h2>
		    <div class="section-intro single-col-max mx-auto text-center mb-5">
			    Here are some of our past projects, giving you an idea of the technologies we've employed with previous and existing clients.
		    </div><!--//section-intro-->
		    <div class="audience mx-auto">
			    <div class="item media">
				    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
				    <div class="media-body">
					    <h4 class="item-title">High-Availability web app</h4>
					    <div class="item-desc">This project involved the creation of an environment, through infrastructure-as-code, to provide high availability access to a web app running on Linux VMs in AWS, using a load balancer and backend database.</div>
				    </div><!--//media-body-->
			    </div><!--//item-->
			    <div class="item media">
				    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
				    <div class="media-body">
					    <h4 class="item-title">Office 365 email system</h4>
					    <div class="item-desc">The creation and maintenance of an email system for an entire organization, through Microsoft Office 365, including distribution lists and legal holds.</div>
				    </div><!--//media-body-->
			    </div><!--//item-->
			    <div class="item media">
				    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
				    <div class="media-body">
					    <h4 class="item-title">Worldwide content delivery</h4>
					    <div class="item-desc">Hosting and distribution of content through various AWS datacenters around the world, using a CDN to provide low latency streaming content to people from multiple locations.</div>
				    </div><!--//media-body-->
			    </div><!--//item-->
			    <div class="item media">
				    <div class="item-icon mr-3"><i class="fas fa-user-check"></i></div>
				    <div class="media-body">
					    <h4 class="item-title">CI/CD pipelines for building software</h4>
					    <div class="item-desc">The implementation of a Jenkins system, with a robust pipeline, to allow developers to build, tests and deploy their software using a single click.</div>
				    </div><!--//media-body-->
			    </div><!--//item-->
		    </div><!--//audience-->
	    </div><!--//container-->
    </section><!--//audience-section--><br>

    <section id="contactus" class="form-section">
	    <div class="container">
		    <div class="lead-form-wrapper single-col-max mx-auto theme-bg-light rounded p-5">
			    <h2 class="form-heading text-center">Contact us</h2>
			    <div class="form-intro text-center mb-3">You can contact us email at <a href='mailto:contact@dendory.ca'>contact@dendory.ca</a>, by phone at (514) 243-8176, or enter your contact details here and we will get back to you within 24h.</div>
			    <div class="form-wrapper">
				    <form class="form-inline justify-content-center flex-wrap" method="post" action="/">
					<div class="form-group mr-md-2 mb-3 mb-md-0">
						<label for="email" class="sr-only">Email</label>
						<input type="email" name="email" class="form-control " id="email" placeholder="Your Email" required>
					</div>
					<button type="submit" class="btn btn-primary btn-submit mb-3 mb-md-0">Send</button>
				    </form>
			    </div><!--//form-wrapper-->
		    </div><!--//lead-form-wrapper-->
	    </div><!--//container-->
    </section><!--//form-section-->

<section id="reviews-section" class="reviews-section py-5">
    <div class="container">
    </div>
 </section><br>

    <section id="author-section" class="author-section section theme-bg-primary py-5">
	    <div class="container py-3">
		    <div class="author-profile text-center mb-5">
			    <img class="author-pic" src="/favicon.jpg" alt="image" >
		    </div><!--//author-profile-->
		    <h2 class="section-heading text-center text-white mb-3">About Us</h2>
		    <div class="author-bio single-col-max mx-auto">
			    <p>Dendory Capital was started in 2019 by <a class="theme-link" href="https://dendory.net" target="_blank">Patrick Lambert</a>, someone with over 15 years of tech experience in small businesses as well as large enterprises. From Tech Support Agent, to System Administrator and Solution Architect, Patrick now provides his services as a Cloud and DevOps Consultant.</p>
			    <p>Dendory Capital is there to provide useful services for a low cost, giving you a higher ROI than you would get hiring an internal team. Our goal is to provide the latest technologies in an efficient and successful manner, delivered by our certified experts.</p>
		    </div><!--//author-bio-->
		    
	    </div><!--//container-->
    </section><!--//author-section-->
    
    

    <footer class="footer">

	    <div class="footer-bottom text-center py-5">

            <small class="copyright">Template designed by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a>.</small>
 
	    </div>
	    
    </footer>
       
    <!-- Javascript -->          
    <script src="/assets/plugins/jquery-3.4.1.min.js"></script>
    <script src="/assets/plugins/popper.min.js"></script>
    <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    <script src="/assets/plugins/jquery.scrollTo.min.js"></script>  
    <script src="/assets/plugins/back-to-top.js"></script>  
    
    <script src="/assets/js/main.js"></script>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18964615-5"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18964615-5');
</script>

</body>
</html> 

