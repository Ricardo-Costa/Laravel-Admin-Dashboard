/**
 * Setar mensagem de notificação.
 * 
 * @param message
 * @param type
 * @param icon
 */
function setNotify(message, type, icon) {
    $.notify({
        icon: ((!icon)? 'ti-gift' : icon),
        message: message
    }, {
        type: ((!type)? 'success' : type),
        timer: 4000
    });
}