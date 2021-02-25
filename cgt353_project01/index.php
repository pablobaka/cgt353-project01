<!DOCTYPE html>
<html lang="en">

<head>
    <title>pablo v. moore | home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'fonts.php';?>
</head>

<body>
    <div class="container"> <!-- container div used for CSS grid-->
        <?php include 'header.php';?>

        <main style="padding: 0px;">
            <header class="home-hero-div">
                <h2>WELCOME</h2>
            </header>
            <div class="gallery-container">
                <div class="gallery-column">
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_stephanie_thumb.jpg" alt="Stephanie Beatriz Poster">
                        <a href="graphicdesign.php#sbeatriz" class="gallery-text">An Evening with Stephanie Beatriz Flyer</a>
                    </div>
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_356-1_thumb.jpg" alt="CGT 356 Project 1">
                        <a href="webdev.php#356-1" class="gallery-text">CGT 356 Project 01 - PHP Database: Shipping & Billing</a>
                    </div>
                </div>
                <div class="gallery-column">
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_356-2_thumb.jpg" alt="CGT 356 Project 2">
                        <a href="webdev.php#356-2" class="gallery-text">CGT 356 Project 02 - PHP Database: Image Gallery</a>
                    </div>
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_rally_thumb.jpg" alt="Rally for Those Lost to Gun Violence Flyer">
                        <a href="graphicdesign.php#rally" class="gallery-text">Rally for Those Lost to Gun Violence Flyer</a>
                    </div>
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_370_thumb.jpg" alt="CGT 370 Final Project: Teen Birth Rates in America">
                        <a href="dataviz.php#370" class="gallery-text">CGT 370 Final Project: Teen Birth Rates in America</a>
                    </div>
                </div>
                <div class="gallery-column">
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_377_thumb.jpg" alt="CGT 377 Final Project: An Interactive View of an Aneurysm">
                        <a href="dataviz.php#377" class="gallery-text">CGT 377 Final Project: An Interactive View of an Aneurysm</a>
                    </div>
                    <div class="gallery-item-container">
                        <img class="gallery-item" src="images/gallery_gbm_thumb.jpg" alt="Purdue Immigrant Allies GBM Flyer">
                        <a href="graphicdesign.php#gbm" class="gallery-text">Purdue Immigrant Allies GBM Flyer</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="scripts/scripts.js"></script>
</body>

</html>