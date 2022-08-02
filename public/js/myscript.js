function modechange (elem){
	if(elem.value == ""){
		document.getElementById('month').style.display = 'none';
		document.getElementById('quat').style.display = 'none';
		document.getElementById('helf').style.display = 'none';
		document.getElementById('year').style.display = 'none';
	}

	if(elem.value == "mnth"){
		document.getElementById('month').style.display = 'block';
		document.getElementById('quat').style.display = 'none';
		document.getElementById('helf').style.display = 'none';
		document.getElementById('year').style.display = 'none';
	}
	if(elem.value == "qutr"){
		document.getElementById('month').style.display = 'none';
		document.getElementById('quat').style.display = 'block';
		document.getElementById('helf').style.display = 'none';
		document.getElementById('year').style.display = 'none';
	}
	if(elem.value == "helf"){
		document.getElementById('month').style.display = 'none';
		document.getElementById('quat').style.display = 'none';
		document.getElementById('helf').style.display = 'block';
		document.getElementById('year').style.display = 'none';
	}
	if(elem.value == "year"){
		document.getElementById('month').style.display = 'none';
		document.getElementById('quat').style.display = 'none';
		document.getElementById('helf').style.display = 'none';
		document.getElementById('year').style.display = 'block';
	}

}

////////////////////////////////////
var tableToExcel = (function() {
var uri = 'data:application/vnd.ms-excel;base64,'
, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table><caption>Hello</caption>{table}</table></body></html>'
, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
return function(table, name, filename, mode) {
template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><div><h3>ລາຍງານຈາກບັນດາທະນາຄານ</h3><h4>ຮູບແບບ:​ ' + mode + '</h4></div><table>{table}</table></body></html>';
if (!table.nodeType) table = document.getElementById(table)
var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
//window.location.href = uri + base64(format(template, ctx))
document.getElementById("dlink").href = uri + base64(format(template, ctx));
document.getElementById("dlink").download = filename;
}
})()

////////////////////////////////////
var tableToExcel1 = (function() {
var uri = 'data:application/vnd.ms-excel;base64,'
, template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table><caption>Hello</caption>{table}</table></body></html>'
, base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
, format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
return function(table, name, filename, mode) {
template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><div><h3>ລາຍງານຈາກບັນດາສາຂາ</h3><h4>ຮູບແບບ:​ ' + mode + '</h4></div><table>{table}</table></body></html>';
if (!table.nodeType) table = document.getElementById(table)
var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
//window.location.href = uri + base64(format(template, ctx))
document.getElementById("dlink").href = uri + base64(format(template, ctx));
document.getElementById("dlink").download = filename;
}
})()
