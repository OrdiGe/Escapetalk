
function checkNotifications() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var notifications = JSON.parse(this.responseText);
            var amount = notifications.length

            if (amount > 0) {
                if (amount > 2 && window.innerWidth < 426 && window.innerHeight < 1025) {
                    multipleNotifications(amount, 'small');
                } else {
                    if (amount > 5) {
                        multipleNotifications(amount);
                    } else {
                        for (let i = 0; i < notifications.length; i++) {

                            singleNotification(notifications[i]['message'], notifications[i]['slug']);
                        }
                    }
                }
            }
        }
    };

    xhttp.open('POST', '/includes/ajax.inc.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('type=notifications&user_id=' + user_id);
}

checkNotifications();


var interval = setInterval(checkNotifications, 30000);

function multipleNotifications(amount, type = 'large') {

    singleNotification('Je hebt ' + amount + ' notificaties. Klik om ze te bekijken.', '/notificaties/');

}

function singleNotification(message, slug) {
    var i = 1;

    var notification = document.createElement('a');
    notification.className = 'notification';
    notification.href = slug;
    notification.innerHTML = '<object><a onclick=\'window.event.preventDefault(); closeNotification(this);\' class=\'notification-close\'><i class=\'fas fa-times\'></i></a></object> <div class=\'text\'>' + message + '</div>';
    document.getElementById('notifications-wrapper').appendChild(notification);
    var notify = this;

    setTimeout(function () {
        document.getElementById('notifications-wrapper').appendChild(notification);
        notification.classList.add('show');
    }, (i * 500));

    setTimeout(function () {
        notification.classList.remove('show');
        notification.classList.add('hide');

        setTimeout(function () {
            notification.remove();
        }, (1000 + (i * 500)));
    }, (10000 + (i * 500)));
}
