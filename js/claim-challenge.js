var currentRank = 0;

var score = 0;

var totalScore = 0;

const claimBadge = function() {

    var badge = u(this).data('badgeId');

    claimBadges([badge]);
}

const claimAllBadges = function() {

    var claimablebadges = u('.claimable');

    var badges = [];


    claimablebadges.each(function (e){
        badges.push(u(e).data('badgeId'));
    });        

    claimBadges(badges);
}

u('.claimable').on('click', claimBadge);

u(document).on('click', '.claim-all', claimAllBadges);

u('.claim-all').first().innerHTML = "CLAIM ALLES ("+u('.claimable').length+")";

function claimBadges(badges = [])
{


    let data = new FormData();
    data.append('type', 'claimBadges');
    // data.append('type', 'levelUp');
    data.append('badges', JSON.stringify(badges));
    // data.append('levels', JSON.stringify(levels));

    u('.badges-box-description').first().style.display = 'none';

    setTimeout(function(){ u('.badge').removeClass("badge-ani"); }, 750);

    if(badges.length >= 3) {
        multipleNotifications(u('.claimable').length, 'small');
    }

    fetch('http://localhost/Escapetalk/includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
        //console.log(response);
        response.json().then((res) => {

            for(let i = 0; i < res.badges.length; i++) {
                totalScore += res.badges[i].expPoints;
                score += res.badges[i].expPoints;
                //console.log(score);

            }
            u(res.badges).each(function(e){
                const badge = e;
                u('.badges-content').prepend(u('<div class="badge" id="badge'+badge.id+'"><img src="http://localhost/Escapetalk/images/'+badge.icon+'"><div class="badge-desc"><h4>Profiel compleet</h4><p>Behaald op</p><p>25-10-2022</p></div></div>'));
                u(document).on('click', '#badge'+badge.id, function() {
                    modal('info', ''+badge.title+'</br>', ''+badge.description+' </br></br> Deze badge is behaald op '+badge.claimedDate+'', 'test', 'test',{'Sluiten' : 'Sluiten'});
                });

                if(badges.length < 3) {
                    singleNotification('Je hebt de badge '+e.title+' verdiend!', '/badges/');
                }

                // modal('info', ''+e.title+'', 'Deze badge is behaald op deze datum', 'test', 'test',{'Sluiten' : 'Sluiten'});
                u('#badge'+badge.id+'').addClass("badge-ani");
                u('.challenge[data-challengeId="'+badge.id+'"] .claimable').removeClass('claimable');
                u('.challenge[data-challengeId="'+badge.id+'"] .claimable').off('click');

                u('#confetti-canvas').first().style.visibility = 'visible';
                startConfetti();

                setTimeout(function(){
                    u('.challenge[data-challengeId="'+badge.id+'"]').addClass("challenge-ani");
                    stopConfetti();
                    setTimeout(function(){


                        u('.challenge[data-challengeId="'+badge.id+'"]').remove();
                        u('.claim-all').first().innerHTML = "CLAIM ALLES ("+u('.claimable').length+")";


                        // u('#progress-bar-xp').first().style.width = u('#progress-bar-xp').first().offsetWidth + (u('.full-progress-bar').first().offsetWidth * (e.expPoints / 100)) + "px";
                        // console.log(u('#progress-bar-xp').first().offsetWidth);

                        // u(res.new_rank).each(function(e){

                            //score += badge.expPoints;
            
                            //console.log(score);
            
                            // u('.progression-text').html("Progressie: " + score + " / " + e[currentRank].minScore);
            
                            // u('#progress-bar-xp').first().style.width = (score / e[currentRank].minScore) * 100 + "%";
            
                            // if(totalScore >= e[currentRank + 3].minScore) {
                            //     console.log('4 levels up!')
                            //     score = totalScore - e[currentRank + 3].minScore;
                            //     //console.log(score);                                
            
                            //     currentRank += 4;   
                            // }
                            // else if(totalScore >= e[currentRank + 2].minScore) {
                            //     console.log('3 levels up!')
                            //     score = totalScore - e[currentRank + 2].minScore;
                            //     //console.log(score);                                
            
                            //     currentRank += 3;   
                            // }
                            // else if (totalScore >= e[currentRank + 1].minScore) {
                            //     console.log('2 levels up!')
                            //     score = totalScore - e[currentRank + 1].minScore;
                            //     //console.log(score);                                
            
                            //     currentRank += 2;
                            // }
                            // else if (totalScore >= e[currentRank].minScore){
            
                            //     console.log('Level Up!');
                            //     score = totalScore - e[currentRank].minScore;
                            //     //console.log(score);                                
            
                            //     currentRank += 1;                                
                            // }
            
                            // for(let i = 0; i < res.new_rank.length; i++) {
                            //     if (totalScore >= e[i].minScore){
            
                            //         console.log(''+ i +' levels Up!');
                            //         score = totalScore - e[i].minScore;
                            //         //console.log(score);                                
                
                            //         currentRank += i;                                
                            //     }
                            // }
            
                            // u('#progress-bar-xp').first().style.width = (score / e[currentRank].minScore) * 100 + "%";
                            // u('.progression-text').html("Progressie: " + score + " / " + e[currentRank].minScore);
                            
                            
                        // });
                        
                        u('p.rank').html(res.profile.rankName);
                        u('#progress-bar-xp').first().style.width = res.profile.percentage + "%"
                        u('.progression-text span').html( res.profile.current_points + " / " + res.profile.next_rank_points);

                        if(u(".challenges").children().length == 0) {
                            u(".challenges").prepend(u('<p class="desc">Geen challenges beschikbaar</p>'));
                            u('.claim-all-btn').first().style.display = 'none';
                        } 

                        if(u('.claimable').length == 0){
                            u('.claim-all-btn').removeClass('claim-all');
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