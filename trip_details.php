<!DOCTYPE html>
<html>




<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}














@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

<style>
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



<div class="topnav">

  <a href="http://localhost/home.php">Home</a>
  <a href="QR/QR.php">Scan QR code</a>
  <a href="profile.php">Profile</a>
  <a href="http://localhost/Xcode/recept.php">Payment</a>
  <a class="active" href="#trip_details">Trip Details</a>
  <a href="http://localhost/xcode/Contact/">Feedback</a>
  <a href="http://localhost/home.php">Back to Home</a>
    </div>








<table>
  <tr>
    <th>DATE</th>
    <th>FROM</th>
    <th>TO</th>
  <th>DISTANCE</th>
  <th>DURATION</th>
  <th>FARE</th>
  </tr>
  <tr>
  <td>12.02.2019</td>
  <td>DHAKA,LALBAG</td>
  <td>DHAKA,SUKRABAD</td>
  <td>2.46 KM </td>
  <td> 95 MINS</td>
  <td>00$</td>
  </tr>
  <tr>
  <td>11.02.2019</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>09.02.2019</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>05.02.2019</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  </tr>
 </table>
 </body>



<img src="air.jpg" alt="air" style="width:100%">


</body>
</html>
