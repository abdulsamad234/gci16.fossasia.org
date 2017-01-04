<!DOCTYPE html>
<html>
    <head>
        <title>Check Your Result</title>
        <link href = "css/bootstrap.min.css" rel = "stylesheet" type = "text/css">
        <link href = "css/register_style.css" rel = "stylesheet" type = "text/css">
    </head>
    <body>
        <div class = "row">
            <div id = "col_1" class = "col-xs-4">
				<footer id = "foot" style = "font-size: 13px; float: left;">&#169; 2016, Abdulsamad Aliyu</footer>
			</div>
			<div id = "main" class = "col-xs-4">
				<div id = "header" class = "panel panel-heading">
				   <h3>Check Your Result</h3>
				   <p class = "text-primary"><a href = "student_home.php">HomePage</a></p>
				</div>
				<div id = "body" class = "panel panel-body" layout:height = "wrap-content !important">
				    
                    <form class = "form-inline" action="check_result.php" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="admission_number" placeholder="Admission Number" type="text" required/>
                            </div>
                            <div class="form-group">
                                <select autocomplete="off" id = "selectElementId" class="form-control" name="year">
                                    <option value = "" selected>Select Year</option>
                                </select>
                            </div>
                            <script>
                                var min = 1992,
                                max = 2021,
                                select = document.getElementById('selectElementId');
                            
                                for (var i = min; i<=max; i++){
                                   var opt = document.createElement('option');
                                   opt.value = i;
                                   opt.innerHTML = i;
                                   select.appendChild(opt);
                                }
                            </script>
                            <div class="form-group">
                                <select name = "term" class = "form-control" required>
                                    <option value = "" selected>Select Term</optiion>
                                    <option value = "1">First Term</option>
                                    <option value = "2">Second Term</option>
                                    <option value = "3">Third Term</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="pin" placeholder="Pin" type="text" required/>
                            </div>
                            <div class="form-group">
                                <input autocomplete="off" class="form-control" name="serial" placeholder="Serial Number" type="text" required/>
                            </div>
                            <div class="form-group">
                                <select name = "class" class = "form-control" required>
                                    <option value = "" selected>Select Class</optiion>
                                    <option value = "jss_1">JSS 1</option>
                                    <option value = "jss_2">JSS 2</option>
                                    <option value = "jss_3">JSS 3</option>
                                    <option value = "sss_1">SSS 1</option>
                                    <option value = "sss_2">SSS 2</option>
                                    <option value = "sss_3">SSS 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select name = "arm" class = "form-control" required>
                                    <option value = "" selected>Select arm</option>
                                    <option value = "a">A</option>
                                    <option value = "b">B</option>
                                    <option value = "c">C</option>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                    Check Result
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
			</div>
			<div id = "col_3" class = "col-xs-4">
		
			</div>
	
		</div>
    </body>
</html>
