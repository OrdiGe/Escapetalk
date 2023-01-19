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

u(document).on('click', '.claimable', claimBadge);

u(document).on('click', '.claim-all', claimAllBadges);

u(document).on('click', '.place-review-btn', placeGameReview)

u('.claim-all').html("CLAIM ALLES ("+u('.claimable').length+")");

//Als er op een badge wordt geklikt, dan wordt de badge info weergegeven via een modal
u(document).on('click', '.badge', function() {
    console.log(u(this).data('badgeDesc'));
    modal('info', u(this).data('badgeTitle'), u(this).data('badgeDesc')+' </br></br> Deze badge is behaald op '+u(this).data('claimedDate')+'', 'test', 'test',{'Sluiten' : 'Sluiten'});
});

//De funcie die de badges claimt
function claimBadges(badges = [])
{
    let data = new FormData();
    data.append('type', 'claimBadges');

    data.append('badges', JSON.stringify(badges));


    setTimeout(function(){ u('.badge').removeClass("badge-ani"); }, 750);

    //Als meer dan 2 badges worden geclaimd, dan zie je alleen het aantal geclaimde challenges in de notification
    if(badges.length >= 3) {
        multipleNotifications(u('.claimable').length, 'small');
    }

    fetch('http://localhost/Escapetalk/includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
        response.json().then((res) => {
            console.log(res);
            Object.keys(res.badges).forEach(function(k){

                var badge = res.badges[k];
                
                //Badge wordt toegevoegd in de div
                u('.badges-content').prepend(u('<div class="badge" id="badge'+badge.id+'" data-badgeId="'+badge.id+'" data-badgeTitle="'+badge.title+'" data-badgeDesc="'+badge.description+'" data-claimedDate="'+badge.claimed_human_date+'"><img src="http://localhost/Escapetalk/images/'+badge.icon+'"></div>'));
                
                u('.badges-box-description').remove();
                
                if(badges.length < 3) {
                    singleNotification('Je hebt de badge "'+badge.title+'" verdiend!', '/badges/');
                }

                u('#badge'+badge.id+'').addClass("badge-ani");
                u('.challenge[data-challengeId="'+badge.id+'"] .claimable').removeClass('claimable');
                u('.challenge[data-challengeId="'+badge.id+'"]').off('click');

                u('#confetti-canvas').first().style.visibility = 'visible';
                startConfetti();

                setTimeout(function(){
                    console.log(badge);
                    u('.challenge[data-challengeId="'+badge.id+'"]').addClass("challenge-ani");
                    stopConfetti();
                    setTimeout(function(){

                        u('.challenge[data-challengeId="'+badge.id+'"]').remove();
                        u('.claim-all').html("CLAIM ALLES ("+u('.claimable').length+")");
                        
                        // You haven't gone rank up
                        if (u('a.rank').html() == res.rank.name){
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
            });            
        });            
    })
    .then((data) => {

    })
    .catch((err) => {
        console.log('error', err);
    });
}  

function placeGameReview() {

    let data = new FormData();
    data.append('type', 'placeGameReview');

    fetch('http://localhost/Escapetalk/includes/ajax.inc.php', {method: 'POST', body: data}).then(response => {
        response.json().then((res) => {
            location.reload(true);
            console.log(res);
        });
    });
}