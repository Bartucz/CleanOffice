class Dolgozo{
    constructor(elem,adat){
        this.elem = elem;
        this.adat = adat;
        this.kep = this.elem.children(".kep");
        this.nev = this.elem.children(".box").children(".box-content").children(".nev");
        this.setAdatok(this.adat);

    }

    setAdatok(adat) {
        this.kep.attr("src",adat.kep);
        this.nev.html(adat.nev);
        }

}

$(function () {

    const fajlnev="../api/dolgozok";

    let ajaxHivas = new AjaxHivas();
    ajaxHivas.getAjax(fajlnev, lista);

    function lista(dolgozoek) {
    const szuloElem = $("#szulo");
    const sablonElem = $(".sablon");
    dolgozoek.forEach(function (adat) {
    let ujElem = sablonElem.clone().appendTo(szuloElem);
    const dolgozo = new Dolgozo(ujElem, adat);
    });
    sablonElem.remove();
    }


});
