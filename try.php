<!DOCTYPE html>
<html>
   <head>
      <title>DIFFEREENCE COMPARATOR</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   </head>
   <body>
      <div class="head text-center">
         <div class="heading text-center bg-danger text-white">
            <h2><i class="fas fa-tasks"></i> Text Compare...!</h2>
         </div>
         <form class="colrow"  action="" method="POST">
            <div class="row justify-content-center">
               <div class="col-lg-4 p-3 m-2 text-center">
                  The Original Text
                  <textarea id="original_text" name="original_text" rows="5" cols="30" class="form-control p-3 border border-primary" placeholder="Type here"><?php echo $_POST['original_text']; ?></textarea>
               </div>
               <div class="col-lg-4 p-3 m-2 text-center">
                  The Comparison Text
                  <textarea id="comparetext" name="comparetext" rows="5" cols="30"  class="form-control p-3 border border-primary" placeholder="Type here"><?php echo $_POST['comparetext']; ?></textarea>
               </div>
            </div>
            <br>
            <div class="buttons">
               <input type="submit" id="btn_submit" class="btn btn-success" name=compare_submit value="submit">
               <button id="reset_btn" type="reset" value="reset" class="btn btn-warning" onclick="window.location.href='try.php'">Reset<i class="fas fa-sync-alt"></i></button>
            </div>
         </form>
      </div>
      <br>
      <?php 
         if ($_POST['compare_submit']){
         ?>
      <div id="result" class="result">
      <div class="result text-center bg-success text-white">
         <h3>Result</h3>
      </div>
      <?php
         $original = $_POST['original_text'];
         $compare = $_POST['comparetext'];
         
         if(isset($original) && isset($compare)) {
         
             if(($original)==($compare)) { 
                 ?>
      <div class="row justify-content-center">
         <div class="col-lg-4 p-3 m-2 text-center">
            The Original Text
            <textarea id="result_original_text" style="color:green;" name="result_original_text" rows="5" cols="30"  class="form-control p-3 border border-primary"><?php echo $_POST['original_text']; ?></textarea>
            <p style="color:green;">matched</p>
         </div>
         <div class="col-lg-4 p-3 m-2 text-center">
            The comparison Text
            <textarea id="equal"  style="color:green;" name="result_comp_text" rows="5" cols="30"  class="form-control p-3 border border-primary" ><?php echo $original; ?></textarea>
            <p style="color:green;">matched</p>
         </div>
         <?php
            }
            else{
                ?>
         <div class="row justify-content-center">
            <div class="col-lg-4 p-3 m-2 text-center">
               The Original Text
               <textarea id="result_original_text" style="color:blue;" name="result_original_text" rows="5" cols="30"  class="form-control p-3 border border-primary"><?php echo $_POST['original_text']; ?></textarea>
               <p style="color:blue;">unmatched</p>
            </div>
            <div class="col-lg-4 p-3 m-2 text-center">
               The comparison Text
               <textarea id="not equal" style="color:red;"  name="result_comp_text" rows="5" cols="30"  class="form-control p-3 border border-primary"><?php echo $compare; ?></textarea>
               <p style="color:red;">unmatched</p>
            </div>
            <?php
               }
               
               }
               
               }
               ?>
         </div>
      </div>
      </form>
   </body>
</html>