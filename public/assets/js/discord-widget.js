window.addEventListener("DOMContentLoaded", (event) => {

    // COMPTEUR DISCORD
    var discord_key = "766660674453110814";
    if ($('.kelens--js-Discordcount').length && discord_key.length) {
        // Si erreur
        window.onerror = function (msg, url, ln) {
            return (msg === "Impossible de trouver la classe du compteur discord.");
        };

        // Affiche du compte
        $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
            $('.kelens--js-Discordcount').html(d.presence_count + " en ligne");
        });
    }

    // WIDGET DISCORD
    if ($('.kelens-js--Discordcount').length && discord_key.length) {
        window.onerror = function (msg, url, ln) {
            return (msg === "Impossible de trouver la classe.");
        };
        $.get('https://discordapp.com/api/guilds/' + discord_key + '/embed.json', function (d) {
            $('.kelens-js--Discordcount').html(d.presence_count + " en ligne");
            d.members.forEach(function (mem) {
                $('.kelens-widget[data-widget="kelens_discord_widget"] .kelens-content .kelens-Discordusers')
                    .append(`
                        <div class="kelens-discordUser">
                            <div class="kelens-userImg" style="background-image:url(${mem.avatar_url})">
                                <div class="kelens-userStatus kelens-status-${mem.status}"></div>
                            </div>
                            <div class="kelens-username">${mem.username}</div>
                        </div>`);
            });
        });
    }
})
