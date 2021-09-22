<!DOCTYPE html>
<html>
	<head>
		<title>Flavours</title>
        <link rel="stylesheet" href="css/style.css?dt=<%= DateTime.Now.Ticks %>" type="text/css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
    <body> 
    <section>       
<nav class = "navbar">
    <div class="logo">
        <h1>FLAV<span>OURS</span></h1>
    </div>
    
    <div class="navbar_links">
    <ul>
        <li><a href="Registration.php">Sign up</a></li>
    </ul>
</div>
</nav>
</section>
        
        <section class="bg">
            <p class="head">ORDER FOOD TO YOUR DOORSTEP<br><span class="sub-head">Get your favourite food delivered to your doorstep with a few clicks</span></p>
            <div class="container">
                <div class="center">
                <a href="Login.php"><button type="button" class="button" >Login to order</i></button></a>
                </div>
            </div>
        </section>
        
        <div class="blwfold">
        <section class="testimonials">
          <h2 class="testimonials-title">What our clients say</h2>
            <div class="container">
          
              <div class="slides">
                <div id="slide-1" class="slide-ctrl"></div>
                <div id="slide-2" class="slide-ctrl"></div>
                <div id="slide-3" class="slide-ctrl"></div>
          
                <figure class="slide">
                  <blockquote class="testimonial">
                    <p>"A worth while dining experience within your own home"</p>
                    <cite>Annalise Keating</cite>
                  </blockquote>
                </figure>
          
                <figure class="slide">
                  <blockquote class="testimonial">
                    <p>"Reliable and fast delivery to your doorstep and the food is simply amazing"</p>
                    <cite>David Gibbins</cite>
                  </blockquote>
                </figure>
          
                <figure class="slide">
                  <blockquote class="testimonial">
                    <p>"One of the greatest delivery services from a restaurant I have ever experienced"</p>
                    <cite>Mary Snipes</cite>
                  </blockquote>
                </figure>
                
                <div class="slides-ctrl">
                  <a href="#slide-1" class="slide-btn">John Doe</a>
                  <a href="#slide-2" class="slide-btn">David Byrne</a>
                  <a href="#slide-3" class="slide-btn">Mary Poppins</a>
                          
                </div>
              </div>
            </div>
          </section>

       <section class="services">
           <h1>How it works</h1>

           <div class="row">
               <div class="services-col">
                   <img src="css/images/restaurant near.png">
                   <h3>Enter your current address</h3>
                </div>
                <div class="services-col">
                <img src="css/images/online menu.png">
                <h3>Access our online menu</h3>
                </div>
                <div class="services-col">
                <img src="css/images/order food.png">
                <h3>Order food</h3>
                </div>
           </div>
           <div class="middle">
               <img src="css/images/delivered.png">
               <h3>Have it delivered to your doorstep</h3>
           </div>
       </section>
      </div>
      <?php
      require('footer.php');
      ?>

      
</body>
</html>     