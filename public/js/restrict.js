$(function() {
	$("#btn_upload_course_img").change( function () {
		uploadImg( $(this), $("#course_img_path"), $("#course_img") );
	});

	$("#btn_upload_member_photo").change( function () {
		uploadImg( $(this), $("#member_photo_path"), $("#member_photo") );
	});

})
