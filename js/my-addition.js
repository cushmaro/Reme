/*====================VARIABLES=====================*/

let modal = document.getElementById('id-modal');
let addMemberBtn = document.getElementById('add-member');
let modalCancelBtn =document.getElementById(  'cancel-member');
let memberName = document.getElementById('mfname');
let memberList = document.getElementById('member-list');
let submitMember = document.getElementById('submit-member');

let groupName = document.getElementById('group-name');
let groupNameToFill = document.getElementById('display-group-name');



/*====================FUNCTION=====================*/

function clearText(element) {
  element.innerText = "";
}

function showModal() {
  modal.style.display='block';
}

function hideModal(){
  modal.style.display='none';
}

//shows the group name in the member area
function showGroupName(){
   groupNameToFill.innerText = groupName.value;
   groupNameToFill.classList.add('fancy-group-name');
}

//add member to the list when 'submit'
function addToMemberList(){
  let li = document.createElement('li');
  li.innerText = memberName.value;
  memberList.appendChild(li);

  hideModal();
  clearText(memberName);

}

submitMember.addEventListener("click", addToMemberList);
groupName.addEventListener("focusout", showGroupName);
modalCancelBtn.addEventListener("click", hideModal);
addMemberBtn.addEventListener("click", showModal);


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//display the uploaded image
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#my-img')
        .attr('src', e.target.result)
        .width(150)
        .height(150);
    };

    reader.readAsDataURL(input.files[0]);
  }
}