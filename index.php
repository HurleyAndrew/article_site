<!DOCTYPE html>
<html lang="en">
<head>
    <title>Espy - Javascript and CSS Animations</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no">
</head>
<body>
<?php

$DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['comment']) && !empty($_POST['comment'])) {

    $comment = $_POST['comment'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $query = $DB->prepare("INSERT INTO commentsection (comment, first_name, last_name) VALUES (:comment, :first_name, :last_name)");
    $query->bindParam(':comment', $comment);
    $query->bindParam(':first_name', $first_name);
    $query->bindParam(':last_name', $last_name);

    header('Location: ' . $_SERVER['PHP_SELF'] . '?success');


    $query->execute();

    exit;

}
?>
<script>

    function refreshComment() {
        location.reload();

    }

    function unhidenav() {
        if (document.querySelectorAll(".nav_extend__cont")[0].style.display === 'none') {
            document.querySelectorAll(".nav_extend__cont")[0].style.display = 'block';
            /*console.log("now showing")*/
        }
        else {
            document.querySelectorAll(".nav_extend__cont")[0].style.display = 'none';
            /*console.log("now hiding")*/
        }


    }
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll(".btn_submit")[0].addEventListener("click", refreshComment);
        document.querySelectorAll(".nav_icon")[0].addEventListener("click", unhidenav);
        document.querySelectorAll(".nav_extend__cont")[0].style.display = 'none';
    });


</script>

<nav>
    <div class="nav_icon">

    </div>
    Espy
    <div class="nav_extend__cont">
        <div class="tab">Art & Life</div>
        <div class="tab">Politics</div>
        <div class="tab">Tech</div>
        <div class="tab">Money</div>
    </div>
