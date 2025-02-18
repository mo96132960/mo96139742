function openPorshor(language) {
    const content = document.getElementById('porshor-content');
    
    if (language === 'english') {
        const imageUrl = `bit.ly/Moh_Eng_Brochure`; // Adjust this path according to where your images are stored
    window.open(imageUrl, '_blank'); // This will open the image in a new tab
;
    } else if (language === 'arabic') {
        const imageUrl = `bit.ly/Moh_Arab_Brochure`; // Adjust this path according to where your images are stored
    window.open(imageUrl, '_blank'); // This will open the image in a new tab
;
    }
}
