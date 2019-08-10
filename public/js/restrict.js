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
					dt_course.ajax.reload();
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
					dt_team.ajax.reload()
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
					dt_users.ajax.reload();
				} else {
					showErrorsModal(response["error_list"]);
				}
			}
		})

		return false;
	});

	$("#btn_your_user").click( function () {
		$.ajax({

			type: "POST",
			url: BASE_URL+"restrict/ajax_get_user_data",
			dataType: "json",
			data: {"user_id": $(this).attr("user_id")},

			success: function (response) {
				clearErrors();

				$("#form_user")[0].reset();
				$.each( response["input"], function (id, value) {
					$("#"+id).val(value);
				} );

				$("#modalUser").modal('show');
			}

		})

		return false;
	});

	function active_btn_course () {
		$(".btn-edit-course").click( function () {
			$.ajax({
				type: "POST",
				url: BASE_URL+"restrict/ajax_get_course_data",
				dataType: "json",
				data: {"course_id": $(this).attr("course_id")},

				success: function (response) {
					clearErrors();

					$("#form_course")[0].reset();
					$.each( response["input"], function (id, value) {
						$("#"+id).val(value);
					} );

					$("#course_img_path").attr("src", response["img"]);

					$("#modalCourses").modal('show');
				}
			});
		});

		$(".btn-delete-course").click( function () {
			course_id = $(this);

			Swal.fire({
				title: 'Atenção!',
				text: "Deseja deletar este curso?",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#9534f',
				cancelButtonColor: '#d33',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: "POST",
						url: BASE_URL+"restrict/ajax_delete_course_data",
						dataType: "json",
						data: {"course_id": course_id.attr("course_id")},
						success: function (response) {
							Swal.fire(
								'Sucesso',
								'Ação executada com sucesso',
								'success'
							);

							dt_course.ajax.reload();
						}
					});
				}
			});
		});
	}

	function active_btn_member () {
		$(".btn-edit-member").click( function () {
			$.ajax({
				type: "POST",
				url: BASE_URL+"restrict/ajax_get_team_data",
				dataType: "json",
				data: {"member_id": $(this).attr("member_id")},

				success: function (response) {
					clearErrors();

					$("#form_member")[0].reset();
					$.each( response["input"], function (id, value) {
						$("#"+id).val(value);
					} );

					$("#member_photo_path").attr("src", response["img"]);

					$("#modalMember").modal('show');
				}
			});
		});

		$(".btn-delete-member").click( function () {
			member_id = $(this);

			Swal.fire({
				title: 'Atenção!',
				text: "Deseja deletar este membro?",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#9534f',
				cancelButtonColor: '#d33',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: "POST",
						url: BASE_URL+"restrict/ajax_delete_team_data",
						dataType: "json",
						data: {"member_id": member_id.attr("member_id")},
						success: function (response) {
							Swal.fire(
								'Sucesso',
								'Ação executada com sucesso',
								'success'
							);

							dt_team.ajax.reload();
						}
					});
				}
			});
		});
	}

	function active_btn_user () {
		$(".btn-edit-user").click( function () {
			$.ajax({
				type: "POST",
				url: BASE_URL+"restrict/ajax_get_user_data",
				dataType: "json",
				data: {"user_id": $(this).attr("user_id")},

				success: function (response) {
					clearErrors();

					$("#form_user")[0].reset();
					$.each( response["input"], function (id, value) {
						$("#"+id).val(value);
					} );

					$("#modalUser").modal('show');
				}
			});
		});

		$(".btn-delete-user").click( function () {
			user_id = $(this);

			Swal.fire({
				title: 'Atenção!',
				text: "Deseja deletar este curso?",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#9534f',
				cancelButtonColor: '#d33',
				confirmButtonText: "Sim",
				cancelButtonText: "Não",
			}).then((result) => {
				if (result.value) {
					$.ajax({
						type: "POST",
						url: BASE_URL+"restrict/ajax_delete_user_data",
						dataType: "json",
						data: {"user_id": user_id.attr("user_id")},
						success: function (response) {
							Swal.fire(
								'Sucesso',
								'Ação executada com sucesso',
								'success'
							);
							dt_users.ajax.reload();
						}
					});
				}
			});
		});
	}

	let dt_course = $('#dt_courses').DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax":{
			"url": BASE_URL+"restrict/ajax_list_course",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: "no-sort", orderable: false },
			{ targets: "dt-center", className: "dt-center" }
		],
		"drawCallback": function () {
			active_btn_course();
		}
	});

	let dt_team = $("#dt_team").DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax":{
			"url": BASE_URL+"restrict/ajax_list_member",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: "no-sort", orderable: false },
			{ targets: "dt-center", className: "dt-center" }
		],
		"drawCallback": function () {
			active_btn_member();
		}
	});

	let dt_users = $("#dt_users").DataTable({
		"oLanguage": DATATABLE_PTBR,
		"autoWidth": false,
		"processing": true,
		"serverSide": true,
		"ajax":{
			"url": BASE_URL+"restrict/ajax_list_users",
			"type": "POST"
		},
		"columnDefs": [
			{ targets: "no-sort", orderable: false },
			{ targets: "dt-center", className: "dt-center" }
		],
		"drawCallback": function () {
			active_btn_user();
		}
	})

});
