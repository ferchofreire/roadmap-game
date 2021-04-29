 Pantalla = 2;
 VariableCompetitiva = 1;


   function EstadosResultado(C) {
   
   Cinco_FuerzasDePorter = {
           BarreraDeEntrada: 4,
           Proveedores: 4,
           Sustitutos: 4,
           Competencia: 4,
           Clientes: 4,
           RegulatoryFactors: 4,
           Complementors: 4,
           Others: 4,
       };
   
   FuerzasdePorter = () =>{
       this.totalfuerzasdeporter = {
           TotalFuerzasDePorter:0,
       }
   
	   if (RealtimeData[3][0] != undefined){
	   Cinco_FuerzasDePorter.BarreraDeEntrada = 
				   (parseInt(RealtimeData[3][0]['1_capital']) +
				   parseInt(RealtimeData[3][0]['1_distribution']) +
				   parseInt(RealtimeData[3][0]['1_experience']) +
				   parseInt(RealtimeData[3][0]['1_reputation']) +
				   parseInt(RealtimeData[3][0]['1_scale'])) / 5

		Cinco_FuerzasDePorter.Proveedores = 
				(parseInt(RealtimeData[3][0]['2_abilityintegrate']) +
				parseInt(RealtimeData[3][0]['2_brandcost']) +
				parseInt(RealtimeData[3][0]['2_price_sesibilities']) +
				parseInt(RealtimeData[3][0]['2_size_supliers']) +
				parseInt(RealtimeData[3][0]['2_technicalcost'])) / 5

				   Cinco_FuerzasDePorter.Sustitutos = 
				   parseFloat(RealtimeData[3][0]['3_availabiliti'])
					   
					   Cinco_FuerzasDePorter.Competencia =
				(parseInt(RealtimeData[3][0]['4_diferentation']) +
				parseInt(RealtimeData[3][0]['4_effectivecompetitors']) +
				parseInt(RealtimeData[3][0]['4_market']) +
				parseInt(RealtimeData[3][0]['4_protectstackes']) +
				parseInt(RealtimeData[3][0]['4_strategicstackes'])) / 5

				Cinco_FuerzasDePorter.Clientes =

					(parseInt(RealtimeData[3][0]['5_abilityintegrate']) +
					parseInt(RealtimeData[3][0]['5_brandcost']) +
					parseInt(RealtimeData[3][0]['5_pricesesibilities']) +
					parseInt(RealtimeData[3][0]['5_sizecostumers']) +
					parseInt(RealtimeData[3][0]['5_thecnicalcost'])) / 5

					Cinco_FuerzasDePorter.RegulatoryFactors = 
					parseInt(RealtimeData[3][0]['6_impactchanges'])

							Cinco_FuerzasDePorter.Complementors =
							parseInt(RealtimeData[3][0]['7_relations'])
							
							Cinco_FuerzasDePorter.Others =
							parseInt(RealtimeData[3][0]['8_others'])

						}
       
       totalfuerzasdeporter.TotalFuerzasDePorter = 
       Cinco_FuerzasDePorter.BarreraDeEntrada +
       Cinco_FuerzasDePorter.Proveedores +
       Cinco_FuerzasDePorter.Sustitutos +
       Cinco_FuerzasDePorter.Competencia +
       Cinco_FuerzasDePorter.Clientes +
       Cinco_FuerzasDePorter.RegulatoryFactors +
       Cinco_FuerzasDePorter.Complementors +
       Cinco_FuerzasDePorter.Others
	   }
	   
	   

   
   FuerzasdePorter()
   
   // Cards Selectas:
   
   Cards = [
   
   
   // ValorJson: {tipo: 3}
   
   
   /*id: "91"
   num: "6"
   obj: div#WE980fb9c2a5.BaseDiv.RBoth.OEWEPanel.OESK_WEPanel_Default
   opcion: 2
   pos: "3"
   tipo: 3
   titulo: "Path Six – Time"
   valor: "0" */
   
               //  TrendCards:
   
       // tipo 1:
       
       {id:"15", tipo:"1",num:"4",pos:0,titlulo:"Defects",valor:24, obj: "", opcion:"", pos:0, ValorJson:""},
       {id:"15", tipo:"1",num:"4",pos:0,titlulo:"Defects",valor:45, obj: "", opcion:"", pos:0, ValorJson:""},
       {id:"15", tipo:"1",num:"12",titlulo:"CustomerSatis faction",valor:36, obj: "", opcion:"", pos:0, ValorJson:""},
       {id:"15", tipo:"1",num:"20",titlulo:"Conversion Rate",valor:24, obj: "", opcion:"", pos:0, ValorJson:""},
   
      // tipo 2:
   
       {id:"15", tipo:"2",num:"9",titlulo:"Platfform",valor:140.1950, obj: "", opcion:"", pos:0, ValorJson:""},
       {id:"15", tipo:"2",num:"9",titlulo:"Platfform",valor:140.1950, obj: "", opcion:"", pos:0, ValorJson:""},
       {id:"15", tipo:"2",num:"29",titlulo:"Add-on",valor:23.710, obj: "", opcion:"", pos:0, ValorJson:""},
   
       // Sprint 4 / Digital Drive Card:
   
       {id:"15", tipo:"4",num:"7",titlulo:"Digital Customer Relationship",valor:23.71, obj: "", opcion:"", pos:0, ValorJson:""}, 
       {id:"15", tipo:"4",num:"14",titlulo:"Platform Channel",valor:23.6705, obj: "", opcion:"", pos:0, ValorJson:""},
   
   
   
       // Sprint 6:
   
        /*  A considerar como trendcards*/
   
   
               //  BlueOcean:
   
               {id:"15", tipo:"3",num:"4",titlulo:"Path Four - Complementary Products & Services",valor:0, obj: "", opcion:2, pos:0, ValorJson:[
   
                   {tipo: 2}, 
                   {Otros: 0.125, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.005, Reparaciones: 0.025, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.2, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.025, RatioVenta: -7.5, GtosOficina: 0.005, RatioPrecio: 0.025, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.005, AmortMaquinas: 0.05},
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.25, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.25}, 
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                     
                     []
                     
                     ]
   
               }, 
   
               {id:"15", tipo:"3",num:"4",titlulo:"Path Four - Complementary Products & Services",valor:0, obj: "", opcion:4, pos:0, ValorJson:[
   
                   {tipo: 2}, 
                   {Otros: 0.125, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.005, Reparaciones: 0.025, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.2, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.025, RatioVenta: -7.5, GtosOficina: 0.005, RatioPrecio: 0.025, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.005, AmortMaquinas: 0.05},
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.25, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.25}, 
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                     
                     []
                     
                     ]
   
               },
               {id:"15", tipo:"3",num:"4",titlulo:"Path Four ",valor:0, obj: "", opcion:5, pos:0, ValorJson:[
   
                   {tipo: 2}, 
                   {Otros: 0.125, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.005, Reparaciones: 0.025, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.2, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.05},
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.005, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.025, RatioVenta: -7.5, GtosOficina: 0.005, RatioPrecio: 0.025, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                    {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.005, AmortMaquinas: 0.05},
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.25, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.02, AmortMaquinas: 0.25}, 
                     {Otros: 0.05, Insumos: 0.05, Personal: 0.05, Marketing: 0.05, Alquileres: 0.05, RatioCosto: 0.05, RatioVenta: -7.5, GtosOficina: 0.05, RatioPrecio: 0.05, Reparaciones: 0.05, AmortMaquinas: 0.05}, 
                      
                     [{testc: 155, value: 1.05}, {testc: 168, value: 1.05}, {testc: 325, value: 1.05}]
                     
                     ]
   
               },
   
   
       // Sprint 3:
   
               //  TestCard:
   
       // Sprint 5:
     
     
           {id:"155", tipo:"5",num:"1",titlulo:"Platfform",valor:40000, obj: "", opcion:"", pos:5, ValorJson:""},
           {id:"168", tipo:"5",num:"8",titlulo:"BlaBla",valor:30000, obj: "", opcion:"", pos:3, ValorJson:""},
           
   
	   ]
	   
	   // filtramos
	   Cards = C.filter((f)=>{return (f.pos > 0 && f.tipo <= parseInt(IdPartidaActiva.SprintAct)-VariableCompetitiva)})
   
   SumaCards = (tipo) => {
   
       x = numeral(0);
   
       switch(tipo){
           case 'trend':
              a = numeral(0) 
              b = numeral(0)
			  c = numeral(0)
			  d = numeral(0)
                   x = numeral(0)
   
               Cards.forEach( (i) => {
             
                       if (i.tipo == "1" ){
                       
                           zy = numeral(i.valor).divide(100)
                               a.add(zy.value())
                       }
                           
                        if (i.tipo == "2" ){
                           zy = numeral(i.valor).divide(100)
                           
                               b.add(zy.value())
                        }
   
                           if (i.tipo == "4" ){
                           zy = numeral(i.valor).divide(100)
                           
                               c.add(zy.value()) 
						   }
						   
						   if (i.tipo == "6" ){
							zy = numeral(i.valor).divide(100)
							
								d.add(zy.value()) 
							}
                   }
   
                   
               );
                   console.log("sprint 1: " + a.value())
                   console.log("sprint 2: " + b.value())
				   console.log("sprint 4: " + c.value())
				   console.log("sprint 6: " + d.value())
   
                   x.add(a.value())
                   x.add(b.value())
				   x.add(c.value())
				   x.add(d.value())
                   
                   return x.value();
   
             
                   // console.log("suma trend: "+x)
                   
                   
   
           break;
           case 'blueocean':
                       
           _bo_totales = 0;
           
           _bo = {Otros: 0, Insumos: 0, Personal: 0, Marketing: 0, Alquileres: 0, RatioCosto: 0, RatioVenta: 0, GtosOficina: 0, RatioPrecio: 0, Reparaciones: 0, AmortMaquinas: 0}
   
           
           Cards.filter((s)=>{return s.tipo === 3}).forEach((i, valor)=>{
               
               
               ran_keys = ["Otros", "Insumos", "Personal", "Marketing", "Alquileres", "RatioCosto", "RatioVenta", "GtosOficina", "RatioPrecio", "Reparaciones", "AmortMaquinas"]
   
               ran_keys.forEach((r)=>{

				try {
                   _tmp = numeral(i.ValorJson[i.opcion][r]).add(_bo[r]);    
				   _bo[r] = _tmp._value;
				} catch {}
                   
                  
               });
   
               if (i.ValorJson[9].length > 0){
                   
                   _tmp = numeral(_bo.RatioVenta);
   
                       
                       i.ValorJson[9].forEach((x)=>{
                           
                           console.log('Existe card: '+ x.testc +" -> "+Cards.filter((b)=>{return b.id === (x.testc).toString() }).length)
                           if (Cards.filter((b)=>{return b.id === (x.testc).toString() }).length > 0){
   
                               _tmp = _tmp.multiply(x.value);  
                               _bo.RatioVenta = _tmp._value;
   
                           }
                       })
   
                       
                       console.log(_tmp._value);
                   }
   
       
           });
            
               return _bo;
                       
   
   
           break;
           case 'testcard':
               _bo = 0;
               Cards.filter((s)=>{return s.tipo === "5"}).forEach((x)=>{
                   xx = numeral(_bo).add(x.valor);
                  
                   _bo = xx._value;
               }) 
   
               return _bo;
   
           break;
       }
   }
   
   ratiocosto = numeral(0);
   ratioprecio = numeral(0);
   ratioventa = numeral(0);
   
   _SumasCards = numeral(SumaCards('trend'));
   _SumasCards_BO = SumaCards('blueocean');
   _SumasCards_Tst = SumaCards('testcard');
   
   ratiocosto = numeral(_SumasCards.value());
   ratiocosto.multiply(7)
   ratiocosto.divide(Cinco_FuerzasDePorter.BarreraDeEntrada)
   ratiocosto.multiply(7)
   ratiocosto.divide(Cinco_FuerzasDePorter.Proveedores)
   
   ratioprecio = numeral(_SumasCards.value());
   ratioprecio.multiply(7)
   ratioprecio.divide(Cinco_FuerzasDePorter.Sustitutos)
   ratioprecio.multiply(7)
   ratioprecio.divide(Cinco_FuerzasDePorter.Competencia)
   ratioprecio.multiply(7)
   ratioprecio.divide(Cinco_FuerzasDePorter.Clientes)
   
   //ratiocosto = (SumaCards('trend') * 7 / Cinco_FuerzasDePorter.BarreraDeEntrada * 7 / Cinco_FuerzasDePorter.Proveedores) - 0;
   //ratioprecio = (SumaCards('trend') * 7 / Cinco_FuerzasDePorter.Sustitutos * 7 / Cinco_FuerzasDePorter.Competencia * 7 / Cinco_FuerzasDePorter.Clientes) - 0;
   
   ratioventa.add(ratiocosto.value())
   ratioventa.add(ratioprecio.value())
   ratioventa.divide(2)
   ratioventa.subtract(_SumasCards_BO.RatioVenta)
   
   CuadroVentas = () => {
           
           this.VentasLista = [
               
                   {item:"Articulo 1",NumeroVendidoInicial:"3000",CostoUnitarioInicial:"100", PrecioInicial:"200", 
                       NumeroVendido: null, costoUnitario:null, PrecioUnitario:null, VentasPorArticulo:null, CostoTotalArticulos:null},
                   {item:"Articulo 2",NumeroVendidoInicial:"2500",CostoUnitarioInicial:"150", PrecioInicial:"300",
                   NumeroVendido: null, costoUnitario:null, PrecioUnitario:null, VentasPorArticulo:null, CostoTotalArticulos:null},
                   {item:"Articulo 3",NumeroVendidoInicial:"2000",CostoUnitarioInicial:"200", PrecioInicial:"250",
                   NumeroVendido: null, costoUnitario:null, PrecioUnitario:null, VentasPorArticulo:null, CostoTotalArticulos:null},
                   {item:"Articulo 4",NumeroVendidoInicial:"1000",CostoUnitarioInicial:"150", PrecioInicial:"200",
                   NumeroVendido: null, costoUnitario:null, PrecioUnitario:null, VentasPorArticulo:null, CostoTotalArticulos:null},
                   {item:"Articulo 5",NumeroVendidoInicial:"500",CostoUnitarioInicial:"100", PrecioInicial:"200",
                   NumeroVendido: null, costoUnitario:null, PrecioUnitario:null, VentasPorArticulo:null, CostoTotalArticulos:null}
                   
   
               ];
               // TOTALES
   
               this.VentasTotales = {NumeroVendido:0, NumeroVendidoInicial:0, VentasPorArticulos:0, CostoTotalPorArticulo:0};
               _NumeroVendido = numeral(0)
               _NumeroVendidoInicial = numeral(0)
               _VentasPorArticulos = numeral(0);
               _CostoTotalPorArticulo = numeral(0);
               // Rellenanar Tabla
   
               VentasLista.forEach((x) => {
   
                   //  Numero Vendido:
                   _tmpsum = numeral(100).add(ratioventa.value())
                   _tmpNum = numeral(x.NumeroVendidoInicial)
                   _tmpNum.multiply(_tmpsum.value()) 
                   _tmpNum.divide(100)
                   x.NumeroVendido = _tmpNum._value // format('0');
                   
                   // Costo Unitario 
                   _tmpsum = numeral(100).subtract(ratiocosto.value())
                   _tmpNum = numeral(x.CostoUnitarioInicial)
                   _tmpNum.multiply(_tmpsum.value()) 
                   _tmpNum.divide(100)
                   x.costoUnitario = _tmpNum._value // format('0.00');
                   
                   // Precio Unitario
                   _tmpsum = numeral(100).add(ratioprecio.value())
                   _tmpNum = numeral(x.PrecioInicial)
                   _tmpNum.multiply(_tmpsum.value()) 
                   _tmpNum.divide(100)
                   x.PrecioUnitario = _tmpNum._value; //format('0.00')
   
                   // Ventas Por Articulos:
                   _tmpNum = numeral(x.NumeroVendido).multiply(x.PrecioUnitario);
                   x.VentasPorArticulo = _tmpNum._value;
                   // Costo total por articulo:
                   _tmpNum = numeral(x.NumeroVendido).multiply(x.costoUnitario);
                   x.CostoTotalArticulos = _tmpNum._value;
                   
                   _NumeroVendido.add(x.NumeroVendido)
                   _NumeroVendidoInicial.add(x.NumeroVendidoInicial)
                   _VentasPorArticulos.add(x.VentasPorArticulo)
                   _CostoTotalPorArticulo.add(x.CostoTotalArticulos)
   
               }); 
               VentasTotales.NumeroVendido = _NumeroVendido._value
               VentasTotales.NumeroVendidoInicial = _NumeroVendidoInicial._value
               VentasTotales.VentasPorArticulos = _VentasPorArticulos._value
               VentasTotales.CostoTotalPorArticulo = _CostoTotalPorArticulo._value
   
   
               
                   //lst[0].NumeroVendido= (lst[0].NumeroVendidoInicial * (100 + ratioventa)) / 100;
   
   
               return VentasTotales;
               }
       CuadroVentas();
   CuadroFlujoCajaTriAnual = () =>{
   
   this.ListaTriAnual = [
       [
           {Ventas:1000000.00,},   
   
       {Personal:60000.00,Alquileres:20000.00,Marketing:50000.00,AmortMquinas:15000.00,Reparaciones:0,Insumos:15000.00, GtosOficina:15000.00, 
       OtrosGtos1:250000.00,OtrosGtos2:200000.00,OtrosGtos3:30000.00,TotalGastosFijos:655000.00},
   
       {
       CostoArticulo1:200000.00,CostoArticulo2:280000.00,CostoArticulo3:200000.00,CostoArticulo4:30000.00,CostoArticulo5:15000.00, TotalGastosVariables:750000.00, TotalEgresos:1380000.00, RtaDoNeto:-380000.00, ROI:-0.475
       }
           ]
           ,[
   
           {Ventas:1200000.00,},   
   
       {Personal:75000.00,Alquileres:10000.00,Marketing:50000.00,AmortMquinas:15000.00,Reparaciones:5000,Insumos:10000.00, GtosOficina:5000.00, 
       OtrosGtos1:1250000.00,OtrosGtos2:75000.00,OtrosGtos3:15000.00,TotalGastosFijos:385000.00},
   
       {
       CostoArticulo1:220000.00,CostoArticulo2:310000.00,CostoArticulo3:250000.00,CostoArticulo4:40000.00,CostoArticulo5:25000.00,TotalGastosVariables:845000.00, TotalEgresos:1230000.00, RtaDoNeto:-30000.00, ROI:-0.513
       }
           ],
           [
   
           {Ventas:1800000.00,}, 
   
       {Personal:80000.00,Alquileres:10000.00,Marketing:35000.00,AmortMquinas:15000.00,Reparaciones:7000,Insumos:10000.00, GtosOficina:5000.00, 
       OtrosGtos1:10000.00,OtrosGtos2:10000.00,OtrosGtos3:10000.00,TotalGastosFijos:192000.00},
   
       {CostoArticulo1:200000.00,CostoArticulo2:280000.00,CostoArticulo3:200000.00,CostoArticulo4:30000.00,CostoArticulo5:15000.00,TotalGastosVariables:980000.00, TotalEgresos:1172000.00, RtaDoNeto:628000.00, ROI:0.273}
           ]
       ]
       
   }
       CuadroFlujoCajaTriAnual() 
   CuadroFlujoCaja = () => {
       
       this.listaFlujoCaja = [
           {Ventas: 0,},   
   
       {Personal:0,Alquileres:0,Marketing:0,AmortMquinas:15000,Reparaciones:0,Insumos:0, GtosOficina:0, 
       OtrosGtos1:0,OtrosGtos2:10000,OtrosGtos3:10000,},
   
       {
       CostoArticulo1:0,CostoArticulo2:0,CostoArticulo3:0,CostoArticulo4:0,CostoArticulo5:0,
       }
           ],
   
       this.TotalesAnual = 
       
           {
           TotalIngresos:null, TotalGastosFijos:null, TotalGastosVariables:null, TotalEgresos:null, RtaDoNeto:null
           }
   
   
           // Ingresos:
   
       _tmp = numeral(VentasTotales.VentasPorArticulos)
       listaFlujoCaja[0].Ventas = _tmp._value;
   
           // Egresos
   
       _tmp = numeral(80000).multiply(numeral(1).subtract(_SumasCards_BO.Personal)._value);
       listaFlujoCaja[1].Personal = _tmp._value;
   
       _tmp = numeral(10000).multiply(numeral(1).subtract(_SumasCards_BO.Alquileres)._value);
       listaFlujoCaja[1].Alquileres = _tmp._value;
   
       _tmp = numeral(15000).multiply(numeral(1).subtract(_SumasCards_BO.Marketing)._value);
       listaFlujoCaja[1].Marketing = _tmp._value;
       
       _tmp = numeral(10000).multiply(numeral(1).subtract(_SumasCards_BO.Insumos)._value);
       listaFlujoCaja[1].Insumos = _tmp._value;
   
       _tmp = numeral(10000).multiply(numeral(1).subtract(_SumasCards_BO.Reparaciones)._value);
       listaFlujoCaja[1].Reparaciones = _tmp._value;
   
       
       _tmp = numeral(5000).multiply(numeral(1).subtract(_SumasCards_BO.GtosOficina)._value);
       listaFlujoCaja[1].GtosOficina = _tmp._value;
   
       _tmp = numeral(5000).multiply(numeral(1).subtract(_SumasCards_BO.Otros)._value);
       _tmp.add(parseInt(_SumasCards_Tst))
       listaFlujoCaja[1].OtrosGtos1 = _tmp._value;
   
           // articulos:
   
         listaFlujoCaja[2].CostoArticulo1 = VentasLista[0].CostoTotalArticulos;
         listaFlujoCaja[2].CostoArticulo2 = VentasLista[1].CostoTotalArticulos;
         listaFlujoCaja[2].CostoArticulo3 = VentasLista[2].CostoTotalArticulos;
         listaFlujoCaja[2].CostoArticulo4 = VentasLista[3].CostoTotalArticulos;
         listaFlujoCaja[2].CostoArticulo5 = VentasLista[4].CostoTotalArticulos;
       
         // totales:
   
             //ingresos:
           TotalesAnual.TotalIngresos = listaFlujoCaja[0].Ventas;
   
              //egresos - fijos:
           _tmpt = numeral(0)
           
           _tmpt.add(listaFlujoCaja[1].Alquileres)
           _tmpt.add(listaFlujoCaja[1].AmortMquinas)
           _tmpt.add(listaFlujoCaja[1].GtosOficina)
           _tmpt.add(listaFlujoCaja[1].Insumos)
           _tmpt.add(listaFlujoCaja[1].Marketing)
           _tmpt.add(listaFlujoCaja[1].OtrosGtos1)
           _tmpt.add(listaFlujoCaja[1].OtrosGtos2)
           _tmpt.add(listaFlujoCaja[1].OtrosGtos3)
           _tmpt.add(listaFlujoCaja[1].Personal)
           _tmpt.add(listaFlujoCaja[1].Reparaciones)
   
           TotalesAnual.TotalGastosFijos = _tmpt._value;
   
               //egresos - variables:
   
           _tmpt = numeral(0)
           _tmpt.add(listaFlujoCaja[2].CostoArticulo1)
           _tmpt.add(listaFlujoCaja[2].CostoArticulo2)
           _tmpt.add(listaFlujoCaja[2].CostoArticulo3)
           _tmpt.add(listaFlujoCaja[2].CostoArticulo4)
           _tmpt.add(listaFlujoCaja[2].CostoArticulo5)
   
           TotalesAnual.TotalGastosVariables = _tmpt._value;
   
           _tmpt = numeral(0);
           _tmpt.add(TotalesAnual.TotalGastosFijos)
           _tmpt.add(TotalesAnual.TotalGastosVariables)
   
           TotalesAnual.TotalEgresos = _tmpt._value;
   
           _tmpt = numeral(TotalesAnual.TotalIngresos)
           _tmpt.subtract(TotalesAnual.TotalEgresos)
           TotalesAnual.RtaDoNeto = _tmpt._value;
   }
       CuadroFlujoCaja();
   TablaMetrica = () => {
       this.TablaMetricas = [
               { DeliveryReliability:0.9,LeadTime:"8:15:30",Customereffort:0.15,CustomerSatisfaction:0.85,CustomerRetention:0.35,CrossSelling:0,
               CustomerAdqusitionCost:0,UniqueVisitors:100000,Conversionrate:0.01, repeatVisitors:5556, Netprofit:10000 , RevenueGrowth:"n/c",
               ROI:0.1148, Capitalexpenditure:8000000.00, NPS:20, Ticketmediodecompra:238.89, Traficoensitioweb:235000, MargenBruto:875000.00,
               MarketShare:0.3214,
               },
               { DeliveryReliability:0, LeadTime:0, Customereffort:0, CustomerSatisfaction:0, CustomerRetention:0, CrossSelling:0,
               CustomerAdqusitionCost:0, UniqueVisitors:0, Conversionrate:0, repeatVisitors:0, Netprofit:0, RevenueGrowth:0, 
               ROI:0, Capitalexpenditure:8000000, NPS:0, Ticketmediodecompra:0, Traficoensitioweb:0, MargenBruto:0, MarketShare:0,
               }], 
   
               TablaMetricas[1].DeliveryReliability = TablaMetricas[0].DeliveryReliability + ratioventa._value / 1000;
               
               _tmp = numeral(TablaMetricas[0].LeadTime)
               _tmpt = numeral(1000).subtract(ratioventa._value)
               _tmp.multiply(_tmpt._value)
               _tmp.divide(1000)
               TablaMetricas[1].LeadTime = _tmp.format("0:00:00")
   
               TablaMetricas[1].Customereffort = TablaMetricas[0].Customereffort * (100- ratioventa._value/100 ) / 100
   
               TablaMetricas[1].CustomerSatisfaction = TablaMetricas[0].CustomerSatisfaction + ratioventa._value / 700;
               
               TablaMetricas[1].CustomerRetention = TablaMetricas[0].CustomerRetention + ratioventa._value / 300
   
               TablaMetricas[1].CrossSelling = (VentasLista[3].NumeroVendido -  VentasLista[3].NumeroVendidoInicial) / 2
               
               _tmp = VentasTotales.NumeroVendido - VentasTotales.NumeroVendidoInicial;
               TablaMetricas[1].CustomerAdqusitionCost = (_tmp == 1) ? 1 : listaFlujoCaja[1].Marketing / (VentasTotales.NumeroVendido - VentasTotales.NumeroVendidoInicial)
   
               TablaMetricas[1].UniqueVisitors = TablaMetricas[0].UniqueVisitors * (100+ratioventa._value) / 100
               
               TablaMetricas[1].Conversionrate = TablaMetricas[0].Conversionrate + ratioventa._value / 500
               
               TablaMetricas[1].repeatVisitors = TablaMetricas[1].UniqueVisitors / 18
               
               TablaMetricas[1].Netprofit = TotalesAnual.RtaDoNeto / 0.07
               
               TablaMetricas[1].RevenueGrowth = TotalesAnual.RtaDoNeto - 700000
    
   
               TablaMetricas[1].ROI = ( ListaTriAnual[0][2].RtaDoNeto + ListaTriAnual[1][2].RtaDoNeto + ListaTriAnual[2][2].RtaDoNeto + TotalesAnual.RtaDoNeto)  / TablaMetricas[0].Capitalexpenditure 
   
              
               TablaMetricas[1].NPS =  ( (ratioventa._value + TablaMetricas[0].NPS) > 100) ? 100 : ratioventa._value + TablaMetricas[0].NPS
               
               TablaMetricas[1].Ticketmediodecompra = VentasTotales.VentasPorArticulos / VentasTotales.NumeroVendido;
   
               TablaMetricas[1].Traficoensitioweb = TablaMetricas[1].UniqueVisitors * 2.35 * (100 + ratioventa._value) / 100
   
               TablaMetricas[1].MargenBruto = VentasTotales.VentasPorArticulos - VentasTotales.CostoTotalPorArticulo
   
   
               TablaMetricas[1].MarketShare = VentasTotales.NumeroVendido / 28000
   
       }
       TablaMetrica();
   CambioEstado = () => {
   
       this.TablaEstado = {CambioEstadoRtados:0,Ratiodecambio: 0,Incrementoenventas: 0};
   
       TablaEstado.CambioEstadoRtados =   TotalesAnual.RtaDoNeto - 700000;
       TablaEstado.Ratiodecambio = TablaEstado.CambioEstadoRtados / 700000
       TablaEstado.Incrementoenventas = VentasTotales.NumeroVendido / VentasTotales.NumeroVendidoInicial - 1
       }
       CambioEstado();
   
   Graficocashflow = () =>{
   
   this.TablaCashFlow = [{Earnings:0,CumulativeCashFlow:0},
                   {Earnings:0,CumulativeCashFlow:0},
                   {Earnings:0,CumulativeCashFlow:0},
                   {Earnings:0,CumulativeCashFlow:0}]
   
               TablaCashFlow[0].Earnings = ListaTriAnual[0][2].RtaDoNeto
               TablaCashFlow[1].Earnings = ListaTriAnual[1][2].RtaDoNeto
               TablaCashFlow[2].Earnings = ListaTriAnual[2][2].RtaDoNeto
               TablaCashFlow[3].Earnings = TotalesAnual.RtaDoNeto
   
               TablaCashFlow[0].CumulativeCashFlow = TablaCashFlow[0].Earnings;
               TablaCashFlow[1].CumulativeCashFlow = TablaCashFlow[0].Earnings + TablaCashFlow[1].Earnings;
   
               TablaCashFlow[2].CumulativeCashFlow = TablaCashFlow[0].Earnings + TablaCashFlow[1].Earnings + TablaCashFlow[2].Earnings
   
               TablaCashFlow[3].CumulativeCashFlow = TablaCashFlow[0].Earnings + TablaCashFlow[1].Earnings + TablaCashFlow[2].Earnings + TablaCashFlow[3].Earnings
                   
   }
   Graficocashflow();
   
   Puntaje = TablaEstado.CambioEstadoRtados / 1000000 * totalfuerzasdeporter.TotalFuerzasDePorter *totalfuerzasdeporter.TotalFuerzasDePorter * totalfuerzasdeporter.TotalFuerzasDePorter
   SendPuntaje(Puntaje)
}
   
   
   
   SendPuntaje = (p) => {

	BasePanel(1)

	Puntaje = numeral(p).format("0");

	fetch("../back/routes.php?f=SetPuntaje&id="+_phpid+"&cns=+"+Puntaje, {

	}).then(response => response.json())
	.then(data => { 
		console.log(data);
		BasePanel(0)
	})

   }
   

   tt = 0;

   sendFdPorter = () => {
	
	BasePanel(1)

	SendForc = [];
	FuerzasPP = document.getElementsByName('factor1')
	FuerzaTitul = document.getElementsByName('WE7e6b2544b9')[0].value

	for (i=0; i<FuerzasPP.length;i++){
		SendForc.push(parseInt(FuerzasPP[i].value))
	}
	SendForc.push(FuerzaTitul);
	

	var data = new FormData()
    data.append('forces', JSON.stringify(SendForc))

	fetch('../back/routes.php?f=setForcePort&p='+_partid+'&g='+_phpid, {
		method: 'POST',
		body: data
	  }).then(response => response.json())
      .then(data => { 
		
		if (data[0].ok = "send")

		BasePanel(0)
		
    })


   }
   ;
   
   
   
   
   
   function RunEstados() {
   	if (parseInt(IdPartidaActiva.SprintAct) == 0){
   		document.getElementById('WEdccedd8fdc').style.display = "initial";
		document.getElementById('WE4093fa85d0').style.display = "none";
		document.getElementsByName("btn_bar").forEach((s)=>{s.style.display = "none"})
   	} else{
   		document.getElementById('WE4093fa85d0').style.display = "initial";
		   document.getElementById('WEdccedd8fdc').style.display = "none";
		   document.getElementsByName("btn_bar").forEach((s)=>{s.style.display = "initial"})
   		
   		
   	}
   }


   document.getElementById('WE60794dcfe8').style.visibility = "hidden";
   
   MenuBar.MenuCartasDisponibles(false);
   
   RunEstados()
   
   VistasPaneles = (i)=>{
   	
   	
   			// Graficos 1
   	Ops = [["WEf3472afb7f","WE31b29380f8","WE14f74340a7","WE5c3a05fc36","WE3b82eff3bd","WE622f2de9d8","WE68e9ca86f1","WEb2b6b5f8c8"],
   		   
   		   // Graficos  2
   		   ["WEfaa3f3ca33","WE1da41748de","WEa1bd0e9e15","WEcfa13f6e38","WE961d7194fa","WE73ce995182","WEf5fa3c3996"
   			,"WEe1716aa44d","WE2698b938e2"],
   		   
   		   
   		   // Tablas 3
   			["WE4dfa726785","WE663221ffc3","WEab8d45c593","WEa749e1aa7e","WE802f53cce0","WE94dfec42ca"]]
   	
   	
   	
   	
   	
   	
   	
   	
   	Ops.forEach((s, value)=>{
   		Ops[value].forEach((s)=>{
   			document.getElementById(s).style.visibility = "hidden";
   		})
   	})
   		
   	Ops[i].forEach((x)=>{
		   document.getElementById(x).style.visibility = "visible";
		   SetGraficos();ImprimirData();
   	})
   	
   	
   }
   
   
   var _idcostos = document.getElementById('_canv_costos');
   var _idventas = document.getElementById('_canv_ventas');
   var _iddelivery = document.getElementById('_canv_delivery');
   
   function GetData(tabla, filtro){
   	 retorno = [] 
   	 
   	switch (tabla) {
   		case "ventas":
   			
   				VentasLista.forEach((s)=>{
   					retorno.push(s[filtro])	// 
   			})
   		break;
   	
   		case "CashFlow":
   			TablaCashFlow.forEach((s)=>{
   					retorno.push(s[filtro])	 // Earnings // CumulativeCashFlow
   			});
   		break;
   		
   		case "CustomerEffor":
   			
   			retorno.push(TablaMetricas[filtro].Customereffort)
   			retorno.push(TablaMetricas[filtro].CustomerSatisfaction)
   			retorno.push(TablaMetricas[filtro].CustomerRetention)
   			
   		break;
   
   		case "CambioEstado":
   			
   			retorno.push(TablaEstado.CambioEstadoRtados)
   			retorno.push(TotalesAnual.RtaDoNeto)
   			
   			
   		break;
   
   		case "Delivery":
   			retorno.push(TablaMetricas[0].DeliveryReliability)
   			retorno.push(TablaMetricas[1].DeliveryReliability)
   			
   			
   		break;
   
   		case "VentasActuales":
   			retorno.push(TablaMetricas[0].DeliveryReliability)
   			retorno.push(TablaMetricas[1].DeliveryReliability)
		break;
		   
		   case "ROI":
				retorno.push(TablaMetricas[0].ROI)
				retorno.push(TablaMetricas[1].ROI)
			break;

			case "MarketShare":
					retorno.push(TablaMetricas[0].MarketShare)
					retorno.push(TablaMetricas[1].MarketShare)
				break;
   			
   	
   	}
   	
   	return retorno
   }
   
   
   
   function SetGraficos(){
   	
   	Chart.defaults.global.defaultFontColor = 'white';
   	Chart.defaults.scale.gridLines.color = "rgba(80, 80, 80, 0.8)";
   	
   	var myChart = new Chart(_idcostos, {
   
   		type: 'line',
   		data: {
   			labels: ['1', '2', '3', '4', '5' ],
   			datasets: [{
   				lineTension: 0,
   				label: 'Ventas Por Articulos',
   				data: GetData('ventas', 'VentasPorArticulo'),
   				backgroundColor: [
   					'rgba(132, 99, 255, 0.2)',
   
   				],
   				borderColor: [
   					'rgba(40, 130, 40, 1)',
   
   				],
   				borderWidth: 4,
   				fill: false
   			},
   					  {
   				lineTension: 0,
   				label: 'Costos',
   				data: GetData('ventas', 'CostoTotalArticulos'),
   				backgroundColor:	 [
   					'rgba(255, 99, 132, 0.2)',,
   
   				],
   				borderColor: [
   					'rgba(99, 99, 255, 1)',
   
   				],
   				borderWidth: 4,
   				fill: false
   			},]
   		},
   		options: {
   
   			tooltips: {
   				callbacks: {
   					label: function(tooltipItem, data) {
   						var label = data.datasets[tooltipItem.datasetIndex].label || '';
   
   
   
   						if (label) {
   							label += ': ';
   						}
   						label += numeral(tooltipItem.yLabel).format('$0,0.00')
   						//label += Math.round(tooltipItem.yLabel * 100) / 100;
   						return label;
   						
   						fontColor: 'white'
   					}
   				}
   			},
   
   			scales: {
   				yAxes: [{
   					ticks: {
   						beginAtZero: true,
   						callback: function(value, index, values) {
   							return numeral(value).format('$0,0.00');}
   					}
   				}]
   			}
   		}
   	});
   	var GraficosVentas = new Chart(_idventas, {
   
   		type: 'bar',
   		data: {
   			labels: ['1', '2', '3', '4', '5' ],
   			datasets: [{
   				label: 'Ventas Actuales',
   				data: GetData('ventas','NumeroVendido'),
   				backgroundColor: 'rgba(50, 255, 50, 0.9)',
   				borderColor: 'rgba(99, 99, 9, 0.5)',
   
   				borderWidth: 1,
   				fill: false
   			},
   					  {
   
   				label: 'Ventas proyectadas',
   				data: GetData('ventas','NumeroVendidoInicial'),
   				backgroundColor:	 'rgba(80, 80, 80, 0.8)',
   				borderColor: 'rgba(40, 40, 40, 0.4)',
   				borderWidth: 2,
   				fill: false
   			},]
   		},
   		options: {
   			scales: {
   				yAxes: [{
   					ticks: {
   						beginAtZero: true,
   
   					}
   				}]
			   },

			   tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';



						if (label) {
							label += ': ';
						}
						label += numeral(tooltipItem.yLabel).format('$0,0.00')
						//label += Math.round(tooltipItem.yLabel * 100) / 100;
						return label;
						
						fontColor: 'white'
					}
				}
			},
			
			title: {
				display: true,
				text: 'Ventas por articulo'
			},
   		}
   	});
   	var GraficosDelivery = new Chart(_iddelivery, {
   
   		type: 'bar',
   		data: {
   			title: 'Delivery',
   			labels: ['Proyectado', 'Al Final'],
   			datasets: [{
   				label: ['Inicial',''],
   				data: GetData('Delivery', 0),
   				backgroundColor: ['rgba(190, 190, 190, 0.8)','rgba(120, 255, 120, 0.9)'],
   				borderColor: 'rgba(99, 132, 132, 1)',
   
   				borderWidth: 0,
   				fill: false
   			},]
   		},
   		options: {
   
   			tooltips: {
   				callbacks: {
   					label: function(tooltipItem, data) {
   						var label = data.datasets[tooltipItem.datasetIndex].label || '';
   
   						var label = '';
   
   						if (label) {
   							label += ': ';
   						}
   						label += numeral(tooltipItem.yLabel).format('%00.0')
   						//label += Math.round(tooltipItem.yLabel * 100) / 100;
   						return label;
   					}
   				}
   			},
   
   
   			title: {
   				display: true,
   				text: 'Delivery Reliability'
   			},
   
   			scales: {
   				yAxes: [{
   					ticks: {
   						beginAtZero: false,
   						callback: function(value, index, values) {
   							return numeral(value).format('%00.0');},
   						 min: 0.85,
   						 max: 1.0
   					}
   				}]
   			}
   		}
   	});
   	var CumulativeCash = new Chart(_canv_CumulCash, {
   
   		type: 'line',
   		data: {
   			labels: ['1', '2', '3', '4' ],
   			datasets: [{
   
   				label: 'Cumulative Cash Flow',
   				data: GetData('CashFlow', 'Earnings'),
   				backgroundColor: [
   					'rgba(255, 88, 255, 0.2)',
   
   				],
   				borderColor: [
   					'rgba(255, 88, 255, 1.0)',
   
   				],
   				borderWidth: 4,
   
   			},
   					  {
   
   				label: 'Earning',
   				data: GetData('CashFlow', 'CumulativeCashFlow'),
   				backgroundColor:	 [
   					'rgba(100, 255, 255, 0.2)',
   
   				],
   				borderColor: [
   					'rgba(100, 255, 255, 0.6)',
   
   				],
   				borderWidth: 4,
   
   			},]
   		},
   		options: {
   			scales: {
   				yAxes: [{
   					ticks: {
   						beginAtZero: true,
   						callback: function(value, index, values) {
   							return numeral(value).format('$0,0.00');}
   					}
   				}]
			   },
			   tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						//var label = data.datasets[tooltipItem.datasetIndex].label || '';

						var label = '';

						if (label) {
							label += ': ';
						}
						label += numeral(tooltipItem.yLabel).format('$0,0.00')
						//label += Math.round(tooltipItem.yLabel * 100) / 100;
						return label;
					}
				}
			}
   		}
   	});
   	var GraficoCustomer = new Chart(_canv_CumulEffor, {
   
   		type: 'bar',
   		data: {
   			labels: ['Customer Effor', 'Customer Satisfaction', 'Customer Retention'],
   			datasets: [{
   				label: 'Final',
   				data: GetData('CustomerEffor',1),
   				backgroundColor: 'rgba(255, 255, 88, 1.0)',
   				borderColor: 'rgba(255, 255, 255, 0.2)',
   
   				borderWidth: 1,
   				fill: false
   			},
   					  {
   
   				label: 'Proyectado',
   				data: GetData('CustomerEffor',0),
   				backgroundColor:	 'rgba(99, 99, 99, 0.5)',
   				borderColor: 'rgba(132, 132, 132, 1)',
   				borderWidth: 2,
   				fill: false
   			},]
   		},
   		options: {
   			scales: {
   				yAxes: [{
   					ticks: {
   						beginAtZero: true,
   						callback: function(value, index, values) {
   							return numeral(value).format('%0.0');},
   						 max: 1.0
   
   					}
   				}]
			   },
			   tooltips: {
				callbacks: {
					label: function(tooltipItem, data) {
						var label = data.datasets[tooltipItem.datasetIndex].label || '';

						var label = '';

						if (label) {
							label += ': ';
						}
						label += numeral(tooltipItem.yLabel).format('%0.0')
						//label += Math.round(tooltipItem.yLabel * 100) / 100;
						return label;
					}
				}
			}
   		}
   	});
   	var GraficosCambEstados = new Chart(_canv_CambioEstado, {
   
   		type: 'horizontalBar',
   		data: {
   
   			labels: ['Cambio Estado Rtados', 'Resultado Neto'],
   			datasets: [{
   
   				data: GetData('CambioEstado', 0),
   				backgroundColor: ['rgba(253, 206, 2, 1.0)','rgba(132, 255, 132, 1.0)'],
   				borderColor: 'rgba(99, 132, 132, 1)',
   
   				borderWidth: 0,
   				fill: false
   			},]
   		},
   		options: {
   
   			tooltips: {
   				callbacks: {
   					label: function(tooltipItem, data) {
   						//var label = data.datasets[tooltipItem.datasetIndex].label || '';
   
   						var label = '';
   
   						if (label) {
   							label += ': ';
   						}
   						label += numeral(tooltipItem.yLabel).format('$0,0.00')
   						//label += Math.round(tooltipItem.yLabel * 100) / 100;
   						return label;
   					}
   				}
   			},
   
   
   			title: {
   				display: true,
   				text: 'Delivery Reliability'
			   },
			   
			   legend: {
                display: false,
                labels: {
                    fontColor: 'rgb(255, 99, 132)'
                }
                
		},
		
   
   			scales: { 
   				xAxes: [{
   					ticks: {
   						display: false,
   						beginAtZero: true,
   						callback: function(value, index, values) {
   							return numeral(value).format('$0,0.00');},
   
   						 //max: 1.0
   					}
   				}]
   			}
   		}
   	});
   	
   	var GraficoROI = new Chart(_canv_ROI, {
   
   		type: 'doughnut',
   		data: {
   			labels: ['Proyectado', 'Final'],
   			datasets: [{
   				labels: ['Proyectado', 'Ultimo'],
   				data: GetData("ROI", 0),
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
   	var GraficoMarketShre = new Chart(_canv_MarkShre, {
   
   		type: 'pie',
   		data: {
   			labels: ['Proyectado', 'Final'],
   			datasets: [{
   				labels: ['Proyectado', 'Ultimo'],
   				data: GetData("MarketShare", 0),
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
   	
   	_canv_MarkShre
   }
   
   // Imprimir DATA texto:
   
   const VistaMetricas = document.getElementById('WE9234a60359').children[0].children[0].children[0]
   const VistaVentas = document.getElementById('WE663221ffc3').children[0].children[0].children[0].children[0].children[0].children[0].children[0]
   const VistaIngresos = document.getElementById('WE6d14d31355').children[0].children[0].children[0]
   const VistaEgresos = document.getElementById('WE6186eef492').children[0].children[0].children[0]
   
   ImprimirData = ()=> {
   	
   	// METRICAS
   	
   	OrdenMetricas = [{n:"DeliveryReliability", f:'0.00%'},
   			 {n:"LeadTime", f:null},
   			 {n:"Customereffort", f:'0.00%'},
   			 {n:"CustomerSatisfaction", f:'0.00%'},
   			 {n:"CustomerRetention", f:'0.00%'},
   			 {n:"CrossSelling", f:'0,0'},
   			 {n:"CustomerAdqusitionCost", f:'0,0'},
   			 {n:"UniqueVisitors", f:'0'},
   			 {n:"Conversionrate", f:'0.00%'},
   			 {n:"repeatVisitors", f:'0'},
   			 {n:"Netprofit", f:'$0,0.00'},
   			 {n:"RevenueGrowth", f:'$0,0.00'},
   			 {n:"ROI", f:'0.0%'},
   			 {n:"Capitalexpenditure", f:'$0,0.00'},
   			 {n:"NPS", f:'0'},
   			 {n:"Ticketmediodecompra", f:'$0,0.00'},
   			 {n:"Traficoensitioweb", f:'0'},
   			 {n:"MargenBruto", f:'$0,0.00'},
   			 {n:"MarketShare", f:'0.00%'}
   			];
   		
   	OrdenMetricas.forEach((t, value)=>{
   		
   			VistaMetricas.children[value+1].children[1].innerText = 
   			(t.f != null) ? numeral(TablaMetricas[0][t.n]).format(t.f) : TablaMetricas[0][t.n];
   			//TablaMetricas[0][t];
   		
   			VistaMetricas.children[value+1].children[2].innerText = 
   			(t.f != null) ? numeral(TablaMetricas[1][t.n]).format(t.f) : TablaMetricas[1][t.n];
   		
   	});
   	
   	// Cambio Estados:
   	
   	VistaMetricas.children[22].children[0].innerText = numeral(TablaEstado.CambioEstadoRtados).format('$0,0.00')
   	VistaMetricas.children[22].children[1].innerText = numeral(TablaEstado.Ratiodecambio).format('0.00%')
   	VistaMetricas.children[22].children[2].innerText = numeral(TablaEstado.Incrementoenventas).format('0.00%')
   	
   	
   	// Tabla Ventas:
   	
   	OrdenVentas = [
   		{n:"item", f:null},
   		{n:"NumeroVendido", f:'0'},
   		{n:"NumeroVendidoInicial", f:'0'},
   		{n:"costoUnitario", f:'$0,0.00'},
   		{n:"CostoUnitarioInicial", f:'$0,0.00'},
   		{n:"PrecioUnitario", f:'$0,0.00'},
   		{n:"PrecioInicial", f:'$0,0.00'},
   		{n:"VentasPorArticulo", f:'$0,0.00'},
   		{n:"CostoTotalArticulos", f:'$0,0.00'}
   	]
   	
   	VentasLista.forEach((s, value) =>{
   		
   		for (i=0; i<OrdenVentas.length; i++){
   			VistaVentas.children[value+1].children[i].innerText = 
   				(OrdenVentas[i].f != null) ? numeral(s[OrdenVentas[i].n]).format(OrdenVentas[i].f) : s[OrdenVentas[i].n] ;
   		}
   			 
   	});
   	
   	VistaVentas.children[6].children[1].innerText = numeral(VentasTotales.NumeroVendido).format('0')
   	VistaVentas.children[6].children[2].innerText = numeral(VentasTotales.NumeroVendidoInicial).format('0')
   	VistaVentas.children[6].children[7].innerText = numeral(VentasTotales.VentasPorArticulos).format('$0,0.00')
   	VistaVentas.children[6].children[8].innerText = numeral(VentasTotales.CostoTotalPorArticulo).format('$0,0.00')
   	
   	
   	
   	// Ingresos / Egresos:
   	
   	OrdenCaja_GtosFijos = ["Personal",
   		"Alquileres",
   		"Marketing",
   		"AmortMquinas",
   		"Reparaciones",
   		"Insumos",
   		"GtosOficina",
   		"OtrosGtos1",
   		"OtrosGtos2",
   		"OtrosGtos3" ]
   		
   	
   	OrdenCaja_GtosFijos.forEach((e, value)=>{
   		
   		VistaEgresos.children[value+1].children[1].innerText = 
   			numeral(listaFlujoCaja[1][OrdenCaja_GtosFijos[value]]).format("$0,0.00")
   		
   	});
   	
   	
   	OrdenArticuls = ["CostoArticulo1",
   		"CostoArticulo2",
   		"CostoArticulo3",
   		"CostoArticulo4",
   		"CostoArticulo5",
   		]
   	
   	initi = 13;
   	OrdenArticuls.forEach((s, value)=>{
   		VistaEgresos.children[initi+value].children[1].innerText = 
   			numeral(listaFlujoCaja[2][OrdenArticuls[value]]).format("$0,0.00")
   	});
   	
   	x = numeral(listaFlujoCaja[0].Ventas).format("$0,0.00")
   		VistaIngresos.children[0].children[1].innerText = x
   		VistaIngresos.children[1].children[1].innerText = x
   	
   	
   	VistaEgresos.children[11].children[1].innerText = numeral(TotalesAnual.TotalGastosFijos).format("$0,0.00")
   	VistaEgresos.children[18].children[1].innerText = numeral(TotalesAnual.TotalGastosVariables).format("$0,0.00")
   	VistaEgresos.children[19].children[1].innerText = numeral(TotalesAnual.TotalEgresos).format("$0,0.00")
   	VistaEgresos.children[20].children[1].innerText = numeral(TotalesAnual.RtaDoNeto).format("$0,0.00")
   	
	   // Gadgets:
	   
	   document.getElementById('WEe41eecaece').children[0].children[0].children[0].innerText = numeral(TablaMetricas[1]['DeliveryReliability']).format("0.00%")

		   document.getElementById('WE5c9725f005').children[0].children[0].innerText = numeral(TablaMetricas[1]['Traficoensitioweb']).format("0,0.00")
		   document.getElementById('WE48f4e50cc2').children[0].children[0].innerText = numeral(TablaMetricas[0]['Traficoensitioweb']).format("0,0.00")

		   document.getElementById('WE29dcd10495').children[0].children[0].innerText = numeral(TablaMetricas[1]['Conversionrate']).format("0.00%")
		   document.getElementById('WEb6b7e327ee').children[0].children[0].innerText = numeral(TablaMetricas[0]['Conversionrate']).format("0.00%")

		   document.getElementById('WE6b557e6c69').children[0].children[0].innerText = numeral(TablaMetricas[1]['UniqueVisitors']).format("0,0.00")
		   document.getElementById('WE3cc65c2d3a').children[0].children[0].innerText = numeral(TablaMetricas[0]['UniqueVisitors']).format("0,0.00")

		   document.getElementById('WE7c570f3e1b').children[0].children[0].innerText = numeral(TablaMetricas[1]['RevenueGrowth']).format("$0,0.00")
		   document.getElementById('WE0b60655d46').children[0].children[0].innerText = numeral(TablaMetricas[0]['RevenueGrowth']).format("$0,0.00")

		   document.getElementById('WEf580679bde').children[0].children[0].innerText = "ROI: " + numeral(TablaMetricas[1]['ROI']).format("0.00%")
		   
		   // pan 2:

		   document.getElementById('WE7592452b7d').children[0].children[0].innerText = numeral(TablaMetricas[1].MargenBruto).format("$0,0.00")
		   document.getElementById('WE76fb20005d').children[0].children[0].innerText = numeral(TablaMetricas[0].MargenBruto).format("$0,0.00")

		   document.getElementById('WE6974ba7c8d').children[0].children[0].innerText = numeral(TablaMetricas[1].CrossSelling).format("0")
		   document.getElementById('WE5b6ac80cb0').children[0].children[0].innerText = numeral(TablaMetricas[0].CrossSelling).format("0")

		   document.getElementById('WEe1e0be797c').children[0].children[0].innerText = TablaMetricas[1].LeadTime
		   document.getElementById('WE591b0953eb').children[0].children[0].innerText = TablaMetricas[0].LeadTime

		   document.getElementById('WE5ce7f50f9a').children[0].children[0].innerText = numeral(TablaMetricas[1].Ticketmediodecompra).format("$0,0.00")
		   document.getElementById('WEbd2db820dd').children[0].children[0].innerText = numeral(TablaMetricas[0].Ticketmediodecompra).format("$0,0.00")
		   
		   document.getElementById('WEa95dcbd80a').children[0].children[0].innerText = numeral(TablaMetricas[1].NPS).format("0")
		   
		   document.getElementById('WEe06dcdb7d1').children[0].children[0].innerText = numeral(TablaEstado.CambioEstadoRtados).format("$0,0.00")
		   document.getElementById('WEf55ecf441e').children[0].children[0].innerText = numeral(TotalesAnual.RtaDoNeto).format("$0,0.00")

   }
  
   function ranger (event, id) {
	//console.log(event.value);
	document.getElementById(id).children[0].children[0].innerText = parseInt(event.value);
	
}