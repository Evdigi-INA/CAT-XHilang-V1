$(document).ready(function() {
	function makeid(length) {
		var result           = '';
		var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		var charactersLength = characters.length;
		for ( var i = 0; i < length; i++ ) {
		  	result += characters.charAt(Math.floor(Math.random() * charactersLength));
		}
		return result;
	}

	//console.log(makeid(5));
	
	$("#btn-login").click( function() {

		var username = $("#tbusername").val();
		var password = $("#tbpassword").val();

		if(username.length == "") {
			Swal.fire({
			  type: 'warning',
			  title: 'Oops...',
			  text: 'Username Wajib Diisi !'
		    });
    	}else if(password.length == "") {
	        Swal.fire({
	          type: 'warning',
	          title: 'Oops...',
	          text: 'Password Wajib Diisi !'
	        });

        } else {
        	$('.welcometext').html('<div class="alert alert-warning" role="alert">Memproses</div>');
	      	
	      	$(this).attr('hidden','true');
        	$.ajax({
              url:  baseUrl + "/verification/loginkeun",
              type: "POST",
              data: {username:username,password:password},
              success:function(data){
                if (data == "ok") {
                	$('.welcometext').html('<div class="alert alert-warning" role="alert">Masukan Token peserta anda</div>');
			      	$('.tbusernamenya').css('display','none');
			      	$('.tbpasswordnya').css('display','none');
			      	$('.tbtokenform').css('display','block');
			      	$('#buttonvalidate').css('display','block');
                } else if (data == "admin") {
                	$('.tbtokenform').css('display','none');
			      	$('.tbusernamenya').css('display','none');
			      	$('.tbpasswordnya').css('display','none');
                	$('.welcometext').text('Selamat Datang admin');
					Swal.fire({
						type: 'success',
						title: 'Login Berhasil!',
						text: 'Selamat Datang Admin, anda akan diarahkan dalam 3 detik mohon tunggu.',
						timer: 3000,
						showCancelButton: false,
						showConfirmButton: false
					}).then (function() {
						$('.welcometext').html('<div class="alert alert-warning" role="alert">Memproses</div>');
		      			$('.tbtokenform').css('display','none');
		      			$('#buttonvalidate').css('display','none');
						window.location.href = baseUrl + "/admin/Admin_Controller/index";
					});
				} else {
					$('.welcometext').html('<div class="alert alert-danger" role="alert">Login gagal, silahkan hubungi admin</div>');
					$('#btn-login').removeAttr('hidden');
	                  Swal.fire({
	                    type: 'error',
	                    title: 'Login Gagal!',
	                    text: 'Silahkan hubungi hubungi admin'
	                  });
                }
                console.log(data);
              },
              error:function(data){
				Swal.fire({
					type: 'error',
					title: 'Opps!',
					text: 'server error!'
				});
				console.log(data);
              }
          	});
        }
	});

	$("#buttonvalidate").click(function(){
		var username = $("#tbusername").val();
		var password = $("#tbpassword").val();
		var token = $("#tbtoken").val();
		$.ajax({
          url:  baseUrl + "/verification/checktoken",
          type: "POST",
          data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>',token:token,username:username,password:password},
          success:function(data){
          	if(data == "peserta"){
				Swal.fire({
					type: 'success',
					title: 'Login Berhasil!',
					text: 'Selamat Datang Peserta, anda akan diarahkan dalam 3 detik mohon tunggu.',
					timer: 3000,
					showCancelButton: false,
					showConfirmButton: false
				})
				.then (function() {
					window.location.href = baseUrl + "/peserta/Peserta_Controller/index";
				});                	
			} else {
				Swal.fire({
					type: 'error',
					title: 'Login Gagal!',
					text: 'Harap masukan token dengan benar'
				});
			}
			console.log(data);
          }
        })
	});
})