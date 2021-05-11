class ForcesPorterHandler {

    DataControl;
    ArrayVariablesTokenName;
    Fuerza9Nombre;

    MenuControl;

    constructor(_ArrayVariablesTokenName, _Fuerza9Nombre, _MenuControl, _DataControl){

        this.ArrayVariablesTokenName = document.getElementsByName(_ArrayVariablesTokenName);
        this.Fuerza9Nombre = document.getElementsByName(_Fuerza9Nombre)[0];

        this.MenuControl = _MenuControl;
        this.DataControl = _DataControl;

    }

    GuardarResultados(){

        this.MenuControl.Spinner(true);

        var SendForc = [];

        /*FuerzasPP = document.getElementsByName('factor1')
        FuerzaTitul = document.getElementsByName('WE7e6b2544b9')[0].value*/
    
        for (var i=0; i < this.ArrayVariablesTokenName.length ; i++){
            SendForc.push(this.ArrayVariablesTokenName[i].value) 
        }

        SendForc.push(this.Fuerza9Nombre.value);
    
        var data = new FormData()
        data.append('forces', JSON.stringify(SendForc))
    
        fetch('../back/routes.php?f=setForcePort&p='+_partid+'&g='+_phpid, {
            method: 'POST',
            body: data
          }).then(response => response.json())
          .then(data => { 
            
            if (data[0].ok = "send")
    
            this.MenuControl.Spinner(false);
            
        })
    }

    SyncData(_data){
        // Cargamos Valores guardados
        /*form = document.getElementsByName('factor1');
        txt = document.getElementsByName('WE7e6b2544b9')[0];*/

        var ordenA = [null, null, null, 15,16,17,18,19,5,6,7,8,9,20,10,11,12,13,14,0,1,2,3,4,5,21,22,23,24]
        var ordenB = [null, null, null, "1_scale","1_experience","1_capital","1_reputation","1_distribution","2_size_supliers","2_price_sesibilities","2_technicalcost","2_brandcost","2_abilityintegrate","3_availabiliti","4_effectivecompetitors","4_market","4_diferentation","4_strategicstackes","4_protectstackes","5_sizecostumers","5_pricesesibilities","5_thecnicalcost","5_brandcost","5_abilityintegrate","6_impactchanges","7_relations","8_others", null]

        if (this.DataControl.RealtimeData[3][0] != undefined) { 
        for (var i=0; i < ordenB.length; i++){
            if (ordenA[i] != null){
                this.ArrayVariablesTokenName[ordenA[i]].value = this.DataControl.RealtimeData[3][0][ordenB[i]]
                this.ArrayVariablesTokenName[ordenA[i]].oninput();
            }
        }
        this.Fuerza9Nombre.value = this.DataControl.RealtimeData[3][0]['txt_8'];
        }
    }


}