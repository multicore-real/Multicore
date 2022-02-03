let range = 1 / 500;
let vw = range * Math.min(window.innerWidth, window.innerHeight);
document.documentElement.style.setProperty('--vw-scale', `${vw}`);
window.addEventListener('resize', () => {
    document.documentElement.style.setProperty('--vw-scale', `${range * Math.min(window.innerWidth, window.innerHeight)}`);
});