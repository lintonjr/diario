<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/jasper', 'ReportController@index')->name('jasper');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'Frontend'], function(){
    // $this->get('search', 'HomeController@search')->name('search');
$this->any('busca-resultado/{name}', 'searchsController@searchResult')->name('busca.resultado');
$this->get('clients', 'searchsController@listClients')->name('clients');
$this->get('client-page/{name}', 'searchsController@clientPage')->name('client.page');
$this->get('busca/{name}', 'searchsController@search')->name('busca');
$this->get('diarios/{name}', 'searchsController@searchDailies')->name('diarios');
$this->any('diario-resultado/{name}', 'searchsController@searchDailiesResult')->name('diario.resultado');
Route::get('item/{id}', 'searchsController@showTheme')->name('item');
Route::get('/searchid/{name}', 'searchsController@searchidResult')->name('searchidResult');
Route::get('/searchid', 'searchsController@searchid')->name('searchid');
// Route::get('/searchdailies', 'searchsController@searchDailies')->name('searchdailies');
Route::any('/searchdailies', 'searchsController@searchDailiesResult')->name('searchDailiesResult');
});

Route::post('/password/changepassword', ['uses' => 'HomeController@changePassword', 'as' => 'changePassword']);
Route::get('/password/change', ['uses' => 'HomeController@showChangePassword', 'as' => 'password.change']);

/*
Route::group(['namespace'=>'Empresa', 'middleware'=>'auth'], function(){
	Route::post('/empresa/maisinfo', ['uses' => 'EmpresaController@maisinfo', 'as' => 'empresa.maisInfo']);
	Route::post('/empresa/endereco', ['uses' => 'EmpresaController@endereco', 'as' => 'empresa.endereco']);
	Route::post('/empresa/contato', ['uses' => 'EmpresaController@contato', 'as' => 'empresa.contato']);
	Route::post('/empresa/conta', ['uses' => 'EmpresaController@conta', 'as' => 'empresa.conta']);
	Route::get('/empresa/autocomplete', ['uses' => 'EmpresaController@autocomplete', 'as' => 'empresa.autocomplete']);
	Route::post('/empresa/logo', ['uses' => 'EmpresaController@logoEmpresa', 'as' => 'empresa.logo']);
	Route::get('/empresa/getcep', ['uses' => 'EmpresaController@getCEP', 'as' => 'empresa.getCEP']);
	Route::get('/empresa/ge/{id}', ['uses' => 'EmpresaController@getEndereco', 'as' => 'empresa.getEndereco']);
	Route::get('/empresa/gc/{id}', ['uses' => 'EmpresaController@getContato', 'as' => 'empresa.getContato']);
	Route::get('/empresa/lista', ['uses' => 'EmpresaController@lista', 'as' => 'empresa.lista']);
	Route::resource('/empresa', 'EmpresaController');
});

Route::group(['namespace'=>'Config', 'middleware'=>'auth'], function(){
	Route::get('config/perfil/lista', ['uses' => 'PerfilController@lista', 'as' => 'config.perfil.lista']);
	Route::resource('config/perfil', 'PerfilController', [ 'as' => 'config' ]);
	Route::resource('/config', 'ConfigController', ['except' => ['show', 'create', 'edit', 'store', 'update', 'destroy']]);
});

Route::group(['namespace'=>'Usuario', 'middleware'=>'auth'], function(){
    Route::post('/usuario/maisinfo', ['uses' => 'UsuarioController@maisinfo', 'as' => 'usuario.maisInfo']);
    Route::post('/usuario/endereco', ['uses' => 'UsuarioController@endereco', 'as' => 'usuario.endereco']);
    Route::post('/usuario/contato', ['uses' => 'UsuarioController@contato', 'as' => 'usuario.contato']);
    Route::post('/usuario/conta', ['uses' => 'UsuarioController@conta', 'as' => 'usuario.conta']);
    Route::get('/usuario/ge/{id}', ['uses' => 'UsuarioController@getEndereco', 'as' => 'usuario.getEndereco']);
    Route::get('/usuario/gc/{id}', ['uses' => 'UsuarioController@getContato', 'as' => 'usuario.getContato']);
    Route::get('/usuario/cadastro', ['uses' => 'UsuarioController@cadastro', 'as' => 'usuario.cadastro']);
    Route::post('/usuario/avatar', ['uses' => 'UsuarioController@avatarUser', 'as' => 'usuario.avatar']);
    Route::get('/usuario/lista', ['uses' => 'UsuarioController@lista', 'as' => 'usuario.lista']);
    Route::resource('/usuario', 'UsuarioController');
});


Route::group(['namespace'=>'Admin', 'middleware'=>'auth'], function(){

	Route::get('admin/modulo/lista', ['uses' => 'ModuloController@lista', 'as' => 'admin.modulo.lista']);
	Route::resource('admin/modulo', 'ModuloController', ['except' => ['show'], 'as' => 'admin']);

	Route::get('admin/log/lista', ['uses' => 'LogsController@lista', 'as' => 'admin.log.lista']);
	Route::resource('admin/log', 'LogsController', ['except' => ['show'], 'as' => 'admin']);

	Route::get('admin/tipo/lista', ['uses' => 'TipoController@lista', 'as' => 'admin.tipo.lista']);
	Route::resource('admin/tipo', 'TipoController', ['except' => ['show'], 'as' => 'admin']);

	Route::get('/admin/lista', ['uses' => 'AdminController@lista', 'as' => 'admin.lista']);
	Route::resource('/admin', 'AdminController', ['except' => ['create', 'show', 'edit', 'update', 'destroy']]);
});



Route::group(['namespace'=>'Site'], function(){
	Route::get('/site/transparencia/lista',  ['uses' => 'SiteController@transparenciaLista', 'as' => 'site.transparencia.lista']);
	Route::get('/site/transparencia',  ['uses' => 'SiteController@transparencia', 'as' => 'site.transparencia']);
	Route::resource('/site', 'SiteController');
});


Route::group(['namespace'=>'Sistema', 'middleware'=>'auth'], function(){
	Route::get('/crud/lista', ['uses' => 'SisCrudController@lista', 'as' => 'crud.lista']);
	Route::resource('/crud', 'SisCrudController');
});
*/

