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
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => ['auth', 'App\Http\Middleware\palika']], function() {

Route::resource('palika','PalikaController');


});

Route::group(['middleware' => ['auth', 'admin']], function() {

Route::get('check_district/{provience}','Auth\RegisterController@district');
Route::get('client','Auth\RegisterController@clients');
Route::get('check_local_state/{district}','Auth\RegisterController@local_state');
Route::post('registerUser','Auth\RegisterController@registerUser');
Route::get('userList','Auth\RegisterController@userList')->name('userList');
Route::get('wardRegisterForm/{palika_id}','Auth\RegisterController@wardRegisterForm')->name('wardRegisterForm');
Route::post('registerWardUser','Auth\RegisterController@registerUser')->name('registerUser');
Route::get('wardUsers/{id}/list','Auth\RegisterController@wardUsers')->name('wardUsers');
Route::get('user/{id}/editForm','Auth\RegisterController@editUserForm')->name('editUserForm');
Route::post('user/{id}/update','Auth\RegisterController@updateUser')->name('updateUser');
Route::get('user/{user_id}/delete', 'Auth\RegisterController@deleteUser')->name('deleteUser');
Route::resource('category','CategoryController');

});



	Route::group(['middleware' => ['auth', 'ward_palika']], function() {

	Route::post('darta_num','Darta_Chalani\SearchController@darta_num');

	Route::post('chalani_num','Darta_Chalani\ChalaniSearchController@chalani_num');

Route::post('date_wise','HomeController@date_wise');

Route::post('get_readable_name/{sifaris_title1}/{sifaris_title2?}','HomeController@get_readable_name');
Route::get('find_darta','Darta_chalani\DartaController@find_darta');
// panjikaran
Route::resource('birthcertificate','panjikaran\BirthCertification');

Route::resource('deathcertificate','panjikaran\DeathRegistration');

Route::resource('marriagecertificate','panjikaran\MarrigeCertification');

Route::resource('migration','panjikaran\MigrationRegistration');
Route::resource('search','Darta_Chalani\SearchController');
Route::resource('search_chalani','Darta_Chalani\ChalaniSearchController');
// citizenship

Route::resource('CitizenshipCertificate','citizenship\CitizenshipCertificateController');

Route::resource('Citizenship','citizenship\CitizenshipController');

Route::resource('CitizenSifaris','citizenship\CitizenSifarisController');

Route::resource('Nagarikta','citizenship\NagariktaController');

// ghar jagga jamin
Route::resource('charkillapramanit','ghar_jagga_jamin\CharKillaPramanitController');
Route::resource('gharbatopramanit','ghar_jagga_jamin\GharBatoPramanitController');
Route::resource('GharJaggaNamsariKitaniController','ghar_jagga_jamin\GharJaggaNamsariKitaniController');
Route::resource('GharJaggaNamsariSifaris','ghar_jagga_jamin\GharJaggaNamsariSifarisController');
Route::resource('GharJanauneSifarisController','ghar_jagga_jamin\GharJanauneSifarisController');
Route::resource('GharKaymSifaris','ghar_jagga_jamin\GharKaymSifarisController');

Route::resource('gharpatalsifaris','ghar_jagga_jamin\GharPatalSifarisController');
Route::resource('jaggadhanipramanpatrasifaris','ghar_jagga_jamin\JaggadhaniPramanpatraPratilipiSifarisController');
Route::resource('jaggadhnigharsifaris','ghar_jagga_jamin\JaggaDhaniPramanPurjamaGharKayemController');
Route::resource('JotChodPatraSifarisAfno','ghar_jagga_jamin\JotChodPatraSifarisAfnoController');
Route::resource('JotChodPatraSifarisController','ghar_jagga_jamin\JotChodPatraSifarisController');
Route::resource('MohiJaggaBadfadSifarisController','ghar_jagga_jamin\MohiJaggaBadfadSifarisController');

Route::resource('MohiLagatBadfadSifarisController','ghar_jagga_jamin\MohiLagatBadfadSifarisController');
Route::resource('MohiLagatKattaSifarisController','ghar_jagga_jamin\MohiLagatKattaSifarisController');
Route::resource('MohinamSariController','ghar_jagga_jamin\MohinamSariController');
Route::resource('MuchulkaController','ghar_jagga_jamin\MuchulkaController');
Route::resource('MuchulkaGuthiController','ghar_jagga_jamin\MuchulkaGuthiController');
Route::resource('NaksaController','ghar_jagga_jamin\NaksaController');

Route::resource('PhotoTasSifarisController','ghar_jagga_jamin\PhotoTasSifarisController');
Route::resource('SarjiminController','ghar_jagga_jamin\SarjiminController');
Route::resource('ShrestaController','ghar_jagga_jamin\ShrestaController');
Route::resource('ShrestaUparSifarisController','ghar_jagga_jamin\ShrestaUparSifarisController');
Route::resource('SuchanaTasController','ghar_jagga_jamin\SuchanaTasController');
Route::resource('SuchanaTasGuthiController','ghar_jagga_jamin\SuchanaTasGuthiController');

Route::resource('kittakatsifaris','ghar_jagga_jamin\KittaKatSifarisController');

Route::resource('tresnaksa','ghar_jagga_jamin\TresNaksaController');
Route::resource('WadaSarjiminController','ghar_jagga_jamin\WadaSarjiminController');


Route::resource('nonprofit','sangsanstha\NonProfitOrgRegistration');

Route::resource('renew','sangsanstha\SasthaNabikaranSifarisController');

Route::resource('new','sangsanstha\SasthaDartaSifarisController');

Route::resource('NirmanBebasaye','busines\NirmanBebasayeController');
Route::resource('BebasayeDartaNaya','busines\BebasayeDartaNayaController');

Route::resource('Panno','busines\PannoController');

Route::resource('KarobarPanno','busines\KarobarPannoController');

Route::resource('UdyogDartaSifaris','busines\UdyogDartaSifarisController');

Route::resource('jetmachine', 'busines\JetMachineController');

Route::resource('scholarship','edu\ScholorshipController');

Route::resource('bipanna','edu\BipannaController');


Route::resource('UpacharSahayogSifaris','eco\UpacharSahayogSifarisController');


Route::resource('GeneralSifaris','free\GeneralSifarisController');
Route::resource('khulaipathayeko','free\KhulaiPathayekoController');
Route::resource('kakshyathap','free\KakshyaThapController');
Route::resource('GeneralSifarisEnglish','free\GeneralSifarisEnglishController');

Route::resource('courtfeenarakhne','free\CourtFeeNarakhneController');

Route::resource('mohilagatkatta','free\MohiLagatKattaController');

Route::resource('kothakhalisifaris','free\KothaKhaliSifarisController');

Route::resource('FarakNameTharNagarikta','other\FarakNameTharNagariktaController');

Route::resource('FarakFarakNameTharPramanit','other\FarakFarakNameTharPramanitController');

Route::resource('FarakFarakJanmaMitiPramanit','other\FarakFarakJanmaMitiPramanitController');


Route::resource('FarakFarakEnglishHijePramanit','other\FarakFarakEnglishHijePramanitController');



Route::resource('KhulaiPathayekoSifaris','other\KhulaiPathayekoSifarisController');

Route::resource('unmarriedverification','englishformat\UnmarriedVerificationController');
Route::resource('birthdateverification','englishformat\BirthDateVerificationController');
Route::resource('relationverification','englishformat\RelationVerificationController');
Route::resource('occupationverification','englishformat\OccupationVerificationController');
Route::resource('annualincomeverification','englishformat\AnnualIncomeVerificationController');

Route::resource('propertyvaluation', 'englishformat\PropertyValuationController');

Route::resource('taxclearance', 'englishformat\TaxClearanceController');

Route::resource('asthaiebasobasSifaris','samajik_pariwarik\AsthaieBasobasSifarisController');
Route::resource('esthaiebasobasSifaris','samajik_pariwarik\EsthaieBasobasSifarisController');

Route::resource('marriageverification','samajik_pariwarik\MarriageVerificationController');

Route::resource('janmamitipramanit','samajik_pariwarik\JanmamitiPramanitController');

Route::resource('abibahitpramanit','samajik_pariwarik\AbibahitPramanitController');

Route::resource('natapramanit','samajik_pariwarik\NataPramanitController');

Route::resource('tinpustepramanit','samajik_pariwarik\TinpustePramanitController');

Route::resource('internalmigrationsifaris','samajik_pariwarik\InternalMigrationSifarisController');

Route::resource('nabalakparichayesifaris','samajik_pariwarik\NabalakParichayeSifarisController');

Route::resource('mirtakhakdarsifaris','samajik_pariwarik\MirtakHakdarSifarisController');

Route::resource('apangaparichayasifaris','samajik_pariwarik\ApangaParichayaSifarisController');

Route::resource('addressverification','englishformat\AddressVerificationController');

Route::resource('sadakkhanesifaris','bhautiknirman\SadakKhaneSifarisController');

Route::resource('nepalsarkarbatokayem','bhautiknirman\NepalSarkarkoNaammaBatoKayemController');

Route::resource('dharajadansifaris','bhautiknirman\DharaJadanSifarisController');
Route::resource('bijulijadansifaris','bhautiknirman\BijuliJadanSifarisController');

// Route::resource('milapatrasifaris','nyaayakaanun\MilaPatraSifarisController');

Route::get('karbahipatra/{year}','Darta_Chalani\DartaController@karbahipatra');
Route::get('find_darta','Darta_Chalani\DartaController@find_darta');
Route::resource('darta','Darta_Chalani\DartaController');
Route::resource('chalani','Darta_Chalani\ChalaniController');

	});
