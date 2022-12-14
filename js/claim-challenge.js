var currentRank = 0;

var score = 0;

var totalScore = 0;

var count = 0;

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

u(document).on('click', '.claimable', claimBadge);

u(document).on('click', '.claim-all', claimAllBadges);

u('.claim-all').html("CLAIM ALLES ("+u('.claimable').length+")");

u(document).on('click', '.badge', function() {
    modal('info', u(this).data('badgeTitle'), u(this).data('badgeDesc')+' </br></br> Deze badge is behaald op '+u(this).data('claimedDate')+'', 'test', 'test',{'Sluiten' : 'Sluiten'});
});

function claimBadges(badges = [])
{
    let data = new FormData();
    data.append('type', 'claimBadges');

    data.append('badges', JSON.stringify(badges));

    // console.log('badges-check:');
    // console.log(badges);


    setTimeout(function(){ u('.badge').removeClass("badge-ani"); }, 750);

    if(badges.length >= 3) {
        multipleNotifications(u('.claimable').length, 'small');
    }

    fetch('http://localhost/Escapetalk/includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
        //console.log(response);
        response.json().then((res) => {

            Object.keys(res.badges).forEach(function(k){

                badge = res.badges[k];
    
                u('.badges-content').prepend(u('<div class="badge" id="badge'+badge.id+'" data-badgeId="'+badge.id+'" data-badgeTitle="'+badge.title+'" data-badgeDesc="'+badge.description+'"><img src="http://localhost/Escapetalk/images/'+badge.icon+'"></div>'));
                u('.badges-box-description').remove();
                if(badges.length < 3) {
                    singleNotification('Je hebt de badge "'+badge.title+'" verdiend!', '/badges/');
                }

                // modal('info', ''+e.title+'', 'Deze badge is behaald op deze datum', 'test', 'test',{'Sluiten' : 'Sluiten'});
                u('#badge'+badge.id+'').addClass("badge-ani");
                u('.challenge[data-challengeId="'+badge.id+'"] .claimable').removeClass('claimable');
                u('.challenge[data-challengeId="'+badge.id+'"]').off('click');

                u('#confetti-canvas').first().style.visibility = 'visible';
                startConfetti();

                setTimeout(function(){
                    u('.challenge[data-challengeId="'+badge.id+'"]').addClass("challenge-ani");
                    stopConfetti();
                    setTimeout(function(){


                        u('.challenge[data-challengeId="'+badge.id+'"]').remove();
                        u('.claim-all').html("CLAIM ALLES ("+u('.claimable').length+")");


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
                        

                        // You haven't gone rank up
                        if (u('p.rank').html() == res.rank.name){
                            u('#progress-bar-xp').first().style.width = res.rank.percentage + "%";
                            u('.progression-text span').html( res.rank.points_diff + " / " + res.rank.rank_points_diff);
                        }
                        else{
                            // Rank up
                            u('#progress-bar-xp').first().style.width = "100%";
                            setTimeout(function(){
                                u('#progress-bar-xp').first().style.transition = "0s";
                                u('p.rank').html(res.rank.name);
                                u('.progression-text span').html(res.rank.points_diff + " / " + res.rank.rank_points_diff);
                                u('#progress-bar-xp').first().style.width = "0%";
                                setTimeout(function(){
                                    u('#progress-bar-xp').first().style.transition = "1s";
                                    u('#progress-bar-xp').first().style.width = res.rank.percentage + "%";
                                }, 100);
                            }, 1000);

                        }
                        


                        if(u(".challenges").children().length == 0) {
                            u(".challenges").prepend(u('<p class="desc">Geen challenges beschikbaar</p>'));
                            u('.claim-all-btn').first().style.display = 'none';
                        } 

                        if(u('.claimable').length == 0){
                            u('.claim-all-btn').removeClass('claim-all');
                        }
                    }, 1000);                    
                }, 1500); 
                count++;  

            });

            // u(res.badges).each(function(badge, badge_id){
            //     console.log(badge);
            //     console.log(badge_id);
            //     u('.badges-content').prepend(u('<div class="badge" id="badge'+badge.id+'" data-badgeId="'+badge.id+'" data-badgeTitle="'+badge.title+'" data-badgeDesc="'+badge.description+'"><img src="http://localhost/Escapetalk/images/'+badge.icon+'"></div>'));
            //     u('.badges-box-description').remove();
            //     if(badges.length < 3) {
            //         singleNotification('Je hebt de badge "'+badge.title+'" verdiend!', '/badges/');
            //     }

            //     // modal('info', ''+e.title+'', 'Deze badge is behaald op deze datum', 'test', 'test',{'Sluiten' : 'Sluiten'});
            //     u('#badge'+badge.badge_id+'').addClass("badge-ani");
            //     u('.challenge[data-challengeId="'+badge.id+'"] .claimable').removeClass('claimable');
            //     u('.challenge[data-challengeId="'+badge.id+'"]').off('click');

            //     u('#confetti-canvas').first().style.visibility = 'visible';
            //     startConfetti();

            //     setTimeout(function(){
            //         u('.challenge[data-challengeId="'+badge.id+'"]').addClass("challenge-ani");
            //         stopConfetti();
            //         setTimeout(function(){


            //             u('.challenge[data-challengeId="'+badge.id+'"]').remove();
            //             u('.claim-all').html("CLAIM ALLES ("+u('.claimable').length+")");


            //             // u('#progress-bar-xp').first().style.width = u('#progress-bar-xp').first().offsetWidth + (u('.full-progress-bar').first().offsetWidth * (e.expPoints / 100)) + "px";
            //             // console.log(u('#progress-bar-xp').first().offsetWidth);

            //             // u(res.new_rank).each(function(e){

            //                 //score += badge.expPoints;
            
            //                 //console.log(score);
            
            //                 // u('.progression-text').html("Progressie: " + score + " / " + e[currentRank].minScore);
            
            //                 // u('#progress-bar-xp').first().style.width = (score / e[currentRank].minScore) * 100 + "%";
            
            //                 // if(totalScore >= e[currentRank + 3].minScore) {
            //                 //     console.log('4 levels up!')
            //                 //     score = totalScore - e[currentRank + 3].minScore;
            //                 //     //console.log(score);                                
            
            //                 //     currentRank += 4;   
            //                 // }
            //                 // else if(totalScore >= e[currentRank + 2].minScore) {
            //                 //     console.log('3 levels up!')
            //                 //     score = totalScore - e[currentRank + 2].minScore;
            //                 //     //console.log(score);                                
            
            //                 //     currentRank += 3;   
            //                 // }
            //                 // else if (totalScore >= e[currentRank + 1].minScore) {
            //                 //     console.log('2 levels up!')
            //                 //     score = totalScore - e[currentRank + 1].minScore;
            //                 //     //console.log(score);                                
            
            //                 //     currentRank += 2;
            //                 // }
            //                 // else if (totalScore >= e[currentRank].minScore){
            
            //                 //     console.log('Level Up!');
            //                 //     score = totalScore - e[currentRank].minScore;
            //                 //     //console.log(score);                                
            
            //                 //     currentRank += 1;                                
            //                 // }
            
            //                 // for(let i = 0; i < res.new_rank.length; i++) {
            //                 //     if (totalScore >= e[i].minScore){
            
            //                 //         console.log(''+ i +' levels Up!');
            //                 //         score = totalScore - e[i].minScore;
            //                 //         //console.log(score);                                
                
            //                 //         currentRank += i;                                
            //                 //     }
            //                 // }
            
            //                 // u('#progress-bar-xp').first().style.width = (score / e[currentRank].minScore) * 100 + "%";
            //                 // u('.progression-text').html("Progressie: " + score + " / " + e[currentRank].minScore);
                            
                            
            //             // });
                        

            //             // You haven't gone rank up
            //             if (u('p.rank').html() == res.rank.name){
            //                 u('#progress-bar-xp').first().style.width = res.rank.percentage + "%";
            //                 u('.progression-text span').html( res.rank.points_diff + " / " + res.rank.rank_points_diff);
            //             }
            //             else{
            //                 // Rank up
            //                 u('#progress-bar-xp').first().style.width = "100%";
            //                 setTimeout(function(){
            //                     u('#progress-bar-xp').first().style.transition = "0s";
            //                     u('p.rank').html(res.rank.name);
            //                     u('.progression-text span').html(res.rank.points_diff + " / " + res.rank.rank_points_diff);
            //                     u('#progress-bar-xp').first().style.width = "0%";
            //                     setTimeout(function(){
            //                         u('#progress-bar-xp').first().style.transition = "1s";
            //                         u('#progress-bar-xp').first().style.width = res.rank.percentage + "%";
            //                     }, 100);
            //                 }, 1000);

            //             }
                        


            //             if(u(".challenges").children().length == 0) {
            //                 u(".challenges").prepend(u('<p class="desc">Geen challenges beschikbaar</p>'));
            //                 u('.claim-all-btn').first().style.display = 'none';
            //             } 

            //             if(u('.claimable').length == 0){
            //                 u('.claim-all-btn').removeClass('claim-all');
            //             }
            //         }, 1000);                    
            //     }, 1500); 
            //     count++;                       
            // });          
        });            
    })
    .then((data) => {
        // console.log('Success:', data);
      })
    .catch((err) => {
        console.log('error', err);

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