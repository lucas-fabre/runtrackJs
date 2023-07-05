$(document).ready(()=>{

    $("#button").click(function()
    {
        var paragraph = document.getElementById("p");
        
        document.createTextNode(
        fetch("http://localhost/runtrackJs/jour04/job01/expression.txt")
        .then(response => response.text())
        .then(response => paragraph.insertAdjacentHTML( 'beforeend', response)));
    });
});