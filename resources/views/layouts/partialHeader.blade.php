<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('root') }}"><img src="{{ Vite::asset('resources/images/sead.png') }}" alt="" width="30"
                class="d-inline-block align-text-top">&nbsp;SAC&nbsp;</a>
        @if (Auth::check())
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('dashboard') }}">Início</a></li>

                    {{-- @cannot('isLdi') @canany(['isAdm', 'isDir', 'isAss', 'isSec', 'isCoord']) --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarSupportedContentMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Colaboradores</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarSupportedContentMenuLink1">
                                {{-- @canany(['applicant-list', 'applicant-store']) --}}
                                    <li><h6 class="dropdown-header">Aprovados</h6></li>
                                {{-- @endcanany --}}
                                {{-- @can('applicant-list') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Aprovados --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('applicant-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Aprovado --}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Importar Planilha</a></li>
                                {{-- @endcan --}}
                                {{-- @canany(['applicant-list', 'applicant-store']) --}}
                                    <li><hr class="dropdown-divider"></li>
                                {{-- @endcanany --}}
                                <li><h6 class="dropdown-header">Colaboradores</h6></li>
                                {{-- @can('employee-list') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Colaboradores --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('employee-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Colaborador --}}</a></li>
                                {{-- @endcan --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Vínculos</h6></li>
                                {{-- @can('bond-list') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Vínculos --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('bond-create') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Vínculo --}}</a></li>
                                {{-- @endcan --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Documentos de Vínculos</h6></li>
                                {{-- @can('bondDocument-list') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Documentos --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('bondDocument-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Importar{{--  Documento --}}</a></li>
                                {{-- @endcan --}}
                            </ul>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" href="{{ route('funding') }}">Fomento</a></li> --}}
                    {{-- @endcannot --}}

                    {{-- @cannot('isLdi') @canany(['isAdm', 'isDir', 'isAss', 'isSec', 'isCoord']) --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarSupportedContentMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">Estrutura</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarSupportedContentMenuLink2">
                                <li><h6 class="dropdown-header">Funções</h6></li>
                                <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Funções --}}</a></li>
                                {{-- @can('role-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Função --}}</a></li>
                                {{-- @endcan --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Cursos</h6></li>
                                <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Cursos --}}</a></li>
                                {{-- @can('course-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Curso --}}</a></li>
                                {{-- @endcan --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Disciplinas</h6></li>
                                <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Cursos --}}</a></li>
                                {{-- @can('course-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Curso --}}</a></li>
                                {{-- @endcan --}}
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Polos</h6></li>
                                <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Polos --}}</a></li>
                                {{-- @can('pole-store') --}}
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Polo --}}</a></li>
                                {{-- @endcan --}}
                            </ul>
                        </li>
                    {{-- @endcannot --}}

                    <li class="nav-item dropdown">
                        <a class="nav-link" href="" id="navbarSupportedContentMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Relatórios</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarSupportedContentMenuLink3">
                            <li><h6 class="dropdown-header">Termos de cessão de direitos</h6></li>
                            <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Documentos de Termos e Licença --}}</a></li>
                        </ul>
                    </li>

                    {{-- @cannot('isLdi') {{-- @canany(['isAdm', 'isDir', 'isAss', 'isSec', 'isCoord']) --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarSupportedContentMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">Sistema</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarSupportedContentMenuLink4">
                                <li><h6 class="dropdown-header">Conta</h6></li>
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Alterar senha{{--  Usuários --}}</a></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Sair{{--  Usuário --}}</a>
                                    </form>
                                </li>
                                {{-- @can('isAdm-global') --}}
                                    <li><hr class="dropdown-divider"></li>
                                    <li><h6 class="dropdown-header">Usuários</h6></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Usuários --}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Usuário --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('isAdm-global') --}}
                                    <li><hr class="dropdown-divider"></li>
                                    <li><h6 class="dropdown-header">Atribuições de papel</h6></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Listar{{--  Atribuições de Papel --}}</a></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Cadastrar{{--  Atrib. de Papel --}}</a></li>
                                {{-- @endcan --}}
                                {{-- @can('isAdm-global') --}}
                                    <li><hr class="dropdown-divider"></li>
                                    <li><h6 class="dropdown-header">SAC</h6></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">Logs de sistema</a></li>
                                    <li><a class="dropdown-item" href="{{ route('root') }}">System Info</a></li>
                                {{-- @endcan --}}
                            </ul>
                        </li>
                    {{-- @endcannot --}}
                </ul>
                {{-- @if ($activeResponsibilities != null) --}}
                {{-- <form class="d-flex" action={{ route('users.responsibility_switch') }} method="POST">
                    @csrf
                    <select class="form-select form-select-sm" aria-label="responsibility" name="responsibility_id" data-bs-toggle="tooltip" data-bs-placement="left" title="Mudar papel atual" onchange="submit();">
                            @foreach ($activeResponsibilities as $responsibility)
                                <option value="{{ $responsibility->getAttribute('id') }}"
                                    {{ $responsibility->getAttribute('id') === $currentResponsibility?->getAttribute('id') ? 'selected' : '' }}>
                                    {{ $responsibility->userType->name }}{{ $responsibility->course ? ' - ' . $responsibility->course->name : '' }}
                                </option>
                            @endforeach
                        </select>
                    </form> --}}
                {{-- @endif --}}
                {{-- <ul class="list-unstyled ms-1 mb-2 mb-lg-0">
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            
                            Bem vind{{ $gender === 'F' ? 'a' : 'o'}}, <a href="{{ route('profile.edit') }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Alterar senha do Usuário">Usuário{{ $name }}</a>!
                            &nbsp;<a class="btn btn-sm btn-danger" href="{{ route('logout') }}" data-bs-toggle="tooltip" data-bs-placement="left" title="Sair do sistema" onclick="event.preventDefault();this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                </ul> --}}
            </div>
            <div class="collapse navbar-collapse" id="navbarProfile">
                <div class="d-flex ms-auto">
                    <img src="{{ Vite::asset('resources/images/default_profile_picture.png') }}" class="ms-auto my-auto rounded-circle" alt="Profile picture" width="30" height="30">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarProfileMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarProfileMenuLink1">
                                <li><h6 class="dropdown-header">Conta</h6></li>
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Alterar senha{{--  Usuários --}}</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><h6 class="dropdown-header">Sessão</h6></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();this.closest('form').submit();">Sair{{--  Usuário --}}</a>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        @endif
    </div>
</nav>
