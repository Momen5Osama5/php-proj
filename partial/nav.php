<?php
include_once "DB_CONNECTION.php";
$user = $_SESSION['name'];
?>

<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mobile-menu d-md-none mr-auto"><a
                            class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                class="ft-menu font-large-1"></i></a></li>
                <li class="nav-item mr-auto">
                    <a class="navbar-brand" href="index.html">
                   
                        <h3 class="brand-text">Dashboard</h3>
                    </a>
                </li>
                <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0"
                                                                      data-toggle="collapse"><i
                                class="toggle-icon ft-toggle-right font-medium-3 white"
                                data-ticon="ft-toggle-right"></i></a></li>
                <li class="nav-item d-md-none">
                    <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i
                                class="la la-ellipsis-v"></i></a>
                </li>
            </ul>
        </div>
        <div class="navbar-container content">
            <div class="collapse navbar-collapse" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#"
                                                                   data-toggle="dropdown"><?php #echo strtoupper($user)
                            ?></a>
                        <ul class="mega-dropdown-menu dropdown-menu row">
                            <li class="col-md-2">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i>
                                    News</h6>
                                <div id="mega-menu-carousel-example">
                                    <div>
                                        <img class="rounded img-fluid mb-1" src="app-assets/images/slider/slider-2.png"
                                             alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                                        <
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down
                                    menu</h6>
                                <ul class="drilldown-menu">
                                    <li class="menu-list">
                                        <ul>
                                            
                                              
                                          
                                               
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-3">
                                <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion
                                </h6>
                                <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                                    <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                                        <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a
                                                    data-toggle="collapse" data-parent="#accordionWrap"
                                                    href="#accordionOne" aria-expanded="true"
                                                    aria-controls="accordionOne">Accordion
                                                Item #1</a></div>
                                        <div class="card-collapse collapse show" id="accordionOne" role="tabpanel"
                                             aria-labelledby="headingOne" aria-expanded="true">
                                            <div class="card-content">
                                                <p class="accordion-text text-small-3">Caramels dessert chocolate cake
                                                    pastry jujubes bonbon.
                                                    Jelly wafer jelly beans. Caramels chocolate cake liquorice
                                                    cake wafer jelly beans croissant apple pie.</p>
                                            </div>
                                        </div>
                                        <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a
                                                    class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionWrap" href="#accordionTwo"
                                                    aria-expanded="false" aria-controls="accordionTwo">Accordion Item
                                                #2</a></div>
                                        <div class="card-collapse collapse" id="accordionTwo" role="tabpanel"
                                             aria-labelledby="headingTwo" aria-expanded="false">
                                            <div class="card-content">
                                                <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly
                                                    tiramisu
                                                    dessert pie. Tiramisu macaroon muffin jelly marshmallow
                                                    cake. Pastry oat cake chupa chups.</p>
                                            </div>
                                        </div>
                                        <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a
                                                    class="collapsed" data-toggle="collapse"
                                                    data-parent="#accordionWrap" href="#accordionThree"
                                                    aria-expanded="false" aria-controls="accordionThree">Accordion Item
                                                #3</a></div>
                                        <div class="card-collapse collapse" id="accordionThree" role="tabpanel"
                                             aria-labelledby="headingThree" aria-expanded="false">
                                            <div class="card-content">
                                                <p class="accordion-text">Candy cupcake sugar plum oat cake wafer
                                                    marzipan jujubes
                                                    lollipop macaroon. Cake dragée jujubes donut chocolate
                                                    bar chocolate cake cupcake chocolate topping.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="col-md-4">
                                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i>
                                    Contact Us</h6>
                                <form class="form form-horizontal">
                                    <div class="form-body">
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" type="text" id="inputName1"
                                                           placeholder="John Doe">
                                                    <div class="form-control-position pl-1"><i class="la la-user"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <input class="form-control" type="email" id="inputEmail1"
                                                           placeholder="john@example.com">
                                                    <div class="form-control-position pl-1"><i
                                                                class="la la-envelope-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-3 form-control-label"
                                                   for="inputMessage1">Message</label>
                                            <div class="col-sm-9">
                                                <div class="position-relative has-icon-left">
                                                    <textarea class="form-control" id="inputMessage1" rows="2"
                                                              placeholder="Simple Textarea"></textarea>
                                                    <div class="form-control-position pl-1"><i
                                                                class="la la-commenting-o"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12 mb-1">
                                                <button class="btn btn-info float-right" type="button"><i
                                                            class="la la-paper-plane-o"></i>
                                                    Send
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-user nav-item">
                        <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1">
                                <span class="user-name text-bold-700">
                                    <?php   echo strtoupper($user) ?></span>
                              </span>      
                                 
                            <span class="avatar avatar-online">
                                <img src="app-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span>
                        </a>
                        <?php
                        $query = "select * from admins where email ='" . $_SESSION['email'] . "'";
                        $result = mysqli_query($connection, $query);
                        $row9 = mysqli_fetch_assoc($result);
                        ?>
                        <div class="dropdown-menu dropdown-menu-right">

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                        </div>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</nav>