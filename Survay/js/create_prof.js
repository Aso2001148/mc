function old_checked(){
    let old_name=document.getElementsByName('old');
    for(let i=0;i<old_name.length;i++){
        let id=old_name.item(i).id;
        if(old_name.item(i).checked){
            document.getElementById(id + "_li").style.backgroundColor='#b6e5fa';
            document.getElementById(id + "_li").style.tranceform="translateY(-6px)";
            document.getElementById(id + "_li").style.boxShadow="0 0 0 0 rgba(0, 0, 0, 0.47)";
        }else{
            document.getElementById(id + "_li").style.backgroundColor='#efefef';
            document.getElementById(id+"_li").style.tranceform="translateY(-3px)";
            document.getElementById(id+"_li").style.boxShadow="0 3px rgba(0, 0, 0, 0.47)";
        }
    }
}

function gender_checked(){
    let gender_name=document.getElementsByName('gender');
    for(let i=0;i<gender_name.length;i++){
        let id=gender_name.item(i).id;
        if(gender_name.item(i).checked){
            document.getElementById(id + "_li").style.backgroundColor='#cafaee';

            document.getElementById(id + "_li").style.tranceform="translateY(-6px)";
            document.getElementById(id + "_li").style.boxShadow="0 0 0 0 rgba(0, 0, 0, 0.47)";

        }else{
            document.getElementById(id + "_li").style.backgroundColor='#efefef';
            document.getElementById(id+"_li").style.tranceform="translateY(-3px)";
            document.getElementById(id+"_li").style.boxShadow="0 3px rgba(0, 0, 0, 0.47)";
        }
    }

}

function blood_checked(){
    let blood_name=document.getElementsByName('blood');
    for(let i=0;i<blood_name.length;i++){
        let id=blood_name.item(i).id;
        if(blood_name.item(i).checked){
            document.getElementById(id + "_li").style.backgroundColor='#faebb6';

            document.getElementById(id + "_li").style.tranceform="translateY(-6px)";
            document.getElementById(id + "_li").style.boxShadow="0 0 0 0 rgba(0, 0, 0, 0.47)";

        }else{
            document.getElementById(id + "_li").style.backgroundColor='#efefef';
            document.getElementById(id+"_li").style.tranceform="translateY(-3px)";
            document.getElementById(id+"_li").style.boxShadow="0 3px rgba(0, 0, 0, 0.47)";
        }
    }

}

function job_checked(){
    let job_name=document.getElementsByName('job');
    for(let i=0;job_name.length;i++){
        let id=job_name.item(i).id;
        if(job_name.item(i).checked){
            document.getElementById(id + "_li").style.backgroundColor='#fab6b6';

            document.getElementById(id + "_li").style.tranceform="translateY(-6px)";
            document.getElementById(id + "_li").style.boxShadow="0 0 0 0 rgba(0, 0, 0, 0.47)";

        }else{
            document.getElementById(id + "_li").style.backgroundColor='#efefef';
            document.getElementById(id+"_li").style.tranceform="translateY(-3px)";
            document.getElementById(id+"_li").style.boxShadow="0 3px rgba(0, 0, 0, 0.47)";
        }
    }
}