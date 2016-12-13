$('document').ready(function(){
	$.ajax({
		type: "GET",
		url: "/categories",
		success: function(data){
			console.log(data);
			$.each(data, function(index, value) {   
			     $('#selectCategory').append($('<option>', { 
			        value: value.intCategoryID,
			        text : value.strCategoryName 
			    }));
			});

			$('select').material_select();
		},
		error: function(data){
			var toastContent = $('<span>Error Occured. </span>');
			Materialize.toast(toastContent, 1500,'red', 'edit');

		}
	});//ajax
});