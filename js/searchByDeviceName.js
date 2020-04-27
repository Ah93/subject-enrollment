$("#searchByDevice").click(function() {
    // get values
   var deviceName = $("#deviceName").val();
   var dateFrom = $("#dateFrom1").val();
   var dateTo = $("#dateTo1").val();
  
    // Add record
    $.get("test.php", {
		deviceName: deviceName,
        dateFrom: dateFrom1,
        dateTo: dateTo1
    }, function (data, status) {
        // close the popup
        //$(".Table").html(data);
		console.log(data);
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        //$("#s1").val("");
        //$("#s2").val("");
    });
	
});
 

