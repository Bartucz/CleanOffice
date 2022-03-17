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
        this.allapotValt = this.elem.children(".allapotValt");
        this.al = this.allapotValt.children("#allapot");
        this.setAdatok(this.adat);
        this.allapotValt.on("change", () => {
            this.kattintas();
          });

    }

    setAdatok(adat) {
        this.datumtol.html(adat.datumtol);
        this.datumig.html(adat.datumig);
        this.allapot.html(adat.allapot);
        this.felhasznalo.html(adat.felhasznalo);
        this.csoport.html(adat.csoport);
        this.gep.html(adat.gep);
        this.auto.html(adat.auto);
        this.allapotValt.html('<form action="" method="POST"><div class="col-sm-10"><select class="form-control" id="allapot" name="allapot"><option >Állapot</option><option value="megrendelve">Megrendelve</option><option value="teljesitve">Teljesítve</option><option value="torolve">Törölve</option></select></form>');
        }
        kattintas() {
            this.kattintasTrigger();
          }

          kattintasTrigger() {
            let esemeny = new CustomEvent("allapotValtKattintas", { detail: this.adat });
            window.dispatchEvent(esemeny);
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
    $(window).on("allapotValtKattintas", (event) => {
        console.log(event.detail.allapot);
        console.log($("#allapot").val());

        window.location = '/kapu/rendeles/update/'+event.detail.id;
    });

});
