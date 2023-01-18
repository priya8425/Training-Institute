<?php 
    include("_includes/config.php");
    if(isset($_POST['submit']))
    {
       
        $video = $_FILES['video']['name'];
        $tmp_name = $_FILES['video']['tmp_name'];
        //$img=file_get_contents($tmp_name);
        $path = "dist/img/".$video;
        $videon = file_get_contents($_FILES['video']['tmp_name']);
       // move_uploaded_file($tmp_name,$path);
        $video_blob = $_POST['video_blob'];
        $query = "INSERT INTO `demo`(`video`,`video_blob`) VALUES ('$video','$videon')";
        if (mysqli_query($conn, $query)){
          echo "<script> alert ('New record has been added successfully !');window.location='video.php'</script>";
       } else {
            echo"error  ".mysqli_error($conn);
          echo "<script> alert ('connection failed !');</script>";
       }
    }
?>
<!DOCTYPE html>
<html>
<body>

<p>Click the button to create a VIDEO element with controls that will play a movie in a .mp3 or .ogg file format (depending on browser support).</p>
                                <form method="post" enctype="multipart/form-data">
                                    
                                        
                                         
                                    <div class="row">
                                         <div class="col-md-6">

                                            <div class="form-group">
                                            <label>Video</label><span style="color:red;"></span>
                                            <input type="file" name="video" class="form-control">
                                            </div>
                                            <!-- /.form-group -->


                                            <!-- /.form-group -->
                                        </div>
                                    
                                        <div class="col-md-12 mb-4">
                                       
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Blob*</label>
                                              <input type="text" id="form3Example1q" placeholder="Enter Your Name"  name="video_blob"  class="form-control" />
                                            </div>
                                            
                                        </div>
                                        
                                      
                                    </div>

                                    <button type="submit" name="submit" class="btn btn-danger btn-lg mb-1">Submit</button>

                                </form>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  var x = document.createElement("VIDEO");

  if (x.canPlayType("video/mp4")) {
    x.setAttribute("src","img/nature.mp4");
  }

  x.setAttribute("width", "320");
  x.setAttribute("height", "240");
  x.setAttribute("controls", "controls");
  x.setAttribute("controlsList","nodownload")
  document.body.appendChild(x);
}
</script>

</body>
</html>