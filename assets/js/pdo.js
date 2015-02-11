$(document).ready(function(){
	$.ajax({
		url:"../connect.php",
		type:"post",
		success:function(response){
			console.log(response)
			$('#masage').html(response).css("background",'red')
			
		}
	})
})