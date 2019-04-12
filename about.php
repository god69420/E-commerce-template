<?php
	session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/uikit.css">
	<script src="js/uikit.js"></script>
    <script src="js/uikit-icons.js"></script>
</head>
<body>
	       <!--Normal navbar format for laptops and larger screens -->
<nav class="uk-navbar-container uk-margin uk-margin-remove-bottom" id="nav" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="index.html"><img src="images/logo.png"  width="150px" height="50px"></a>
    </div>
    <div class="uk-navbar-center">
        <div class="uk-navbar-item uk-width-large uk-visible@m">
            <form class="uk-search uk-search-navbar">
                <input type="submit" name="submit" uk-search-icon>
                <input class="uk-search-input" type="search" placeholder="Search...">
            </form>
        </div>
    </div>
    <!-- small version-->
    <div class="uk-hidden@m uk-width-expand">
        <div class="nav-overlay uk-navbar-right">
            <a class="uk-navbar-toggle uk-navbar-center" uk-icon="icon: search; ratio: 2" uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>
        <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
            <div class="uk-navbar-item uk-width-expand">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
            <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
        </div>
    </div>
</nav>
<!-- normal navbar for big screens-->
<nav class="uk-navbar-container uk-margin-remove-top uk-height-xsmall uk-visible@m" uk-navbar>    
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Categories</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-center">
            <ul class="uk-navbar-nav">
                <li><a href="about.html">About</a></li>
                <li><a href="#">Contact</a></li>
                <li>
                    <a href="#">Stores</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                            <li><a href="#">Lorem</a></li>
                        </ul>
                    </div>
                </li>
                    <li><a href="#"></a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
        <ul class="uk-nav uk-navbar-nav">
            <li><a href="register.html" uk-icon="icon: user">Register</a></li>
            <li><a href="login.html" uk-icon="icon: sign-in">Login</a></li>';
            <li>
                <a href="#" uk-icon="icon: world">language</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">Lore</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!---->
<!-- small navbar -->
<ul uk-accordion class="uk-hidden@m">
    <li>
        <a class="uk-accordion-title uk-width-small uk-align-center" href="#"><span uk-icon="icon: menu; ratio: 2"></span></a>
        <div class="uk-accordion-content">
            <ul class="uk-list uk-text-center">
                <li><a href="categories.html"><span uk-icon="icon: list"></span> Categories</a></li>
                <hr class="uk-divider-icon">
                <li><a href="about.html"><span uk-icon="icon: info"></span> About</a></li>
                <hr class="uk-divider-icon">
                <li><a href="#"><span uk-icon="icon: receiver"></span> Contact</a></li>
                <hr class="uk-divider-icon">
                <li><a href="#"><span uk-icon="icon: tag"></span> Stores</a></li>
                <hr class="uk-divider-icon">
                <li><a href="#"><span uk-icon="icon: user"></span> Register</a></li>
                <hr class="uk-divider-icon">
                <li><a href="login.html"><span uk-icon="sign-in"></span> Login</a></li>
                <hr class="uk-divider-icon">
            </ul>
        </div>
    </li>
