<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxVentus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">  
     <?php require "code.php";
           require "navigation.php";
      ?>

</head>
<body>
    <div class="body">
    <!-- Header Irena -->
    <header>
    <div class="header">
        <div class="container-header">
            <img src="assets/Component 1.png" alt="logo">
            <nav>
            <ul class="navi"> 
      <?php


 echo navigationDisplay()

    //      foreach($navItems as $item){
    //         echo '<li class="contact-button">
    //         <a href="' . $item['link'] . '">' . $item['name'] . '</a>
    //         <ul class="subitems">' ;
    //         foreach ( $item ['children'] as $subitem ) {
    //             echo '<li> 
    //             <a href="' . $subitem['link'] . '">' . $subitem['name'] . '</a>
    //             </li>';

    //         }
    //    echo '</ul>
    //    </li>';

    //      }
           

               

?>
</ul>
</nav>


            
  
        <!-- <li><a href="#">Fashion</a></li>
        <li><a href="#">Lifestyle</a></li>
        <li><a href="#">Spiritual</a></li>
        <li><a href="#">Mental Health</a></li>
        <li class="contact-button">
            <a href="#" class="button">Contact Us</a>
            <ul class="subitems">
                <li><a href="mailto:irena.sturua@gmail.com">Email</a></li>
                <li><a href="tel:+995568599999">Phone</a></li>
            </ul>
        </li>
    
    <img src="./assets/Component 2.png" alt="search icon"> -->

    
        
        </div>
    </div>
</header>



    <!-- first section Mariam -->
    
    <div class="welcome-section">
            
        <h3> LUX VENTUS MAGAZINE </h3>
        <h1> We Are the <span> Ventus Fashion </span> </h1>
        <p> We like to gossip about everything, but we will never forget the daily fashion dose. </p>   
    
    </div>

<!-- section topics Alexi -->
<div class="top">
    <p>Topics</p>
</div>



    <section sectiontwo>

        <div class="Topics-cards">
            <?php
    
        echo  topicSection ();
      
    ?>
           
        </div>
    </section>



<!-- fashion section Irena -->
<section class="third-section">
    <img src="./assets/Vector 14.png" alt="vector" class="vecctor">
    <div class="conteiner-fashion">  
        <div class="small-conteinerfashion">
            <div class="absolut-element button-element">
            <a href="#" class="buttons">FASHION</a>
            </div>
        </div>
        <div class="small-cont-text">
        <div class="small-text">
            <img src="./assets/woman-sunglasses.png" alt=" smal-logo">
            <h5>Mallory Reyn</h5>
            <h5>April 14th, 2023</h5>
        </div>
        <div class="absolut-element text-element">
            <h4>COMING IN HOT</h4>
        </div>
        </div>
        <div class="column-conteiner">
            <h2 class="fashionweek">The Latest Trends from the Moon Fashion Week.</h2>
            <p class="fashionweek-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. 
                Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae 
                mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                <img src="./assets/arrow-small-right.png" alt="arow" class="arrow">
        
            
            <a href="#" class="absolut-element  element-read">READ MORE</a>
        </div>
        </div>
    </div>

</section>



