<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                <form class="user" method="post"
                                    action="<?= base_url('index.php/auth/registration'); ?>">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username"
                                            name="username" placeholder="Full Name"
                                            value="<?= set_value('username'); ?>">
                                        <?= form_error('username', ' <small class="text-danger" pl-3>', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user" id="email"
                                            placeholder="Email Address" name="email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger" pl-3>', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="role" name="role" required
                                            style="border-radius: 100px; height: 50px;">
                                            <option value="" disabled selected>Pick You Role</option>
                                            <option value="public">Public</option>
                                        </select>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" class="form-control form-control-user"
                                                name="password1" id="password1" placeholder="Password">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                name="password2" id="password2" placeholder="Repeat Password">
                                            <?= form_error('password2', '<small class="text-danger" pl-3>', '</small>'); ?>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                </form>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('index.php/auth'); ?>">Already have an account?
                                        Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>