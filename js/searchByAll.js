$("#searchByAll").click(function() {
    // get values
   var dateFrom = $("#dateFrom").val();
   var dateTo = $("#dateTo").val();
 
    // Add record
    $.get("searchByAll.php", {
        dateFrom: dateFrom,
        dateTo: dateTo
    }, function (data, status) {
        // close the popup
        $(".Table").html(data);
		console.log(data);
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
        //$("#s1").val("");
        //$("#s2").val("");
    });
	
});
 

