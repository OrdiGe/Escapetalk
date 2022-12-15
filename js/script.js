u(document).on('click', '.info', function(){
    modal('info', 'Badges', 'De badges hebben een bepaalde zeldzaamheid. Hoe moeilijker de challenge, hoe zeldzamer de badge.'+' </br></br> De zeldzaamheid wordt bepaald door de kleuren: </br> <p style="color:#A5A5A5">Grijs - Normaal</p><p style="color:#45A735">Groen - Uniek</p><p style="color:#009CDC">Blauw - Zeldzaam</p><p style="color:#8C3C8F">Paars - Episch</p><p style="color:#F77E0B">Oranje - Legendarisch</p>', 'test', 'test',{'Sluiten' : 'Sluiten'});
});

if(u(".challenges").children().length == 0) {
    u(".challenges").prepend(u('<p class="desc">Geen challenges beschikbaar</p>'));
    u('.claim-all-btn').first().style.display = 'none';
}

if(u('.claimable').length == 0){
    u('.claim-all-btn').removeClass('claim-all');
}