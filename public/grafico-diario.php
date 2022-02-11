    <div class="content__header content__boxed overlapping">
        <div class="content__wrap">
            <h1 class="page-title mb-2">Dashboard</h1>
            <h2 class="h5">Bem vindo ao Dashboard.</h2>
            <p>
                Aqui você pode ver graficos de totalização mensal e semanal<br>
                ver um resumo das solicitações de crédito aprovadas, em analise, aguardando lojista, reprovadas.</p>
        </div>
    </div>

    <div class="content__boxed">
        <div class="content__wrap">
            <div class="row">
                <div class="col-xl-7 mb-3 mb-xl-0">

                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center border-0">
                            <div class="me-auto">
                                <h3 class="h4 m-0">Totalização mensal</h3>
                            </div>
                            <div class="toolbar-end">
                                <button type="button" class="btn btn-icon btn-sm btn-hover btn-light" aria-label="Refresh Network Chart">
                                    <i class="demo-pli-repeat-2 fs-5"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Network - Area Chart -->
                        <div class="card-body py-0" style="height: 250px; max-height: 275px">
                            <canvas id="_dm-networkChart"></canvas>
                        </div>
                        <!-- END : Network - Area Chart -->
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Tile - HDD Usage -->
                            <div class="card bg-success text-white overflow-hidden mb-3">
                                <div class="p-3 pb-2">
                                    <h5 class="mb-3"><i class="demo-psi-coin text-reset text-opacity-75 fs-2 me-2"></i>Solicitações Aprovadas</h5>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                            <div class="me-auto">Hoje</div>
                                            <span class="fw-bold">15</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Area Chart -->
                                <div class="py-0" style="height: 70px; margin: 0 -5px -5px;">
                                    <canvas id="_dm-hddChart"></canvas>
                                </div>
                                <!-- END : Area Chart -->

                            </div>
                            <!-- END : Tile - HDD Usage -->

                        </div>
                        <div class="col-sm-6">

                            <!-- Tile - Earnings -->
                            <div class="card bg-info text-white overflow-hidden mb-3">
                                <div class="p-3 pb-2">
                                    <h5 class="mb-3"><i class="pli-sandwatch-2 text-reset text-opacity-75 fs-2 me-2"></i>Solicitações em análise</h5>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                            <div class="me-auto">Hoje</div>
                                            <span class="fw-bold">5</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Line Chart -->
                                <div class="py-0" style="height: 70px; margin: 0 -5px -5px;">
                                    <canvas id="_dm-earningChart"></canvas>
                                </div>
                                <!-- END : Line Chart -->

                            </div>
                            <!-- END : Tile - Earnings -->

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">

                            <!-- Tile - Sales -->
                            <div class="card bg-purple text-white overflow-hidden mb-3">
                                <div class="p-3 pb-2">
                                    <h5 class="mb-3"><i class="pli-clothing-store text-reset text-opacity-75 fs-2 me-2"></i>Solicitações aguardando lojista</h5>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                            <div class="me-auto">Hoje</div>
                                            <span class="fw-bold">3</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Bar Chart -->
                                <div class="py-0" style="height: 70px">
                                    <canvas id="_dm-salesChart"></canvas>
                                </div>
                                <!-- END : Bar Chart -->

                            </div>
                            <!-- END : Tile - Sales -->

                        </div>
                        <div class="col-sm-6">

                            <!-- Tile - Task Progress -->
                            <div class="card bg-danger text-white overflow-hidden mb-3">
                                <div class="p-3 pb-2">
                                    <h5 class="mb-3"><i class="pli-file-delete  text-reset text-opacity-75 fs-2 me-2"></i>Solicitações reprovadas</h5>
                                    <ul class="list-group list-group-borderless">
                                        <li class="list-group-item p-0 text-reset d-flex justify-content-between align-items-start">
                                            <div class="me-auto">Hoje</div>
                                            <span class="fw-bold">3</span>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Horizontal Bar Chart -->
                                <div class="py-0 pb-2" style="height: 70px">
                                    <canvas id="_dm-taskChart"></canvas>
                                </div>
                                <!-- END : Horizontal Bar Chart -->

                            </div>
                            <!-- END : Tile - Task Progress -->

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="content__boxed">
        <div class="content__wrap">

            <!-- Table with toolbar -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-3">Aguardando lojista</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Solicitação</th>
                                    <th>CPF</th>
                                    <th>Pessoa</th>
                                    <th>Valor</th>
                                    <th>Data</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#" class="btn-link">#53431</a></td>
                                    <td>123.456.789.00</td>
                                    <td>Walter de Padua Junior</td>
                                    <td>R$ 1.000,00</td>
                                    <td>01/02/2022</td>
                                    <td class="text-center fs-5">
                                        <div class="d-block badge" style="background: purple;">Aguardando loja</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                                <tr>
                                    <td><a href="#" class="btn-link">#53431</a></td>
                                    <td>123.456.789.00</td>
                                    <td>José Pereira Souza</td>
                                    <td>R$ 700,00</td>
                                    <td>01/02/2022</td>
                                    <td class="text-center fs-5">
                                        <div class="d-block badge" style="background: purple;">Aguardando loja</div>
                                    </td>
                                    <td class="text-center">-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <include-script>
        <script src="./assets/vendors/chart.js/chart.min.js" defer></script>
        <script src="./static/js/grafico-diario.min.js" defer></script>
    </include-script>