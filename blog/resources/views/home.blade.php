<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <head>
        <title>
           textured_orbs
        </title>
        <link rel="stylesheet" href="{{ asset('css/stylepage.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('image/logo.png') }}" /> 
    </head>
    <body>
        <div class="background-header">
            <header class="container-width header-container">
                <h1 class="text-header">
                    <a class="text-header-link" href="{{ url('/home') }}">textured_<span>orbs</span></a>                    
                </h1>
                <h3 class="text-section">Simple. Contemporary. Website Template</h3>
                <nav class="nav">
                    <ul class="nav-menu">
                        <li>
                            <a class="active" href="{{ url('/home') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/video') }}#">Example</a>
                        </li>
                        <li>
                            <a href="#">A Page</a>
                        </li>
                        <li>
                            <a href="#">Another Page</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </header>
            </div>
            <section class="container-width">
                <div class="banner">
                    <img src="{{ asset('image/banner.jpg') }}" alt="test">
                </div>
                <div class="section-left">
                <h2>Welcome to the textured_orbs template</h2>
                <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href="http://creativecommons.org/licenses/by/3.0">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
                <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
                <p>You can view more free HTML5 web templates <a href="http://www.html5webtemplates.co.uk">here</a>.</p>
                <p>This template is a fully functional 5 page website, with an <a href="examples.html">examples</a> page that gives examples of all the styles available with this design.</p>
                <h2>Browser Compatibility</h2>
                <p>This template has been tested in the following browsers:</p>
                    <ul>
                        <li>Internet Explorer 9</li>
                        <li>FireFox 25</li>
                        <li>Google Chrome 31</li>
                    </ul>
                </div>
                <div class="section-right">
                    <div class="box-top">
                        <h4>Latest News</h4>
                        <h5>New Website Launched</h5>
                        <h6>June 1st, 2014</h6>
                        <p>2014 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
                    </div>
                    <div class="box-middle">
                        <h4>Useful Links</h4>
                        <ul>
                          <li><a href="#">link 1</a></li>
                          <li><a href="#">link 2</a></li>
                          <li><a href="#">link 3</a></li>
                          <li><a href="#">link 4</a></li>
                        </ul>
                    </div>
                    <div class="box-footer">
                        <h4>Search</h4>
                        <form method="" action="#" id="search_form">
                         <p>
                           <input class="search" type="text" name="search_field" value="Enter keywords....." />
                           <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="image/search.png" alt="Search" title="Search" />
                         </p>
                        </form>
                    </div>
                </div>
            </section>
            <footer class="footer-background">
                <div class="container-width footer-text-align">
                    <p class="footer-text">
                        <a href="{{ url('/home') }}">Home</a>
                        |
                        <a href="{{ url('/video') }}">Examples</a>
                        |
                        <a href="#">A Page</a>
                        |
                        <a href="#">Another Page</a>
                        |
                        <a href="#">Contact Us</a>
                    </p>
                    <p class="footer-text">
                        Copyright © textured_orbs | 
                        <a href="#">HTML5</a>
                        |
                        <a href="#">CSS</a>
                        |
                        <a href="#">design from HTML5webtemplates.co.uk</a>
                    </p>
                </div>
            </footer>        
    </body>
</html>