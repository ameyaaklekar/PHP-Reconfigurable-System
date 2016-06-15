<?php
session_start();

class SampleClass1 {
	function samplemethod1() {
		echo '<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Type</th>
							</tr>
						</thead>
					</table>';
	}
}

class SampleClass2 {
	function samplemethod2() {
		echo '<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Type</th>
								<th>Employee Id</th>
							</tr>
						</thead>
					</table>';
	}
}

class SampleClass3 {
	function samplemethod3() {
		echo '<table class="table table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Order No</th>
								<th>Customer ID</th>
								<th>Employee ID</th>
							</tr>
						</thead>
					</table>';
	}
}

class SampleClass4 {
	function samplemethod4() {
		echo "This is a reconfigurable System Designed in PHP with AJAX.";
	}
}
?>
