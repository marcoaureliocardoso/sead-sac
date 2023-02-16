@extends('layouts.app')

@section('title', 'Início')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb border-top border-bottom bg-light">
        <li class="breadcrumb-item active" aria-current="page">
            Home&nbsp;
            @if (session('loggedInUser.currentResponsibility')?->id != null)
                [{{ session('loggedInUser.currentResponsibility')->user->login }} -
                {{ session('loggedInUser.currentResponsibility')->userType->name }}
                {{ session('loggedInUser.currentResponsibility')->course_id ? " - " . session('loggedInUser.currentResponsibility')->course->name : "" }}]
            @endif
        </li>
    </ol>
</nav>
<section id="pageContent">
    <main role="main">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-xxl-6">
                @include('components.alerts')
                <h3>Notificações</h3>
                <br />
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Envio</th>
                                <th>Mensagem</th>
                                <th class="text-center">Dispensar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (auth()->user()->unreadNotifications->count() < 1)
                                <tr>
                                    <td colspan="3" class="text-center">Sem notificações</td>
                                </tr>
                            @endif
                            @foreach (auth()->user()->unreadNotifications as $notification)
                                <tr>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($notification->created_at)->isoFormat('DD/MM/Y HH:mm') }}
                                    </td>
                                    @switch($notification->type)
                                        @case('App\Notifications\BondCreated')
                                            <td><strong>= Novo <a href="{{ route('root', $notification->data['bond_id']) }}">vínculo</a>
                                                    cadastrado =</strong><br />
                                                Colaborador: {{ $notification->data['employee_name'] }}<br />
                                                Função: {{ $notification->data['role_name'] }} |
                                                Curso: {{ $notification->data['course_name'] }}
                                            </td>
                                        @break

                                        @default
                                            <td>:(</td>
                                    @endswitch
                                    <td class="align-middle text-center"><a href="{{ route('root', $notification->id) }}" data-bs-toggle="tooltip" title="Dispensar notificação" class="btn btn-danger">
                                        <i class="bi-trash-fill"></i>
                                    </a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</section>
@endsection

@section('scripts')
    <script defer src="{{ Vite::asset('resources/js/enable_tooltip_popover.js') }}"></script>
@endsection
