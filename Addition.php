<?php
  $conn = mysqli_connect('127.0.0.1','root','') or die(mysqli_error());
  $db_sel = mysqli_select_db($conn,'inventory') or die(mysqli_error());
  session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Addition</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Addition.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/ansal_university-removebg-preview.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Addition">
    <meta property="og:type" content="website">
    <script>
      function alert_on_suc() {
        alert("Item added!");
      }
    </script>
  </head>
  <body class="u-body u-xl-mode">
  <?php
      if(isset($_POST['submit1']))
      {
        $item_name = $_POST['item_name'];
        $item_count = $_POST['item_count'];
        $bar_code = $_POST['bar_code'];
        $_SESSION['item_count'] = $item_count;
        #echo $item_name;
        #echo $item_count;
        #echo $bar_code;
        $sql = "INSERT INTO item_master SET
          item_name = '$item_name',
          item_count = '$item_count',
          bar_code = '$bar_code'
        ";
        #echo $sql;

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        #if($res == TRUE)
        #{
          #echo "yeeeeeeeee";
        #}
        #else
        #{
          #echo "neeeeeeeeeeeee";
        #}
      }
      $item_name = "null";
      $item_count = "null";
      $bar_code = "null";
    ?>
        <header class="u-black u-clearfix u-header u-header" id="sec-2a68"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="150" data-image-height="100">
          <img src="images/ansal_university-removebg-preview.png" class="u-logo-image u-logo-image-1">
        </a>
      </div></header>
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" id="sec-bca5" data-image-width="600" data-image-height="360">
      <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-form u-palette-5-base u-form-1">
          <form method="POST" class="u-clearfix u-form-spacing-27 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 31px;">
            <div class="u-form-group u-form-group-1">
              <label for="text-6eb0" class="u-label u-label-1">Name of Item</label>
              <input type="text" placeholder="Enter Item Name" id="text-6eb0" name="item_name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white">
            </div>
            <div class="u-form-group u-form-group-2">
              <label for="text-5069" class="u-label u-label-2">Number of Item</label>
              <input type="text" id="text-5069" name="item_count" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white" placeholder="Enter the number of item">
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-ebc0" class="u-label u-label-3">Item Code</label>
              <input type="text" placeholder="Enter item code" id="text-ebc0" name="bar_code" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-50 u-white">
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <br>
              <input onclick="alert_on_suc()" type="submit" value="ADD" name="submit1" class="u-active-white u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-white u-palette-2-base u-radius-50 u-text-active-palette-2-base u-text-body-alt-color u-text-hover-palette-2-base u-btn-1"/>

            </div>
            <div class="u-form-send-message u-form-send-success"> Item has been added. </div>
            <div class="u-form-send-error u-form-send-message"> Something went wrong please try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>
        <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-95df"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant">&copy; Rohan Yadav | Build version: 1.0.1 | Last Updated: <?php echo date("d-m-Y"); ?></p>
      </div></footer>
  </body>
</html>
