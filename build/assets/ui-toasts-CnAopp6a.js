(function(){const e=document.querySelector(".toast-placement-ex"),c=document.querySelector("#showToastPlacement");let o,s,t;function n(l){l&&l._element!==null&&(e&&(e.classList.remove(o),DOMTokenList.prototype.remove.apply(e.classList,s)),l.dispose())}c&&(c.onclick=function(){t&&n(t),o=document.querySelector("#selectTypeOpt").value,s=document.querySelector("#selectPlacement").value.split(" "),e.classList.add(o),DOMTokenList.prototype.add.apply(e.classList,s),t=new bootstrap.Toast(e),t.show()})})();