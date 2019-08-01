$(function() {

	$("#btn_add_course").click( function () {
		clearErrors();
		$("#form_course")[0].reset();
		$("#course_img_path").attr("src", "");
	});

	$("#btn_add_member").click( function () {
		clearErrors();
		$("#form_member")[0].reset();
		$("#member_photo_path").attr("src", "");
	});

	$("#btn_add_user").click( function () {
		clearErrors();
		$("#form_user")[0].reset();
	});

	$("#btn_upload_course_img").change( function () {
		uploadImg( $(this), $("#course_img_path"), $("#course_img") );
	});

	$("#btn_upload_member_photo").change( function () {
		uploadImg( $(this), $("#member_photo_path"), $("#member_photo") );
	});

	$("#form_course").submit( function () {
		$.ajax({
			type: "POST",
			url: BASE_URL+"restrict/ajax_save_course",
			dataType: "json",
			data: $(this).serializeArray(),
			beforeSend: function () {
				clearErrors();
				$("#btn_save_course").siblings(".help-block").html(loadingImg("Verificando ..."));
			},
			success: function (response) {
				clearErrors();
				if ( response["status"] ){
					$("#modalCourses").modal("hide");
				} else {
					showErrorsModal(response["error_list"]);
				}
			}
		})

		return false;
	});

	$("#form_member").submit( function () {
		$.ajax({
			type: "POST",
			url: BASE_URL+"restrict/ajax_save_member",
			dataType: "json",
			data: $(this).serializeArray(),
			beforeSend: function () {
				clearErrors();
				$("#btn_save_member").siblings(".help-block").html(loadingImg("Verificando ..."));
			},
			success: function (response) {
				clearErrors();
				if ( response["status"] ){
					$("#modalMember").modal("hide");
				} else {
					showErrorsModal(response["error_list"]);
				}
			}
		})

		return false;
	});

	$("#form_user").submit( function () {
		$.ajax({
			type: "POST",
			url: BASE_URL+"restrict/ajax_save_user",
			dataType: "json",
			data: $(this).serializeArray(),
			beforeSend: function () {
				clearErrors();
				$("#btn_save_user").siblings(".help-block").html(loadingImg("Verificando ..."));
			},
			success: function (response) {
				clearErrors();
				if ( response["status"] ){
					$("#modalUser").modal("hide");
				} else {
					showErrorsModal(response["error_list"]);
				}
			}
		})

		return false;
	});

})
