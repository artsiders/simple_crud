function link(href) {
    location.assign(`./${href}`)
}

function deletes(idClient, nom) {
    let confirmation = confirm(`tu veux vraiment suprimmer ${nom} ?`)
    confirmation ? location.assign(`delete.php?idclient=${idClient}`) : alert("action annuler")
}