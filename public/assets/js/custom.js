/**
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 */
/*
        Home script 
*/
 
$(() => {
    $('#add-project-form').hide()
    $('#add-project').on('click', () => {
        console.log();
        $('#add-project-form').toggle( { direction: "bottom" }, 1000);
        $('.navbar').addClass('z-index-1')
    })
    $('#close-form').on('click', () => {
        $('#add-project-form').toggle( { direction: "bottom" }, 1000);
        $('.navbar').removeClass('z-index-1')
    })
    $('#add-stages').click(function() {
var projectStage = $('#project_stage').val().trim();
if (projectStage !== '') {

   let selected=  $('#selected').val() ;
   if( $('#selected').val() ===""){
    $('#selected').val((projectStage))

}else{

    $('#selected').val((selected + "," + projectStage))
}

/*
        Clear the project name input
  */  
    $('#project_stage').val('');
    let val=  $('#selected').val()
    let arr = val.split(',')
   let selectedHtml  =arr.map(item => {
         return`<span class="mx-2 bg-light p-1 rounded">${item}</span>`
    });
    $('#selected-items').html(selectedHtml)
}
    });

})


$(() => {
    // Toggle task form
    $('.toggle-btn').next().toggle();
    $('.toggle-btn').on('click', function () {
        let nameAttr = $(this).attr('name');
        $('.toggle-btn').next().not(`#toggle-task-${nameAttr}`).hide();
        $(`#toggle-task-${nameAttr}`).toggle();
    });

    $('#show-task-form').on('click', () => {
        $('#add-task-form').toggle();
    });

    $('#close-task-form').on('click', () => {
        $('#add-task-form').hide();
    });

    // Label related functionality
    let labelColor;
    let labelData = [];
    $('.label_color').on('click', function () {
        labelColor = $(this).val();
    });

    $('#add-label').on('click', e => {
        e.preventDefault();
        let labelName = $('#label_name').val();
        var labelBadge = `<span class="badge bg-${labelColor} text-white">
            <i class="fa-regular fa-circle-xmark mx-1" onClick="$(this).closest('.badge').remove()"></i>${labelName}
            </span>`;
        labelData.push({ labelName: labelName, labelColor: labelColor });
        $('#label-data-input').val(JSON.stringify(labelData));
        $('#label-data').append(labelBadge);
        $('#label_name').val('');
    });
 
    // $('add-user-btn').on('click');

        // Toggle checked items in task list
        $(".hide-checked").on('click', function () {
            $(".check-list li input").each(function (i, el) {
                const isChecked = $(el).prop('checked');
                if (isChecked) {
                    $(el).closest('li').hide();
                    $('.hide-checked').addClass('show-checked').removeClass('hide-checked');
                    $(".show-checked").text('Show Checked Items');
                }
            });
        });

        $(document).on('click', ".show-checked", function () {
            console.log('ok');
            $(".check-list li").show();
            $('.show-checked').addClass('hide-checked').removeClass('show-checked');
            $(this).text('Show Checked Items');
        });
});

    // Task toggler
    export function task_card_script(){ 
        $('.task-label li strong').toggle();
        simpleToggle('.add-sub-task', '.toggle-sub-task', 'top');
        simpleToggle('.task-label', 'li strong', '');
        simpleToggle('.task-label', 'li', { class: 'col w-auto', direction: 'right' });
    
        $('.add-new-task').click(function () {
            $(this).closest('.position-relative').find('.add-new-task').hide();
            $(this).closest('.position-relative').find('.card-title-form').show();
            $(this).closest('.position-relative').addClass('pb-5');
        });
    
        $('.close-title-form').click(function () {
            $(this).closest('.position-relative').find('.card-title-form').hide();
            $(this).closest('.position-relative').find('.add-new-task').show();
            $(this).closest('.position-relative').removeClass('pb-5');
        });
    } 
    
// fix overlapping

/**
 * Helper function to avoid repetition
 */

// Resuable toggle function
function simpleToggle(target, toggleItem, extraParam) {
    $(target).on('click', function () {
        if (extraParam && extraParam.class) {
            return $(this).find(toggleItem).toggleClass(extraParam.class);
        }
        return $(this).find(toggleItem).toggle({ direction: extraParam.direction });
    });
}
