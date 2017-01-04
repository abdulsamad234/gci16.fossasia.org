
        <div class = "row">
            <div id = "col_1" class = "col-xs-4">
			</div>
			<div id = "main" class = "col-xs-4">
				<div id = "header" class = "panel panel-heading">
				   <h3>Add Result</h3>
				</div>
				<div  id = "body" class = "panel panel-body hi" layout:height = "wrap-content !important">
				    <?php if(isset($message)):?>
				        <p class = "text-success"><?= $message?></p>
				    <?php endif?>
                    <form class = "form-inline" action="add_result.php" method="post">
                        <fieldset>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="admission_number" placeholder="Admission Number" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
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
                            <div style = "margin: 2px;" class="form-group">
                                <select name = "term" class = "form-control" required>
                                    <option value = "" selected>Select Term</optiion>
                                    <option value = "1">First Term</option>
                                    <option value = "2">Second Term</option>
                                    <option value = "3">Third Term</option>
                                </select>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
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
                            <div style = "margin: 2px;" class="form-group">
                                <select name = "arm" class = "form-control" required>
                                    <option value = "" selected>Select arm</option>
                                    <option value = "a">A</option>
                                    <option value = "b">B</option>
                                    <option value = "c">C</option>
                                </select>
                            </div><br>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="mathematics" placeholder="Mathematics" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="english" placeholder="English" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="physics" placeholder="Physics" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="chemistry" placeholder="Chemistry" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="agriculture" placeholder="Agricutural Science" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="biology" placeholder="Biology" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="geography" placeholder="Geography" type="text" required/>
                            </div>
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="further_math" placeholder="Further Math" type="text" required/>
                            </div>
                            
                            <div style = "margin: 2px;" class="form-group">
                                <button class="btn btn-default" type="submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                    Add Result
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
			</div>
			<div id = "col_3" class = "col-xs-4">
		
			</div>
	
		</div>