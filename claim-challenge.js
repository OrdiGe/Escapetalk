const claimBadge = function() {

    var badge = u(this).data('badgeId');

    claimBadges([badge]);
}

const claimAllBadges = function() {
    var clicked = false;
    var claimablebadges = u('.claimable');

    var badges = [];

    u('.claim-all').off('click');

    claimablebadges.each(function (e){
        badges.push(u(e).data('badgeId'));
    });        

    claimBadges(badges);
}

u('.claimable').on('click', claimBadge);

u('.claim-all').on('click', claimAllBadges);

u('.claim-all').first().innerHTML = "CLAIM ALLES ("+u('.claimable').length+")";

function claimBadges(badges = [])
{

    let data = new FormData();
    data.append('type', 'claimBadges');
    data.append('type', 'levelUp');
    data.append('badges', JSON.stringify(badges));
    data.append('levels', JSON.stringify(levels));

    u('.badges-box-description').first().style.display = 'none';

    setTimeout(function(){ u('.badge').removeClass("badge-ani"); }, 750);

    fetch('http://localhost/Escapetalk/includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
        console.log(response);
        response.json().then((res) => {

            u(res).each(function(e){

                u('.badges-content').prepend(u('<div class="badge" id="badge'+e.id+'"><img src="http://localhost/Escapetalk/images/'+e.icon+'"><div class="badge-desc"><h4>Profiel compleet</h4><p>Behaald op</p><p>25-10-2022</p></div></div>'));

                u('#badge'+e.id+'').addClass("badge-ani");
                u('.challenge[data-challengeId="'+e.id+'"] .claimable').removeClass('claimable');
                u('.challenge[data-challengeId="'+e.id+'"] .claimable').off('click');

                u('#confetti-canvas').first().style.visibility = 'visible';
                startConfetti();

                setTimeout(function(){
                    u('.challenge[data-challengeId="'+e.id+'"]').addClass("challenge-ani");
                    stopConfetti();
                    setTimeout(function(){


                        u('.challenge[data-challengeId="'+e.id+'"]').remove();
                        u('.claim-all').first().innerHTML = "CLAIM ALLES ("+u('.claimable').length+")";


                        u('#progress-bar-xp').first().style.width = u('#progress-bar-xp').first().offsetWidth + (u('.full-progress-bar').first().offsetWidth * (e.expPoints / 100)) + "px";
                        console.log(u('.full-progress-bar').first().offsetWidth * (e.expPoints / 100))
                        levelUp();

                        if(u(".challenges").children().length == 0) {
                            u(".challenges").prepend(u('<p class="desc">Geen challenges beschikbaar</p>'));
                            u('.claim-all-btn').first().style.display = 'none';
                        } 

                        if(u('.claimable').length == 0){
                            u('.claim-all').remove();
                        }
                    }, 1000);                    
                }, 1500);                        
            });                
        });            
    })
    .catch((err) => {


    });
    
}   

// PHP: Hier check je welk ID er op gevraagd word en welke badge daar bij hoort
// claimbadge.php
// json_return = [];  
// if (id == 'all') {
//      claim alles
// }
// elseif (id == X) {
//      json_return['html'] = "HTML VAN DIE BADGE";
// }
// echo json_encode(json_return);

// when I click on claim
// Do Ajax request to claimbadge.php (id van challenge)

// If (ajax_request != false) {
//      INSERT badge from ajax_request json array
//      {{claimed_badge = "TEST", "HTML" = }}
//      u('.badges-container').prepend(json.badge_html);
// }
// ELSE {
//      SHOW ERROR
// }