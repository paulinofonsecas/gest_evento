<script src={{ asset('theme/plugins/fullcalendar/main.js') }}></script>
<script>
    var eventoss = [

        @foreach ($eventos as $evento)
            {
                title: @if ($evento->user->id == Auth::user()->id)
                    '{{ $evento->estadoEvento->descricao }}',
                @else
                    '{{ $evento->data_evento }} - {{ $evento->data_termino }}',
                @endif
                start: '{{ $evento->data_evento }}',
                end: '{{ $evento->data_termino }}',
                @if ($evento->user->id == Auth::user()->id)
                    url: '{{ route('evento.show', $evento->id) }}',
                @endif
                backgroundColor: @if ($evento->user_id == Auth::user()->id)
                    '{{ $evento->backgroundColor() }}',
                @else
                    '#f5365c',
                @endif
                allDay: true,
            },
        @endforeach
    ];
</script>
@include('layouts.header', ['pageTitle' => 'Eventos'])

<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
        <div class="row  mb-4">
            <div class="col-lg-12 col-md-6 mb-md-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0">
                        <div class="row">
                            <div class="col-lg-6 col-7">
                                <h6>Notificações não lidas</h6>
                            </div>
                            <div class="col-lg-6 col-5 my-auto text-end">
                                <div class="dropdown float-lg-end pe-4">
                                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-ellipsis-v text-secondary" aria-hidden="true"></i>
                                    </a>
                                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a>
                                        </li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Another
                                                action</a></li>
                                        <li><a class="dropdown-item border-radius-md" href="javascript:;">Something
                                                else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Id</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            Emissor</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Titulo</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Mensagem</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            Data</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notificacoes as $notificao)
                                        <tr>
                                            <td>
                                                <a href="{{ route('notifications.show', [$notificao]) }}">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="mb-0 text-sm">{{ $notificao->id }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('notifications.show', [$notificao]) }}">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="mb-0 text-sm">
                                                                {{ $notificao->sender->name }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('notifications.show', [$notificao]) }}">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="mb-0 text-sm">{{ $notificao->title }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{ route('notifications.show', [$notificao]) }}">
                                                    <div class="d-flex px-2 py-1">
                                                        <div class="d-flex flex-column ">
                                                            <h6 class="mb-0 text-sm">{{ $notificao->message }}
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td class="align-middle  text-sm">
                                                <a href="{{ route('notifications.show', [$notificao]) }}">
                                                    {{ $notificao->created_at }}
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4 mb-2">
                <div class="card mx-3">
                    <div class="card-body text-center">
                        <h3 class="">Calendario da empresa</h3>
                        <div>
                            <div class="col-lg-8 mx-auto col-md-6 mb-md-4 mb-4" id="calendar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
    </div>
    <div class="ps__rail-y" style="top: 0px; height: 746px; right: 0px;">
        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 435px;"></div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            dateClick: function(info) {
                alert('Date: ' + info.dateStr);
                alert('Resource ID: ' + info.resource.id);
            },
            titleFormat: {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            },
            events: eventoss
        });

        calendar.render();
    });
</script>

@include('layouts.footer')
