function ValidaRep (this.rep_form){
  var nome = rep_form.nome.value;
  if (nome ==""){
    alert();
    rep_form.nome.focus();
    return false;
  }
}
