<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

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
            background-color:  #72A0C1;
        }

        section {
            padding: 5rem 10%;
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
            font-size: 2rem;
            margin-left: 1.5rem; /* Adjusted margin */
            color: var(--black);
        }

        .header .navbar a:hover {
            color: #1E90FF;
        }

        #menu-btn {
            font-size: 2.5rem;
            cursor: pointer;
            color: var(--black);
            display: none;
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
        height: auto;

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

    .footer .credit span{
        color: var(--main-color);
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
                transform: rotate(180deg);
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
        h1 {
    color: white;
    font-size: 5rem; /* Adjust the font size as needed */
    text-align: center; /* Center the text */
    margin-top: 2rem; /* Add some space above the heading */
}


        @media (max-width: 450px) {
            html {
                font-size: 50%;
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

    

   <div class="heading" style="background: url('img1.png') no-repeat;height:800px;background-size: cover;display: flex;
        justify-content: center; align-items: center;">

        <h1>about us</h1>
    </div>

    <section class="about">

        <div class="image"style="width: 200px,;">
            <img src="puribhagwan.png" alt="">
           </div> 
         <div class="content">
            
            <p style="font-size:2rem">Hi peoples ,
            

             Odisha Tourism includes wide range of tour packages not only to see and learn new things in Odisha but also enjoy your holidays with these packages. The tour packages include Tribal tour packages, Wildlife tour packages, Golden Triangle tour packages, Dimond tour packages to Buddhist places, Temple tour packages, Honeymoon tour packages, Adventure tour packages, Beach tour packages and many more including customize tour solutions. Please select our day to day Itinerary and book the tour package to explore real charm of this beautiful state Odisha.


           
             The Odisha state, which was once a land of Kings and Kingdoms, now boasts of being rich source of natural resources. Its People, Temple Architecture, Classical Dance, Religions, Fairs and Festivals, unique Handlooms and Handicrafts, green Woodlands, Rock Caves, charming Blue Hills have always attracted Historians, Tourists and Travelers from all over the world. Its rich history, revolutionary Freedom movement, fascinatingly sculptured Temples and Monuments, Tribal life characterized by Dance, Music, Rituals, Hunting, Gaiety and Wild ways have become important topics of research for great historians and scholars.

            Odisha's Art and Culture, Fairs and Festivals, Dances and Music are a treat for the tourists who love to see colours and wish to enjoy life to the  fullest. Visit the soul state of India and come back with a bag full of memories that will remain etched in your mind for a long time.

         </p>



            
         </div>  

    </section>

    <!-- about section ends -->

    



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

     <div class = "credit"> <span></span> | all rights reserved!  | </div> 

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
    }
   </script>
</body>
</html>