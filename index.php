<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME PAGE</title>
  <link rel="shortcut icon" type="image/jpg" href="photos/logo1.jpg" />
  <!------fevicon------>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/64b7d3d0f7.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
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
      position: relative;
      height: 50px;
    }

    .footer .footer-bottom {
      width: 100%;
      background-color: #343a40;
      color: #bfc1c2;
      height: 60px;
      margin-bottom: -500px;
      text-align: center;
      position: absolute;
      bottom: 0px;
      left: 0px;
      padding-top: 20px;
    }

    body {
      text-align: center;
    }

    .wrapper {
      width: 1170px;
      margin: 0 auto;
    }

    header {
      height: 102px;
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
      background-color: white;
      color: black;
    }

    .banner-area {
      width: 100%;
      height: 400px;
      position: fixed;
      top: 80px;
      background-image: url(exterior/3.jpg);
      -webkit-background-size: cover;
      background-size: cover;
      background-position: center center;
    }

    .banner-area h2 {
      padding-top: 8%;
      font-size: 70px;
      text-transform: uppercase;

      color: navy;
      font-weight: bold;
    }

    .content-area {
      width: 100%;
      position: relative;
      top: 450px;
      background: #ebebeb;
      height: 1500px;
    }

    .content-area h2 {
      letter-spacing: 4px;
      padding-top: 30px;
      font-size: 40px;
      margin: 0;
    }

    .content-area p {
      padding: 2% 0px;
      line-height: 30px;
    }

    body {
      font-family: "calibri";
    }

    .table2 {
      padding-right: 35%;
      margin-left: auto;
      background-color: white;
      height: 230px;
      width: auto;
      overflow: hidden;
      text-align: center;
    }

    .table2 img {
      height: 70px;
      width: 70px;
      margin-top: 55px;
    }
  </style>
</head>

<body style="
        background: linear-gradient(
          45deg,
          rgba(211,211,211,1),
          rgba(255,165,0,0) 100%
        );
      ">
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
    </div>
    <div class="content-area">
      <div class="wrapper">
        <b>
          <!-- <p style='font-size:45px;font-weight:bold;text-align:center;color:#b31b1b;'><u>" Our Vision is Our Mission "</u></p> -->
          <p style='font-size:30px;font-weight:bold;text-align:center;'>"Located in posh and secure residential area and very
            well connected with institutes."</p>
          <table width="96%" style="margin-left:2%;text-align:center; color:black;">
            <tr>
              <td width=30% bgcolor="lightblue">
                <p align="center" ><b style="font-size:25px;">Administration</b><br>
                Reception and administration space add a<br> welcome sense to hostel
              </td>
              <td rowspan="2" width=40%><img src="photos/admin.jpg" height="350px" width="100%"></td>
              <td width=30% bgcolor="lightgreen">
                <p align="center"><b style="font-size:25px;">Accomodation</b><br>
                  Spacious 3 seater well-lit and equipped rooms.<br> Well designed interior.
              </td>
            </tr>
            <tr>
              <td width=30% bgcolor="#ffc1cc">
                <p align="center"><b style="font-size:25px;">Security & Parking</b><br>
                  Walled and well secured premises.<br> 24X7 Security Guard. <br>Secured in house parking.</p>
              </td>
              <td width="30%" bgcolor="#f8de7e">
                <p align="center"><b style="font-size:25px;">Garden Area</b><br>Indoor and outdoor landscaped split out
                  spaces
                  <br> just bring the right sense of natural air conditioning.
              </td>
            </tr>
          </table>
        </b>
        <br>
        <p style='font-size:50px;font-weight:bold;text-align:center;color:#b31b1b;'>Director's Desk</p>
        <br>
        <table bgcolor="gray" width="85%" style="margin-left:7%;">
          <tr>
            <td width=50%>
              <image src="interior/1_1.jpg" height="400px" width="90%" style="margin:5% 5%;"></image>
            </td>
            <td align="center" style="color:white;font-weight:bold;font-size:18px;">
              <p>" The hostel life of student is very important part of their <br>life where they live away from their parents, <br> and learn to make their own decisions. <br>For many students hostles are the breeding ground <br>of many of their creative activities and learning<br> that helps in shaping their overall personality."</p>
            </td>

          </tr>
        </table>

        <br>
        <table>
          <tr>
            <font size="7" style="font-weight:bold;color:#b31b1b;">
              <center>Photo Gallery</center>
            </font>
          </tr>
        </table>

        <table>
          <tr style="text-align:center;">
            <td>
              <font size="6" style="font-weight:bold;">Exterior
            </td>
            </font>
            <td>
              <font size="6" style="font-weight:bold;">Interior
            </td>
            </font>
            <td>
              <font size="6" style="font-weight:bold;">Rooms
            </td>
            </font>
          </tr>
          <tr>
            <td>
              <div class="temp">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width:86%;margin-left:5%;">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="exterior/1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="exterior/2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="exterior/3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="exterior/4.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="exterior/5.jpg" class="d-block w-100">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="temp">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width:86%;margin-left:5%;">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="interior/1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="interior/2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="interior/3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="interior/4.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="interior/5.jpg" class="d-block w-100">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </td>
            <td>
              <div class="temp">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width:86%;margin-left:5%;">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="room/1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="room/2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="room/3.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="room/4.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                      <img src="room/5.jpg" class="d-block w-100">
                    </div>
                  </div>
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <br><br><br>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="footer-bottom">
      Copyright &copy; 2021 Krishna Girls Hostel | All right reserved | Crafted & Managed by <a href="https://instagram.com/khushi.doshi20?igshid=11w8xhxdeqi8g" style="color:#00bfff;">Khushi Doshi</a> And <a href="https://www.facebook.com/aneri.dhola.7" style="color:#00bfff;">Aneri Dhola </a>
    </div>
  </div>
</body>

</html>