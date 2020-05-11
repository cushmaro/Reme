/*====================VARIABLES=====================*/

let modal = document.getElementById('id-modal');
let memberForm = document.getElementById('member-form');
let addMemberBtn = document.getElementById('add-member');
let modalCancelBtn =document.getElementById(  'cancel-member');
let memberName = document.getElementById('mfname');
let memberList = document.getElementById('member-list');
let submitMember = document.getElementById('submit-member');

let groupName = document.getElementById('group-name');
let groupNameToFill = document.getElementById('display-group-name');
let memberAge = document.getElementById('member-age');



/*====================EVENTS======================*/


submitMember.addEventListener("click", addToMemberList);
groupName.addEventListener("focusout", showGroupName);
modalCancelBtn.addEventListener("click", hideModal);
addMemberBtn.addEventListener("click", showModal);
memberAge.addEventListener("focusout", validationAge);



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
   if (groupName.value !== "") {
     groupNameToFill.innerText = groupName.value;
     groupNameToFill.classList.add('fancy-group-name');
     completedInput(groupName);
   }
}

//add member to the list when 'submit'
function addToMemberList() {
  let li = document.createElement('li');

  if (memberName.value !== "" ) {
  li.innerText = memberName.value;
  memberList.appendChild(li);

  resetModal(memberForm);

    hideModal();
  }
  else {
    alert("Please enter Name!");
  }
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};


//display the uploaded image X2
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
//duplicate the function above
function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#my-img2')
        .attr('src', e.target.result)
        .width(200)
        .height(190);
    };

    reader.readAsDataURL(input.files[0]);
  }
}

function completedInput(element) {
  element.classList.add('complete-border');
}

function validationAge() {
  let age =this.value;
  if (! (age > 0 && age < 99)){
    alert("Please only enter numeric characters only for your Age! (Allowed input:0-9)");
  }
}

function resetModal(form) {
  form.reset();
  $('#my-img2').attr('src', '#');
}