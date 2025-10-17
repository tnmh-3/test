document.write("問１<br>");
function criclearea(r){
    return "半径"+r+"cmの円の面積は"+(r)*(r)*3.14+"㎠です。<br>";
}

document.write(criclearea(5));
document.write(criclearea(7));
document.write(criclearea(10));

document.write("<br>");
document.write("問２<br>");

function ticketprice(group, adult,child){
    return group + "グループの合計金額は"+((adult*500)+(child*200))+"円です。<br>";
}

document.write("A"+ticketprice("a", 2,4));
document.write("B"+ticketprice(1,5));
document.write("C"+ticketprice(3,7));
