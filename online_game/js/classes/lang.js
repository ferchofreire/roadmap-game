class LangControl{

    Galeria;

    constructor(_g){

        this.Galeria = _g;

    }

    GetLabel(_Lang, _id) {
        return this.Galeria[_Lang][_id];
    }
}