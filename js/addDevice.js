$("#add").click(function() {
    // get values
    var dn = $("#dn").val();
    var temp = $("#temp").val();
	var hum = $("#hum").val();
    var pre = $("#pre").val();
	//var date = $("#date").val();
 
    // Add record
    $.post("add.php", {
        dn: dn,
        temp: temp,
		hum: hum,
		pre: pre
		//date: date
    }, function (data, status) {
        // close the popup
		console.log(data)
		//$(".container").load("index.php");
        $("#addModal").modal("hide");
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        $("#dn").val("");
        $("#temp").val("");
		$("#hum").val("");
        $("#pre").val("");
		//$("#date").val("");
    });
});
 

