<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?=$header->title ?></title>
<?=$header->scripts->css ?>
<?=$header->scripts->js ?>
    </head>
    <body>
        <header>
            <div id="nav_logo">
                <a href="/"></a>
                <button id="hamburger">
                    <i class="fa fa-fw fa-navicon"></i>
                </button>
                <div id="logo"></div>
                <div id="hgroup">
                    <h1><span class="accent1">P</span><span class="accent2">D</span><span class="accent3">X</span></h1>
                    <h2>Active 20-30 Club<br />Portland #122</h2>
                </div>
            </div>
            <div id="social_header">
                <a href="https://www.facebook.com/" class="social fb" title="Facebook" target="_blank"><i class="fa fa-fw fa-facebook-f fa-inverse"></i></a>
                <a href="https://www.instagram.com/" class="social ig" title="Instagram" target="_blank"><i class="fa fa-fw fa-instagram fa-inverse"></i></a>
                <a href="/contact" class="social msg" title="Contact by Message"><i class="fa fa-fw fa-commenting-o fa-inverse"></i></a>
                <a href="/contact" class="social mail" title="Contact by Email"><i class="fa fa-fw fa-envelope-o fa-inverse"></i></a>
            </div>
        </header>
        <section id="content_area">
            <nav>
                <ul id="pages">
                    <li><a href="/about"><i class="fa fa-fw fa-hourglass-half fa-inverse"></i><span>Who We Are</span></a></li>
                    <li><a href="/projects"><i class="fa fa-fw fa-child fa-inverse"></i><span>Projects</span></a></li>
                    <li><a href="https://www.facebook.com/pg/Active2030ofPortland/events/" target="_blank"><i class="fa fa-fw fa-calendar fa-inverse"></i><span>Calendar</span></a></li>
                    <li><a href="/tickets"><i class="fa fa-fw fa-ticket fa-inverse"></i><span>Tickets</span></a></li>
                    <li class="donate"><a href="/donate"><i class="fa fa-fw fa-dollar fa-inverse"></i><span>Donate</span></a></li>
                    <li><a href="/flog"><i class="fa fa-fw fa-leanpub fa-inverse"></i><span>FlockBlog</span></a></li>
                    <li><a href="/join"><i class="fa fa-fw fa-group fa-inverse"></i><span>Join</span></a></li>
                    <li><a href="/partners"><i class="fa fa-fw fa-handshake-o fa-inverse"></i><span>Partners</span></a></li>
                    <li><a href="/documents"><i class="fa fa-fw fa-files-o fa-inverse"></i><span>Documents</span></a></li>
                </ul>
                <ul id="social_nav">
                    <li><a href="https://www.facebook.com/" class="social fb" title="Facebook" target="_blank"><i class="fa fa-fw fa-facebook-f fa-inverse"></i></a></li>
                    <li><a href="https://www.instagram.com/" class="social ig" title="Instagram" target="_blank"><i class="fa fa-fw fa-instagram fa-inverse"></i></a></li>
                    <li><a href="/contact" class="social msg" title="Contact by Message"><i class="fa fa-fw fa-commenting-o fa-inverse"></i></a></li>
                    <li><a href="/contact" class="social mail" title="Contact by Email"><i class="fa fa-fw fa-envelope-o fa-inverse"></i></a></li>
                </ul>
            </nav>
            <main>
