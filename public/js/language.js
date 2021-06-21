const langList = ['pl', 'en'];
var currentLang = langList[0];

function changeLanguage(lang) {
    switch (lang) {
        case langList[0]:
            currentLang = langList[0];
            break;
        case langList[1]:
            currentLang = langList[1];
            break;
        default:
            console.log('bad parm');
    }
}
