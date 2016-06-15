function jax(c) {
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			res = xmlhttp.responseText;
			document.getElementById("output").innerHTML = res;
		}
	}
	xmlhttp.open("POST","controller/Controller.php");
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(c);
}

function tableJax(c) {
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("POST","controller/Controller.php");
	xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	xmlhttp.send(c);
}


function employee() {
		jax("menu=employee");
}

function viewAllEmployees(){
	jax("menu=viewAllEmployees");
}

function customer() {
		jax("menu=customer");
}

function viewAllCustomers(){
		jax("menu=viewAllCustomers");
}

function orders() {
		jax("menu=orders");
}

function viewAllOrders(){
	jax("menu=viewAllOrders");
}

function about() {
	jax("menu=about");
}

function addEmployee(){
	var efname = document.getElementsByName("efname")[0].value;
	var elname = document.getElementsByName("elname")[0].value;
	var radios = document.getElementsByName("etype");
	var etype = "";
	for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            etype = radios[i].value;
        }
    }
		if (efname != "" && elname != "" && etype != "") {
			jax("menu=addEmployee&efname="+efname+"&elname="+elname+"&etype="+etype);
		}
}

function deleteEmployee(){
	var eid = document.getElementsByName("eid")[0].value;
	if (eid != "") {
		jax("menu=deleteEmployee&eid="+eid);
	}

}

function updateEmployee(){
	var eid = document.getElementsByName("eid")[0].value;
	var efname = document.getElementsByName("efname")[0].value;
	var elname = document.getElementsByName("elname")[0].value;
	var radios = document.getElementsByName("etype");
	var etype = "";
	for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            etype = radios[i].value;
        }
    }
	if (eid != "" && efname != "" && elname != "" && etype != "") {
		jax("menu=updateEmployee&eid="+eid+"&efname="+efname+"&elname="+elname+"&etype="+etype);
	}

}

function searchEmployee(){
	var eid = document.getElementsByName("eid")[0].value;
	if (eid != "") {
		jax("menu=searchEmployee&eid="+eid);
	}
}

function addCustomer(){
	var cfname = document.getElementsByName("cfname")[0].value;
	var clname = document.getElementsByName("clname")[0].value;
	var ceid = document.getElementsByName("ceid")[0].value;
	var radios = document.getElementsByName("ctype");
	var ctype = "";
	for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            ctype = radios[i].value;
        }
    }
		if (cfname != "" && clname != "" && ceid !="" && ctype != "") {
			jax("menu=addCustomer&cfname="+cfname+"&clname="+clname+"&ceid="+ceid+"&ctype="+ctype);
		}
}

function deleteCustomer(){
	var cid = document.getElementsByName("cid")[0].value;
	if (cid != "") {
		jax("menu=deleteCustomer&cid="+cid);
	}
}

function updateCustomer(){
	var cid = document.getElementsByName("cid")[0].value;
	var cfname = document.getElementsByName("cfname")[0].value;
	var clname = document.getElementsByName("clname")[0].value;
	var ceid = document.getElementsByName("ceid")[0].value;
	var radios = document.getElementsByName("ctype");
	var ctype = "";
	for( i = 0; i < radios.length; i++ ) {
        if( radios[i].checked ) {
            ctype = radios[i].value;
        }
    }
	if (cid != "" && cfname != "" && clname != "" && ceid !="" && ctype != "") {
		jax("menu=updateCustomer&cid="+cid+"&cfname="+cfname+"&clname="+clname+"&ceid="+ceid+"&ctype="+ctype);
	}
}

function searchCustomer(){
	var cid = document.getElementsByName("cid")[0].value;
	if (cid != "") {
		jax("menu=searchCustomer&cid="+cid);
	}
}

function addOrder(){
	var ocid = document.getElementsByName("ocid")[0].value;
	var oeid = document.getElementsByName("oeid")[0].value;
	if (ocid != "" && oeid != "") {
		jax("menu=addOrder&ocid="+ocid+"&oeid="+oeid);
	}
}

function deleteOrder(){
	var onum = document.getElementsByName("onum")[0].value;
	if (onum != "") {
		jax("menu=deleteOrder&onum="+onum);
	}
}

function updateOrder(){
	var onum = document.getElementsByName("onum")[0].value;
	var ocid = document.getElementsByName("ocid")[0].value;
	var oeid = document.getElementsByName("oeid")[0].value;

	if (ocid != "" && oeid != "") {
		jax("menu=updateOrder&onum="+onum+"&ocid="+ocid+"&oeid="+oeid);
	}
}
function searchOrder(){
	var onum = document.getElementsByName("onum")[0].value;
	if (onum != "") {
		jax("menu=searchOrder&onum="+onum);
	}
}

function employeeTable(eid){
	tableJax("menu=empTable&eid="+eid);
}

function customerTable(eid){
	tableJax("menu=custTable&eid="+eid);
}

function orderTable(eid,cid){
	tableJax("menu=orderTable&eid="+eid+"&cid="+cid);
}
