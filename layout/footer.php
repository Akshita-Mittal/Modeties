<footer>
    <div class="container">
        <div class="row">
            <div class="footer-left">
                © 2019 MODITIES
            </div>
            <div class="footer-right">
                <div class="footer-links">
                    <a href="about.php">About</a>
                    <a href="terms-and-condition.php">Terms & Condition</a>
                </div>

                <div class="social-networks">
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery.min.js"></script>

<!-- Include Date Range Picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- Include js plugin -->
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/custom.js"></script>


<script>
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>


<!-- post modal-->
<div class="modal modities_modal fade" id="post_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <h4 class="modal-title" id="modalLabel2">Enter your Fashion World!</h4>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="post-image">
                                <h2>Image</h2>
                            </div>
                            <div class="round">
                                <input type="checkbox" id="checkbox12" />
                                <label for="checkbox12"></label>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <div class="post-text">
                                <h2>Text</h2>
                            </div>
                            <div class="round">
                                <input type="checkbox" id="checkbox13" />
                                <label for="checkbox13"></label>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!--post-text modal-->
<!--
<div id="post-text" class="modal follow-modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

         Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="media">
                    <div class="media-left">
                        <div class="media-bg media-object1"></div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">Rose Marry</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->


<!--signin modal-->
<div id="signin" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <form name="info_form" class="form_style" action="#" method="post">
                    <img class="signin-form-logo" src="assets/images/logo.png" alt="logo" />
                    <span class="form-title">
                        Welcome Back to Modeties!
                    </span>
                    <span class="form-desc">
                        The Social Media for Fashion
                    </span>
                    <span class="form-sub_title">
                        Log in to your Account
                    </span>

                    <div class="form-group">
                        <label for="name">Username/ Email</label>
                        <input type="text" placeholder="Alexa@fashion inspiration" class="form-control">
                        <span class="icon"><img src="assets/images/icons/user-icon.png" alt=""></span>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" placeholder="*******" class="form-control">
                        <span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>

                    <div class="remember_forget">
                        <input type="checkbox" id="fruit1" name="fruit-1" value="Strawberry" checked="">
                        <label for="fruit1">Remember Me</label>
                        <label for="forget-passwrd"><a href="#" class="Forgot_pass" data-dismiss="modal" data-toggle="modal" data-target="#forget-pswd">Forgot Password?</a></label>
                    </div>
                    <button type="submit" class="sign signin">Sign in</button>
                </form>
                <div class="login-media">
                    <span class="social_m_title">Or Continue With Social Media </span>
                    <ul class="login-type">
                        <li>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    <span class="social_m_title">Need an account ? <a href="#" class="signup_now" data-dismiss="modal" data-toggle="modal" data-target="#signup">Sign up Now</a></span>
                </div>
            </div>

        </div>

    </div>
</div>



<!--signup modal-->

<div id="signup" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <form name="info_form" class="form_style" action="#" method="post">
                    <img class="signin-form-logo" src="assets/images/logo.png" alt="logo" />
                    <span class="form-title">
                        Welcome to Modeties!
                    </span>
                    <span class="form-desc">
                        The Social Media for Fashion
                    </span>
                    <span class="form-sub_title">
                        Sign-up on to Outfit Inspiration
                    </span>

                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" placeholder="Alexa@fashion inspiration" class="form-control">
                        <span class="icon"><img src="assets/images/icons/user-icon.png" alt=""></span>
                    </div>
                    <div class="form-group">
                        <label for="Fullname">Full Name</label>
                        <input type="text" placeholder="Alexa Smith" class="form-control">
                        <span class="icon"><img src="assets/images/icons/username-icon.png" alt="user-icon" /></span>
                    </div>
                    <div class="form-group">
                        <label for="Username">Gender</label>
                        <select class="form-control">
                            <option>Select Option</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <span class="icon"><img src="assets/images/icons/arrow-down-icon.png" alt="arrow-icon" /></span>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="fashion123@alexa.com" class="form-control">
                        <span class="icon"><img src="assets/images/icons/email-icon.png" alt="email-icon" /></span>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password</label>
                        <input type="password" placeholder="*******" class="form-control">
                        <span class="icon"><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </div>

                    <button type="submit" class="sign signup">Sign up</button>
                </form>
                <div class="login-media">
                    <span class="social_m_title">Or Continue With Social Media </span>
                    <ul class="login-type">
                        <li>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    <span class="social_m_title">Already have an account ? <a href="#signin" class="login_now" data-dismiss="modal" data-toggle="modal" data-target="#signin">Log in</a></span>
                </div>
            </div>

        </div>

    </div>