Route::group(['namespace'=>'Management', 'middleware'=>'auth'], function(){
    /*
    Route::get('/users/listrole/{id}', ['uses' => 'UsersController@listroles', 'as' => 'users.listroles']);
    Route::get('/users/showroles/{id}', ['uses' => 'UsersController@showroles', 'as' => 'users.showroles']);
    Route::post('/users/storeroles/{id}', ['uses' => 'UsersController@storeroles', 'as' => 'users.storeroles']);
    Route::delete('/users/destroyroles/{user}/{role}', ['uses' => 'UsersController@destroyrole', 'as' => 'users.destroyrole']);
    */

    Route::post('/users/role/list', 'UsersController@getRelation')->name('users.getrelation');
    Route::post('/users/storerole/{id}', 'UsersController@storeRoles')->name('users.sync');
    Route::delete('/users/destroyrole/{role}/{id}', 'UsersController@destroyRole')->name('users.detach');
    Route::get('/users/roles/{id}', 'UsersController@indexRoles')->name('users.roles');

    /*
    Route::get('/users/listclients/{id}', ['uses' => 'UsersController@listclients', 'as' => 'users.listclients']);
    Route::get('/users/showclients/{id}', ['uses' => 'UsersController@showclients', 'as' => 'users.showclients']);
    Route::post('/users/storeclients/{id}', ['uses' => 'UsersController@storeclients', 'as' => 'users.storeclients']);
    Route::delete('/users/destroyclients/{user}/{client}', ['uses' => 'UsersController@destroyclient', 'as' => 'users.destroyclient']);
    */

    Route::post('/users/client/list', 'UsersController@getClients')->name('users.getclients');
    Route::post('/users/storeclient/{id}', 'UsersController@storeClients')->name('users.syncclient');
    Route::delete('/users/destroyclient/{client}/{id}', 'UsersController@destroyclients')->name('users.detachclients');
    Route::get('/users/clients/{id}', 'UsersController@indexClients')->name('users.clients');

    //m Route::post('/users/list', ['uses' => 'UsersController@getData', 'as' => 'users.list']);
    
    // Route::get('generate-pdf', 'PdfGenerateController@pdfview')->name('generate-pdf');
    Route::get('/users/users', 'UsersController@users')->name('users-pdf');
    
    //m Route::resource('/users', 'UsersController');

    
});

