<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class='container'>
        <?php  include 'partials/Header.php' ?>
        <center>
            <?php 
                session_start();
                if (isset($_SESSION['message'])) {
                    echo "<p style='background: green;
                    color: white;
                    width: 28%;
                    padding: 15px;
                    height: auto;
                    text-align: center;
                    font-variant: petite-caps;
                    display: flex;
                    text-align: center;
                    justify-content: center;
                    align-items: center;
                    font-size: 20px;
                    border-radius: 7px;
                    margin: auto;
                    position: absolute;
                    top: 88px;
                    left: 34%;
                    animation: hideMe 3s forwards;' > 
                 
                    " . $_SESSION['message'] ."</p>";
                    unset($_SESSION['message']);
                }
            ?>
        </center>

        <div class='my-detail'>
            <div class='my-intro'>
                <p class='yellow'>HELLO!</p>
                <h1 class='white'>I'm <span class='yellow'> Bhautik </span></h1>
                <h1 class='yellow'>Kotadiya</h1>
                <div class='form_div'>
                    <form method="post" action="Project.php">
                        <button type="submit">My Past Project</button>
                    </form>
                    <form method="post" action="Download.php">
                        <button type="submit">Download CV</button>
                    </form>
                </div>

            </div>
            <div class='my-image'>
                <img src="public/images/myp.jpg" alt="my-image">
            </div>
        </div>

        <hr>
        <center>
            <h1 class='yellow'>About Me</h1>
        </center>
        <div class='about'>
            <ul>
                <li>
                    <h4 class='grey-p'> My name is Bhautik Kotadiya, and I am currently pursuing a Bachelor of
                        Technology
                        (B.Tech) degree in
                        Computer Engineering. I am currently in my sixth semester at Sal College of Engineering.</h4>
                </li>

                <li>
                    <h4 class='grey-p'> I'm interested in developing a web application using a combination of Flask,
                        React,
                        PHP,
                        and other
                        relevant technologies. This project presents an exciting opportunity to leverage the strengths
                        of each
                        technology for a robust and dynamic application</h4>
                </li>
            </ul>


        </div>
        <hr>
        <center>
            <h1 class='yellow'>Overview</h1>
        </center>
        <div class='overview'>
            <ul>
                <li>
                    <h4 class='grey-p'>I have intermediate knowledge about frameworks like React, NodeJs,mongoDB
                        and
                        ReactJs,Flask. I'm a quick
                        learner and collaborate closely with clients to create efficient, scalable. Let's work together
                        to bring
                        your ideas to life!</h4>
                </li>
            </ul>

        </div>
        <hr>
        <center>
            <h1 class='yellow' style="margin-bottom:20px;">Education</h1>
        </center>

        <div class='education'>


            <div class='education_div'>
                <div class='education_detail'>
                    <h1 class="yellow">2021-Present</h1>
                    <h1 class='white'>Bachelor of Engineering</h1>
                    <p class='grey-p'>Sal Collage Of Engineering</p>
                    <p class='grey-p'>CPI : 8.83 (Till sem 6)</p>
                    <p class='grey-p'>Location : Surat,Gujrat</p>
                </div>
                <div class='education_detail'>
                    <h1 class="yellow">2018-2020</h1>
                    <h1 class='white'>Higher Secondary School</h1>
                    <p class='grey-p'>Kaushal Vidhyabhavan</p>
                    <p class='grey-p'>Percentage : 79.92%</p>
                    <p class='grey-p'>Location : Ahmedabad,Gujrat</p>
                </div>
            </div>
        </div>
        <hr>
        <center>
            <h1 class='yellow'> Technical Skills
            </h1>
        </center>


        <div class="grid-container">
            <div class="grid-item">
                <img src="public/images/logo/html.png" alt='html-image'>
                <h1>HTML</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/css.png" alt='html-image'>
                <h1>CSS</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/html.png" alt='html-image'>
                <h1>Javascript</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/nodejs.png" alt='html-image'>
                <h1>NodeJs</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/ejs.png" alt='html-image'>
                <h1>EJS</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/php.png" alt='html-image'>
                <h1>PHP</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/java.png" alt='html-image'>
                <h1>JAVA</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/sql.png" alt='html-image'>
                <h1>SQL</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/c++.png" alt='html-image'>
                <h1>C++</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/react.png" alt='html-image'>
                <h1>React</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/mongo.png" alt='html-image'>
                <h1>MongoDb</h1>
            </div>
            <div class="grid-item">
                <img src="public/images/logo/flask.png" alt='html-image'>
                <h1>Flask</h1>
            </div>

        </div>


        <hr>
        <center>
            <h1 class='yellow'>Activity</h1>
        </center>
        <div class='about'>
            <ul>
                <li>
                    <h4 class='grey-p'> The Web Developer BootCamp 2023 (Udemy) (web Devlopment Course)</h4>
                </li>
                <li>
                    <h4 class='grey-p'>React-The Complete Guide 2024(Udemy)(React Course)</h4>
                </li>
                <li>
                    <h4 class='grey-p'> Participate in Summer Research Intership Program
                        Organized by IIT Gandhinager</h4>
                </li>
                <li>
                    <h4 class='grey-p'>Participated in MINeD Hackathon Organized by Nirma
                        University.</h4>
                </li>
                <li>
                    <h4 class='grey-p'>Participate in Google Summer of Code 2023 (open source contribution)</h4>
                </li>
                <li>
                    <h4 class='grey-p'>Participated in Other Online Hackathons.</h4>
                </li>
            </ul>


        </div>
        <hr>
        <center>
            <h1 class='yellow'>Contact Me</h1>
        </center>

        <div class="container">
            <div class="row">

                <div class="contact-info">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-brands fa-linkedin linkdin"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Bhautikkotadiya</h4>
                            <p><a href="https://www.linkedin.com/in/bhautikkotadiya/">View Profile</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon github">
                            <i class="fa-brands fa-github github"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>BHAUTIK9694</h4>
                            <p><a href="https://github.com/BHAUTIK9694">View Profile</a></p>
                        </div>
                    </div>

                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fas fa-envelope"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Email</h4>
                            <p><a href="mailto:bhuatikkotadiya9694@gmail.com">Send Email</a></p>
                        </div>
                    </div>
                </div>

                <div class="contact-form">
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone"></i>
                        </div>

                        <div class="contact-info-content">
                            <h4>Contact Number</h4>
                            <p style='color:#7575D2;'>+91 98798-04683</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="public/images/logo/leetcode.png" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h4>Bhautikkotadiya</h4>
                            <p><a href="https://leetcode.com/u/BhautikKotadiya/">View Profile</a></p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-info-icon">
                            <img src="public/images/logo/coding_ninja.png" alt="">
                        </div>

                        <div class="contact-info-content">
                            <h4>bhautikkotadiya</h4>
                            <p><a href="https://www.naukri.com/code360/profile/BhuatikKotadiya">View Profile</a></p>
                        </div>
                    </div>

                </div>

            </div>
        </div>




    </div>
</body>

</html>