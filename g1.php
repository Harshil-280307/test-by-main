<htm>
    <head>
        <title> form </title>
    </head>
     <body>
        <table border="2" align="center">
        <tr><td>
            <u><h1> registration </u></h1>
            Name:
             <input tyep="text" name="name"><br><br>
            Email:
             <input type="email" name="email" id="email"><br><br>
            password:
             <input type="password" name="password"><br><br>
            <center>
            <input type="submit" name="submit" value="submit">
            </center>
            </tr</td>
        </table>
     </body>
</html>
<?php
   echo $a=$_POST["name"];
   echo $b=$_POST["email"];
   echo $c=$_POST["password"];
?>
