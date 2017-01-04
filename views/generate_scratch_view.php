<div class = "row">
				<div id = "col_1" class = "col-xs-4">
				</div>
				  <div id = "main" class = "col-xs-4">
						<div id = "header" class = "panel panel-heading">
						   <h3>Generate Scratch cards</h3>
						</div>
						<div id = "body" class = "panel panel-body">
							<form  action = "generate_scratch.php" method="post">
								<fieldset>
								    <div class = "form-group">
								        <input type = "number" name = "amount" min = "1" max = "100" class = "form-control" required = "required">
								    </div>
								   <div class="form-group">
									   <button class="btn btn-default" type="submit">
										   <span aria-hidden="true" class="glyphicon glyphicon-lock"></span>
										   Generate
									   </button>
								   	</div>
								</fieldset>
							</form>
						</div>
				  </div>
				  <div id = "col_3" class = "col-xs-4">
					
				  </div>
				
			</div>