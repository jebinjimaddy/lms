function addBook() {
    console.log("addbook");
    var name = document.getElementById("book_name").value;
    var author = document.getElementById("author_name").value;
    var price = document.getElementById("price").value;
    var x = "&name=" + name;
    x += "&author=" + author;
    x += "&price=" + price;

    var xhr = new XMLHttpRequest();
    console.log("requestnig...");
    xhr.open('GET', 'add_book.php?' + x, true);
    xhr.onreadystatechange = function () {
        console.log("onreadystatechange");
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText);
        }
    }
    xhr.send();

}