<?php
 include 'alert.message.php' ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - By Teslimsama</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/e9de02addb.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" alt="logo" class="logo">
                <ul id="sidemenu">
                    

                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class="fas fa-times" onclick="closemenu()"></i>
                </ul>
                <i class="fas fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <p>FullStack Developer</p>
                <h1>Hi, I'm Teslim <span><br> Bolaji </span> From Nigeria</h1>
            </div>
        </div>
    </div>
    <!-- <------------about------------> 
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                    <img src="images/user.png" alt="">
                </div>
                <div class="about-col-2">
                    <h1 class="sub-title">About Me</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi tempore, neque qui dolores voluptates tempora fugiat vitae culpa et quibusdam!</p>
                    <div class="tab-titles">
                        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                        <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        <p class="tab-links" onclick="opentab('education')">Education</p>
                    </div>
                    <div class="tab-contents active-tab" id="skills">
                        <ul>
                            <li><span>FullStack</span><br>Web Development</li>
                            <li><span>UI/UX</span><br>Designing Web/App interfaces</li>
                            <li><span>FullStack</span><br>Developer</li>
                        </ul>
                    </div>
                    <div class="tab-contents " id="experience">
                        <ul>
                            <li><span>2021 - curren</span><br>Web Development</li>
                            <li><span>2095 - 3255</span><br>Designing Web/App interfaces</li>
                            <li><span>1995 - 5534</span><br>Developer</li>
                        </ul>
                    </div>
                     <div class="tab-contents" id="education">
                        <ul>
                            <li><span>2016</span><br>Web Development</li>
                            <li><span>2016</span><br>Designing Web/App interfaces</li>
                            <li><span>2014</span><br>Developer</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------service--------- -->
    <div id="services">
        <div class="container">
            <h1 class="sub-title">My Services</h1>
            <div class="services-list">
                <div>
                    <i class="fa-solid fa-code"></i>
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magni amet itaque, doloremque molestiae rem facere .</p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-crop"></i>
                    <h2>UI/UX Design</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magni amet itaque, doloremque molestiae rem facere nostrum dolores sit veritatis cumque porro </p>
                    <a href="#">Learn more</a>
                </div>
                <div>
                    <i class="fa-brands fa-app-store"></i> 
                    <h2>Web Development</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat magni amet itaque, doloremque molestiae rem facere nostrum dolores sit veritatis cumque porro </p>
                    <a href="#">Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- -------------portfolio------------ -->
    <div id="portfolio">
        <div class="container">
            <h1 class="work-list">My Work</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/work-1.png" alt="work-1">
                    <div class="layer">
                        <h3>socail media app</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque explicabo dolorum, quaerat aspernatur libero delectus consequatur, corrupti rerum animi cumque, reiciendis suscipit tempora ratione vero quae possimus molestias eveniet pariatur. </p>
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                   
                   
                </div>
                <div class="work">
                    <img src="images/work-2.png" alt="work-2"> 
                    <div class="layer">
                        <h3>ecormmece app</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque explicabo dolorum, quaerat aspernatur libero delectus consequatur, corrupti rerum animi cumque, reiciendis suscipit tempora ratione vero quae possimus molestias eveniet pariatur. </p>
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
                <div class="work">
                    <img src="images/work-3.png" alt="work-3"> 
                    <div class="layer">
                        <h3>music app</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque explicabo dolorum, quaerat aspernatur libero delectus consequatur, corrupti rerum animi cumque, reiciendis suscipit tempora ratione vero quae possimus molestias eveniet pariatur. </p>
                        <i class="fas fa-external-link-alt"></i>
                    </div>
                </div>
            </div>
            <a href="#" class="btn">See More...</a>
        </div>
    </div>
    <!-- ---------contact----------- -->
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="sub-title">Contact Me</h1>
                    <p><i class="fas fa-paper-plane"></i>bolajiteslim05@gmail.com</p>
                    <p><i class="fas fa-phone-square-alt"></i>+234 8079730127</p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                    <a href="images/my-cv.pdf" download class="btn btn2">Download CV</a>
                </div>
                <div class="contact-right">
                    <form action="portfolio.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="text" name="email" placeholder="Your Email" required>
                        <textarea name="message" id="message" cols="30" placeholder="Your Message" rows="6"></textarea>
                        <button type="submit"  class="btn btn2" name="submit">Submit</button>
                    </form>
                    <div class="msg">
            <?php echo ErrorMessage(); echo SuccessMessage();?>

                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <p>Copyright &copy; Bolaji Teslim.Made with despair <i class="fa-solid fa-heart-crack"></i> by Teslimsama</p>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        var tablinks = document.getElementsByClassName("tab-links");
        var tabcontent = document.getElementsByClassName("tab-contents");
        function opentab(tabname) {
            for(tablink of tablinks){
                tablink.classList.remove("active-link");
            }
            for(tabcontent of tabcontents){
                tabcontents.classList.remove("active-tab");
            }
            event.currentTarget.classList.add("active-link");  
            document.getElementById(tabname).classList.add("active-tab");
        }
 


    </script>
    <script>
        var sidemeu = document.getElementById("sidemenu");
        function openmenu() {
            sidemeu.style.right = "0";
        }
        function closemenu() {
            sidemeu.style.right = "-200px";
        }
    </script>
</body>
</html>