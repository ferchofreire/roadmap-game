var _idporter = document.getElementById('_canv_porter');
var _idBlueOcean = document.getElementById('_canv_blueocean');
var _idImpacto = document.getElementById('_canv_porter');


ImrimirInfo = () => {

    // Impresión de Información dashboard anterior:

    document.getElementById("WE758c502459").children[0].children[0].innerText = numeral(TablaMetricas[1].CustomerRetention).format("%0.0");
    document.getElementById("WEc540f563bd").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].CustomerRetention).format("%0.0");
    
    document.getElementById("WE04c16bc5d2").children[0].children[0].innerText = numeral(TablaMetricas[1].MargenBruto).format("$0,0");
    document.getElementById("WE25ced6883e").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].MargenBruto).format("$0,0");

    document.getElementById("WE60a1924efd").children[0].children[0].innerText = numeral(TablaMetricas[1].UniqueVisitors).format("0,0");
    document.getElementById("WEe7d57d066f").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].UniqueVisitors).format("0,0");

    document.getElementById("WE08fee0a358").children[0].children[0].innerText = numeral(TablaMetricas[1].RevenueGrowth).format("0,0");
    document.getElementById("WE7c94692405").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].RevenueGrowth).format("0,0");

    document.getElementById("WE5930d142ed").children[0].children[0].innerText = "ROI: " + numeral(TablaMetricas[1].ROI).format("%0.0");

    document.getElementById("WE467aba21ca").children[0].children[0].innerText = numeral(TablaMetricas[1].Netprofit).format("0,0");
    document.getElementById("WE83bb0d9604").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].Netprofit).format("0,0");

    //document.getElementById("WE6767bb318c").children[0].children[0].innerText = numeral(TablaMetricas[1].Capitalexpenditure).format("$0,0.00");
    //document.getElementById("WE062ee5ab8d").children[0].children[0].children[0].innerText = numeral(TablaMetricas[0].Capitalexpenditure).format("$0,0.00");

    document.getElementById("WE6abcf505f8").children[0].children[0].innerText = numeral(TablaMetricas[1].NPS).format("0");
    
    SetGraficos();

}
SendPuntaje = (p) => {

	//

   }

function GetData(){
    
}


;


   SendPuntaje = (p) => {

    ImrimirInfo();

   }

;

BajarCartas = () => {
	
	
	fetch('../realtime-canvas.php?f=carga&g='+_phpid+'&p='+_PartidaID, {
	 
	})
	
	.then(response => response.json())
	  .then(data => { 
	
		console.log(data);

        game_cards=data[0];
        IdPartidaActiva=data[1][0];
        Sprint = parseInt(IdPartidaActiva.SprintAct);
	
		for (a=0; a < game_cards.length; a++){
			game_cards[a].obj = CrearItemCards(game_cards[a].tipo, game_cards[a].id, game_cards[a].titulo, a)
			Limpieza();
		}
		
		ColocarCards();
        //EstadosResultado(game_cards);
        SimularTick();

    })
}
    // Hacer un Tick:
SimularTick = () => {    
    fetch("../realtime-canvas.php?f=finalForces&p="+_partid+"&g="+_phpid, {

    }).then(response => response.json())
    .then(data => { 

        RealtimeData[3][0] = data;
        RealtimeData[3][0] = RealtimeData[3][0][0];

        EstadosResultado(game_cards);
        //SetGraficos();

    });
	
}
VariableCompetitiva = 0;



document.getElementById("WEcb32818414").style.display = "none";
document.getElementById("WEe1784fd48a").style.display = "none";


AllCards = [];

DataGraf = [];

CargarTodasCartas = () => {
    
    fetch("../cards.php?f=listar", {
     
    })
    
    .then(response => response.json())
      .then(data => {
        console.log(data)
        
        AllCards = data;
        DataGraf = AllCards[2].map((s)=>{return {"n":s.titulo, "v":s.ValorJson[10]}});

       // SetGraficos();

       BajarCartas();
        
    }) 
    .catch(error => {
        
        alert(error);
        console.error(error)
      })
        
    console.log("OK")
}

CargarTodasCartas();

