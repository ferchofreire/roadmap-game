var x = document.body.cloneNode(true);
var a = document.createElement('body');
a = x.cloneNode(true);
a.setAttribute("class", "RWAuto");
a.setAttribute("data-gl", "{&quot;KeywordsHomeNotInherits&quot;:false}");

IcoIMG = ["WE8c90227353", "WEb7e0f2bfe2", "WE6a3fa0ca8e", "WE25221949f7", "WE05144a68b7", "WEa910e033a3", "WE58d4d7752b"];

Opt = [];
// Carga por PHP
/*Disp = [
        {grupo: 1, players:10, titulo:"Team 1"},
        {grupo: 4, players:5, titulo:"Team 4"},
        {grupo: 7, players:15, titulo:"Team 7"},
        {grupo: 3, players:25, titulo:"Team 3"},
       ]; */

htmls = document.getElementById('WE1b57b02841').children[0].children[0].children[0]

for (i=0; i< htmls.childElementCount ;i++){
    Opt.push(htmls.children[i]);
}

Opt.forEach((s)=>{
    s.style.display = "none" // inline-block
})

if (Disp.length > 0){
    Disp.forEach((s, value)=>{
            Opt[s.grupo-1].style.display = "inline-block" // inline-block
            Opt[s.grupo-1].children[0].children[0].children[0].children[2].innerText = s.titulo;
            Opt[s.grupo-1].children[0].children[0].children[0].children[1].innerText = s.players;
            
        })
}

Snd = "adm";


SelecGr = (i) => {
    console.log("lctGR");
    
    if (i==0){
        if (Disp.length > 0){
            document.getElementById('WE1b57b02841').style.visibility = "initial";
        }
    } else {
        document.getElementById('WE1b57b02841').style.visibility = "hidden";
        document.getElementById('WE1e073f9aea').children[0].children[0].innerText = Disp.find((s)=>{return s.grupo == parseInt(i)}).titulo
        Snd = parseInt(i)-1;
        document.getElementById('WE6ba5a1362d').innerHTML = document.getElementById(IcoIMG[i-1]).innerHTML
    }
}



;
loggin = () => {
    
    document.getElementById('WE8284213653').style.visibility = "visible"

var data = new FormData()
    
    passw = document.getElementsByName("Pass")[0].value

    data.append('grupo', Snd)
    data.append('Pass', passw)
    data.append('lang', lang_op)
    

    fetch('sessions.php', {
      method: 'POST',
      body: data
    })
    
    .then(response => response.json())
      .then(data => {
    
        console.log(data)	
        if(data.Ok){
            this.location.href = data.Ok;
        } else {
            if(data.error){
                err()
                document.getElementById('WE8284213653').style.visibility = "hidden"
            }
        }
            
    
      })
      .catch(error => {
        
        loggin();
        console.error(error)
        document.getElementById('WE8284213653').style.visibility = "hidden"
        
        
      })
    
}

lang(lang_op);
