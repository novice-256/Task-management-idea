var folderName = "";
const baseUrl =  window.location.protocol + "//" + window.location.hostname;
  // update  tag stage
  $('.draggable').on('dragend', function() {
    let id = 1;
    let taskId = $(this).attr('data-task-id');
    let taskStage = $(this).attr('data-task-stage');
    let _token = $('meta[name="csrf-token"]').attr('content');
    let url = baseUrl + ":8000/task/move/" + id;
    ajaxCRUD("PUT", url, { taskId, taskStage, _token }, (response) => {
        console.log(response);
  });
  });


/**
 * Helper functions to avoid repetition 
 */

// reusable ajax function
function ajaxCRUD(method, url, data, successFunc) {
$.ajax({
  type: method,
  url: url,
  data: data,
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
