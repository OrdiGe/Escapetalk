console.log(u('#progress-bar-xp').first().offsetWidth);

function levelUp() {
    if(u('#progress-bar-xp').first().offsetWidth >= u('.full-progress-bar').first().offsetWidth) {
        u('#progress-bar-xp').first().style.width = u('#progress-bar-xp').first().offsetWidth - u('.full-progress-bar').first().offsetWidth + "px";
        u('#progress-bar-xp').first().offsetWidth
        console.log(u('p .rank'));
        u('p .rank').first().innerHTML = "Escape Newbie";

    }
}