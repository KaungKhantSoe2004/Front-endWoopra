<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectViewController;

Route::get('/welcome', function () {
    return view('welcome');
});


// register and login
Route::get('/register', [DirectViewController::class, 'directRegisterPage'])->name('user#loginPage');
Route::get('/login',[DirectViewController::class, 'directLoginPage'])->name('user#registerPage');
Route::get('/', [DirectViewController::class, 'directHomepage'])->name("user#homePage");
Route::get('/about', [DirectViewController::class, 'directAboutPage'])->name("user#aboutPage");
Route::get('/clause', [DirectViewController::class, 'directClausePage'])->name('user#clausePage');
Route::get('/event',[DirectViewCOntroller::class, 'directEventPage'])->name('user#eventPage');
Route::get('faqs',[DirectViewController::class, 'directFaqsPage'])->name('user#faqsPage');
Route::get('notice',[DirectViewController::class, 'directNoticePage'])->name('user#noticePage');
Route::get('records',[DirectViewController::class, 'directRecordsPage'])->name('user#recordsPage');
Route::get('information',[DirectViewController::class, 'directInformationPage'])->name('user#informationPage');
Route::get('updatePassword', [DirectViewController::class, 'directUpdatePassword'])->name('user#directUpdatePassword');
Route::get('updateTransactionPassword', [DirectViewController::class, 'directTransactionPassword'])->name('user#directUpdateTransactionPassword');
Route::get('tac', [DirectViewController::class, 'directTac'])->name('user#tac');
Route::get('messages',[DirectViewController::class, 'directMessagesPage'])->name('user#messagePage');
Route::get('profiles',[DirectViewController::class, 'directProfilesPage'])->name('user#profilesPage');

Route::get('/deposit', [DirectViewController::class, 'directDepositPage'])->name('user#depositPage');
Route::get('starting',[DirectViewController::class, 'directStartingPage'])->name('user#startingPage');
Route::get('play',[DirectViewController::class,'directPlay'])->name('user#play');
Route::get('ways',[DirectViewController::class, 'directWays'])->name('user#ways');
Route::get('/profiles/USDT', [DirectViewController::class, 'directUsdt'])->name('user#directUsdt');
Route::get('myNotice',[DirectViewController::class, 'directMyNotice'])->name('user#myNotice');
Route::get('dhistory',[DirectViewController::class, 'directDhistoryPage'])->name('user#dhistoryPage');
Route::get('whistory',[DirectViewController::class, 'directWHistory'])->name('user#whistory');
Route::get('profiles/moreServices', [DirectViewController::class, 'directMoreServices'])->name('user#moreServices');
Route::get('CommissionStatement', [DirectViewController::class, 'directCommisionStatement'])->name('user#commisionStatement');
Route::get('profiles/TeamRevenue', [DirectViewController::class, 'directTeamRevenue'])->name('user#teamRevenue');
Route::get('profiles/myTeam', [DirectViewController::class, 'directMyTeam'])->name('user#myTeam');
Route::get('profiles/CollectionArea', [DirectViewController::class, 'directCollectionArea'])->name('user#collectionArea');
Route::get('withdraw',[DirectViewController::class, 'directWithdrawPage'])->name('user#withdrawPage');
Route::get('order',[DirectViewController::class, 'directOrderPage'])->name('user#orderPage');




// last
Route::get('vipLevel',[DirectViewController::class, 'directVipLevelPage'])->name('user#vipLevelPage');
