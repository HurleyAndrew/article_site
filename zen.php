<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <title>Espy - Zen Garden</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <meta property="og:title" content="Espy: News Network"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="http://amh5267.cias.rit.edu/news_article_site/"/>
    <meta property="og:image" content=""/>
    <meta property="og:description"
          content="This is a pretty rad news page containing a couple of articles about animation and other topics."/>
</head>
<body>
<?php

$DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_POST['comment']) && !empty($_POST['comment'])) {

    $comment = $_POST['comment'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    $query = $DB->prepare("INSERT INTO commentsection_zen (comment, first_name, last_name) VALUES (:comment, :first_name, :last_name)");
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

    function social_loadin() {
        var DELAY = 70;
        var items = document.querySelectorAll(".circle_div");
        items.forEach(function (item, index) {
            setTimeout(function () {
                item.className = item.className + " circle_div_anime";
                console.log("set number " + index);
            }, DELAY * index)
        });
    }
    document.addEventListener('DOMContentLoaded', function () {
        social_loadin();
        document.querySelectorAll(".btn_submit")[0].addEventListener("click", refreshComment);
        document.querySelectorAll(".nav_icon")[0].addEventListener("click", unhidenav);


        document.querySelectorAll(".nav_extend__cont")[0].style.display = 'none';
    });


</script>

<nav>
    <div class="nav_icon">

    </div>
    <div class="expand_nav">
        <a href="index.html">
            <div class="expand_tab">Home</div>
        </a>
        <a href="cssjs.php">
            <div class="expand_tab">CSS & JS</div>
        </a>
        <a href="zen.php">
            <div class="expand_tab">Zen Garden</div>
        </a>
        <div class="expand_tab">Other</div>
    </div>
    Espy

    <div class="nav_extend__cont">

        <a href="index.html">
            <div class="tab">Home</div>
        </a>
        <a href="cssjs.php">
            <div class="tab">CSS & JS</div>
        </a>
        <a href="zen.php">
            <div class="tab">Zen Garden</div>
        </a>
        <div class="tab">Other</div>
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
        <div class="rect_name clear_fix">Zen Garden</div>
        <div class="rect_date clear_fix">April, 5 2017</div>
    </header>
    <div class="article_title">CSS Zen Garden</div>


    <div class="sand_one"></div>

    <p class="para_format"><span class="first_letter_new">A</span>demonstration of what can be accomplished through
        CSS-based design. Select any style sheet from the list to load it into this page.
    </p>

    <div class="sand_two"></div>
    <p class="zen_titles">THE ROAD TO ENLIGHTENMENT</p/>
    <p class="para_format">
        Littering a dark and dreary road lay the past relics of
        browser-specific tags, incompatible
        DOMs, broken CSS support, and abandoned browsers.
        <br>
        <br>
        We must clear the mind of the past. Web enlightenment has been achieved thanks to the tireless efforts of folk
        like the W3C, WASP, and the major browser creators.
        <br>
        <br>
        The CSS Zen Garden invites you to relax and meditate on the important lessons of the masters. Begin to see with
        clarity. Learn to use the time-honored techniques in new and invigorating fashion. Become one with the web.
    </p>

    <div class="sand_three"></div>

    <p class="zen_titles">SO WHATS THIS ABOUT?</p>
    <p class="para_format">
        There is a continuing need to show the power of CSS. The
        Zen Garden aims to excite, inspire,
        and encourage participation. To begin, view some of the existing designs in the list. Clicking on any one will
        load the style sheet into this very page. The HTML remains the same, the only thing that has changed is the
        external CSS file. Yes, really.
        <br>
        <br>
        CSS allows complete and total control over the style of a hypertext document. The only way this can be
        illustrated in a way that gets people excited is by demonstrating what it can truly be, once the reins are
        placed in the hands of those able to create beauty from structure. Designers and coders alike have contributed
        to the beauty of the web; we can always push it further.
    </p>

    <div class="sand_four"></div>
    <p class="zen_titles">PARTICIPATION</p>
    <p class="para_format">
        Strong visual design has always been our focus. You are
        modifying this page, so strong CSS
        skills are necessary too, but the example files are commented well enough that even CSS novices can use them as
        starting points. Please see the CSS Resource Guide for advanced tutorials and tips on working with CSS.
        <br>
        <br>
        You may modify the style sheet in any way you wish, but not the HTML. This may seem daunting at first if you’ve
        never worked this way before, but follow the listed links to learn more, and use the sample files as a guide.
        <br>
        <br>
        Download the sample HTML and CSS to work on a copy locally. Once you have completed your masterpiece (and
        please, don’t submit half-finished work) upload your CSS file to a web server under your control. Send us a link
        to an archive of that file and all associated assets, and if we choose to use it we will download it and place
        it on our server.
    </p>
    <p class="quote"><span class="quotes">&ldquo;</span></p>
    <p class="quote quote_arrange">Why participate? For recognition, inspiration, and a resource we can all refer to
        showing people how amazing CSS really can be. This site serves as equal parts inspiration for those working on
        the web today, learning tool for those who will be tomorrow, and gallery of future techniques we can all look
        forward to.</p>
    <p class="quote"><span class="quotes">&rdquo;</span></p><br><span class="quote_by">-Zen Garden</span>

    <div class="sand_five"></div>
    <p class="zen_titles">REQUIREMENTS</p>
    <p class="para_format">

        Where possible, we would like to see mostly CSS 1 & 2 usage. CSS 3 & 4 should be limited to widely-supported
        elements only, or strong fallbacks should be provided. The CSS Zen Garden is about functional, practical CSS and
        not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is
        that your CSS validates.
        <br>
        <br>
        Luckily, designing this way shows how well various browsers have implemented CSS by now. When sticking to the
        guidelines you should see fairly consistent results across most modern browsers. Due to the sheer number of user
        agents on the web these days — especially when you factor in mobile — pixel-perfect layouts may not be possible
        across every platform. That’s okay, but do test in as many as you can. Your design should work in at least IE9+
        and the latest Chrome, Firefox, iOS and Android browsers (run by over 90% of the population).
        <br>
        <br>
        We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a
        minimum, and try to incorporate unique and interesting visual themes to your work. We’re well past the point of
        needing another garden-related design.
        <br>
        <br>
        This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited
        exceptions, see submission guidelines), but we ask you release your CSS under a Creative Commons license
        identical to the one on this site so that others may learn from your work.
    </p>
    <div class="designer-navigation">
        <ul>
            <li>
                <a href="http://www.csszengarden.com//221/" class="design-name">Mid Century Modern</a> by <a href="http://andrewlohman.com/"
                                                                                 class="designer-name">Andrew Lohman</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//220/" class="design-name">Garments</a> by <a href="http://danielmall.com/"
                                                                       class="designer-name">Dan Mall</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//219/" class="design-name">Steel</a> by <a href="http://steffen-knoeller.de"
                                                                    class="designer-name">Steffen Knoeller</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//218/" class="design-name">Apothecary</a> by <a href="http://trentwalton.com"
                                                                         class="designer-name">Trent Walton</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//217/" class="design-name">Screen Filler</a> by <a href="http://elliotjaystocks.com/"
                                                                            class="designer-name">Elliot Jay Stocks</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//216/" class="design-name">Fountain Kiss</a> by <a href="http://jeremycarlson.com"
                                                                            class="designer-name">Jeremy Carlson</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//215/" class="design-name">A Robot Named Jimmy</a> by <a href="http://meltmedia.com/"
                                                                                  class="designer-name">meltmedia</a>
            </li>
            <li>
                <a href="http://www.csszengarden.com//214/" class="design-name">Verde Moderna</a> by <a href="http://www.mezzoblue.com/"
                                                                            class="designer-name">Dave Shea</a>
            </li>
        </ul>
    </div>
    <!-- about the author-->
    <div class="author_cont">
        <div class="author_pic_new"></div>
        <div class="author_desc">
            <div class="auth_first">Zen</div>
            <div class="auth_last">Garden</div>
            <div class="author_text">Hi, I am the author of this article. I love and so much. Too much actually, it may
                be a problem. But that is ok we all love something.
            </div>
        </div>


    </div>
    <!-- submit a comment-->
    <form action="zen.php" method="POST">
        <div class="usernames">
            <input class="at1" type="text" name="first_name" placeholder="First Name" required="required">
            <input class="at2" type="text" name="last_name" placeholder="Last Name" required="required">
        </div>
        <div class="comment_section">
            <textarea class="at0" required="required" name="comment"></textarea>
        </div>
        <div class="submit_cont">
            <button type="submit" class="btn_submit">Submit</button>

        </div>
    </form>

    <!-- comment html arrangement-->
    <?php
    $DB = new PDO("mysql:host=cias.rit.edu;dbname=amh5267", 'amh5267', 'IPVtwxhBaI');
    $DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $DB->query('select * from commentsection_zen');

    while ($row = $query->fetch()) {
        echo "<div class='commenter_cont'>";
        echo "<div class='commenter_firstname'>" . $row['first_name'] . "</div> ";
        echo "<div class='commenter_lastname'>" . $row['last_name'] . "</div> ";
        echo "<div class='commenter_comment'>" . $row['comment'] . "</div> ";
        echo " </div>";
    }
    ?>


</div>
</body>
</html>