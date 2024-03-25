import {task_card_script} from '../custom.js'
import {task_move} from '../DragTask.js'
task_move()
task_card_script()
var folderName = "";
var baseUrl = window.location.protocol + "//" + window.location.hostname;
// update  tag stage
$('.draggable').on('dragend', function () {

  let taskId = $(this).attr('data-task-id');
  let taskStage = $(this).attr('data-task-stage');
  let _token = $('meta[name="csrf-token"]').attr('content');
  let url = baseUrl + ":8000/api/task/move";
  ajaxCRUD("PUT", url, { taskId, taskStage }, _token, (response) => {
    console.log(response);
  });
});

/**
 *        Card Body 
 */
$(() => {

  $(document).on('click','.add-card', function (e) {
    console.log('clicked');
    e.preventDefault();
    var form = $(this).closest('form')[0];
    let url = baseUrl + ":8000/api/task/store"
    let data = retrieveFormData(form)
    let projectId = data['project_id']
    let _token = data['csrf-token']
    
    ajaxCRUD("POST", url, { ...data }, _token, (response) => {
      if (response.success) {
       let projectUrl = baseUrl + ":8000/project/show/"+projectId

        ajaxCRUD("get", projectUrl, {  }, 'null', (data) => {
           let div = document.createElement('div')
           let node = data 
           div.innerHTML= node 
            let cardCols=  $(div).find('#task-card-wrapper').html()
            $('#task-card-wrapper').html(cardCols)
            // console.log(serialized);
            task_card_script()
              task_move()

        })
       
      }
    });
  });

  $('.close-title-form').click(function () {
    $('.card-title-form').hide();
  });

});


/**
 * Helper functions to avoid repetition 
 */

// reusable ajax function
function ajaxCRUD(method, url, data, token, successFunc) {
  $.ajax({
    type: method,
    url: url,
    data: data,
    beforeSend: function (xhr) {
      xhr.setRequestHeader('X-CSRF-TOKEN', token);
    },

    success: function (response) {
      if (successFunc) {
        successFunc(response);
      }
    },
    error: function (xhr, status, error) {
      console.error(xhr.responseText);
    },
  });
}

function retrieveFormData(form) {
  let formElements = $(form).find('input, select, textarea');
  let formData = {};
  formElements.each((index, element) => {
    let name = $(element).attr('name');
    let value = $(element).val();
    formData[name] = value;
  });
  return formData;
}

function taskCard(data){
`
<li class="draggable task-radius list-item p-0 my-2 " data-task-id="${data.task_id}"
  data-task-stage="${data.stage_id}" draggable="true">
  {{-- sub-task card start --}}
  <div class="card sub-task">
    <div class="task-overlay d-none p-1  " data-toggle="modal"
      data-target="#card-setting-modal">
      <span
        class=" cursor-pointer dropdown float-right  mr-2 h5 text-white bg-danger border">
        <span class="bg-transparent  dropdown-toggle text-white" type="button"
          id="task-quick-setting" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <ion-icon name="create-outline"></ion-icon>
        </span>
        <ul class="dropdown-menu" aria-labelledby="task-quick-setting">
          <li class="dropdown-item" href="#">
            <p class="col"> Open Card</p>
          </li>
          <a class="dropdown-item" href="#">Edit Labels</a>
          <a class="dropdown-item" href="#">Add members</a>
          <a class="dropdown-item" href="#">Change Cover</a>
          <a class="dropdown-item" href="#">Edit Dates</a>
        </ul>
      </span>
    </div>
    <div class="card-header task-radius radius-bottom-0  bg-secondary ">
      <h6 class="h6  py-2 fw-500 text-center w-100  text-white">"${data.task_name}" </h6>
    </div>
    <div class="card-body m-0 p-1 ">
      <ul class="task-label px-2 col-12 row">
        <li class="m-1 text-light badge badge-dark col-2 rounded">
          <strong> {{-- Task Labels --}}</strong>
        </li>
      </ul>
      <div class="task-mid">
        <strong>
        {{-- Task Desc --}}
        </strong>
      </div>
      <div class="task-links h6 col-8 d-flex justify-content-around p-1 ">
        <span class="d-flex align-items-center">
          <ion-icon name="menu-outline"></ion-icon>
          <span class="mx-1">{{ '' }}</span>
        </span>

        <span class="d-flex align-items-center">
          <ion-icon name="chatbubbles-outline"></ion-icon>
          <span class="mx-1">{{ 0 }}</span>
        </span>
        <span class="d-flex align-items-center">
          <ion-icon name="checkbox-outline"></ion-icon>
          <span class="mx-1">{{ 0 }}</span>
        </span>
      </div>
    </div>
  </div>

</li>
`
}


function simpleToggle(target, toggleItem, extraParam) {
  $(()=>{

      $(target).on('click',function ()  {
          if (extraParam && extraParam.class) {
              return $(this).find(toggleItem).toggleClass(extraParam.class);
          }
          return $(this).find(toggleItem).toggle({direction :extraParam.direction });
          
          
      });
  })
}
