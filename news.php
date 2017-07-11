<?php
$url='https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=top&apiKey=daa93da496754a118f73f75d45c10ce8';
$json=file_get_contents($url);
$array=json_decode($json,true);

//Times of India
/*echo $array['articles'][1]['description'].'<br>';
echo $array['articles'][1]['url'].'<br>';

echo "<br>";
echo $array['articles'][2]['title'].'<br>';
echo $array['articles'][2]['description'].'<br>';
echo $array['articles'][2]['url'].'<br>';

echo "<br>";
echo $array['articles'][3]['title'].'<br>';
echo $array['articles'][3]['description'].'<br>';
echo $array['articles'][3]['url'].'<br>';

echo "<br>";
echo $array['articles'][4]['title'].'<br>';
echo $array['articles'][4]['description'].'<br>';
echo $array['articles'][4]['url'].'<br>';*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>


<div class="container">

<div class="row">
    
<div class="col-lg-12">  
<!--Card-->
<div class="card fontclr" style="margin-top: 4em; background-color: #fff;">

    <!--Card content-->
    <div class="card-block">
        <!--Title-->
        <h4 class="card-title"><?php echo $array['articles'][1]['title'].'<br>'; ?></h4>
        <!--Text-->
        <hr>
        <p class="card-text"><?php echo $array['articles'][1]['description'].'<br>'; ?></p>
        <a href="<?php echo $array['articles'][1]['url']; ?>" class="btn btn-primary">ARTICLE</a>
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
</div>
</div>
</div>


<div class="container">

<div class="row">
  
<div class="col-lg-12">  
<!--Card-->
<div class="card" style=" margin-top: 4em; background-color: #2E2E2E;">

    <!--Card content-->
    <div class="card-block">
        <!--Title-->
        <h4 class="card-title"><?php echo $array['articles'][2]['title'].'<br>'; ?></h4>
        <!--Text-->
        <hr>
        <p class="card-text"><?php echo $array['articles'][2]['description'].'<br>'; ?></p>
        <a href="<?php echo  $array['articles'][2]['url']; ?>" class="btn btn-primary">ARTICLE</a>
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
</div>

</div>
<!--closing row-->

</div>
<!--closing container-->




<div class="container">

<div class="row">
    
<div class="col-lg-12">  
<!--Card-->
<div class="card" style="margin-top: 4em; background-color: #1F23EB;">

    <!--Card content-->
    <div class="card-block">
        <!--Title-->
        <h4 class="card-title"><?php echo $array['articles'][5]['title'].'<br>'; ?></h4>
        <!--Text-->
        <hr>
        <p class="card-text"><?php echo $array['articles'][5]['description'].'<br>'; ?></p>
        <a href="<?php echo $array['articles'][5]['url']; ?>" class="btn btn-primary">ARTICLE</a>
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
</div>

</div>
</div>



<div class="container">

<div class="row">

<div class="col-lg-12">
<!--Card-->
<div class="card" style="margin-top: 4em; margin-bottom: 4em; background-color: #CC0000;">

    <!--Card content-->
    <div class="card-block">
        <!--Title-->
        <h4 class="card-title"><?php echo $array['articles'][4]['title'].'<br>'; ?></h4>
        <!--Text-->
        <hr>
        <p class="card-text"><?php echo $array['articles'][4]['description'].'<br>'; ?></p>
        <hr>
        <a href="<?php echo $array['articles'][4]['url']; ?>" class="btn btn-primary">ARTICLE</a>
    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
</div>    

</div>
<!--closing row-->

</div>
<!--closing container-->




    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>
