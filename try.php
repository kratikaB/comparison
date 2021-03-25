<!DOCTYPE html>
<html>
<head>
	<title>DIFFEREENCE COMPARATOR</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
          <?php 
               if ($_POST['compare_submit']) 
                {
                    $original = $_POST['original_text'];
                    $compare = $_POST['comparetext'];

                    if(isset($original) && isset($compare)) {
                        if(($orinial)==($compare))
                        {
                            echo "text are same";
                        }
                    else{
                        echo "text does not match";
                    }

                    }
                    
                }
                 else{
        ?>
     <div class="head text-center">
		<div class="heading text-center bg-danger text-white">
			<h2><i class="fas fa-tasks"></i> Text Compare...!</h2>
        </div>
    	<form class="colrow"  action="" method="POST">
    		<div class="row justify-content-center">
    			<div class="col-lg-4 p-3 m-2">
    			     The Original Text
    				<textarea id="original_text" name="original_text" rows="5" cols="30" class="form-control p-3 border border-primary" placeholder="Type here"></textarea>
            	</div>
    			<div class="col-lg-4 p-3 m-2">
    			     The Comparison Text
    				<textarea id="comparetext" name="comparetext" rows="5" cols="30"  class="form-control p-3 border border-primary" placeholder="Type here"></textarea>
            	</div>
         	</div>
        	 <br>
		        <div class="buttons">
		            <input type="submit" id="btn_submit" class="btn btn-success" name=compare_submit>
		            <button id="reset_btn" type="reset"  class="btn btn-warning">Reset<i class="fas fa-sync-alt"></i></button>
		        </div>      
        </form>
    </div>
   <br>
        <div id="result" class="result"> 
            <div class="result text-center bg-success text-white">
                <h3>Result</h3>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 p-3 m-2">
                     The Original Text
                  <textarea id="result_original_text" name="result_original_text" rows="5" cols="30"  class="form-control p-3 border border-primary"></textarea>
                </div>
                <div class="col-lg-4 p-3 m-2">
                    The Comparison Text
                  <textarea id="result_comp_text" name="result_comp_text" rows="5" cols="30" class="form-control p-3 border border-primary" ></textarea>
                </div>
            </div> 
        </div>
    </div>
<?php } ?>
</body>

</html>