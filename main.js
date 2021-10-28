let id = $("input[name*='id']")
id.attr("readonly","readonly");


$(".btnedit").click (e =>{
    let textvalues = displayData(e);

    ;
    let productname = $("input[name*='product_name']");
    let quantity = $("input[name*='quantity']");
    let firstname = $("input[name*='first_name']");
    let lastname = $("input[name*='last_name']");
    let price = $("input[name*='price']");

    id.val(textvalues[0]);
    productname.val(textvalues[1]);
    quantity.val(textvalues[2]);
    firstname.val(textvalues[3]);
    lastname.val(textvalues[4]);
    price.val(textvalues[5].replace("₱",""));
});
function displayData(e){
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues =[];

    for (const value of td){
        if (value.dataset.id==e.target.dataset.id){
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;
}