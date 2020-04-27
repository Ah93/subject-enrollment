$("#searchBtn1").click(function() {
    // get values
   var deviceName = $("#deviceName").val();
   var dateFrom = $("#dateFrom").val();
   var dateTo = $("#dateTo").val();
 
    // Add record
    $.get("getReportName.php", {
		deviceName: deviceName,
        dateFrom: dateFrom,
        dateTo: dateTo
    }, function (data, status) {
        // close the popup
        $(".records_content").html(data);
		console.log(data);
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        //$("#s1").val("");
        //$("#s2").val("");
    });
});
 

