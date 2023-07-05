var Metal = {
    groupe: "Metallica",
    genre: "Heavy Metal",
    création: "1981",
    chanteur: "James Hetfield",
    bassiste: "Robert Trujillo",
    guitariste: "Kirk Hammett",
    batteur: "Lars Ulrich",
};

function jsonValueKey(Metal, key){
    console.log(Metal[key])
};


jsonValueKey(Metal, "bassiste")