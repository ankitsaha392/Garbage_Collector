var productid;
function delete_fn(prodid) {
    productid = prodid;
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "itemdelete.php?q=" + productid);
    xmlhttp.send();
    console.log("Request Send.......");
    xmlhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
    
}

function update_fn(prodid) {
  productid = prodid;
  console.log("Requst Value-", productid);
  window.open("update_item.php?q=" + productid);
 
}

function cancel_fn(order_id){
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "order_status.php?order_id=" + order_id+"&sts=0");
  xmlhttp.send();
  console.log("Request Send.......");
}

function order_fn(order_id,sts){
  const xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET", "order_status.php?order_id=" + order_id+"&sts=" + sts);
  xmlhttp.send();
  console.log("Request Send.......");
}

function deletecat_fn(cat_id) {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "catdelete.php?q=" + cat_id);
    xmlhttp.send();
    console.log("Request Send.......");
    xmlhttp.onload = function() {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
    
}