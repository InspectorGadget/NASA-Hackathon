<?php
include "database.php";
?>

<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> NTC Team </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            
            form input {
                text-align: center;
            }
            
            h3.mine {
                text-align: center;
                text-decoration: underline;
            }
            
        </style>
    </head>
    <body>
        
        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> NTC </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li class="active"> <a href="#"> Home </a> </li>
                    <li> <a href="http://21a388f8.ngrok.io/qrcode/php/home.php"> Official Page </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
    <center>
                
        <br><br>
        
        <!-- Data for admin !-->
        
        <h3 class="mine"> Enter your country's name </h3>
        
        <br><br>
        
        <!--
        <form action="admin.php" method="GET">
            
            <input name="name" type="text" placeholder="Country name"><br>
            <input name="esi" type="text" placeholder="Country ESI"><br>
            <br>
            <button type="submit"> Add </button>
            
        </form>
        -->
        
        <form action="check.php" method="GET">
            
            <input name="name" type="text" placeholder="Country name"><br>
            <br>
            <button type="submit"> Search </button>
            
        </form>        
        
        <br><br>
        
    </center>
        
    </body>
</html>
