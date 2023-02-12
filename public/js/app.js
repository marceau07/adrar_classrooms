const scrollUp = document.querySelector("#scroll-up");
const btnVisibility = () => {
    if (window.scrollY > 400) {
        scrollUp.style.visibility = "visible";
    } else {
        scrollUp.style.visibility = "hidden";
    }
};
document.addEventListener("scroll", () => {
    btnVisibility();
});
scrollUp.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

btnVisibility();