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
        error: function (result) {
          console.log(result);
        },
      });
    }

  }