</ul>
<div class="uk-container uk-width-expand uk-child-width-1-3 uk-grid uk-margin-remove-bottom">
	<div class="uk-section-small uk-height-expand uk-align-left uk-background-secondary uk-light">
		<div uk-sticky="bottom: true">
			<ul class="uk-margin-top">
				<li><a href="#who">Who are we?</a></li>
				<hr>
				<li><a href="#how">How do we work?</a></li>
				<hr>
				<li><a href="#pay">Payment Methods</a></li>
				<hr>
				<li><a href="#where">Where are we?</a></li>
				<hr>
				<li><a href="">Mollit proident cillum ut reprehenderit velit pariatur sed in velit in dolore ullamco voluptate.</a></li>
				<hr>
			</ul>
		</div>
	</div>
	<div class="uk-container uk-text-justify uk-width-expand uk-margin-left">
		<h1 class="uk-heading-primary uk-text-bold">About Us</h1>
		<br>
		<p>Lorem ipsum pariatur elit in deserunt elit pariatur et aute id nostrud sit laborum non mollit ut laboris eu. Veniam mollit velit labore in in magna et consectetur incididunt reprehenderit dolore cillum in velit occaecat cupidatat non. Sint reprehenderit occaecat proident aliqua aliquip pariatur amet amet do dolore exercitation velit sunt. Anim in nulla ex culpa aute tempor proident do ut esse officia ut. Lorem ipsum nisi esse irure aliquip eiusmod eu anim exercitation laboris aute voluptate commodo laborum nostrud in in voluptate sed officia. Nostrud ut tempor cillum ut velit laboris aliquip non commodo tempor nulla ut. Aliqua sit mollit culpa mollit nulla aliquip irure in excepteur aute nisi consectetur sed est. Exercitation consectetur commodo aliqua culpa in mollit consectetur in est irure deserunt est sit sit pariatur occaecat. Qui fugiat esse minim est fugiat ex commodo deserunt occaecat cupidatat incididunt est sint fugiat. Nostrud ea dolor deserunt laboris aliqua exercitation ullamco mollit cupidatat eu ex ut ex consectetur ut in est. Et voluptate ut do exercitation voluptate minim velit aliquip adipisicing aliquip proident nulla exercitation et id in.</p>
		<h2 id="who">Who are we?</h2>
		<p>Aliqua adipisicing ullamco amet exercitation sint fugiat ut sint sit tempor. Qui enim aliqua consequat anim occaecat cillum ea officia sint minim magna aliqua. Elit eu officia dolor cillum minim incididunt culpa tempor ad proident voluptate ut. Ullamco laboris dolore cillum sint minim non incididunt in minim duis aute. Lorem ipsum eiusmod irure elit adipisicing voluptate pariatur anim ut proident eiusmod minim. Duis nisi nostrud sint sed nostrud ex voluptate deserunt eiusmod ex amet cupidatat laboris amet officia sed cupidatat adipisicing. Consequat ut in tempor laboris ut dolore fugiat in excepteur irure reprehenderit dolor consequat commodo excepteur ut. Tempor reprehenderit quis laborum minim nostrud aliqua velit in pariatur tempor ad aute dolor reprehenderit cupidatat. Nisi amet veniam minim ullamco mollit magna ut non nisi ad ut. Lorem ipsum non dolor incididunt nulla labore veniam in non dolor ut veniam. Qui ut amet velit adipisicing commodo in ea ullamco minim dolor.</p>
		<br>
		<h2 id="how">How do we work?</h2>
		<p>Nulla minim eu non ad irure magna incididunt do veniam fugiat ut dolor minim velit culpa elit ea. Elit sed veniam nostrud dolore culpa qui excepteur sint ex ut laboris in ullamco aute. Dolore est excepteur dolor in eiusmod excepteur veniam ea. Cupidatat quis minim tempor enim pariatur culpa exercitation commodo. Dolore est minim tempor amet ad enim fugiat in pariatur cillum ut aliqua occaecat consectetur. Est culpa consectetur amet dolore cupidatat quis dolor fugiat eu dolor dolor laborum ut sit consectetur dolor. Eu esse elit ut nisi dolor id esse sint reprehenderit excepteur. In incididunt incididunt aliqua esse ea sed ex sint enim quis. Et consequat cupidatat magna labore in duis proident reprehenderit excepteur ullamco ad ad aliquip cupidatat reprehenderit. Commodo excepteur aute in pariatur ad excepteur voluptate minim nulla dolor cillum labore. Sit magna sed tempor in cillum nulla nulla exercitation in labore reprehenderit occaecat incididunt dolore in consectetur ut irure. Qui deserunt incididunt minim ut ullamco proident qui esse consectetur anim et ut ullamco duis nostrud labore. Culpa dolore laborum ullamco veniam veniam in velit aute cupidatat officia. Lorem ipsum magna laboris nisi magna eiusmod cupidatat sed ut magna nulla mollit. Reprehenderit labore minim eu nostrud commodo exercitation minim dolor mollit dolore sit aute ad dolore fugiat. Cupidatat esse ea id ut sed enim irure in consectetur. Amet amet exercitation tempor qui consequat ut anim sed. Proident aliquip sed in culpa aliquip excepteur aliquip irure aliqua consequat.</p>
		<br>
		<h2 id="pay">Payment Methods</h2>
		<p>Fugiat occaecat sunt nisi sunt fugiat do in laboris. Minim ut deserunt duis duis do eiusmod deserunt fugiat in in anim in sit laboris ex culpa. In ut excepteur dolore commodo nisi labore excepteur magna quis exercitation eu amet id ut esse. Lorem ipsum duis aute nostrud non nisi commodo occaecat labore cillum qui nisi. Qui cupidatat dolor occaecat mollit esse incididunt exercitation deserunt do officia velit proident. Ea fugiat elit consequat in cupidatat commodo enim voluptate sed in laboris esse in sint commodo ut quis non. Duis sint commodo mollit incididunt officia eiusmod sed incididunt. In culpa officia quis adipisicing velit labore officia proident. Consectetur consequat eiusmod quis dolor dolor enim dolore dolor deserunt culpa qui. Irure ut reprehenderit dolore minim sit aliquip veniam anim mollit mollit amet pariatur exercitation eiusmod sit id reprehenderit. Esse dolore veniam in aliquip tempor amet elit exercitation. Lorem ipsum do voluptate velit mollit dolor esse ut tempor pariatur incididunt fugiat tempor sint nulla in in in nulla adipisicing. Ut commodo enim irure do sit cupidatat veniam cillum magna aliqua. Commodo veniam nulla nisi velit in in adipisicing id. Deserunt sint sit incididunt culpa proident ea pariatur ut consectetur amet. Deserunt sit do pariatur et nisi duis do id magna laboris nisi nostrud anim voluptate est excepteur.</p>
		<br>
		<h2 id="where">Where are we?</h2>
		<p>Id non amet nulla eu ullamco veniam nulla aliquip consequat occaecat ex sunt. Velit sed occaecat ea dolor esse duis proident in fugiat irure duis do exercitation sunt fugiat aliqua. Lorem ipsum dolore aute velit mollit nostrud do ullamco dolor proident enim. Labore et occaecat pariatur cupidatat qui nisi sint ex eiusmod dolor sed. Lorem ipsum eiusmod aliquip culpa in ex voluptate adipisicing in incididunt velit consequat sunt adipisicing dolore deserunt. Dolor occaecat occaecat sed labore in proident laboris labore ex consequat aliquip nisi laboris. Reprehenderit consectetur esse tempor irure dolor cupidatat ea ullamco eu nisi mollit elit mollit duis culpa. Eu eu esse exercitation sint id occaecat dolor cupidatat aliquip quis labore eiusmod. Aliqua culpa velit amet dolore reprehenderit sunt eu adipisicing aliquip. Sunt exercitation laboris proident ad officia anim quis consequat eiusmod. Lorem ipsum minim adipisicing nisi excepteur in labore in excepteur pariatur laborum in occaecat ex et dolore. Deserunt ea cillum quis ut laboris eu in incididunt ut. Culpa tempor et proident proident excepteur labore aute nostrud in reprehenderit velit ut non in id cillum magna dolore. Incididunt dolor fugiat velit consectetur qui aliquip labore labore ad ea dolore dolore officia aute nulla exercitation tempor velit. Ad ut enim culpa reprehenderit eu do mollit nulla ea. Id ea sed adipisicing ut voluptate laboris non cillum ut commodo adipisicing eu anim adipisicing culpa aute sed. Lorem ipsum eiusmod pariatur ut ut ut reprehenderit tempor dolore ad. Amet cupidatat est velit sint ut consectetur minim officia irure commodo culpa dolor ad commodo anim fugiat consequat. Lorem ipsum labore ullamco proident deserunt et in consectetur magna exercitation anim velit est culpa adipisicing esse irure commodo in. Lorem ipsum pariatur sunt consequat culpa mollit do incididunt reprehenderit in ut velit. Dolor consectetur aliqua fugiat sit proident non mollit nulla elit labore in deserunt ullamco dolor exercitation. Lorem ipsum dolor sed enim reprehenderit culpa cupidatat aliquip adipisicing pariatur anim sed duis. Pariatur pariatur reprehenderit ut officia voluptate aliqua nostrud fugiat esse amet veniam labore incididunt cupidatat non nisi. Eiusmod ea voluptate aliqua veniam irure aliqua reprehenderit dolore et eiusmod anim aute sit. Irure enim commodo sint ad nisi eiusmod commodo veniam aute in irure excepteur in est fugiat laborum sed sint.</p>
	</div>
