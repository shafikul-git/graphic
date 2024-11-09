document.addEventListener("DOMContentLoaded",function(){const r=document.getElementById("uploadStatus");let i=null,a=null;window.allFiles=function(l){const o=l.getAttribute("click-ids"),e=document.getElementById(o+"uploadFiles"),t=document.getElementById(o+"alreadyUploadFiles");e.style.display="none",t.style.display="block"},window.uploadFile=function(l){const o=l.getAttribute("click-ids"),e=document.getElementById(o+"uploadFiles"),t=document.getElementById(o+"alreadyUploadFiles");e.style.display="block",t.style.display="none";const s=e.getAttribute("inputId");u(o,s)},window.loadFiles=function(l){let o=l.getAttribute("data-route"),e=l.getAttribute("buttonID"),t=l.getAttribute("inputId");document.getElementById("loadFile"),i&&(o+="?cursor="+i),$.ajax({url:o,method:"GET",success:function(s){const d=document.getElementById(e+"AllFiles");s.data.forEach(n=>{d.innerHTML+=`
                        <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                            <img class="img-fluid" onclick="selectImage(${n.id}, '${e}', '${t}')"
                                src="storage/${n.file_name}">
                        </div> 
                    `}),i=s.next_cursor,i||(document.getElementById("loadFile").disabled=!0)},error:function(s){console.error("Error fetching files:",s)}})},window.selectImage=function(l,o,e){a&&(a.style.border="");const t=document.querySelector(`img[onclick="selectImage(${l}, '${o}', '${e}')"]`);t&&(t.style.border="2px solid blue",t.style.padding="4px",t.style.margin="4px",a=t),e&&(document.getElementById(e).value=l)};function u(l,o){new Dropzone("#"+l+"uploading",{parallelUploads:1,uploadMultiple:!0,addRemoveLinks:!0,init:function(){this.on("sending",function(e,t,s){s.append("_token","{{ csrf_token() }}")}),this.on("totaluploadprogress",function(e){$("#progressBar").css("width",e+"%"),$("#progressBar").attr("aria-valuenow",e)}),this.on("queuecomplete",function(){$("#progressBar").css("width","0%")}),this.on("success",function(e,t){console.log(t);const s=document.getElementById(l+"currentUploadFiles");t.paths.forEach(c=>{s.innerHTML+=`
                         <div class="col-sm-6 col-md-4 col-lg-3 item m-1">
                                <img class="img-fluid" src="storage/${c.file_name}"
                                 onclick="selectImage(${c.id}, '${l}', '${o}')"
                                >
                            </div> 
                        `}),document.getElementById("uploadStatus").innerHTML=`
                        <div class="bs-toast toast fade show bg-success position-fixed top-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1055;">
                            <div class="toast-header">
                                <i class='bx bx-bell me-2 text-black'></i>
                                <div class="me-auto fw-medium text-black">Success</div>
                                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                            <div class="toast-body text-black">
                                File Upload Successful
                            </div>
                        </div>
                    `;var d=document.querySelector(".toast"),n=new bootstrap.Toast(d);n.show()}),this.on("error",function(e,t){r.innerHTML='<x-Balert error="FIle Upload Fail"></x-Balert>'})}})}});
