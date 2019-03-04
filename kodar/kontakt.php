<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kallefoto</title>
    <link rel="stylesheet" href="kontakt.css">
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
          </ul>
        </div>
      </div>
      <a href="#" class="understrek">Om Kallefoto</a>
      <a href="#" class="understrek">Kontakt meg</a>
    </nav>

    <h1>Kontakt meg her:</h1>
    <form name="contactform" method="post" action="send_form_email.php">
    <table width="450px">
    <tr>
     <td valign="top">
      <label for="first_name">First Name *</label>
     </td>
     <td valign="top">
      <input  type="text" name="first_name" maxlength="50" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="last_name">Last Name *</label>
     </td>
     <td valign="top">
      <input  type="text" name="last_name" maxlength="50" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="email">Email Address *</label>
     </td>
     <td valign="top">
      <input  type="text" name="email" maxlength="80" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="telephone">Telephone Number</label>
     </td>
     <td valign="top">
      <input  type="text" name="telephone" maxlength="30" size="30">
     </td>
    </tr>
    <tr>
     <td valign="top">
      <label for="comments">Comments *</label>
     </td>
     <td valign="top">
      <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
     </td>
    </tr>
    <tr>
     <td colspan="2" style="text-align:center">
      <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
     </td>
    </tr>
    </table>
    </form>

</header>


  </body>
</html>
