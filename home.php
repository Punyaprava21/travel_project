<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- Swiper css link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- font import link -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --main-color: #8e44ad;
            --blue: #007bff;
            --black: #222;
            --white: #fff;
            --light-black: #777;
            --light-white: #fff9;
            --dark-bg: rgba(0, 0, 0, 0.7);
            --light-bg: #eee;
            --border: 0.1rem solid var(--black);
            --box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
            --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.3);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            text-decoration: none;
            text-transform: capitalize;
        }

        html {
            font-size: 16px; /* Default font size */
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        html::-webkit-scrollbar-track {
            background-color: var(--black);
        }

        html::-webkit-scrollbar-thumb {
            background-color: #72A0C1;
        }

        section {
            padding: 5rem 10%;
        }


      @keyframes fadeIn {
        0% {
        transform: scale(0);
        opacity: 0;
    }
    }






        .btn{
            display:inline-block;
            background: var(--black);
            margin-top: 1rem;
            color: var(--white);
            font-size:1.7rem ;
            padding: 1rem 3rem;
            cursor: pointer;
        }

        .btn:hover{
            background:#0066b2 ;
        }


        .heading-title{
            text-align: center;
            margin-bottom: 3rem;
            font-size: 3.5rem;
            text-transform: uppercase;
            color: var(--black);
        }
        .header {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: var(--white);
            display: flex;
            padding-top: 2rem;
            padding-bottom: 2rem;
            box-shadow: var(--box-shadow);
            align-items: center;
            justify-content: space-between;
        }

        .header .logo {
            font-size: 2.5rem;
            color: var(--black);
        }

        .header .navbar a {
            font-size: 1.5rem;
            margin-left: 1.5rem; /* Adjusted margin */
            color: var(--black);
        }

        .header .navbar a:hover {
            color:#1E90FF ;
        }

        #menu-btn {
            font-size: 2.5rem;
            cursor: pointer;
            color: var(--black);
            display: none;
        }

        .home{
            padding: 0;
        }


        .home .slide{
            text-align: center;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: cener;
            background-size: cover !important;
            background-position: center !important;
            min-height: 60rem;

        }

        .home .slide .content {
            width: 85rem;
            opacity: 0;
            animation: fadeIn 0.4s linear backwards 0.2s;
        }
        .home .swiper-slide-active .content {
            opacity: 1;
        }
        .content span {
         display: block;
        font-size: 2.2rem;
        color: var(--light-white);
        padding-bottom: 1rem;
        animation: fadeIn 0.4s linear backwards 0.2s;
        }

        .content h3 {
         font-size: 3vw;
        color: var(--white);
        text-transform: uppercase;
        line-height: 1;
        text-shadow: var(--text-shadow);
        padding: 1rem 0;
        animation: fadeIn 0.4s linear backwards 0.4s;
     }

   .btn {
    border-radius: 20px;
    background-color:#ffa500; 
    animation: fadeIn 0.4s linear;
    }



    @keyframes fadeIn {
    0% {
        opacity: 0;
        transform: translateY(20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
    }

    .home .swiper-button-next,
    .home .swiper-button-prev{
        top: inherit;
        left: inherit;
        bottom: 0;
        right: 0;
        height: 7rem;
        width: 7rem;
        background:var(--white);
        color: var(--black);

    }

    .home .swiper-button-next:hover,
    .home .swiper-button-prev:hover{
        background: var(blue);
        color: var(--white);
    }

    .home .swiper-button-next:after,
    .home .swiper-button-prev:after{
        font-size: 2rem;

    }

    .home .swiper-button-prev{
        right: 7rem;
    }





        .services .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(16rem,1fr));
            gap: 1.5rem;

        }

        .services .box-container .box{
            padding: 3rem 2rem;
            text-align: center;
            background: #7CB9E8;
            height: 15rem;
            width: 15rem;
            cursor: pointer;

        }

        .services .box-container .box:hover{
            background:#0066b2;
        }

        .services .box-container .box img{
            height: 6.5rem;
        }


        .services .box-container .box h3{
            color: var(--white);
            font-size: 1.7rem;
            padding-top: 1rem;

        }



        .flip-card {
        width: 120px;
        height: 100px;
        perspective: 1000px; /* Add perspective */
        }

    .flip-card-inner {
    width: 100%;
    height: 100%;
    transition: transform 0.6s;
    transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
    transform: rotateY(180deg); /* Flip the card on hover */
    }

    .flip-card-front, .flip-card-back {
    width: 100%;
    height: 100%;
    position: absolute;
    backface-visibility: hidden;
    }

    .flip-card-front {
    /* Style the front side of the card */
    }

    .flip-card-back {
    transform: rotateY(180deg); /* Rotate the back side by default */
    /* Style the back side of the card */
    }





        .invert-color {
     filter: invert(100%);
        }

        .home-about{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .home-about .image{
            flex: 1 1 41rem;
        }

        .home-about .image img{
            width: 100%;
            
        }

        .home-about .content{
            flex:1 1 41rem ;
            padding: 3rem;
            background: var(--light-bg);
        }

        .home-about .content h3{
            font-size: 3rem;
            color: var(--black);
        }

        .home-about .content p{
            font-size: 1.5rem;
            padding:1rem 0 ;
            line-height: 2;
            color: var(--black);
        }


        .home-packages{
            background: var(--light-bg);
        }


        .home-packages .box-container{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
            gap:  2rem;

        }

        .home-packages .box-container .box {

            border: var(--border);
            box-shadow: var(--box-shadow);
            background: var(--white);
         }

        .home-packages .box-container .box .image{
            height: 25rem;
            overflow: hidden;
        }

        .home-packages .box-container  .box .image img{
            height: 100%;
            width: 100%;
            object-fit: cover;
            transition: .2s linear;
        }

        .home-packages .box-container  .box  .content{
             padding: 2rem;
             text-align: center;
        }

        .home-packages .box-container  .box  .content h3{
            font-size: 2.5rem;
            color: var(--black);
         }


         .home-packages .box-container  .box  .content p{
            font-size: 1.5rem;
            color: var(--light-black);
            line-height: 2;
            padding: 1 rem 0;
         }

         .home-packages .load-more{
            text-align: center;
            margin-top: 2rem;
         }




        .footer {
                background-color: var(--black);
                 height: var(--20px);
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }
    .footer .box-container{

        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(25rem,1fr));
        gap: 3rem;
        

         }
    .footer .box-container .box h3{

            color: var(--white);
            font-size:2.5rem ;
            padding-bottom: 2rem;

    }
     .footer .box-container .box a{

            color: var(--light-white);
            font-size:1.5rem ;
            padding-bottom: 1.5rem;
            display: block;

    }

    .footer .box-container .box a{
       color: var(--light-white); 
       padding-right: .5rem;
       transition: .2s linear ;
    }

     .footer .box-container .box a:hover i{
        
         padding-right: 2rem;
    }


    .footer .credit{
        text-align: center;
        padding-top: 3rem;
        margin-top: 3rem;
        border-top: .1rem solid var(--light-white);
        font-size: 2rem;
        color: var(--white);

    }

    


        @media (max-width: 1200px) {
            section {
                padding: 3rem 5%;
            }
        }

        @media (max-width: 991px) {
            html {
                font-size: 55%;
            }

            section {
                padding: 3rem 2rem;
            }
        }

        @media (max-width: 768px) {
           #menu-btn {
                display: inline-block;
                transition: .2s linear;
            }

            #menu-btn.fa-times {
                transform: rotate(0deg);
            }
            

            .header .navbar {
                position: absolute;
                top: 99%;
                left: 0;
                right: 0;
                background-color: var(--white);
                border-top: var(--border);
                padding: 2rem;
                transition:.2s linear ;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }

            .header .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            .header .navbar a {
                display: block;
                margin: 1rem; /* Adjusted margin */
                text-align: center;
            }
        }

        @media (max-width: 450px) {
            html {
                font-size: 50%;
            }

            .heading-title{
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body>
    <!-- header section starts -->
    <section class="header">
        <a href="home.php" class="logo">travel.</a>
        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!-- header section ends -->


    <!-- home section starts -->
    <section class = "home">

    <div class="swiper home-slider">
    <div class="swiper-wrapper">
       <div class="swiper-slide" style="background:url(puri.png) no-repeat; height:800px; background-size: cover; display: flex; justify-content: center; align-items: center;">
        <div class="content" style="text-align: center;">
        <span>explore, discover, travel</span>
        <h3>travel around the world</h3>
        <a href="package.php" class="btn">discover more</a>
    </div>
</div>

        <div class="swiper-slide" style="background:url(konark.png) no-repeat;height:800px;background-size: cover;display: flex;
        justify-content: center; align-items: center;">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>

        <div class="swiper-slide" style="background:url(lingraj.png) no-repeat;height:800px;background-size: cover;display: flex;
        justify-content: center; align-items: center;">
            <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
            </div>
        </div>
    </div>
</div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>


        </div>    

    </section>


    <!-- home section ends -->




    <!-- services section starts -->
    <section class="services">
        <h1 class="heading-title">our services</h1>

    <div class="box-container">

      <div class="box flip-card">

    <div class="flip-card-inner">

        <div class="flip-card-front" >
            <img src="icon1.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>adventure</h3>
        </div>






    </div>

</div>

<div class="box flip-card">

    <div class="flip-card-inner">
        
        <div class="flip-card-front" >
            <img src="icon2.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>tour-guide</h3>
        </div>


 </div>

</div>
<div class="box flip-card">

    <div class="flip-card-inner">
        
        <div class="flip-card-front" >
            <img src="trekking.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>trekking</h3>
        </div>


 </div>

</div>
<div class="box flip-card">

    <div class="flip-card-inner">
        
        <div class="flip-card-front" >
            <img src="camp_fire.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>camp fire</h3>
        </div>


 </div>

</div>


<div class="box flip-card">

    <div class="flip-card-inner">
        
        <div class="flip-card-front" >
            <img src="icon5.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>off road</h3>
        </div>


 </div>

</div>
<div class="box flip-card">

    <div class="flip-card-inner">
        
        <div class="flip-card-front" >
            <img src="camping.png" alt="" width="120" height="100" class="invert-color">
        </div>
        <div class="flip-card-back" style="padding:40px 10px">
            <h3>camping</h3>
        </div>


 </div>

</div>

</div>
 </section>   
    <!-- services section ends -->

    <!-- home about section starts -->
    <section class="home-about">

        <div class="image">
            <img src="puribhagwan.png" alt="">
           </div> 
         <div class="content">
            <h3 style="color:var(--black);">about</h3>
            <p>The Jagannath Temple at Puri is one of the most revered Vaishnava sites of worship in India. One of the oldest Hindu temples to still be in use, its main shrine was built by Anantavarman of the Chodaganga dynasty in the tenth century. The deities within the shrine, however, are believed to be much older and are associated with the great mythical ruler of the Satya-yuga, King Indrayumna, nephew of Lord Ram.</p>
            <a href="about.php" class="btn">read more</a>
         </div>  

    </section>
    <!-- home about section ends -->    




    <!-- home package section starts -->
    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>

        <div class="box-container">

            <div class="box">
                <div class="image">
                    <img src="adventure.jpg"  alt="">
            </div>
            <div class="content">
                <h3 style="color: var(--black);">adventure & tour</h3>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>
             <div class="box">
                <div class="image">
                    <img src="adventure1.jpg"  alt="">
            </div>
            <div class="content">
                <h3 style="color: var(--black);">adventure & tour</h3>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>

             <div class="box">
                <div class="image">
                    <img src="adventure2.jpg"  alt="">
            </div>
            <div class="content">
                <h3 style="color: var(--black);">adventure & tour</h3>
                <a href="book.php" class="btn">book now</a>
            </div>
            </div>



        </div>
       
        <div class="load-more"> <a href="package.php" class="btn">load more </a></div>
      </section>  


    <!-- home package section ends -->







    <!-- footer section starts -->
    <section class="footer">
        <div class="box-container">


            <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="fas fa-angle-right"></i>home</a>
            <a href="about.php"><i class="fas fa-angle-right"></i>about</a>
            <a href="package.php"><i class="fas fa-angle-right"></i>package</a>
            <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
            </div>

            <div class="box">
             <h3>extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask questions</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
            </div>


             <div class="box">
             <h3>contact-info</h3>
            <a href="#"><i class="fas fa-phone"></i> +123-456-7890</a>
            <a href="#"><i class="fas fa-phone"></i> +111-222-3333</a>
            <a href="#"><i class="fas fa-envelope"></i>shaikhanas@gmail.com</a>
            <a href="#"><i class="fas fa-map"></i> odisha, india - 400104</a>
            </div>

            <div class="box">
             <h3>follow-us</h3>
            <a href="#"><i class="fas fa-facebook"></i>facebook </a>
            <a href="#"><i class="fas fa-twitter"></i>twitter</a>
            <a href="#"><i class="fas fa-instagram"></i>instagram</a>
            <a href="#"><i class="fas fa-linkedin"></i>linkedin</a>
            
            </div>
     </div>

     <div class = "credit"> <span></span> | all rights reserved! |</div> 

    </section>

     <!-- footer section ends -->








    <!-- swiper js link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- custom js file link -->
   <!-- <script src="js/script.js"></script>-->
   <script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.header .navbar');


    menu.onclick = () => {
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    };

    window.onscroll = () => {
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    };

   var swiper = new Swiper(".home-slider", {
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});


   </script>
</body>
</html>

