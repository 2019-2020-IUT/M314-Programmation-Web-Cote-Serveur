<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>M314 - TD4 - Manipulation de fichiers et de répertoire</title>
    <meta name="description" content="Page avec formulaire pour Wallpaper Francoponies 2020" />
    <meta name="author" content="JunkJumper" />
    <!-- Bootstrap core CSS -->
    <link href="https://www.junkjumper-projects.com/FP/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Additional CSS Files -->
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.junkjumper-projects.com/FP/assets/css/tooplate-style.css" />
    <link rel="stylesheet" href="https://www.junkjumper-projects.com/FP/assets/css/fontawesome.css" />
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="https://www.junkjumper-projects.com/umming_lines_paint.png" />
</head>

<body>
    <div id="page-wraper">
        <!-- Sidebar Menu -->
        <div class="responsive-nav">
            <i class="fa fa-bars" id="menu-toggle"></i>
            <div id="menu" class="menu">
                <i class="fa fa-times" id="menu-close"></i>
                <div class="container">
                    <div class="image">
                        <a href="https://www.junkjumper-projects.com/" target="_blank"><img src="https://www.junkjumper-projects.com/umming_lines_paint.png" alt="Logo Francoponies" id="logo" class="zoom" /></a>
                    </div></a>
                    <div class="author-content">
                    </div>
                    <nav class="main-nav" role="navigation">
                        <ul class="main-menu">
                            <li><a href="#section3">Formulaire</a></li>
                        </ul>
                        <li><a href="./results.csv">Voir résultats</a></li>
                        <li>
                            <a href="..">
                                Retour à la page précédente
                            </a>
                        </li>
                    </nav>
                    <a href="https://about.junkjumper-projects.com/" target="_blank">Page par JunkJumper</a>
                </div>
            </div>

            <section class="section my-work" data-section="section3">
                <div class="container">
                    <div class="section-heading">

                        <h2>Le Formulaire</h2>
                        <div class="line-dec"></div>
                    </div>
                    <div id="form">
                        <form enctype="multipart/form-data" action="./traitement.php" method="post">

                            <fieldset>
                            Pseudo discord (Pseudo#1234) : <input id="discord" name="discord" type="text" placeholder="Pseudo#1234" class="form-control input-md" required=""><br />
                            Nom de votre OC :<input id="oc" name="oc" type="text" placeholder="monOC" class="form-control input-md" required=""><br />
                            Race de votre OC :<select id="race" name="race" class="form-control">
                                    <option value="">Choissez une race</option>
                                    <option value="terrestre">Terrestre</option>
                                    <option value="licorne">Licorne</option>
                                    <option value="pegase">Pégase</option>
                                    <option value="alicorne">Alicorne</option>
                                    <option value="griphon">Griphon</option>
                                    <option value="changelin">Changelin</option>
                                    <option value="yak">Yak</option>
                                    <option value="dragon">Dragon</option>
                                    <option value="seapony">Seapony</option>
                                    <option value="seapony">Kirin</option>
                                </select><br />
                                Image de votre OC :<input name="fichier" type="file" id="fichier_a_uploader" /><br /><br />
                                <input type="submit" value="Envoyer" /><br />
                            </fieldset>
                        </form>

                    </div>
                    <!--
                        <img src="./src/end.png" id="end" />
                    -->
                </div>
                
            </section>
        </div>
        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="https://www.junkjumper-projects.com/FP/vendor/jquery/jquery.min.js"></script>
        <script src="https://www.junkjumper-projects.com/FP/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <script src="https://www.junkjumper-projects.com/FP/assets/js/isotope.min.js"></script>
        <script src="https://www.junkjumper-projects.com/FP/assets/js/owl-carousel.js"></script>
        <script src="https://www.junkjumper-projects.com/FP/assets/js/lightbox.js"></script>
        <script src="https://www.junkjumper-projects.com/FP/assets/js/custom.js"></script>
        <script>
            //according to loftblog tut
            $(".main-menu li:first").addClass("active");

            var showSection = function showSection(section, isAnimate) {
                var direction = section.replace(/#/, ""),
                    reqSection = $(".section").filter(
                        '[data-section="' + direction + '"]'
                    ),
                    reqSectionPos = reqSection.offset().top - 0;

                if (isAnimate) {
                    $("body, html").animate({
                            scrollTop: reqSectionPos
                        },
                        800
                    );
                } else {
                    $("body, html").scrollTop(reqSectionPos);
                }
            };

            var checkSection = function checkSection() {
                $(".section").each(function() {
                    var $this = $(this),
                        topEdge = $this.offset().top - 80,
                        bottomEdge = topEdge + $this.height(),
                        wScroll = $(window).scrollTop();
                    if (topEdge < wScroll && bottomEdge > wScroll) {
                        var currentId = $this.data("section"),
                            reqLink = $("a").filter("[href*=\\#" + currentId + "]");
                        reqLink
                            .closest("li")
                            .addClass("active")
                            .siblings()
                            .removeClass("active");
                    }
                });
            };

            $(".main-menu").on("click", "a", function(e) {
                e.preventDefault();
                showSection($(this).attr("href"), true);
            });

            $(window).scroll(function() {
                checkSection();
            });
        </script>
</body>

</html>
	
