var addorder = document.getElementById("addorder");
var addproduct = document.getElementById("addproduct");
var products = document.getElementById("products");
var orders = document.getElementById("orders");
var _addorder = document.getElementById("_addorder");
var _addproduct = document.getElementById("_addproduct");
var _products = document.getElementById("_products");
var _orders = document.getElementById("_orders");

addorder.addEventListener("click" , function(){
    if (_addorder.style.display="none"){
        _addorder.style.display='block';
        _addproduct.style.display='none';
        _products.style.display="none";
        _orders.style.display="none";
        
    }
})
addproduct.addEventListener("click" , function(){
    if (_addproduct.style.display="none"){
        _addorder.style.display='none';
        _addproduct.style.display='block';
        _products.style.display="none";
        _orders.style.display="none";
        
    }
})
products.addEventListener("click" , function(){
    if (_products.style.display="none"){
        _addorder.style.display='none';
        _addproduct.style.display='none';
        _products.style.display="block";
        _orders.style.display="none";
        
    }
})
orders.addEventListener("click" , function(){
    if (_orders.style.display="none"){
        _addorder.style.display='none';
        _addproduct.style.display='none';
        _products.style.display="none";
        _orders.style.display="block";
        
    }
})