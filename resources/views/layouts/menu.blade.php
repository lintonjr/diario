<div class="main-menu menu-fixed menu-accordion menu-shadow menu-light" data-scroll-to-active="true">
	<div class="main-menu-content">
		<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href="{{route('home')}}">
                    <i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">Dashboard</span>
                </a>
            </li>
			@can('cadastromenu-view')
				<li class="nav-item {{ (Request::is('register') or Request::is('register/*')) ? 'active' : '' }}">
					<a href="#">
						<i class="la la-plus-square"></i>
						<span class="menu-title" data-i18n="nav.templates.main">Cadastros</span>
					</a>
					<ul class="menu-content">
	                    @can('clients-view')
		                    <li class="{{ (Request::is('register/clients') or Request::is('register/clients/*')) ? 'active' : '' }}">
		                        <a class="menu-item" href="{{ route('clients.index') }}" data-i18n="nav.templates.vert.main">Clientes</a>
		                    </li>
	                    @endcan
	                    @can('entities-view')
	                        <li class="{{ (Request::is('register/entities') or Request::is('register/entities/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('entities.index') }}" data-i18n="nav.templates.vert.main">Entidades</a>
	                        </li>
	                    @endcan

	                    @can('agencies-view')
		                    <li class="{{ (Request::is('register/agencies') or Request::is('register/agencies/*')) ? 'active' : '' }}">
		                        <a class="menu-item" href="{{ route('agencies.index') }}">Orgãos</a>
		                    </li>
	                    @endcan
	                    @can('calendars-view')
	                        <li class="{{ (Request::is('register/calendars') or Request::is('register/calendars/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('calendars.index') }}" data-i18n="nav.templates.vert.main">Calendários</a>
	                        </li>
	                    @endcan
	                    @can('sections-view')
	                        <li class="{{ (Request::is('register/sections') or Request::is('register/sections/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('sections.index') }}" data-i18n="nav.templates.vert.main">Cadernos</a>
	                        </li>
	                    @endcan
	                    @can('types-view')
	                        <li class="{{ (Request::is('register/types') or Request::is('register/types/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('types.index') }}" data-i18n="nav.templates.horz.main">Tipos de Matérias</a>
	                        </li>
	                    @endcan
	                    @can('subtypes-view')
	                        <li class="{{ (Request::is('register/subtypes') or Request::is('register/subtypes/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('subtypes.index') }}" data-i18n="nav.templates.horz.main">Sub Tipos de Matérias</a>
	                        </li>
	                    @endcan
	                    @can('competences-view')
	                        <li class="{{ (Request::is('register/competences') or Request::is('register/competences/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('competences.index') }}" data-i18n="nav.templates.horz.main">Competências</a>
	                        </li>
	                    @endcan
	                    @can('layouts-view')
	                        <li class="{{ (Request::is('register/layoutpatterns') or Request::is('register/layoutpatterns/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('layoutpatterns.index') }}" data-i18n="nav.templates.horz.main">Padrão de Layout</a>
	                        </li>
	                    @endcan
						@can('layouts-view')
	                        <li class="{{ (Request::is('register/layout') or Request::is('register/layout/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('layout.index') }}" data-i18n="nav.templates.horz.main">Layouts</a>
	                        </li>
	                    @endcan
	                    @can('dailies-view')
	                        <li class="{{ (Request::is('register/dailies') or Request::is('register/dailies/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('dailies.index') }}" data-i18n="nav.templates.horz.main">Diários</a>
	                        </li>
	                    @endcan
					</ul>
				</li>
			@endcan
			<li class="nav-item {{ (Request::is('diario') or Request::is('diario/*')) ? 'active' : '' }}">
				<a href="#">
					<i class="la la-folder-open"></i>
					<span class="menu-title" data-i18n="nav.templates.main">Diário Oficial</span>
				</a>
				<ul class="menu-content">
                   @can('themes-view')
                        <li class="{{ (Request::is('diario/themes') or Request::is('diario/themes/*')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{ route('themes.index') }}" data-i18n="nav.templates.vert.main">Publicações</a>
                        </li>
                        <li class="{{ (Request::is('diario/themefiles') or Request::is('diario/themefiles/*')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{ route('themefiles.index') }}" data-i18n="nav.templates.vert.main">Upload</a>
                        </li>
                   @endcan
                   @can('approves-view')
                        <li class="{{ (Request::is('diario/editors') or Request::is('diario/editors/*')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{ route('editors.index') }}" data-i18n="nav.templates.horz.main">Aprovar Matérias</a>
                        </li>
                   @endcan
                   @can('authorize-view')
                        <li class="{{ (Request::is('diario/designers') or Request::is('diario/designers/*')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{ route('designers.index') }}" data-i18n="nav.templates.horz.main">Autorização de Matérias</a>
                        </li>
                   @endcan
                   @can('publish-view')
                        <li class="{{ (Request::is('diario/dailyfiles') or Request::is('diario/dailyfiles*')) ? 'active' : '' }}">
                            <a class="menu-item" href="{{ route('dailyfiles.index') }}" data-i18n="nav.templates.horz.main">Publicar Diário Oficial</a>
                        </li>
                    @endcan
				</ul>
			</li>
			@can('sistemamenu-view')
				<li class="nav-item {{ (Request::is('system') or Request::is('system/*')) ? 'active' : '' }}">
					<a href="#">
						<i class="la la-users"></i>
						<span class="menu-title" data-i18n="nav.templates.main">Sistema</span>
					</a>
					<ul class="menu-content">
	                   @can('roles-view')
	                        <li class="{{ (Request::is('system/roles') or Request::is('system/roles/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('roles.index') }}" data-i18n="nav.templates.horz.main">Papéis</a>
	                        </li>
	                   @endcan
	                   @can('permissions-view')
	                        <li class="{{ (Request::is('system/permissions') or Request::is('system/permissions/*')) ? 'active' : '' }}">
	                            <a class="menu-item" href="{{ route('permissions.index') }}" data-i18n="nav.templates.horz.main">Permissões</a>
	                        </li>
	                   @endcan
	                   @can('users-view')
	                        <li class="{{ (Request::is('users') or Request::is('users/*')) ? 'active' : '' }}">
	                                    <a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.templates.vert.main">Usuários</a>
	                        </li>
	                   @endcan
					   @can('usersoperationals-view')
		                   <li class="{{ (Request::is('usersoperationals') or Request::is('usersoperationals/*')) ? 'active' : '' }}">
		                        <a class="menu-item" href="{{ route('usersoperationals.index') }}" data-i18n="nav.templates.vert.main">Usuários Operadores</a>
		                    </li>
						@endcan
					</ul>
				</li>
			@endcan
            {{-- @can('users-view')
            <li class="nav-item {{ (Request::is('users') or Request::is('users/*')) ? 'active' : '' }}">
                <a href="#">
                    <i class="la la-users"></i>
                    <span class="menu-title" data-i18n="nav.templates.main">Usuários</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ (Request::is('users') or Request::is('users/*')) ? 'active' : '' }}">
                        <a class="menu-item" href="{{ route('users.index') }}" data-i18n="nav.templates.vert.main">Usuários</a>
                    </li>
                </ul>
            </li>
            @endcan --}}
		</ul>
	</div>
</div>
