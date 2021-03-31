<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amenities</title>
  <script src="https://kit.fontawesome.com/64b7d3d0f7.js" crossorigin="anonymous"></script>

  <style>
    * {
      margin: 0;
      padding: 0;
    }

    html,
    body {
      min-height: 100%;
    }

    .footer {
      margin-bottom: -0px;
      position: relative;
      height: 50px;
    }

    .footer .footer-bottom {
      width: 100%;
      background-color: #343a40;
      color: #bfc1c2;
      height: 40px;
      margin-bottom: -700px;
      text-align: center;
      position: absolute;
      bottom: 0px;
      left: 0px;
      padding-top: 20px;
    }

    .wrapper {
      min-height: 100%;
      width: 1170px;
      margin: 0 auto;
    }

    header {
      height: 100px;
      background: black;
      width: 100%;
      z-index: 10;
      position: fixed;
    }

    .logo {
      width: 30%;
      float: left;
      line-height: 100px;
    }

    .logo a {
      text-decoration: none;
      font-size: 30px;
      font-family: poppins;
      color: #fff;
      letter-spacing: 5px;
    }

    nav {
      float: right;
      line-height: 100px;
    }

    nav a {
      font-weight: bold;
      text-decoration: none;
      letter-spacing: 4px;
      font-size: 25px;
      margin: 0 10px;
      color: whitesmoke;
    }

    nav a:hover {
      background-color: whitesmoke;
      color: black;
    }

    .banner-area {
      width: 100%;
      height: 2000px;
      position: fixed;
      top: 80px;
      background-color: #bcd4e6;

    }

    .banner-area h2 {
      padding-top: 5%;
      font-size: 70px;
      text-transform: uppercase;
      text-align: center;
      color: black;
      font-weight: bold;
    }

    .content-area {
      width: 100%;
      position: relative;
      top: 450px;
      height: 1500px;
    }

    .content-area h2 {
      letter-spacing: 4px;
      padding-top: 30px;
      font-size: 40px;
      margin: 0;
    }

    .content-area p {
      padding: 0px;
      line-height: 30px;
    }

    body {
      font-family: "calibri";
    }
  </style>
</head>

<body>
  <div class="box-area">
    <header>
      <div class="wrapper">
        <div class="logo">
          <img src="photos/11.png" style="width:350px;height:95px;">
        </div>
        <nav>
          <a href="index.php">Home</a><a href="login.php">Log IN</a>
          <a href="amenities.php">Facilities</a>
          <a href="contact.php">Contact Us</a>
        </nav>
      </div>
    </header>
    <div class="banner-area">
      <h2 style="height:100px;margin-top:100px;">Facilities We Provide</h2>
    </div>
    <div class="content-area">
      <div class="wrapper">
        <b>
          <table width=100% bgcolor="whitesmoke">
            <tr>
              <td style="width: 50%;"><img src="interior/1_1.jpg" style="width:550px;height:350px;margin-right:5%;"></td>
              <td style="width: 50%;">
                <font size="7" style="font-weight:bold;">Administration</font>
                <font size="5">
                  <ul>
                    <p><i class="fas fa-splotch fa-spin"></i> Reception and Administration space add a welcome sense to the hostel
                    <p><i class="fas fa-splotch fa-spin"></i> The waiting lounge area is designed for visitors, parents and other out-siders
                  </ul>
                </font>
              </td>
            </tr>
            <tr>
              <td style="width: 50%;">
                <font size="7" style="margin-left:30%;font-weight:bold;">Accomodation</font>
                <font size="5">
                  <ul style="list-style-type:disc;margin-left:30%;">
                    <p><i class="fas fa-splotch fa-spin"></i> Well designed interior
                    <p><i class="fas fa-splotch fa-spin"></i> Beds desgined according to comfort
                    <p><i class="fas fa-splotch fa-spin"></i> Indivudial study space and wordrobes
                    <p><i class="fas fa-splotch fa-spin"></i> Specius balconies to each rooms
                    <p><i class="fas fa-splotch fa-spin"></i> Mini refrigerator and AC in every room
                  </ul>
                </font>
              </td>
              <td style="width: 50%;"><img src="room/1.jpg" style="width:550px;height:350px;margin-right:5%;"></td>
            </tr>
            <tr>
              <td style="width: 50%;"><img src="slider/9.jpg" style="width:550px;height:350px;margin-right:5%;"></td>
              <td style="width: 50%;">
                <font size="7" style="font-weight:bold;">Dining and Mess Area</font>
                <font size="5">
                  <ul style="list-style-type:disc;">
                    <p><i class="fas fa-splotch fa-spin"></i> Hygienic Dining
                    <p><i class="fas fa-splotch fa-spin"></i> Healthy and hygienic food
                    <p><i class="fas fa-splotch fa-spin"></i> Food and dining supervised by management
                    <p><i class="fas fa-splotch fa-spin"></i> Well arranged mess with cook
                    <p><i class="fas fa-splotch fa-spin"></i> Central R.O system for kitchen and drinking
                    <p><i class="fas fa-splotch fa-spin"></i> Banmerry counter for food
                  </ul>
                </font>
              </td>
            </tr>
            <tr>
              <td style="width: 50%;">
                <font size="7" style="margin-left:30%;font-weight:bold;">Garden Areas</font>
                <font size="5">
                  <ul style="list-style-type:disc;margin-left:25%;">
                    <p><i class="fas fa-splotch fa-spin"></i> Indoor and outdoor landscaped split out spaces just bring the right sense of natural air conditioning.
                    <p><i class="fas fa-splotch fa-spin"></i> Inner courtyard garden is another secure spot within the premises
                  </ul>
                </font>
              </td>
              <td style="width: 50%;"><img src="slider/7.jpg" style="width:550px;height:350px;margin-right:5%;"></td>
            </tr>
            <tr>
              <td style="width: 50%;"><img src="interior/4.jpg" style="width:550px;height:350px;margin-right:5%;"></td>
              <td style="width: 50%;">
                <font size="7" style="font-weight:bold;">T.V Lounge and Gym</font>
                <font size="5">
                  <ul style="list-style-type:disc;">
                    <p><i class="fas fa-splotch fa-spin"></i> Space like TV lounge is provided with sense of luxury
                    <p><i class="fas fa-splotch fa-spin"></i> Amenities such as Gym, Study area and convenience store are within the campus so that girls have no problem regarding privacy
                  </ul>
                </font>
              </td>
            </tr>
          </table>

      </div>
    </div>
    </td>
    </tr>
    </table>
    <br><br><br>
  </div>
  <br><br><br>
  <div class="footer">
    <div class="footer-bottom">
      Copyright &copy; 2021 Krishna Girls Hostel | All right reserved | Crafted & Managed by <a href="https://instagram.com/khushi.doshi20?igshid=11w8xhxdeqi8g" style="color:#00bfff;">Khushi Doshi</a> And <a href="https://www.facebook.com/aneri.dhola.7" style="color:#00bfff;">Aneri Dhola </a>
    </div>
  </div>
</body>
</html>