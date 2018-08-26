<?php require ADMIN_VIEW_PATH.'/partial/header.php'; ?>


    <div class="page-container">
        <div class="left-content">
            <div class="mother-grid-inner">
                <!--header start here-->
                <div class="header-main">
                    <div class="header-left">
                        <div class="logo-name">
                            <a href="index.html"> <h1>Shoppy</h1>
                                <!--<img id="logo" src="" alt="Logo"/>-->
                            </a>
                        </div>
                        <!--search-box-->
                        <div class="search-box">
                            <form>
                                <input type="text" placeholder="Search..." required="">
                                <input type="submit" value="">
                            </form>
                        </div><!--//end-search-box-->
                        <div class="clearfix"> </div>
                    </div>
                    <div class="header-right">
                        <div class="profile_details_left"><!--notifications of menu start -->
                            <ul class="nofitications-dropdown">
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new messages</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/p4.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/p2.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor </p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/p3.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all messages</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 3 new notification</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/p5.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li class="odd"><a href="#">
                                                <div class="user_img"><img src="images/p6.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="user_img"><img src="images/p7.png" alt=""></div>
                                                <div class="notification_desc">
                                                    <p>Lorem ipsum dolor</p>
                                                    <p><span>1 hour ago</span></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all notifications</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown head-dpdn">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <div class="notification_header">
                                                <h3>You have 8 pending task</h3>
                                            </div>
                                        </li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Database update</span><span class="percentage">40%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar yellow" style="width:40%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar green" style="width:90%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Mobile App</span><span class="percentage">33%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar red" style="width: 33%;"></div>
                                                </div>
                                            </a></li>
                                        <li><a href="#">
                                                <div class="task-info">
                                                    <span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="progress progress-striped active">
                                                    <div class="bar  blue" style="width: 80%;"></div>
                                                </div>
                                            </a></li>
                                        <li>
                                            <div class="notification_bottom">
                                                <a href="#">See all pending tasks</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="clearfix"> </div>
                        </div>
                        <!--notification menu end -->
                        <div class="profile_details">
                            <ul>
                                <li class="dropdown profile_details_drop">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <div class="profile_img">
                                            <span class="prfil-img"><img src="images/p1.png" alt=""> </span>
                                            <div class="user-name">
                                                <p>Malorum</p>
                                                <span>Administrator</span>
                                            </div>
                                            <i class="fa fa-angle-down lnr"></i>
                                            <i class="fa fa-angle-up lnr"></i>
                                            <div class="clearfix"></div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu drp-mnu">
                                        <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                        <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                        <li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--heder end here-->
                <!-- script-for sticky-nav -->
                <script>
                    $(document).ready(function() {
                        var navoffeset=$(".header-main").offset().top;
                        $(window).scroll(function(){
                            var scrollpos=$(window).scrollTop();
                            if(scrollpos >=navoffeset){
                                $(".header-main").addClass("fixed");
                            }else{
                                $(".header-main").removeClass("fixed");
                            }
                        });

                    });
                </script>
                <!-- /script-for sticky-nav -->
                <!--inner block start here-->

                <div class="inner-block">

                    <div style="margin-bottom: 30px;">
                        <a class="btn btn-success" href="<?php echo ADMIN_URL . 'index.php?controller=article&action=add'; ?>">Thêm bài viết</a>
                    </div>

                    <table class="table table-striped">
                        <thead>
                            <td>Id</td>
                            <td>tiêu đề bài viết</td>
                            <td>nội dung</td>
                            <td>Hành động</td>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($articles as $article) {
                                    ?>
                                    <tr>
                                        <td><?php echo $article['id'] ?></td>
                                        <td><?php echo $article['title'] ?></td>
                                        <td><?php echo $article['article_content'] ?></td>
                                        <td> <a href="<?php echo ADMIN_URL . 'index.php?controller=article&action=edit&id='.$article['id']; ?>" class="btn btn-warning">SỬA</a>
                                        <a href="<?php echo ADMIN_URL . 'index.php?controller=article&action=delete&id='.$article['id']; ?>" class="btn btn-danger">XÓA</a> </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <!--inner block end here-->
                <!--copy rights start here-->
                <div class="copyrights">
                    <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
                </div>
                <!--COPY rights end here-->
            </div>
        </div>
        <?php require ADMIN_VIEW_PATH.'/partial/sidebar.php'; ?>
    </div>

<?php require ADMIN_VIEW_PATH.'/partial/footer.php'; ?>