const buttons = document.querySelectorAll('.plan');
const collapsables = document.querySelectorAll('.collapse');
const inputHidden = document.getElementById('valueSelected');


buttons.forEach(button => {
  button.addEventListener('click', () => {
    const targetId = button.getAttribute('data-bs-target');
    const actualCollapse = document.querySelector(targetId);
    const opened = actualCollapse.classList.contains('show');
    buttons.forEach(b => b.classList.remove('selected'));

    // Cerrar todos menos el actual
    collapsables.forEach(el => {
      if (el !== actualCollapse) {
        bootstrap.Collapse.getOrCreateInstance(el).hide();
      }
    });
  
    // Si NO estaba abierto, lo abrimos
    if (!opened) {
      bootstrap.Collapse.getOrCreateInstance(actualCollapse).show();
    }
    
    button.classList.add('selected');
    
    inputHidden.value = button.getAttribute('data-value');
  });
});

const submitbutton = document.getElementById("form");

console.log(submitbutton);


submitbutton.addEventListener('submit', (event) => {
  
  const fields = document.querySelectorAll(".spaces");
  var error = 0;
  var selected = 0;
  
  event.preventDefault();

  fields.forEach(el => {
    document.getElementById(el.id + "_error").innerHTML = "&nbsp;";
    el.classList.remove('error-space');
      if(el.value == ""){
          error=1;
          console.log(el.id);
          
          document.getElementById(el.id + "_error").innerHTML = "Questo campo é obbligatorio";
          el.classList.add('error-space');

          
      }
    });

  const selection = document.querySelector('input[name="sesso"]:checked');
  document.getElementById("sesso_error").innerHTML = "&nbsp;";
  if (!selection){
    error=1;
    document.getElementById("sesso_error").innerHTML = "Scegli una opzione";
  }


  const plan = document.getElementById("valueSelected");
  console.log(plan.value);
  document.getElementById("plan_error").innerHTML = "&nbsp;";
  if(plan.value=null){
    error=1;
    document.getElementById("plan_error").innerHTML = "Scegli un plan";
  }

  if(error){
    
    return;
  }
  

  

});





