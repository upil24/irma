<div class="container ">
    <!-- Outer Row -->
    <div class="row justify-content-center ">

        <div class="col-lg-5 mt-5">

            <div class="card o-hidden border-0 shadow-lg my-5 bg-gradient-light  ">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="mb-4">
                                    <img height="100" width="340" src="<?= ('../assets/'); ?>img/logo.png">
                                </div>

                                <?= $this->session->flashdata('pesan'); ?>

                                <form class=" user" method="POST" action="<?= base_url('home'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>


                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>