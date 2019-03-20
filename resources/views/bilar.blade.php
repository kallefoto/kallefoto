@extends('layouts.default')

@section('title')
  - Bilar
@endsection

@section('body')


  <header id="opp">
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
          </ul>
        </div>
      </div>
      <a href="#" class="understrek">Om Kallefoto</a>
      <a href="#" class="understrek">Kontakt meg</a>
    </nav>

    <div class="pil_breidd"><a class="pil_a" href="#ned"><div class="fas fa-arrow-circle-down pil pil_under"></div></a></div>

</header>

<main id="ned">

  <h2>Bilar og Dyr</h2>

  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

  <nav class="under_nav">
    <a href="#" class="svart_understrek">Fjærland</a>
    <a href="#" class="svart_understrek">Kvåle</a>
    <a href="#" class="svart_understrek">Barsnes</a>
    <a href="#" class="svart_understrek">Sogndalsdalen</a>
  </nav>

  <div class="bilder_galleri">
    <div>
    <img src="https://unsplash.it/1920/3000?random">
    <img src="https://unsplash.it/1920/1081?random">
    <img src="https://unsplash.it/1920/2500?random"></div>
    <div><img src="https://unsplash.it/1920/1200?random">
    <img src="https://unsplash.it/1920/2300?random">
    <img src="https://unsplash.it/1920/2950?random"></div>
    <div><img src="https://unsplash.it/1920/1400?random">
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

@endsection