function ContarBlueOceans(){

    GameCardFiltro = game_cards.filter((s)=>{return (s.tipo == 3 && s.pos > 0)})
    Tmp = AllCards[2].map((x, value)=>{ 

        FND = GameCardFiltro.find((a)=>{return a.id === x.ID})
        if (FND) {
            return FND.ValorJson[10][0].var
        } else {
            return x.ValorJson[10][0].standr
        }
        
    
    
        })

    return Tmp
}

function ContarImpactos(){
    
    GameCardFiltro = game_cards.filter((s)=>{return (s.pos > 0)});

    _VarHow = [0,0,0,0,0,0];
    _VarWho = [0,0,0,0,0,0];
    _VarWhy = [0,0,0,0,0,0];
    _VarWhat = [0,0,0,0,0,0];


    GameCardFiltro.map( (z) => {
        _tmp_str = z.impact
        
        How = _tmp_str.search("0")
        Who = _tmp_str.search("1")
        Why = _tmp_str.search("2")
        What = _tmp_str.search("3")
        
        if(How != -1){
            _VarHow[z.tipo-1] += 1;
        }

        if(Who != -1){
            _VarWho[z.tipo-1] += 1;
        }

        if(Why != -1){
            _VarWhy[z.tipo-1] += 1;
        }

        if(What != -1){
            _VarWhat[z.tipo-1] += 1;
        }
       
    })

    _tmp_impc = [];
    _tmp_impc = _tmp_impc.concat(_VarWho, _VarWhy, _VarWhat, _VarHow);
        

    return _tmp_impc;

}

function LecturaFuerzasdeporter (){

    FuerzasdePorter();

    if (RealtimeData[3][0] != undefined){
        document.getElementById("WE0f2ac6ae5a").children[0].children[0].innerText = RealtimeData[3][0]["txt_8"];
    }

    return [Cinco_FuerzasDePorter.BarreraDeEntrada, 
    Cinco_FuerzasDePorter.Proveedores,
    Cinco_FuerzasDePorter.Sustitutos,
    Cinco_FuerzasDePorter.Competencia,
    Cinco_FuerzasDePorter.Clientes,
    Cinco_FuerzasDePorter.RegulatoryFactors,
    Cinco_FuerzasDePorter.Complementors,
    Cinco_FuerzasDePorter.Others,
    ]
}

