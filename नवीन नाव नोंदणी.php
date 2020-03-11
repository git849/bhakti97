







<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>नवीन नाव नोंदणी</title>
  <title>Signup to Bhoivivah</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu&display=swap" rel="stylesheet">
  <link rel="icon" href="favicon.ico">
  <script src="index.js" charset="utf-8"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <li class="navnav">
      <button id="navNondani" onclick="navinNavNondani()" class="button0 btn-sm btn-outline-warning">नवीन नाव नोंदणी</button>
    </li>

    <img class="symbol" src="favicon.ico" alt="" height="38" width="38">

    <a class="navbar-brand" href="">भोई विवाह</a><br>
    <h6 class="tagline">नवीन जीवनाची आनंदी सुरुवात</h6>
    <ul class="navbar-nav  ml-auto">
      <form class="" action="index.php" method="post">
        <li class="button">
          <button id="mukhya"  class="button1 btn-lg btn-outline-warning">मुख्य पान</button>
        </li>
      </form>
      <form class="" action="vadhu.php" method="post">
        <li class="button">
          <button id="vadhu" onclick="myVadhu()" class="button2 btn-lg btn-outline-warning">वधू</button>
        </li>
      </form>
      <form class="" action="var.php" method="post">
        <li class="button">
          <button class="button3 btn-lg btn-outline-warning" href="वध.html">वर</button>
        </li>
      </form>

       <form class="" action="punervivah.php" method="post">
         <li class="button">
           <button onclick="myPunervivah()" class="dropbtn  btn-lg btn-outline-warning">पुनर्विवाह</button>
         </li>
       </form>

        <form class="" action="shodh.php" method="post">
          <li class="button">
            <button class="button5 btn-lg btn-outline-warning">शोध</button>
          </li>
        </form>
       <form class="" action="niyam.php" method="post">
         <li class="button">
           <button class="button6 btn-lg btn-outline-warning">नियम</button>
         </li>
       </form>
         <form class="" action="sampark.php" method="post">
           <li class="button">
             <button class="button7 btn-lg btn-outline-warning" href="संपर्क.html">संपर्क</button>
           </li>
         </form>

    </ul>

  </nav>

  <div class="nondani-form">
    <div id="error"></div>
      <form class="" action="connection.php" method="POST" enctype="multipart/form-data">
    <div class="vadhu-var-mahiti">
      <h4>वधु-वर माहिती </h4>
    </div>


    <div class="complete-name">

        <table>
          <tr>
            <td>
              <h6>संपूर्ण नांव * : </h6>
            </td>
            <td><input id="fullname" type="text" name="fullname" size="30" placeholder="eg.abc" required></td>
          </tr>
        </table>
      </div>
      <div class="vadhu-var">
        <table>
          <tr>
            <td><input type="checkbox" name="gender" value="m" CHECKED /> वर
              <input type="checkbox" name="gender" value="f" /> वधु</td>
          </tr>
        </table>
      </div>
      <div class="janm-dinank">
        <table>
          <tr>
            <td>

              <h6>जन्म दिनांक: </h6>
            </td>
            <td>
              <input type="birthdate" name="janmdinank" value="" placeholder="dd/mm/yyy">
            </td>


          </tr>
        </table>

      </div>
      <div class="janm-vel">

        <table>
          <tr>
            <td>
              <h6>जन्म वेळ: </h6>
            </td>
            <td>
              <input type="birth time" name="janmvel" value="">
            </td>
          </tr>

        </table>
      </div>

      <div class="unchi">
        <table>
          <tr>
            <td>
              <h6>उंची: </h6>
            </td>
            <td>

              <SELECT name="height">
                <option value="" SELECT>--select--</option>
                <option name="4.00"> 4'00"</option>
                <option name="4.01"> 4'01"</option>
                <option name="4.02"> 4'02"</option>
                <option name="4.03"> 4'03"</option>
              </SELECT>

            </td>
          </tr>
        </table>
      </div>

      <div class="varn">
        <table>
          <tr>
            <td>
              <h6>वर्ण: </h6>
            </td>
            <td>
              <SELECT name="varn">
                <option value="" SELECT>--select--</option>
                <option value="Gora">गोरा</option>
                <option value="Gahuvarn">गहूवर्ण</option>
                <option value="Savala">सावळा</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="shikshan">
        <table>
          <tr>
            <td>
              <h6>शिक्षण : </h6>
            </td>
            <td>
              <input type="text" name="shikshan" value="" size="30">
            </td>
          </tr>
        </table>
      </div>
      <div class="shikshan-adhik-mahiti">
        <table>
          <tr>
            <td>
              <h6>ई-मेल *: </h6>
            </td>
            <td>
              <input type="text" name="email" value="" size="30" placeholder="abc@gmail.com" required>
            </td>
          </tr>
        </table>
      </div>
      <div class="vyavasay">
        <table>
          <tr>
            <td>
              <h6>व्यवसाय:</h6>
            </td>
            <td>
              <SELECT name="vyavasay">
                <option value="" SELECT>--select--</option>
                <option value="nahi">नाही</option>
                <option value="vyavasay">व्यवसाय</option>
                <option value="nokari">नोकरी</option>
                2<option value="sarakari nokari">सरकारी नोकरी</option>
                <option value="doctor">डॉक्टर</option>
                <option value="vakil">वकील</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <form class="" action="photo_send.php" method="post" enctype="multipart/form-data">
        <div class="vyavasay-adhik-mahiti">
          <table>
            <tr>
              <td>
                <h6>फोटो *: </h6>
              </td>
              <td>
                <input type="file" name="image" value="choose file" >
                </td>
                <td>
                  <input type="submit" value="Upload" >
                </td>
            </tr>
          </table>
      </form>

      </div>
      <div class="varshik-utpann">
        <table>
          <tr>
            <td>
              <h6>वार्षिक उत्पन्न:</h6>
            </td>
            <td>
              <input type="text" name="varshikutpann" value="" size="30">
            </td>
          </tr>
        </table>
      </div>
      <div class="rakt-gat">
        <table>
          <tr>
            <td>
              <h6>रक्त गट:</h6>
            </td>
            <td>
              <SELECT name='raktgat'>
                <option value="A Positive"SELECT>A Positive</option>
                <option value="A Negative"SELECT>A Negative</option>
                <option value="B Positive"SELECT>B Positive</option>
                <option value="B Negative"SELECT>B Negative</option>
                <option value="O Positive"SELECT>O Positive</option>
                <option value="O Negative"SELECT>O Negative</option>
                <option value="AB Positive"SELECT>AB Positive</option>
                <option value="AB Negative"SELECT>AB Negative</option>
              </SELECT>


            </td>
          </tr>
        </table>
      </div>
      <div class="patrika">
        <h4>पत्रिका</h4>
      </div>
      <div class="ras">
        <table>
          <tr>
            <td>
              <h6>रास: </h6>
            </td>
            <td>
              <SELECT name="ras">
                <option value="" SELECT>--select--</option>
                <option value="mesh">मेष</option>
                <option value="vrushabh">वृषभ</option>
                <option value="mithun">मिथुन</option>
                <option value="kark">कर्क</option>
                <option value="sinh">सिंह</option>
                <option value="kanya">कन्या</option>
                <option value="tula">तुळ</option>
                <option value="vruchik">वृश्चिक</option>
                <option value="dhanu">धनु</option>
                <option value="makar">मकर</option>
                <option value="kumbh">कुंभ</option>
                <option value="meen">मीन</option>


              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="nakshtra">
        <table>
          <tr>
            <td>
              <h6>नक्षत्र: </h6>
            </td>
            <td>

              <SELECT name="nakshatra">
                <option value="" SELECT>--select--</option>
                <option value="ashwini">अश्विनी</option>
                <option value="ardra">आर्द्र</option>
                <option value="aslesha">अस्लेष</option>
                <option value="anuradha">अनुराधा</option>
                <option value="bharani">भरणी</option>
                <option value="chitra">चित्र</option>
                <option value="dhanishta">धनिष्ठा</option>
                <option value="hasta">हस्त</option>
                <option value="Jyeshta">ज्येष्ठ</option>
                <option value="kruttika">कृत्तिका</option>
                <option value="moola">मूळ</option>
                <option value="magha">माघ</option>
                <option value="mrigasira">म्रिगसीर</option>
                <option value="pushya">पुष्य</option>
                <option value="purva phalguni">पूर्व फाल्गुनी</option>
                <option value="purva bhadra">पूर्व भद्रा</option>
                <option value="purva shadha">पूर्व साधा</option>
                <option value="punervasu">पुनर्वसू</option>
                <option value="rohini">रोहिणी</option>
                <option value="swati">स्वाती</option>
                <option value="revati">रेवती</option>
                <option value="sattarka">सातार्क</option>
                <option value="shravan">श्रावण</option>
                <option value="uttara phalguni">उत्तर फाल्गुनी</option>
                <option value="uttara bhadra">उत्तर भद्रा</option>
                <option value="uttara shadha">उत्तर साधा</option>
                <option value="vishakha">विशाखा</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="charan">
        <table>
          <tr>
            <td>
              <h6>चरण: </h6>
            </td>
            <td>

              <SELECT name="charan">
                <option value="" SELECT>--select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="nadi">
        <table>
          <tr>
            <td>
              <h6>नाडी: </h6>
            </td>
            <td>
              <SELECT name="nadi">
                <option value="" SELECT>--select--</option>
                <option value="adya">आद्य</option>
                <option value="madhya">मध्य</option>
                <option value="antya">अंत्य</option>
              </SELECT>

            </td>
          </tr>
        </table>
      </div>
      <div class="birth-city">
        <table>
          <tr>
            <td>
              <h6>जन्म स्थळ: </h6>
            </td>
            <td>
              <input type="text" name="janmsthal" value="">
            </td>

        </table>
      </div>
      <div class="mangal">
        <table>
          <tr>
            <td>
              <h6>मंगळ:</h6>
            </td>
            <td>
              <SELECT name="mangal">
                <option value="ahe">आहे</option>
                <option value="nahi"> नाही</option>
                <option value="saumya">सौम्य</option>
                <option value="nirdosh">निर्दोष</option>
                <option value="mahit nahi">माहित नाही</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="shaikshnik-mahiti">
        <h4>शैक्षणिक/व्यावसायिक माहिती</h4>
      </div>
      <div class="shaikshnik-thikan">
        <table>
          <tr>
            <td>
              <h6>शैक्षणिक ठिकाण:</h6>
            </td>
            <td>
              <input type="text" name="shaikshnikthikan" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="shikshan1">
        <table>
          <tr>
            <td>
              <h6>शिक्षण:</h6>
            </td>
            <td>
              <input type="text" name="shikshan1" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="vyavasaik-thikan">
        <table>
          <tr>
            <td>
              <h6>व्यावसायिक ठिकाण:</h6>
            </td>
            <td>
              <input type="text" name="vyavasaikthikan" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="utpann1">
        <table>
          <tr>
            <td >
              <h6 class="utpannc">उत्पन्न:</h6>
            </td>
            <td>
              <input type="text" name="utpann1" value="" >
            </td>
            <td>
              <SELECT name="utpann">
                <option value="" SELECT>--select--</option>
                <option value="pm">PM</option>
                <option value="pa">PA</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="patta">
        <h4>पत्ता</h4>
      </div>
      <div class="pan">
        <table>
          <tr>
            <td>
              <h6>PAN/Adhar No/<br />Driving License/Passport No:</h6>
            </td>
            <td>
              <input type="text" name="pan" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="nivasi-patta">
        <table>
          <tr>
            <td>
              <h6>निवासी पत्ता *:</h6>
            </td>
            <td>
              <input type="text" name="nivasipatta" value="" required>

            </td>
          </tr>
        </table>

      </div>
      <div class="mobile1">
        <table>
          <tr>
            <td>
              <h6>मोबाईल नं. 1*:</h6>
            </td>
            <td>
              <input type="text" name="mobile1" value="" placeholder="10 digit" required>
            </td>
          </tr>
        </table>
      </div>
      <div class="mobile2">
        <table>
          <tr>
            <td>
              <h6>मोबाईल नं. 2:</h6>
            </td>
            <td>
              <input type="text" name="mobile2" value="" placeholder="10 digit">
            </td>
          </tr>
        </table>
      </div>
      <div class="phone1">
        <table>
          <tr>
            <td>
              <h6>फोन नं. 1:</h6>
            </td>
            <td>
              <input type="text" name="phone1" value="" placeholder="10 digit">
            </td>
          </tr>
        </table>
      </div>
      <div class="phone2">
        <table>
          <tr>
            <td>
              <h6>फोन नं. 2:</h6>
            </td>
            <td>
              <input type="text" name="pnone2" value="" placeholder="10 digit">
            </td>
          </tr>
        </table>
      </div>
      <div class="koutumbik-mahiti">
        <h4>कौटुंबिक माहिती</h4>
      </div>
      <div class="father">
        <table>
          <tr>
            <td>
              <h6>वडील:</h6>
            </td>
            <td>
              <SELECT name="vadil">
                <option value="" SELECT>--select--</option>
                <option value="ahet">आहेत</option>
                <option value="nahit">नाहीत</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="vadilanche-nav">
        <table>
          <tr>
            <td>
              <h6>वडिलांचे नाव:</h6>
            </td>
            <td>
              <input type="text" name="vadilanchenav" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="aai">
        <table>
          <tr>
            <td>
              <h6>आई:</h6>
            </td>
            <td>
              <SELECT name="aai">
                <option value="" SELECT>--select--</option>
                <option value="ahet">आहे</option>
                <option value="nahit">नाही</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="aaiche-nav">
        <table>
          <tr>
            <td>
              <h6>आईचे नाव:</h6>
            </td>
            <td>
              <input type="text" name="aaichenav" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="bhau">
        <table>
          <tr>
            <td>
              <h6>भाऊ:</h6>
              </h6>
            </td>
            <td>
              <SELECT name="bhau">
                <option value="" SELECT>--select--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="vivahit-bhau">
        <table>
          <tr>
            <td>
              <h6>विवाहित भाऊ:</h6>
            </td>
            <td>
              <SELECT name="vivahitbhau">
                <option value="" SELECT>--select--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="bahini">
        <table>
          <tr>
            <td>
              <h6>बहिणी:</h6>
              </h6>
            </td>
            <td>
              <SELECT name="bahini">
                <option value="" SELECT>--select--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>

              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="vivahit-bahini">
        <table>
          <tr>
            <td>
              <h6>विवाहित बहिणी:</h6>
            </td>
            <td>
              <SELECT name="vivahitbahini">
                <option value="" SELECT>--select--</option>
                <option value="0">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>

      <div class="vadhuvar-apeksha">
        <h4>वधूकडून/वराकडून अपेक्षा</h4>
      </div>
      <div class="vadhuvar-shikshan">
        <table>
          <tr>
            <td>
              <h6>शिक्षण:</h6>
            </td>
            <td>
              <input type="text" name="vadhuvarshikshan" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="nokari-vyavasay">
        <table>
          <tr>
            <td>
              <h6>नोकरी/व्यवसाय:</h6>
            </td>
            <td>
              <SELECT name="vadhuvarnokarivhyvasay">
                <option value="" SELECT>--select--</option>
                <option value="vyavasay">व्यवसाय</option>
                <option value="nokari">नोकरी</option>
                <option value="vishesh farak padat nahi">विशेष फरक पडत नाही </option>
                <option value="sarakari nokari">सरकारी नोकरी</option>
                <option value="vyavasat kinva nokari">व्यवसाय किंवा नोकरी</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="varshik-utpann">
        <table>
          <tr>
            <td>
              <h6>वार्षिक उत्पन्न:</h6>
            </td>
            <td>
              <SELECT name="vadhuvarvarshikutpann">
                <option value="" SELECT>--select--</option>
                <option value="1 parent"> १ लाख पर्यंत</option>
                <option value="2 te 4">२ लाख ते ४ लाख</option>
                <option value="4 te 6">४ लाख ते ६ लाख</option>
                <option value="6 te 8">६ लाख ते ८ लाख</option>
                <option value="8 te 10">8 लाख ते 10 लाख</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <div class="vayatil-anter">
        <table>
          <tr>
            <td>
              <h6>वयातील अंतर:</h6>
            </td>
            <td>
              <SELECT name="vadhuvarvayatilantar">
                <option value="" SELECT>--select--</option>
                <option value="1 paryant"> १ वर्षापर्यंत </option>
                <option value="2 paryant">२ वर्षापर्यंत </option>
                <option value="3 paryant">3 वर्षापर्यंत</option>
                <option value="4 paryant">4 वर्षापर्यंत</option>
                <option value="5 paryant">5 वर्षापर्यंत</option>
                <option value="6 paryant">6 वर्षापर्यंत</option>
                <option value="7 paryant">7 वर्षापर्यंत</option>
                <option value="8 paryant">8 वर्षापर्यंत</option>
                <option value="9 paryant">9 वर्षापर्यंत</option>
                <option value="10 paryant">10 वर्षापर्यंत</option>
                <option value="vishesh farak padat nhi">विशेष फरक पडत नाही</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>

      <div class="shahar-pradhanyata">
        <table>
          <tr>
            <td>
              <h6>शहर प्राधान्यता:</h6>
            </td>
            <td>
              <input type="text" name="vadhuvarshaharpradhanyata" value="">
            </td>
          </tr>
        </table>
      </div>
      <div class="apeksha-mangal">
        <table>
          <tr>
            <td>
              <h6>मंगळ:</h6>
            </td>
            <td>
              <SELECT name="vadhuvarmangal">
                <option value="" SELECT>--select--</option>
                <option value="chalel">चालेल</option>
                <option value="nako">नको</option>
                <option value="vishesh farak padat nahi">विशेष फरक पडत नाह</option>
              </SELECT>
            </td>
          </tr>
        </table>
      </div>
      <form class="" action="send-mail.php" method="post">
        <button type="submit" name="submit" class="btt btn-lg btn-outline bg-warning" name="submit">Submit</button>
      </form>

    </div>
      </form>



</body>

</html>
