// Instancias de elementos:

    SeccionPuntos = new SeccionVisible("pan_champ", "WEe94ea83c6f", () => {

      MenuBar.MenuCartasDisponibles(false);
      MenuBar.Menu();

        BasePanel(1);
        CargarTabla();
        ReposManual();
        Pantalla = 0
        document.getElementById('WE60794dcfe8').style.visibility = "hidden";
        
    });

    SeccionCanvas = new SeccionVisible("pan_canvas", "WEb8644db9e4", () =>{
      
      MenuBar.Menu();

      document.getElementById('WE60794dcfe8').style.visibility = "visible";

      sendconfirm = () =>{

          console.log("confirmacion");

          fetch("../back/routes.php?f=ConfirmarCanvas&g="+_phpid+"&p="+_partid+"&s="+IdPartidaActiva.SprintAct)
            .then(response => response.json())
            .then(data => {
              BasePanel(0);
              MiniRunners.style.display = "none"; // quita animacion mini runners;
            })

          BasePanel(1)

          MenuBar.Menu();

          Look = true;
          VariableCompetitiva = 0;
        }

        

      if (IdPartidaActiva.SprintAct == 0){
        Pantalla = 0
      } else {
        Pantalla = 1
        document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:sendconfirm()";
      }

    });

    SeccionDashBoard = new SeccionVisible("pan_dashboard", "WE2df3a0ab3b", ()=>{
      Pantalla = 1
      if(parseInt(IdPartidaActiva.SprintAct) > 0){
        
        if(parseInt(IdPartidaActiva.SprintAct) == 1 )
         {
           
          if(RealtimeData[1][0].confirmacion != "no"){ // No procesa el dash si no se enviado el primer canvas

          document.getElementById("pan_dashboard").style.display="initial";
          EstadosResultado(game_cards);
          Pantalla = 0} else {
            Mensaje(true, "no ha enviado el Canvas");
          }
        
        }

        if(parseInt(IdPartidaActiva.SprintAct) > 1){
          document.getElementById("pan_dashboard").style.display="initial";
          EstadosResultado(game_cards);
          Pantalla = 0
        }


        
      } else {
        document.getElementById("pan_dashboard").style.display="initial";
        Pantalla = 1

        document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:usersend()";

        usersend = () =>{
            sendFdPorter();
        }
            // Cargamos Valores guardados
                form = document.getElementsByName('factor1');
                txt = document.getElementsByName('WE7e6b2544b9')[0];
                ordenA = [null, null, null, 15,16,17,18,19,5,6,7,8,9,20,10,11,12,13,14,0,1,2,3,4,5,21,22,23,24]
                ordenB = [null, null, null, "1_scale","1_experience","1_capital","1_reputation","1_distribution","2_size_supliers","2_price_sesibilities","2_technicalcost","2_brandcost","2_abilityintegrate","3_availabiliti","4_effectivecompetitors","4_market","4_diferentation","4_strategicstackes","4_protectstackes","5_sizecostumers","5_pricesesibilities","5_thecnicalcost","5_brandcost","5_abilityintegrate","6_impactchanges","7_relations","8_others", null]

                if (RealtimeData[3][0] != undefined) { 
                  for (i=0; i<ordenB.length; i++){
                      if (ordenA[i] != null){
                        form[ordenA[i]].value = RealtimeData[3][0][ordenB[i]]
                      }
                  }
                  txt.value = RealtimeData[3][0]['txt_8'];
              }
                
        

      }
      

      MenuBar.Menu();

      RunEstados();
      VistasPaneles(0);

      document.getElementById('WE60794dcfe8').style.visibility = "hidden";

    });

    ArraySecciones = [SeccionPuntos, SeccionCanvas, SeccionDashBoard];

    SeccionPuntos.ArraySwitch = ArraySecciones;
    SeccionCanvas.ArraySwitch = ArraySecciones;
    SeccionDashBoard.ArraySwitch = ArraySecciones;
    
    /*
    function pn(i) {

        document.getElementById("pan_champ").style.display="none";
        document.getElementById("pan_canvas").style.display="none";
        document.getElementById("pan_dashboard").style.display="none";
        clearInterval(Passarela)
    
        
            switch(i){
             case 0:
          //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo_chmp.png")');
          document.getElementById("pan_champ").style.display="initial";
          CartasDisponibles(false);
          Menu();
          BasePanel(1);
          CargarTabla();
          ReposManual();
          Pantalla = 0
          document.getElementById('WE60794dcfe8').style.visibility = "hidden";
             break;
             case 1:
          //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo.jpg")');
          document.getElementById("pan_canvas").style.display="initial";
          
          Menu();
          document.getElementById('WE60794dcfe8').style.visibility = "visible";
    
          sendconfirm = () =>{
    
              console.log("confirmacion");
    
              fetch("../back/routes.php?f=ConfirmarCanvas&g="+_phpid+"&p="+_partid+"&s="+IdPartidaActiva.SprintAct)
                .then(response => response.json())
                .then(data => {
                  BasePanel(0);
                  MiniRunners.style.display = "none"; // quita animacion mini runners;
                })
              BasePanel(1)
              Menu();
              Look = true;
              VariableCompetitiva = 0;
            }
    
            
    
          if (IdPartidaActiva.SprintAct == 0){
            Pantalla = 0
          } else {
            Pantalla = 1
            document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:sendconfirm()";
          }
    
             break;
             case 2:
          //document.getElementById("pan_dashboard").style.display="initial";
          //document.getElementById("XBody").setAttribute("style", 'background-image:url("../Images/fondo.jpg")');
          Pantalla = 1
          if(parseInt(IdPartidaActiva.SprintAct) > 0){
            
            if(parseInt(IdPartidaActiva.SprintAct) == 1 )
             {
               
              if(RealtimeData[1][0].confirmacion != "no"){ // No procesa el dash si no se enviado el primer canvas
    
              document.getElementById("pan_dashboard").style.display="initial";
              EstadosResultado(game_cards);
              Pantalla = 0} else {
                Mensaje(true, "no ha enviado el Canvas");
              }
            
            }
    
            if(parseInt(IdPartidaActiva.SprintAct) > 1){
              document.getElementById("pan_dashboard").style.display="initial";
              EstadosResultado(game_cards);
              Pantalla = 0
            }
    
    
            
          } else {
            document.getElementById("pan_dashboard").style.display="initial";
            Pantalla = 1
    
            document.getElementById("WEb3c772a596").children[0].children[0].href = "javascript:usersend()";
    
            usersend = () =>{
                sendFdPorter();
            }
                // Cargamos Valores guardados
                    form = document.getElementsByName('factor1');
                    txt = document.getElementsByName('WE7e6b2544b9')[0];
                    ordenA = [null, null, null, 15,16,17,18,19,5,6,7,8,9,20,10,11,12,13,14,0,1,2,3,4,5,21,22,23,24]
                    ordenB = [null, null, null, "1_scale","1_experience","1_capital","1_reputation","1_distribution","2_size_supliers","2_price_sesibilities","2_technicalcost","2_brandcost","2_abilityintegrate","3_availabiliti","4_effectivecompetitors","4_market","4_diferentation","4_strategicstackes","4_protectstackes","5_sizecostumers","5_pricesesibilities","5_thecnicalcost","5_brandcost","5_abilityintegrate","6_impactchanges","7_relations","8_others", null]
    
                    if (RealtimeData[3][0] != undefined) { 
                      for (i=0; i<ordenB.length; i++){
                          if (ordenA[i] != null){
                            form[ordenA[i]].value = RealtimeData[3][0][ordenB[i]]
                          }
                      }
                      txt.value = RealtimeData[3][0]['txt_8'];
                  }
                    
            
    
          }
          
    
          Menu();
          RunEstados();
          VistasPaneles(0);
    
          document.getElementById('WE60794dcfe8').style.visibility = "hidden";
    
             break;
            }
        console.log("'.$IDGet.'")
        
        
      } */