Route::group(['namespace'=>'Management', 'middleware'=>['auth', 'tenant', 'bindings']], function(){
    Route::post('/users/list', ['uses' => 'UsersController@getData', 'as' => 'users.list']);
    Route::resource('/users', 'UsersController');
    Route::get('/users/entities/{id}', ['uses' => 'UsersController@entities', 'as' => 'users.entities']);
    Route::get('/users/agencies/{id}', ['uses' => 'UsersController@agencies', 'as' => 'users.agencies']);

    Route::post('/usersoperationals/list', ['uses' => 'UsersOperationalsController@getData', 'as' => 'usersoperationals.list']);
    Route::resource('/usersoperationals', 'UsersOperationalsController');
    
});


Route::group(['namespace'=>'Management', 'middleware'=>'auth', 'prefix'=>'system'], function(){
	
	//Route::get('/statuses/lista', ['uses' => 'StatusesController@lista', 'as' => 'statuses.lista']);
    //Route::resource('/statuses', 'StatusesController');

    // Route::get('/roles/listpermissions/{id}', ['uses' => 'RolesController@listpermissions', 'as' => 'roles.listpermissions']);
    // Route::get('/roles/showpermissions/{id}', ['uses' => 'RolesController@showpermissions', 'as' => 'roles.showpermissions']);
    // Route::post('/roles/storepermissions/{id}', ['uses' => 'RolesController@storepermissions', 'as' => 'roles.storepermissions']);
    // Route::delete('/roles/destroypermissions/{role}/{permission}', ['uses' => 'RolesController@destroypermission', 'as' => 'roles.destroypermission']);

    Route::post('/roles/list', ['uses' => 'RolesController@getData', 'as' => 'roles.list']);
    Route::post('/roles/permissions/list', 'RolesController@getRelation')->name('roles.getrelation');
    Route::post('/roles/storepermission/{id}', 'RolesController@storePermissions')->name('roles.sync');
    Route::delete('/roles/destroypermission/{permission}/{id}', 'RolesController@destroyPermission')->name('roles.detach');
    Route::get('/roles/permissions/{id}', 'RolesController@indexPermissions')->name('roles.permissions');
    Route::resource('/roles', 'RolesController');

    Route::post('/permissions/list', ['uses' => 'PermissionsController@getData', 'as' => 'permissions.list']);
    Route::resource('/permissions', 'PermissionsController');
});
/*
Route::group(['namespace'=>'Management', 'middleware'=>'auth', 'prefix'=>'diario'], function(){
    Route::post('/dailyfiles/list', ['uses' => 'DailyfilesController@getData', 'as' => 'dailyfiles.list']);
    Route::resource('/dailyfiles', 'DailyfilesController');
});
*/

Route::group(['namespace'=>'Operational', 'middleware'=>['auth', 'tenant', 'bindings'], 'prefix'=>'diario'], function(){
    Route::get('/themes/lista', ['uses' => 'ThemesController@lista', 'as' => 'themes.lista']);
    Route::get('/themes/types/{id}', ['uses' => 'ThemesController@types', 'as' => 'themes.types']);
    Route::get('/themes/subtypes/{id}', ['uses' => 'ThemesController@subtypes', 'as' => 'themes.subtypes']);
    Route::post('themes/list', 'ThemesController@getData')->name('themes.list');
    Route::resource('/themes', 'ThemesController');

    Route::post('themefiles/list', 'ThemeuploadsController@getData')->name('themefiles.list');
	Route::resource('/themefiles', 'ThemeuploadsController');
});

