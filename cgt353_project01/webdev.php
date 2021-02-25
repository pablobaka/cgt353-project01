<!DOCTYPE html>
<html lang="en">

<head>
    <title>pablo v. moore | web development</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'fonts.php';?>
</head>

<body>
    <div class="container"> <!-- container div used for CSS grid-->
        <?php include 'header.php';?>

        <main>
            <header class="webdev-hero-div">
                <h2>WEB DEVELOPMENT</h2>
            </header>

            <div class="projects-container">

                <!--BEGIN 356 P1-->
                <h4 class="projects-item-title">CGT 356 Project 01 - PHP Database: Shipping & Billing</h4>
                <div id="356-1" class="projects-item-container">
                    <div class="projects-item-column">
                        <img class="projects-item projects-item-image" src="images/projects_356-1_full.JPG" alt="CGT 356 Project 1">
                    </div>
                    <div class="projects-item-column">
                        <p class="projects-item projects-item-body">For this project, I was tasked with creating a website for the fictional "G!" company that connected to a database using PHP. The focus for this project was less on front end web design and more on back end web development. The website had to be able to upload and retrieve data from a database, delete data, and modify and replace data. Along with that, we also had to include a functioning log in and register system that changed the information shown in the tables depending on which user was logged in.</p>
                        <p class="projects-item projects-item-body">My submission for this project successfully met all the criteria required. Anyone can create an account using their own unique username and password. If the database detects that the user is trying to register with an existing username, it will prompt them to choose a different one. When inputting billing information, the table is formatted so that the first 12 numbers of the user's credit card number is censored. One final safety measure implemented is that all passwords are encrypted in case the database were to get hacked. I used Visual Studio Code to code the website and phpMyAdmin to host the database.</p>
                        <p style="font-style: italic;" class="projects-item projects-item-body">Note: The website can be viewed in full by clicking <a class="body-link" href="https://cgtweb1.tech.purdue.edu/35600/Moore/Project1/" target="_blank">here</a>.</p>
                    </div>
                </div> <!--END 356 P1-->

                <!--BEGIN 356 P2-->
                <h4 class="projects-item-title">CGT 356 Project 02 - PHP Database: Image Gallery</h4>
                <div id="356-2" class="projects-item-container">
                    <div class="projects-item-column">
                        <img class="projects-item projects-item-image" src="images/projects_356-2_full.JPG" alt="CGT 356 Project 2">
                    </div>
                    <div class="projects-item-column">
                        <p class="projects-item projects-item-body">For this group project, we were tasked with making an image gallery website where the user could upload images with an accompanying category, title, and description. Additionally, the user must be able to edit the title and description of any image as well as delete any image. Finally, we had to give the user the option of adding a new category of their choosing. Like the previous project, back end web development was stressed more than front end web design.</p>
                        <p class="projects-item projects-item-body">For our submission, we decided to go with a travel themed image gallery. Each "category" is a different travel location, such as West Lafayette, Hawaii, Rome and more. We also included a drop down menu that filters the gallery to only include photos from the selected travel area. When uploading an image to the database, it is given an automatic ImageID according to its category and number of photos in that category (e.g. WestLafayette2.jpg or Hawaii5.jpg) In addition to all of this, we also implemented Bootstrap to ensure that our website is responsive on devices of various screen sizes. I used Visual Studio Code to code portions the website and phpMyAdmin to host the database.</p>
                        <p style="font-style: italic;" class="projects-item projects-item-body">Note: The website can be viewed in full by clicking <a class="body-link" href="https://cgtweb1.tech.purdue.edu/35600/group11/" target="_blank">here</a>.</p>
                    </div>
                </div> <!--END 356 P2-->

            </div>
            
        </main>
    </div>

    <script src="scripts/scripts.js"></script>
</body>

</html>