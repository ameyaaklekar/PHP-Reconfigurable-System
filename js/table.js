function getrowempmast(x) {
	var r = x.rowIndex;
	var s0 = document.getElementById("outputTable").rows[r].cells[0].innerHTML;
	var s1 = document.getElementById("outputTable").rows[r].cells[1].innerHTML;
  var s2 = document.getElementById("outputTable").rows[r].cells[2].innerHTML;
	var s3 = document.getElementById("outputTable").rows[r].cells[3].innerHTML;

	document.getElementById("eid").value = s0;
	document.getElementById("efname").value = s1;
	document.getElementById("elname").value = s2;
  if (s3 == "Salesperson") {
    document.getElementById('salesperson').checked = true;
  }
  if (s3 == "Other") {
    document.getElementById('others').checked = true;
  }

	employeeTable(s0);

}
function getrowcustmast(x) {
	var r = x.rowIndex;
	var s0 = document.getElementById("outputTable").rows[r].cells[0].innerHTML;
	var s1 = document.getElementById("outputTable").rows[r].cells[1].innerHTML;
  var s2 = document.getElementById("outputTable").rows[r].cells[2].innerHTML;
	var s3 = document.getElementById("outputTable").rows[r].cells[3].innerHTML;
	var s4 = document.getElementById("outputTable").rows[r].cells[4].innerHTML;
	document.getElementById("cid").value = s0;
	document.getElementById("cfname").value = s1;
	document.getElementById("clname").value = s2;
	document.getElementById("ceid").value = s4;
  if (s3 == "Cash") {
    document.getElementById('cash').checked = true;
  }
  if (s3 == "Credit") {
    document.getElementById('credit').checked = true;
  }
	customerTable(s4);
}

function getrowordmast(x) {
	var r = x.rowIndex;
	var s0 = document.getElementById("outputTable").rows[r].cells[0].innerHTML;
	var s1 = document.getElementById("outputTable").rows[r].cells[1].innerHTML;
  var s2 = document.getElementById("outputTable").rows[r].cells[2].innerHTML;
	document.getElementById("onum").value = s0;
	document.getElementById("ocid").value = s1;
	document.getElementById("oeid").value = s2;

	orderTable(s2,s1);
}
