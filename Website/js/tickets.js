$(function() 
{
	$('#formSelector').change(function()
	{
		$('.formsShow').hide();
		$('#' + $(this).val()).show();
	});
});
