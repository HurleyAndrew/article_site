<!DOCTYPE html>
<html>
<head>

    <title>Espy - Javascript and CSS Animations</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.0, maximum-scale=1.0, user-scalable=no"/>

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

    $query->execute();
}
?>
<script type="javascript">

    function refreshComment() {
        location.reload();

    }
    document.getElementsByClassName("btn_submit").addEventListener("click", refreshComment());

</script>

<nav>
    <div class="nav_icon">

    </div>
    Espy
</nav>
<main>

    <header>
        <div class="circle_div"></div>
        <div class="circle_div"></div>
        <div class="circle_div"></div>
        <div class="circle_div"></div>
        <div class="circle_div"></div>
        <div class="rect_name clear_fix">Andrew Hurley</div>
        <div class="rect_date clear_fix">April, 3 2017</div>
    </header>
    <div class="article_title">Making The Web Better<br>With<br>CSS and Javascript</div>
    <section>
        <div class="placeholder"></div>
    </section>
    <p class="para_format"><span>H</span>TML and CSS are two powerful markup languages used in every webpage.
        As we know HTML is used to create the initial
        structure, information, and layout of the page.
        Where things such as headings, bodies, paragraphs
        and the info that resides in them are placed.
        While CSS adds the decorative wrapping that we
        all see when we load in to a site. It takes the
        bland text and images and adds visual formatting
        to increase its appeal to users. As well, JavaScript,
        a popular programming language, can be used as well
        as CSS. JavaScript(JS) offers some features that CSS
        does not making it more appeadivng in certain situation.
    </p>
    <section>
        <div class="placeholder"></div>
    </section>
    <p class="para_format"> Lets get started with CSS. To get started you will need
        to have working knowledge of external CSS
        style sheets. In the style sheet target a
        div with a class of &quot;demo&quot;. Set its
        background-color: black; and a height:100px;
        and width:100px;. Now you should see your div has
        become a black box, now add a border-radius:100px;
        and now you have yourself a circle. Now here comes
        the important stuff. Below that class add a new element this
        will be where the animation happens. Type @keyframes
        demoAnimation{}. Now you have an animation parameter
        set called &quot;demoAnimations&quot;. Within those curly
        braces add from{} and to{} on their own divnes. Now
        we can add what we want to happen within those. If
        you search ondivne you will find tons of things to
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
            animation-name: demoAnimation;
            animation-duration: 2s;
            animation-iteration-count: infinite;
            animation-direction: alternate;</code>
    </div>
    <section>
        <div class="placeholder"></div>
    </section>


    <p class="para_format">With the CSS we are going “from” our starting black color and a position of 50px to the right
        then going from clack to red. In the class we set a margin so the animation is placed better. Then we look for
        the animation by entering its name, set how long we want it to last, how many times it should loop for, and
        finally we set the animation to alternate so it looks like it keeps going and wont jump around. Great! Now you
        can animate with CSS.
        CSS isn’t just limited to those few commands, there are vast libraries of commands and modifications you can
        use
        to work with. You can resize things, make shaped look 3D, and even modify their animation timeline. Check out
        some CSS examples around the internet to get a feel for what it has to offer.
    </p>
    <section>
        <div class="placeholder"></div>
    </section>
    <p class="para_format">Now that we understand the greatness of CSS animation and its capabilities; why would you
        ever want to learn a completely new language such as JavaScript to do the same? Well with JavaScript you are
        able to work more precisely and you can get access to hundreds of libraries to increase productivity and
        workflow. JavaScript gives you the ability to have variables, loops, methods, objects, and an endless list of
        other code commands that can effect your web elements. With JS you can make things functional So, for example,
        you can create events such as when something is clicked or scrolled to which triggers animations to start or
        end. One such thing that JS offers that CSS does not is manipulation during the animations. With JavaScript you
        can edit what is going on while an animation is going on which can be very helpful in certain creative
        situations.
        On a side note JavaScript for web is just a great thing to learn because it opens up lots of opportunities and
        interactive options for your users and even some organization features.
    </p>
    <section>
        <div class="placeholder"></div>
    </section>
    <p class="para_format">
        Now that we have learned come CSS animations and the differences between JavaScript and CSS which should you
        continue learning? JS is good for long-winded animations like logos or title sequences or large and complicated
        element animations that you want complete control over, while CSS is meant for single shot animations like UI
        element transitions with a lower count of objects and manipulability. If you are working on smaller, simpler
        sites requiring basic animations such as button or navigation animations, I would suggest sticking with CSS
        because it offers all the power you could need. But if you are working on something like animating your logo or
        the entire site then the organizational and variable aspects of JavaScript will be extremely useful. I suggest
        learning CSS first because it is easy to learn and widely used, while JavaScript is complicated to learn at
        first and will not offer too much for beginners.
    </p>
    <!-- about the author-->
    <div class="author_cont">
        <div class="author_pic"></div>
        <div class="auth_first"></div>
        <div class="auth_last"></div>
        <div class="author_desc"></div>
    </div>
    <!-- submit a comment-->
    <form action="index.php" method="POST">
        <div class="usernames">
            <input class="st1" type="text" name="first_name" placeholder="First Name" required="required">
            <input class="st2" type="text" name="last_name" placeholder="Last Name" required="required">
        </div>
        <div class="comment_section">
            <textarea class="st0" type="text" required="required" name="comment"></textarea>
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


</main>
</body>
</html>