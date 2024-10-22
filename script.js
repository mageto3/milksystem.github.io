document.addEventListener("DOMContentLoaded", function() {
    const container = document.querySelector(".gallery-container");
    const items = Array.from(container.children);

    function shuffle(array) {
        let currentIndex = array.length, randomIndex;
        while (currentIndex !== 0) {
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;
            [array[currentIndex], array[randomIndex]] = [array[randomIndex], array[currentIndex]];
        }
        return array;
    }

    function updateGallery() {
        const shuffledItems = shuffle(items.slice()); // Clone and shuffle items
        shuffledItems.forEach(item => container.appendChild(item)); // Re-append items in shuffled order
    }

    updateGallery(); // Initial shuffle
    setInterval(updateGallery, 3000); // Shuffle every 3 seconds
});
