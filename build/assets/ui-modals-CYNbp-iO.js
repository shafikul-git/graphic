(function(){const t=document.querySelector("#youTubeModal"),o=t.querySelector("iframe");t.addEventListener("hidden.bs.modal",function(){o.setAttribute("src","")}),function(){[].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]')).map(function(a){a.onclick=function(){const u=this.getAttribute("data-bs-target"),i=this.getAttribute("data-theVideo"),d=`${i}?autoplay=1`,e=document.querySelector(`${u} iframe`);e&&e.setAttribute("src",d)}})}()})();