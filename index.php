<?php
$dirT = getcwd();
$dir = basename(($dirT));

?>

<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title><?php echo "Displaying content of " .$dir?></title>
    <link href="https://www.junkjumper-projects.com/images/ls/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://www.junkjumper-projects.com/images/ls/css/sticky-menu.css" rel="stylesheet">
</head>
<body data-spy="scroll" data-target=".navbar-fixed-top">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
            <a class="navbar-brand page-scroll" href="">Pauline's M314 Web Folder</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                </ul>
            </div>	<!-- .navbar-collapse -->
        </div>		<!-- .container -->
    </nav>
    <!-- Welcome   -->
    <section id="welcome" class="welcome-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="https://www.junkjumper-projects.com/images/ls/img/banner.png" alt="content" id="h2" />
                    
                    
                    <br />
					<?php
					    $path = ".";
                        $dh = opendir($path);
                        $i=1;
                        while (($file = readdir($dh)) !== false) {
                            if($file != "." && $file != ".." && $file != "index.php" && $file != ".htaccess" && $file != "error_log" && $file != "src" && $file != ".git" && $file != "LICENSE.md" && $file != "README.md" && $file != "cgi-bin" && $file != ".gitignore") {
                                if (filetype($file) == "dir")
                                {
                                    echo "<a href='$path/$file' class='ls-s'><img src='./src/folder.png' alt='folder' class='icon' />$file</a><br />";
                                } else {
                                    echo "<a href='$path/$file' class='ls-s'><img src='./src/file.png' alt='folder' class='icon' />$file</a><br />";
                                }
                                
                                $i++;
                            }
                        }
                        closedir($dh);
					?>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
