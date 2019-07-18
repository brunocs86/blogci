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
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="courses-tab" data-toggle="tab" href="#tab_courses" role="tab" aria-controls="courses" aria-selected="true">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="team-tab" data-toggle="tab" href="#tab_team" role="tab" aria-controls="team" aria-selected="false">Equipe</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="user-tab" data-toggle="tab" href="#tab_user" role="tab" aria-controls="user" aria-selected="false">Usuários</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab_courses" role="tabpanel" aria-labelledby="courses-tab">
                <div class="container-fluid">
                    <h2 class="text-center">
                        <strong>
                            Gerenciar Cursos
                        </strong>
                    </h2>
                    <a href="" class="btn btn-outline-primary" id="btn_add_course"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Cursos</i></a>
                    <table class="table table-striped table-bordered" id="dt_courses">
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
            <div class="tab-pane fade" id="tab_team" role="tabpanel" aria-labelledby="team-tab">
                <div class="container-fluid">
                    <h2 class="text-center">
                        <strong>
                            Gerenciar Equipe
                        </strong>
                    </h2>
                    <a href="" class="btn btn-outline-primary" id="btn_add_member"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></a>
                    <table class="table table-striped table-bordered" id="dt_team">
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
            <div class="tab-pane fade" id="tab_user" role="tabpanel" aria-labelledby="user-tab">
                <div class="container-fluid">
                    <h2 class="text-center">
                        <strong>
                            Gerenciar Usuários
                        </strong>
                    </h2>
                    <a href="" class="btn btn-outline-primary" id="btn_add_user"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></a>
                    <table class="table table-striped table-bordered" id="dt_users">
                        <thead>
                        <tr class="tableheader">
                            <th>Login</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Cursos -->
<div id="modal_course" class="modal fade modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalCourse" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cursos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form_course">
                    <input name="course_id" hidden>

                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="course_name" name="course_name" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="course_img" class="col-lg-2 control-label">Imagem</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" class="form-control-file" id="course_img" name="course_img>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Duração</label>
                        <div class="col-lg-10">
                            <input type="number" min="0" class="form-control" id="course_duration" name="course_duration">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="course_description" name="course_description"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_course" class="btn btn-outline-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            <span class="help-block"></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Member -->
<div id="modal_member" class="modal fade modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalMember" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Membro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form_member">
                    <input name="member_id" hidden>

                    <div class="form-group">
                        <label for="member_name" class="col-lg-2 control-label">Nome</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="member_name" name="member_name" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="member_photo" class="col-lg-2 control-label">Foto</label>
                        <div class="col-lg-10">
                            <input type="file" accept="image/*" class="form-control-file" id="member_photo" name="member_photo>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="member_description" class="col-lg-2 control-label">Descrição</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" id="member_description" name="member_description"></textarea>
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_member" class="btn btn-outline-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            <span class="help-block"></span>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal User -->
<div id="modal_user" class="modal fade modal-lg" tabindex="-1" role="dialog" aria-labelledby="myModalUser" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form_user">
                    <input name="user_id" hidden>

                    <div class="form-group">
                        <label for="user_login" class="col-lg-2 control-label">Login</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user_login" name="user_login" maxlength="30">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_full_name" class="col-lg-2 control-label">Nome Completo</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user_full_name" name="user_full_name" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email" class="col-lg-2 control-label">E-mail</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user_email" name="user_email" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_email_confirm" class="col-lg-2 control-label">Confirmar E-mail</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="user_email_confirm" name="user_email_confirm" maxlength="100">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_password" class="col-lg-2 control-label">Senha</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="user_password" name="user_password">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="user_password_confirm" class="col-lg-2 control-label">Confirmar Senha</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" id="user_password_confirm" name="user_password_confirm">
                            <span class="help-block"></span>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id="btn_save_user" class="btn btn-outline-primary">
                            <i class="fa fa-save"></i>&nbsp;&nbsp;Salvar
                            <span class="help-block"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
