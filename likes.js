const btn = document.getElementById("155");
const likes = document.getElementById("156");

let count = 0;

btn.onclick = function(){
count+=1;
likes.textContent=count;

}




