$("#edit1").click(function() {
    // get values
	var id1 = $("#id1").val();
    var ss1 = $("#ss1").val();
 
    // Add record
    $.post("edit.php", {
		id1: id1,
        ss1: ss1
    }, function (data, status) {
        // close the popup
		
        $("#editModal").modal("hide");
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
		$("#id1").val("");
        $("#ss1").val("");
        
    });
});
 

