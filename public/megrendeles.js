class Megrendeles{
    constructor(elem,adat){
        this.elem = elem;
        this.adat = adat;
        this.datumtol = this.elem.children(".datumtol");
        this.datumig = this.elem.children(".datumig");
        this.allapot = this.elem.children(".allapot");
        this.felhasznalo = this.elem.children(".felhasznalo");
        this.csoport = this.elem.children(".csoport");
        this.gep = this.elem.children(".gep");
        this.auto = this.elem.children(".auto");
        this.setAdatok(this.adat);
    }

    setAdatok(adat) {
        this.datumtol.html(adat.datumtol);
        this.datumig.html(adat.datumig);
        this.allapot.html(adat.allapot);
        this.felhasznalo.html(adat.felhasznalo);
        this.csoport.html(adat.csoport);
        this.gep.html(adat.gep);
        this.auto.html(adat.auto);
        }
}

$(function () {
    const fajlnev="../api/rendelesek";

    let ajaxHivas = new AjaxHivas();
    ajaxHivas.getAjax(fajlnev, lista);

    function lista(megrendeles) {
    const szuloElem = $("#szulo");
    const sablonElem = $(".sablon");
    megrendeles.forEach(function (adat) {
    let ujElem = sablonElem.clone().appendTo(szuloElem);
    const megrendeles = new Megrendeles(ujElem, adat);
    });
    sablonElem.remove();
    }
});
