var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#pdf').click(function () {
	doc.setFontSize(25)
    doc.text(35, 25, 'Pradion Technology');
	
	
    doc.fromHTML($('.records_content').html(), 20, 20, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('sample-file.pdf');
});
