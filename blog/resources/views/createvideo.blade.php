<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <head>
        <title>
           textured_orbs
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
                            <a href="{{ url('/video') }}">Video</a>
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
            <h2>Create Videos</h2>
            <form action="#" onsubmit="return create() ">
                    <div class="form_settings">
                       <p>Title: <input class"name" type="text" id="title" name="name" value="" /></p>                        
                       <p>Detail: <textarea rows="8" cols="50" id="detail" name="detail"></textarea></p>                 
                       <p>Type Video:                       
                       <input class="radio" type="radio" id="shortclip" name="type" value="คลิปสั้น" checked > คลิปสั้น
                       <input class="radio" type="radio" id="longclip" name="type" value="คลิปยาว"> คลิปยาว <br /><br />                                              
                       <input type="submit" value="Save" >
                       <input type="reset" value="Cancel" />
                       </p>
                    </div>       
                </div>                            
             </form>   
            
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
                        <a href="{{ url('/video') }}#">Video</a>
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

             <script>
             function create() {                    
                var title = document.getElementById("title").value;
                var detail = document.getElementById("detail").value;
                var type = document.getElementsByName("type");
                var type_text = ''
                for (var i = 0, length = type.length; i < length; i++) {
                    if (type[i].checked) {
                        type_text = type[i].value;
                        break;
                    }
                }
                alert("Title : " + title + "\nDetail : " + detail + "\nType video : " + type_text  );                
             }                
               
             </script>         
    </body>
</html>