</div>


<!--forget-pswd modal-->
<div id="forget-pswd" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-bg">
                <form name="info_form" class="form_style forget-form" action="#" method="post">
                    <span class="form-title">
                        Forgot Password
                    </span>
                    <span class="form-desc">
                        Please provide your to receive a password reset Email!
                    </span>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="text" placeholder="Alexa@fashion inspiration" class="form-control">
                        <span class="icon"><img src="assets/images/icons/user-icon.png" alt=""></span>
                    </div>

                    <button type="submit" class="sign submit">Submit</button>
                </form>

            </div>

        </div>

    </div>
</div>


<!-- edit feedmanage-preference modal -->
<div class="modal modities_modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="edit-modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                </button>
                <h4 class="modal-title" id="modalLabel">Edit What You Follow</h4>
                <button type="button" class="Done" data-dismiss="modal">
                    Done
                </button>
            </div>
            <div class="modal-body">
                <div class="edit-topbar">
                    <div class="edit-heading">
                        <h2>Gender</h2>
                    </div>
                    <div class="gender-options">
                        <a href="#"><img src="assets/images/Male-Fashion.png" alt="male" /></a>
                        <a href="#"><img src="assets/images/Female-Fashion.png" alt="male" /></a>
                        <a href="#"><img src="assets/images/Unisex-Fashion.png" alt="male" /></a>

                    </div>
                </div>
                <div class="edit-topbar">
                    <div class="edit-heading">
                        <h2>Modeties</h2>
                    </div>
                    <div class="owl-carousel owl-theme modities-list">
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities1.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>

                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities2.png" alt="modities" />
                                <div class="modities-title">Beard styles</div>
                                <div class="modities-sub_title">Best Beard Style <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities3.png" alt="modities" />
                                <div class="modities-title">Men Casual Style</div>
                                <div class="modities-sub_title">Best Casual Dress <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities4.png" alt="modities" />
                                <div class="modities-title">Women Wear Style</div>
                                <div class="modities-sub_title">Best Idea for women <br /> Outfit</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities3.png" alt="modities" />
                                <div class="modities-title">Men Casual Style</div>
                                <div class="modities-sub_title">Best Casual Dress <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities2.png" alt="modities" />
                                <div class="modities-title">Beard styles</div>
                                <div class="modities-sub_title">Best Beard Style <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities4.png" alt="modities" />
                                <div class="modities-title">Women wear Style</div>
                                <div class="modities-sub_title">Best Idea for women <br /> Outfit</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities1.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>

                    </div>
                </div>
                <div class="edit-topbar people_follow">
                    <div class="edit-heading">
                        <h2>People you follow</h2>
                    </div>
                    <div class="owl-carousel owl-theme modities-list">
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities5.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>

                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities6.png" alt="modities" />
                                <div class="modities-title">Outfit Ove 50</div>
                                <div class="modities-sub_title">Best Outfits Style <br /> Ideas</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>

                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities7.png" alt="modities" />
                                <div class="modities-title">Men Hair style</div>
                                <div class="modities-sub_title">Best Hairstyle <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities8.png" alt="modities" />
                                <div class="modities-title">Beard styles</div>
                                <div class="modities-sub_title">Best Beard Style <br /> Ideas</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities7.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities5.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities8.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>
                            <a href="#" class="unfollow">Unfollow</a>
                        </div>
                        <div class="item">
                            <div class="modities-item">
                                <img src="assets/images/modities7.png" alt="modities" />
                                <div class="modities-title">Women Makeup</div>
                                <div class="modities-sub_title">Best Natural Makeup <br /> Ideas</div>
                            </div>
                            <a href="#" class="follow">follow</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--upload-profile modal-->
