$("#edit2").click(function() {
    // get values
	var id2 = $("#id2").val();
    var ss2 = $("#ss2").val();
 
    // Add record
    $.post("edit.php", {
		id2: id2,
        ss2: ss2
    }, function (data, status) {
        // close the popup
		
        $("#editModal1").modal("hide");
		//$("#records_content").load();
 
        // read records again
        //readRecords();
 
        // clear fields from the popup
		$("#id2").val("");
        $("#ss2").val("");
        
    });
});
 

