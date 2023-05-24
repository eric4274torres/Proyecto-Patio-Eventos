function comfirmar() {
    let resp = confirm("¿Esta seguro que desea eliminar este registro?")
    if (resp==true) {
        return true;
    } else {
        return false;
    }
}
