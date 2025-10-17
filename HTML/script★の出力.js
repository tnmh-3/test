document.write("問１");
document.write("<br>");
for(var line1=1; line1<=5; line1++){
    document.write("★");
}
document.write("<br>");
document.write("<br>");


document.write("問２");
document.write("<br>");
for(var line2=1; line2<=2; line2++){
    for(var star2=1; star2<=3; star2++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問３");
document.write("<br>");
for(var line3=1; line3<=2; line3++){
    for(var star3=1; star3<=5; star3++){
        document.write("☆");
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問４");
document.write("<br>");
for(var line4=1; line4<=4; line4++){
    for(var star4=1; star4<=5; star4++){
        document.write("★");
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問５");
document.write("<br>");
for (var line5=1; line5<=4; line5++){
    for(var star5=1; star5<=3; star5++){
        document.write("★"); 
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問６");
document.write("<br>");
for(var line6=1; line6<=3; line6++){
    for(var star6=1; star6<=3; star6++){
        if(star6 % 2==1){
            document.write("☆");
        }
        else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問７");
document.write("<br>");
for(var line7=1; line7<=4; line7++){
    for(var star7=1; star7<=5; star7++){
        if(star7 % 2==0){
            document.write("☆");
        }
        else{
            document.write("★");
        }
    }
    document.write("<br>");
}
document.write("<br>");


document.write("問８");
document.write("<br>");
for(var line8=1; line8<=5; line8++){
    for(var star8=1; star8<=line8; star8++){
        document.write("★");
    }
    document.write("<br>");
}