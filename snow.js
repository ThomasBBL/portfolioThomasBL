

(function() {
    const numFlakes = 35; // Nombre de flocons
    const flakes = [];

    function createFlake() {
        const flake = document.createElement('div');
        flake.classList.add('snowflake');
        flake.style.left = Math.random() * 100 + 'vw';
        flake.style.animationDuration = 5 + Math.random() * 5 + 's';
        flake.style.opacity = Math.random();
        flake.style.fontSize = 12 + Math.random() * 24 + 'px';
        flake.innerHTML = '❄'; 
        document.body.appendChild(flake);
        flakes.push(flake);
    }

    for(let i = 0; i < numFlakes; i++) {
        createFlake();
    }

    setInterval(createFlake, 4000); 
})();