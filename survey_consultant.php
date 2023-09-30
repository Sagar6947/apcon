	<?php
	include 'config.php';
	$id = $_POST['id'];
	$output = '';
	$select_category = $con->query("SELECT * FROM `chief_survey_service` WHERE `id`  = '" . $id . "' ");






	while ($select_category_row = $select_category->fetch_assoc()) {

		$output .= '
		 <h2 class="modal-title" style="color:white">' . $select_category_row["name"] . '</h2>
		 <hr style="border-top:1px solid white">
		<p style="text-align:justify;color:white;">' . strip_tags($select_category_row["description"] ). '</p>
		
		';
	}

	$output .= '
	</tbody>
	</table>
	</div>

	</div>

	</div>

	</div>

	</div>
	</section>


	';



	echo $output;
	?>