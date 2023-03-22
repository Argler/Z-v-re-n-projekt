const ITEM_TABLE_NAME = "items";

var itemRepository = new ItemRepository(ITEM_TABLE_NAME);

function addNewItem(object) {
  var formdata = new FormData();
  formdata.append("Content", object.Content);
  formdata.append("CreatedOn", prepareDataForDatabase(new Date()));
  formdata.append("UserId", object.UserId);
  itemRepository.create(formdata, function(){
    //callBack cesta
    window.location="./index-test.php";
  });
}

function deleteItem(Id) {
  var formdata = new FormData();
  formdata.append("Id", Id);

  itemRepository.delete(formdata, function(){
    const article = document.getElementById("article"+ Id);
    if(article)
    {
        article.remove();
    }    
  });
}
