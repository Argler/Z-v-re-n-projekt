//ziskani value z textarea
function sendArticle() {
  const val = document.getElementById("textarea").value;
  // const val = text.value;
  const userId = document.getElementById("userId").value;
  
  addNewItem({
    Content: val,
    UserId: userId,
  });
}

function deleteArticle(Id) {
  deleteItem(Id);
}
