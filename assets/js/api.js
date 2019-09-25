//attachments
$(function(){
    fetch('http://aplikasihukum.ip-dynamic.com/api/attachments/')
    .then(data=>{return data.json})
    .then(result=>{console.log(result)})
})