<div class = "row">
	<div class = "col-xs-3">
		
	</div>
	<div class = "col-xs-6">
		<div class = "panel paneler">
			<div class = "panel-header panel-heading">
				<h4 id = "pane_head"><span class = "glyphicon glyphicon-th-list"></span> Result For <?=$admission_number?>, <?=$year?>, <?=$class?>, <?=$term?></h4>
			</div>
			<div class = "panel-bodyy panel-body">
				<table class = "table table-bordered table-hover">
					<thead>
						<tr>
							<th style = "text-align: center;">Subject</th>
							<th style = "text-align: center;">Score</th>
						</tr>	
					</thead>
					<tbody>
						<?php
							foreach($positions as $position){
								print("<tr>");
									print("<td>Mathematics</td>");
									print("<td>".$position["mathematics"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>English</td>");
									print("<td>".$position["english"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Physics</td>");
									print("<td>".$position["physics"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Chemistry</td>");
									print("<td>".$position["chemistry"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Biology</td>");
									print("<td>".$position["biology"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Agricultural Science</td>");
									print("<td>".$position["agriculture"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Further Math</td>");
									print("<td>".$position["further_math"]."</td>");
								print("</tr>");
								print("<tr>");
									print("<td>Geography</td>");
									print("<td>".$position["geography"]."</td>");
								print("</tr>");
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class = "col-xs-3">
		
	</div>
</div>