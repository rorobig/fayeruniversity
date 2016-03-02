<img class="courses" src="img/courses.jpg" class="col-lg-3 col-xs-6 ">
<h3>Courses</h3>

<p>The type of training and/or courses that the university ICT Services offers vary greatly with regards to required entry level knowledge, content and degree of difficulty. 
The program of courses at the ICT Services focuses on three categories:</p>

<img src="img/books.jpg" class="img3">
<ul class="course1">
	<li>End users: these deal with, for example, Windows, Word, Excel, Internet etc.;
	</li>
	<li>Informatics courses for middle and top management personnel;</li>
	<li> Seminars/workshops for management boards and/or staff of institutions</li>


</ul>
<!-- 
<div class="row">
  	<div class="col-sm-4 fayer-img"> <a href="#"><img src="http://lorempixel.com/400/200"></a>

  </div>
 		<div class="col-sm-4 fayer-img"><img src="http://lorempixel.com/400/200">

  </div>
  		<div class="col-sm-4 fayer-img"><img src="http://lorempixel.com/400/200">
  </div>
</div>

<a href=""></a>
 -->
<br>
 <div class="row">
<div class="purple">
 <?php 
  if ($productExists) {
    while ($row = $selectProductQueryResult->fetch_assoc()) {
      echo '<div class="col-sm-6 col-md-3">
      <div class="thumbnail">';
      
      echo ' <img src="'.$row["image"].'">';
      echo '<div class="caption">';
      echo '<p>'.$row["p_desc"].'</p>';

      echo '<h3>'.$row["p_name"].'</h3>';
      echo '<p>$'.$row["p_price"].'</p>';
      echo '<p><a href="'.$row["link"].'.php" class="btn btn-primary" role="button">Add to Cart</a> </p>';
      echo '      </div>
        </div>
      </div>';
    }
  }else{
    echo "no prducts found";
  }


  ?>
  </div>
  
<!--   <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://lorempixel.com/400/300">
      <div class="caption">
      
        <h3>INTRODUCTION TO PROGRAMMING</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Buy Now</a></p>
      </div>
    </div>
  </div>
 -->



<!--   <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://lorempixel.com/400/300">
      <div class="caption">
      
        <h3>INTRODUCTION TO MS OUTLOOK</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Buy Now</a></p>
      </div>
    </div>
  </div> -->
<!--     <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://lorempixel.com/400/300">
      <div class="caption">

        <h3>EHTHICAL WRITING </h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Buy Now</a></p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-3">
    <div class="thumbnail">
      <img src="http://lorempixel.com/400/300">
      <div class="caption">

        <h3>INTRODUCTION TO JAVASCRIPT</h3>
        <p>...</p>
        <p><a href="#" class="btn btn-primary" role="button">Add to Cart</a> <a href="#" class="btn btn-default" role="button">Buy Now</a></p>
      </div>
    </div>
  </div>
 -->
</div>

