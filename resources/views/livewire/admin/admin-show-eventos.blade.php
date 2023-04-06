<x-app-layout>
    <div class="py-7">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mx-auto">
                        <div class="row">
                            <div class="col-12">
                                <div class="card bg-gradient-success">
                                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                                        <h3 class="card-title">
                                            <i class="far fa-calendar-alt"></i>
                                            Calendar
                                        </h3>

                                        <div class="card-tools">

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-success btn-sm dropdown-toggle"
                                                    data-toggle="dropdown" data-offset="-52" aria-expanded="false">
                                                    <i class="fas fa-bars"></i>
                                                </button>
                                                <div class="dropdown-menu" role="menu" style="">
                                                    <a href="#" class="dropdown-item">Add new event</a>
                                                    <a href="#" class="dropdown-item">Clear events</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a href="#" class="dropdown-item">View calendar</a>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-success btn-sm"
                                                data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-success btn-sm"
                                                data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>

                                    </div>

                                    <div class="card-body pt-0">

                                        <div id="calendar" style="width: 100%">
                                            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                                <ul class="list-unstyled">
                                                    <li class="show">
                                                        <div class="datepicker">
                                                            <div class="datepicker-days" style="">
                                                                <table class="table table-sm">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Month"></span></th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Month">
                                                                                April 2023</th>
                                                                            <th class="next" data-action="next"><span
                                                                                    class="fa fa-chevron-right"
                                                                                    title="Next Month"></span></th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th class="dow">Su</th>
                                                                            <th class="dow">Mo</th>
                                                                            <th class="dow">Tu</th>
                                                                            <th class="dow">We</th>
                                                                            <th class="dow">Th</th>
                                                                            <th class="dow">Fr</th>
                                                                            <th class="dow">Sa</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/26/2023"
                                                                                class="day old weekend">26</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/27/2023" class="day old">27
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/28/2023" class="day old">28
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/29/2023" class="day old">29
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/30/2023" class="day old">30
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="03/31/2023" class="day old">31
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/01/2023"
                                                                                class="day weekend">1</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/02/2023"
                                                                                class="day weekend">2</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/03/2023" class="day">3
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/04/2023" class="day">4
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/05/2023"
                                                                                class="day active today">5</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/06/2023" class="day">6
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/07/2023" class="day">7
                                                                            </td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/08/2023"
                                                                                class="day weekend">8</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/09/2023"
                                                                                class="day weekend">9</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/10/2023" class="day">
                                                                                10</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/11/2023" class="day">
                                                                                11</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/12/2023" class="day">
                                                                                12</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/13/2023" class="day">
                                                                                13</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/14/2023" class="day">
                                                                                14</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/15/2023"
                                                                                class="day weekend">15</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/16/2023"
                                                                                class="day weekend">16</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/17/2023" class="day">
                                                                                17</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/18/2023" class="day">
                                                                                18</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/19/2023" class="day">
                                                                                19</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/20/2023" class="day">
                                                                                20</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/21/2023" class="day">
                                                                                21</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/22/2023"
                                                                                class="day weekend">22</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/23/2023"
                                                                                class="day weekend">23</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/24/2023" class="day">
                                                                                24</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/25/2023" class="day">
                                                                                25</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/26/2023" class="day">
                                                                                26</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/27/2023" class="day">
                                                                                27</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/28/2023" class="day">
                                                                                28</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/29/2023"
                                                                                class="day weekend">29</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td data-action="selectDay"
                                                                                data-day="04/30/2023"
                                                                                class="day weekend">30</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/01/2023" class="day new">
                                                                                1</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/02/2023" class="day new">
                                                                                2</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/03/2023" class="day new">
                                                                                3</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/04/2023" class="day new">
                                                                                4</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/05/2023" class="day new">
                                                                                5</td>
                                                                            <td data-action="selectDay"
                                                                                data-day="05/06/2023"
                                                                                class="day new weekend">6</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-months" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Year"></span></th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Year">
                                                                                2023</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Year"></span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Jan</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Feb</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Mar</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month active">Apr</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">May</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Jun</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Jul</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Aug</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Sep</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Oct</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Nov</span><span
                                                                                    data-action="selectMonth"
                                                                                    class="month">Dec</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-years" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Decade"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5" title="Select Decade">
                                                                                2020-2029</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Decade"></span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectYear"
                                                                                    class="year old">2019</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2020</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2021</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2022</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year active">2023</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2024</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2025</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2026</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2027</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2028</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year">2029</span><span
                                                                                    data-action="selectYear"
                                                                                    class="year old">2030</span></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div class="datepicker-decades" style="display: none;">
                                                                <table class="table-condensed">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="prev" data-action="previous">
                                                                                <span class="fa fa-chevron-left"
                                                                                    title="Previous Century"></span>
                                                                            </th>
                                                                            <th class="picker-switch"
                                                                                data-action="pickerSwitch"
                                                                                colspan="5">2000-2090</th>
                                                                            <th class="next" data-action="next">
                                                                                <span class="fa fa-chevron-right"
                                                                                    title="Next Century"></span></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td colspan="7"><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade old"
                                                                                    data-selection="2006">1990</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2006">2000</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2016">2010</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade active"
                                                                                    data-selection="2026">2020</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2036">2030</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2046">2040</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2056">2050</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2066">2060</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2076">2070</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2086">2080</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade"
                                                                                    data-selection="2096">2090</span><span
                                                                                    data-action="selectDecade"
                                                                                    class="decade old"
                                                                                    data-selection="2106">2100</span>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="picker-switch accordion-toggle"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Lista de eventos</h3>
                                        <div class="card-tools">
                                            <a href="{{ route('evento.create') }}" class="btn btn-success">Agendar
                                                evento</a>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body table-responsive p-0" style="height: 300px;">
                                        <table class="table table-head-fixed text-nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Data do evento</th>
                                                    <th>Data de termino</th>
                                                    <th>Preço</th>
                                                    <th>Localização do evento</th>
                                                    <th>Estado</th>
                                                    <th>Pacote</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($eventos as $evento)
                                                    <tr>
                                                        <td>{{ $evento->id }}</td>
                                                        <td><a
                                                                href="{{ route('eventos.show', [$evento->id]) }}">{{ $evento->data_evento }}</a>
                                                        </td>
                                                        <td>{{ $evento->data_termino }}</td>
                                                        <td>{{ number_format($evento->pacote->preco_de_aluguer, 2, ',', '.') }}
                                                            Kz</td>
                                                        <td>{{ $evento->localizacao }}</td>
                                                        <td>
                                                            @if ($evento->estadoEvento->descricao == 'Aguardando')
                                                                <span class="badge badge-warning">Aguardando</span>
                                                            @elseif ($evento->estadoEvento->descricao == 'Aceite')
                                                                <span class="badge badge-primary">Aceite</span>
                                                            @elseif ($evento->estadoEvento->descricao == 'Finalizado')
                                                                <span class="badge badge-success">Finalizado</span>
                                                            @endif
                                                        </td>
                                                        <td>{{ $evento->pacote->nome }}</td>
                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
