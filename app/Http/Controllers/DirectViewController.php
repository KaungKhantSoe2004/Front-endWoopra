<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DirectViewController extends Controller
{
    //directRegisterPage
    public function directRegisterPage(){
        return view('user.register');
    }

// directLoginPage
public function directLoginPage(){
    return view('user.login');
}


// directHomePage
public function directHomePage(){
    return view('user.home');
}


// directAboutPage
public function directAboutPage(){
    return view('user.about');
}


// directClausePage
public function directClausePage(){
    return view('user.clause');
}


// directDepositPage
public function directDepositPage(){
    return view('user.deposit');
}






// directEventPage
public function directEventPage(){
    return view('user.event');
}


// directFaqsPage
public function directFaqsPage(){
    return view('user.faqs');
}

// directNoticePage
public function directNoticePage(){
    return view('user.notice');
}

// directMessagesPage
public function directMessagesPage(){
    return view('user.messages');
}



// directProfilesPage
public function directProfilesPage(){
    return view('user.profiles');
}


// directRecords
public function directRecordsPage(){
    return view('user.records');
}


// directVipLevel
public function directVipLevelPage(){
    return view('user.vipLevel');
}


// directEventPage
public function directStartingPage(){
    return view('user.starting');
}


// directEventPage
public function directWithdrawPage(){
    return view('user.withdraw');
}





// directDhistoryPage, directOrderPage, directInformationPage, directCollectionArea, directMoreServices,directMyTeam


// directDhistoryPage
public function directDhistoryPage(){
    return view('user.dhistory');
}

// directOrderPage
public function directOrderPage(){
    return view('user.order');
}


// directInformationPage
public function directInformationPage(){
    return view('user.information');
}

// directCollectionArea
public function directCollectionArea(){
    return view('user.collectionArea');
}

// directMoreServices
public function directMoreServices(){
    return view('user.moreServices');
}

// directMyTeam
public function directMyTeam(){
    return view('user.myTeam');
}


//directTac
public function directTac(){
    return view('user.tac');
}


// directUpdatePassword
public function directUpdatePassword(){
    return view('user.updatePassword');
}


// directTransactionPassword
public function directTransactionPassword(){
    return view('user.updateTransactionPassword');
}
// directWHistory
public function directWHistory(){
    return view('user.whistory');
}

// ways
public function directWays(){
    return view('user.ways');
}


// play
public function directPlay(){
    return view('user.play');
}


// myNotice
public function directMyNotice(){
    return view('user.myNotice');
}


//directUsdt
public function directUsdt(){
    return view('user.usdt');
}

// directCommisionStatement
public function directCommisionStatement(){
    return view('user.commisionStatement');
}



// directTeamRevenue
public function directTeamRevenue(){
    return view('user.teamRevenue');
}

}


