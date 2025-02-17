function openPorshor(language) {
    const content = document.getElementById('porshor-content');
    
    if (language === 'english') {
        const imageUrl = `Mohaki_Brochure_English.png`; // Adjust this path according to where your images are stored
    window.open(imageUrl, '_blank'); // This will open the image in a new tab
;
    } else if (language === 'arabic') {
        const imageUrl = `Mohaki_Brochure_Arabic.png`; // Adjust this path according to where your images are stored
    window.open(imageUrl, '_blank'); // This will open the image in a new tab
;
    }
}