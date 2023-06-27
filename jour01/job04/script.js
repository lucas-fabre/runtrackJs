function bisextile(annee)
{
    if (((annee % 4) == 0) && ((annee % 100 != 0) || (annee % 400 == 0)))
    {
        alert("l'année est bisextile.");
    }
    else
    {
        alert("l'année n'est pas bissextile");
    };
}

let value = bisextile(1900);