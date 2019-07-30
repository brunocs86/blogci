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

})
