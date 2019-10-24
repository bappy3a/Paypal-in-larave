$(function(){
	$("#addnewproduct").on("submit", function(e){
		e.preventDefault();
		var form = $(this);
		var url  = form.attr("action");
		var type = form.attr("method");
		var data = form.serialize();

		$.ajax({
			url: url,
			data: data,
			type: type,
			dataType:"JSON",
			beforeSend: function(){
				$(".load").fadeIn();
			},
			success:function(data){
				if (data == "success") {
					$("#exampleModal").modal("hide");
					swal("Great", "Successfully data insert", "success");
					form[0].reset();
					return getalldata();
				}
			},
			complete:function() {
				$(".load").fadeOut();
			},
		});

	});

	function getalldata() {
		var url = $("#getalldata").data("url");

		$.ajax({
			url: url,
			type: "get",
			dataType:"html",
			success:function (data) {
				$("#ShowAllDataAjax").html(data);
			}
		})
	};

});

/*===================Updata data=================================*/
function doSelect(el){
		el.form.submit();
		el.preventDefault();
		var form = $(this);
		var url  = form.attr("action");
		var type = form.attr("method");
		var data = form.serialize();

		$.ajax({
			url: url,
			data: data,
			type: type,
			dataType:"JSON",
			beforeSend: function(){
				$(".load").fadeIn();
			},
			success:function(data){
				if (data == "success") {
					$("#exampleModal").modal("hide");
					swal("Great", "Successfully data insert", "success");
					form[0].reset();
					return getalldata();
				}
			},
			complete:function() {
				$(".load").fadeOut();
			},
		});
};