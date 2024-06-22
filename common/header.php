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
      rel="stylesheet"
    />
    <title>Add New Book</title>
  </head>
  <body>
    <button class="logout">
      Logout
      <img
        src="./assets/images/no-entry.png"
        alt="Admin Icon"
        class="admin-icon"
      />
    </button>
    <div class="page-indicator">
      Login Page
      <img
        src="./assets/images/administrator-male.png"
        alt="Admin Icon"
        class="admin-icon"
      />
    </div>
    <div class="dashboard grid">
      <div class="options flex">
        <ul class="flex">
          <li>
            <a href="">
              Add New Book
              <svg class="icon">
                <use xlink:href="#next-btn"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="">
              Validate Issue Requests
              <svg class="icon">
                <use xlink:href="#next-btn"></use>
              </svg>
            </a>
          </li>
          <li>
            <a href="">
              Validate Return Requests
              <svg class="icon">
                <use xlink:href="#next-btn"></use>
              </svg>
            </a>
          </li>
          <li class="active">
            <a href="">
              History
              <svg class="icon">
                <use xlink:href="#next-btn"></use>
              </svg>
            </a>
          </li>
        </ul>
        <button>Cancel</button>
      </div>