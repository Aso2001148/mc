window.onload=loading;
function loading(){
    document.getElementById("add_que").innerHTML="";
}
function question_num(){
    const val=document.getElementById("question_num").value;
    document.getElementById("add_que").innerHTML="ちんこ";
        if(val===3){
            document.getElementById("add_que").innerHTML = "<div><input type='text' name='que_name' required>" +
                "<input type='file' name='image'></div>" +
                "<div><input type='text' name='que_name' required>" +
                "<input type='file' name='image'></div>";
        }else if(val===4){
            document.getElementById("add_que").innerHTML = "<div><input type='text' name='que_name' required>" +
                "<input type='file' name='image'></div>";
        }else if(val===5){
            document.getElementById("add_que").innerHTML = "<div><input type='text' name='que_name' required>" +
                "<input type='file' name='image'></div>";
        }else if(val===6){
            document.getElementById("add_que").innerHTML = "<div><input type='text' name='que_name' required>" +
                "<input type='file' name='image'></div>";
        }else{
            document.getElementById("add_que").innerHTML="ちんちん";
        }
}