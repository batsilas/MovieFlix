
let createButton = document.getElementById("create-button");
let createForm = document.getElementById("create-form");

let isCreateFormDisplaying = false;

let updateButton = document.getElementById("update-button");
let updateForm = document.getElementById("update-form");

let isUpdateFormDisplaying = false;

let deleteButton = document.getElementById("delete-button");
let deleteForm = document.getElementById("delete-form");

let isDeleteFormDisplaying = false;

createButton.addEventListener("click",()=>{
    if(isCreateFormDisplaying==false){
        createForm.style.display = "block";
        isCreateFormDisplaying = true;
    }else{
        createForm.style.display = "none";
        isCreateFormDisplaying = false;
    }
})

updateButton.addEventListener("click",()=>{
    if(isUpdateFormDisplaying==false){
        updateForm.style.display = "block";
        isUpdateFormDisplaying = true;
    }else{
        updateForm.style.display = "none";
        isUpdateFormDisplaying = false;
    }
})
deleteButton.addEventListener("click",()=>{
    if(isDeleteFormDisplaying==false){
        deleteForm.style.display = "block";
        isDeleteFormDisplaying = true;
    }else{
        deleteForm.style.display = "none";
        isDeleteFormDisplaying = false;
    }
})