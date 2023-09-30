var total_ammount = document.getElementById('tAmmount');
var main_ammount = document.getElementById('Mprice');
var dis_ammount = document.getElementById('Discount');
var txt = document.getElementById('txt');
function calculation() {
    if (Number(dis_ammount.value) == 100 || Number(dis_ammount.value) >= 100 ) {
        alert("The value is 100 or above 100 not allowed");
        dis_ammount.value = "";
    }
    else {

        var tnum = Number(Mprice.value);
        var Dnum = Number(dis_ammount.value);
        var discount_ammount = tnum - (tnum * Dnum / 100);

        total_ammount.value = discount_ammount.toFixed(2);
    }
}
