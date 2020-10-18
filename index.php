<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title>iCorona - let's Discuss on Covid19</title>
</head>
<body>
  <?php include "includes/_header.php"; ?>
  <!-- slider starts from here -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/2400x700/?corona,Symptoms" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/2400x700/?disease,corona" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/2400x700/?corona,mask" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- slider end here -->
  
  <!-- category container start from here -->
  <div class="container">
    <div class="text-center my-4">
      <h3>iCorona - Browse categories on Corona</h3>
    </div>
    <div class="row my-4">
      <!-- fetch all categories  -->
      <?php include "includes/_dbconnect.php"; ?>
      <?php 
        $sql = "SELECT * FROM `categories`";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $des = $row['category_description'];
          echo '
          <div class="col-md-4  my-3">
            <div class="card" style="width: 18rem;">
              <img src="https://source.unsplash.com/500x300/?'.$cat.',corona" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="threadlist.php?catid='.$id.'">' . $cat . '</a></h5>
                  <p class="card-text">'.substr($des, 0 , 80).'...</p>
                  <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View Threads</a>
                </div>
            </div>
          </div>
          ';
        }    
      ?>
    </div>
  </div>
  <?php include "includes/_footer.php"; ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>

</body>

</html>