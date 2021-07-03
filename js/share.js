function share(){
    if (navigator.share !== undefined) {
        navigator.share({
            title: 'Orar e Labutar',
            text: 'Um texto de resumo',
            url: 'https://orarelabutar.online/',
        })
        .then(() => console.log('Successful share'))
        .catch((error) => console.log('Error sharing', error));
    }
}