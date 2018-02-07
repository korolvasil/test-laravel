<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IndexPage</title>
    <link rel="stylesheet" href="public/css/app.css" type="text/css" />
    <link rel="stylesheet" href="css/fonts/awesome/css/fontawesome-all.min.css" type="text/css" />
</head>
<body>
<div class="body-wrapper">
    <header class="main-header" id="active-header">
        <div class="header-wrapper">
            <div class="top-navbar">
                <p>NAEPS</p>
            </div>
            <aside class="side-navbar" id="active-aside">
                    <span id="aside-toggler" class="icon-bars">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                <h2>Menu</h2>
                <p>1 Side NavBar</p>
                <p>2 Side NavBar</p>
                <p>2 Side NavBar</p>
                <p>3 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>4 Side NavBar</p>
                <p>5 Last Side NavBar</p>
            </aside>
        </div>
        <div class="overlay-shadow"></div>
    </header>
    <main class="main-content">
        <div class="main-wrapper">

            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <article>
                <h1>Article Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus eveniet labore dolores, consectetur commodi minus facilis illum consequuntur temporibus. Doloribus blanditiis repellendus, ipsa impedit fugiat quam ad. Accusamus, eius, laudantium!</p>

            </article>
            <article>
                <h1>Article Title</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat, inventore! Aut nemo nulla laudantium dicta in commodi possimus repellat maxime incidunt fuga corporis quasi, pariatur natus, inventore minima omnis facere facilis. Illum quia, laudantium voluptatum dolorem sapiente accusantium unde impedit, incidunt quod quis, vero modi ex similique enim dolor dolore earum. Mollitia repellat nulla tenetur magnam iure quia, maxime porro laborum ipsa. Sit atque error vel porro aut laudantium id inventore provident rerum voluptatem minus ea impedit, animi earum eos dolores, sunt natus maxime dolorem reprehenderit? Maiores aperiam quas corporis dicta magnam sunt quo enim, asperiores atque reiciendis sapiente quam commodi officiis, eaque similique necessitatibus, blanditiis facilis recusandae saepe veniam.</p>
            </article>
            <!--<article>-->
            <!--    <h1>Article Title</h1>-->
            <!--    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati dolorum quisquam culpa accusamus iste ipsa, amet provident quia soluta ullam deleniti autem exercitationem incidunt alias quae neque praesentium magnam facere unde quis assumenda reiciendis eos. Architecto ea explicabo, maxime est atque laborum officiis sed obcaecati excepturi, non odio rerum pariatur tempora dignissimos blanditiis ullam odit, iure nam. Aut officiis inventore, pariatur nam, quas facere nostrum. Eveniet cupiditate aliquam provident illo cumque ipsa ipsam quaerat minima autem mollitia, eligendi distinctio odio possimus suscipit temporibus quas sequi, dolor rerum eaque doloribus nemo libero. Veniam repellendus laborum quod reiciendis tempora corporis amet necessitatibus, dolores animi nam beatae eligendi at possimus dolor provident velit, delectus iure mollitia maxime impedit ipsum, sapiente quia. Suscipit, sint perspiciatis iusto fuga excepturi sit quam recusandae dolores dolore tempora eaque, consequuntur facilis. Quis iusto natus soluta voluptatum aut tempora debitis fuga dignissimos ipsum repellendus. Dignissimos delectus sunt obcaecati cupiditate minus quidem similique. A repellat quidem nulla praesentium, delectus id sed harum aperiam saepe iste magnam ipsum hic ex reprehenderit libero ipsa, labore minus corporis ducimus quas porro! Corporis, minima.</p>-->
            <!--</article>-->
        </div>
    </main>
    <footer class="main-footer">
        <p>www.artday.com.ua</p>
    </footer>
</div>

<!--
    <script type="text/javascript" src="js/app.js"></script>
-->

<script>
    (function(){
        'use strict';
        var h = document.getElementById('active-header'); // header
        var hAClass = '--hide-head'; // header activate class
        //var hs = true; // status of header
        var shadow = h.getElementsByClassName('overlay-shadow')[0];// shadow
        var a = document.getElementById('active-aside'); // aside
        var aAClass = '--show-bar'; // aside activated class
        var as = false; // status of aside
        var t = document.getElementById('aside-toggler'); // aside-toggler
        var Y = window.pageYOffset; // current Y position
        t.onclick = function(){
            a.classList.toggle(aAClass);
            if(!as){
                shadow.style.width = "100%";
                document.body.classList.add('--noscroll');
            } else {
                shadow.style.width = "0px";
                document.body.classList.remove('--noscroll');
            }
            as = !as;
        };

        window.onscroll = function() {
            if(!as){
                if(window.pageYOffset-Y>0){h.classList.add(hAClass);}
                else {h.classList.remove(hAClass);}
                Y = window.pageYOffset;
            }
        };
    })();
</script>

</body>
</html>
