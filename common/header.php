<?php

include("conn.php");
$url = $_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
    rel="stylesheet" />
  <title>Add New Book</title>
</head>

<body>
  <button class="logout">
    Logout
    <img src="./assets/images/no-entry.png" alt="Admin Icon" class="admin-icon" />
  </button>
  <div class="page-indicator">
    <?php
    
    if (str_contains($url, 'login')) {
      echo 'login page';
      echo '<img src="./assets/images/administrator-male.png" alt="Admin Icon" class="admin-icon" />';
    }

    else if (str_contains($url,'addbook')) {
      echo 'Add Book';
      echo '<img src="./assets/images/add-book.png" alt="Add Book Icon" class="admin-icon" />';
    }

    else if (str_contains($url,'return')) {
      echo 'Return Book';
      echo '<img src="./assets/images/return-book.png" alt="Admin Icon" class="admin-icon" />';
    }

    else if (str_contains($url,'issue')) {
      echo 'Issue Book';
      echo '<img src="./assets/images/issue.png" alt="Admin Icon" class="admin-icon" />';
    }

    else if (str_contains($url,'homescreen')) {
      echo 'HomeScreen';
      echo '<img src="./assets/images/homescreen.png" alt="Admin Icon" class="admin-icon" />';
    }

    else if (str_contains($url,'history')) {
      echo 'History';
      echo '<img src="./assets/images/history.png" alt="Admin Icon" class="admin-icon" />';
    }

    ?>
  </div>
  <div class="dashboard grid">
    <div class="options flex">
      <ul class="flex">
        <li>
          <a href="addbook.php" class="<?php
          if (str_contains($url, "addbook.php")) {
            echo "active";
          }
          ?>">
            Add New Book
            <svg class="icon">
              <use xlink:href="#next-btn"></use>
            </svg>
          </a>
        </li>
        <li>
          <a href="issue.php" class="<?php
          if (str_contains($url, "issue.php")) {
            echo "active";
          }
          ?>">
            Validate Issue Requests
            <svg class="icon">
              <use xlink:href="#next-btn"></use>
            </svg>
          </a>
        </li>
        <li>
          <a href="return.php" class="<?php
          if (str_contains($url, "return.php")) {
            echo "active";
          }
          ?>">
            Validate Return Requests
            <svg class="icon">
              <use xlink:href="#next-btn"></use>
            </svg>
          </a>
        </li>
        <li>
          <a href="history.php" class="<?php
          if (str_contains($url, "history.php")) {
            echo "active";
          }
          ?>">
            History
            <svg class="icon">
              <use xlink:href="#next-btn"></use>
            </svg>
          </a>
        </li>
      </ul>
      <?php
      if (!str_contains($url, "homescreen.php")) {
        ?>
        <a href="homescreen.php" id="cancel_btn">Cancel</a>
      <?php }
      ?>
    </div>
    <div class="dashboard-form-container flex">