<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        color: #ffffff;
      }
      
      /* Set background gradient to cover the entire viewport */
      html {
        height: 100%;
        background-image: linear-gradient(to bottom right, #305170, #6DFC6B);
      }

      .navbar {
          width: 200px;
          height: 100%; /* Set navbar height to 100% of viewport height */
          position: fixed;
          top: 0;
          left: 0;
          background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent black */
          display: flex;
          flex-direction: column;
          justify-content: space-between;
          padding: 20px 0;
      }

      .navbar ul {
          list-style-type: none;
          padding: 0;
          margin: 0;
        }

      .navbar li {
          margin-bottom: 10px;
      }
      
      .navbar li a {
        text-decoration: none;
        color: #ffffff;
        padding: 10px;
        display: block;
      }

      .navbar li a:hover {
          background-color: rgba(255, 255, 255, 0.2); /* Semi-transparent white on hover */
      }
      @media screen and (max-width: 768px){
        .navbar{
          width: 100px;
          height: 100%;
        }
        .signout-button{
          top: 15px;
          right: 15px;
          padding: 5px 10px;
        }
      }
      
      .signout-button {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        background-image: linear-gradient(to bottom right, #6DFC6B, #305170);
        color: #f6f1f1;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: 600;
      }
      
      .signout-button:hover {
        background-image: linear-gradient(to bottom right, #305170, #6DFC6B);
      }
      
      .content {
        margin-left: 220px;
        padding: 20px;
        text-align: center;
      }
      a{
        text-decoration: none;
      }
      .content h1{
        margin-top: 150px;
      }

    </style>
</head>
<body>
  <div class="navbar">
    <ul>
      <li><a href="home.php" >Home</a></li>
      <li><a href="#" onclick="showCV()">My CV</a></li>
        <li><a href="#" onclick="showImage()">My Picture</a></li>
        <li><a href="#" onclick="showLink()">Important Link</a></li>
    </ul>
    
    <!-- <button class="signout-button" onclick="index.html">Sign Out</button> -->
    <p class="signout-button"><a href="login.html">Sign Out</a></p>
    </div>

    <div class="content">
      <h1 >Welcome to My Website</h1>
      <p>By clicking on the items in the nav bar, new elements will open on this page.</p>
      </div>
      
        
<script>
  function showImage() {
      var imagePaths = ['Images/img1.png','Images/img2.jpg','Images/img3.jpg'];
      imagePaths.forEach(function(path){
        var contentDiv = document.querySelector('.content');
        contentDiv.innerHTML = '';
        var imageElement = document.createElement('img');
        imageElement.src = path;
        imageElement.style.maxWidth='30%';
        imageElement.style.padding='20px';
        imageElement.style.marginLeft='200px';
        
        // contentDiv.appendChild(imageElement);
        document.body.appendChild(imageElement);
      })
      
    }

  function showCV(){
    var contentDiv = document.querySelector('.content');
    var embedElement = document.createElement('embed');
        embedElement.className = 'pdf-embed';
        embedElement.src = 'resume.pdf';
        embedElement.type = 'application/pdf';
        embedElement.style.width='90%';
        embedElement.style.height='700px';

        // Remove any existing content in the content container
        // contentContainer.innerHTML = '';
        contentDiv.innerHTML = '';

        // Append the embedded PDF element to the content container
        contentDiv.appendChild(embedElement);
  }
  function showLink(){
        var contentDiv = document.querySelector('.content');
        contentDiv.innerHTML = '';
        window.location.href='importantLink.html';
  }
  </script>
</body>
</html>