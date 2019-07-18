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
                    <button type="button" id="btn_add_member" class="btn btn-outline-primary" data-toggle="modal" data-target="#modalTeam"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></button>
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
                                <input type="file" accept="image/*" id="course_img" name="course_img" class="form-control-file">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <label for="course_duration" class="col-lg-2 control-label">Duração</label>
                            <div class="col-lg-10">
                            <input type="number" min="0" id="course_duration" name="course_duration" class="form-control">
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
<div class="modal fade" id="modalTeam">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">Modal Heading</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h3>Some text to enable scrolling..</h3>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div> <!-- End Modal Team -->

<!-- Modal User -->
<div class="modal fade" id="modalUser">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h1 class="modal-title">Modal Heading</h1>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h3>Some text to enable scrolling..</h3>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <p>Some text to enable scrolling.. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div> <!-- End Modal User -->