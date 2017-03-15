$(function() {
	$("#estados").change(function(){
		var id = $(this).val();
		$.ajax({
			type: "POST",
			url: "exibe_cidade.php?id="+id,
			dataType: "text",
			success: function(res){
				$("#cidades").children(".cidades").remove();
				$("#cidades").append(res);
			}
		});
	});
});