</div>
<footer class="uk-light uk-background-secondary uk-container uk-overflow-auto uk-child-width-1-3 uk-grid uk-container-expand">
        <div class="uk-overflow-auto">
        <ul>
            <h1 class="uk-text-large">About us</h1>
            <li><a href="#">Who are we?</a></li>
            <li><a href="#">How does it work?</a></li>
            <li><a href="#">Payment methods</a></li>
            <li><a href="#">Lorem Ipsum</a></li>
        </ul>
        </div>
        <address class="uk-overflow-auto">
            <ul>
                <h1 class="uk-text-large">Contact</h1>
                <li><a href="mailto:antoniojoseqp@hotmail.com">email: antoniojoseqp@hotmail.com</a></li>
                <li>phone number: ##########</li>
                <li>address: $$$$$$$$$$$$$</li>
            </ul>
        </address>
        <div class="uk-overflow-auto">
            <ul>
                <h1 class="uk-text-large">Policy</h1>
                <li><a href="#">Sells Policy</a></li>
                <li><a href="#">Customer Policy</a></li>
            </ul>
        </div>
        <div class="uk-container uk-width-expand uk-text-center">
            <p class="uk-text-small">powered by UiKit AND developed by Antonio Quintero © marzo 2019</p>
        </div>
    </div>
</footer>
</body>
</html>