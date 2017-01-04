
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
				    <p class = "text-info"><strong>Instructions:</strong> Please open Microsoft excel, and enter the results in this order: admission number, class, arm, term, year, 
				    mathematics, english, agricultural science, biology, chemistry, physics, geography, Further Math.<br>Note that:<br>
				        - Term should be written as number(e.g. Second trm should be written as 2)<br>
				        - Class, e.g sss 2 should be written as sss_2<br>
				        - Arm should be written in small letter<br>
				        Download an example <a href = "../downloads/results.csv">here</a>
				    </p>
                    <form class = "form-inline" action="upload_results.php" enctype = "multipart/form-data" method="post">
                        
                            <div style = "margin: 2px;" class="form-group">
                                <input autocomplete="off" class="form-control" name="file" placeholder="Upload Results" type="file" required/>
                            </div>
                            
                            <div style = "margin: 2px;" class="form-group">
                                <button class="btn btn-default" type="submit" name = "submit">
                                    <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                                    Upload
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
			</div>
			<div id = "col_3" class = "col-xs-4">
		
			</div>
	
		</div>