function SetGraficos(){
    
    Chart.defaults.global.defaultFontColor = 'white';
    Chart.defaults.scale.gridLines.color = "rgba(60, 60, 60, 1.0)";
    //Chart.defaults.global.legend.display = false
    //Chart.defaults.scale.ticks.display = false;
    
    
    ListBlues = DataGraf.map((x)=>{ return x.n})
    StandrBlues = DataGraf.map((x)=>{ return x.v[0]["standr"]});
    VarBlues = ContarBlueOceans();
    
    var GraficosBlueOcean = new Chart(_canv_blueocean, {

        type: 'line',
        data: {
            labels: ListBlues,
            datasets: [{
                label: 'Comparativa',
                data: VarBlues,
                backgroundColor: 'rgba(50, 255, 50, 0.9)',
                borderColor: 'rgba(255, 255, 255, 1.0)',

                borderWidth: 2,
                fill: false
            },
                      {

                label: 'Original',
                data: StandrBlues,
                backgroundColor:	 'rgba(80, 80, 80, 0.8)',
                borderColor: 'rgba(255, 0, 0, 1.0)',
                borderWidth: 3,
                fill: false
            },]
        },
        options: {
            
            legend: {
                display: false,
                labels: {
                    fontColor: 'rgb(255, 99, 132)'
                }
                
        },
            
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,

                    }
                }]
            }
        },
        
    });
    
    var GraficosImpactos = new Chart(_canv_Impacto, {

        type: 'polarArea',
        data: {
            labels: ['Trends', 
                     'Pattern', 
                     'BlueOceans', 
                     'Test', 
                     'Driver', 
                     '--',
                     'Trends', 
                     'Pattern', 
                     'BlueOceans', 
                     'Test', 
                     'Driver', 
                     '--',
                     'Trends', 
                     'Pattern', 
                     'BlueOceans', 
                     'Test', 
                     'Driver', 
                     '--',
                     'Trends', 
                     'Pattern', 
                     'BlueOceans', 
                     'Test', 
                     'Driver', 
                     '--',
                    
                    
                    ],
            datasets: [{
                label: 'Fuerzas de Porter',
                data: ContarImpactos(),
                backgroundColor: ["#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216",
                                 "#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216",
                                 "#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216",
                                 "#66c430", "#fbbc09", "#1ab5f1", "#134785", "#ec0772", "#f47216",
                                 ],
                borderColor: 'rgba(38, 38, 38, 1.0)',
                lineTension: 0.2,
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            scale: {            
                ticks: {
                    display: false
                }
            },

            legend: {
            display: false,
            labels: {
                fontColor: 'rgb(255, 99, 132)'
            }
                
        },
       
       
            
            /* scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,

                    }
                }]
            } */
        
                                   
        }
    });
    
    var GraficoMarketShre = new Chart(_canv_MarkShre, {
   
           type: 'pie',
           data: {
               labels: ['Proyectado', 'Final'],
               datasets: [{
                   labels: ['Proyectado', 'Ultimo'],
                   data: [TablaMetricas[0].MarketShare,TablaMetricas[1].MarketShare],
                   backgroundColor: ['rgba(88, 88, 88, 0.8)','rgba(20, 60, 255, 1.0)'],
                   borderColor: 'rgba(0, 0, 0, 0.2)',
                   HoverOffSet: 6,
                   borderWidth: 3,
                   
               }
               ]
           },
           options: {
               scales: {
                   /*yAxes: [{
                       ticks: {
                           beginAtZero: true,
                           callback: function(value, index, values) {
                               return numeral(value).format('%0.0');},
                            max: 1.0
   
                       }
                   }]*/
               },
               tooltips: {
				callbacks: {
                    label: function(tooltipItems, data) { 
                        return data.datasets[tooltipItems.datasetIndex].label + ' OK';
                    }
				}
            }
           }
       });
    
    var GraficoROI = new Chart(_canv_ROI, {
   
           type: 'doughnut',
           data: {
               labels: ['Inicial', 'Final'],
               datasets: [{
                   labels: ['Inicial', 'Ultimo'],
                   data: [TablaMetricas[0].ROI,TablaMetricas[1].ROI],
                   backgroundColor: ['rgba(88, 88, 88, 0.8)','rgba(20, 60, 255, 1.0)'],
                   borderColor: 'rgba(255, 255, 255, 0.2)',
                   HoverOffSet: 6,
                   borderWidth: 1,
                   
               }
               ]
           },
           options: {
               scales: {
                   /*yAxes: [{
                       ticks: {
                           beginAtZero: true,
                           callback: function(value, index, values) {
                               return numeral(value).format('%0.0');},
                            max: 1.0
   
                       }
                   }]*/
               },
               tooltips: {
                callbacks: {
                    label: function(tooltipItem, data) {
                        var label = data.datasets[tooltipItem.datasetIndex].label || '';



                        if (label) {
                            label += ': ';
                        }
                        label += numeral(tooltipItem.yLabel).format('%0.0')
                        //label += Math.round(tooltipItem.yLabel * 100) / 100;
                        return label;
                        
                        fontColor: 'white'
                    }
                }
            }
           }
       });

       var GraficosFuersasPorter = new Chart(_idporter, {

        type: 'polarArea',
        data: {
            labels: ['BarreraDeEntrada', 
                     'Proveedores', 
                     'Sustitutos', 
                     'Competencia', 
                     'Clientes', 
                     'Regulatory Factors', 
                     'Complementors' , 
                     'Others'],
            datasets: [{
                label: 'Fuerzas de Porter',
                data:  LecturaFuerzasdeporter(),
                backgroundColor: ['#AA0000',
                                 '#00AA00',
                                 '#0000AA',
                                 '#ff0088',
                                 '#AAffAA',
                                 '#AA00FF',
                                 '#AAFFAA',
                                 '#AAFFAA',],
                borderColor: 'rgba(38, 38, 38, 1.0)',
                lineTension: 0.2,
                borderWidth: 2,
                fill: true
            }]
        },
        options: {
            scale: {            
                ticks: {
                    display: false,
                    min: 0,
                    max: 7
                }
            },

            legend: {
                display: false,
                labels: {
                    display: false,
                    fontColor: 'rgb(0, 0, 0)'
                }
                
        }
        
        
        
                                   
        }


        
    });
    
}

//setTimeout(SetGraficos, 500);
/*setTimeout(()=>{
    EstadosResultado(game_cards);
    SetGraficos();
    }, 1000, );*/