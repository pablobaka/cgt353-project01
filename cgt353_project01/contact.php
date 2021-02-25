<!DOCTYPE html>
<html lang="en">

<head>
    <title>pablo v. moore | contact</title>
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
            <header class="contact-hero-div">
                <h2>CONTACT ME</h2>
            </header>

            <div class="contact-container">
                <div class="contact-column">
                    <div class="contact-item contact-form-container">
                        <form action="https://formspree.io/mnqaavar" method="POST">

                            <label for="fname">First Name</label> <br />
                            <input type="text" id="fname" name="firstname" placeholder="First name..">

                            <br />

                            <label for="lname">Last Name</label> <br />
                            <input type="text" id="lname" name="lastname" placeholder="Last name..">

                            <br />

                            <label for="email">Email Address</label> <br />
                            <input type="email" id="email" name="_replyto" placeholder="Email..">

                            <br />

                            <label for="subject">Subject</label> <br />
                            <input type="text" id="subject" name="subject" placeholder="Subject..">

                            <br />

                            <label for="message">Message</label> <br />
                            <textarea id="message" name="message" placeholder="Write something.."></textarea>

                            <br />

                            <input class="contact-submit-button" type="submit" value="Submit">

                        </form>
                    </div>
                    
                    <!--NOTE: I get 2 errors with the social media links because they are "empty links". When displayed on the page, these links are populated with the facebook and linkedin icons. Thus, there is not anything I can do about this error without interfering with the icons.-->
                    <div class="contact-social-container">
                        <a href="https://www.facebook.com/PabloVMoore" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.linkedin.com/in/pablo-moore-b6530251" target="_blank" class="fa fa-linkedin"></a>
                    </div>
                </div>
                <div class="contact-column">
                    <img class="contact-item" src="images/about_portrait.jpg" alt="Example image">
                </div>
            </div>

             
            
        </main>
    </div>

    <script src="scripts/scripts.js"></script>
</body>

</html>