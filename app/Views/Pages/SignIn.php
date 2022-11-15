<?= $this->extend('WrapperOuter') ?>

<?= $this->section('siteTitle') ?>Sign In
<?= $this->endSection() ?>

<?= $this->section('bodyContent') ?>

<?= $this->include('Components/OuterHeader') ?>

<!--start content-->
<main class="authentication-content">
    <div class="container">
        <div class="mt-4">
            <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
                <div class="row g-0">
                    <div class="col-12 order-1 col-xl-8 d-flex align-items-center justify-content-center border-end">
                        <img src="assets/images/error/auth-img-7.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-12 col-xl-4 order-xl-2">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title">Acceder</h5>
                            <p class="card-text mb-4">Bienvenido a la aplicación de Control de Obras</p>
                            <form class="form-body">

                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Dirección de Correo</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                                            <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" placeholder="Correo electrónico">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Contraseña</label>
                                        <div class="ms-auto position-relative">
                                            <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                                            <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Recordarme</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end"> <a href="authentication-forgot-password.html">Recordar contraseña</a>
                                    </div>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30">Acceder</button>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <p class="mb-0">¿No tienes una cuenta aún? <a href="authentication-signup-with-header-footer.html">Regístrate acá</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?= $this->include('Components/OuterFooter') ?>

<?= $this->endSection() ?>