

(function($){

	/* ======================= Login ======================= */

	$('#signinButton').click(function(){
		var user = $('#user').val();
		var pass = $('#pass').val();
		console.log("This notifies you if the password is working");
		$.ajax({
			url:'xhr/login.php',
			type: 'post',
			dataType: 'json',
			data: {
				username: user,
				password: pass
			},
			success:function(response){
				console.log("Test User");
				if(response.error){
					alert(response.error);
				}else{
					window.location.assign('dashboard.html')
				};
			}
		});
	});
		
	
	/* ======================= Register ======================= */	
	$('#register').on('click', function(){
		var firstname= $('#first').val(),
			lastname= $('#last').val(),
			username= $('#userName').val(),
			email= $('#email').val(),
			password = $('#password').val();
			console.log(firstname+' '+lastname+' '+username+' '+email+' '+password);

		$.ajax({
			url:'xhr/register.php', 
			type: 'post',
			dataType: 'json',
			data: {
				firstname: firstname,
				lastname: lastname,
				username: username,
				email: email,
				password: password	
			},

			success: function(response){
				if (response.error){
					console.log("This notifies you if there is an error");
					alert(response.error);	
				}else{
					console.log("This notifies you if it is working");
					window.location.assign('signin.html');
				}	
			}	
		});
	});

/* ======================= New Projects ======================= */	
	var loadApp = function(){
		$('#taskList').empty();
		$.get('app.html)', function(htmlArg){
			var lang=$(htmlArg).find('#taskList').html();
			$.template('projectTemplate', lang);
			var html = $.render('', 'projectTemplate');
			$('#taskList').append(html);
		})
	}

	$('#projects').on('click', function(e) {
		e.preventDefault();
		var projName = $('#projName').val(),
		projDesc = $('#projDesc').val(), 
		projDue = $('#projDue').val(), 
		status = $('#status').val();

		$.ajax({
			url: "xhr/new_project.php",
			type: "post",
			dataType: "json",
			data: {
				projectName: projName,
				projectDescription: projDesc,
				dueDate: projDue,
				status: status
			},
			success: function(response) {
				console.log('Testing for success');

				if(response.error) {
					alert(response.error);
				} else {
					window.location.assign("projects.html");
				};
			}
		});
	});

	// $(function(){
	// 	$("#projDue"). datepicker();
	// });

	// $(function() {
 //    $( "#resizable" ).resizable({
 //      handles: "se"
 //    });
 //  });
	
 // ************** Update Project Function ****************
		
		
	$('.updatbtn').on('click', function(e) {
		e.preventDefault();
		var projName = $('#projName').val(),
		projDesc = $('#projDesc').val(), 
		projDue = $('#projDue').val(), 
		status = $('#status').val();
				
        $.ajax({
            url: 'xhr/update_project.php',
            type: 'post',
            data: {
                projectID: id,
                projectName: name,
                status: stat,
                projectDescription: descrip,
                dueDate: date
            },
            dataType: 'json',
            success: function(response){
                if(response.error){
                    $('.errormsg2').empty()
                }else{
                   console.log('success');
                    window.location.assign('projects.html');
                }
            }
        });
    });
	
     // ---------- Delete Buttons ----------------
                        $('.deletebtn').each(function(i){
                            $(this).attr('id', projectList[i].id);
                        }).on('click', function(){
                            var idd = Number($(this).attr('id'));
                            $.ajax({
                                url: 'xhr/delete_project.php',
                                data: {
                                    projectID: idd
                                },
                                type: 'post',
                                dataType: 'json',
                                success: function(response){
                                    if(response.error){
                                        console.log(response.error)
                                    }else{
                                        window.location.assign('projects.html');
                                    }
                                }
                            });
                        }); // ------- end delete buttons ------


/* ======================= Logout ======================= */
	
	$('#logOut').click(function(e){
		e.preventDefault;
		$.get('xhr/logout.php', function(){
			window.location.assign('index.html')
		})
	});
	

})(jQuery) 
	