$(document).ready(function() {
     $('.like, .dislike').click(function() {
     	var action = $(this).attr('class');
     	var post_id = $(this).parent().parent().parent().find("#post_id").val();
     	$.ajax({
               url: 'check-session.php',
     		method: 'post',
     		success: function(data){
     			if(data != '') {
     				$.ajax({
     					url: 'update-choice.php',
     					method: 'post',
     					data:{action:action, post_id:post_id},
     					success: function(resp){
     						resp = $.trim(resp);
     						console.log(resp);
     						if(resp != '') {
     							resp = resp.split('|');
     							$('form#'+post_id+' .like .counter').html(resp[0]);
     							$('form#'+post_id+' .dislike .counter').html(resp[1]);
     						}
     					}
     				});
     			} else {
     				$('#popUpWindow').modal('show');
     			}
     		},
     	});
     });


     $('button.login').click(function() {
     	$.ajax({
     		url: 'login.php',
     		method: 'POST',
     		data: {username:$('#username').val(), password:$('#password').val()},
     		success: function(resp) {
     			resp = $.trim(resp);
     			if(resp == "loggedin") {
     				$('#popUpWindow').modal('hide');
                         $('.logout').show();
     			} else {
                         $('.txt-msg').html(resp);
                    }
     		}
     	});
     });

});