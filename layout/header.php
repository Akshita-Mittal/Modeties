<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modities</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Default Theme -->
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/media.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <header class="site-header">
        <div class="container">
            <div class="row">

                <nav class="navbar navbar-default">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <div class="" onclick="myFunction(this)">
                                <div class="bar1"></div>
                                <div class="bar2"></div>
                                <div class="bar3"></div>
                            </div>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <div class="nav--logo"><img src="assets/images/logo.png" alt="logo" /></div>
                        </a>
                    </div>
                    <div class="search-bar col-sm-3 col-md-5">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" id="myInput" onkeyup="sFunction()" placeholder="Search Here...">
                                <div class="input-group-btn">
                                    <button class="btn btn-default search" type="submit"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                        <div class="serach-content" style="display: none">
                            <ul id="myTabs" class="nav nav-pills nav-justified" role="tablist" data-tabs="tabs">
                                <li class="active" style=""><a href="#All" data-toggle="tab" aria-expanded="true">All</a></li>
                                <li class="" style=""><a href="#Modeties" data-toggle="tab" aria-expanded="false">Modeties</a></li>
                                <li class="" style=""><a href="#People" data-toggle="tab" aria-expanded="false">People</a></li>
                                <li class="" style=""><a href="#Hashtags" data-toggle="tab" aria-expanded="false">Hashtags</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade active in" id="All">
                                    <ul class="search-all">
                                        <li>
                                            <h4>Modeties</h4>
                                            <div class="search-modities">
                                                <img src="assets/images/search1.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                            <div class="search-modities">
                                                <img src="assets/images/search2.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                            <div class="search-modities">
                                                <img src="assets/images/search3.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                        </li>
                                        <li>
                                            <h4>People</h4>
                                            <div class="search-people">
                                                <img src="assets/images/people1.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people2.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people1.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people2.png" alt="people" />
                                            </div>
                                        </li>
                                        <li>
                                            <h4>Hashtags</h4>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people1.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people2.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people1.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people2.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Modeties">
                                    <ul class="search-all">
                                        <li>
                                            <h4>Modeties</h4>
                                            <div class="search-modities">
                                                <img src="assets/images/search1.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                            <div class="search-modities">
                                                <img src="assets/images/search2.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                            <div class="search-modities">
                                                <img src="assets/images/search3.png" alt="modities" />
                                                <span class="search-modities_title">Women Makeup</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="People">
                                    <ul class="search-all">
                                        <li>
                                            <h4>People</h4>
                                            <div class="search-people">
                                                <img src="assets/images/people1.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people2.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people1.png" alt="people" />
                                            </div>
                                            <div class="search-people">
                                                <img src="assets/images/people2.png" alt="people" />
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="Hashtags">
                                    <ul class="search-all">
                                        <li>
                                            <h4>Hashtags</h4>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people1.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people2.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people1.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                            <div class="search-hashtags">
                                                 <img src="assets/images/people2.png" alt="people" />
                                                 <span class="hashtags">#</span>  
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="trending.php">Trending</a></li>
                            <li><a href="top-list.php">Top</a></li>
                            <li><a class="post" href="#" data-toggle="modal" data-target="#post_modal">Post</a></li>
                            <li class="user user-menu">
                                <a href="myprofile-view.php">
                                    <img src="assets/images/user.png" class="user-image" alt="User Image" />
                                    <span>Alexa Smith</span>
                                </a>
                            </li>
                            <li class="dropdown header-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-primary">9+</span>
                                </a>

                                <ul class="dropdown-menu notification-menu">
                                    <li class="header">Notification</li>
                                    <li>
                                        <div class="notification-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/user1.png" class="user-image" alt="User Image" />
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Gomaze <small>25min ago</small></h4>
                                                    <span>Comment on your post “ Women Makeup” </span>
                                                    <p>Vivamus id libero id massa commodo sodales.</p>
                                                    <p>Pellentesque gravida iaculis mauris in condimentum.</p>
                                                    <div class="category">
                                                        <img src="assets/images/profile1.png" alt="profile1" />
                                                        <img src="assets/images/profile2.png" alt="profile2" />
                                                        <img src="assets/images/profile3.png" alt="profile3" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notification-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/user1.png" class="user-image" alt="User Image" />
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Rose Marry <small>25min ago</small></h4>
                                                    <span>Started Following you. </span>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#" class="follow">Follow</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="notification-wrap">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img src="assets/images/user1.png" class="user-image" alt="User Image" />
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Gomaze <small>25min ago</small></h4>
                                                    <span>Like your post & Comment on posts</span>
                                                    <p>Vivamus id libero id massa commodo sodales.</p>
                                                    <p>Pellentesque gravida iaculis mauris in condimentum.</p>
                                                </div>
                                                <div class="media-right">
                                                    <a href="#"><img src="assets/images/profile4.png" alt="profile4" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="footer"><a href="#">View All Notifications</a></li>
                                </ul>

                            </li>
                            <li class="dropdown header-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <img src="assets/images/icons/Side-Menu.png" alt="Side-Menu" />
                                </a>
                                <ul class="dropdown-menu setting-menu">
                                    <li>
                                        <a href="promote-post.php">
                                            <img src="assets/images/icons/megaphone.png" alt="megaphone" /> Promote your Post
                                        </a>
                                    </li>
                                    <li>
                                        <a href="about.php">
                                            <img src="assets/images/icons/information.png" alt="information" /> About Us
                                        </a>
                                    </li>
                                    <li>
                                        <a href="terms-and-condition.php">
                                            <img src="assets/images/icons/pad.png" alt="pad" /> Terms and Condition
                                        </a>
                                    </li>
                                    <li>
                                        <a href="account-setting.php">
                                            <img src="assets/images/icons/settings.png" alt="settings" /> Account Settings
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/icons/logout.png" alt="logout" /> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                </nav>

            </div>
        </div>
    </header>