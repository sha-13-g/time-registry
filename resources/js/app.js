
const agentForm = document.querySelector('.disabled');
const closeBtn = document.querySelector('.close-btn');
const addBtn = document.querySelector('.add-btn button');

addBtn.addEventListener("click", (e) => {
    agentForm.className = 'agent-form-container show'
})

closeBtn.addEventListener("click", (e) => {
    agentForm.className = 'agent-form-container disabled'
})


