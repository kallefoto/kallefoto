
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kallefoto</title>
    <link rel="stylesheet" href="kontakt.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>

  <body>


  <header>
    <nav>
      <a href="index.html" class="understrek">Heim</a>
      <div class="dropdown">
        <span>Stadar<i class="arrow right"></i></span>
        <div class="dropdown_content">
          <ul>
            <li style="list-style-type: none;"><a href="sogndal.html" class="understrek">Sogndal</a></li>
            <li style="list-style-type: none;"><a href="luster.html" class="understrek">Luster</a></li>
            <li style="list-style-type: none;"><a href="#" class="understrek">Leikanger</a></li>
            <li style="list-style-type: none;"><a href="balestrand.html" class="understrek">Balestrand</a></li>
            <li style="list-style-type: none;"><a class="understrek" href="bilar.html">Bilar & Dyr</a></li>
          </ul>
        </div>
      </div>
      <a href="#" class="understrek">Om Kallefoto</a>
      <a href="#" class="understrek">Kontakt meg</a>
    </nav>

    <h1>Kontakt meg her:</h1>
    <form class="contact_form" action="kontaktform.php" method="post">
      <input type="text" name="name" value="" placeholder="Navn">
      <input type="text" name="mail" value="" placeholder="E-Mail">
      <input type="text" name="subject" value="" placeholder="Emne">
      <textarea name="message" placeholder="Melding"></textarea>
      <button type="submit" name="submit">Send</button>
    </form>

</header>


  </body>
</html>
