<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Test js</title>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>
<h2>JavaScript</h2>
        <p>การแสดงข้อมูล</p> 
        <p id="demo"></p>
        <p>การสร้างฟังก์ชั่น</p>
        <p id="demo2"></p>
        <p>การสร้าง object:</p>
        <p id="demo3"></p>
        <p>ฟังก์ชั่น onclick (HTML Events)</p>
        <button onclick="displayNumber()">แสดงตัวเลข</button>
        <p id="demo4"></p>
        <p id="demo5"></p>
        <p id="demo6"></p>
        <p id="demo7"></p>
        <p id="demo8"></p>
        <p id="demo9"></p>
        <p id="demo10"></p>
        <p id="demo11"></p>
        <p id="demo12"></p>
        <p id="demo13"></p>
        <p id="demo14"></p>
        <p id="demo15"></p>
        <p id="demo16"></p>
        <p id="demo17"></p>
<script>
        //1 การดีบักค่า Debugging
        var a = 1;
        //debugger;
        console.log(a);
        

        //2 การแสดงข้อมูล
        document.getElementById("demo").innerHTML = 'Hi';

        //3 การสร้างฟังชั่น
        function myFunction(p1, p2) {
            return p1 * p2;
        }
        document.getElementById("demo2").innerHTML = myFunction(4, 3);

        //4 การสร้าง object:
        var video = {title:"Clip fun", type:"mp4"};
        document.getElementById("demo3").innerHTML = video.title +' type :'+ video.type;

        //5 ฟังชั่น onclick (HTML Events)
        function displayNumber() {
            document.getElementById("demo4").innerHTML = 1000;
        }

        //6 การนำวันที่มาใช้งาน
        var now = new Date();
        console.log(now);

        //7 array
        var data = ["a", "b", "c"];
        document.getElementById("demo5").innerHTML = data;

        //8 option array
        document.getElementById("demo6").innerHTML = data.pop();
        document.getElementById("demo7").innerHTML = data.toString();
        document.getElementById("demo8").innerHTML = data.push('d');
        document.getElementById("demo9").innerHTML = data;
        document.getElementById("demo10").innerHTML = data.sort();
        document.getElementById("demo11").innerHTML = data.reverse();

        //9 forEach
        var txt = "";
        data.forEach(showItem);
        document.getElementById("demo12").innerHTML = txt;

        function showItem(item) {
            txt = txt + item + "<br>"; 
        }

        //10  if else
        console.log(now.getHours());
        if (now.getHours() < 18) {
            document.getElementById("demo13").innerHTML = "Good day!";
        } else {
            document.getElementById("demo13").innerHTML = "Bad day!";
        }

        //11  switch
        var day;
        switch (new Date().getDay()) {
            case 0:
                day = "Sunday";
                break;
            case 1:
                day = "Monday";
                break;
            case 2:
                day = "Tuesday";
                break;
            case 3:
                day = "Wednesday";
                break;
            case 4:
                day = "Thursday";
                break;
            case 5:
                day = "Friday";
                break;
            case  6:
                day = "Saturday";
        }
        document.getElementById("demo14").innerHTML = "Today is " + day;

        //12 try catch
        // function adddlert() {
        //     return "Welcome guest!";
        // }
        try {
            adddlert("Welcome guest!");
        }
        catch(err) {
            document.getElementById("demo15").innerHTML = err.message;
        }

        //16 json
        var text = '{"employees":[' +
        '{"firstName":"John","lastName":"Doe" },' +
        '{"firstName":"Anna","lastName":"Smith" },' +
        '{"firstName":"Peter","lastName":"Jones" }]}';

        obj = JSON.parse(text);
        document.getElementById("demo16").innerHTML =
        obj.employees[1].firstName + " " + obj.employees[1].lastName;


        // feed
        var txt = ""; 
        fetch('https://video.mthai.com/2016/feed/feed-video-elastic.php?start=1&total=11').then(response => {
            return response.json();
        }).then(items => {
            items.forEach(function(item) {
                console.log(item);
            });

        }).catch(err => {

        });

</script> 
</body>

</html>