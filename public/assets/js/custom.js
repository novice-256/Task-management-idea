/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
/**
 *
 *  Toggle task form
 *
 */
$(()=>{
    // $('#add-task-form').hide()
        $('.toggle-btn').next().toggle()
    $('.toggle-btn').on('click', function () {
        let nameAttr = $(this).attr('name');
        $('.toggle-btn').next().not(`#toggle-task-${nameAttr}`).hide();
        $(`#toggle-task-${nameAttr}`).toggle();
    });

    $('#show-task-form').on('click',()=>{
        $('#add-task-form').toggle();
    })
    });
$(()=>{
    $('#close-task-form').on('click',()=>{
        $('#add-task-form').hide()

    })
    let labelColor
    let labelData =[]
    $('.label_color').on('click',function(){

        labelColor =$(this).val()
    })
    $('#add-label').on('click', e => {
    e.preventDefault();
    let labelName = $('#label_name').val();
    var labelBadge = `<span class="badge bg-${labelColor} text-white">
        <i class="fa-regular fa-circle-xmark mx-1" onClick="$(this).closest('.badge').remove()"></i>${labelName}
        </span>`;
        labelData.push({ labelName: labelName, labelColor: labelColor })
        $('#label-data-input').val(JSON.stringify(labelData));
        $('#label-data').append(labelBadge);
        $('#label_name').val('');

});


})

//  task togglers

$(()=>{
    $('.task-label li strong').toggle();

   simpleToggle('.add-sub-task' , '.toggle-sub-task','top')
   simpleToggle('.task-label' , 'li strong','')
   simpleToggle('.task-label' , 'li' ,{class:'col w-auto',direction:'right'})


})
function simpleToggle(target, toggleItem, extraParam) {
   $(target).on('click',function ()  {
       if (extraParam && extraParam.class) {
         return $(this).find(toggleItem).toggleClass(extraParam.class);
       }
       return $(this).find(toggleItem).toggle({direction :extraParam.direction });


   });
}


$('.add-new-task').click(function() {
    $(this).closest('.position-relative').find('.add-new-task').hide();
    $(this).closest('.position-relative').find('.card-title-form').show();
    $(this).closest('.position-relative').addClass('pb-5');
});

$('.close-title-form').click(function() {
    $(this).closest('.position-relative').find('.card-title-form').hide();
    $(this).closest('.position-relative').find('.add-new-task').show();
    $(this).closest('.position-relative').removeClass('pb-5');

});

$('.add-card').click(function() {
    console.log('Adding card...');
});

$('add-user-btn').on('click',)
