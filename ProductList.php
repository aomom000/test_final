<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopshock</title>
</head>
<body>
    
    <form action="verified.php" method="post" align="center">
    <h1>ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1>
    <h1>SHOPSHOCK</h1>
    <h2>Select Product to Cart</h2>
            <script>
            function product_list(){
                let xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    //console.log(this.readyState + " ,"+ )
                    if(this.readyState==4 && this.Status == 200){
                        arr = JSON.parse(this.responseText);
                        plist = document.getElementById("p_list");
                        text = "";
                        for(i=0;i<arr.length;i++)
                        data = JSON.parse(this.resposeText);
                    }
                }
                xhttp.open("GET", "product_rest.php", true);
                xhttp.send();
            }

            function product_add(){
                alert(arr[i]);
                plist = document.getElementById('p_list');
                text = "";
                text += "<table border='1'>";
                text += "<tr><td>ID</td><td><input type='text' value=""+arr[i][0]";
                text += "";
                text += "";
                text += "";
                text += "";
                text += "</table>";
                plist.innerHTML = text;

            }
            function add_to_cart(){
                let xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function(){
                    if(this.readyState==4 && this.status==200)
                    
                }

                xhttp.open("POST","product_rest.php",true);
                xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                xhttp.send("a=1&b=2");
            }
            </script>
</body>
</html>