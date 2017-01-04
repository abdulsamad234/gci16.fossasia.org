<div class = "row">
	
	<div class = "col-xs-12">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-th-list"></span> Edit Results</h4>
			</div>
			<div class = "panel-bodyy panel-body">
				<?php if(isset($message)):?>
				    <p class = "text-success"><?= $message?></p>
				<?php endif?>
				<form action = "edit_results.php" method = "post">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th style = "text-align: center;">ID</th>
							<th style = "text-align: center;">Admission Number</th>
							<th style = "text-align: center;">Class</th>
							<th style = "text-align: center;">Arm</th>
							<th style = "text-align: center;">Term</th>
							<th style = "text-align: center;">Year</th>
							<th style = "text-align: center;">Mathematics</th>
							<th style = "text-align: center;">English</th>
							<th style = "text-align: center;">Agricultural Science</th>
							<th style = "text-align: center;">Biology</th>
							<th style = "text-align: center;">Chemistry</th>
							<th style = "text-align: center;">Physics</th>
							<th style = "text-align: center;">Geography</th>
							<th style = "text-align: center;">Further Math</th>
						</tr>	
					</thead>
					<tbody>
						<?php foreach($positions as $position) :?>
							<tr>
								<td><?= $position["id"]?></td>
								<td>
                                	<input autocomplete="off" class="form-control" name="admission_number<?=$position['id']?>" value =<?= $position["admission_number"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="class<?=$position['id']?>" value =<?= $position["class"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="arm<?=$position['id']?>" value =<?= $position["arm"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="term<?=$position['id']?>" value =<?= $position["term"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="year<?=$position['id']?>" value =<?= $position["year"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="mathematics<?=$position['id']?>" value =<?= $position["mathematics"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="english<?=$position['id']?>" value =<?= $position["english"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="agriculture<?=$position['id']?>" value =<?= $position["agriculture"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="biology<?=$position['id']?>" value =<?= $position["biology"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="chemistry<?=$position['id']?>" value =<?= $position["chemistry"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="physics<?=$position['id']?>" value =<?= $position["physics"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="geography<?=$position['id']?>" value =<?= $position["geography"]?> type="text" required/>
                            	</td>
                            	<td>
                                	<input autocomplete="off" class="form-control" name="further_math<?=$position['id']?>" value =<?= $position["further_math"]?> type="text" required/>
                            	</td>
							</tr>
						<?php endforeach;?>
					</tbody>
				</table>
				<button class="action-btn btn btn-default" type="submit" name = "submit">
                        <span aria-hidden="true" class="glyphicon glyphicon-log-in"></span>
                        Save
                    </button>
				</form>
			</div>
		</div>
	</div>
</div>