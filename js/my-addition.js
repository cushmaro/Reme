/*====================VARIABLES=====================*/

var modal = document.getElementById('id-modal');
var addMember = document.getElementById('add-member');
var modalCancelBtn =document.getElementById(  'cancel-member');
var groupName = document.getElementById('group-name').value;


/*====================FUNCTION=====================*/

function showModal() {
  modal.style.display='block';
}

function hideModal(){
  modal.style.display='none';
}

function showGroupName{

}

function addToMemberList{

}



modalCancelBtn.addEventListener("click", hideModal);
addMember.addEventListener("click", showModal);


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