<?php $arr = array("Any","IT","Programming","Retail"); ?>
<body>
<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="lname">Job Type</label>
      </div>
      <div class="col-75">
        <select name="job-type">
        	 <option value="Full/Part_Time">Any</option>
        	 <option value="Full_Time">Full Time</option>
        	 <option value="Part_Time">Part Time</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Industry</label>
      </div>
      <div class="col-75">
        <select id="country" name="Industry">
        <?php

foreach ($array as $key=>$value) {
    if ($value == $row['scpe_grades_status'])
        echo '<option value="'.$value.'" selected>'.$key.'</option>';
    else
        echo '<option value="'.$value.'">'.$key.'</option>';

        
		}
		unset($value);
			?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</body>