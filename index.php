<!DOCTYPE html>
<html>
<head>
	<title>Andrew Sciandra Personal Portfolio</title>
  <meta charset="utf-8">
	<link rel="stylesheet" href="includes/css/port.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src = "includes/js/submitted.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <?php include("includes/header.html");?>
  <div class = "container-fluid" id="about-me">
    <div class = beign-text">
      <h4 class="start-text"> Software Developer with Practical Experience in AGILE Development Plan. Knowledgeable with C++, Python, Java</h4>
    </div>
    <hr id="about-hr">
    <h4 class = "start-text">Software Engineer - Web Developer - Computer Science Student</h4>
    <img src = "includes/photos/cubs.jpeg" class = "my-photo">
  </div>

  <!----------------------End About Me---------------------->


  <div class = "container-fluid" id="my-port">
    <h4 class = "start-text" id="start-port"> Portfolio </h4>
    <hr id = "port-hr">
    <div class = "thumbnail">
      <a href= "#">
        <img src = "includes/photos/connect-four.jpeg" class = "img-responsive">
        <div class = "caption">
          <p>W.I.P - Connect Four in Python</p>
        </div>
      </a>
    </div>

    <div class = thumbnail>
      <a href = "#">
      <img src = "includes/photos/expKit.jpeg" class = "img-responsive">
        <div class = "caption">
          <p>Exploding Kittens in C++</p>
        </div>
      </a>
    </div>

    <div class = "thumbnail">
      <a href="#">
      <img src="includes/photos/garden.jpeg" class = "img-responsive">
        <div class = "caption">
          <p>Garden Simulation in C++</p>
        </div>
      </a>
    </div>

    <div class = "thumbnail">
      <a href = "#">
      <img src = "includes/photos/bst.png" class = "img-responsive">
        <div class = "caption">
          <p>Self Rebalancing Binary Search Tree</p>
        </div>
      </a>
    </div>

  </div>

  <!----------------------End My Portfolio ---------------------->

  <div class = "container-fluid" id="contact-me">
    <h4 class = "start-text" id = "contact">Contact Me</h4>
    <hr id="port-hr">
    <form action="#" onsubmit = "contact()">
      <div class = "container">
        <input type="text" name="name" placeholder="Name" required>
      </div>

      <div class = "container">
        <input type="email" name="email" placeholder="Email Address" required>
      </div>

      <div class = "container">
        <input type="tel" name="phone" placeholder="Phone Number" required>
      </div>

      <div class = "container">
        <textarea rows="4" name="message" placeholder="Brief Message" required></textarea>
      </div>
      
      <div class = "container-fluid">
        <input type = "submit">
      </div>
    </form>
  </div>
  <?php include("includes/footer.html");?>


</body>
</html>
