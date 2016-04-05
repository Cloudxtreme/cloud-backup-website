<?php include('header.php'); ?>
<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="img/3.jpg" alt="Chania" width="1200" height="279">
      </div>

      <div class="item">
        <img src="img/4.jpg" alt="Chania" width="1200" height="279">
      </div>
    
      <div class="item">
        <img src="img/3.jpg" alt="Flower" width="1200" height="279">
      </div>

      <div class="item">
        <img src="img/4.jpg" alt="Flower" width="1200" height="279">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    <br><br>
    <div align="Center" style="margin:10px" class="row">
      <div class="col-md-4">
        <div class="well">
          <h4 class="text-danger"> Fingerprint Security </h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
          <h4 class="text-success"> Cloud Backup </h4>
        </div>
      </div>
      <div class="col-md-4">
        <div class="well">
          <h4 class="text-primary"> Android App </h4>
        </div>
      </div>
      
    </div><!--/row-->    

  </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>