</nav>
<div class="main">

    <header>
        <div class="circle_div">
            <a href="http://www.facebook.com" target="_blank">
                <div class="facebook"></div>
            </a>
        </div>
        <div class="circle_div">
            <a href="http://www.linkedin.com" target="_blank">
                <div class="linkedin"></div>
            </a>
        </div>
        <div class="circle_div">
            <a href="http://www.google.com" target="_blank">
                <div class="google"></div>
            </a>
        </div>
        <div class="circle_div">
            <a href="http://www.pinterest.com" target="_blank">
                <div class="pinterest"></div>
            </a>
        </div>
        <div class="circle_div">
            <a href="http://www.instagram.com" target="_blank">
                <div class="instagram"></div>
            </a>
        </div>
        <div class="rect_name clear_fix">Andrew Hurley</div>
        <div class="rect_date clear_fix">April, 3 2017</div>
    </header>
    <div class="article_title">Making The Web Better<br>With<br>CSS and Javascript</div>


    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
            <style type="text/css">

                .gt0 {
                    fill: none;
                    stroke: #000000;
                    stroke-width: 8;
                    stroke-miterlimit: 10;
                    animation: spin_main infinite 3s ease-in-out;
                    transform-origin: center;

                }

                .gt1 {
                    fill: #E097FF;
                    animation: scale_main infinite 3s ease-in-out;
                    transform-origin: center;

                }

                .gt2 {
                    fill: #A4C7FF;
                    animation: scale_main infinite 3s ease-in-out;
                    transform-origin: center;

                }

                @keyframes spin_main {
                    from {
                        transform: rotate(0deg);
                    }
                    to {
                        transform: rotate(360deg);
                    }
                }

                @keyframes scale_main {
                    0% {
                        transform: scale(0);
                    }
                    50% {
                        transform: scale(2);
                    }
                    100% {
                        transform: scale(0);
                    }
                }
            </style>
        <path class="gt0" d="M480.2,250c0-127.1-103-230.2-230.2-230.2"></path>
        <path class="gt0" d="M19.8,250c0,127.1,103,230.2,230.2,230.2"></path>

        <path class="gt0" d="M250,451.5c111.3,0,201.5-90.2,201.5-201.5"></path>
        <path class="gt0" d="M250,48.5C138.7,48.5,48.5,138.7,48.5,250"></path>

        <path class="gt0" d="M412.7,250c0-89.9-72.9-162.7-162.7-162.7"></path>
        <path class="gt0" d="M87.3,250c0,89.9,72.9,162.7,162.7,162.7"></path>

        <circle class="gt1" cx="250" cy="250" r="65.6"></circle>
        <circle class="gt2" cx="250" cy="250" r="29.7"></circle>
            </svg>


    <p class="para_format"><span class="first_letter">H</span>TML and CSS are two powerful markup languages used in
        every webpage.
        As we know HTML is used to create the initial
        structure, information, and layout of the page.
        Where things such as headings, bodies, paragraphs
        and the info that resides in them are placed.
        CSS adds the decorative wrapping that we
        all see when we load in to a site. It takes the
        bland text and images and adds visual formatting
        to increase its appeal to users. As well, JavaScript,
        a popular programming language, can be used as well
        as CSS. JavaScript(JS) offers some features that CSS
        does, not making it more appealing in certain situation.
    </p>

    <div class="animation_one">
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                <style type="text/css">
                    .st0 {
                        fill: #FDFFB3;
                    }

                    .st1 {
                        fill: #A9DCFF;
                        animation: spin_main infinite 4s linear;
                        transform-origin: 250px;
                    }

                    .st2 {
                        fill: #FF7B7B;
                        animation: spin_main infinite 3s linear;
                        transform-origin: 250px;
                    }

                    @keyframes spin_main {
                        from {
                            transform: rotate(0deg);
                        }
                        to {
                            transform: rotate(360deg);
                        }
                    }

                </style>
            <circle class="st0" cx="250" cy="250" r="22"></circle>
            <circle class="st1" cx="250.2" cy="159.2" r="22"></circle>
            <circle class="st1" cx="249.6" cy="340.8" r="22"></circle>
            <circle class="st1" cx="159.2" cy="249.7" r="22"></circle>
            <circle class="st1" cx="340.7" cy="250.3" r="22"></circle>
            <circle class="st2" cx="250.2" cy="103.2" r="15.6"></circle>
            <ellipse transform="matrix(0.866 -0.5 0.5 0.866 -37.7471 104.7904)" class="st2" cx="176.7" cy="122.8"
                     rx="15.6" ry="15.6"></ellipse>
            <ellipse transform="matrix(0.5 -0.866 0.866 0.5 -91.5567 194.5829)" class="st2" cx="122.7" cy="176.6"
                     rx="15.6" ry="15.6"></ellipse>
            <circle class="st2" cx="102.9" cy="250.1" r="15.6"></circle>
            <ellipse transform="matrix(0.866 -0.5 0.5 0.866 -145.4294 104.6074)" class="st2" cx="122.5" cy="323.7"
                     rx="15.6" ry="15.6"></ellipse>
            <ellipse transform="matrix(0.5 -0.866 0.866 0.5 -238.9035 341.4297)" class="st2" cx="176.2" cy="377.6"
                     rx="15.6" ry="15.6"></ellipse>
            <circle class="st2" cx="249.8" cy="397.4" r="15.6"></circle>
            <ellipse transform="matrix(0.866 -0.5 0.5 0.866 -145.6124 212.2898)" class="st2" cx="323.3" cy="377.9"
                     rx="15.6" ry="15.6"></ellipse>
            <ellipse transform="matrix(0.5 -0.866 0.866 0.5 -92.0567 488.7766)" class="st2" cx="377.3" cy="324.1"
                     rx="15.6" ry="15.6"></ellipse>
            <circle class="st2" cx="397.1" cy="250.6" r="15.6"></circle>
            <ellipse transform="matrix(0.866 -0.5 0.5 0.866 -37.9301 212.4728)" class="st2" cx="377.5" cy="177"
                     rx="15.6" ry="15.6"></ellipse>
            <ellipse transform="matrix(0.5 -0.866 0.866 0.5 55.2901 341.9297)" class="st2" cx="323.8" cy="123.1"
                     rx="15.6" ry="15.6"></ellipse>
            </svg>

    </div>

    <p class="para_format"> Lets get started with CSS. To get started you will need
        to have working knowledge of external CSS
        style sheets and HTML. In the style sheet target a
        div you created in your HTML with a class of &quot;demo&quot;. Set its
        background-color: black; and a height:100px;
        and width:100px;. Now you should see your div has
        become a black box, now add a border-radius:100px;
        and now you have yourself a circle. Now here comes
        the important stuff. Below that class add a new element, this
        will be where the animation happens. Type @keyframes
        demoAnimations{}. Now you have an animation parameter
        set called &quot;demoAnimations&quot;. Within those curly
        braces add from{;} and to{;} on their own lines. Now
        we can add what we want to happen within those. If
        you search online you will find tons of things to
        put in there but for now let&#39;s stick with changing
        colors and motion.
        Add the following into the code.
    </p>
    <div class="code"><code>from{ background-color:black; transform: translateX(50px);}
            to{background-color:red; transform: translateX(150px);}
        </code></div>
    <p class="para_format">And in the class add this
        code and I will explain.</p>
    <div class="code">
        <code>
            margin-left: 200px;
            animation-name: demoAnimations;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-direction: alternate;</code>
    </div>

    <div class="animation_three">

    </div>


    <p class="para_format">With the CSS we are going “from” our starting black color and a position of 50px to the right
        then going from black to red. In the class we set a margin so the animation is placed better. Then we look for
        the animation by entering its name, set how long we want it to last, how many times it should loop for, and
        finally we set the animation to alternate so it looks like it keeps going and wont jump around. Great! Now you
        can animate with CSS.
        CSS isn&#39;t just limited to those few commands, there are vast libraries of commands and modifications you can
        use
        to work with. You can resize things, make shapes look 3D, and even modify their animation timeline. Check out
        some CSS examples around the internet to get a feel for what it has to offer.
    </p>

    <div class="animation_four">
        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <style type="text/css">
                                .zt0 {
                                    fill: #AFFF7B;
                                }

                                .zt1 {
                                    fill: #7DFFF2;
                                }

                                .zt2 {
                                    fill: #FFFF7D;
                                }

                                .zt3 {
                                    fill: #E67DFF;
                                }

                                @keyframes square_expand {
                                    from {
                                        transform: scale(1);
                                        transform: rotate(0deg);
                                    }
                                    to {
                                        transform: scale(1.2);
                                        transform: rotate(360deg);
                                    }
                                }

                                .group_one {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_two {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_three {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_four {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_five {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_six {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_seven {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }

                                .group_eight {
                                    animation: square_expand 3s infinite linear;
                                    transform-origin: center;
                                }


                            </style>

            <g class="group_one">
                <rect x="49.8" y="22.2" class="zt0" width="67.5" height="67.5"/>
            </g>
            <g class="group_two">
                <rect x="49.8" y="119.2" class="zt0" width="67.5" height="67.5"/>
                <rect x="160.8" y="22.2" class="zt1" width="67.5" height="67.5"/>
            </g>
            <g class="group_three">
                <rect x="49.8" y="216.2" class="zt0" width="67.5" height="67.5"/>
                <rect x="160.8" y="119.2" class="zt1" width="67.5" height="67.5"/>
                <rect x="271.8" y="22.2" class="zt2" width="67.5" height="67.5"/>
            </g>
            <g class="group_four">
                <rect x="49.8" y="313.2" class="zt0" width="67.5" height="67.5"/>
                <rect x="160.8" y="216.2" class="zt1" width="67.5" height="67.5"/>
                <rect x="271.8" y="119.2" class="zt2" width="67.5" height="67.5"/>
                <rect x="382.8" y="22.2" class="zt3" width="67.5" height="67.5"/>
            </g>
            <g class="group_five">
                <rect x="49.8" y="410.2" class="zt0" width="67.5" height="67.5"/>
                <rect x="160.8" y="313.2" class="zt1" width="67.5" height="67.5"/>
                <rect x="271.8" y="216.2" class="zt2" width="67.5" height="67.5"/>
                <rect x="382.8" y="119.2" class="zt3" width="67.5" height="67.5"/>
            </g>
            <g class="group_six">
                <rect x="160.8" y="410.2" class="zt1" width="67.5" height="67.5"/>
                <rect x="271.8" y="313.2" class="zt2" width="67.5" height="67.5"/>
                <rect x="382.8" y="216.2" class="zt3" width="67.5" height="67.5"/>
            </g>
            <g class="group_seven">
                <rect x="271.8" y="410.2" class="zt2" width="67.5" height="67.5"/>
                <rect x="382.8" y="313.2" class="zt3" width="67.5" height="67.5"/>
            </g>
            <g class="group_eight">
                <rect x="382.8" y="410.2" class="zt3" width="67.5" height="67.5"/>
            </g>
            </svg>
    </div>

    <p class="para_format">Now that we understand the greatness of CSS animation and its capabilities; why would you
        ever want to learn a completely new language such as JavaScript to do the same? Well with JavaScript you are
        able to work more precisely and you can get access to hundreds of libraries to increase productivity and
        workflow. JavaScript gives you the ability to have variables, loops, methods, objects, and an endless list of
        other code commands that can effect your web elements. With JS you can make things functional. So, for example,
        you can create events such as when something is clicked or scrolled to which triggers animations to start or
        end. One such thing that JS offers that CSS does not is manipulation during the animations. With JavaScript you
        can edit what is going on while an animation is going on which can be very helpful in certain creative
        situations.
        On a side note JavaScript for web is just a great thing to learn because it opens up lots of opportunities and
        interactive options for your users and even some organization features.
    </p>
    <p class="quote"><span class="quotes">&ldquo;</span></p>
    <p class="quote quote_arrange">It's a core skill for web designers and developers and a feature users have come to
        expect from
        modern websites.</p>
    <p class="quote"><span class="quotes">&rdquo;</span></p><br><span class="quote_by">-Val Head</span>

    <div class="animation_five">
        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
                            <style type="text/css">
                                .yt0 {

                                    fill: #FBFD7B;
                                    animation: color_shift 1s linear infinite alternate;
                                }

                                .yt1 {
                                    fill: #AFFF7B;
                                }

                                @keyframes color_shift {
                                    from {
                                        fill: #FBFD7B;
                                    }
                                    to {
                                        fill: #AFFF7B;
                                    }
                                }
                            </style>
            <polygon class="yt1" points="312.4,142 187.6,142 125.3,250 187.6,358 312.4,358 374.7,250 "></polygon>
            <g>
                <polygon class="yt0" points="250,16 187.6,142 312.4,142 	"></polygon>
                <polygon class="yt0" points="250,484 312.4,358 187.6,358 	"></polygon>
                <polygon class="yt0" points="452,131.9 311.8,141.7 374.7,249.3 	"></polygon>
                <polygon class="yt0" points="48,368.1 188.2,358.3 125.3,250.7 	"></polygon>
                <polygon class="yt0" points="47.6,132.6 125.3,249.8 187.9,141.9 	"></polygon>
                <polygon class="yt0" points="452.4,367.4 374.7,250.2 312.1,358.1 	"></polygon>
            </g>
            </svg>
    </div>

    <p class="para_format">
        Now that we have learned some CSS animations and the differences between JavaScript and CSS which should you
        continue learning? JS is good for long-winded animations like logos or title sequences or large and complicated
        element animations that you want complete control over, while CSS is meant for single shot animations like UI
        element transitions with a lower count of objects and flexibility. If you are working on smaller, simpler
        sites requiring basic animations such as button or navigation animations, I would suggest sticking with CSS
        because it offers all the power you could need. But if you are working on something like animating your logo or
        the entire site then the organizational and variable aspects of JavaScript will be extremely useful. I suggest
        learning CSS first because it is easy to learn and widely used, while JavaScript is complicated to learn at
        first and will not offer too much for beginners.
    </p>
    <!-- about the author-->
    <div class="author_cont">
        <div class="author_pic"></div>
        <div class="author_desc">
            <div class="auth_first">Andrew</div>
            <div class="auth_last">Hurley</div>
            <div class="author_text">Hi, I am the author of this article. I have some amount of experience with this
                topic, probably not enough to be called good but hey I'll take it. Animation is cool I suggest getting
                into it more.
            </div>
        </div>


    </div>
    <!-- submit a comment-->
    <form action="index.php" method="POST">
        <div class="usernames">
            <input class="at1" type="text" name="first_name" placeholder="First Name" required="required">
            <input class="at2" type="text" name="last_name" placeholder="Last Name" required="required">
        </div>
        <div class="comment_section">
            <textarea class="at0" type="text" required="required" name="comment"></textarea>
        </div>
        <div class="submit_cont">
            <button type="submit" class="btn_submit">Submit</button>

        </div>
    </form>

    <!-- comment html arrangement-->
    <?php
    $DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $DB->query('select * from commentsection');

    while ($row = $query->fetch()) {
        echo "<div class='commenter_cont'>";
        echo "<div class='commenter_firstname'>" . $row['first_name'] . "</div> ";
        echo "<div class='commenter_lastname'>" . $row['last_name'] . "</div> ";
        echo "<div class='commenter_comment'>" . $row['comment'] . "</div> ";
        echo " </div>";
    }
    ?>

    <section class="next_article__cont">
        <div class="next_article">

        </div>
        <div class="next_article">

        </div>
        <div class="next_article">

        </div>
    </section>
</div>
</body>
</html>