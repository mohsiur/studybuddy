<?php
	include_once ("include/header.php");
?>

<div class="container">
	    <div class="row center">
	    	<form action="query/study_buddy.php" method = "post"class="row">
	      		<div class="col s12">
					<div class="input-field row center">
	          			<i class="material-icons prefix">account_circle</i>
	          			<input id="icon_prefix" type="text" class="validate" name="username">
	          			<label for="username">Username</label>
	        		</div>

					<div class="input-field col s3">
			   			<select name="course_name">
						    <option value="" disabled selected>Course</option>
						    <option value="CSE">CSE</option>
						    <option value="MTH">MTH</option>
						    <option value="EAS">EAS</option>
			    		</select>
			    		<label for="course_name">Course</label>
	        		</div>
					
	        		<div class="input-field col s3">
	          			<i class="material-icons prefix">class</i>
	          			<input id="icon_prefix" type="text" class="validate" name="course_id">
	          			<label for="course_id">Course</label>
	        		</div>

	        		<div class="input-field col s6">
			   			<select name="library">
						    <option value="" disabled selected>Where are you studying</option>
						    <option value="cpn">Capen</option>
						    <option value="lckwd">Lockwood</option>
						    <option value="hsl">Health and Sciences Library</option>
			    		</select>
			    		<label for="library">Library</label>
	        		</div>
	  			</div>
	  			<div class="row center">
			  		<button class="btn waves-effect waves-light" type="submit" value="submit">Find a Study Buddy
			    		<i class="material-icons right">group_work</i>
			  		</button>
	  			</div>
	    	</form>
	  	</div>
	  	
	</div>
	
	
<?php 
	include_once("include/footer.php");
?>