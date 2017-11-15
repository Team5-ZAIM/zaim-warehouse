var db=require('../dbconnection');

var Item={

getAllItems:function(callback){

return db.query("Select * from Inventory",callback);

},
getItemById:function(id,callback){

    return db.query("select * from Inventory where Item_Number=?",[id],callback);
},
addItem:function(Item,callback){
   console.log("inside service");
   console.log(Item.Id);
return db.query("Insert into Inventory values(?,?,?,?,?,?,?)",[Item.Item_number,Item.Name,Item.Description,Item.Quantity,Item.Price,Item.Category,Item.Photo_ID],callback);
},
deleteItem:function(id,callback){
    return db.query("delete from Inventory where Item_Number=?",[id],callback);
},
updateItem:function(id,Item,callback){
    return  db.query("update Inventory set Name=?,Descr=?,Quantity=?,Price=?,Category=?,Photo_ID=? where Item_number=?",[Item.Name,Item.Descr,Item.Quantity,Item.Price,Item.Category,Item.Photo_ID,id],callback);
},
deleteAll:function(item,callback){

var delarr=[];
   for(i=0;i<item.length;i++){

       delarr[i]=item[i].Id;
   }
   return db.query("delete from Inventory where Item_number in (?)",[delarr],callback);
}
};
module.exports=Item;