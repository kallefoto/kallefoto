<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kallefoto</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  </head>

  <body>

  <header id="opp">
    <nav>
      <a href="index.html" class="understrek">Heim</a>
      <div class="dropdown">
        <span>Stadar<i class="arrow right"></i></span>
        <div class="dropdown_content">
          <ul>
            <li style="list-style-type: none;"><a href="#" class="understrek">Sogndal</a></li>
            <li style="list-style-type: none;"><a href="luster.html" class="understrek">Luster</a></li>
            <li style="list-style-type: none;"><a href="leikanger.html" class="understrek">Leikanger</a></li>
            <li style="list-style-type: none;"><a href="balestrand.html" class="understrek">Balestrand</a></li>
            <li style="list-style-type: none;"><a class="understrek" href="bilar.html">Bilar & Dyr</a></li>
          </ul>
        </div>
      </div>
      <a href="#" class="understrek">Om Kallefoto</a>
      <a href="#" class="understrek">Kontakt meg</a>
    </nav>

    <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-down pil pil_under"></div></a></div>

</header>

<main id="ned">

  <h2>Sogndal</h2>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <nav class="under_nav">
    <a href="#" class="svart_understrek">Fjærland</a>
    <a href="#" class="svart_understrek">Kvåle</a>
    <a href="#" class="svart_understrek">Barsnes</a>
    <a href="#" class="svart_understrek">Sogndalsdalen</a>
  </nav>

  <div class="bilder_galleri">
    <div>
    <img src="../bilder/sogndal/002.jpg">
    <img src="https://unsplash.it/1920/1081?random">
    <img src="https://unsplash.it/1920/2500?random"></div>
    <div><img src="https://unsplash.it/1920/1200?random">
    <img src="https://unsplash.it/1920/2300?random">
    <img src="https://unsplash.it/1920/2950?random"></div>
    <div class="rad_3"><img src="https://unsplash.it/1920/1400?random">
    <img src="https://unsplash.it/1920/1080?random">
    <img src="https://unsplash.it/1920/1800?random">
    <img src="https://unsplash.it/1920/2001?random"></div>
    <div class="rad_4"><img src="https://unsplash.it/1925/1005?random">
    <img src="https://unsplash.it/1920/1985?random">
    <img src="https://unsplash.it/1920/1505?random">
    <img src="https://unsplash.it/1920/1990?random"></div>
  </div>


    <div class="pil_breidd"><a class="pil_a" href="#opp"><div class="fas fa-arrow-circle-up"></div></a></div>
  </main>


  <footer>
    <p>Kontakt meg på: kallebilde@gmail.com eller tlf 97194135. Alle rettigheitar tilhøyrer Karl Johan Ølnes</p>
  </footer>

  <script>
    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 1200, function(){
            window.location.hash = hash;
          });
        }
      });
    });
  </script>

  </body>
</html>
