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
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            
            h2.mine, h3.mine {
                text-decoration: underline;
            }
            
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            
            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }
            
            tr:nth-child(even) {
                background-color: #dddddd;
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
                   
                    <li class="active"> <a href="index.php"> Home </a> </li>
                    <li> <a href="index.php"> Back </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>
        
        
        <div class="container-fluid">
            
            <?php
            include 'database.php';
            
            echo "<center>";
            
            $name = $_GET['name'];
    
            $sql =  "SELECT * FROM list WHERE name = '$name'";
   
            $result = $conn->query($sql);
   
                if (!$row = mysqli_fetch_array($result)) {
        
                    echo "\n$name doesn't exist in the DataBase!";
        
                } else {
                    
                    echo "<h2> Short Note </h2>";
                    echo "<br>";
                    echo "<h3>";
                    echo "ESI simply means 'Environmental Sustainability Index'";
                    echo "</h3>";
                    echo "<br>";
                    echo "<br>";
                    
                    
                    echo "<h2 class='mine'>";
                    
                    echo "Your requested Data!";
                    
                    echo "</h2>";
                    echo "<h3>";
                    
                    echo "<br>";
                    echo "<br>";
                    
                    echo "<br>";
                    echo "Name: ";
                    echo $row['name'];
                    echo "<br>";
                    echo "<br>";
                    echo "ESI: ";
                    echo $row['esi'];
                    
                    echo "</h3>";
         
                }
                
            echo "</center>";
            
            ?>
            
            <br><br>
            
            <center>
                <a href="index.php" class="btn btn-default">Back</a>
            </center>
            
            
          
            <br><br>
            
            <?php
            include 'database.php';
                
                    $sql =  "SELECT * FROM list WHERE name = '$name'";
                    $result = $conn->query($sql);

                        if (!$row = mysqli_fetch_array($result)) { 
                        } else {

                    echo "<h3 class='mine'> <center>";
                
                    echo "Database data";
                
                    echo "<h3> </center>";
                        
                    echo "<br><br><br>";
                        
                    echo "<table><center>";
                        
                     echo "<tr>";
                     
                        echo "<th> Global Rank </th>";
                        echo "<th>";
                        echo "Country";
                        echo "</th>";
                        echo "<th>ESI</th>";
                    
                        echo "</tr>";
                
                        echo "<tr>";
                        
                        echo "<td>";
                            
                            echo $row['id'];
                        
                        echo "</td>";                
                        
                        echo "<td>";
                        
                            echo $row['name'];
                            
                        echo "</td>";
                    
                        echo "<td>";
                            
                            echo $row['esi'];
                        
                        echo "</td>";
                    
                        echo "</tr>";        
                        
                        echo "</table></center>";
                        
                         echo "<br><br><br>";
                         
                    }
                
            ?>
            
            
        </div>
        
        
    </body>
</html>
