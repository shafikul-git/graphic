import{a as e}from"./axios-CCb-kr4I.js";window.axios=e;window.axios.defaults.headers.common["X-Requested-With"]="XMLHttpRequest";window.getData=async function(o,t={}){try{return(await e.get(o,{params:t})).data}catch(r){return console.error("GET Error:",r),null}};window.postData=async function(o,t={}){try{return(await e.post(o,t)).data}catch(r){return console.error("POST Error:",r),null}};window.updateData=async function(o,t={}){try{return(await e.put(o,t)).data}catch(r){return console.error("UPDATE Error:",r),null}};