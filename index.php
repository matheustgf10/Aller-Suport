 <?php include("header.php");?>


 <header class="intro-header" style="background-image: url('img/pattern.svg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Abra um ticket</h1>
                        <hr class="small">
                        <span class="subheading">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container ticket-form">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>

                <form>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Seu nome</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Seu email</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" >
                                </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="exampleInputPassword1">Problema relacionado a:</label>
                                <select class="form-control">
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                             <div class="form-group">
                                <label for="exampleInputPassword1">Prioridade:</label>
                                <select class="form-control">
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                    <option value="">Atualização de Site</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Título do chamado</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" >
                            </div>
                        </div>
                    </div>
                   
                    
                   <div class="row">
                        <div class="col-lg-12">
                            <label for="exampleInputPassword1">Descrição do problema</label>
                            <div id="summernote">Descreva detalhadamente seu problema</div>
                        </div>
                   </div>

                   <div class="row">
                       <div class="col-lg-12">
                           <form action="/upload-target" class="dropzone"></form>
                       </div>
                   </div>
                    
                   <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-primary pull-right">Abrir Ticket</button>
                        </div>
                   </div>
                </form>

            </div>
        </div>
    </div>



 <?php include("footer.php");?>