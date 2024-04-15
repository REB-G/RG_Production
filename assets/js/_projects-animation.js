// Conçu avec l'API Intersection Observer : https://developer.mozilla.org/fr/docs/Web/API/Intersection_Observer_API

const ratio = .3;
const options = {
    // Element à observer
    root: null,
    // Marge autour de l'élément
    rootMargin: "0px",
    // Equivaut à 10% de l'élément, l'animation se déclenche lorsque 10% de l'élément est visible
    threshold: ratio,
};

const handleIntersect = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > ratio) {
            entry.target.classList.add('project-visible');
            observer.unobserve(entry.target);
        }
    });
};

const revealElements = document.querySelectorAll('.project-invisible');
if (revealElements.length > 0) {
    const observer = new IntersectionObserver(handleIntersect, options);
    revealElements.forEach(element => {
        observer.observe(element);
    });
}