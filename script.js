function calculateTotal() {
    let pizza = parseInt(document.getElementById("pizza").value);
    let burger = parseInt(document.getElementById("burger").value);
    let sandwich = parseInt(document.getElementById("sandwich").value);

    let total = (pizza * 150) + (burger * 100) + (sandwich * 80);

    if (total === 0) {
        alert("Please select at least one item");
        return false;
    }

    document.getElementById("total").value = total;
    return true;
}
