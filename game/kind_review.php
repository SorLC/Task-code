<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title></title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 d-flex align-items-center justify-content-between">
                        <!-- Logo Area -->
                        <div class="logo">
                            <a href="home.html"><img src="img/core-img/logo.png" alt=""></a>
                        </div>

                        <!-- Search & Login Area -->
                        <div class="search-login-area d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="kind_review.php" method="get">
                                    <input type="search" name="game_name" id="topSearch" placeholder="Search">
                                    <button type="submit" name="submit" class="btn"><i class="fa fa-search"></i></button>
                                </form>
                            </div>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="egames-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="egamesNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="home.html">主页</a></li>
                                    <li><a href="game-review.html">游戏</a>
                                    </li>
                                    <li><a href="#">类别</a>
                                        <ul class="dropdown">
                                            <li><a href="action_game.html">动作</a></li>
                                            <li><a href="adventure_game.html">冒险</a></li>
                                            <li><a href="role_playing_game.html">角色扮演</a></li>
                                            <li><a href="Leisure_game.html">休闲</a></li>
                                            <li><a href="Strategy_game.html">策略</a></li>
                                            <li><a href="physical_game.html">体育</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="user.php">用户</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Top Social Info -->
                        <div class="top-social-info">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Behance"><i class="fa fa-behance" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/27.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breadcrumb Text -->
                <div class="col-12">
                    <div class="breadcrumb-text">
                        <h2>全部结果</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Game Review Area Start ##### -->
    <section class="game-review-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- *** Single Review Area *** -->
                    <?php
                    function gameview($name,$date,$recom,$intro,$site)
                    {
                     echo '<div class="single-game-review-area d-flex flex-wrap mb-30">';
                                        echo  '<div class="game-thumbnail">';
                                          echo   '<img src='."$site". 'alt="">';
                                         echo '</div>';
                                          echo  '<div class="game-content">';
                                              echo '<span class="game-tag">'."&nbsp".'</span>';
											 
                                             echo '<a href="single-game.php?game_name='.$name.'" class="game-title">'.$name.'</a>';
											 
                                             echo '<div class="game-meta">';
                                             echo  '<a href="#" class="game-date">'.$date.'</a>';
                                             echo '</div>';
                                             echo '<p>'.$intro.'</p>';
                                                
                                             echo '<div class="download-rating-area d-flex align-items-center justify-content-between">';
                                              echo  '<div class="download-area">';
                                              
                                               echo '</div>';
                                               echo '<div class="rating-area text-center">';
                                                echo   '<h3>'.$recom.'</h3>';
                                                 echo   '<div class="stars">';
                                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo   '<i class="fa fa-star" aria-hidden="true"></i>';
                                                    echo   '<i class="fa fa-star-half-o" aria-hidden="true"></i>';
                                                echo    '</div>';
                                            echo   '</div>';
                                        echo   '</div>';
                                    echo   '</div>';
                                echo   '</div>';
                    }
                    $severname = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "game_manage";
                    $name=$_GET['game_name'];
					
                    $conn = mysqli_connect($severname, $username, $password, $dbname);
                    
                    if (!$conn) {
                    	die("Connection falied: ".mysqli_connect_error());
                    }
                    $query = "select * from game where g_name like '%$name%'";
                    
                    if($result=mysqli_query($conn,$query)){
						$array=array();
						$i=0;
						while($row= mysqli_fetch_array($result)){
							$array[$i]["g_name"]=$row["g_name"];
							$array[$i]["g_date"]=$row["g_date"];
							$array[$i]["g_recom"]=$row["g_recom"];
							$array[$i]["g_intro"]=$row["g_intro"];
							$array[$i]["g_cover"]=$row["g_cover"];
							gameview($array[$i]["g_name"],$array[$i]["g_date"],$array[$i]["g_recom"],$array[$i]["g_intro"],$array[$i]["g_cover"]);
							$i++;
						}
					}
                    
                    ?>							
                    <!-- ### Pagination Area ### -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-100">
                            <li class="page-item active"><a class="page-link" href="#">01</a></li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Game Review Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <a href="home.html"><img src="img/core-img/logo2.png" alt=""></a>
                            </div>
                            <div class="widget-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris velit arcu, scelerisque dignissim massa quis, mattis facilisis erat. Aliquam erat volutpat. Sed efficitur diam ut interdum ultricies.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>Game Reviews</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Doom</a></li>
                                        <li><a href="#">Grand Theft Auto</a></li>
                                        <li><a href="#">Bloodborne</a></li>
                                        <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>Usefull Links</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Testimanials</a></li>
                                        <li><a href="#">Reviews</a></li>
                                        <li><a href="#">New Games</a></li>
                                        <li><a href="#">Forum</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-70">
                            <div class="widget-title">
                                <h4>What’s new</h4>
                            </div>
                            <div class="widget-content">
                                <nav>
                                    <ul>
                                        <li><a href="#">Doom</a></li>
                                        <li><a href="#">Grand Theft Auto</a></li>
                                        <li><a href="#">Bloodborne</a></li>
                                        <li><a href="#">God of war</a></li>
                                        <li><a href="#">Persona 5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-content">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-sm-5">
                        <!-- Copywrite Text -->
                        <p class="copywrite-text"><a href="#">
Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>

</p>
                    </div>
                    <div class="col-12 col-sm-7">
                        <!-- Footer Nav -->
                        <div class="footer-nav">
                            <ul>
                                <li><a href="home.html">Home</a></li>
                                <li><a href="game-review.html">Games</a></li>
                                <li><a href="post.html">Articles</a></li>
                                <li><a href="single-game-review.html">Reviews</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>