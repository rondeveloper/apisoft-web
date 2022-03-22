  $(function(){

    let speed = 500;
    let autoplaySpeed = "6000";
    let thumbImg = "thumb-img";
    let toggleslider=false;
  
    let img_src, img_alt, img_srcset, img_type;
    $("." + thumbImg + " li:first-child").addClass("view");

         $("." + thumbImg + " li").on("click", function(){
        clearInterval(interval)
        $(this).addClass("view");
        $(".view").siblings().not(this).removeClass("view");
        img_src = $(this).children('img').attr("src");
        $(this).parents("." + thumbImg).prev().children('img').fadeTo(speed,0.2, function(){
          $(this).attr("src", img_src).fadeTo(speed,1);
        });
    });
   

$("." + thumbImg + " li:last-child").addClass("last");
  
    const interval = setInterval(function(){
      if($("." + thumbImg + " li.view").hasClass("last")) {
        $("." + thumbImg + " li.view").is(function(){
          $(this).removeClass("view")
          $("." + thumbImg + " li:first-child").addClass("view");
          if($("." + thumbImg + " picture").length) {
            img_src = $(".view").children("picture").children("img").attr("src");
            img_srcset = $(".view").children("picture").children("source").attr("srcset");
            img_type = $(".view").children("picture").children("source").attr("type");
            img_alt = $(".view").children("picture").children("img").attr("alt");
          } else {
            img_src = $(".view").children("img").attr("src");
            img_alt = $(".view").children("img").attr("alt");
          }
          $(this).parents("." + thumbImg).prev().children('img').fadeTo(speed,0.2, function(){
            $(this).attr({"src": img_src, "alt": img_alt}).fadeTo(speed,1);
          });
          $(this).parents("." + thumbImg).prev().children('source').fadeTo(speed,0.2, function(){
            $(this).attr({"srcset": img_srcset, "type": img_type}).fadeTo(speed,1);
          });
        });
      } else {
        $("." + thumbImg + " li.view").is(function(){
          $(this).removeClass("view")
          $(this).next().addClass("view");
          if($("." + thumbImg + " picture").length) {
            img_src = $(this).next().children("picture").children("img").attr("src");
            img_srcset = $(this).next().children("picture").children("source").attr("srcset");
            img_type = $(this).next().children("picture").children("source").attr("type");
            img_alt = $(this).next().children("picture").children("img").attr("alt");
          } else {
            img_src = $(this).next().children("img").attr("src");
            img_alt = $(this).next().children("img").attr("alt");
          }
          $(this).parents("." + thumbImg).prev().children('img').fadeTo(speed,0.2, function(){
            $(this).attr({"src": img_src, "alt": img_alt}).fadeTo(speed,1);
          });
          $(this).parents("." + thumbImg).prev().children('source').fadeTo(speed,0.2, function(){
            $(this).attr({"srcset": img_srcset, "type": img_type}).fadeTo(speed,1);
          });
        });
      }
    }, autoplaySpeed);
  
});
let items = document.querySelectorAll('.carousel .carousel-item')
items.forEach((el) => {
    const minPerSlide = 4
    let next = el.nextElementSibling
    for (var i=1; i<minPerSlide; i++) {
      if (!next) {
        	next = items[0]
      	}
        let cloneChild = next.cloneNode(true)
        el.appendChild(cloneChild.children[0])
        next = next.nextElementSibling
    }
})
const go_up = document.querySelector('.go-up')
const sbg=document.querySelector('.sbg')
const sbg_1=document.querySelector('.sbg-1')
const pw=document.querySelector('.paginas-web')
const am=document.querySelector('.aplicaciones-moviles')
const sbg_3=document.querySelector('.sbg-3')
const sbg_4=document.querySelector('.sbg-4')
const sbg_5=document.querySelector('.sbg-5')
const sbg_6=document.querySelector('.sbg-6')
const se=document.querySelector('.sistemas-escritorio')
const pi=document.querySelector('.proyectos-informaticos')
const sbg_7=document.querySelector('.sbg-7')
const sbg_8=document.querySelector('.sbg-8')
const sbg_9=document.querySelector('.sbg-9')
const sbg_10=document.querySelector('.sbg-10')
const aw=document.querySelector('.aplicaciones-web')
const wh=document.querySelector('.web-hosting')
const sbg_11=document.querySelector('.sbg-11')
const sbg_12=document.querySelector('.sbg-12')
window.addEventListener("scroll",()=>{
  if(window.pageYOffset>300){
    go_up.classList.add("active")
  }else{
    go_up.classList.remove("active")
  }

  if(window.pageYOffset>600){
    sbg.classList.add("sbg")
    sbg_1.classList.add("sbg-1")
    pw.classList.add("paginas-web")
  }else{
    sbg.classList.remove("sbg")
    sbg_1.classList.remove("sbg-1")
    pw.classList.remove("paginas-web")
  }if(window.pageYOffset>900){
    am.classList.add("aplicaciones-moviles")
    sbg_3.classList.add("sbg-3")
    sbg_4.classList.add("sbg-4")
  }else{
    am.classList.remove("aplicaciones-moviles")
    sbg_3.classList.remove("sbg-3")
    sbg_4.classList.remove("sbg-4")
  }if(window.pageYOffset>1200){
    se.classList.add("sistemas-escritorio")
    sbg_5.classList.add("sbg-5")
    sbg_6.classList.add("sbg-6")
  }else{
    se.classList.remove("sistemas-escritorio")
    sbg_5.classList.remove("sbg-5")
    sbg_6.classList.remove("sbg-6")
  }
  if(window.pageYOffset>1500){
    pi.classList.add("proyectos-informaticos")
    sbg_7.classList.add("sbg-7")
    sbg_8.classList.add("sbg-8")
  }else{
    pi.classList.remove("proyectos-informaticos")
    sbg_7.classList.remove("sbg-7")
    sbg_8.classList.remove("sbg-8")
  }if(window.pageYOffset>1800){
    aw.classList.add("aplicaciones-web")
    sbg_9.classList.add("sbg-9")
    sbg_10.classList.add("sbg-10")
  }else{
    aw.classList.remove("aplicaciones-web")
    sbg_9.classList.remove("sbg-9")
    sbg_10.classList.remove("sbg-10")
  }if(window.pageYOffset>2100){
    wh.classList.add("web-hosting")
    sbg_11.classList.add("sbg-11")
    sbg_12.classList.add("sbg-12")
  }else{
    wh.classList.remove("web-hosting")
    sbg_11.classList.remove("sbg-11")
    sbg_12.classList.remove("sbg-12")
  }
})

