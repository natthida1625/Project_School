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
                <h2>Videos</h2>
                    <a href="{{ url('/createvideo') }}">Create Video</a><br /><br />                
                    <table align="left" cellspacing=2 cellpadding=5 id="table" border=1 width="70%" >      
                        <tr>
                            <th>Title</th>
                            <th>Detail</th>
                            <th>Type Video</th> 
                            <th>Edit</th>  
                            <th>Delete</th>                                              
                        </tr>             
                    </table>                                      
            </div>

            <div class="section-right">
                <div class="box-top">
                <h3>Edit Videos</h3> 
                <form action="#" onsubmit="return edit() ">
                    <table>
                    <p>Title: <br /> <input class"name" type="text" id="title" name="title" /></p>                        
                    <p>Detail: <textarea rows="8" cols="20" id="detail" name="detail"></textarea></p>                 
                    <p>Type Video: <br />                      
                    <input class="radio" type="radio" id="type_1" name="type" value="คลิปสั้น"> คลิปสั้น <br />
                    <input class="radio" type="radio" id="type_2" name="type" value="คลิปยาว"> คลิปยาว <br /><br />                                              
                    <input type="submit" value="Save" >
                    <input type="reset" value="Cancel" />
                    </p>                   
                    </table>
                </div>  
                </form>       
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
                var videos = [["Title 1","Detail 1","คลิปสั้น"],
                            ["Title 2","Detail 2","คลิปยาว"],
                            ["Title 3","Detail 3","คลิปสั้น"],
                            ["Title 4","Detail 4","คลิปยาว"],
                            ["Title 5","Detail 5","คลิปสั้น"]]                       
                table = document.getElementById("table"); 
                for(var i = 0; i < videos.length; i++)
                {
                    var newRow = table.insertRow(table.length);
                    newRow.id = "video_" + i;
                    for(var j = 0; j < videos[i].length; j++)
                {
                    var cell = newRow.insertCell(j);                   
                    cell.innerHTML = videos[i][j];
                }
                    var cell = newRow.insertCell();
                    var buttonEdit = document.createElement("button");
                        buttonEdit.setAttribute("id", "btn_" +i);
                        buttonEdit.setAttribute("class", "btn_edit_class");
                        buttonEdit.setAttribute("value", i);
                        buttonEdit.innerHTML = "Edit";
                        cell.appendChild(buttonEdit);
                    
                    var cell = newRow.insertCell();
                    var buttonDelete = document.createElement("button");
                    buttonDelete.setAttribute("id", "btn_del_" +i);
                    buttonDelete.setAttribute("class", "btn_del_class");
                    buttonDelete.setAttribute("value", i);
                    buttonDelete.innerHTML = "Delete";
                    cell.appendChild(buttonDelete);
                }
                //Edit
                var number = 0
                var items = document.getElementsByClassName("btn_edit_class");
                Array.prototype.forEach.call(items, function(i) {
                    document.getElementById('btn_'+i.value).onclick = function() {
                        document.getElementById('title').value = videos[i.value][0];
                        document.getElementById('detail').innerHTML = videos[i.value][1];
                        if (videos[i.value][2]== "คลิปสั้น") {
                            number = 1
                        } else if(videos[i.value][2]== "คลิปยาว"){
                            number = 2
                        }
                        document.getElementById("type_" + number).checked = true;
                    }; 
                });
                // Delete
                var items = document.getElementsByClassName("btn_del_class");
                Array.prototype.forEach.call(items, function(i) {
                    document.getElementById('btn_del_'+i.value).onclick = function() {
                        if (confirm(" ต้องการลบข้อมูลหรือไหม? ")) {
                            document.getElementById("video_" + i.value).style.display = 'none';
                        }
                    }; 
                });

                function edit() {                    
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