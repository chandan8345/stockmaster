<!DOCTYPE html>
<html lang="en">
<head>
  <title>Stock Master</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-default">

<nav class="navbar navbar-fixed-top">
<div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Stock Master</a>
    </div>
    <div class="collapse navbar-collapse navbar-right" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{'/product'}}">Add Product</a></li>
            <li><a href="#">Manage Cagtegory</a></li>
            <li><a href="{{'/stock'}}">Stock</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Purchase <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">New Purchase</a></li>
            <li><a href="#">Manage Purchase</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sales <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">New Sales</a></li>
            <li><a href="#">Manage Sales</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Transaction <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Customer</a></li>
            <li><a href="#">Supplier</a></li>
            <li><a href="#">Manage Transaction</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Expense <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Add Expense</a></li>
            <li><a href="#">Expense Category</a></li>
            <li><a href="#">Manage Expense</a></li>
          </ul>
        </li>
        <li class=""><a href="#">Report</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">My Profile</a></li>
            <li><a href="#">Manage User</a></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    <!--
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    -->
  </div>
</div> 
</nav>

