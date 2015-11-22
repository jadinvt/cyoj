$(document).ready(function() {
    
// click row to select checkbox    
  $('.table tr')
    .filter(':has(:checkbox:checked)')
    .addClass('table-selected')
    .end()
  .click(function(event) {
    if (event.target.type !== 'checkbox') {
      $(':checkbox', this).trigger('click');
    }
  })
    .find(':checkbox')
    .click(function(event) {
      $(this).parents('tr:first').toggleClass('table-selected');
    });  
    
// select all checkbox
    $('#selectAll').on('click',function(){
		if ($(this).is(':checked')) {
            $('.table tr')
                .addClass('table-selected')
			$('.chkbox').each(function(){
				this.checked = true;
			});
		}else{
			$('.chkbox').each(function(){
                $('.table tr')
                .removeClass('table-selected')
				this.checked = false;
			});
		}
	})

    $('#dataTables-customer').dataTable({
        "sDom": '<"row view-filter"<"col-sm-12"<"pull-left"l><"pull-right"f><"clearfix">>>t<"row view-pager"<"col-sm-12"<"text-center"ip>>>'
    });

        
});
