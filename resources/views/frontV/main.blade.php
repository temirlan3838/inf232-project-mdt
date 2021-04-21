<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/45d73ed7f4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/front/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <script src="/front/app.js"></script>
    <title>MDT company</title>
</head>

<body>
    <!--HEADER-->
    <?php
    use App\Http\Controllers\ProductController;

    $total = 0;
    if (Session::has('user')) {
        $total = ProductController::cartItem();
    }
    ?>
    <header class="header" id="header">
        <div class="container">
            <div class="header_inner">
                <div class="header_logo"> <a href="/mdt"><img src="/front/img/logo/one lone mdt.png" alt="mdtLogo" width="230" height="30"></a> </div>
                
                <nav class="nav" id="nav">
                    <a href="#" class="nav_link" data-scroll="#intro">{{ __("Home")}}</a>
                    <a href="#" class="nav_link" data-scroll="#product">{{ __("Product")}}</a>
                    <a href="#" class="nav_link" data-scroll="#about">{{ __("About us")}}</a>
                    <a href="#" class="nav_link" data-scroll="#contact">{{ __("Contact")}}</a>
                    <a href="cartlist" class="nav_link">{{ __("Cart")}}({{$total}})</a>
                    <a href="myorders" class="nav_link">{{ __("Orders")}}</a>
                    @php $locale = session()->get('locale');
                    @endphp
                    @if(Session::has('user'))
                    <!-- <ul class="nav navbar-nav"> -->
                        <li class="dropdown nav_link">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="logout">{{ __("Logout")}}</a></li>
                            <!-- <li><a href="#">Page 1-2</a></li> -->
                            <!-- <li><a href="#">Page 1-3</a></li> -->
                            </ul>
                        </li>
                    <!-- </ul> -->
                    @else         
                        <a href="login" class="nav_link">{{ __("Login")}}</a>
                        <a href="register" class="nav_link">{{ __("Register")}}</a>
                    @endif
                    <li class="dropdown nav_link">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Lang
                        <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="mdt/en">English</a></li>
                            <li><a href="mdt/ru">Russian</a></li>
                        </ul>
                    </li>
                </nav>
                
                
            </div>
        </div>
    </header>
    <!--HEADER END-->

    <!--INTRO-->
    <div class="intro" id="intro">
        <div class="container">
            <div class="intro_inner">
                <div class="intro_title">{{ __("Shop with us")}}</div>
                <div class="intro_subtitle">{{ __("It may be the best for you, is it the best for your prospects? If it’s not the best for them, they’ll see you as a con artist.")}}
                </div>
            </div>
        </div>
    </div>
    <!--INTRO END-->
    <!--PRODUCT-->
    <!-- <h1><img src="http://127.0.0.1:8000/front/img/product4.jpg" alt=""></h1> -->
    <!-- <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FImage&psig=AOvVaw2CWiTa9vASADiD1Ni68IHl&ust=1617802664676000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCJCm_Nve6e8CFQAAAAAdAAAAABAD" alt=""> -->

    <section class="product" id="product">
        <div class="container">
            <div class="section_header">
                <div class="section_pretitle">{{ __("Popular Products")}}</div>
                <div class="section_title">{{ __("Our Product")}}</div>
                <div class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</div>
            </div>
            <div class="product_inner">
            
                <div class="product_item item"> <img src="/front/img/product1.jpg" alt="" class="product_img">
                    <div class="product_button">
                        <a href="/mdt/detail/1" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>
                <div class="product_item item"> <img src="/front/img/product2.jpg" alt="" class="product_img" id="img_p">
                    <div class="product_button">
                        <a href="/mdt/detail/2" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>
                <div class="product_item item"> <img src="/front/img/product3.jpg" alt="" class="product_img">
                    <div class="product_button">
                        <a href="/mdt/detail/3" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>
                <div class="product_item item"> <img src="/front/img/product4.jpg" alt="" class="product_img">
                    <div class="product_button">
                        <a href="/mdt/detail/4" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>
                <div class="product_item item"> <img src="/front/img/product5.jpg" alt="" class="product_img">
                    <div class="product_button">
                        <a href="/mdt/detail/5" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>
                <div class="product_item item"> <img src="/front/img/product6.jpg" alt="" class="product_img">
                    <div class="product_button">
                        <a href="/mdt/detail/6" class="btn_product view">{{ __("View")}}</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--PRODUCT END-->

    <!-- <div class="forma">
        <form action="{{ route('add-product') }}" method="post">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Product Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name of product">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Product Title</label>
                <input name="title" type="text" class="form-control" placeholder="Enter title of product">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Price</label>
                <input name="price" type="text" class="form-control" placeholder="Enter price">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Rating</label>
                <input name="rating" type="text" class="form-control" placeholder="Enter rating">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
                <?php
                echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
                echo Form::file('image');
                Form::close();
                ?>
            </div>
            <div class="form-group">
                <input type="submit" name="create" value="create" class="btn btn-info">
            </div>
        </form>
    </div> -->

    <!--NOTIFIED-->
    <div class="notified">
        <div class="notified_inner">
            <div class="notif_title">{{ __("Get notified on each updates.")}}</div>
            <div class="notif_inp">
                <input type="text" placeholder="Enter your email..." class="notif_input em" id="em">
                <button type="submit" class="notif_btn subscribe">{{ __("Subscribe")}}</button>
            </div>
            <div class="notif_subtitle">{{ __("Get a notification when a specific app releases a new update. Fugiat commodi veniam doloremque ducimus tempora.")}}</div>
            <div class="mes_n">
                <p class="txt">{{ __("Thank you for subscribing!")}}</p>
                <button class="close">{{ __("Close")}}!</button>
            </div>
        </div>
    </div>
    <!--NOTIFIED END-->


    <!--ABOUT US-->
    <div class="about_product" id="feature">
        <div class="container">
            <div class="section_header section_header_gray">
                <div class="section_pretitle">{{ __("AWESOME PRODUCTS")}}</div>
                <div class="section_title">{{ __("Featured Products")}}</div>
                <div class="section_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae nostrum natus excepturi fuga ullam accusantium vel ut eveniet aut consequatur laboriosam ipsam.</div>
            </div>
        </div>
        <div class="cont">
            <div class="card card2">
                <div>
                    <h3 class="card_title">{{ __("About This Product")}}</h3>
                    <div class="card_sub">
                        <p>{{ __("This smoking jacket from Luxurobes is another old-fashioned favorite.")}} {{ __("Made with luxurious blue velvet, this jacket cuts a traditional silhouette complete with a quilted shawl collar, cuffed sleeves, and satin piping.")}}</p>
                        <br>
                        <p class="v_det2">{{ __("Plush and sumptuously soft, this accessory is sure to leave you feeling stylish and oh so cozy.")}}</p>
                    </div>
                    <div class="price">
                        <h3 class="price_text">{{ __("Price")}}:</h3>
                        <h4 class="price_num"><strike class="non_sale">$900 </strike> $450</h4>
                    </div>
                    <div> <a href="#" class="btn_card detail2">{{ __("View Details")}}</a> <a href="#" class="btn_card addto2">{{ __("Add to Cart")}}</a> </div>
                </div> <img src="/front/img/product9.jpg" alt="" class="card_img sec"> </section>
            </div>
        </div>
        <!--ABOUT-->
        <div class="about_us" id="about">
            <div class="container">
                <div class="about_us_inner"> <img class="about_us_image" src="/front/img/logo/MDT.png" alt="" width="700" height="700">
                    <div class="about_us_text">
                        <div class="about_us_pretitle">MDT COMPANY</div>
                        <div class="about_us_title">{{ __("About Us")}}</div>
                        <div class="about_us_txt">{{ __("We’re in love with harmonious blue this season.")}} {{ __("The trend colour will turn any look into a glamorous eye-catcher.")}} {{ __("The trend pattern polka dots comes into play to add even more feminine power.")}}   
                            <p class="learn_more">{{ __("The pretty pattern stands out most on softly draped fabrics and flowing fits. Whether big or small: polka dots are a must in winter!")}}
                               
                            </p>
                        </div>
                        <div class="niz">
                            <div>
                                <a href="#" class="btn_about learn">{{ __("Learn More")}}</a>
                            </div>
                            <div>
                                <a class="ler" href="#"><i class="fas fa-reply ler"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--ABOUT END-->

        <!-- TEAM -->
        <div class="team">
            <div class="container">
                <div class="section_header">
                    <div class="section_pretitle">{{ __("Team")}}</div>
                    <div class="section_title">{{ __("Leadership")}}</div>
                </div>
                <div class="team_inner">
                    <div class="team_item">
                        <img src="/front/img/team1.jpg" alt="" class="team_img">
                        <div class="team_name">John Rooster</div>
                        <div class="team_prof">CO-FOUNDER, PRESIDENT</div>
                        <div class="team_text">{{ __("So to give the best answer possible, you want to combine the three points above, and then be specific")}} {{ __("If you have previous work experience, use the STAR method – Situation, Task, Action.")}}
                         </div>
                        <div class="team_soc">
                            <a class="sos" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="sos"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://kz.linkedin.com/" target="_blank" class="sos"><i class="fab fa-invision"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="sos"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                    <div class="team_item">
                        <img src="/front/img/team22.jpg" alt="" class="team_img">
                        <div class="team_name">Tom Sharp</div>
                        <div class="team_prof">CO-FOUNDER, COO</div>
                        <div class="team_text">{{ __("Along with thinking about which of your experiences are most relevant and recent, you need to think about how impressive something is overall.")}}</div>
                        <div class="team_soc">
                            <a class="sos" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="sos"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://kz.linkedin.com/" target="_blank" class="sos"><i class="fab fa-invision"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="sos"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                    <div class="team_item">
                        <img src="/front/img/team3.jpg" alt="" class="team_img">
                        <div class="team_name">Winston Hodson</div>
                        <div class="team_prof">MARKETING</div>
                        <div class="team_text">{{ __("Nobody’s perfect, and nobody has every single thing an employer wants in the interview, so you just need to prepare the best you can and give the best example.")}}
                        </div>
                        <div class="team_soc">
                            <a class="sos" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://twitter.com/" target="_blank" class="sos"><i class="fab fa-twitter-square"></i></a>
                            <a href="https://kz.linkedin.com/" target="_blank" class="sos"><i class="fab fa-invision"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="sos"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="section_header">
                    <div class="section_title">{{ __("Work with us")}}</div>
                    <div class="section_pretitle">{{ __("Send your resume here")}}</div>
        </div>
        <div class="forma">
        <form action="{{ route('add-product') }}" method="post" enctype="multipart/form-data">
        @csrf 
            <div class="form-group ">
            <label for="exampleInputEmail1">{{ __("Resume")}}</label>
            <div class="g1">
                <?php
                echo Form::open(array('url' => '/uploadfile', 'files' => 'true'));
                echo Form::file('res');
                Form::close();
                ?>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" name="create" value="send" class="btn btn-info">
            </div>
        </form>
        </div>
    </div>
        <!-- TEAM END -->

        <!-- SALE SUMMER -->
        <div class="summer">
            <div class="summer_inner">
                <div class="section_header section_header-summer">
                    <div class="section_pretitle section_pretitle-summer">{{ __("Special promo")}}</div>
                    <div class="section_title section_title-summer">{{ __("Summer Sale")}}</div>
                </div>
                <div class="summer_text">{{ __("The Long Weekend Just Got Sweeter Thanks to These 15 Summer Sales 2020: Best offers on clothing from Nike, Asos, H&M and more")}}</div>
                <a class="summer_btn shopnow" href="https://www.comma-store.eu/p/long-sleeve-blouse-with-jewel-details-81.012.11.2588.html?cgid=new&sku=81.012.11.2588.8033.32" target="_blank">{{ __("Shop now")}}</a>
            </div>
        </div>
        <!--SUMMER SALE END-->



        <!--CONTACT US-->
        <div class="contact_us" id="contact">
            <div class="container">
                <div class="section_header section_header_gray">
                    <div class="section_pretitle">{{ __("contact form")}}</div>
                    <div class="section_title">{{ __("Get in touch")}}</div>
                </div>
                <div class="contact_form">

                    <form class="form" action="{{ route('add-mess') }}" method="post">
                        @csrf
                        <div class="contact_title">{{ __("Contact Form")}}</div>
                        <div class="f">
                            <div class="first_row">
                                <label for="fname">{{ __("First Name")}}<i class="gal"></i></label>
                                <input type="text" name="name" class="nameinp" id="inp">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="first_row">
                                <label for="lname">{{ __("Last Name")}}<i class="gal"></i></label>
                                <input type="text" name="lastname" class="lastnameinp" id="inp">
                                @error('lastname')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <label for="email">{{ __("Email")}}<i class="gal"></i></label>
                        <input type="email" name="email" id="inp">
                        @error('email')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <label for="subject">{{ __("Subject")}}<i class="gal"></i></label>
                        <input type="text" name="subject" class="subj" id="inp">
                        @error('subject')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <label for="message">{{ __("Message")}}<i class="gal"></i></label>
                        <textarea class="area" name="message" placeholder="Write your notes or question here.."></textarea>
                        @error('message')
                        <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="btn_sub">
                            <input type="submit" name="send" value="Send Message" id="contact_sub"> <a class="again" href="#"><i class="fas fa-reply"></i></a>
                        </div>
                        <div class="after_sub">
                            <div class="text2">Thank you, Submitted! <i class="fas fa-check"></i> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--CONTACT US END-->

        <!--Footer-->
        <footer class="footer">
            <div class="container">
                <div class="footer_inner">
                    <div class="footer_item">
                        <div class="f_title">{{ __("About us")}}</div>
                        <div class="as_text">Everything you wanted to know about your fave fashion brand. And then some.Your biggest fans, that's who. Made by us, loved by you. </div>
                    </div>
                    <div class="footer_item">
                        <div class="f_title">{{ __("Quick links")}}</div>
                        <div class="ql_text">
                            <a href="#" class="nav_links" data-scroll="#about">About us</a>
                            <a href="#" class="nav_links" data-scroll="#special">Services</a>
                            <a href="#" class="nav_links" data-scroll="#testimonial">Testimonials</a>
                            <a href="#" class="nav_links" data-scroll="#contact">Contact us</a>
                        </div>
                    </div>
                    <div class="footer_item">
                        <div class="f_title">{{ __("Follow us")}}</div>
                        <div class="fu_text">
                            <a class="f_soc" href="https://www.facebook.com/" target="_blank"><i class=" fab fa-facebook-f"></i></a>
                            <a class="f_soc" href="https://twitter.com/" target="_blank"><i class=" fab fa-twitter"></i></a>
                            <a class="f_soc" href="https://www.instagram.com/" target="_blank"><i class=" fab fa-instagram"></i></a>
                            <a class="f_soc" href="https://kz.linkedin.com/" target="_blank"><i class=" fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="copyright__text">
                        <div>Copyright © 2020 MDT Company. All Rights Reserved</div>
                        <div>Made <span>by Temirlan Kadyr</span></div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="/front/app.js"></script>
</body>

</html>