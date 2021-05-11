_ElemetsArray = [

    document.getElementById('WEDisponibles'), 
    document.getElementById('WE_KeyPatner'),
    document.getElementById('WE_KeyActivities'),
    document.getElementById('WE_ValuePropositions'),
    document.getElementById('WE_CustomerRelationship'),
    document.getElementById('WE_CustomersSegments'),
    document.getElementById('WE_KeyResources'),
    document.getElementById('WE_Channels'),
    document.getElementById('WE_CostStructure'),
    document.getElementById('WE_RevenueStreams'),
    document.getElementById('WE_Intermediearies'),
    document.getElementById('WEWE_Consumer'),
    document.getElementById('WE_Influencer')

]

CanvasDisplay = new CanvasDisplayController(
    
    DataControlGame,
    _ElemetsArray,
    MenuBar,
    StateMachine,
    Sync
    );

/* CanvasHandler = new CanvasHandler(); */ 