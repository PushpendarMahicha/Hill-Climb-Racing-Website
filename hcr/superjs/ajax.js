
let logined;
checklogin();
function checklogin()
{
    let ajax=new XMLHttpRequest();
    ajax.open("POST","../database connect/connect_comment.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function show2()
    {
        if(this.status==200)
        {

            // login check
            logined=this.responseText;
        }
    }
    let data="status=1";
    ajax.send(data);
}
//get2 is used in add comment button that used to show or load comments into the comment-box. it is also hide comments form comment-box
function get2(button)
{
    console.log(logined);
    let add_comment_button=button;
    let content_id=add_comment_button.parentElement.getAttribute("name");
    let commentsdiv=button.nextElementSibling;

    if(button.textContent=="show comments")
    {
    let ajax=new XMLHttpRequest();
    ajax.open("POST","../database connect/connect_comment.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function show2()
    {
        if(this.status==200)
        {
            console.log("request for get comments made");
            let response=this.responseText;
            let button_and_input_for_add_comment=`<input class="input-white" type="text" name="message" placeholder="enter comment">
            <button class="button-white add-comment-button" onclick="add(this)">comment</button>`;
            commentsdiv.innerHTML=response+(logined!=0?button_and_input_for_add_comment:"");
            button.textContent="hide comments";
        }
    }
    //sending content_id and get=1
    let request="content_id="+content_id+"&get=1";
    ajax.send(request);
    }
    else
    {//toggle

       commentsdiv.innerHTML="";
        button.textContent="show comments";
    }
}
//get work same as get2 but it is use to reload the comments if comment is deleted or added
//the remove and add method use this
function get(button)
{

    let ajax=new XMLHttpRequest();
    ajax.open("POST","../database connect/connect_comment.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function show2()
    {
        if(this.status==200)
        {
            console.log("reload made get called");
            let comment=button.nextElementSibling;
            let button_and_input_for_add_comment=`<input class="input-white" type="text" name="message" placeholder="enter comment">
            <button class="button-white add-comment-button" onclick="add(this)">comment</button>`;
            comment.innerHTML=this.responseText+(logined!=0?button_and_input_for_add_comment:"");
        }
    }
    //sending content_id and get=1 so that back know it is for accessing
    let data="content_id="+button.parentElement.getAttribute("name")+"&get=1";
    ajax.send(data);
    
}
function remove(button)
{
    let ajax=new XMLHttpRequest();
    ajax.open("POST","../database connect/connect_comment.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    //sending comment_id and remove=1 to tell request is for removing
    let request="comment_id="+(button.name)+"&remove=1";
    ajax.onreadystatechange=function show2()
    {
        if(this.status==200)
        {
            get(button.parentElement.parentElement.previousElementSibling);
        }
    }
    ajax.send(request);
   
}
function add(button)
{
    let input=button.previousElementSibling.value;
    let content_id=button.parentElement.parentElement.getAttribute("name");
    console.log(content_id);
    let ajax=new XMLHttpRequest();
    ajax.open("POST","../database connect/connect_comment.php",true);
    ajax.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    ajax.onreadystatechange=function show2()
    {
        if(this.status==200)
        {
            get(button.parentElement.previousElementSibling);
        }
    }
    //sending post=1 and content_id and message
    //post=1 for telling request is for add
    let data="message="+input+"&content_id="+content_id+"&post=1";
    console.log(data);
    ajax.send(data);
}