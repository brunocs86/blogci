<section id="testimonials" class="section-bg wow fadeInUp mt-3">
    <div class="container">

        <header class="section-header">
            <h3>ÁREA RESTRITA</h3>
        </header>

        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="form-group">
                    <a href="" class="btn btn-outline-dark"><i class="fa fa-user"></i></a>
                    <a href="restrict/logoff" class="btn btn-outline-dark"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#tab_courses" role="tab" data-toggle="tab" >Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab_team" role="tab" data-toggle="tab" >Equipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tab_user" role="tab" data-toggle="tab" >Usuários</a>
            </li>
        </ul>

        <div class="tab-content">

            <!-- Tab Courses -->
            <div id="tab_courses" class="tab-pane active"><br>
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Cursos</strong></h2>
                    <button type="button" id="btn_add_course" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalCourses"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Curso</i></button>
                    <table id="dt_courses" class="table table-striped table-bordered">
                        <thead>
                            <tr class="tableheader">
                                <th>Nome</th>
                                <th>Imagem</th>
                                <th>Duração</th>
                                <th>Descrição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab Team-->
            <div id="tab_team" class="tab-pane fade"><br>
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
                    <button type="button" id="btn_add_member" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalMember"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></button>
                    <table id="dt_team" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th>Nome</th>
                            <th>Foto</th>
                            <th>Descrição</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab User -->
            <div id="tab_user" class="tab-pane fade"><br>
                <div class="container-fluid">
                    <h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
                    <button type="button" id="btn_add_user" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalUser"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></button>
                    <table id="dt_courses" class="table table-striped table-bordered">
                        <thead>
                        <tr class="tableheader">
                            <th>Nome Completo</th>
                            <th>Login</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end content -->
        </div
    </div>
</section>

<!-- Modal Courses -->
<div class="modal fade" id="modalCourses">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">CURSOS</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <form id="form_course">
                    <input type="hidden" name="course_id">

                    <div class="form-group">
                        <div class="row">
                            <label for="course_name" class="col-lg-2 control-label">Nome</label>
                            <div class="col-lg-10">
                                <input type="text" id="course_name" name="course_name" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="course_img" class="col-lg-2 control-label">Imagem</label>
                            <div class="col-lg-10">
								<img id="course_img_path" src="" style="max-height: 400px; max-height: 400px"/>
								<label class="btn btn-block btn-outline-info">
									<i class="fa fa-upload"></i>&nbsp;&nbsp;Importar Imagem
									<input type="file" id="btn_upload_course_img" accept="image/*" style="display: none">
								</label>
								<input id="course_img" name="course_img" hidden>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="course_duration" class="col-lg-2 control-label">Duração (h)</label>
                            <div class="col-lg-10">
                            <input type="number" step="0.1" id="course_duration" name="course_duration" class="form-control">
                            <span class="help-block"></span>
                        </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="course_description" class="col-lg-2 control-label">Descrição</label>
                            <div class="col-lg-10">
                                <textarea id="course_description" name="course_description" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <button type="button" id="btn_save_course" class="btn btn-outline-primary">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->

        </div>
    </div>
</div> <!-- End Modal Courses -->

<!-- Modal Team -->
<div class="modal fade" id="modalMember">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">Membro</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <form id="form_member">
                    <input type="hidden" name="member_id">

                    <div class="form-group">
                        <div class="row">
                            <label for="member_name" class="col-lg-2 control-label">Nome</label>
                            <div class="col-lg-10">
                                <input type="text" id="member_name" name="member_name" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

					<div class="form-group">
						<div class="row">
							<label for="member_photo" class="col-lg-2 control-label">Foto</label>
							<div class="col-lg-10">
								<img id="member_photo_path" src="" style="max-height: 400px; max-height: 400px"/>
								<label class="btn btn-block btn-outline-info">
									<i class="fa fa-upload"></i>&nbsp;&nbsp;Importar Foto
									<input type="file" id="btn_upload_member_photo" accept="image/*" style="display: none">
								</label>
								<input id="member_photo" name="member_photo" hidden>
								<span class="help-block"></span>
							</div>
						</div>
					</div>

                    <div class="form-group">
                        <div class="row">
                            <label for="member_description" class="col-lg-2 control-label">Descrição</label>
                            <div class="col-lg-10">
                                <textarea id="member_description" name="member_description" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <button type="button" id="btn_save_member" class="btn btn-outline-primary">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->

        </div>
    </div>
</div> <!-- End Modal Team -->

<!-- Modal User -->
<div class="modal fade" id="modalUser">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">Usuário</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body ">
                <form id="form_user">
                    <input type="hidden" name="user_id">

                    <div class="form-group">
                        <div class="row">
                            <label for="user_full_name" class="col-lg-3 control-label">Nome Completo</label>
                            <div class="col-lg-9">
                                <input type="text" id="user_full_name" name="user_full_name" class="form-control" maxlength="100">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="user_login" class="col-lg-3 control-label">Login</label>
                            <div class="col-lg-9">
                                <input type="text" id="user_login" name="user_login" class="form-control" maxlength="30">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

					<div class="form-group">
						<div class="row">
							<label for="user_email" class="col-lg-3 control-label">E-mail</label>
							<div class="col-lg-9">
								<input type="text" id="user_email" name="user_email" class="form-control" maxlength="100">
								<span class="help-block"></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<label for="user_email_confirm" class="col-lg-3 control-label">Confirmar E-mail</label>
							<div class="col-lg-9">
								<input type="text" id="user_email_confirm" name="user_email_confirm" class="form-control" maxlength="100">
								<span class="help-block"></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<label for="user_password" class="col-lg-3 control-label">Senha</label>
							<div class="col-lg-9">
								<input type="password" id="user_password" name="user_password" class="form-control">
								<span class="help-block"></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row">
							<label for="user_password_confirm" class="col-lg-3 control-label">Confirmar Senha</label>
							<div class="col-lg-9">
								<input type="password" id="user_password_confirm" name="user_password_confirm" class="form-control">
								<span class="help-block"></span>
							</div>
						</div>
					</div>

                    <div class="modal-footer">
                        <div class="form-group text-center">
                            <button type="button" id="btn_save_user" class="btn btn-outline-primary">
                                <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Modal footer
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div> -->

        </div>
    </div>
</div> <!-- End Modal User -->