<div id="upload-img_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="upload-profile-wrap">
                
                        <img src="assets/images/upload-img.png" alt="dp" class="img-fluid" />
                 
                </div>
                <button type="submit" class="upload-picture">Upload photo from the device </button>
            </div>

        </div>

    </div>
</div>

<!--Edit-profile modal-->
<!--
<div id="Edit-Profile" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">

         Modal content
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="body-title">
                    Change Profile Picture!
                </span>
                <div class="avatar">
                    <div class="logoContainer">
                        <img src="assets/images/dp1.png" alt="dp">
                    </div>
                </div>
                <button type="submit" class="save-picture">Save profile Picture</button>
                <button type="submit" class="cancel" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>

        </div>

    </div>
</div>
-->


<!--otheruserprofile-block modal-->
<div id="block-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <span class="body-sub-title">
                    If you block this user you will not be able to see the content of the user
                </span>
                <div class="other-profile_action">
                    <button type="submit" class="block-otheruser">Block</button>
                    <button type="submit" class="cancel-otheruser" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!--otheruserprofile-report modal-->
<div id="report-user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <span class="body-sub-title">
                    Are you sure you want to report this user?
                </span>
                <div class="other-profile_action">
                    <button type="submit" class="block-otheruser">Yes</button>
                    <button type="submit" class="cancel-otheruser" data-dismiss="modal" aria-label="Close">No</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!--My-followers modal-->
<div id="My-followers" class="modal follow-modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="body-sub-title">
                    Followers List
                </span>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object4"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Iwin Sonz</h4>
                                <p>11 Posts . 32 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object5"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Racheal Ronn</h4>
                                <p>67 Posts . 733 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!--My-following modal-->
<div id="My-following" class="modal follow-modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="body-sub-title">
                    Following List
                </span>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object4"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Iwin Sonz</h4>
                                <p>11 Posts . 32 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object5"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Racheal Ronn</h4>
                                <p>67 Posts . 733 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="following">Following</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!--My-followers modal-->
<div id="other-followers" class="modal follow-modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="body-sub-title">
                    Followers List
                </span>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object4"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Iwin Sonz</h4>
                                <p>11 Posts . 32 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object5"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Racheal Ronn</h4>
                                <p>67 Posts . 733 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object4"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Iwin Sonz</h4>
                                <p>11 Posts . 32 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object5"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Racheal Ronn</h4>
                                <p>67 Posts . 733 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!--My-following modal-->
<div id="other-following" class="modal follow-modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="body-sub-title">
                    Following List
                </span>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object4"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Iwin Sonz</h4>
                                <p>11 Posts . 32 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object5"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Racheal Ronn</h4>
                                <p>67 Posts . 733 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object1"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rose Marry</h4>
                                <p>4 Posts . 832 Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object2"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Gulliver Hann</h4>
                                <p>133 Posts . 1.6k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <div class="media-bg media-object3"></div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Sara Jhon Taker</h4>
                                <p>8 Posts . 27.7k Followers</p>
                            </div>
                            <div class="media-right">
                                <a href="#" class="follow">Follow</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</div>


<!--deactivate-account modal-->
<div id="deactivate-account" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body">
                <span class="body-sub-title">
                    Are you sure you want to deactivate your account?
                </span>
                <div class="other-profile_action">
                    <button type="submit" class="deactivate-account">Deactivate</button>
                    <button type="submit" class="cancle-deactivate" data-dismiss="modal" aria-label="Close">Cancel</button>
                </div>
            </div>
        </div>

    </div>
</div>

<!--otheruserprofile-block modal-->
<div id="report-post" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <span class="body-sub-title">
                    Are you sure want to report this post?
                </span>
                <div class="other-profile_action">
                    <button type="submit" class="cancel-post" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button type="submit" class="report-post">Report</button>
                </div>
            </div>
        </div>

    </div>
</div>


<!--Delect chat modal-->
<div id="delete-chat" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body modal-bg">
                <span class="body-sub-title">
                    Are you sure want to delete the conversation ?
                </span>
                <div class="other-profile_action">
                    <button type="submit" class="block-otheruser">Yes</button>
                    <button type="submit" class="cancel-otheruser" data-dismiss="modal" aria-label="Close">No</button>
                </div>
            </div>
        </div>

    </div>
</div>


</body>

</html>