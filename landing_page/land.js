function scrollToTop()
{
  window.scrollTo(0,0);
}
let scrollbtn=document.getElementById("scrollTop");

function scrollcheck()
{
  if(document.body.scrollTop>20 || document.documentElement.scrollTop>20)
  {
    scrollbtn.style.display='block';
     
  }
  else{
    
    scrollbtn.style.display='none';
  }

}
window.addEventListener('scroll',scrollcheck);