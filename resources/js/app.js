
let agentForm = document.querySelector('.disabled');
let closeBtn = document.querySelector('.close-btn');
let addBtn = document.querySelector('.add-btn button');

addBtn.addEventListener("click", (e) => {
    agentForm.className = 'agent-form-container show'
})

closeBtn.addEventListener("click", (e) => {
    agentForm.className = 'agent-form-container disabled'
})



