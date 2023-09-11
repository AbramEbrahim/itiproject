<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> your store</title>

  {{-- <link rel="stylesheet" href="{{ asset('css/login.css')}}"> --}}

  <!-- Latest compiled and minified CSS -->

  {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> --}}

  {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}

<style>

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 150px;
  padding: 10 8px;
}

@media screen and (max-width: 650px) {
  .column {
    width: 80%;
    display: block;
    padding-bottom: 60px;
  }
}

.card {
  box-shadow: 1px 4px 8px 5px rgba(0, 0, 0, 0.2);
  margin: 20px;
  width: 80%;
  border-radius: 10px;
  padding-left: 20px;
  padding-right: 20px;
}
.card:hover{
  box-shadow: 1px 4px 8px 10px rgba(0, 147, 78, 0.785);
  /* width: 85%; */
  transition: 1s;
  padding: 15px;
  border-radius: 20px;


}

.card2 {
  box-shadow: 1px 4px 8px 10px rgba(0, 0, 0, 0.2);
  margin: 30px;
  margin-left: 30%;
  margin-right: 30%;
  height: auto;
  border-radius: 40px;
  border: #001d61 4px solid;
}
.card2 img{
  margin-left: 10%;


}

.container {
  padding: 0 16px;
  

}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 80%;
  margin-left: 10%;
  border-radius: 10px
}

.button:hover ,.serch_button:hover{
  background-color: #000000;
  transition: 1s;
}
img{
  height: 300px;
}

.search-box{
width: 200px !important;
height: 30px;
margin: 8px;
border-radius: 10px
}

.serch_button {
  border: none;
  outline: 0;
  padding: 8px;
  color: white;
  background-color: rgba(0, 147, 78, 0.785);
  text-align: center;
  cursor: pointer;
  width: 80px; 
  border-radius: 10px
}

.topnav {
  background-color: #333;
  overflow: hidden;
  width: 101%;
  margin-top: -12px;
  margin-left: -8px;
  box-shadow: 12px 2px  5px rgba(10, 103, 0, 0.89);

}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: rgba(0, 147, 78, 0.785);
  box-shadow: 4px 0px 10px rgb(0, 0, 0) ;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin-left: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: rgb(0, 255, 136);
  color: rgb(12, 0, 0);
  transition: 1s;
  box-shadow: 4px 0px 10px rgb(0, 0, 0) ;

}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: rgb(0, 255, 136);
  color: rgb(12, 0, 0);
  transition: 1s;
  box-shadow: 4px 0px 10px rgb(0, 0, 0) ;

}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}

/* 
.cartcolumn {
  float: left;
  width: 25%;
  margin:8.3%; 
  margin-bottom: 150px;
  padding: 10 8px;
} */

.cartbtn{
  width: 20%;
  height: 60px;      
  background-color: rgb(197, 49, 0);
  border-radius: 10px;
  
}


.cartimage{
  width: 90%;
  height: 250px;
  padding: 20px;
}

.carttext{
text-align: center;
font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
font-size: 20px;  
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
  
  {{View::make('header')}}
  
  @yield('content')


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>