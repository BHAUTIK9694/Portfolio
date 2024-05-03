<?php 
    
    $book_arr = array("Home Page","Login Page","SignUp Page","Books Page","Book Detail Page","Cart Page","Payment Page","Payment Sucess Page","Add Book Page","Profile Page","Book Review Page");
    $medical_arr = array("Home Page","Login Page","Dashboard Page","In Stock Medicine Page","Cart Page","Purchase History Page","Invoice ");
    $quiz_arr =array("Question Page","Answer Evalution Phase","Answer Result Phase","Quiz Complete Page","Preformance Detail Page")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/styles/style.css">
    <link rel="stylesheet" href="public/styles/Project.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class='container'>
        <?php  include 'partials/Header.php' ?>

        <center>
            <h1 class='project-title yellow'>Some of my past projects</h1>
        </center>

        <div class='project-list'>
            <div class="product-card">
                <img src="https://kitaboo.com/wp-content/uploads/2021/10/Online-eBook-store-1-1200x565.jpg" alt="">
                <div class='flex-div'>
                    <h4>Book Store</h4>
                    <a href="#p1">View</a>
                </div>

                <p>Online Book store with paypal payments intergration and Google Authentication </p>

            </div>
            <div class="product-card">
                <img src="https://cdn.technologyadvice.com/wp-content/uploads/2019/03/drchrono-1024x508.png" alt="">
                <div class='flex-div'>
                    <h4>Medical Managment</h4>
                    <a href="#p2">View</a>
                </div>
                <p>Designed built & mantained a the Medical managment system for Medical Store</p>

            </div>
            <div class="product-card">
                <img src="https://thinkexam.com/blog/wp-content/uploads/2018/07/Quiz-building-software.jpg" alt="">
                <div class='flex-div'>
                    <h4>Quiz App</h4>
                    <a href="#p3">View</a>
                </div>
                <p>create an interactive and engaging app that allows users to participate in quizzes, answer questions
                    on various topics, and receive feedback on their performance.</p>
            </div>
        </div>



        <div id="p1">
            <hr>
            <center>
                <h1 class='yellow'>Book Store</h1>
                <img class='main-img'
                    src="https://kitaboo.com/wp-content/uploads/2021/10/Online-eBook-store-1-1200x565.jpg"
                    alt="book-store">
            </center>
            <div class='project-detail'>
                <label class='yellow'>Overview</label>

                <p> - This was a project I started back in november 2022 when I first learned Full Stack Devlopment. My
                    Role in
                    This Project is Full Stack Devloper.</p>
                <p> - The system facilitates the buying and selling of both old and new books, providing a platform for
                    users to share their books with potential buyers.</p>
                <p> - Users can easily navigate the system to view all their listed books. They can search for books by
                    name, sort them by price or category, enhancing the user experience and making it convenient to find
                    desired books.
                </p>
                <p> - Integration with PayPal provides a secure and widely used payment gateway system for users to
                    complete transactions. This ensures smooth and reliable payment processing for both buyers and
                    sellers.</p>

                <p> - After a successful payment, buyers receive their bills via email. This feature adds a layer of
                    communication and confirmation for transactions, increasing transparency and trust between parties.
                </p>
                <p> - The system is designed to be responsive, meaning it adapts and functions well across various
                    devices and screen sizes. This ensures that users can access the platform seamlessly from desktops,
                    tablets, and mobile devices, enhancing accessibility and usability.</p>


                <label class='yellow'>Languages</label>
                <p> - HTML</p>
                <p> - CSS</p>
                <p> - NodeJS</p>
                <p> - EJS</p>
                <p> - Express</p>
                <p> - JavaScript</p>
                <p> - MongoDB</p>

                <label class='yellow'>Images</label>

                <div class="slider">
                    <div class="slides">
                        <?php
                        for ($i = 1; $i < 12; $i++) {
                          echo '<div class="slide">
                           <center> <h1 class="yellow">'. $book_arr[$i-1] .'</h1></center>
                            <img src="public/images/bookstore/'. $i .'.png"  alt="Image 1">
                            </div>';
                        }
                    ?>
                    </div>
                    <button class="btn prev" onclick="prevSlide()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn next" onclick="nextSlide()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>

        <div id="p2">
            <hr>
            <center>
                <h1 class='yellow'>Medical Management System</h1>
                <img class='main-img'
                    src="https://cdn.technologyadvice.com/wp-content/uploads/2019/03/drchrono-1024x508.png"
                    alt="book-store">
            </center>
            <div class='project-detail'>
                <label class='yellow'>Overview</label>

                <p> - This was a project I started back in november 2023 when I first learned Python. My
                    Role in
                    This Project is Full Stack Devloper.</p>
                <p> - The application stores data for the entire inventory of the medical store, providing an interface
                    for admins to view, add, and edit medicine data. This functionality ensures efficient management of
                    the store's inventory.</p>
                <p> - Admins can only change data after being authenticated, which enhances security and ensures that
                    only authorized personnel can make changes to the medicine data.
                </p>
                <p> - The application records all selling items' history, including the payment type used for each
                    transaction. This feature provides valuable insights into sales trends and helps in inventory
                    management.</p>

                <p> - When selling medicine, the application generates invoices for each transaction. This feature
                    simplifies the billing process and provides customers with a detailed record of their purchases.</p>
                <p> - The application keeps track of daily sales and buying amounts, providing admins with valuable
                    financial information. This feature helps in monitoring the store's performance and making informed
                    business decisions.</p>


                <label class='yellow'>Languages</label>
                <p> - Flask </p>
                <p> - Jinja</p>
                <p> - HTML</p>
                <p> - CSS</p>
                <p> - SQL</p>
                <p> - JavaScript</p>

                <label class='yellow'>Images</label>

                <div class="slider">
                    <div class="slides1">
                        <?php
                        for ($i = 1; $i < 8; $i++) {
                          echo '<div class="slide1">
                           <center> <h1 class="yellow">'. $medical_arr[$i-1] .'</h1></center>
                            <img src="public/images/medical/'. $i .'.png"  alt="Image 1">
                            </div>';
                        }
                    ?>
                    </div>
                    <button class="btn prev" onclick="prevSlide1()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn next" onclick="nextSlide1()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
        <div id="p3">
            <hr>
            <center>
                <h1 class='yellow'>Quiz App</h1>
                <img class='main-img'
                    src="https://thinkexam.com/blog/wp-content/uploads/2018/07/Quiz-building-software.jpg"
                    alt="book-store">
            </center>
            <div class='project-detail'>
                <label class='yellow'>Overview</label>

                <p> - This was a project I started back in november 2023 when I first learned React.</p>
                <p> - The system is designed to organize quiz exams, allowing users to participate in a structured
                    manner. </p>
                <p> -Each question in the quiz has a fixed time for users to answer. This adds a sense of urgency and
                    ensures the quiz progresses at a steady pace.
                </p>
                <p> - Users have the option to skip questions if they're unable to answer within the allotted time. This
                    feature provides flexibility and prevents users from getting stuck on difficult questions.</p>

                <p> - After completing all questions, users can view their performance details. This may include metrics
                    such as total score, time taken, and accuracy. Providing performance feedback enhances the user
                    experience and allows users to gauge their proficiency.</p>
                <p> - The system is described as very user-friendly with a nice user interface. This indicates that the
                    design and layout of the application are intuitive and visually appealing, making it easy for users
                    to navigate and interact with the quiz.</p>


                <label class='yellow'>Languages</label>
                <p> - React</p>
                <p> - ReactJS</p>


                <label class='yellow'>Images</label>

                <div class="slider">
                    <div class="slides2">
                        <?php
                        for ($i = 1; $i < 6; $i++) {
                          echo '<div class="slide2">
                           <center> <h1 class="yellow">'. $quiz_arr[$i-1] .'</h1></center>
                            <img src="public/images/quiz/'. $i .'.png"  alt="Image 1">
                            </div>';
                        }
                    ?>
                    </div>
                    <button class="btn prev" onclick="prevSlide2()"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="btn next" onclick="nextSlide2()"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
        </div>


    </div>
    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showSlide(slideIndex) {
        if (slideIndex < 0) {
            currentSlide = slides.length - 1;
        } else if (slideIndex >= slides.length) {
            currentSlide = 0;
        } else {
            currentSlide = slideIndex;
        }

        const slideWidth = slides[0].clientWidth;
        document.querySelector('.slides').style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }


    let currentSlide1 = 0;
    const slides1 = document.querySelectorAll('.slide1');

    function showSlide1(slideIndex) {
        if (slideIndex < 0) {
            currentSlide1 = slides1.length - 1;
        } else if (slideIndex >= slides1.length) {
            currentSlide1 = 0;
        } else {
            currentSlide1 = slideIndex;
        }

        const slideWidth1 = slides1[0].clientWidth;
        document.querySelector('.slides1').style.transform = `translateX(-${currentSlide1 * slideWidth1}px)`;
    }

    function prevSlide1() {
        showSlide1(currentSlide1 - 1);
    }

    function nextSlide1() {
        showSlide1(currentSlide1 + 1);
    }
    showSlide(currentSlide);
    showSlide1(currentSlide1);


    let currentSlide2 = 0;
    const slides2 = document.querySelectorAll('.slide2');

    function showSlide2(slideIndex) {
        if (slideIndex < 0) {
            currentSlide2 = slides2.length - 1;
        } else if (slideIndex >= slides2.length) {
            currentSlide2 = 0;
        } else {
            currentSlide2 = slideIndex;
        }

        const slideWidth2 = slides2[0].clientWidth;
        document.querySelector('.slides2').style.transform = `translateX(-${currentSlide2 * slideWidth2}px)`;
    }

    function prevSlide2() {
        showSlide1(currentSlide2 - 1);
    }

    function nextSlide2() {
        showSlide2(currentSlide2 + 1);
    }
    showSlide(currentSlide);
    showSlide1(currentSlide1);
    showSlide2(currentSlide2);
    </script>


</body>

</html>