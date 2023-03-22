class Async {
  performOperation(formdata, destination, callBack) {
    $.ajax({
      url: destination,
      method: "POST",
      data: formdata,
      processData: false,
      contentType: false,
      async: true,
      success: function (response) {
        if (callBack) {
            callBack();
        }
      },
      error: function (error) {
        console.log(error);
      },
    });
  }
}
