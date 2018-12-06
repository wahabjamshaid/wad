var AccountDetails=[{AccountTitle:'wahab_jamshaid',
    AvailibleBalance:12454654,
    AccountCurrency:'PKR',
    IBAN:'pk7872394732966666'

},{
    AccountTitle:'w j',
    AvailibleBalance:1212541,
    AccountCurrency:'PKR',
    IBAN:'pk78723947329842768'

},{

    AccountTitle:'khizer ',
    AvailibleBalance:7800000,
    AccountCurrency:'PKR',
    IBAN:"pk78723947329842769"


}];
var currentUser=0;
var title=document.getElementById('title');
var balance=document.getElementById('balance');
var currency=document.getElementById('currency');
var Iban=document.getElementById('IBAN');
title.innerHTML=AccountDetails[0].AccountTitle;
balance.innerHTML=AccountDetails[currentUser].AvailibleBalance;
currency.innerHTML=AccountDetails[currentUser].AccountCurrency;
Iban.innerHTML=AccountDetails[currentUser].IBAN;
var deposit;
var withdraw;


function depositamount(event)
{
    deposit= document.getElementById("deposit");
    if(event.keycode==13||c.key=="Enter")
    {
        deposit=AvailibleBalance=AvailibleBalance+deposit;
        balance.innerHTML=AccountDetails[currentUser].AvailibleBalance+deposit;
    }



}
function withdrawamount(c)
{

    if(c.keycode==13||c.key==="Enter")
    {
        AvailibleBalance=AvailibleBalance-withdraw;
        balance.innerHTML=AccountDetails[currentUser].AvailibleBalance;
    }


}