<!-- Trending section Alex -->
<section>
    <div class="Trending">
        <div class="sectionheader">
            <h2>Trending</h2>
        </div>

        <div class="trendinghorizontal">

        <?php 

        echo trendgCardsDisplay();
        ?>
            <!-- <div class="card" id="hcard1">
                <img class="cardimg" src="assets\pexels-david-garrison-2128817 1.png" alt="">
                <div class="imgtag">
                    <p>LIFESTYLE</p>
                </div>
                <div class="pretitlehor">
                    <img class="womaniconhor" src="assets\woman-sunglasses.png" alt="">
                    <span class="namedate">
                        <p>Mallory Reyn</p>
                        <p>April 14th, 2023</p>
                    </span>
                </div>
                <div class="horcardtext">
                    <h3 class="cardtitle">10 Things to help you with social stress.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                </div>
                <div class="readmorebtn">
                    <a href="#"><img src="assets\arrow-small-right.png" alt="">READ MORE</a>
                </div>
            </div>

            <div class="card" id="hcard2">
                <img class="cardimg" src="assets\pexels-alesia-kozik-6638224 1.png" alt="">
                <div class="imgtag">
                    <p>SUMMER</p>
                </div>
                <div class="pretitlehor">
                    <img class="womaniconhor" src="assets\woman-sunglasses.png" alt="">
                    <span class="namedate">
                        <p>Mallory Reyn</p>
                        <p>April 14th, 2023</p>
                    </span>
                </div>
                <div class="horcardtext">
                    <h3 class="cardtitle">The summer 2023 lineup is finally here.</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                </div>
                <div class="readmorebtn">
                    <a href="#"><img src="assets\arrow-small-right.png" alt="">READ MORE</a>
                </div>
                
            </div> -->
        </div>
   

        <div class="trendingvertical">
            <div class="vertcard" id="vcard1">
                <div class="container">
                    <div>
                        <img class="cardimgvert" src="assets\pexels-anna-tarazevich-5242790 1.png" alt="">
                        <div class="imgtag">
                            <p>FASHION</p>
                        </div> 
                    </div>
                    <div class="vertcontent">
                        <div class="pretitlevert">
                            <img class="womaniconver" src="assets\woman-sunglasses.png" alt="">
                            <span class="namedate">
                                <p>Mallory Reyn</p>
                                <p>April 14th, 2023</p>
                            </span>
                        </div>   
                        <div class="vertcardtext">
                            <h3 class="vertcardtitle">5 Reasons to avoid shopping on saturdays</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                        </div>
                        <div class="readmorebtn">
                            <a href="#"><img src="assets\arrow-small-right.png" alt="">READ MORE</a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="vertcard" id="vcard2">
                <div class="container">
                    <div>
                        <img class="cardimgvert" src="assets\pexels-evg-kowalievska-1381556 1.png" alt="">
                        <div class="imgtag">
                            <p>ENSEMBLES</p>
                        </div> 
                    </div>

                    <div class="vertcontent">
                        <div class="pretitlevert">
                        <img class="womaniconver" src="assets\woman-sunglasses.png" alt="">
                        <span class="namedate">
                                <p>Mallory Reyn</p>
                                <p>April 14th, 2023</p>          
                        </span>
                        </div>
                        <div class="vertcardtext">
                            <h3 class="vertcardtitle">10 Brands that remained faithful to your classy look.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                        </div>
                        <div class="readmorebtn">
                            <a href="#"><img src="assets\arrow-small-right.png" alt="">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>  

            <div class="vertcard" id="vcard3">
                <div class="container">
                    <div>
                        <img class="cardimgvert" src="assets\pexels-vinicius-wiesehofer-4219918 1.png" alt="">
                        <div class="imgtag">
                            <p>ENSEMBLES</p>
                        </div> 
                    </div>

                    <div class="vertcontent">
                        <div class="pretitlevert">
                        <img class="womaniconver" src="assets\woman-sunglasses.png" alt="">
                        <span class="namedate">
                                <p>Mallory Reyn</p>
                                <p>April 14th, 2023</p>          
                        </span>
                        </div>
                        <div class="vertcardtext">
                            <h3 class="vertcardtitle">Mental health tips to cope with stress.</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur Pellentesque sit amet sapien fringilla, mattis mattis tellus. Nullam quis imperdiet augue. Vestibulum.</p>
                        </div>
                        <div class="readmorebtn">
                            <a href="#"><img src="assets\arrow-small-right.png" alt="">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






<!-- footer  irena-->

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <footer >
    <div class="footer-conteiner">
       <div class="footer-cont">
           <div class="footer-logo">
            <img src="assets\Component 1.png" alt="">
           </div> 
           <div class="cont-cont">
            <div class="text">
            <h2>Let’s Hang Out</h2>
            </div>
            <div class="social-icons">
            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/facebook.png" alt="Facebook">
            </a>
            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
             <img src="./assets/twitter.png" alt="Twitter">
            </a>
            <a href="https://www.linkedin.com/" target="_blank" rel="noopener noreferrer">
              <img src="./assets/linkedin.png" alt="LinkedIn">
            </a>
            <a href="https://www.youtube.com/" target="_blank" rel="noopener noreferrer">
             <img src="./assets/youtube.png" alt="YouTube">
            </a>
             <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
            <img src="./assets/instagram.png" alt="Instagram"> 
             </a>
            </div> 
           </div>
       </div>
             <div class="absolut-element first-element">
                <img src="assets\Vector 14.png" alt=" vector">
             </div>
             <div class="absolut-element  second-element">
             <p>© 2023 - Lux Ventus by Zine.E.Falouti</p>
            </div>
    
         
    </div>
</footer>
</div>
</body>
</html>

