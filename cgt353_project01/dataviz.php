<!DOCTYPE html>
<html lang="en">

<head>
    <title>pablo v. moore | DATA VISUALIZATION</title>
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
            <header class="dv-hero-div">
                <h2>DATA VISUALIZATION</h2>
            </header>

            <div class="projects-container">

                <!--BEGIN 377-->
                <h4 class="projects-item-title">CGT 377 Final Project: An Interactive View of an Aneurysm</h4>
                <div id="377" class="projects-item-container">
                    <div class="projects-item-column">
                        <img class="projects-item projects-item-image" src="images/projects_377_full.JPG" alt="CGT 377 Final Project: An Interactive View of an Aneurysm">
                    </div>
                    <div class="projects-item-column">
                        <p class="projects-item projects-item-body">For this project, we were asked to use VTK Python to create a 3D visualization of any topic of our choice. We were given a list of different VTK effects/tools (clipping planes, sliders, marching/dividing cubes, etc.) each with a different point value. Our final project could include any of the effects that we wanted, as long as the total point value added up to 100. Aside from that criteria, we were given plenty of freedom.</p>
                        <p class="projects-item projects-item-body">I chose to analyze a rotational C-arm x-ray scan of a brain aneurysm. I felt this data had plenty of room for potential as opposed to other types of medical imaging data. I implemented a total of six sliders: three of which (Distance, Increment, and Isovalue) manipulate the Marching Cubes and Dividing Cubes volume rendering, whereas the other three (R, G, & B) alter the color of the aneurysm data so the user can chose a color that is most easily visible for them. </p>
                        <p class="projects-item projects-item-body">I also added a couple of buttons near the bottom that do the following tasks: toggles a wireframe view, toggles Marching Cubes and Dividing Cubes rendering, hides/shows the clipping box, hides/shows the sliders, and hides/shows the multiplanar reformatting.</p>
                        <p style="font-style: italic;" class="projects-item projects-item-body">Among the features listed above, the full documentation for this project can be viewed <a class="body-link" href="https://www.dropbox.com/s/5h2488ij7qotveg/MoorePablo_FinalProjectReport.pdf?dl=0" target="_blank">here</a>. The files for this project can also be viewed at my <a class="body-link" href="https://github.com/pablobaka/cgt377-final" target="_blank">GitHub repository</a>.</p>
                    </div>
                </div> <!--END 377-->

                <!--BEGIN 370-->
                <h4 class="projects-item-title">CGT 370 Final Project: Teen Birth Rates in America</h4>
                <div id="370" class="projects-item-container">
                    <div class="projects-item-column">
                        <img class="projects-item projects-item-image" src="images/projects_370_full.JPG" alt="CGT 370 Final Project: Teen Birth Rates in America">
                    </div>
                    <div class="projects-item-column">
                        <p class="projects-item projects-item-body">For this group project, we were tasked with using D3, a Javascript visualization library, to create a series of visualizations relating to a topic of our choice. Our group decided to analyze the teen birth rate across America and its potential correlations to sex education and abstinence education. We wanted to make our project more of a story telling website with visualizations as support for our overall narrative. Using D3, we created a map of the US that display either Sex Education data, Abstinence data, or Birth Rate data depending on which button the user clicks. Upon clicking any of the states, a county map of the state appears next to the US map and displays data by county. Using this map, we tested our hypothesis, "A combination of lack of proper sex education and abstinence only education leads to a higher teen birth rate."</p>
                        <p style="font-style: italic;" class="projects-item projects-item-body">The files for this project may be viewed from my <a class="body-link" href="https://github.com/pablobaka/cgt370-finalproject" target="_blank">GitHub repository</a>.</p>
                    </div>
                </div> <!--END 370-->

            </div>
            
        </main>
    </div>

    <script src="scripts/scripts.js"></script>
</body>

</html>