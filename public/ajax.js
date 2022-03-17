class AjaxHivas {
    constructor() {}

    getAjax(fajlnev, myCallback) {
      const tomb = [];
      $.ajax({
        url: fajlnev,
        type: "GET",
        success: function (result) {
          result.forEach((element) => {
            tomb.push(element);
          });
          myCallback(tomb);
        },
      });
    }

    putAjax(fajlnev, adat, id) {
        $.ajax({
          url: fajlnev + "/" + id,
          type: "PUt",
          data: adat,
          success: function (result) {}
        });
      }


    deleteAjax(fajlnev, id) {
      $.ajax({
        url: fajlnev + "/" + id,
        type: "DELETE",
        success: function (result) {}
      });
    }
  }
