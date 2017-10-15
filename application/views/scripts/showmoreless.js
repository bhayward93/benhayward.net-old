var status = "less";

function toggleShowMore() {
    var button = document.getElementById("showmore"),
        inner = document.getElementById("inneraboutme"),
        outer = document.getElementById("outeraboutme");

    if (status === "less") {
        outer.style.height = "auto";
        inner.style.height = "inherit";
        button.innerHTML = "Less";
        button.innerText = "Less";
        status = "more";
        outer.scrollIntoView(false);
    } else if (status === "more") {
        outer.style.height = "100%";
        inner.style.height = "95%";
        button.innerHTML = "More ...";
        button.innerText = "More ...";
        status = "less";
        outer.scrollIntoView();
    }
}
