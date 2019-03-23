document.addEventListener("DOMContentLoaded", function() {
    w3.hide("#grid-container");
    w3.hide("#team");
    w3.slideshow(".game", 5000);
    w3.getHttpObject("/api/teams", displayTeams);
});


function displayTeams(data){
    w3.displayObject("/api/teams" ,displayTeams);
}


function getPlayers(event) {
    let team = event.target.getAttribute("data-team");
    w3.getHttpObject(`/api/players?team=${team}` ,displayPlayers);
    w3.getHttpObject(`/api/team?team=${team}`, displayTeam);
}

function displayPlayers(data) {
    w3.hide(".slider");
    w3.displayObject("card-grid", data);
    w3.show("#grid-container");
    return;
}


function displayTeam(data) {
    w3.hide("#trophy")
    w3.displayObject("aside", data);
    w3.show("#team");

}







