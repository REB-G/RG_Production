const ratio = .3;
const options = {
    root: null,
    rootMargin: "0px",
    threshold: ratio,
};

const handleIntersect = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('index-animation-active');
            observer.unobserve(entry.target);
        }
    });
};

const revealElementsLeftToRight = document.querySelectorAll('.index-left-to-right-animation');
const revealElementsRightToLeft = document.querySelectorAll('.index-right-to-left-animation');
if (revealElementsLeftToRight.length > 0) {
    const observer = new IntersectionObserver(handleIntersect, options);
    revealElementsLeftToRight.forEach(element => {
        observer.observe(element);
    });
    revealElementsRightToLeft.forEach(element => {
        observer.observe(element);
    });
}