Route::group(['namespace'=>'Backofficer', 'middleware'=>['auth', 'tenant', 'bindings'], 'prefix'=>'diario'], function(){
    Route::post('editors/list', 'EditorsController@getData')->name('editors.list');
    Route::put('/editors/replicate/{id}', ['uses' => 'EditorsController@replicate', 'as' => 'editors.replicate']);
    Route::get('/editors/disapprove/{id}', ['uses' => 'EditorsController@disapprove', 'as' => 'editors.disapprove']);
    Route::get('/editors/approves/{id}', ['uses' => 'EditorsController@approves', 'as' => 'editors.approves']);
    Route::get('/editors/message/{id}', ['uses' => 'EditorsController@message', 'as' => 'editors.message']);
    Route::resource('/editors', 'EditorsController');

    Route::get('/designers/dailythemes/{id}', 'DesignersController@showAllDailyThemes')->name('designers.dailythemes');
    Route::get('/designers/downloadthemes/{id}', 'DesignersController@downloadThemesPDF')->name('designers.downloadthemespdf');
    Route::get('/designers/downloadpdfdaily/{id}', 'DesignersController@downloadPDFDaily')->name('designers.downloadpdfdaily');
    Route::get('/designers/diagrammer/{id}', ['uses' => 'DesignersController@diagrammer', 'as' => 'designers.diagrammer']);
    Route::post('designers/list', 'DesignersController@getData')->name('designers.list');
    Route::get('/designers/themes/{id}', 'DesignersController@indexThemes')->name('designers.themes');
    Route::post('/designers/themes/list', 'DesignersController@getRelation')->name('designers.getrelation');
    Route::resource('/designers', 'DesignersController');

    Route::post('/dailyfiles/list', ['uses' => 'DailyfilesController@getData', 'as' => 'dailyfiles.list']);
    Route::resource('/dailyfiles', 'DailyfilesController');

});

Route::group(['namespace'=>'Management', 'middleware'=>['auth', 'tenant', 'bindings'], 'prefix'=>'register'], function(){
    Route::post('/clients/list', ['uses' => 'ClientsController@getData', 'as' => 'clients.list']);
    Route::resource('/clients', 'ClientsController');

    Route::post('/entities/list', ['uses' => 'EntitiesController@getData', 'as' => 'entities.list']);
    Route::resource('/entities', 'EntitiesController');

    Route::post('/agencies/list', ['uses' => 'AgenciesController@getData', 'as' => 'agencies.list']);
    Route::resource('/agencies', 'AgenciesController');

    Route::post('/calendars/list', ['uses' => 'CalendarsController@getData', 'as' => 'calendars.list']);
    Route::resource('/calendars', 'CalendarsController');
    
    Route::post('/sections/list', ['uses' => 'SectionsController@getData', 'as' => 'sections.list']);
    Route::post('/sections/entities/list', 'SectionsController@getRelation')->name('sections.getrelation');
    // Route::post('/sections/entities/sync/{id}', 'SectionsController@syncEntities')->name('sections.sync');
    Route::post('/sections/storeentities/{id}', 'SectionsController@StoreEntities')->name('sections.sync');
    // Route::delete('/sections/entities/detach/{entity}/{id}', 'SectionsController@detachEntities')->name('sections.detach');
    Route::delete('/sections/destroyentities/{entity}/{id}', 'SectionsController@DestroyEntity')->name('sections.detach');
    Route::get('/sections/entities/{id}', 'SectionsController@indexEntities')->name('sections.entities');
    Route::resource('/sections', 'SectionsController');

    Route::post('/types/list', ['uses' => 'TypesController@getData', 'as' => 'types.list']);
    Route::resource('/types', 'TypesController');

    Route::post('/subtypes/list', ['uses' => 'SubtypesController@getData', 'as' => 'subtypes.list']);
    Route::resource('/subtypes', 'SubTypesController');

    Route::post('/dailies/list', ['uses' => 'DailiesController@getData', 'as' => 'dailies.list']);
    Route::resource('/dailies', 'DailiesController');

    Route::post('/layout/list', ['uses' => 'LayoutsController@getData', 'as' => 'layout.list']);
    Route::resource('/layout', 'LayoutsController');
});

Route::group(['namespace'=>'Management', 'middleware'=>'auth', 'prefix'=>'register'], function(){
    Route::post('/layoutpatterns/list', ['uses' => 'LayoutPatternsController@getData', 'as' => 'layoutpatterns.list']);
    Route::resource('/layoutpatterns', 'LayoutPatternsController');

    Route::post('/competences/list', ['uses' => 'CompetencesController@getData', 'as' => 'competences.list']);
    Route::resource('/competences', 'CompetencesController');
});